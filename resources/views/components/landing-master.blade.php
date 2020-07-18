<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>M Talks</title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ asset('images/mtalk.png') }}" rel="icon">
        <link href="{{ asset('template/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/vendor/venobox/venobox.css') }}" rel="stylesheet">
        <link href="{{ asset('template/vendor/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">

        <!-- =======================================================
        * Template Name: Butterfly - v2.1.0
        * Template URL: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

                <a href="#hero" class="logo mr-auto"><img src="{{ asset('images/mtalk.png') }}" alt="" class="img-fluid"></a>
                <!-- Uncomment below if you prefer to use text as a logo -->
                <!-- <h1 class="logo mr-auto"><a href="index.html">Butterfly</a></h1> -->

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="#hero">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#how_it_works">How it works</a></li>
                        <li><a href="#benefits">BBBEE befenits </a></li>
                        {{-- <li><a href="#team">Team</a></li> --}}
                        {{-- <li class="drop-down"><a href="">Drop Down</a>
                            <ul>
                                <li><a href="#">Drop Down 1</a></li>
                                <li class="drop-down"><a href="#">Deep Drop Down</a>
                                    <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Drop Down 2</a></li>
                                <li><a href="#">Drop Down 3</a></li>
                                <li><a href="#">Drop Down 4</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav><!-- .nav-menu -->
            </div><!-- End container d-flex -->
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 >MTalks</h1>
                        <h2 >
                            Excellence and relevence through simplicity.
                        </h2>
                        <div>
                            <a href="#contact" class="btn-get-started scrollto">
                                Get In Touch
                            </a>
                        </div>
                    </div><!-- End Column -->

                    <div class="col-lg-6 order-1 order-lg-2 hero-img">
                        <img src="images/management.svg" class="img-fluid" alt="">
                    </div><!-- End Column -->
                </div><!-- End Row -->
            </div><!-- End Container -->
        </section><!-- End Hero -->

        <x-landing-main-section>
           
        </x-landing-main-section>

        <!-- ======= Footer ======= -->
        <footer id="footer">

            {{-- <div class="footer-newsletter">
                <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                    </div>
                </div>
            </div> --}}

            <div class="footer-top">
            <div class="container">
                <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>MTalks</h3>
                    <p>
                    18 Smuts Ave <br>
                    Briza Twp, Cape Town<br>
                    7130 <br><br>
                    <strong>Phone:</strong> +27 71 230 8008<br>
                    <strong>Email:</strong> mtalks@zohomail.com<br>
                    </p>
                </div>
               
                {{-- <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div> --}}

                {{-- <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div> --}}

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>We will soon be on social media, watch this space!</p>
                    {{-- <div class="social-links mt-3">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div> --}}
                </div>

                </div>
            </div>
            </div>

            <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Butterfly</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/butterfly-free-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('template/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('template/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('template/vendor/venobox/venobox.min.js') }}"></script>
        <script src="{{ asset('template/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('template/vendor/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('template/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('template/vendor/owl.carousel/owl.carousel.min.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('template/js/main.js') }}"></script>

    </body>

</html>