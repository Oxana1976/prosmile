<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Payment;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use PDF;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;



class StripeController extends Controller

{

   
    public function index(int $id)
    {
        if (! Gate::any([Role::MEDIC, Role::CHIEF, Role:: SECRETARY])) {
            abort(403);
        }
        $appointment = Appointment::findOrFail($id);

        return view(
            'stripe.index',
            [
                'appointment' => $appointment,
            ]
        );
    }

    public function store(Request $request)
    {
        $appointment = Appointment::findOrFail($request->get('appointment_id'));

        Payment::create(
            [
                'patient_id' => $appointment->patient->id,
                'appointment_id' => $appointment->id,
                'amount' => (float)$request->get('amount'),
                'status' => Payment::PENDING,
                'stripe_charge_id' => null,
            ]
        );

        return redirect()->route('appointment.index');
    }

    public function checkout(int $id)
    {
        $appointment = Appointment::findOrFail($id);
        $patient = $appointment->patient;
        if (auth()->user()->role->role === Role::PATIENT && auth()->user()->id === $patient->user_id){
            $appointment = Appointment::findOrFail($id);

            $email = $appointment->patient->user->email;
            $amount = (float)$appointment->payment->amount;

            $product_name = 'Rendez-vous num ' . $appointment->id;

            Stripe::setApiKey(config('stripe.sk'));

            $session = Session::create(
                [
                    'payment_method_types' => ['card', 'bancontact'],
                    "customer_email" => $email,
                    'line_items' => [
                        [
                            'price_data' => [
                                'currency' => 'eur',
                                'product_data' => [
                                    'name' => $product_name,
                                ],
                                'unit_amount' => $amount * 100,
                            ],
                            'quantity' => 1,
                        ],
                    ],
                    'mode' => 'payment',
                    'success_url' =>
                        route('stripe.success', ['id' => $appointment->payment->id]) . '?session_id={CHECKOUT_SESSION_ID}',
                    'cancel_url' => route('stripe.index', ['id' => $appointment->id]),
                ]
                );

            return redirect()->away($session->url);
        }else  abort(403);
    }

    public function success(Request $request, int $id)
    {
        Stripe::setApiKey(config('stripe.sk'));

        $session = Session::retrieve($request->get('session_id'));

        $payment = Payment::findOrFail($id);

        if ($payment) {
            $payment->status = Payment::COMPLETED;
            $payment->stripe_charge_id = $session->payment_intent;
            $payment->save();
        }

        return redirect()->route('user.dashboard');
    }

    public function downloadInvoicePdf($id)
    {
        $payment = Payment::findOrFail($id);
        $appointment = Appointment::findOrFail($payment->appointment_id);
        $patient = $appointment->patient;
        $amount = $payment->amount;
        $invoiceData = [
            'appointment' => $appointment,
            'patient' => $patient,
            'amount' => $amount,
            'payment' => $payment,
        ];

        $pdf = PDF::loadView('invoices.pdf', $invoiceData);

        return $pdf->download('invoice_' . $payment->id . '.pdf');
    }
}
