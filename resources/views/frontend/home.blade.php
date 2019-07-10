@extends('frontend.layouts.master')
@section('content')

{{-- <!-- Start Homepage Slider -->
<div class="homepage-slides-wrapper">
    <!-- Slider main container -->
    <div class="swiper-container swiper1">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide slide-bg-1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-6">
                                    <h1>With over 25 years of experience in auto services work</h1>
                                    <p>Value is a service of trust. The trust your customers have in you. The trust you have in your people, strategies and systems. And always delivering on expectation.</p>
                                    <a class="btn theme-btn" href="appointment.html">make an appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide slide-bg-2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-6">
                                    <h1>With over 25 years of experience in auto services work</h1>
                                    <p>Value is a service of trust. The trust your customers have in you. The trust you have in your people, strategies and systems. And always delivering on expectation.</p>
                                    <a class="btn theme-btn" href="appointment.html">make an appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide slide-bg-3">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-6">
                                    <h1>With over 25 years of experience in auto services work</h1>
                                    <p>Value is a service of trust. The trust your customers have in you. The trust you have in your people, strategies and systems. And always delivering on expectation.</p>
                                    <a class="btn theme-btn" href="appointment.html">make an appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination swiper-pagination1"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<!-- End Homepage Slider --> --}}
<!-- Start Homepage Slider -->
<div class="homepage-slides-wrapper">
    <!-- Slider main container -->
    <div class="swiper-container swiper1">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide slide-bg-1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-6">
                                    <h1>With over 25 years of experience in auto services work</h1>
                                    <p>Value is a service of trust. The trust your customers have in you. The trust you have in your people, strategies and systems. And always delivering on expectation.</p>
                                    <a class="btn theme-btn" href="appointment.html">make an appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide slide-bg-2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-6">
                                    <h1>With over 25 years of experience in auto services work</h1>
                                    <p>Value is a service of trust. The trust your customers have in you. The trust you have in your people, strategies and systems. And always delivering on expectation.</p>
                                    <a class="btn theme-btn" href="appointment.html">make an appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide slide-bg-3">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-6">
                                    <h1>With over 25 years of experience in auto services work</h1>
                                    <p>Value is a service of trust. The trust your customers have in you. The trust you have in your people, strategies and systems. And always delivering on expectation.</p>
                                    <a class="btn theme-btn" href="appointment.html">make an appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination swiper-pagination1"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<!-- End Homepage Slider -->
<!-- Start Services Area -->
<div class="content-block-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-title text-center">
                    <h2><span>Services & Features</span></h2>
                    <div class="car-icon"><img src="{{asset('')}}frontend/assets/img/cars.png" alt="car"></div>
                    <p>MotoTracker GPS Tracker’s intuitive, full-featured solutions help businesses better manage their drivers and vehicles by extracting accurate and actionable intelligence from real-time location and historical trips report.</p>
                </div>
            </div>
        </div>
        {{-- <div class="separator-line"></div> --}}
        {{-- =======================my include============ --}}
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="services-item-two">
                    <div class="services-item-mask">
                        <div class="pic">
                            <img src="{{asset('')}}frontend/assets/img/services-img-one.jpg" alt="Image">
                            <ul class="single-links">
                                <li><a href="#">Read more <i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="services-item-info">
                        <h3 class="title">Tran Repair</h3>
                        <span class="post">Lorem Ipsum</span>
                        <p class="description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="services-item-two">
                    <div class="services-item-mask">
                        <div class="pic">
                            <img src="{{asset('')}}frontend/assets/img/services-img-two.jpg" alt="Image">
                            <ul class="single-links">
                                <li><a href="#">Read more <i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="services-item-info">
                        <h3 class="title">Suspension Repair</h3>
                        <span class="post">Lorem Ipsum</span>
                        <p class="description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industryy.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="services-item-two">
                    <div class="services-item-mask">
                        <div class="pic">
                            <img src="{{asset('')}}frontend/assets/img/services-img-two.jpg" alt="Image">
                            <ul class="single-links">
                                <li><a href="#">Read more <i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="services-item-info">
                        <h3 class="title">Suspension Repair</h3>
                        <span class="post">Lorem Ipsum</span>
                        <p class="description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industryy.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="services-item-two">
                    <div class="services-item-mask">
                        <div class="pic">
                            <img src="{{asset('')}}frontend/assets/img/services-img-two.jpg" alt="Image">
                            <ul class="single-links">
                                <li><a href="#">Read more <i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="services-item-info">
                        <h3 class="title">Suspension Repair</h3>
                        <span class="post">Lorem Ipsum</span>
                        <p class="description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industryy.
                        </p>
                    </div>
                </div>
            </div>
        
            </div>
            {{-- <div class="col-sm-12 col-md-12 text-center">
                <a href="#" id="loadmore" class="btn theme-btn">view more</a>
            </div> --}}
        </div>
    </div>
    <!-- End Services Area -->
    
    <!-- Start Our Parners Area -->
    <div class="content-block-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center">
                        <h2><span>Our  Clients</span></h2>
                        <div class="car-icon"><img src="{{asset('')}}frontend/assets/img/cars.png" alt="car"></div>
                        <p>Our first priority is clients. As they use lots of vehicles they need to manage their fleet, locate them properly, keep their record of route, mileage, average speed, information regarding whether they have reached their destination or not, real time location, etc. for the ease of transport management. </p>
                    </div>
                </div>
            </div>
            <div class="partner-slides">
                <div class="single-partner-slide">
                    <a class="partners-logo" href="#"><img src="{{asset('')}}frontend/assets/img/partner-1.png" alt="Image Description"></a>
                </div>
                <div class="single-partner-slide">
                    <a class="partners-logo" href="#"><img src="{{asset('')}}frontend/assets/img/partner-2.png" alt="Image Description"></a>
                </div>
                <div class="single-partner-slide">
                    <a class="partners-logo" href="#"><img src="{{asset('')}}frontend/assets/img/partner-3.png" alt="Image Description"></a>
                </div>
                <div class="single-partner-slide">
                    <a class="partners-logo" href="#"><img src="{{asset('')}}frontend/assets/img/partner-4.png" alt="Image Description"></a>
                </div>
                <div class="single-partner-slide">
                    <a class="partners-logo" href="#"><img src="{{asset('')}}frontend/assets/img/partner-5.png" alt="Image Description"></a>
                </div>
                <div class="single-partner-slide">
                    <a class="partners-logo" href="#"><img src="{{asset('')}}frontend/assets/img/partner-6.png" alt="Image Description"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Parners Area -->
    
    @endsection