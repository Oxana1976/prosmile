<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                                <h3>Tous les paiements</h3>
                                <ul>
                                    @forelse($payments as $payment)
                                        <li>Rendez-vous avec le docteur
                                            {{ $payment->appointment->doctor->user->firstname . ' ' . $payment->appointment->doctor->user->lastname }}
                                            le {{ $payment->appointment->date_time }}</li>
                                        <li>Status du paiement : {{ $payment->status }}</li>
                                        @if($payment->status === \App\Models\Payment::PENDING)
                                            <li>
                                                <a style="border:2px solid #0d4ac4; background-color:#0c84ff; padding:5px;" class="rounded" href="{{ route('stripe.prepare', ['id' => $payment->appointment->id]) }}">
                                                    Payer maintenant votre facture
                                                </a>
                                            </li>
                                        @endif
                                    @empty
                                        Pas encore de paiement
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
