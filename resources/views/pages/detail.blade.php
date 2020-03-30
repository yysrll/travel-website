@include('layouts.app')
@section('title', 'Detail Travel')

@section('content')
<!-- main content -->
<main>
    <!-- details header -->
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Paket Travel</li>
                            <li class="breadcrumb-item active">Details</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- card detail -->
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Bromo</h1>
                        <p>Republic of Indonesia</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="frontend/images/bromo1.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/images/bromo1.jpg">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="frontend/images/bromo2.jpg">
                                    <img src="frontend/images/bromo2.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/bromo2.jpg">
                                </a>
                                <a href="frontend/images/bromo3.jpg">
                                    <img src="frontend/images/bromo3.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/bromo3.jpg">
                                </a>
                                <a href="frontend/images/bromo4.jpg">
                                    <img src="frontend/images/bromo4.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/bromo4.jpg">
                                </a>
                                <a href="frontend/images/bromo5.jpg">
                                    <img src="frontend/images/bromo5.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/bromo5.jpg">
                                </a>
                                <a href="frontend/images/bromo6.jpg">
                                    <img src="frontend/images/bromo6.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/bromo6.jpg">
                                </a>
                            </div>
                        </div>
                        <h2>About Travel</h2>
                        <p>Mount Bromo (2,329m) is easily recognized as the entire top has been blown off and the 
                            crater inside constantly belches white sulfurous smoke. It sits inside the massive 
                            Tengger caldera. with a diameter of approximately 10km, surrounded by the Laut Pasir
                                (Sea of Sand) of fine volcanic sand. The overall effect is unsettlingly unearthly, especially
                                when compared to the lush green valleys all around the caldera.</p>
                        <p>Mount Bromo (2,329m) is easily recognized as the entire top has been blown off and the 
                            crater inside constantly belches white sulfurous smoke. It sits inside the massive 
                            Tengger caldera. with a diameter of approximately 10km, surrounded by the Laut Pasir
                                (Sea of Sand) of fine volcanic sand. The overall effect is unsettlingly unearthly, especially
                                when compared to the lush green valleys all around the caldera.</p>
                        <div class="row features">
                            <div class="col-md-4">
                                <img src="frontend/images/ic_event.png" alt="logo features" class="features-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Yadnya Kasada Fest</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="frontend/images/ic_language.png" alt="logo features" class="features-image">
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="frontend/images/ic_food.png" alt="logo features" class="features-image">
                                <div class="description">
                                    <h3>Food</h3>
                                    <p>Local Food</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img src="frontend/images/member1.png" alt="member" class="member-image mr-1">
                            <img src="frontend/images/member2.png" alt="member" class="member-image mr-1">
                            <img src="frontend/images/member3.png" alt="member" class="member-image mr-1">
                            <img src="frontend/images/member4.png" alt="member" class="member-image mr-1">
                            <img src="frontend/images/member5.png" alt="member" class="member-image mr-1">
                            <img src="frontend/images/member6.png" alt="member" class="member-image mr-1">
                        </div>
                        <hr>
                        <h2>Trip Information</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">22 Jan, 2020</td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">3D 2Y</td>
                            </tr>
                            <tr>
                                <th width="50%">Type of Trip</th>
                                <td width="50%" class="text-right">Open Trip</td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">$70.00/Person</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="checkout.html" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }} "></script>

<script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush
