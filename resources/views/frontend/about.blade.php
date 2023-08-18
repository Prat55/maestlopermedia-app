@extends('frontend.includes.app')
@section('title', 'About Us')

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center bgc-black-with-lighting">
        <div class="container">
            <div class="banner-inner rpt-10">
                <h1 class="page-title wow fadeInUp delay-0-2s">
                    Abo<span>ut Us</span>
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="/">home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- <div class="banner-shapes">
                                        <div class="circle wow zoomInLeft delay-0-2s" data-wow-duration="2s"></div>
                                        <img class="shape-one" src="assets/images/shapes/hero-shape1.png" alt="Shape" />
                                        <img class="shape-two" src="assets/images/shapes/hero-shape2.png" alt="Shape" />
                                      </div>
                                      <div class="slider-shapes">
                                        <img class="shape dots one" src="assets/images/shapes/slider-dots.png" alt="Shape" />
                                        <img class="shape dots two" src="assets/images/shapes/slider-dots.png" alt="Shape" />
                                        <img class="shape wave-line" src="assets/images/shapes/slider-wave-line.png" alt="Shape" />
                                        <img class="shape circle" src="assets/images/shapes/slider-circle.png" alt="Shape" />
                                      </div> -->
    </section>
    <!-- Page Banner End -->

    <!-- What We Do Two Area start -->
    <section class="ww-do-two-area py-130 rel z-1">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="ww-do-two-content rmb-65 wow fadeInUp delay-0-2s">
                        <div class="section-title mb-30">
                            <span class="sub-title style-two mb-15">Welcome To Maestloper Media</span>
                            <h2>Quality & Experience IT Solution Company</h2>
                        </div>
                        <p>
                            Welcome to Maestloper Media, where innovation meets seamless
                            solutions. As a leading digital service provider, we are your
                            partners in navigating the dynamic landscape of the digital
                            world. From cutting-edge web development and mobile app
                            solutions to robust cloud services and digital marketing
                            strategies, we deliver tailored experiences that resonate with
                            your audience.
                        </p>
                        <div class="row pt-15">
                            <div class="col-sm-6">
                                <div class="feature-item-two border-right pe-sm-3">
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <h5>Customize Website</h5>
                                    <p>
                                        Pick a template customize anything answer or question
                                        website design just you.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item-two color-two">
                                    <div class="icon"><i class="fas fa-check"></i></div>
                                    <h5>Premium Design</h5>
                                    <p>
                                        Start your own blog, add an online store and accept
                                        bookings online always.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="ww-do-btns">
                                                <a href="about.html" class="theme-btn mt-15">Create Your Website
                                                  <i class="fas fa-angle-double-right"></i></a>
                                                <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play-text mt-15"><i
                                                    class="fas fa-play"></i> <span>Watch Videos</span></a>
                                              </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ww-do-two-images rel">
                        <div class="row">
                            <div class="col-sm-7 offset-1">
                                <img class="image-one wow fadeInUp delay-0-4s"
                                    src="https://maestloper-media1.netlify.app/assets/images/about.png" alt="What We Do" />
                            </div>
                            <div class="col-sm-4">
                                <img class="image-two wow fadeInUp delay-0-6s"
                                    src="{{ asset('user-assets/images/about/ww-do-two2.jpg') }}" alt="What We Do" />
                                <img class="image-three wow fadeInUp delay-0-8s"
                                    src="{{ asset('user-assets/images/about/ww-do-two3.jpg') }}" alt="What We Do" />
                            </div>
                        </div>
                        <div class="year-of-experience wow zoomIn delay-0-6s">
                            <span class="number">5+</span>
                            Years Experience In Digital Services
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What We Do Two Area end -->

    <!-- Statistics Four Area start -->
    <div class="statistics-area-four rel z-1">
        <div class="container">
            <div class="statistics-four-counters bgs-cover bgc-lighter"
                style="
              background-image: url({{ asset('user-assets/images/background/counter-bg.png') }});
            ">
                <div class="row medium-gap">
                    <div class="col-xl-3 col-sm-6">
                        <div class="counter-item mt-0 counter-text-wrap wow fadeInLeft delay-0-2s">
                            <i class="flaticon-startup"></i>
                            <span class="count-text" data-speed="3000" data-stop="350">0</span>
                            <span class="counter-title">Projects complete</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="counter-item for-margin counter-text-wrap wow fadeInLeft delay-0-4s">
                            <i class="flaticon-global"></i>
                            <span class="count-text" data-speed="3000" data-stop="100">0</span>
                            <span class="counter-title">World Wide Branch</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="counter-item mt-0 counter-text-wrap wow fadeInLeft delay-0-6s">
                            <i class="flaticon-rating"></i>
                            <span class="count-text" data-speed="3000" data-stop="120">0</span>
                            <span class="counter-title">Happy Customers</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="counter-item for-margin counter-text-wrap wow fadeInLeft delay-0-8s">
                            <i class="flaticon-trophy"></i>
                            <span class="count-text" data-speed="3000" data-stop="03">0</span>
                            <span class="counter-title">Years</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Statistics Four Area end -->

    <!-- Video Area start -->
    <section class="video-area bgc-black pt-250">
        <div class="container">
            <div class="row medium-gap align-items-end pt-80">
                <div class="col-lg-6">
                    <div class="video-part rmb-65 wow fadeInRight delay-0-2s">
                        <img src="https://i.vimeocdn.com/video/832655640-71c3056a6d0d155a7c05fcbb72e47f0b223f32b2a82523379595c8120e2d769d-d?mw=1800&mh=1013&q=70"
                            alt="Video" />
                        <a href="//player.vimeo.com/video/374265101?title=0&portrait=0&byline=0&autoplay=1&muted=true"
                            class="mfp-iframe video-play" tabindex="-1"><i class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-content text-white pb-95 rpb-115 wow fadeInLeft delay-0-2s">
                        <div class="section-title mb-30">
                            <h2>We Are Increasing Business Success With Technology</h2>
                        </div>
                        <ul class="list-style-three">
                            <li>Amazing communication.</li>
                            <li>Best trending designing experience</li>
                            <li>Email & Live chat.</li>
                            <li>Edit your mobile view</li>
                            <li>State of the art security</li>
                            <li>Optimize search engines</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Area End -->

    <!-- Call to Action Area start -->
    <section class="call-to-action-area bgc-white pt-150 pb-50">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-black mb-25 wow fadeInUp delay-0-2s">
                        <h2>Let’s Build Your Brand Today</h2>
                        <p>
                            Do you want to have a Digital Services that stands out and
                            impresses your clients? Then we are ready to help! Click the
                            button below to contact us and discuss your ideas.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 text-lg-end">
                    <a href="{{ route('contact') }}" class="theme-btn style-one mb-30 wow fadeInUp delay-0-4s">Let’s Get
                        Started
                        <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action Area End -->
@endsection
