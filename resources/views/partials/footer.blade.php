<footer id="rs-footer" class="rs-footer style1">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 md-mb-10">
                    <div class="footer-logo mb-40 md-mb-20">
                        {{-- <a href="index.html"><img src="{{ asset('public/assets/images/11.png')}}" alt="Devoluthon Logo"></a> --}}
                         <a href="{{ route('index') }}"><img class="logoimg" src="{{ asset('public/assets/images/devoluthon logo-3.png') }}" alt="logo"></a> 
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 pl-45 md-pl-15">
                            <h3 class="footer-title">Address</h3>
                            <div class="textwidget">Rgpv Gandhinagar,<br> Bhopal M.P.</div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 md-mb-10 pl-90 md-pl-15">
                            <h3 class="footer-title">Call Us</h3>
                            <div class="textwidget">
                                <a href="mailto:support@ecellrgpv.com">support@ecellrgpv.com</a><br>
                                <a href="tel:+91 7828373231">+91 7828373231</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 pl-115 md-pl-15">
                            <h3 class="footer-title">Follow Us</h3>
                            <ul class="footer-social">  
                                <li> 
                                    {{-- <a href="#"><i class="fa fa-facebook"></i></a> --}}
                                </li>
                                <li> 
                                    <a href="https://twitter.com/ECellRGPV"><i class="fa fa-twitter"></i></a> 
                                </li>

                                <li> 
                                    <a href="https://in.linkedin.com/company/ecellrgpv"><i class="fa fa-linkedin"></i></a>
                                </li>

                                <li> 
                                    <a href="https://www.instagram.com/ecell_rgpv/?hl=en"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">                    
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
                    <ul class="copy-right-menu">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="copyright text-lg-start text-center ">
                        <p>© 2023 Ecell-Rgpv, All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>