{{-- 
|--------------------------------------------------------------------------
| Blog Page (Laravel Blade Version)
|--------------------------------------------------------------------------
| This is the Laravel-optimized version of your original HTML file.
| All file paths, anchors, and assets are converted using Laravel helpers.
| Author: Gulf Equestrian (converted for Laravel by ChatGPT)
| Date: October 2025
|--------------------------------------------------------------------------
--}}

<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Basic Meta --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="Gulf Equestrian - Blog Article">
    <meta name="keywords" content="Equestrian, Blog, Horses, Gulf">
    <meta name="author" content="Awaiken">

    {{-- Page Title --}}
    <title>Beginner's Guide | Gulf Equestrian</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    {{-- Stylesheets (Loaded via Laravel asset helper) --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mousecursor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>

    {{-- ===================== PRELOADER ===================== --}}
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon">
                <img src="{{ asset('images/loader.svg') }}" alt="Loading">
            </div>
        </div>
    </div>

    {{-- ===================== TOPBAR ===================== --}}
    <div class="topbar bg-section">
        <div class="container">
            <div class="row align-items-center">
                {{-- Left: Contact Info --}}
                <div class="col-lg-7 col-md-7">
                    <div class="topbar-contact-info">
                        <ul>
                            <li>
                                <img src="{{ asset('images/icon-phone-accent.svg') }}" alt="">
                                <span>Phone: </span>
                                <a href="tel:+12066515586">+1 (206) 651-5586</a>
                            </li>
                            <li>
                                <img src="{{ asset('images/icon-mail-accent.svg') }}" alt="">
                                <span>Email: </span>
                                <a href="mailto:info@gulfequestrian.com">info@gulfequestrian.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Right: Social Links --}}
                <div class="col-lg-5 col-md-5">
                    <div class="topbar-social-links">
                        <ul>
                            <li><a href="https://www.facebook.com/GulfEquestrian" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://x.com/GulfEquestrian" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="https://instagram.com/GulfEquestrian" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/kuwait-equestrian/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ===================== HEADER ===================== --}}
    <header class="main-header">
        <div class="header-sticky bg-section">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    {{-- Logo --}}
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo">
                    </a>

                    {{-- Navbar Menu --}}
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>

                                {{-- Competitions Dropdown --}}
                                <li class="nav-item submenu">
                                    <a class="nav-link" href="{{ url('/competitions') }}">Competitions</a>
                                    <ul>
                                        <li><a href="{{ url('/competitions/kuwait') }}">Kuwait</a></li>
                                        <li><a href="{{ url('/competitions/saudi') }}">Saudi Arabia</a></li>
                                        <li><a href="{{ url('/competitions/uae') }}">United Arab Emirates</a></li>
                                        <li><a href="{{ url('/competitions/qatar') }}">Qatar</a></li>
                                        <li><a href="{{ url('/competitions/bahrain') }}">Bahrain</a></li>
                                        <li><a href="{{ url('/competitions/oman') }}">Oman</a></li>
                                    </ul>
                                </li>

                                <li><a class="nav-link" href="{{ url('/marketplace') }}">Marketplace</a></li>

                                {{-- Equine Directory --}}
                                <li class="nav-item submenu">
                                    <a class="nav-link" href="{{ url('/equine-directory') }}">Equine Directory</a>
                                    <ul>
                                        <li><a href="{{ url('/equine-directory/kuwait') }}">Kuwait</a></li>
                                        <li><a href="{{ url('/equine-directory/saudi') }}">Saudi Arabia</a></li>
                                        <li><a href="{{ url('/equine-directory/uae') }}">United Arab Emirates</a></li>
                                        <li><a href="{{ url('/equine-directory/qatar') }}">Qatar</a></li>
                                        <li><a href="{{ url('/equine-directory/bahrain') }}">Bahrain</a></li>
                                        <li><a href="{{ url('/equine-directory/oman') }}">Oman</a></li>
                                    </ul>
                                </li>

                                <li><a class="nav-link active" href="{{ url('/blog') }}">Blog</a></li>
                                <li><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
                            </ul>
                        </div>

                        {{-- WhatsApp Button --}}
                        <div class="header-btn">
                            <a href="https://wa.me/12066515586" target="_blank" class="btn-default">Whatsapp Us</a>
                        </div>
                    </div>

                    <div class="navbar-toggle"></div>
                </div>
            </nav>

            {{-- Responsive Menu --}}
            <div class="responsive-menu"></div>
        </div>
    </header>

    {{-- ===================== PAGE HEADER ===================== --}}
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Beginner's Guide to Understanding...</h1>
                        <div class="post-single-meta wow fadeInUp">
                            <ol class="breadcrumb">
                                <li><i class="fa-regular fa-user"></i> Admin</li>
                                <li><i class="fa-regular fa-clock"></i> 01 Aug, 2025</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ===================== BLOG CONTENT ===================== --}}
    <div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- Featured Image --}}
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('images/hero-image-2.jpg') }}" alt="Blog Featured Image">
                        </figure>
                    </div>

                    {{-- Post Content --}}
                    <div class="post-content">
                        <div class="post-entry">
                            <p class="wow fadeInUp">Understanding horse behavior ...</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">By understanding how horses think ...</p>

                            <blockquote class="wow fadeInUp" data-wow-delay="0.4s">
                                <p>Sudden movements, loud noises ... consistency, kindness.</p>
                            </blockquote>

                            <p class="wow fadeInUp" data-wow-delay="0.6s">Many beginners overlook the fact ...</p>

                            <h2 class="wow fadeInUp" data-wow-delay="0.8s">Where every rider's journey truly begins with care</h2>

                            <p class="wow fadeInUp" data-wow-delay="1s">That's why calm, clear communication ...</p>

                            <ul class="wow fadeInUp" data-wow-delay="1.2s">
                                <li>Learn how to read your horse's body language...</li>
                                <li>Understand the natural instincts...</li>
                                <li>Discover the impact of routine...</li>
                                <li>Develop emotional awareness...</li>
                                <li>Master the basics of equine psychology...</li>
                            </ul>

                            <p class="wow fadeInUp" data-wow-delay="1.4s">Understanding your horse goes far beyond...</p>
                        </div>

                        {{-- Post Tags + Socials --}}
                        <div class="post-tag-links">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="post-tags wow fadeInUp" data-wow-delay="0.5s">
                                        <span class="tag-links">
                                            Tags:
                                            <a href="#">Explore</a>
                                            <a href="#">Join</a>
                                            <a href="#">Learn</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s">
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> {{-- End post-content --}}
                </div>
            </div>
        </div>
    </div>

    {{-- ===================== FOOTER ===================== --}}
    <footer class="main-footer bg-section dark-section">
        <div class="container">
            <div class="row">
                {{-- Left: About Section --}}
                <div class="col-lg-4 col-md-12">
                    <div class="about-footer">
                        <div class="footer-logo">
                            <img src="{{ asset('images/footer-logo.png') }}" alt="Footer Logo">
                        </div>
                        <div class="about-footer-content">
                            <p>Gulf Equestrian provides a convenient solution ...</p>
                        </div>
                        <div class="footer-newsletter-form">
                            <form id="newslettersForm" method="POST" action="#">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control" placeholder="Enter Your Email Address *" required>
                                    <button type="submit" class="newsletter-btn"><i class="fa-regular fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Right: Links + Contact --}}
                <div class="col-lg-8">
                    <div class="footer-links-box">
                        {{-- Quick Links --}}
                        <div class="footer-links quick-links">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/competitions') }}">Competitions</a></li>
                                <li><a href="{{ url('/equine-directory') }}">Equine Directory</a></li>
                                <li><a href="{{ url('/marketplace') }}">Marketplace</a></li>
                            </ul>
                        </div>

                        {{-- Services --}}
                        <div class="footer-links service-links">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="{{ url('/blog') }}">Blog</a></li>
                                <li><a href="{{ url('/about') }}">About Us</a></li>
                                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                                <li><a href="{{ url('/advertise') }}">Advertise Here</a></li>
                            </ul>
                        </div>

                        {{-- Contact Info --}}
                        <div class="footer-links footer-contact-links">
                            <h3>Contact Information</h3>
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-phone-white.svg') }}" alt="">
                                </div>
                                <div class="footer-contact-content">
                                    <h3>Phone Number</h3>
                                    <p><a href="tel:+12066515586">+1 (206) 651-5586</a></p>
                                </div>
                            </div>

                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-mail-white.svg') }}" alt="">
                                </div>
                                <div class="footer-contact-content">
                                    <h3>Email Address</h3>
                                    <p><a href="mailto:info@gulfequestrian.com">info@gulfequestrian.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bottom Footer --}}
                <div class="col-lg-12">
                    <div class="footer-copyright">
                        <div class="footer-copyright-text">
                            <p>Copyright © 2025 All Rights Reserved.</p>
                        </div>
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="https://www.facebook.com/GulfEquestrian" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://x.com/GulfEquestrian" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/GulfEquestrian" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/gulf-equestrian" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- ===================== SCRIPTS ===================== --}}
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('js/parallaxie.js') }}"></script>
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/magiccursor.js') }}"></script>
    <script src="{{ asset('js/SplitText.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/function.js') }}"></script>
</body>
</html>
