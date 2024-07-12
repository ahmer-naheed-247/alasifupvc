@extends('app')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('img/slider(1).jpeg') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white mb-3 animated slideInDown">Welcome To Al-Asif uPVC Aluminium Window's & Doors Solutions</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Best uPVC Aluminium Window's & Doors Solutions</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">All kinds of 12mm Doors, Shower, Cabin and Glass Work</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('img/slider(2).jpeg') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white mb-3 animated slideInDown">Welcome To Al-Asif uPVC Aluminium Window's & Doors Solutions</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Best uPVC Aluminium Window's & Doors Solutions</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">All kinds of 12mm Doors, Shower, Cabin and Glass Work</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('img/slider(2).jpeg') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white mb-3 animated slideInDown">Welcome To Al-Asif uPVC Aluminium Window's & Doors Solutions</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Best uPVC Aluminium Window's & Doors Solutions</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">All kinds of 12mm Doors, Shower, Cabin and Glass Work</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">01</h1>
                    </div>
                    <h5>Safe</h5>
                </div>
                <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">02</h1>
                    </div>
                    <h5>Dust Free</h5>
                </div>
                <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">03</h1>
                    </div>
                    <h5>Sound Proof</h5>
                </div>
                <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">04</h1>
                    </div>
                    <h5>Water Proof</h5>
                </div>
                <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">05</h1>
                    </div>
                    <h5>Fire Redundant</h5>
                </div>
                <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">06</h1>
                    </div>
                    <h5>Heat Insulation</h5>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Feature Start -->



    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0" id="about_us">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-12 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-center">
                            <h1 class="display-5 mb-4">About Us</h1>
                        </div>
                        <p class="mb-4 pb-2">Al-Asif uPVC has been in the business of fabrication and installation of uPVC (Unplasticised Poly Vinyl Chloride) products for almost a decade. We are a business division of Profiles. Al-Asif uPVC is an established and reliable company with an excellent record of providing quality service to its clients. At Al-Asif uPVC we believe in providing our customers with products at competitive prices and giving them value for money. Our staff is well trained in all aspects of the business and is geared to provide the best possible solutions to our customers. Our product line consists of high quality imported material and includes the following items: - Sliding Windows - Openable Windows - Sliding Doors - Openable uPVC full or half panel and Glass Doors - Shower Cabins/Vanities - Ventilators - uPVC Partitions Al-Asif uPVC is providing services to individuals and large organizations throughout the country by fabricating in our factory the best quality of uPVC windows, doors, single or double glazed windows with Italian spacer, French windows with Georgian bars and tempered glass. Our commitment is to provide high quality products, competitive prices with minimum turnaround time and after sales services to our clients.</p>
                        <div class="row g-4 mb-4 pb-2">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-users fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium mb-0">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium mb-0">Projects Done</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container" id="our_services">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="uPVC_Doors">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img/services/upvc_doors_designs/door_designs(33).jpeg') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="upvc-doors-design">uPVC doors design</h4>
                            <p>Single glazed, Double glazed and Double glazed with Georgian Bars, Full and half panel doors.</p>
                            <a class="btn btn-link" href="{{ route('upvc_details') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item" id="sky_lights">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/services/led_mirrors/led_mirrors(5).jpeg') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="led-light-mirror">LED Light Mirror Works</h4>
                            <p>Illuminate your space with our sleek and energy-efficient skylights, perfect for any home or office.                            </p>
                            <a class="btn btn-link" href="{{ route('led_mirrors') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item" >
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img\services\diamond_cut_designs\4.jpg') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-2" id="diamond-cut-work">Diamond cut work glass work</h4>
                            <p>
                                Intricate glasswork featuring diamond-cut patterns. 
                            </p>
                            <a class="btn btn-link" href="{{ route('diamond_cute_glass_work') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item" >
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img\services\12_mm_glass_work\15.jpg') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-2"id="12-mm-glass-work">12 mm Glass work</h4>
                            <p>
                                Durable and stylish 12mm glasswork with intricate designs and superior clarity. 
                            </p>
                            <a class="btn btn-link" href="{{ route('12_mm_glass_work') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item" >
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img\services\12_mm_glass_sky_light\1.jpg') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-2" id="12mm-glass-sky-light">12mm Glass Sky Light</h4>
                            <p>
                                Sturdy 12mm glass skylight providing excellent natural light and modern aesthetics. 
                            </p>
                            <a class="btn btn-link" href="{{ route('12_mm_glass_sky_light') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item" >
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img\services\glazed_windows\1.jpg') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-2" id="12mm-glass-sky-light">uPVC single glass & Double glazed French windows</h4>
                            <p>
                                uPVC windows available in single glass/double glazed options. 
                            </p>
                            <a class="btn btn-link" href="{{ route('glazed_windows') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- 
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="sliding_windows">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/service-4.jpg') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Sliding Windows</h4>
                            <p>Experience seamless indoor-outdoor transitions with our smooth and stylish sliding windows.
                            </p>
                            <a class="btn btn-link" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item" id="upvc_partitions">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/service-5.jpg') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">uPVC Partitions</h4>
                            <p>Experience seamless indoor-outdoor transitions with our smooth and stylish sliding windows.
                            </p>
                            <a class="btn btn-link" href="#">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/service-6.jpg') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Openable Windows</h4>
                            <p>Enjoy fresh air and effortless operation with our high-quality openable windows, blending functionality design.</p>
                            <a class="btn btn-link" href="#">View Details</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Why Choose Us</h1>
                        </div>
                        <p class="mb-4 pb-2">We specialize in crafting sustainable and adaptable environments for corporate, residential, cultural, and diverse settings, seamlessly integrating with their natural surroundings for optimal efficiency.</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Quality</p>
                                        <h5 class="mb-0">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-user-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Creative</p>
                                        <h5 class="mb-0">Designers</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Free</p>
                                        <h5 class="mb-0">Consultation</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-headphones fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Customer</p>
                                        <h5 class="mb-0">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/services/upvc_doors_designs/door_designs(14).jpeg') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Projects Start -->
    <div class="container-xxl py-5" id="our_projects">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Projects</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="commodor_hamza">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\commodor_hamza\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="commodor_hamza">Commodore Hamza sab Nevel Encourage</h4>
                            <a class="btn btn-link" href="{{ route('commodor_hamza') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="advocate_jaleel">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\advocate_jaleel\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="advocate_jaleel">Advocate Jaleel sab Murree</h4>
                            <a class="btn btn-link" href="{{ route('advocate_jaleel') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="core_commander_office">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\core_commander_office\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="core_commander_office">Core Commander office morgah</h4>
                            <a class="btn btn-link" href="{{ route('core_commander_office') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="brid_khaleeq">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\brid_khaleeq\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="brid_khaleeq">Brig Khaleeq ul Rehman DHA 2 ISB</h4>
                            <a class="btn btn-link" href="{{ route('brid_khaleeq') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="capt_emad">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\capt_emad\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="capt_emad">Captain Emad prefeb office humak</h4>
                            <a class="btn btn-link" href="{{ route('capt_emad') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="core_cmdr_faheem">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\core_cmdr_faheem\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="core_cmdr_faheem">Core Commander Faheem Sab Nevel Encourage</h4>
                            <a class="btn btn-link" href="{{ route('core_cmdr_faheem') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="general_umar">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\general_umar\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="general_umar">General Umar Hayat wah cantt</h4>
                            <a class="btn btn-link" href="{{ route('general_umar') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="jamia_masjid_quba">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\jamia_masjid_quba\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="jamia_masjid_quba">Jamia Masjid Quba Charah chowk</h4>
                            <a class="btn btn-link" href="{{ route('jamia_masjid_quba') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="tahir_taxila">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\tahir_taxila\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="tahir_taxila">Tahir saab taxila Rawalpindi</h4>
                            <a class="btn btn-link" href="{{ route('tahir_taxila') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="cntmnt_host_saadar">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\cntmnt_host_saadar\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="cntmnt_host_saadar">Cantonment Hospital Saddar Rawalpindi</h4>
                            <a class="btn btn-link" href="{{ route('cntmnt_host_saadar') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="masood_saab_chk_shahzad">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\masood_saab_chk_shahzad\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="masood_saab_chk_shahzad">Mr. Masooud Saab Chak Shahzad Farm House</h4>
                            <a class="btn btn-link" href="{{ route('masood_saab_chk_shahzad') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="colonel_shams_naval">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\colonel_shams_naval\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="colonel_shams_naval">Colonel Shams Nevel Farm House</h4>
                            <a class="btn btn-link" href="{{ route('colonel_shams_naval') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="colonel_ayaz_dha">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\colonel_ayaz_dha\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="colonel_ayaz_dha">Colonel Ayaz saab DHA 2 isb</h4>
                            <a class="btn btn-link" href="{{ route('colonel_ayaz_dha') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="core_cmd_offc_raheema_abad">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\core_cmd_offc_raheema_abad\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="core_cmd_offc_raheema_abad">Core Commander Office Raheema Abad RWP</h4>
                            <a class="btn btn-link" href="{{ route('core_cmd_offc_raheema_abad') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="major_hassan_margalla">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\major_hassan_margalla\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="major_hassan_margalla">Major Hassan Margalla Farm house ISB</h4>
                            <a class="btn btn-link" href="{{ route('major_hassan_margalla') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="sohail_saab_dudyal">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\sohail_saab_dudyal\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="sohail_saab_dudyal">Sohail Saab Dudyal Azad Kashmir</h4>
                            <a class="btn btn-link" href="{{ route('sohail_saab_dudyal') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="aps_school_hamayu">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\aps_school_hamayu\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="aps_school_hamayu">Aps school humayu campus kachari Chowk rwp</h4>
                            <a class="btn btn-link" href="{{ route('aps_school_hamayu') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="colonel_shah_rukh">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\colonel_shah_rukh\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="colonel_shah_rukh">Colonel Shah Rukh DHA 2 isb</h4>
                            <a class="btn btn-link" href="{{ route('colonel_shah_rukh') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="general_Hasan_dha">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\general_Hasan_dha\1.jpg') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="general_Hasan_dha">General Hasan DHA 2 ISB</h4>
                            <a class="btn btn-link" href="{{ route('general_Hasan_dha') }}">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" id="zumarad_khan_sweet_home">
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img" src="{{ asset('img\projects\zumarad_khan_sweet_home\1.jfif') }}" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3" id="zumarad_khan_sweet_home">Zumarad Khan Sweet Home ISB</h4>
                            <a class="btn btn-link" href="{{ route('zumarad_khan_sweet_home') }}">View Details</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('img/portfolio-1.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('img/portfolio-1.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">General Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('img/portfolio-2.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('img/portfolio-2.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('img/portfolio-3.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('img/portfolio-3.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">General Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('img/portfolio-4.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('img/portfolio-4.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('img/portfolio-5.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('img/portfolio-5.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">General Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('img/portfolio-6.jpg') }}" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('img/portfolio-6.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                            <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Projects End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp mt-5" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">CEO</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="{{ asset('img\owner.jpg') }}" style="width: 400px; height: 400px;">
                    <div class="testimonial-text text-center p-4">
                        <p>
                            We belive in providing quality over quantity. Anything less then perfect is not acceptable for us!
                        </p>
                        <h5 class="mb-1">Asif Shahzad</h5>
                        <span class="fst-italic">Owner</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Contact us start -->
    <div class="container-xxl py-5 wow fadeInUp mt-5" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center" id="contact_us">
                <h1 class="display-5 mb-5">Contact Us</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item text-center">
                    <div class="testimonial-text text-center p-4">
                        <h5>Contact Details</h5>
                        <div class="px-2 text-start">
                            <span class="h-100 d-inline-flex align-items-center py-2 me-2">
                                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                                <small>Ghouri Town 4c/2, Shareefabad Road, Jinnah Town Near Dare Arqam School</small>
                            </span>
                            <span class="h-100 d-inline-flex align-items-center py-2">
                                <small class="far fa-clock text-primary me-2"></small>
                                <small>Mon - Saturday : 09.00 AM - 09.00 PM</small>
                            </span>
                            <br>
                            <span class="h-100 d-inline-flex align-items-center py-2">
                                <small class="fa fa-phone-alt text-primary me-2"></small>
                                <small>03125482656</small>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact us end -->
@endsection