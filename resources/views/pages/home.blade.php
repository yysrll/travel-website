@extends('layouts.app')

@section('title')
Lanjalan
@endsection

@section('content')

<!-- header -->
<header class="text-center">
    <h1>Explore the Beautiful World <br>
        As Easy One Click</h1>
    <p class="mt-3">You will see beautiful <br>
        moment you never see before</p>
    <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
</header>

<!-- main content -->
<main>
    <!-- statistic -->
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>

    <!-- popular -->
    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Wisata Popular</h2>
                    <p>Something that you never try <br>
                        before in this world</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular1.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">DERATAN, BALI</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ url('/detail') }}" class="btn btn-travel-details">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular2.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">BOROBUDUR, MAGELANG</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ url('/detail') }}" class="btn btn-travel-details">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular3.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">RAJA AMPAT,PAPUA</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ url('/detail') }}" class="btn btn-travel-details">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular4.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">BROMO, MALANG</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ url('/detail') }}" class="btn btn-travel-details">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- networks -->
    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>Companies  are trusted us <br>
                        more than just a trip</p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="frontend/images/partner.png" alt="Logo Partner" class="img-partner">
                </div>
            </div>
        </div>
    </section>

    <!-- testimoni -->
    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>Moment were giving them <br>
                        the best experience</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-content container" id="testimonialContent">
        <div class="section-popular-travel row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="{{ url('frontend/images/testimonial1.png') }}" alt="User" class="mb-4 circle-rounded">
                        <h3 class="mb-4">Yusril</h3>
                        <p class="testimonial">" It was glorius and i        could
                            not stop to say wohoo for
                            every single moment
                            Dankeeeee "</p>
                        <hr>
                        <p class="trip-to mt-2">Trip to Ubud, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="{{ url('frontend/images/testimonial2.png') }}" alt="User" class="mb-4 circle-rounded">
                        <h3 class="mb-4">Jhon</h3>
                        <p class="testimonial">" The trip was amazing and
                            I saw something beautiful in
                            that island that makes me
                            want to learn more "</p>
                        <hr>
                        <p class="trip-to mt-2">Trip to Tokyo, Japan</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="{{ url('frontend/images/testimonial3.png') }}" alt="User" class="mb-4 circle-rounded">
                        <h3 class="mb-4">Yusril</h3>
                        <p class="testimonial">" I lovet it when the         waves
                            was shaking harder - I was
                            scared too "</p>
                        <hr>
                        <p class="trip-to mt-2">Trip to Kuta, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>

                <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
            </div>
        </div>
    </section>

</main>


@endsection