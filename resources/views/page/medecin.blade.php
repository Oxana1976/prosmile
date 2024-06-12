@extends('layouts.main')

@section('title', 'Liste des Docteurs')

@section('content')
    <main>
        <!--? Team Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle text-center mb-100">
                            <span style="color:#2c5061">Nos Médecins</span>
                            <h2>Nos Spécialistes</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Loop through the doctors -->
                    @foreach ($doctors as $doctor)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                            <div class="single-team mb-30">
                                <div class="team-img">
                                    <!-- Display doctor's photo -->
                                    <img src="{{ asset('images/' . $doctor->photo_url) }}"
                                         alt="{{ $doctor->user->firstname }} {{ $doctor->user->lastname }}">
                                </div>
                                <div class="team-caption">
                                    <h3>
                                        <a href="{{ route('page.medecin_show', $doctor->id) }}">{{ $doctor->user->firstname }} {{ $doctor->user->lastname }}</a>
                                    </h3>
                                    <span>{{ $doctor->specialties->pluck('specialty')->implode(', ') }}</span>
                                    <!-- Team social -->
                                    <div class="team-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fas fa-globe"></i></a>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <!-- Team End -->
        <!--? Contact form Start -->

        <!-- Contact form End -->
        <!--? gallery Products Start -->

        <!-- gallery Products End -->
        <!--? Blog start -->

        <!-- Blog End -->
    </main>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
@endsection
