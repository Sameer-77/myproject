<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
    <title>Gulf Equestrian</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
	<!-- Swiper Css -->
	<link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
	<!-- Font Awesome Icon Css-->
	<link href="{{ asset('css/all.min.css') }}" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
	<!-- Mouse Cursor Css File -->
	<link href="{{ asset('css/mousecursor.css') }}" rel="stylesheet">
	<!-- Main Custom Css -->
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="screen">
</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="images/loader.svg" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

    <!-- Topbar Section Start -->
    <div class="topbar bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <!-- Topbar Contact Information Start -->
                    <div class="topbar-contact-info">
                        <ul>
                            <li><img src="images/icon-phone-accent.svg" alt=""><span>Phone: </span><a href="tel:+1(206)651-5586">+1(206)651-5586</a></li>
                            <li><img src="images/icon-mail-accent.svg" alt=""><span>Email: </span><a href="mailto:info@gulfequestrian.com">info@gulfequestrian.com</a></li>
                        </ul>
                    </div>
                    <!-- Topbar Contact Information End -->
                </div>

                <div class="col-lg-5 col-md-5">
                    <!-- Topbar Social Links Start -->
                    <div class="topbar-social-links">
                        <ul>
                            <li><a href="https://www.facebook.com/GulfEquestrian" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://x.com/GulfEquestrian" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="instagram.com/GulfEquestrian" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/kuwait-equestrian/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- Topbar Social Links End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky bg-section">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="{{ url('/') }}">
    <img src="{{ asset('images/logo.png') }}" alt="Logo">
</a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>                                
    <li class="nav-item submenu"><a class="nav-link" href="{{ url('/competitions') }}">Competitions</a>
        <ul>
            <li class="nav-item"><a class="nav-link" href="{{ url('/competitions/kuwait') }}">Kuwait</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/competitions/saudi-arabia') }}">Saudi Arabia</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/competitions/uae') }}">United Arab Emirates</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/competitions/qatar') }}">Qatar</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/competitions/bahrain') }}">Bahrain</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/competitions/oman') }}">Oman</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/competitions/other') }}">Other</a></li>
        </ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ url('/marketplace') }}">Marketplace</a></li>
    <li class="nav-item submenu"><a class="nav-link" href="{{ url('/equine-directory') }}">Equine Directory</a>
        <ul>
            <li class="nav-item"><a class="nav-link" href="{{ url('/equine-directory/kuwait') }}">Kuwait</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/equine-directory/saudi-arabia') }}">Saudi Arabia</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/equine-directory/uae') }}">United Arab Emirates</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/equine-directory/qatar') }}">Qatar</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/equine-directory/bahrain') }}">Bahrain</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/equine-directory/oman') }}">Oman</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/equine-directory/other') }}">Other</a></li>
        </ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
</ul>
                        </div>
                        
                        <!-- Header Btn Start -->
                        <div class="header-btn">
    <a href="http://wa.me/1-206-651-5586" class="btn-default">Whatsapp Us</a>
</div>
                        <!-- Header Btn End -->
                    </div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->

    <!-- Hero Start -->
    <div class="hero hero-slider-layout bg-section dark-section parallaxie">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="images/hero-image.jpg" alt="">
                        </div>
                        <!-- Slider Image End -->
                    </div>
                </div>
                <!-- Hero Slide End -->

                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="images/hero-image-2.jpg" alt="">
                        </div>
                        <!-- Slider Image End -->
                    </div>
                </div>
                <!-- Hero Slide End -->
            </div>
        </div>        
    </div>
    <!-- Hero End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-us-image">
                        <!-- About Image Box 1 Start -->
                        <div class="about-image-box-1">
                            <!-- About Us Image 1 Start -->
                            <div class="about-us-img-1">
                                <figure class="image-anime reveal">
                                    <img src="images/about-us-img-1.jpg" alt="">
                                </figure>
                            </div>
                            <!-- About Us Image 1 End -->                           
                        </div>
                        <!-- About Image Box 1 End -->

                        <!-- About Image Box 2 Start -->
                        <div class="about-image-box-2">

                            <!-- About Us Image 2 Start -->
                            <div class="about-us-img-2">
                                <figure class="image-anime reveal">
                                    <img src="images/about-us-img-2.jpg" alt="">
                                </figure>
                            </div>
                            <!-- About Us Image 2 End -->
                            
                            <!-- About Us Image 2 Start -->
                            <div class="about-us-img-3">
                                <figure class="image-anime reveal">
                                    <img src="images/about-us-img-3.jpg" alt="">
                                </figure>
                            </div>
                            <!-- About Us Image 2 End -->
                        </div>
                        <!-- About Image Box 2 End -->
                    </div>
                </div>
                <!-- About Us Image End -->

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Tradition. Trust. Together.</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Your Equestrian Hub for <span>Competitions, Results, and More</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Gulf Equestrian provides a convenient solution to horse riders and owners by bringing together. personalized information about events, competitions, results and horse management tools.</p>
                        </div>
                        <!-- Section Title End -->
                        
                        <!-- About Us Body Start -->
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.4s">
                            <!-- About Us Body Item Start -->
                            <div class="about-us-body-item">
                                <div class="icon-box">
                                    <img src="images/ads.svg" alt="">
                                </div>
                                <div class="about-body-item-content">
                                    <h3>Advertise Here</h3>
                                    <p>Promote your brand, products, or riding center to riders and equestrian fans across the Gulf. Become a media sponsor or advertise with us on our website and social channels.</p>
                                </div>
                            </div>
                            <!-- About Us Body Item End -->
                            
                            <!-- About Us Body Item Start -->
                            <div class="about-us-body-item">
                                <div class="icon-box">
                                    <img src="images/sale.svg" alt="">
                                </div>
                                <div class="about-body-item-content">
                                    <h3>Sell With Us</h3>
                                    <p>List your horses, tack, services, or equestrian products on our Marketplace for free. Open to riders, owners, and businesses across the region.</p>
                                </div>
                            </div>
                            <!-- About Us Body Item End -->
                        </div>
                        <!-- About Us Body End -->
                        
                        <!-- About Us Button Start -->
                        <div class="about-us-btn wow fadeInUp" data-wow-delay="0.6s" style="display: flex; justify-content: space-between;">
    <a href="{{ url('/about') }}" class="btn-default">Advertise Here</a>
    <a href="{{ url('/about') }}" class="btn-default">Sell with us</a>
</div>
                        <!-- About Us Button End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->
    
    <!-- Our Testimonial Section Start -->
    <div class="our-testimonial">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our Social Clubs</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Two Accounts. One Passion.</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <!-- Testimonial Image Start -->
                    <div class="testimonial-image-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="testimonial-image">
                            <figure class="image-anime">
                                <img src="images/testimonial-image.jpg" alt="">
                            </figure>
                        </div>
                        <div class="testimonial-review-box">
                            <!-- Satisfy Client Images Start -->
                            <h3><a href="https://linktr.ee/gulfequestrian" class="text-white" target="_blank">Kuwait Equestrian Social <img src="images/arrow-primary.svg" alt=""></a></h3>
                            <!-- Satisfy Client Images End -->
                        </div>
                    </div>
                    <!-- Testimonial Image End -->
                </div>
                
                <div class="col-lg-6">
                    <!-- Testimonial Image Start -->
                    <div class="testimonial-image-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="testimonial-image">
                            <figure class="image-anime">
                                <img src="images/testimonial-image2.jpg" alt="">
                            </figure>
                        </div>
                        <div class="testimonial-review-box">
                            <!-- Satisfy Client Images Start -->
                            <h3><a href="https://linktr.ee/gulfequestrian" class="text-white" target="_blank">Gulf Equestrian Social</a></h3>
                            <!-- Satisfy Client Images End -->
                        </div>
                    </div>
                    <!-- Testimonial Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonial Section End -->

    <!-- Our Blog Section Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our Blogs</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Explore tips, stories, and insights from the <span>Gulf Equestrian</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="blog-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/competition-1.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="blog-single.html">Kuwait National Dressage Competition Rules and Regulations</a></h2>
                                <p>Kuwait Dressage Academy is organizing the first open national dressage competition in Kuwait.</p>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Readmore Button Start-->
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Readmore Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="blog-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/competition-2.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="blog-single.html">Kuwait Show Jumping Points System 2021-2022</a></h2>
                                <p>Understanding horse behavior is key to building trust and a strong connection...</p>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Readmore Button Start-->
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Readmore Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="blog-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/competition-3.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="blog-single.html">Important Instructions for the 3rd KRC Local Show</a></h2>
                                <p>We advise all the participants, trainers and officials to avoid grouping and to keep 1.5m distance</p>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Readmore Button Start-->
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Readmore Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->

    <!-- Footer Start -->
    <footer class="main-footer bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="images/footer-logo.png" alt="">
                        </div>
                        <!-- Footer Logo End -->
    
                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p>Gulf Equestrian provides a convenient solution to horse riders and owners by bringing together.</p>
                        </div>
                        <!-- About Footer Content End -->

                        <!-- Footer Newsletter Box Start -->
                        <div class="footer-newsletter-form">
                            <form id="newslettersForm" action="#" method="POST">
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control" id="mail" placeholder="Enter Your Email Address *" required>
                                    <button type="submit" class="newsletter-btn"><i class="fa-regular fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- Footer Newsletter Box End -->
                    </div>
                    <!-- About Footer End -->
                </div>
    
                <div class="col-lg-8">
                    <!-- Footer Links Box Start -->
                    <div class="footer-links-box">
                        <!-- Footer Links Start -->
                        <div class="footer-links quick-links">
    <h3>quick links</h3>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/competitions') }}">Competitions</a></li>
        <li><a href="{{ url('/equine-directory') }}">Equine Directory</a></li>
        <li><a href="{{ url('/marketplace') }}">Marketplace</a></li>
    </ul>
</div>
                        <!-- Footer Links End -->
    
                        <!-- Footer Links Start -->
                        <div class="footer-links service-links">
    <h3>Services</h3>
    <ul>
        <li><a href="{{ url('/blog') }}">Blog</a></li>
        <li><a href="{{ url('/about') }}">About Us</a></li>
        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
        <li><a href="{{ url('/advertise') }}">Advertise Here</a></li>
    </ul>
</div>
                        <!-- Footer Links End -->
    
                        <!-- Footer Links Start -->
                        <div class="footer-links footer-contact-links">
                            <h3>Contact Information</h3>

                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="images/icon-phone-white.svg" alt="">
                                </div>
                                <div class="footer-contact-content">
                                    <h3>Phone Number</h3>
                                    <p><a href="tel:+1(206)651-5586">+1(206)651-5586</a></p>
                                </div>
                            </div>
                            <!-- Footer Contact Item End -->
    
                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="images/icon-mail-white.svg" alt="">
                                </div>
                                <div class="footer-contact-content">
                                    <h3>Email Address</h3>
                                    <p><a href="mailto:info@gulfequestrian.com">info@gulfequestrian.com</a></p>
                                </div>
                            </div>
                            <!-- Footer Contact Item End -->
                        </div>
                        <!-- Footer Links End -->
                    </div>
                    <!-- Footer Links Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Footer Copyright Start -->
                    <div class="footer-copyright">
                        <!-- Footer Copyright Text Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © 2025 All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright Text End -->                        
                        
                        <!-- Footer Social Link Start -->
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="https://www.facebook.com/GulfEquestrian" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://x.com/GulfEquestrian" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/GulfEquestrian" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/gulf-equestrian" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <!-- Footer Social Link End -->
                    </div>
                    <!-- Footer Copyright End -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Jquery Library File -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('js/SplitText.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('js/function.js') }}"></script>
</body>
</html>