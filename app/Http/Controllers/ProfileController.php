<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Appointment;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    private const LIMIT_APPOINTMENT_DISPLAY = 100;

    public function index(): View
    {
        $appointments = Auth::user()->patient->appointments;
        $passed_appointments = [];
        $future_appointments = [];

        if($appointments)
        {
            $passed_appointments = $appointments
                ->where('date_time', '<', Carbon::now())
                ->where('status', Appointment::STATUS_COMPLETED)
                ->sortByDesc('date_time')
                ->take(self::LIMIT_APPOINTMENT_DISPLAY);

            $future_appointments = $appointments
                ->where('date_time', '>=', Carbon::now())
                ->where('status', Appointment::STATUS_BOOKED)
                ->sortByDesc('date_time')
                ->take(self::LIMIT_APPOINTMENT_DISPLAY);
        }


        return view(
            'user_dashboard',
            [
                'passed_appointments' => $passed_appointments,
                'future_appointments' => $future_appointments,
            ]
        );
    }

    public function dashboard(): View
    {
        if (!Gate::any([Role::MEDIC, Role::CHIEF, Role:: SECRETARY])) {
            abort(403);
        }

        $currentRole = Auth::user()->role->role;
        $passed_appointments = [];
        $future_appointments = [];

        $appointments = match ($currentRole) {
            Role::MEDIC => Auth::user()->doctor->appointments,
            Role::SECRETARY, Role::CHIEF => Appointment::all(),
            default => false,
        };

        if($appointments)
        {
            $passed_appointments = $appointments
                ->where('date_time', '<', Carbon::now())
                ->sortByDesc('date_time')
                ->take(self::LIMIT_APPOINTMENT_DISPLAY);

            $future_appointments = $appointments
                ->where('date_time', '>=', Carbon::now())
                ->sortByDesc('date_time')
                ->take(self::LIMIT_APPOINTMENT_DISPLAY);
        }

        return view(
            'dashboard',
            [
                'passed_appointments' => $passed_appointments,
                'future_appointments' => $future_appointments,
            ]
        );
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
