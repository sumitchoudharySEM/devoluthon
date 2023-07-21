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
                    <h2 class="underline-text">13-15 March 2022 | Row Hotel - New York</h2>
                    <div class="prelements-heading water__slide_yes default text-center">
                        <div class="title-inner">                           
                            <h2 class="title"><span class="watermark">Business</span>Busi<span>n</span>ess</h2>             
                        </div>
                    </div>
                    <h2 class="conference-title">Conference <span class="year">2022</span></h2>
                    <div class="btn-part">
                        <a class="readon btn-text" href="contact.html">
                            <span>Purchase Ticket</span>
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
                       Conference
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
                                        Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor.
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
                                        Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor.
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
                                        Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor.
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
                        Join The Conference Before<br>
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

        <!-- Event Section Start -->
        <div class="rs-addon-services style1 bg4 pt-120 pb-120 md-pt-70 md-pb-70">
            <div class="container">
                <div class="sec-title text-center mb-40">
                    <span class="sub-text">Join The Event</span>
                    <h2 class="title white-color pb-22">
                        Our Provided Perks For You<br>
                        During Conference
                    </h2>
                    <div class="heading-border-line"></div>
                    <p class="desc margin-0 white-color pt-40">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque<br>
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi<br> architecto beatae vitae dicta sunt explicabo.
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
                                    <h2 class="title">T-shirts</h2>
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
                                    <h2 class="title">After Party</h2>
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
        <div class="rs-team style1 bg5 pt-110 pb-120 md-pt-70 md-pb-80">
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
        </div>
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
                                    <a class="nav-link active" data-bs-toggle="tab" href="#sunday">Day 1 <span>2022-03-13</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#monday">Day 2 <span>2022-03-14</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tuesday">Day 3 <span>2022-03-14</span></a>
                                </li>
                            </ul>
                            <div class="events-schedule-contents tab-content schedule-one">
                                <div class="tab-pane events-shedule-des active show" id="sunday">
                                   <div class="row">
                                        <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title" >  Introduction Business</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also resurrected Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>10:00-12:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul> 
                                               </div>
                                                <div class="speak-image-btm">
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
                                                </div>
                                            </div> 
                                       </div>  
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Digital Marketing Theory</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also resurrected Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>12:00-2:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul> 
                                               </div>
                                                <div class="speak-image-btm">
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
                                                </div>
                                            </div> 
                                       </div>  
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Lunch Break</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also resurrected Cicero or at least what used to be</p>
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
                                       </div>  
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Marketing Workshop</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also resurrected Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>3:00-5:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul> 
                                               </div>
                                                <div class="speak-image-btm">
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
                                                </div>
                                            </div> 
                                       </div>  
                                   </div>                            
                               </div>
                               <div class="tab-pane events-shedule-des" id="monday">
                                   <div class="row">
                                        <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Marketing Workshop</h3>
                                                     <p>The decade that brought us Star Trek and Doctor Who also resurrected Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>10:12-5:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul> 
                                                </div>
                                                <div class="speak-image-btm">
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
                                                </div>
                                            </div> 
                                        </div>  
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Lunch Break</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also resurrected Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>12:00-1:00</li>
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
                                       </div>  
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Reinventing Experiences</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also resurrected Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>1:00-3:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul> 
                                               </div>
                                                <div class="speak-image-btm">
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
                                                </div>
                                            </div> 
                                       </div>  
                                   </div>                            
                               </div>
                               <div class="tab-pane events-shedule-des" id="tuesday">
                                   <div class="row">
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Cultures of Creativity</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also resurrected Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>12:00-2:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul> 
                                               </div>
                                                <div class="speak-image-btm">
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
                                                </div>
                                            </div> 
                                       </div>  
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Lunch Break</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also resurrected Cicero or at least what used to be</p>
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
                                       </div>  
                                       <div class="events-items col-lg-6">                                   
                                            <div class="event-author">                                                
                                                <div class="event-shedule-info">                         
                                                    <h3 class="event-title">Introduction Business</h3>
                                                    <p>The decade that brought us Star Trek and Doctor Who also resurrected Cicero or at least what used to be</p>
                                                    <ul class="meta-date-room">
                                                        <li> <i class="fa fa-clock-o"></i>1:00-5:00</li>
                                                        <li> <i class="fa fa-user-o"></i>Room#2</li>
                                                    </ul> 
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
                                       </div>  
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
        <div id="rs-our-sponsor" class="rs-our-sponsor style1 bg8 pt-120 pb-120 md-pt-75 md-pb-80">
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
                    
                    {{-- <div class="col-lg-12">
                        <div class="btn-part text-center mt-60 md-mt-40">
                            <a class="readon btn-text" href="sponsors-2.html">
                                <span>Become a Sponsors</span>
                                <img src="{{ asset('public/assets/images/button.png') }}" alt="">
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
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
                            <iframe src="https://maps.google.com/maps?q=rstheme&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
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
                                        55 Gerad Lane, <br>
                                        NY 11201, USA 
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
                                        demo@evenio.org <br>
                                        demo2@evenio.org
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
                                        <a href="tel:(+088)589-8745">(+088) 589-8745</a><br>
                                        <a href="tel:(+088)222-9999">(+088) 222-9999</a>
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
