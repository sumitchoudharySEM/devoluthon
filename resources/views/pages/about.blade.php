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
     <div class="rs-breadcrumbs img1">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    About
                    <span class="watermark">About Us</span>
                </h1>                       
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
   
    <!-- About Section Start -->
    <div class="rs-about main-home bg3 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-7 pr-55 md-pr-15 md-mb-50">
                    <div class="images-part">
                        <img src="{{ asset('public/assets/images/about/about.png')}}" alt="Images">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="sec-title">
                        <span class="sub-text">About Evenio</span>
                        <h2 class="title pb-22">
                            The Ultimate Business Event WordPress Theme
                        </h2>
                        <div class="heading-border-line left-style"></div>
                        <p class="desc margin-0 pt-40 pb-25">
                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                        </p>
                        <div class="rs-counter about-style">
                            <div class="row">
                               <div class="col-lg-6 md-mb-30">
                                   <div class="counter-list">
                                       <div class="counter-icon">
                                           <img src="{{ asset('public/assets/images/counter/icons/1.png')}}" alt="Counter">
                                       </div>
                                       <div class="counter-text plus">
                                           <div class="rs-count">54</div>
                                           <h4 class="title">Speakers</h4>
                                       </div>
                                   </div>
                               </div> 
                               <div class="col-lg-6">
                                   <div class="counter-list">
                                       <div class="counter-icon">
                                           <img src="{{ asset('public/assets/images/counter/icons/2.png')}}" alt="Counter">
                                       </div>
                                       <div class="counter-text plus">
                                           <div class="rs-count">70</div>
                                           <h4 class="title">Workshops</h4>
                                       </div>
                                   </div>
                               </div> 
                            </div>
                        </div>
                        {{-- <div class="btn-part mt-45">
                            <a class="readon btn-text" href="about.html">
                                <span>Book Now</span>
                                <img src="{{ asset('public/assets/images/button.png')}}" alt="">
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Services Section Start -->
    <div class="rs-services style4 bg14 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-50">
                    <div class="sec-title mb-60">
                        <span class="sub-text">Join The Event</span>
                        <h2 class="title pb-25">
                            Our Provided Perks For You<br>
                            During Conference
                        </h2>
                        <div class="heading-border-line left-style"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="services-item mb-45">
                                <div class="services-icon">
                                    <img src="{{ asset('public/assets/images/event/icons/1.png')}}" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="services-style1.html">Photo Booth</a></h3>
                                    <p class="services-txt">Quisque placerat vitae scelerise event.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-item mb-45">
                                <div class="services-icon">
                                    <img src="{{ asset('public/assets/images/event/icons/2.png')}}" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a >After Party</a></h3>
                                    <p class="services-txt">Quisque placerat vitae scelerise event.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-item mb-45">
                                <div class="services-icon">
                                    <img src="{{ asset('public/assets/images/event/icons/3.png')}}" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a >T-shirts</a></h3>
                                    <p class="services-txt">Quisque placerat vitae scelerise event.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-item mb-45">
                                <div class="services-icon">
                                    <img src="{{ asset('public/assets/images/event/icons/4.png')}}" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a >Ice Cream</a></h3>
                                    <p class="services-txt">Quisque placerat vitae scelerise event..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-item mb-45">
                                <div class="services-icon">
                                    <img src="{{ asset('public/assets/images/event/icons/5.png')}}" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a >Vouchers</a></h3>
                                    <p class="services-txt">Quisque placerat vitae scelerise event.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="{{ asset('public/assets/images/event/icons/6.png')}}" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a >Speakers</a></h3>
                                    <p class="services-txt">Quisque placerat vitae scelerise event.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-50 md-pl-15">
                    <div class="rs-videos choose-video">
                        <div class="images-video">
                            <img src="{{ asset('public/assets/images/event/about-join.png')}}" alt="images">
                        </div>
                        <div class="animate-border">
                            <a class="popup-border" href="https://www.youtube.com/watch?v=FMvA5fyZ338">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Team Section Start -->
    <div class="rs-team style2 bg12 pt-120 pb-50 md-pt-80">
        <div class="container">
            <div class="sec-title text-center mb-60">
                <span class="sub-text">Speakers</span>
                <h2 class="title white-color pb-35">
                    Event Speakers
                </h2>
                <div class="heading-border-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-20">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/1.jpg" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Michel Holding</a></h3>
                                <div class="team-title">CEO & Founder</div>
                                <ul class="social-icons">
                                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-20">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/2.jpg" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Mila Kunis</a></h3>
                                <div class="team-title">President & CEO</div>
                                <ul class="social-icons">
                                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-20">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/3.jpg" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Odette Annable</a></h3>
                                <div class="team-title">Consulting Advisor</div>
                                <ul class="social-icons">
                                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-20">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/4.jpg" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Adam Sandler</a></h3>
                                <div class="team-title">Digital Producer</div>
                                <ul class="social-icons">
                                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 md-mb-20">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/5.jpg" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Saoirse Ronan</a></h3>
                                <div class="team-title">Principal Advisor</div>
                                <ul class="social-icons">
                                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 md-mb-20">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/6.jpg" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Eva Green</a></h3>
                                <div class="team-title">Creative Director</div>
                                <ul class="social-icons">
                                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-mb-20">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/7.jpg" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Amy Adams</a></h3>
                                <div class="team-title">Web Developer</div>
                                <ul class="social-icons">
                                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="assets/images/team/8.jpg" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Blake Lively</a></h3>
                                <div class="team-title">Digital Marketer</div>
                                <ul class="social-icons">
                                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section Start -->

    <!-- Our Sponsor Section Start -->
    <div id="rs-our-sponsor" class="rs-our-sponsor style1 sponsor-about bg15 pt-120 md-pt-70 pb-xl-5">
        <div class="container">
            <div class="sec-title text-center mb-65 md-mb-40">
                <span class="sub-text small">Sponsored By</span>
                <h2 class="title pb-28">
                    Partners & Sponsors
                </h2>
                <div class="heading-border-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6 mb-20">
                    <div class="logo-item">
                        <div class="grid-figure">
                            <div class="logo-img">
                                <a href="#"><img src="assets/images/event/sponsor/black/1.png" alt="logo-img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 mb-20">
                    <div class="logo-item">
                        <div class="grid-figure">
                            <div class="logo-img">
                                <a href="#"><img src="assets/images/event/sponsor/black/2.png" alt="logo-img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 mb-20">
                    <div class="logo-item">
                        <div class="grid-figure">
                            <div class="logo-img">
                                <a href="#"><img src="assets/images/event/sponsor/black/3.png" alt="logo-img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 mb-20">
                    <div class="logo-item">
                        <div class="grid-figure">
                            <div class="logo-img">
                                <a href="#"><img src="assets/images/event/sponsor/black/4.png" alt="logo-img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 md-mb-20">
                    <div class="logo-item">
                        <div class="grid-figure">
                            <div class="logo-img">
                                <a href="#"><img src="assets/images/event/sponsor/black/5.png" alt="logo-img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 md-mb-20">
                    <div class="logo-item">
                        <div class="grid-figure">
                            <div class="logo-img">
                                <a href="#"><img src="assets/images/event/sponsor/black/6.png" alt="logo-img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="logo-item">
                        <div class="grid-figure">
                            <div class="logo-img">
                                <a href="#"><img src="assets/images/event/sponsor/black/7.png" alt="logo-img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="logo-item">
                        <div class="grid-figure">
                            <div class="logo-img">
                                <a href="#"><img src="assets/images/event/sponsor/black/8.png" alt="logo-img"></a>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
    <!-- Our Sponsor Section Start -->
@endsection
