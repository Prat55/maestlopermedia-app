@extends('frontend.includes.app')
@section('title', 'Home')

@section('content')
    <!-- Slider Section Start -->
    <section class="main-slider-area bgc-black-with-lighting rel z-1 mob-black">
        <div class="main-slider-active">

            <div class="slider-item">
                <div class="container" id="cont-slider">
                    <div class="slider-content">
                        <span class="sub-title">WE ARE MAESTLOPER MEDIA</span>
                        <h1>Crafting Web Design Solutions</h1>
                        <div class="slider-btns">
                            <a href="{{ route('contact') }}" class="theme-btn">Get Started Us <i
                                    class="fas fa-angle-double-right"></i></a>
                            <a href="{{ route('services') }}" class="theme-btn style-three">Explore Services <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-video"
                    style="background-image: url('{{ asset('user-assets/myimages/services-img/7.jpg') }}')">
                    <span class="video-title cd-headline clip">
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Web Designing</b>
                            <b>Development</b>
                        </span>
                    </span>
                </div>
            </div>
            <div class="slider-item">
                <div class="container" id="cont-slider">
                    <div class="slider-content">
                        <span class="sub-title">WE ARE MAESTLOPER MEDIA</span>
                        <h1>Archive of Innovative Graphic Designs</h1>
                        <div class="slider-btns">
                            <a href="{{ route('contact') }}" class="theme-btn">Get Started Us <i
                                    class="fas fa-angle-double-right"></i></a>
                            <a href="{{ route('services') }}" class="theme-btn style-three">Explore Services <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-video"
                    style="background-image: url('{{ asset('user-assets/images/slider/slide1.jpg') }}')">
                    <span class="video-title cd-headline clip">
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Graphics</b>
                            <b>Designing</b>
                        </span>
                    </span>
                </div>
            </div>
            <div class="slider-item">
                <div class="container" id="cont-slider">
                    <div class="slider-content">
                        <span class="sub-title">WE ARE MAESTLOPER MEDIA</span>
                        <h1>Top-tier for Marketing Solutions</h1>
                        <div class="slider-btns">
                            <a href="{{ route('contact') }}" class="theme-btn">Get Started Us <i
                                    class="fas fa-angle-double-right"></i></a>
                            <a href="{{ route('services') }}" class="theme-btn style-three">Explore Services <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-video"
                    style="background-image: url('{{ asset('user-assets/myimages/services-img/2.jpg') }}')">
                    <span class="video-title cd-headline clip">
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Digital</b>
                            <b>Marketing</b>
                        </span>
                    </span>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="main-slider-dots"></div>
        </div>
        <div class="slider-shapes">
            <img class="shape dots one" src="{{ asset('user-assets/images/shapes/slider-dots.png') }}" alt="Shape" />
            <img class="shape dots two" src="{{ asset('user-assets/images/shapes/slider-dots.png') }}" alt="Shape" />
            <img class="shape wave-line" src="{{ asset('user-assets/images/shapes/slider-wave-line.png') }}"
                alt="Shape" />
            <img class="shape circle" src="{{ asset('user-assets/images/shapes/slider-circle.png') }}" alt="Shape" />
        </div>

    </section>
    <!-- Slider Section End -->

    <!-- About Us Area start -->
    <section class="about-area-one pt-130 pb-125 rel z-1">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                    <div class="about-image-one bg-squire-shape rmb-85 wow fadeInUp delay-0-2s">
                        <img src="{{ asset('user-assets/images/about/about-one.jpg') }}" alt="About us" />
                        <img class="image-left" src="{{ asset('user-assets/images/shapes/image-left.png') }}"
                            alt="shape" />
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="about-content-one wow fadeInUp delay-0-4s">
                        <div class="section-title mb-45">
                            <span class="sub-title mb-15">About digital solutions</span>
                            <h2>Empower Your Digital Success with Our Services.</h2>
                        </div>
                        <ul class="list-style-one">
                            <li>
                                <div class="content">
                                    <h4>Company Mission</h4>
                                    <p>
                                        At Maestloper Media, our mission is to empower
                                        businesses with result-driven digital marketing
                                        solutions. We strive to maximize their online presence,
                                        foster meaningful connections with their audience, and
                                        drive sustainable growth through data-driven strategies
                                        and exceptional customer experiences.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <h4>Company Vision</h4>
                                    <p>
                                        At Maestloper Media, our vision Empowering global
                                        progress through innovative digital solutions, driving
                                        efficiency, connectivity, and transformation across
                                        industries while prioritizing user-centric design and
                                        technological excellence.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <h4>Our Philosophy</h4>
                                    <p>
                                        At Maestloper Media, our philosophy Fusing creativity
                                        and technology, we cultivate seamless experiences.
                                        Client success is our compass, guiding ethical,
                                        adaptable, and future-forward solutions that inspire
                                        growth, trust, and lasting partnerships."
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area end -->

    <!-- Design Featured Start -->
    <section class="design-feature-area overflow-hidden pt-130 pb-100 text-white bgc-black-with-lighting rel z-1">
        <div class="container">
            <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                <span class="sub-title mb-10">Core Design Featured</span>
                <h2>What we provider for Digital Services</h2>
            </div>
            <div class="row no-gap align-items-center">
                <div class="col-lg-3">
                    <div class="feature-left">
                        <div class="row">
                            <div class="col-lg-12 col-sm-6">
                                <div class="service-item style-three wow fadeInRight delay-0-2s">
                                    <div class="icon"><i class="flaticon-design"></i></div>
                                    <div class="content">
                                        <h4>
                                            <a href="{{ route('services') }}#graphic">Graphic Designing</a>
                                        </h4>
                                        <a class="more-btn" href="{{ route('services') }}#graphic"><i
                                                class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div class="service-item style-three wow fadeInRight delay-0-3s">
                                    <div class="icon"><i class="flaticon-web-page"></i></div>
                                    <div class="content">
                                        <h4>
                                            <a href="{{ route('services') }}#digital">Digital Marketing</a>
                                        </h4>
                                        <a class="more-btn" href="{{ route('services') }}#digital"><i
                                                class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-middle rmt-30">
                        <div class="image wow fadeInUp delay-0-2s">
                            <img class="round" src="{{ asset('user-assets/images/features/feature-middle.png') }}"
                                alt="Feature Middle" />
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="service-item style-three wow fadeInUp delay-0-3s">
                                    <div class="icon"><i class="flaticon-online"></i></div>
                                    <div class="content">
                                        <h4>
                                            <a href="{{ route('services') }}#software">Software Development</a>
                                        </h4>
                                        <a class="more-btn" href="{{ route('services') }}#software"><i
                                                class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="service-item style-three mt-30 wow fadeInUp delay-0-4s">
                                    <div class="icon">
                                        <i class="flaticon-web-programming"></i>
                                    </div>
                                    <div class="content">
                                        <h4>
                                            <a href="{{ route('services') }}#website">Website Designing</a>
                                        </h4>
                                        <a class="more-btn" href="{{ route('services') }}#website"><i
                                                class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="feature-right">
                        <div class="row">
                            <div class="col-lg-12 col-sm-6">
                                <div class="service-item style-three mt-100 wow fadeInLeft delay-0-2s">
                                    <div class="icon">
                                        <i class="flaticon-graphic-design"></i>
                                    </div>
                                    <div class="content">
                                        <h4>
                                            <a href="{{ route('services') }}#social">Social Media Marketing</a>
                                        </h4>
                                        <a class="more-btn" href="{{ route('services') }}#social"><i
                                                class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div class="service-item style-three wow fadeInLeft delay-0-3s">
                                    <div class="icon">
                                        <i class="flaticon-user-experience"></i>
                                    </div>
                                    <div class="content">
                                        <h4>
                                            <a href="{{ route('services') }}#production">Production</a>
                                        </h4>
                                        <a class="more-btn" href="{{ route('services') }}#production"><i
                                                class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="design-feature-shapes">
            <img class="shape dots" src="{{ asset('user-assets/images/shapes/slider-dots.png') }}" alt="Shape" />
            <img class="shape wave-line" src="{{ asset('user-assets/images/shapes/feature-wave-line.png') }}"
                alt="Shape" />
        </div>
    </section>
    <!-- Design Featured End -->

    <!-- Statistics Three Area start -->
    <section class="statistics-area-three bgs-cover pb-100 rel z-1">
        <div class="container pt-100">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-7">
                    <div class="statistics-three-content rmb-65 wow fadeInRight delay-0-2s">
                        <div class="row justify-content-center justify-content-xl-start">
                            <div class="col-xl-9">
                                <div class="section-title mb-60">
                                    <span class="sub-title mb-15">Company Statistics</span>
                                    <h2>We’ve some achievement from global partners</h2>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="counter-item style-two counter-text-wrap wow fadeInRight delay-0-3s">
                                    <i class="flaticon-startup"></i>
                                    <span class="count-text" data-speed="3000" data-stop="350">0</span>
                                    <span class="counter-title">Projects complete</span>
                                    <p>Project Done, Goals Achieved, Ready For Next Steps.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="counter-item style-two counter-text-wrap wow fadeInRight delay-0-5s">
                                    <i class="flaticon-global"></i>
                                    <span class="count-text" data-speed="3000" data-stop="04">0</span>
                                    <span class="counter-title">Experience</span>
                                    <p>
                                        Maestloper Media Completed more Than Four Years in
                                        Digital Services.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="counter-item style-two counter-text-wrap wow fadeInRight delay-0-7s">
                                    <i class="flaticon-rating"></i>
                                    <span class="count-text" data-speed="3000" data-stop="120">0</span>
                                    <span class="counter-title">Happy Customer</span>
                                    <p>Thrilled Customers, Our Motivation For Excellence!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="statistics-three-image bg-squire-shape mb-30 wow fadeInLeft delay-0-3s">
                        <img src="{{ asset('user-assets/images/about/statictics.jpg') }}" alt="Statictics" />
                        <img class="image-right" src="{{ asset('user-assets/images/shapes/image-right.png') }}"
                            alt="shape" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Statistics Three Area end -->

    <!-- Project Area start -->
    <section class="project-area-three py-130 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg10">
                    <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15">Recent Projects</span>
                        <h2>Where Images Speak Louder Than Words</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-three-active">
            @foreach ($posts as $post)
                <div class="project-item style-two wow fadeInUp delay-0-8s">
                    <div class="project-iamge">
                        <img src="/posts/{{ $post->media }}" alt="Project" />
                        <div class="project-over">
                            <a class="details-btn" href="{{ $post->link }}"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="project-content">
                        <h4>
                            <a href="{{ $post->link }}" target="_blank">{{ $post->title }}</a>
                        </h4>
                        <span class="category">{{ $post->service->service }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Project Area end -->

    <!-- Working Process Area start -->
    <section class="work-process-area pb-95 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center mb-55 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15">Working Process</span>
                        <h2>Our unique working process</h2>
                    </div>
                </div>
            </div>
            <div class="work-process-wrap rel z-1">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-5 col-sm-6">
                        <div class="work-process-item mt-0 wow fadeInUp delay-0-2s">
                            <div class="icon">
                                <span class="number">01</span>
                                <i class="flaticon-optimization"></i>
                            </div>
                            <h4>Gathering Info</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-sm-6">
                        <div class="work-process-item wow fadeInUp delay-0-4s">
                            <div class="icon">
                                <span class="number">02</span>
                                <i class="flaticon-link"></i>
                            </div>
                            <h4>Planning Idea</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-sm-6">
                        <div class="work-process-item mt-0 wow fadeInUp delay-0-6s">
                            <div class="icon">
                                <span class="number">03</span>
                                <i class="flaticon-data"></i>
                            </div>
                            <h4>Design Analysis</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-sm-6">
                        <div class="work-process-item mt-0 wow fadeInUp delay-0-8s">
                            <div class="icon">
                                <span class="number">04</span>
                                <i class="flaticon-star"></i>
                            </div>
                            <h4>Testing & Launch</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Working Process Area end -->

    <!-- CTA Area start -->
    <section class="call-to-action-area rel z-2">
        <div class="container">
            <div class="cta-inner bgs-cover"
                style="background-image: url('{{ asset('user-assets/images/background/cta-bg.jpg') }}')">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="cta-item wow fadeInLeft delay-0-2s">
                            <div class="icon"><i class="flaticon-target"></i></div>
                            <h4>Have any Project On Minds ?</h4>
                            <a href="{{ route('contact') }}" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="cta-item wow fadeInRight delay-0-2s">
                            <div class="icon"><i class="flaticon-target"></i></div>
                            <h4>We Provide Digital Services</h4>
                            <a href="{{ route('contact') }}" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Area end -->

    <!-- Testimonial Area Start -->
    <section class="testimonial-area-two rel z-1 mt-130 mb-120 pt-100">
        <div class="container for-middle-border">
            <div class="row justify-content-between align-items-center pb-90 rpb-35 wow fadeInUp delay-0-2s">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-title">
                        <span class="sub-title mb-15">Clients Testimonials</span>
                        <h2>Clients feedback</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="slider-arrow-btns text-lg-end">
                        <button class="work-prev">
                            <i class="far fa-arrow-left"></i>
                        </button>
                        <button class="work-next">
                            <i class="far fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="testimonial-two-active">
                <div class="testimonial-item-two wow fadeInUp delay-0-2s">
                    <div class="testimonial-author">
                        <img src="{{ asset('user-assets/clients/testi3.jpg') }}" alt="Author" />
                    </div>
                    <div class="testimonial-content">
                        <p>
                            The team at Maestloper Media is truly top-notch. Their
                            commitment to excellence and personalized approach to client
                            support have made a huge impact on our business.
                        </p>
                        <div class="author-description">
                            <span class="h5">Shushmita Singh</span>
                            <span class="designation">Co-Founder Of Utkarsh Salon</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item-two wow fadeInUp delay-0-4s">
                    <div class="testimonial-author">
                        <img src="{{ asset('user-assets/clients/testi4.jpg') }}" alt="Author" />
                    </div>
                    <div class="testimonial-content">
                        <p>
                            "Maestloper Media has a deep understanding of our industry and
                            has helped us establish a strong online presence."
                        </p>
                        <div class="author-description">
                            <span class="h5">Roshni Pasvan</span>
                            <span class="designation">Founder Of Rosh Makeover</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item-two wow fadeInUp delay-0-2s">
                    <div class="testimonial-author">
                        <img src="{{ asset('user-assets/clients/testi5.jpg') }}" alt="Author" />
                    </div>
                    <div class="testimonial-content">
                        <p>
                            "Working with Maestloper Media was a game-changer for our
                            production needs. Their professionalism, expertise, and
                            dedication resulted in a top-notch final product that truly
                            impressed our team."
                        </p>
                        <div class="author-description">
                            <span class="h5">Adarsh Jadhav </span>
                            <span class="designation">Managing Director At Rang Marathi</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item-two wow fadeInUp delay-0-4s">
                    <div class="testimonial-author">
                        <img src="{{ asset('user-assets/clients/testi2.png') }}" alt="Author" />
                    </div>
                    <div class="testimonial-content">
                        <p>
                            Their expertise in digital marketing and unparalleled customer
                            service have helped us achieve our marketing goals and drive
                            growth for our business.
                        </p>
                        <div class="author-description">
                            <span class="h5">Ashish Jaiswal </span>
                            <span class="designation">Co-Founder Of Shree Engineering</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->

    <!-- Contact Area Start -->
    <section class="contact-area overflow-hidden py-130 bgc-black-with-lighting rel z-1">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-info-area text-white rmb-75 wow fadeInLeft delay-0-2s">
                        <div class="section-title mb-55">
                            <h2>
                                Have any project on mind! feel free contact with us or
                                <span>say hello</span>
                            </h2>
                        </div>
                        <div class="contact-info-wrap">
                            <div class="contact-info-item">
                                <div class="icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Location</span>
                                    <b class="text">Office No.23, Ostwal Wonder City, Betegao Boisar(E)
                                        401501,Palghar, MH</b>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="icon">
                                    <i class="far fa-envelope-open-text"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Email Address</span>
                                    <b class="text"><a href="mailto:info@maestlopermedia.com"><span
                                                class="__cf_email__"
                                                data-cfemail="®í">info@maestlopermedia.com</span></a></b>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="icon">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Phone No</span>
                                    <b class="text"><a href="tel:+91 8149972219">+91 8149972219</a></b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    @include('admin.message')
                    <form id="contact-area-form" class="contact-area-form text-center wow fadeInRight delay-0-2s"
                        name="contact-area-form" action="/submit" method="post">
                        @csrf
                        <h4>Send us Message</h4>
                        <input type="text" id="full-name" name="name" class="form-control" value=""
                            placeholder="Full Name" required="" />
                        <input type="email" id="blog-email" name="email" class="form-control" value=""
                            placeholder="Email Address" required="" />
                        <input type="url" id="website" name="link" class="form-control" value=""
                            placeholder="Website" />
                        <input type="number" id="phone" name="phone" class="form-control" value=""
                            placeholder="Phone Number" />
                        <select name="select_req" id="select-subject" class="form-control" value="" required>
                            <option value="">
                                Select Service
                            </option>
                            @foreach ($services as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->service }}
                                </option>
                            @endforeach
                        </select>
                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Write Message"
                            required=""></textarea>



                        </select>
                        <button type="submit" class="theme-btn">
                            Send messages <i class="fas fa-angle-double-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact-shapes">
            <img class="shape circle" src="{{ asset('user-assets/images/shapes/slider-dots.png') }}" alt="Shape" />
            <img class="shape dots" src="{{ asset('user-assets/images/shapes/contact-dots.png') }}" alt="Shape" />
            <img class="shape wave-line" src="{{ asset('user-assets/images/shapes/contact-wave-line.png') }}"
                alt="Shape" />
        </div>
    </section>
    <!-- Contact Area End -->

    {{-- * Brands Logo Section Start* --}}
    <section class="trigger section gutter-horizontal bg-gray gutter-vertical--m gutter-horizontal">
        <div class="customer-logos slider">
            <div class="slide-in-right slide"><img
                    src="https://camo.githubusercontent.com/e4923bf90c04345e43aada42486ebc4f9a3e56eb/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f677265656e732d666f6f642d737570706c696572732e737667"
                    alt="Kinderhotel Aschauerhof" height="150" width="150"></a></div>
            <div class="slide-in-right slide"><img
                    src="https://camo.githubusercontent.com/1c89cd43ff20ebfdae6d7dfc615bed22897d4f2c/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f6175746f2d73706565642e737667"
                    height="150" width="150"></a></div>
            <div class="slide-in-right slide"><img
                    src="https://camo.githubusercontent.com/e7141f1aa02b6721a702b44a3b14b7383e4539ed/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f63726f6674732d6163636f756e74616e74732e737667"
                    height="150" width="150"></a></div>
            <div class="slide-in-right slide"><img
                    src="https://camo.githubusercontent.com/339edd4ba206d97f2bc7c03f7b7fd5a1b5c97111/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f63686573686972652d636f756e74792d68796769656e652d73657276696365732e737667"
                    height="150" width="150"></a></div>
            <div class="slide-in-right slide"><img
                    src="https://camo.githubusercontent.com/b9d65aaf5e5d1769f8bb0e04247ff6cfa0efa2ab/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f666173742d62616e616e612e737667"
                    height="150" width="150" alt="Tannenmuehle"></a></div>
            <div class="slide-in-right slide"><img
                    src="https://camo.githubusercontent.com/8d4fa451b4f47d2d10ff585a78f7fbd88f8f5530/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f73706163652d637562652e737667"
                    height="150" width="150" alt="Loeffele"></a></div>
            <div class="slide-in-right slide"><img
                    src="https://camo.githubusercontent.com/1e0d6f19906c869766d638227e7e3936aa9295c7/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f6265617574792d626f782e737667"
                    alt="Krone" height="150" width="150"></a></div>
            <div class="slide-in-right slide"><img
                    src="https://camo.githubusercontent.com/0072b8f37157c7e0238342d8105dcc2c9b1e2217/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f626162792d7377696d2e737667"
                    alt="Obereggen" height="150" width="150"></a></div>
            <div class="slide-in-right slide"><img
                    src="https://camo.githubusercontent.com/6b4aa115c3423ecbad9da2dba885d2d43084acfa/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f7468652d64616e63652d73747564696f2e737667"
                    alt="Ortnerhof" height="150" width="150"></a></div>
            <div class="slide-in-right slide"><img
                    src="https://camo.githubusercontent.com/b0e5c1e174dcb2911bc712f240f7163fe597628c/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f6a616d65732d616e642d736f6e732e737667"
                    alt="Ottonenhof" height="150" width="150"></a></div>
            <div class="slide-in-right slide"><img
                    src="https://camo.githubusercontent.com/370291c50b74eeab6fe66ccc9e6ca410fc117ed9/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f7468652d7765622d776f726b732e737667"
                    alt="Leiners" height="150" width="150"></a></div>
            <div class="slide-in-right slide"><img
                    src="https://camo.githubusercontent.com/0112d20015b4dad56fbb07088e76552042539151/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f70657465732d626c696e64732e737667"
                    alt="Seitenalm" height="150" width="150"></a></div>
            <div class="slide-in-right slide">
                <img src="https://camo.githubusercontent.com/e4eb289d352d7c4cbb8493d6a212448036e3e2d2/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f796f67612d626162792e737667"
                    alt="Testerhof" height="150" width="150">
                </a>
            </div>
    </section>
    {{-- * Brands Logo Section End* --}}
@endsection
