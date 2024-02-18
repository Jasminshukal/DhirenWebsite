<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ config('app.name', 'Laravel') }} is a Industry & Manufacturing HTML Template. Designed with great attention to details, flexibility and performance. It is ultra professional, smooth and sleek, with a clean modern layout. {{ config('app.name', 'Laravel') }} specially designed for Automotive, Construction, Factories, Industrial, Industrial Business, Industrial Chemicals, Industrial Corporate, Industrial Engineering, Industrial Factory, Industrial HTML5, Industry, Machinery, Manufacturing, Mechanical Engineering, Power Energy, Services Company and other Industry & Manufacturing related services. {{ config('app.name', 'Laravel') }} comes with most advanced and latest web technologies, enjoyable UX and the most beautiful design trends. Our template provides a platform to simply edit elements, choose styles and play around with the look and feel of your site. Build beautiful, intelligent websites with over 03+ Homepage Concepts ready to go or combine, build a layout has never been easier. There is a huge range of +34 styled pages waiting for your customization, anything you can think of can be built with our template. If you are searching for innovative, modern and clean HTML5 template, you must choose {{ config('app.name', 'Laravel') }}. {{ config('app.name', 'Laravel') }} comes with necessary features and pages. {{ config('app.name', 'Laravel') }} comes with necessary features for Industrial websites such as about pages, Testimonials, Clients, questions & answers, work, services, team & single team profiles, awesome blog pages and more. This HTML template can easily satisfy all of your needs.">
    <meta name="keywords" content="Automotive, Construction, Factories, Industrial, Industrial Business, Industrial Chemicals, Industrial Corporate, Industrial Engineering, Industrial Factory, Industrial HTML5, Industry, Machinery, Manufacturing, Mechanical Engineering, Power Energy">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- :: Bootstrap CSS -->
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">

     <!-- :: Favicon -->
     <link rel="icon" type="image/png" href="assets/images/favicon.png">


 <!-- :: Google Fonts -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&family=Heebo:wght@400;500;600;700&display=swap">

 <!-- :: Fontawesome -->
 <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">

 <!-- :: Flaticon -->
 <link rel="stylesheet" href="assets/fonts/flaticon/style.css">

 <!-- :: Animate -->
 <link rel="stylesheet" href="assets/css/animate.css">

 <!-- :: Owl Carousel -->
 <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
 <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

 <!-- :: Lity -->
 <link rel="stylesheet" href="assets/css/lity.min.css">

 <!-- :: Nice Select CSS -->
 <link rel="stylesheet" href="assets/css/nice-select.css">

 <!-- :: Magnific Popup CSS -->
 <link rel="stylesheet" href="assets/css/magnific-popup.css">

 <!-- :: Style CSS -->
 <link rel="stylesheet" href="assets/css/style.css">

 <!-- :: Style Responsive CSS -->
 <link rel="stylesheet" href="assets/css/responsive.css">

 <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->
</head>
<body>
        <div class="loading">
            <div class="loading-box">
                <div class="lds-roller">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>

        <!-- :: All Navbar -->
        <header class="all-navbar fixed-top">
            <!-- :: Navbar -->
            <nav class="nav-bar">
                <div class="container">
                    <div class="content-box d-flex align-items-center justify-content-between">
                        <div class="logo">
                            <a href="index.html" class="logo-nav">
                                <img class="img-fluid one" src="{{ asset('/assets/images/logo/logo.png') }}" alt="01 Logo">
                                <img class="img-fluid two" src="{{ asset('/assets/images/logo/logo.png') }}" alt="02 Logo">
                            </a>
                            <a href="#open-nav-bar-menu" class="open-nav-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <div class="nav-bar-links" id="open-nav-bar-menu">
                            <ul class="level-1">
                                <li class="item-level-1">
                                    <a href="/" class="link-level-1 {{ request()->is('/') ? 'color-active' : '' }}">Home</a>
                                </li>
                                <li class="item-level-1">
                                    <a href="{{ route('about-us') }}" class="link-level-1 {{ request()->is('about-us') ? 'color-active' : '' }}">About Us</a>
                                </li>
                                <li class="item-level-1">
                                    <a href="{{ route('Products') }}" class="link-level-1 {{ request()->is('Products') ? 'color-active' : '' }}">Products</a>
                                </li>
                                <li class="item-level-1">
                                    <a href="{{ route('blogs') }}" class="link-level-1 {{ request()->is('blogs') ? 'color-active' : '' }}">Our Blog</a>
                                </li>
                                <li class="item-level-1">
                                    <a href="{{ route('contact-us') }}" class="link-level-1 {{ request()->is('contact-us') ? 'color-active' : '' }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="nav-bar-tools d-flex align-items-center justify-content-between">
                            <li class="item phone">
                                <div class="nav-bar-contact">
                                    <i class="ar-icons-phone"></i>
                                    <div class="content-box">
                                        <span>Phone Number</span>
                                        <a href="tel:0265 258 1478">0265 258 1478</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <span class="menu-icon open"><i class="fas fa-list"></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- :: Menu Box -->
        <div class="menu-box">
            <div class="inner-menu">
                <div class="website-info">
                    <a href="index.html" class="logo"><img class="img-fluid" src="{{ asset('/assets/images/logo/logo.png') }}" alt="02 Logo"></a>
                    <p>{{ config('app.name', 'Laravel') }} stands as a distinguished manufacturer of an extensive array of steel goods tailored to meet diverse industrial requirements. Our commitment to precision and dedication propels us to craft steel products with meticulous attention to detail. Employing cutting-edge technology, ongoing research, and decades of expertise, our offerings reflect the pinnacle of quality and innovation.</p>
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <div class="contact-box">
                        <i class="ar-icons-call"></i>
                        <div class="box">
                            <a class="phone" href="tel:0265 258 1478">0265 258 1478</a>
                            <a class="phone" href="tel:=9195866 97873">95866 97873</a>
                        </div>
                    </div>
                    <div class="contact-box">
                        <i class="ar-icons-email"></i>
                        <div class="box">
                            <a class="mail" href="mailto:support@jineshwarsteels.com">support@jineshwarsteels.com</a>
                            <a class="mail" href="mailto:support@jineshwarsteels.com">info@jineshwarsteels.com</a>
                        </div>
                    </div>
                    <div class="contact-box">
                        <i class="ar-icons-location"></i>
                        <div class="box">
                            <p>Narsihaji Estate, Eadi,</p>
                            <p>near Yamuna Mill Road,Moghul Wada,</p>
                            <p>Vadodara, Gujarat 390004</p>

                        </div>
                    </div>
                </div>
                <div class="follow-us">
                    <h4>Follow Us</h4>
                    <ul class="icon-follow">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <span class="menu-box-icon exit"><i class="fas fa-times"></i></span>
            </div>
        </div>



            @yield('content')


   <!-- :: Footer -->
   <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="logo">
                    <img class="img-fluid" src="{{ asset('assets/images/logo/logo.png') }}" alt="Footer Logo" style="    background: #fff; border-radius: 10px;     padding: 3px;">
                    <p>{{ config('app.name', 'Laravel') }} Are A Industry &amp; Manufacturing Services Provider Institutions. Suitable For Factory, Manufacturing, Industry, Engineering, Construction And Any Related Industry Care Field.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-2">
                <div class="footer-title">
                    <h4>Quick Link</h4>
                </div>
                <ul class="links">
                    <li><a href="01_about-us.html">About Us</a></li>
                    <li><a href="01_team.html">Meet Our Team</a></li>
                    <li><a href="02_blog">Read All News</a></li>
                    <li><a href="01_projects.html">Our Projects</a></li>
                    <li><a href="01_contact.html">Contact</a></li>
                    <li><a href="01_careers.html">Careers</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-2">
                <div class="footer-title">
                    <h4>Industries</h4>
                </div>
                <ul class="links">
                    <li><a href="01_single-services.html">Retail &amp; Consumer</a></li>
                    <li><a href="01_single-services.html">Sciences &amp; Healthcare</a></li>
                    <li><a href="01_single-services.html">Industrial &amp; Chemical</a></li>
                    <li><a href="01_single-services.html">Power Generation</a></li>
                    <li><a href="01_single-services.html">Food &amp; Beverage</a></li>
                    <li><a href="01_single-services.html">Oil &amp; Gas</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-2">
                <div class="footer-title">
                    <h4>Product</h4>
                </div>
                <ul class="links">
                    <li><a href="01_services.html">Services</a></li>
                    <li><a href="01_sponsors.html">Sponsors</a></li>
                    <li><a href="error-page.html">Error Page</a></li>
                    <li><a href="01_faqs.html">FAQs</a></li>
                    <li><a href="01_shop.html">Shop</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="footer-title">
                    <h4>Newsletter</h4>
                </div>
                <div class="newsletter">
                    <p>Sign up for industry alerts, our latest news, thoughts, and insights from {{ config('app.name', 'Laravel') }}.</p>
                    <form>
                        <input type="email" name="email" placeholder="Your Email Address" required>
                        <button type="submit"><i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
                <ul class="icon">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>@ {{ date('Y') }} {{ config('app.name', 'Laravel') }}. With Love by <a href="https://1.envato.market/AR-Coder">Jasmin Shukla</a></p>
            <ul>
                <li><a href="#">Terms &amp; Conditions </a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Sitemap</a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- :: Scroll UP -->
<div class="scroll-up">
    <a class="move-section" href="#page">
        <i class="fas fa-long-arrow-alt-up"></i>
    </a>
</div>

<!-- :: JavaScript Files -->
<!-- :: jQuery JS -->
<script src="assets/js/jquery-3.6.0.min.js"></script>

<!-- :: Bootstrap JS Bundle With Popper JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- :: Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- :: Lity -->
<script src="assets/js/lity.min.js"></script>

<!-- :: Nice Select -->
<script src="assets/js/jquery.nice-select.min.js"></script>

<!-- :: Waypoints -->
<script src="assets/js/jquery.waypoints.min.js"></script>

<!-- :: CounterUp -->
<script src="assets/js/jquery.counterup.min.js"></script>

<!-- :: Magnific Popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>

<!-- :: MixitUp -->
<script src="assets/js/mixitup.min.js"></script>

<!-- :: Main JS -->
<script src="assets/js/main.js"></script><script src="assets/js/ajax-script.js"></script>
</body>
</html>
