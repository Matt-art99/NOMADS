@extends('layouts.app')
@section('title', 'NOMADS | Home')
@section('content')
    {{--  <!-- Header -->  --}}
    <header class="text-center">
        <h1>
            Explore The Beautiful World
            <br>
            As Easy One Click
        </h1>
        
        <p class="mt-3">
            You will see beautiful 
            <br>
             moment you never see before
        </p>

        <a href="#" class="btn btn-get-started px-4 mt-4"></a>
    </header>

    <main>
        {{--  <!-- Statistic -->  --}}
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-md-2 col-3 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>

                <div class="col-md-2 col-3 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>

                <div class="col-md-2 col-3 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>

                <div class="col-md-2 col-3 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>

            </section>
        </div>

        {{--  <!-- Popular Heading -->  --}}
        <section class="section-popular" id="#popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center popular-heading">
                        <h2>Popular Travel</h2>
                        <p>Something that you never try
                        <br>
                        before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{--  <!-- Popular Content -->  --}}
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/travel-1.jpg')">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">DERATAN, BALI</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/travel-2.jpg')">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">BROMO, MALANG</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/travel-3.jpg')">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">NUSA PENIDA</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/travel-4.jpg')">
                            <div class="travel-country">UNITED ARAB EMIRATES</div>
                            <div class="travel-location">DUBAI</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Networks  --}}
        <section class="section-networks" id="section-networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 networks">
                        <h2>Our Networks</h2>
                        <p>
                            Companies are trusted us
                            <br>
                            more than just a trip
                        </p>
                    </div>
    
                    <div class="col-md-8 text-center networks-image">
                        <img src="{{ url('frontend/images/partner.png') }}" alt="Logo Partners">
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                            Moments were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center shadow-sm">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/avatar-1.png') }}" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Matt</h3>
                                <q>
                                    It was glorious and i couldn&apos;t 
                                    stop to say wohooo for every single 
                                    moment, Dankeeeee
                                </q>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>                            
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center shadow-sm">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/avatar-2.png') }}" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shayna</h3>
                                <q>
                                    I loved it, when the waves was shaking harder &#8212; I was scared too
                                </q>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Nusa Penida
                            </p>                            
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center shadow-sm">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/avatar-3.png') }}" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shabrina</h3>
                                <q>
                                    The trip was amazing, and i saw 
                                    something beautiful in that island,
                                    that makes me want to learn more
                                </q>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Karimun Java
                            </p>                            
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
<script src="{{ url('frontend/libraries/gsap/gsap.min.js') }}"></script>
<script src="{{ url('frontend/libraries/gsap/TextPlugin.min.js') }}"></script>
<script src="{{ url('frontend/libraries/gsap/ScrollTrigger.min.js') }}"></script>
<script src="{{ url('frontend/scripts/main.js') }}"></script>
@endpush