@extends('layouts.main')

@section('title', 'Liste des Docteurs')

@section('content')
    <main>
        <!--? slider Area Start-->
        
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">

                                    <h1 class="cd-headline letters scale">Nous prenons soin de votre 
                                        <strong class="cd-words-wrapper">
                                            <b class="is-visible" style="color:#427891;">santé</b>
                                            <b style="color:#427891;">confort</b>
                                            <b style="color:#427891;">sourire</b>
                                        </strong>
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay="0.1s">Nous nous engageons à fournir des soins dentaires de qualité,
                                         visant à améliorer votre confort et votre bien-être
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <h1 class="cd-headline letters scale">Nous prenons soin de votre
                                        <strong class="cd-words-wrapper">
                                            <b class="is-visible" style="color:#427891;">santé</b>
                                            <b style="color:#427891;">confort</b>
                                            <b style="color:#427891;">sourire</b>
                                        </strong>
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay="0.1s">Votre satisfaction et votre santé bucco-dentaire sont notre priorité absolue.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Start-->
        <div class="about-area section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2 mb-35">
                                <span style="color:#2c5061">À PROPOS DE NOTRE CABINET</span>
                                <h2>Bienvenue Dans Notre Cabinet</h2>
                            </div>
                           <p><strong>Nous nous engageons à offrir des soins dentaires de premier ordre, visant à améliorer votre confort et votre bien-être.
                             Notre équipe de professionnels dévoués utilise les dernières technologies et techniques pour assurer des traitements efficaces
                              et personnalisés. Que ce soit pour des soins préventifs, des traitements esthétiques ou des interventions plus complexes,
                               nous sommes là pour répondre à vos besoins et vous aider à maintenir un sourire sain et radieux.</strong></p>
                            <!-- <div class="about-btn1 mb-30" >
                                <a href="about.html" class="btn about-btn"  >Find Doctors .<i class="ti-arrow-right"></i></a>
                            </div>
                            <div class="about-btn1 mb-30">
                                <a href="about.html" class="btn about-btn2" style="background-color:#2c5061 !important;">Appointment <i class="ti-arrow-right"></i></a>
                            </div>
                            <div class="about-btn1 mb-30">
                                <a href="about.html" class="btn about-btn2">Emargency 1 <i class="ti-arrow-right"></i></a>
                            </div> -->

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img d-none d-lg-block">
                                <img src="assets/img/gallery/about2.png" alt="">
                            </div>
                            <div class="about-back-img ">
                                <img src="assets/img/gallery/department_man.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About  End-->
        <!--? department_area_start  -->

        <!-- depertment area end  -->
        <!--? Gallery Area Start -->

        <!-- Gallery Area End -->
        <!--? All startups Start -->

        <!--All startups End -->
        <!--? Team Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle text-center mb-100">
                            <span style="color:#2c5061">Nos médecins</span>
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
                                    <h3><a href="">{{ $doctor->user->firstname }} {{ $doctor->user->lastname }}</a></h3>
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
