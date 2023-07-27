{{-- push title --}}
@push('title')
    <title>Home Page</title>
@endpush

{{-- push styles --}}
@push('styles')
    
@endpush

{{-- push scripts --}}
@push('scripts')
     
@endpush

{{-- extend and yield content --}}
@extends('layouts/layout')
@section('content')
        <!-- Banner Section Start -->
        <div class="rs-banner main-home">
            <div class="container">
                <div class="content-wrap">
                    <div class="icon-wrap mb-50">
                        <img src="{{ asset('public/assets/images/banner/style1/brands.png')}}" alt="Images">
                    </div>
                    <h2 class="underline-text">13-14 August 2023 | <br class="nonebr"> RGPV Sports Complex - Bhopal</h2>
                    <div class="prelements-heading water__slide_yes default text-center">
                        <div class="title-inner">                           
                            <h2 class="title"><span class="watermark">D'evoluthon</span>D'evolu<span>thon</span>2.0</h2>             
                        </div>
                    </div>
                    <h2 class="conference-title">Hackathon <span class="year">2023</span></h2>
                    <div class="btn-part">
                        <a class="readon btn-text" href="contact.html">
                            <span>Register Here</span>
                            <img src="{{ asset('public/assets/images/event.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->
       
        <!-- Choose Section Start -->
        <div class="rs-services style1 bg1 pt-110 pb-60 md-pt-75 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60 md-mb-40">
                    <span class="sub-text">Join the Event</span>
                    <h2 class="title pb-27">
                       Why You Should Attend<br>
                       this Hackathon
                    </h2>
                    <div class="heading-border-line"></div>
                </div>
                <div class="row y-middle">
                    <div class="col-lg-4 col-md-6 md-mb-30">
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-icon">
                                    <img src="{{ asset('public/assets/images/services/main-home/choose/1.png')}}" alt="Services">
                                </div>
                                <div class="services-text">
                                    <h4 class="title"> Networking</h4>
                                    <p class="services-txt">
                                        This event aims at establishing networks to find solutions to the existing array of problems.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 md-mb-30">
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-icon">
                                    <img src="{{ asset('public/assets/images/services/main-home/choose/2.png')}}" alt="Services">
                                </div>
                                <div class="services-text">
                                    <h4 class="title"> Learning</h4>
                                    <p class="services-txt">
                                        All the participants will get a chance to meet mentors and subject matter specialists to learn new things from them.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="services-wrap">
                                <div class="services-icon">
                                    <img src="{{ asset('public/assets/images/services/main-home/choose/1.png')}}" alt="Services">
                                </div>
                                <div class="services-text">
                                    <h4 class="title"> Spark New Ideas</h4>
                                    <p class="services-txt">
                                        This Hackathon will allow you to present your new ideas and solutions in front of an adept jury.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Choose Section End -->

        <!-- Timecoun Soon Start Here -->
        <div class="rs-timecoun-ceremony bg2 pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-20">
                    <span class="sub-text">Hurry Up</span>
                    <h2 class="title white-color pb-27">
                        Join Before the<br>
                        Registration Closed
                    </h2>
                    <div class="heading-border-line"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-counter5">
                            <div class="timecounter-inner">
                                <div class="coming-soon-part">
                                    <div class="coming-soon-text">    
                                        <div data-animation-in="slideInLeft" data-animation-out="animate-out fadeOut" class="CountDownTimer" data-date="03/03/2022 09:00"> </div>
                                    </div>                                                        
                                </div>
                            </div>
                        </div>     
                    </div>
                    <div class="col-lg-12 mt-15">
                        <div class="btn-part text-center">
                            <a class="readon btn-text" href="contact.html">
                                <span>Register Now</span>
                                <img src="{{ asset('public/assets/images/button.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Timecoun Soon End Here -->
       
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
                            <span class="sub-text">About Devoluthon</span>
                            <h2 class="title pb-22">
                                D'evoluthon 2.0, a digital hackathon
                            </h2>
                            <div class="heading-border-line left-style"></div>
                            <p class="desc margin-0 pt-40 pb-25">
                                cataloged by Entrepreneurship Cell RGPV, will be organized at the RGPV level. <br>
                                Being the first of its kind at our campus, the event aims at encouraging participants to collaborate with mentors, subject matter specialists, data sources, and a network of collaborators to find solutions to the prevailing set of problems.
                            </p>
                            <div class="rs-counter about-style">
                                <div class="row">
                                   <div class="col-lg-6 md-mb-30">
                                       <div class="counter-list">
                                           {{-- <div class="counter-icon">
                                               <img src="{{ asset('public/assets/images/counter/icons/1.png')}}" alt="Counter">
                                           </div> --}}
                                           {{-- <div class="counter-text plus">
                                               <div class="rs-count">54</div>
                                               <h4 class="title">Speakers</h4>
                                           </div> --}}
                                       </div>
                                   </div> 
                                   <div class="col-lg-6">
                                       <div class="counter-list">
                                           {{-- <div class="counter-icon">
                                               <img src="{{ asset('public/assets/images/counter/icons/2.png')}}" alt="Counter">
                                           </div> --}}
                                           {{-- <div class="counter-text plus">
                                               <div class="rs-count">70</div>
                                               <h4 class="title">Workshops</h4>
                                           </div> --}}
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

        <!-- Event Section Start -->
        <div class="rs-addon-services style1 bg4 pt-120 pb-120 md-pt-70 md-pb-70">
            <div class="container">
                <div class="sec-title text-center mb-40">
                    <span class="sub-text">Join The Event</span>
                    <h2 class="title white-color pb-22">
                        Our Provided Perks For You<br>
                        During D'evoluthon
                    </h2>
                    <div class="heading-border-line"></div>
                    <p class="desc margin-0 white-color pt-40">
                        To enhance your experience and to unwind after the tiring brainstorming we have excellent perks in store for the participants!
                    </p>
                </div>
                <div class="all-services-section">
                    <div class="services-item">
                        <div class="services-wrap">
                            <div class="services-bottom-img">
                                <img src="{{ asset('public/assets/images/event/icons/1.png')}}" alt="Event">
                            </div>
                            <div class="services-part">
                                <div class="services-icon">
                                    <img src="{{ asset('public/assets/images/event/icons/1.png')}}" alt="Event">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">Photo Booth</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-item">
                        <div class="services-wrap">
                            <div class="services-bottom-img">
                                <img src="{{ asset('public/assets/images/event/icons/2.png')}}" alt="Event">
                            </div>
                            <div class="services-part">
                                <div class="services-icon">
                                    <img src="{{ asset('public/assets/images/event/icons/2.png')}}" alt="Event">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">Goodies</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-item">
                        <div class="services-wrap">
                            <div class="services-bottom-img">
                                <img src="{{ asset('public/assets/images/event/icons/3.png')}}" alt="Event">
                            </div>
                            <div class="services-part">
                                <div class="services-icon">
                                    <img src="{{ asset('public/assets/images/event/icons/3.png')}}" alt="Event">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">Vouchers</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-item">
                        <div class="services-wrap">
                            <div class="services-bottom-img">
                                <img src="{{ asset('public/assets/images/event/icons/4.png')}}" alt="Event">
                            </div>
                            <div class="services-part">
                                <div class="services-icon">
                                    <img src="{{ asset('public/assets/images/event/icons/4.png')}}" alt="Event">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">Experience</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-item">
                        <div class="services-wrap">
                            <div class="services-bottom-img">
                                <img src="{{ asset('public/assets/images/event/icons/5.png')}}" alt="Event">
                            </div>
                            <div class="services-part">
                                <div class="services-icon">
                                    <img src="{{ asset('public/assets/images/event/icons/5.png')}}" alt="Event">
                                </div>
                                <div class="services-content">
                                    <h2 class="title">Ice Cream</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="btn-part text-center mt-60 md-mt-30">
                        <a class="readon btn-text" href="schedule-light.html">
                            <span>Join This Event</span>
                            <img src="{{ asset('public/assets/images/button.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Section End -->  

        <!-- Team Section Start -->
    <div id="rs-team" class="rs-team style2 bg12 pt-120 pb-70 md-pt-80">
        <div class="container pb-50">
            <div class="sec-title text-center mb-60 md-mb-40">
                <span class="sub-text">E-Cell</span>
                <h2 class="title title-color pb-35">
                    Supervisors
                </h2>
                <div class="heading-border-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-20">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/1.jpg')}}" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Aarya Gupta</a></h3>
                                <div class="team-title">Team Supervisor</div>
                                <ul class="social-icons">
                                   {{-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> --}}
                                   <li><a href="https://www.instagram.com/aarya15.01/"><i class="fa fa-instagram"></i></a></li>
                                   <li><a href="https://twitter.com/Aarya1504"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="https://www.linkedin.com/in/aarya-gupta-26486a22a/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-20">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/2.jpg')}}" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Pratishtha Tiwari</a></h3>
                                <div class="team-title">Executive Manager</div>
                                <ul class="social-icons">
                                   {{-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> --}}
                                   <li><a href="https://twitter.com/Pratisshhh?t=Zfv-bISM7VUKx-odVRL5tw&s=09"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="https://www.linkedin.com/in/pratishtha-tiwari-49511b218/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-20">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/3.jpg')}}" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Oss Asthana</a></h3>
                                <div class="team-title">Operations and PR head</div>
                                <ul class="social-icons">
                                   {{-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> --}}
                                   <li><a href="https://www.instagram.com/aashii__03/"><i class="fa fa-instagram"></i></a></li>
                                   {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
                                   <li><a href="https://www.linkedin.com/in/ossasthana/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-20">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/4.jpg')}}" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Shubham Mishra</a></h3>
                                <div class="team-title">Operations and PR head</div>
                                <ul class="social-icons">
                                    {{-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> --}}
                                    <li><a href="https://www.instagram.com/cyberdslayer"><i class="fa fa-instagram"></i></a></li>
                                    {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
                                    <li><a href="https://www.linkedin.com/in/shubham-mishra-362416226"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 md-mb-20">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/5.jpg')}}" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Ramansh Parashar</a></h3>
                                <div class="team-title">Graphic Designer at Social Media Team</div>
                                <ul class="social-icons">
                                    <li><a href="https://instagram.com/ramansh_parashar_14?igshid=ZDdkNTZiNTM="><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://twitter.com/ParasharRamansh?t=xENCviXNvWLOfmYwsBaFmQ&s=09"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="https://www.linkedin.com/in/ramansh-parashar-725753226"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 md-mb-20">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/6.jpg')}}" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Sumit Yadav</a></h3>
                                <div class="team-title">Graphic Designer at Social Media Team</div>
                                <ul class="social-icons">
                                   {{-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> --}}
                                   <li><a href="https://instagram.com/thesumityadav_?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a></li>
                                   {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
                                   <li><a href="https://www.linkedin.com/in/sumit-yadav-9306971b4"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-mb-20">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/7.jpg')}}" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Satyam Mishra </a></h3>
                                <div class="team-title">Graphic Designer at Social Media Team</div>
                                <ul class="social-icons">
                                   {{-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> --}}
                                   <li><a href="https://instagram.com/isatyam_m?igshid=ZDdkNTZiNTM="><i class="fa fa-instagram"></i></a></li>
                                   <li><a href="https://twitter.com/inactivesatyam?t=-kzU_CVAuOPkieb1cbTmKw&s=09"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="https://www.linkedin.com/in/satyam-mishra-59652a1a8"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/8.jpg')}}" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Sumit Choudhary</a></h3>
                                <div class="team-title">Tech Team</div>
                                <ul class="social-icons">
                                   {{-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> --}}
                                   <li><a href="https://www.instagram.com/sumit_sem__/?igshid=YmMyMTA2M2Y%3D"><i class="fa fa-instagram"></i></a></li>
                                   {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
                                   <li><a href="https://www.linkedin.com/in/sumitc02468/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-20">
                    <div class="team-item">
                        <div class="team-inner-wrap">
                            <div class="images-wrap">
                                <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/9.jpg')}}" alt="Team"></a>
                            </div>
                            <div class="team-content">
                                <div class="rs-arrow">
                                    <div class="curve"></div>
                                    <div class="point"></div>
                                </div>
                                <h3 class="title-name"><a href="speaker-single.html">Vansh Saxena</a></h3>
                                <div class="team-title">Startup Support Speacialist</div>
                                <ul class="social-icons">
                                   {{-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> --}}
                                   <li><a href="https://www.instagram.com/_vanshhhh._"><i class="fa fa-instagram"></i></a></li>
                                   {{-- <li><a href="https://twitter.com/Aarya1504"><i class="fa fa-twitter"></i></a></li> --}}
                                   <li><a href="https://www.linkedin.com/in/vanshsaxena-vs"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="team-animate">
            <div class="team-icons left-side">
                <img src="{{ asset('public/assets/images/team/animate/1.png')}}" alt="Icons">
            </div>
            <div class="team-icons right-side">
                <img src="{{ asset('public/assets/images/team/animate/2.png')}}" alt="Icons">
            </div>
        </div>
    </div> --}}
    <!-- Team Section Start -->

        <!-- Team Section Start -->
        {{-- <div class="rs-team style1 bg5 pt-110 pb-120 md-pt-70 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">Event Speakers</span>
                    <h2 class="title pb-35">
                        Founders From Around The<br>
                        Globe Sharing Experence
                    </h2>
                    <div class="heading-border-line"></div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-35">
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/1.jpg')}}" alt="Team"></a>
                                    <div class="team-content text-center">
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
                    </div>
                    <div class="col-lg-3 col-md-6 mb-35">
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/2.jpg')}}" alt="Team"></a>
                                    <div class="team-content text-center">
                                        <h3 class="title-name"><a href="speaker-single.html">Kajal Aggarwal</a></h3>
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
                    </div>
                    <div class="col-lg-3 col-md-6 mb-35">
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/3.jpg')}}" alt="Team"></a>
                                    <div class="team-content text-center">
                                        <h3 class="title-name"><a href="speaker-single.html">Ajay Devgan</a></h3>
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
                    </div>
                    <div class="col-lg-3 col-md-6 mb-35">
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/4.jpg')}}" alt="Team"></a>
                                    <div class="team-content text-center">
                                        <h3 class="title-name"><a href="speaker-single.html">Sonakshi Sinha</a></h3>
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
                    </div>
                    <div class="col-lg-3 col-md-6 md-mb-35">
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/5.jpg')}}" alt="Team"></a>
                                    <div class="team-content text-center">
                                        <h3 class="title-name"><a href="speaker-single.html">Shraddha Kapoor</a></h3>
                                        <div class="team-title">Shraddha Kapoor</div>
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
                    <div class="col-lg-3 col-md-6 md-mb-35">
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/6.jpg') }}" alt="Team"></a>
                                    <div class="team-content text-center">
                                        <h3 class="title-name"><a href="speaker-single.html">Vidya Balan</a></h3>
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
                    </div>
                    <div class="col-lg-3 col-md-6 sm-mb-35">
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/7.jpg') }}" alt="Team"></a>
                                    <div class="team-content text-center">
                                        <h3 class="title-name"><a href="speaker-single.html">Kriti Sanon</a></h3>
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
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-inner-wrap">
                                <div class="images-wrap">
                                    <a href="speaker-single.html"><img src="{{ asset('public/assets/images/team/8.jpg') }}" alt="Team"></a>
                                    <div class="team-content text-center">
                                        <h3 class="title-name"><a href="speaker-single.html">Irrfan Khan</a></h3>
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
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Team Section Start -->

        <!-- Our Event Schedule Start -->
        <div id="rs-events-schedule" class="rs-events-schedule rs-events-schedule2 bg6 pt-120 pb-90 md-pt-80 md-pb-50">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <span class="sub-text">Timetable</span>
                    <h2 class="title white-color pb-35">
                        Event Schedules
                    </h2>
                    <div class="heading-border-line"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                       <div class="events-schedule-tabs">
                            <!-- Nav tabs -->
                            <ul class="nav eventday-list">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#sunday">Phase 1 <span>2023-08-20</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#monday">Phase 2 <span>2023-08-21</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tuesday">Phase 3 <span>2023-08-21</span></a>
                                </li>
                            </ul>
                            <div class="events-schedule-contents tab-content schedule-one">
                                <div class="tab-pane events-shedule-des active show" id="sunday">
                                   <div class="row">
                                        <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title" >  Registrations</h3>
                                                    <p>Process of enrollment will be conducted via online registrations.
                                                        <br>
                                                        <br>
                                                    </p>
                                                    {{-- <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>10:00-12:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>  --}}
                                               </div>
                                                {{-- <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img src="{{ asset('public/assets/images/tab/1.jpg') }}" alt="Images"></a>
                                                            <span class="tooltiptext">Allu Arjun</span>
                                                        </div>                                                   
                                                    </div>                                                
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img src="{{ asset('public/assets/images/tab/2.jpg') }}" alt="Images"></a>
                                                            <span class="tooltiptext">Odette Annable</span>
                                                        </div>                                                   
                                                    </div>                                                
                                                </div> --}}
                                            </div> 
                                       </div>  
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Shortlisting of candidates</h3>
                                                    <p>Candidates will be evaluated on the basis of Github and other tech profiles, as well as the projects they have built until now. </p>
                                                    {{-- <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>12:00-2:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>  --}}
                                               </div>
                                                {{-- <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img src="{{ asset('public/assets/images/tab/3.jpg') }}" alt="Images"></a>
                                                            <span class="tooltiptext">Tiger Shroff</span>
                                                        </div>                                                   
                                                    </div>                                               
                                                   <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img src="{{ asset('public/assets/images/tab/4.jpg') }}" alt="Images"></a>
                                                            <span class="tooltiptext">Dakota Fanning</span>
                                                        </div>                                                   
                                                    </div>                                             
                                                </div> --}}
                                            </div> 
                                       </div>  
                                       {{-- <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Lunch Break</h3>
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias vitae esse incidunt nam? Dolorum reiciendis sint ipsum.</p>
                                                    <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>2:00-3:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul> 
                                               </div>
                                                <div class="speak-image-btm">             
                                                    <div class="speak-image">
                                                        <a href="#">
                                                            <img src="{{ asset('public/assets/images/tab/5.jpg') }}" alt="Images">
                                                        </a>                                                         
                                                    </div>                                                
                                                </div>
                                            </div> 
                                       </div>   --}}
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Announcement</h3>
                                                    <p>The list of teams selected will be made public after a day or two after evaluation.</p>
                                                    {{-- <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>3:00-5:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>  --}}
                                               </div>
                                                {{-- <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img src="{{ asset('public/assets/images/tab/6.jpg') }}" alt="Images"></a>
                                                            <span class="tooltiptext">Mila Kunis</span>
                                                        </div>                                                   
                                                    </div>                                                   
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img src="{{ asset('public/assets/images/tab/7.jpg') }}" alt="Images"></a>
                                                            <span class="tooltiptext">Angelina Jolie</span>
                                                        </div>                                                   
                                                    </div>                                                  
                                                </div> --}}
                                            </div> 
                                       </div>  
                                   </div>                            
                               </div>
                               <div class="tab-pane events-shedule-des" id="monday">
                                   <div class="row">
                                        <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Introduction</h3>
                                                     <p>The ceremony will commence with the arrival of guests followed by briefing about the hackathon which will include revision of rules and regulations.</p>
                                                    {{-- <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>10:12-5:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>  --}}
                                                </div>
                                                {{-- <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img src="{{ asset('public/assets/images/tab/4.jpg') }}" alt="Images"></a>
                                                            <span class="tooltiptext">Dakota Fanning</span>
                                                        </div>                                                   
                                                    </div>                                                         
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img src="{{ asset('public/assets/images/tab/7.jpg') }}" alt="Images"></a>
                                                            <span class="tooltiptext">Angelina Jolie</span>
                                                        </div>                                                   
                                                    </div>                                                        
                                                </div> --}}
                                            </div> 
                                        </div>  
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Hackathon starts</h3>
                                                    <p>Problem statements will be provided to the teams and soon they'll get onto working on them. <br> <br></p>
                                                    {{-- <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>12:00-1:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>  --}}
                                               </div>
                                                {{-- <div class="speak-image-btm">             
                                                    <div class="speak-image">
                                                        <a href="#">
                                                            <img src="{{ asset('public/assets/images/tab/5.jpg') }}" alt="Images">
                                                        </a>                                                         
                                                    </div>                                               
                                                </div> --}}
                                            </div> 
                                       </div>  
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Sessions via sponsor</h3>
                                                    <p>Sponsors of the event will take a few sessions, telling the audience and participants about their products as well as our collaboration with them. <br> <br></p>
                                                    {{-- <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>12:00-1:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>  --}}
                                               </div>
                                                {{-- <div class="speak-image-btm">             
                                                    <div class="speak-image">
                                                        <a href="#">
                                                            <img src="{{ asset('public/assets/images/tab/5.jpg') }}" alt="Images">
                                                        </a>                                                         
                                                    </div>                                               
                                                </div> --}}
                                            </div> 
                                       </div>  
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Fun activity</h3>
                                                    <p>TSince coding continuously for 24 hours is extremely stressful for all the teams, we've planned a relaxation session with fun activities which will have exciting prizes, provided by our sponsors. </p>
                                                    {{-- <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>12:00-1:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>  --}}
                                               </div>
                                                {{-- <div class="speak-image-btm">             
                                                    <div class="speak-image">
                                                        <a href="#">
                                                            <img src="{{ asset('public/assets/images/tab/5.jpg') }}" alt="Images">
                                                        </a>                                                         
                                                    </div>                                               
                                                </div> --}}
                                            </div> 
                                       </div>  
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Submission of pitch deck</h3>
                                                    <p>Candidates will have to submit a pitch deck, which will be the final product presented to the judges, on the basis of which they'll be assessed.</p>
                                                    {{-- <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>1:00-3:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>  --}}
                                               </div>
                                                {{-- <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img src="{{ asset('public/assets/images/tab/6.jpg') }}" alt="Images"></a>
                                                            <span class="tooltiptext">Mila Kunis</span>
                                                        </div>                                                   
                                                    </div>                                                         
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img src="{{ asset('public/assets/images/tab/1.jpg') }}" alt="Images"></a>
                                                            <span class="tooltiptext">Allu Arjun</span>
                                                        </div>                                                   
                                                    </div>                                                         
                                                </div> --}}
                                            </div> 
                                       </div>  
                                   </div>                            
                               </div>
                               <div class="tab-pane events-shedule-des" id="tuesday">
                                   <div class="row">
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Pitching round</h3>
                                                    <p>Top 10 teams will get a chance to pitch their ideas in front of the judges. <br> <br></p>
                                                    {{-- <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>12:00-2:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>  --}}
                                               </div>
                                                {{-- <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img src="{{ asset('public/assets/images/tab/2.jpg') }}" alt="Images"></a>
                                                            <span class="tooltiptext">Odette Annable</span>
                                                        </div>                                                   
                                                    </div>                                                    
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img src="{{ asset('public/assets/images/tab/4.jpg') }}" alt="Images"></a>
                                                            <span class="tooltiptext">Dakota Fanning</span>
                                                        </div>                                                   
                                                    </div>                                                   
                                                </div> --}}
                                            </div> 
                                       </div>  
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title"> Results</h3>
                                                    <p>Results will be declared after evaluating the performance of  all the teams in the pitching round</p>
                                                    {{-- <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>2:00-3:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul>  --}}
                                               </div>
                                                {{-- <div class="speak-image-btm">             
                                                    <div class="speak-image">
                                                        <a href="#">
                                                            <img src="{{ asset('public/assets/images/tab/5.jpg') }}" alt="Images">
                                                        </a>                                                         
                                                    </div>                                                
                                                </div> --}}
                                            </div> 
                                       </div>  
                                       {{-- <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Introduction Business</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also resurrected Cicero or at least what used to be</p>
                                                    
                                               </div>
                                                <div class="speak-image-btm">
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img src="{{ asset('public/assets/images/tab/7.jpg') }}" alt="Images"></a>
                                                            <span class="tooltiptext">Angelina Jolie</span>
                                                        </div>                                                   
                                                    </div>                                                    
                                                    <div class="speak-image">
                                                        <div class="tooltip"><a href="#"><img src="{{ asset('public/assets/images/tab/1.jpg') }}" alt="Images"></a>
                                                            <span class="tooltiptext">Allu Arjun</span>
                                                        </div>                                                   
                                                    </div>                                                    
                                                </div>
                                            </div> 
                                       </div>   --}}
                                   </div>                            
                               </div>
                            </div> 
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Event Schedule End -->

        <!-- Our Sponsor Section Start -->
        {{-- <div id="rs-our-sponsor" class="rs-our-sponsor style1 bg8 pt-120 pb-120 md-pt-75 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-65">
                    <span class="sub-text small">Our Sponsor</span>
                    <h2 class="title white-color pb-35">
                        Event Sponsorship
                    </h2>
                    <div class="heading-border-line"></div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 mb-20">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="#"><img src="{{ asset('public/assets/images/event/sponsor/1.png') }}" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-20">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="#"><img src="{{ asset('public/assets/images/event/sponsor/2.png') }}" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-20">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="#"><img src="{{ asset('public/assets/images/event/sponsor/3.png') }}" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-20">
                        <div class="logo-item">
                            <div class="grid-figure">
                                <div class="logo-img">
                                    <a href="#"><img src="{{ asset('public/assets/images/event/sponsor/3.png') }}" alt="logo-img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="btn-part text-center mt-60 md-mt-40">
                            <a class="readon btn-text" href="sponsors-2.html">
                                <span>Become a Sponsors</span>
                                <img src="{{ asset('public/assets/images/button.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Our Sponsor Section Start -->

        <!-- Contact Section Start -->
        <div class="rs-contact home-style1 pt-110 pb-120 md-pt-70 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-85 md-mb-50">
                    <span class="sub-text">Venue</span>
                    <h2 class="title pb-26">
                        Event Location
                    </h2>
                    <div class="heading-border-line"></div>
                </div>
                <div class="row y-middle">
                    <div class="col-lg-8 pr-50 md-pr-15 md-mb-50">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14656.621408216213!2d77.3619682!3d23.3101216!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c663a30403d97%3A0xfda406c043e9ab60!2se-Entrepreneurship%20cell%20%2CRGPV%2C%20Bhopal!5e0!3m2!1sen!2sin!4v1690390749730!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-item mb-20">
                            <div class="widget-img">
                                <img src="{{ asset('public/assets/images/contact/icons/2-1.png') }}" alt="Images">
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <img src="{{ asset('public/assets/images/contact/icons/1.png') }}" alt="Images">
                                </div>
                                <div class="address-text">
                                    <h3 class="title"> Address</h3>
                                    <p class="services-txt">  
                                        RGPV GANDHINAGAR, <br>
                                        BHOPAL,M.P.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="widget-item mb-20">
                            <div class="widget-img">
                                <img src="{{ asset('public/assets/images/contact/icons/2-2.png') }}" alt="Images">
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <img src="{{ asset('public/assets/images/contact/icons/2.png') }}" alt="Images">
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
                                <img src="{{ asset('public/assets/images/contact/icons/2-3.png') }}" alt="Images">
                            </div>
                            <div class="address-item">
                                <div class="address-icon">
                                    <img src="{{ asset('public/assets/images/contact/icons/3.png') }}" alt="Images">
                                </div>
                                <div class="address-text">
                                    <h3 class="title">Call us</h3>
                                    <p class="services-txt">  
                                        <a href="tel:+917828373231"> +91 7828373231 </a><br>
                                        {{-- <a href="tel:(+088)222-9999"></a> --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Contact Section End -->

@endsection
