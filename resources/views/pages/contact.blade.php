{{-- push title --}}
@push('title')
    <title>Home Page</title>
@endpush

{{-- push styles --}}
@push('styles')
    <style>

    </style>
@endpush

{{-- push scripts --}}
@push('scripts')
    <script>

    </script>
@endpush

{{-- extend and yield content --}}
@extends('layouts/layout')
    
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img3">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Contact
                    <span class="watermark">Contact</span>
                </h1>                       
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Section Start -->
    <div class="rs-contact home-style1 home-style3 bg16 pt-120 md-pt-80">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-8 pr-130 md-pr-15 md-mb-50">
                    <div class="contact-img">
                        <img src="{{ asset('public/assets/images/contact/contact.png')}}" alt="Images">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-item mb-20">
                        <div class="widget-img">
                            <img src="{{ asset('public/assets/images/contact/icons/2-1.png')}}" alt="Images">
                        </div>
                        <div class="address-item">
                            <div class="address-icon">
                                <img src="{{ asset('public/assets/images/contact/icons/1.png')}}" alt="Images">
                            </div>
                            <div class="address-text">
                                <h3 class="title"> Address</h3>
                                <p class="services-txt">  
                                    Rgpv Gandhinagar, <br>
                                    Bhopal, MP
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="widget-item mb-20">
                        <div class="widget-img">
                            <img src="{{ asset('public/assets/images/contact/icons/2-2.png')}}" alt="Images">
                        </div>
                        <div class="address-item">
                            <div class="address-icon">
                                <img src="{{ asset('public/assets/images/contact/icons/2.png')}}" alt="Images">
                            </div>
                            <div class="address-text">
                                <h3 class="title">Email us</h3>
                                <p class="services-txt">  
                                    support@ecellrgpv.com <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="widget-item">
                        <div class="widget-img">
                            <img src="{{ asset('public/assets/images/contact/icons/2-3.png')}}" alt="Images">
                        </div>
                        <div class="address-item">
                            <div class="address-icon">
                                <img src="{{ asset('public/assets/images/contact/icons/3.png')}}" alt="Images">
                            </div>
                            <div class="address-text">
                                <h3 class="title">Call us</h3>
                                <p class="services-txt">  
                                    <a href="tel:+917828373231">+91 7828373231</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Section Start -->
            <div class="rs-contact pt-120 md-pt-80 pb-80 mb-5">
                <div class="row y-middle">
                    <div class="col-lg-6">
                        <div class="sec-title mb-85 md-mb-50">
                            <span class="sub-text">Any Query</span>
                            <h2 class="title pb-26">
                                Send Message
                            </h2>
                            <div class="heading-border-line left-style"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p class="margin-0">We are more than happy to solve all your queries regarding the hackathon, for queries contact:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 pr-40 md-pr-15 md-mb-50">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14656.621408216213!2d77.3619682!3d23.3101216!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c663a30403d97%3A0xfda406c043e9ab60!2se-Entrepreneurship%20cell%20%2CRGPV%2C%20Bhopal!5e0!3m2!1sen!2sin!4v1690390749730!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-wrap">
                            <div id="form-messages"></div>
                            <form id="contact-form" method="post" action="https://keenitsolutions.com/products/html/evenio/mailer.php">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                        </div> 
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                        </div>   
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                        </div>   
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <input class="from-control" type="text" id="Website" name="subject" placeholder="Your Website" required="">
                                        </div>
                                  
                                        <div class="col-lg-12 mb-30">
                                            <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="btn-part">                                            
                                        <div class="form-group mb-0">
                                            <div class="submit-btn">
                                                <input class="submit" type="submit" value="Submit Now">
                                            </div>
                                        </div>
                                    </div> 
                                </fieldset>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Section End -->
        </div>
    </div>
    <!-- Contact Section End -->
@endsection
