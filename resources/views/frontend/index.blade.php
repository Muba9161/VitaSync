@extends('frontend.layout.main')

@section('frontend-page-title', 'Home')

@section('frontend-active-page', 'Home')

@section('frontend-main-section')

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text">
                                <h3> <span>Family Health</span> <br>
                                    Care For All </h3>
                                <p>Quality, personalized healthcare for your entire family.</p>
                                <a href="#" class="boxed-btn3">See Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text">
                                <h3> <span>Family Wellness</span> <br>
                                    For Every Stage </h3>
                                <p>Comprehensive care, tailored to your family's needs.</p>
                                <a href="#" class="boxed-btn3">Explore Our Care</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start -->
    <div class="service_area">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-electrocardiogram"></i>
                        </div>
                        <h3>Hospitality</h3>
                        <p>Clinical excellence must be the priority for any health care service provider.</p>
                        <a href="#" class="boxed-btn3-white">Apply For a Bed</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-emergency-call"></i>
                        </div>
                        <h3>Emergency Care</h3>
                        <p>Clinical excellence must be the priority for any health care service provider.</p>
                        <a href="#" class="boxed-btn3-white">112</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-first-aid-kit"></i>
                        </div>
                        <h3>Chamber Service</h3>
                        <p>Clinical excellence must be the priority for any health care service provider.</p>
                        <a href="#" class="boxed-btn3-white">Make an Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- welcome_docmed_area_start -->
    <div class="welcome_docmed_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                        <div class="thumb_1">
                            <img src="{{ asset('assets/img/about/1.png') }}" alt="">
                        </div>
                        <div class="thumb_2">
                            <img src="{{ asset('assets/img/about/2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h2>Welcome to VitaSync</h2>
                        <h3>Your Path to <br>
                            Optimal Health</h3>
                        <p>We're dedicated to providing exceptional healthcare, focusing on your well-being with
                            personalized attention and expert medical services.</p>
                        <ul>
                            <li><i class="flaticon-right"></i> Comprehensive Health Assessments</li>
                            <li><i class="flaticon-right"></i> Advanced Treatment Options</li>
                            <li><i class="flaticon-right"></i> Personalized Wellness Plans</li>
                        </ul>
                        <a href="#" class="boxed-btn3-white-2">Discover Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome_docmed_area_end -->

    <!-- offers_area_start -->
    <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Our Departments</h3>
                        <p>Your well-being is our priority. <br> We are committed to providing you with expert care and
                            support.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="{{ asset('assets/img/department/1.png') }}" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Eye Care</a></h3>
                            <p>Protect and enhance your vision with our comprehensive eye care services.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="{{ asset('assets/img/department/2.png') }}" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Physical Therapy</a></h3>
                            <p>Protect and enhance your vision with our comprehensive eye care services.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="{{ asset('assets/img/department/3.png') }}" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Dental Care</a></h3>
                            <p>Protect and enhance your vision with our comprehensive eye care services.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="{{ asset('assets/img/department/4.png') }}" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Diagnostic Test</a></h3>
                            <p>Protect and enhance your vision with our comprehensive eye care services.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="{{ asset('assets/img/department/5.png') }}" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Skin Surgery</a></h3>
                            <p>Protect and enhance your vision with our comprehensive eye care services.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="{{ asset('assets/img/department/6.png') }}" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Surgery Service</a></h3>
                            <p>Protect and enhance your vision with our comprehensive eye care services.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->

    <!-- testmonial_area_start -->
    <div class="testmonial_area">
        <div class="testmonial_active owl-carousel">
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>This place exceeded my expectations. The staff were incredibly helpful, and the
                                    facilities were top-notch. I especially appreciated the attention to detail and the
                                    personalized service. I highly recommend it!
                                </p>
                                <div class="testmonial_author">
                                    <h4>Mathew Charles</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_2 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>This place exceeded my expectations. The staff were incredibly helpful, and the
                                    facilities were top-notch. I especially appreciated the attention to detail and the
                                    personalized service. I highly recommend it!
                                </p>
                                <div class="testmonial_author">
                                    <h4>Scralet Berg</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>This place exceeded my expectations. The staff were incredibly helpful, and the
                                    facilities were top-notch. I especially appreciated the attention to detail and the
                                    personalized service. I highly recommend it!
                                </p>
                                <div class="testmonial_author">
                                    <h4>Shavez Qureshi</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end -->

    <!-- business_expert_area_start  -->
    <div class="business_expert_area">
        <div class="business_tabs_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                    role="tab" aria-controls="home" aria-selected="true">Excellent Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Qualified Doctors</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Emergency Departments</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="border_bottom">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="flaticon-first-aid-kit"></i>
                                    </div>
                                    <h3>Leading Edge Care for Your Family</h3>
                                    <p>We provide advanced, family-centered healthcare, utilizing the latest technology and
                                        medical expertise to ensure your family's well-being.</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="{{ asset('assets/img/about/business.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="flaticon-first-aid-kit"></i>
                                    </div>
                                    <h3>Leading Edge Care for Your Family</h3>
                                    <p>We provide advanced, family-centered healthcare, utilizing the latest technology and
                                        medical expertise to ensure your family's well-being.</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="{{ asset('assets/img/about/business.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="flaticon-first-aid-kit"></i>
                                    </div>
                                    <h3>Leading Edge Care for Your Family</h3>
                                    <p>We provide advanced, family-centered healthcare, utilizing the latest technology and
                                        medical expertise to ensure your family's well-being.</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="{{ asset('assets/img/about/business.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- business_expert_area_end  -->


    <!-- expert_doctors_area_start -->
    <div class="expert_doctors_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="doctors_title mb-55">
                        <h3>Expert Doctors</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="expert_active owl-carousel">
                        @foreach ($doctors as $doctor)
                            <div class="single_expert">
                                <div class="expert_thumb">
                                    @if (!is_null($doctor->profile_picture))
                                        <img src="{{ asset('storage/profile_pictures/' . $doctor->profile_picture) }}"
                                            alt="">
                                    @else
                                        <img src="{{ asset('assets/img/experts/1.png') }}" alt="">
                                    @endif
                                </div>
                                <div class="experts_name text-center">
                                    <h3>{{ $doctor->name }}</h3>
                                    @if (!is_null($doctor->twitter_link))
                                        <span>{{ $doctor->twitter_link }}</span> <br>
                                    @else
                                        <span> Jhola-Chaap Doctor Saala </span> <br>
                                    @endif
                                    @if ($doctor->fees == '0.00')
                                        <span>Fees: Free</span> <br>
                                    @else
                                        <span>Fees: ₹{{ $doctor->fees }}</span> <br>
                                    @endif
                                    <form action="{{ route('appoint.store', ['id' => $doctor->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="boxed-btn3 px-6 py-2 my-3">Book Appointment</button>
                                    </form>

                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- expert_doctors_area_end -->

    <!-- Emergency_contact start -->
    <div class="Emergency_contact">
        <div class="conatiner-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-6">
                    <div
                        class="single_emergency d-flex align-items-center justify-content-center emergency_bg_1 overlay_skyblue">
                        <div class="info">
                            <h3>For Any Emergency Contact</h3>
                            {{-- <p>Esteem spirit temper too say adieus.</p> --}}
                        </div>
                        <div class="info_button">
                            <a href="#" class="boxed-btn3-white">112</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div
                        class="single_emergency d-flex align-items-center justify-content-center emergency_bg_2 overlay_skyblue">
                        <div class="info">
                            <h3>Make an Online Appointment</h3>
                            {{-- <p>Esteem spirit temper too say adieus.</p> --}}
                        </div>
                        <div class="info_button">
                            <a href="#" class="boxed-btn3-white">Make an Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Emergency_contact end -->
@endsection
