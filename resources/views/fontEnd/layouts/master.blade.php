<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riant Engineering Ltd</title>

    <!-- Bootstrap -->
    <link type="text/css" href="{{ asset('public/fontEnd/css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('public/fontEnd/css/font-awesome.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('public/fontEnd/css/animate.min.css') }}" rel="stylesheet">
    <!--  owlcarousel css -->
    <link rel="stylesheet" href="{{ asset('public/fontEnd/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/fontEnd/owlcarousel/css/owl.theme.default.min.css') }}">
    <!--    Light Gallery Css-->
    <link rel="stylesheet" href="{{ asset('public/fontEnd/css/light-gallery.css') }}">
    <!--    main menu Css-->
    <link rel="stylesheet" href="{{ asset('public/fontEnd/css/meanmenu.min.css') }}">
    
    <link type="text/css" href="{{ asset('public/fontEnd/css/style.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('public/fontEnd/css/responsive.css')}}" rel="stylesheet">
    
</head>

<body>
    <header>
        <div id="home" class="header-top-area hidden-xs">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="header-address">
                            <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> House 3(2nd Floor), Road 13/A, Sector 11 Uttara, Dhaka. </li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i> info@riantengineersltd.com </li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> +8801672455986 </li>
                            </ul>
                        </div>
                        <div class="header-social-icon text-right hidden-sm">
                            <ul>
                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End header-social-icon-->
                </div>
            </div>
        </div> <!-- End header-top-area-->
        <div class="main-nav hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-3">
                        <div class="logo">
                            <a href="{{ URL::to('/') }}">
                            <img src="{{ asset('public/storage') }}/{{$logo->image}}" class="responsive" alt="riant engineers ltd logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-9">
                        <div class="main-menu">
                            <ul>
                                <li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
                                <li><a class="anchor">Our Business</a>
                                    <ul class="sub-menu-parent">
                                        <li><a href="{{ route('powerEnergy') }}">Power & Energy</a></li>
                                        <li><a href="{{ route('civilConstruction') }}">Civil & Construction</a></li>
                                        <li><a href="{{route('Mechanical')}}">Mechanical</a></li>
                                        <li><a href="{{route('Automation')}}">Automation</a></li>
                                        <li><a href="{{route('realEstate')}}">Real Estate</a></li>
                                    </ul>
                                </li>
                                <li><a class="anchor">sustainability</a>
                                    <ul class="sub-menu-parent">
                                        <li><a href="{{route('HealthSafty')}}">Health & Safty</a></li>
                                        <li><a href="{{route('QualityManagement')}}">Total Quality Management</a></li>
                                        <li><a href="{{route('Environment')}}">Environment</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('Gallery')}}">Gallery</a></li>
                                <li><a class="anchor">About Us</a>

                                    <ul class="sub-menu-parent">
                                        <li><a href="{{route('overview')}}">Overview</a></li>
                                        <li><a href="{{route('VisionMission')}}">Vision & Mission</a></li>
                                        <li><a href="{{route('Management')}}">Management</a></li>
                                        <li><a href="{{route('keyPerson')}}">Key Person</a></li>
                                    </ul>

                                </li>
                                <li><a href="{{route('Contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div><!-- End main-nav-area-->
        
         <section id="mobile-menu" class="hidden-lg hidden-md hidden-sm">
            
            <div class="mobile-menu">
               <div class="mobile-logo">
                <a href="">
                    <img src="{{ asset('public/storage') }}/{{$logo->image}}" alt="">
                </a>
            </div>
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a class="anchor">Our Business</a>
                        <ul>
                            <li><a href="{{ route('powerEnergy') }}">Power & Energy</a></li>
                            <li><a href="{{ route('civilConstruction') }}">Civil & Construction</a></li>
                            <li><a href="{{route('Mechanical')}}">Mechanical</a></li>
                            <li><a href="{{route('Automation')}}">Automation</a></li>
                            <li><a href="{{route('realEstate')}}">Real Estate</a></li>
                        </ul>
                    </li>
                    <li><a class="anchor">sustainability</a>
                        <ul>
                            <li><a href="{{route('HealthSafty')}}">Health & Safty</a></li>
                            <li><a href="{{route('QualityManagement')}}">Total Quality Management</a></li>
                            <li><a href="{{route('Environment')}}">Environment</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('Gallery')}}">Gallery</a></li>
                    <li><a href="">About Us</a>
                        <ul>
                            <li><a href="{{route('overview')}}">Overview</a></li>
                            <li><a href="{{route('VisionMission')}}">Vision & Mission</a></li>
                            <li><a href="{{route('Management')}}">Management</a></li>
                            <li><a href="{{route('keyPerson')}}">Key Person</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('Contact')}}">Contact</a></li>
                </ul>
            </div>
            
        </section><!-- End mobile-nav-area-->

    </header>
    <!-- End header-area-->

   @section('content')
        @show()

    <footer>
        <div class="footer-top ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="quick-links">
                            <h3 class="footer-title pb20">COMPANY LINKS</h3>
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="{{route('Contact')}}">Contact</a></li>
                                <li><a href="{{route('overview')}}">About</a></li>
                                <li><a href="{{route('Gallery')}}">Gallery</a></li>
                                <li><a href="{{ route('civilConstruction') }}">Civil & Construction</a></li>
                                <li><a href="{{route('realEstate')}}">Real Estate</a></li>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="quick-links">
                            <h3 class="footer-title pb20">COMPANY LINKS</h3>
                            <ul>
                                <li><a href="{{route('HealthSafty')}}">Health & Safty</a></li>
                                <li><a href="{{route('QualityManagement')}}">Total Quality Management</a></li>
                                <li><a href="{{route('Environment')}}">Environment</a></li>
                                <li><a href="{{route('VisionMission')}}">Vision & Mission</a></li>
                                <li><a href="{{route('Management')}}">Management</a></li>
                                <li><a href="{{route('keyPerson')}}">Key Person</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="subscribe">
                            <h3 class="footer-title pb20">Contact Us</h3>
                            
                            
                            <div class="social-icon" id="footerinfo">
                                <ul>
                                    <li><i class="fa fa-envelope" ></i> <span>info@riantengineersltd.com</span> 
                                    </li>
                                    
                                    <li><i class="fa fa-phone"></i> <span>+8801672455986</span> </li>
                                    
                                    <li><i class="fa fa-map-marker" ></i> <span>House 3(2nd Floor), Road 13/A, Sector 11 Uttara, Dhaka.</span> </li>
                                </ul>
                            </div>
                            
                            <div class="social-icon">
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-youtube"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="scrollup" class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="footer-copy text-center">
                            <p>All copyrights reserved © Riant Engineering Ltd</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="footer-copy">
                            <div class="developed text-center">
                                Developed by<a href="http://gatewayit.net" target="_blank"> <span>Gateway IT</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{ asset('public/fontEnd/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/fontEnd/js/bootstrap.min.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="{{ asset('public/fontEnd/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('public/fontEnd/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/fontEnd/js/lightgallery.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('public/fontEnd/js/jquery.meanmenu.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/fontEnd/js/main.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });

    </script>
    

</body>

</html>
