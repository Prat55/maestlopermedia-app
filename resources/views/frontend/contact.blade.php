@extends('frontend.includes.app')
@section('title', 'Contact Us')

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center bgc-black-with-lighting">
        <div class="container">
            <div class="banner-inner rpt-10">
                <h1 class="page-title wow fadeInUp delay-0-2s">
                    Conta<span>ct Us</span>
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="index.html">home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- Contact Us Page Area start -->
    <section class="contact-us-page-area py-130">
        <div class="container">
            <div class="row align-items-end justify-content-between">
                <div class="col-lg-7">
                    <div class="contact-content rmb-65 wow fadeInRight delay-0-2s">
                        <div class="section-title mb-25">
                            <span class="sub-title style-two mb-15">Contact Us</span>
                            <h2>
                                Let’s Start New Project or work Together! Contact With us
                            </h2>
                        </div>
                        <p>
                            We value your feedback and strive to provide a timely and
                            helpful response to every inquiry. Our dedicated team is eager
                            to assist you, whether you're seeking information about our
                            products/services, have a technical question, or simply want
                            to share your thoughts.
                        </p>
                        <form id="contactForm" class="contactForm z-1 rel" action="assets/php/form-process.php"
                            name="contactForm" method="post">
                            <div class="row pt-15">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            value="" placeholder=" Your Full Name" required=""
                                            data-error="Please enter your name" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            value="" placeholder="support@gmail.com" required=""
                                            data-error="Please enter your Email" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" id="phone" name="phone" class="form-control"
                                            value="" placeholder="+91 1234567890" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="form-group">
                                        <label for="select-subject">Select Requirments</label>
                                        <select name="select-subject" id="select-subject">
                                            <option value="default" selected="">
                                                Graphic Designing
                                            </option>
                                            <option value="Design">Digital Marketing</option>
                                            <option value="Development">
                                                Software Development
                                            </option>
                                            <option value="SEO">Social Media Marketing</option>
                                            <option value="SEO">Website Designing</option>
                                            <option value="SEO">Production</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Write Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write Message" required=""
                                            data-error="Please enter your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group pt-5 mb-0">
                                        <button type="submit" class="theme-btn w-100">
                                            Send Message <i class="fas fa-angle-double-right"></i>
                                        </button>
                                        <div id="msgSubmit" class="hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-info wow fadeInLeft delay-0-2s">
                        <div class="contact-info-item style-two">
                            <div class="icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <span class="title">Location</span>
                                <span class="text">Office No.23, Ostwal Wonder City, Betegao Boisar(E)
                                    401501,Palghar, MH</span>
                            </div>
                        </div>
                        <div class="contact-info-item style-two">
                            <div class="icon">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="content">
                                <span class="title">email address</span>
                                <span class="text">
                                    <a href="mailto:info@maestlopermedia.com"><span class="__cf_email__"
                                            data-cfemail="c7b4b2b7b7a8b5b3b0a2a587a0aaa6aeabe9a4a8aa"></span></a>
                                    <a href="mailto:info@maestlopermedia.com">info@maestlopermedia.com</a>
                                </span>
                            </div>
                        </div>
                        <div class="contact-info-item style-two">
                            <div class="icon">
                                <i class="fa-solid fa-phone-flip"></i>
                            </div>
                            <div class="content">
                                <span class="title">Phone Number</span>
                                <span class="text">
                                    Call <a href="callto:+91 8149972219">+91 8149972219</a>
                                    Whatsapp :+91 8149972219
                                </span>
                            </div>
                        </div>
                        <div class="follow-us">
                            <h4>Follow Us</h4>
                            <div class="social-style-two">
                                <a href="https://m.facebook.com/people/maestloper_media/100064850406182/"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/maestloper_media/?hl=en"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="https://in.linkedin.com/company/maestloper-media"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Page Area end -->

    <!-- Location Map Area Start -->
    <div class="contact-page-map wow fadeInUp delay-0-2s">
        <div class="our-location">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.653430592242!2d72.72499537540824!3d19.819481281544313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be71fb233e2dd27%3A0x81a46409468e4a18!2sMaestloper%20Media!5e1!3m2!1sen!2sin!4v1691662718505!5m2!1sen!2sin"
                style="border: 0; width: 100%" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- Location Map Area End -->

    <!-- Call to Action Area start -->
    <section class="call-to-action-area bgc-black pt-80 pb-50">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-white mb-25 wow fadeInUp delay-0-2s">
                        <h2>Let’s Build Your Brand Today</h2>
                        <p>
                            Do you want to have a Digital Services that stands out and
                            impresses your clients? Then we are ready to help! Click the
                            button below to contact us and discuss your ideas.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 text-lg-end">
                    <a href="contact.html" class="theme-btn style-two mb-30 wow fadeInUp delay-0-4s">Let’s Get Started <i
                            class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action Area End -->

    <!-- footer area start -->
    <footer class="main-footer footer-two pt-80 bgc-lighter">
        <div class="container">
            <div class="row justify-content-xl-between justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="footer-widget widget_about me-md-5 wow fadeInUp delay-0-2s">
                        <div class="footer-logo mb-25">
                            <a href="index.html"><img style="height: 70px" src="assets/images/logos/logomm.png"
                                    alt="Logo" /></a>
                        </div>
                        <p>
                            Maestloper Media is a full-service digital marketing agency
                            founded with a vision to revolutionize the online marketing
                            landscape. We pride ourselves on delivering exceptional
                            results through innovative strategies, creative designs, and
                            advanced technology.
                        </p>
                        <div class="social-style-two pt-5">
                            <a href="https://m.facebook.com/people/maestloper_media/100064850406182/"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/maestloper_media/?hl=en"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://in.linkedin.com/company/maestloper-media"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="footer-widget widget_nav_menu wow fadeInUp delay-0-4s">
                        <h4 class="footer-title">Quick Links</h4>
                        <ul class="list-style-two">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="contact.html">Contact Us</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="wow fadeInUp delay-0-6s">
                        <h4 class="footer-title">Contact</h4>
                        <li class="list-item-1">
                            <a class="text-decoration-none">Address: Office No.23, Ostwal Wonder City, Betegao
                                Boisar(E) 401501,Palghar, MH</a>
                        </li>
                        <li class="list-item">
                            <a href="mailto:info@maestlopermedia.com" class="text-decoration-none">Email:
                                info@maestlopermedia.com</a>
                        </li>
                        <li class="list-item">
                            <a href="callto:+91 8149972219" class="text-decoration-none footer-link-auto">Phone: +91
                                8149972219</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom mt-30 pt-25 pb-10">
            <div class="container">
                <div class="copyright-text text-center">
                    <p>Copyright ©2023 Maestloper Media All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- Scroll Top Button -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fas fa-angle-double-up"></span>
    </button>

    <a href="https://wa.me/8149972219" class="waicon" target="_blank">
        <img height="40px" src="./assets/images/logos/whatsapp.png" alt="">
    </a>
    </div>
    <!-- footer area end -->
    <!--End pagewrapper-->
@endsection
