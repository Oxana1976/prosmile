<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function index()
    {
        return view('stripe.index');
    }

    public function checkout(Request $request)
    {
        $email = auth()->user()->email;
        $amount = (float)$request->get('amount') * 100;

        $product_name = 'my little tip';

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
                            'unit_amount' => $amount,
                        ],
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'payment',
                'success_url' => route('stripe.success'),
                'cancel_url' => route('stripe.index'),
            ]
        );

        return redirect()->away($session->url);
    }

    public function success()
    {
        if(auth()->user()->role->role === Role::PATIENT)
        {
            return redirect()->route('user.dashboard');
        }

        return redirect()->route('dashboard');
    }
}
