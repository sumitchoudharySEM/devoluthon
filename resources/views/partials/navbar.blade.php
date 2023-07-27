<div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header header-transparent">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row-table">
                    <div class="col-cell header-logo">                                  
                        <div class="logo-area">
                            <a href="index.html">
                                {{-- <img class="normal-logo" src="{{ asset('public/assets/images/devoluthon logo-3.png') }} " alt="logo">   --}}
                                {{-- <img class="sticky-logo" src="{{ asset('public/assets/images/logo-dark.png') }} " alt="logo"> --}}
                                <img class="logoimg" src="{{ asset('public/assets/images/devoluthon logo-3.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <nav class="rs-menu hidden-md">
                                    <ul class="nav-menu">
                                        <li>
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about') }}">About</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('team') }}">Team</a>
                                        </li>
                                        {{-- <li>
                                            <a href="{{ route('sponsors') }}">Sponsors</a>
                                        </li> --}}
                                        <li>
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul> <!-- //.nav-menu -->
                                </nav>
                            </div> <!-- //.main-menu -->
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="expand-btn-inner">
                            <ul>
                                <li class="btn-quote">
                                    <a href="{{ route('register') }}" class="quote-button">Register Now</a>
                                </li>
                                <li class="humburger">
                                    <a id="nav-expander" class="nav-expander bar" href="#">
                                        <div class="bar">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                            <span class="dot4"></span>
                                            <span class="dot5"></span>
                                            <span class="dot6"></span>
                                            <span class="dot7"></span>
                                            <span class="dot8"></span>
                                            <span class="dot9"></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Canvas Mobile Menu start -->
        <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
            <div class="close-btn">
                <a id="nav-close2" class="nav-close">
                    <div class="line">
                        <span class="line1"></span>
                        <span class="line2"></span>
                    </div>
                </a>
            </div>
            <ul class="nav-menu">
                <li>
                    <a href="{{ route('index') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li>
                    <a href="{{ route('team') }}">Team</a>
                </li>
                {{-- <li>
                    <a href="{{ route('sponsors') }}">Sponsors</a>
                </li> --}}
                <li>
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
            </ul> <!-- //.nav-menu -->
            <div class="canvas-contact">
                  <div class="address-area">
                      <div class="address-list">
                          <div class="info-icon">
                              <i class="flaticon-location"></i>
                          </div>
                          <div class="info-content">
                              <h4 class="title">Address</h4>
                              <em>RGPV BHOPAL, M.P.</em>
                          </div>
                      </div>
                      <div class="address-list">
                          <div class="info-icon">
                              <i class="flaticon-email"></i>
                          </div>
                          <div class="info-content">
                              <h4 class="title">Email</h4>
                              <em><a href="mailto:support@ecellrgpv.com">support@ecellrgpv.com</a></em>
                          </div>
                      </div>
                      <div class="address-list">
                          <div class="info-icon">
                              <i class="flaticon-call"></i>
                          </div>
                          <div class="info-content">
                              <h4 class="title">Phone</h4>
                              <em>+91 7828373231</em>
                          </div>
                      </div>
                  </div>
            </div>
        </nav>
        <!-- Canvas Menu end -->                             
    </header>
    <!--Header End-->
</div>