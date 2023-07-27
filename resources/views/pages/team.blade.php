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
                    Team
                    <span class="watermark">Team E-Cell</span>
                </h1>                       
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
   
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
                                <div class="team-title">Public Relations and Operations Specialist</div>
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
                                <div class="team-title">Public Relations and Operations Specialist</div>
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
        </div>        {{-- <div class="team-animate">
            <div class="team-icons left-side">
                <img src="{{ asset('public/assets/images/team/animate/1.png')}}" alt="Icons">
            </div>
            <div class="team-icons right-side">
                <img src="{{ asset('public/assets/images/team/animate/2.png')}}" alt="Icons">
            </div>
        </div>
    </div> --}}
    <!-- Team Section Start -->
    
@section('content')
    
@endsection
