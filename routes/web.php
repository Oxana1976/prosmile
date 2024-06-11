<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AvailabilityController;
use App\Models\Availability;
use App\Models\Secretary;
use App\Http\Controllers\SecretaryController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PageController;

require __DIR__.'/auth.php';
Route::middleware('auth')->group(function () {
    Route::get('/dashboard/user', [ProfileController::class, 'index'])->name('user.dashboard');
    Route::get('/dashboard/user/payment', [ProfileController::class, 'payment'])->name('user.payment');

    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor.index');
    Route::get('/doctors/filter', [DoctorController::class, 'filter'])->name('doctors.filter');
    Route::get('/doctor/{id}', [DoctorController::class, 'show'])
            ->where('id', '[0-9]+')->name('doctor.show');
    Route::get('/doctor/edit/{id}', [DoctorController::class, 'edit'])
            ->where('id', '[0-9]+')->name('doctor.edit');
    Route::put('/doctor/{id}', [DoctorController::class, 'update'])
            ->where('id', '[0-9]+')->name('doctor.update');

    Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
    Route::post('/doctor', [DoctorController::class, 'store'])->name('doctor.store');

    Route::get('/availability', [AvailabilityController::class, 'index'])->name('availability.index');
    Route::get('/availability/create', [AvailabilityController::class, 'create'])->name('availability.create');
    Route::post('/availability', [AvailabilityController::class, 'store'])->name('availability.store');
    Route::get('/availability/{availability}/edit', [AvailabilityController::class, 'edit'])->name('availability.edit');
    Route::put('/availability/{availability}', [AvailabilityController::class, 'update'])->name('availability.update');
    Route::delete('/availability/{availability}', [AvailabilityController::class, 'destroy'])->name('availability.delete');

    Route::get('/secretary', [SecretaryController::class, 'index'])->name('secretary.index');
    Route::get('/secretary/create', [SecretaryController::class, 'create'])->name('secretary.create');
    Route::post('/secretary', [SecretaryController::class, 'store'])->name('secretary.store');
    Route::get('/secretary/edit/{id}', [SecretaryController::class, 'edit'])
            ->where('id', '[0-9]+')->name('secretary.edit');
    Route::put('/secretary/{id}', [SecretaryController::class, 'update'])
            ->where('id', '[0-9]+')->name('secretary.update');
    Route::delete('/secretary/{secretary}', [SecretaryController::class, 'destroy'])->name('secretary.delete');

    Route::get('/specialty', [SpecialtyController::class, 'index'])->name('specialty.index');
    Route::get('/specialty/create', [SpecialtyController::class, 'create'])->name('specialty.create');
    Route::post('/specialty', [SpecialtyController::class, 'store'])->name('specialty.store');
    Route::delete('/specialty/{specialty}', [SpecialtyController::class, 'destroy'])->name('specialty.delete');

    Route::get('/patient', [PatientController::class, 'index'])->name('patient.index');
    Route::get('/patient/{id}', [PatientController::class, 'show'])
            ->where('id', '[0-9]+')->name('patient.show');
    Route::get('/patient/appointment/{id}', [PatientController::class, 'show_appointment'])
            ->where('id', '[0-9]+')->name('patient.show_appointment');

    Route::get('/patient/filter', [PatientController::class, 'index'])->name('patients.index');
    Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');
    Route::post('/patient', [PatientController::class, 'store'])->name('patient.store');
    Route::get('/patient/edit/{id}', [PatientController::class, 'edit'])
            ->where('id', '[0-9]+')->name('patient.edit');
    Route::put('/patient/{id}', [PatientController::class, 'update'])
            ->where('id', '[0-9]+')->name('patient.update');

    Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
    Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('/appointment/edit/{id}', [AppointmentController::class, 'edit'])
        ->where('id', '[0-9]+')->name('appointment.edit');
    Route::put('/appointment/edit/{id}', [AppointmentController::class, 'update'])
        ->where('id', '[0-9]+')->name('appointment.update');
    Route::get('/appointment/image/delete/{id}', [AppointmentController::class, 'imageDelete'])
        ->where('id', '[0-9]+')->name('appointment.image.delete');

    Route::get('/payment/{id}', [StripeController::class, 'index'])->name('stripe.index');
    Route::post('/store', [StripeController::class, 'store'])->name('stripe.store');
    Route::get('/checkout/{id}', [StripeController::class, 'checkout'])->name('stripe.prepare');
    Route::get('/success/{id}', [StripeController::class, 'success'])->name('stripe.success');
});

Route::get('/appointment/create/', [AppointmentController::class, 'create'])->name('appointment.create');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');

Route::get('/', [PageController::class, 'index'])->name('page.index');
Route::get('/medecin', [PageController::class, 'show_all'])->name('page.show_all');
Route::get('/medecin/{id}', [PageController::class, 'medecin_show'])->name('page.medecin_show');

Route::get('/user/create_token', [UserController::class, 'createToken']);
Route::get('/user/store_token', [UserController::class, 'storeToken']);
