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
                                    55 Gerad Lane, <br>
                                    NY 11201, USA 
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
                                    demo@evenio.org <br>
                                    demo2@evenio.org
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
                                    <a href="tel:(+088)589-8745">(+088) 589-8745</a><br>
                                    <a href="tel:(+088)222-9999">(+088) 222-9999</a>
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
                        <p class="margin-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deser unt mollit anim id est laborum. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 pr-40 md-pr-15 md-mb-50">
                        <div class="contact-map">
                            <iframe src="https://maps.google.com/maps?q=rstheme&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
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
