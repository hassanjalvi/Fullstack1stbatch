<!doctype html>
<html>

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') |Gymmer</title>

    <!-- Fav Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/fav-icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/fav-icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/fav-icons/favicon-16x16.png">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/fontawesome/css/fontawesome-all.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/flaticon/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="dependencies/owl.carousel/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/owl.carousel/css/owl.theme.default.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/magnific-popup/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="dependencies/animate.css/css/animate.css" type="text/css">
    <link rel="stylesheet" href="dependencies/slick-carousel/css/slick.css" type="text/css">
    <link rel="stylesheet" href="dependencies/slick-carousel/css/slick-theme.css" type="text/css">
    <link rel="stylesheet" href="dependencies/material-design-icons/css/material-icons.css">
    <link rel="stylesheet" href="dependencies/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="dependencies/aos/css/aos.css">
    <link rel="stylesheet" href="dependencies/rangeslider.js/css/rangeslider.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css" type="text/css">

    <link id="theme" rel="stylesheet" href="assets/css/theme-color/theme-default.css" type="text/css">

    <!-- Google Web Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CRoboto:300,400,500,700,900"
        rel="stylesheet">
    <style>
        /* Custom CSS */

        .section-title span {
            color: #3ad82e;
            /* Main color */
            font-size: 20px;
            font-weight: 700;
        }

        .section-title h2 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 50px;
        }

        .ps-item {
            background-color: #1a1a1a;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 30px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }

        .ps-item h3 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .pi-price h2 {
            color: #ff6200;
            /* Orange color for price */
            font-size: 48px;
            margin-bottom: 10px;
        }

        .pi-price span {
            color: #fff;
            /* White text for class type */
            font-size: 18px;
        }

        .ps-item ul {
            list-style: none;
            padding: 0;
            margin: 30px 0;
        }

        .ps-item ul li {
            font-size: 16px;
            margin-bottom: 10px;
            color: #ccc;
            /* Light gray for list items */
        }

        .primary-btn {
            background-color: #3ad82e;
            color: #000;
            padding: 12px 30px;
            border-radius: 50px;
            display: inline-block;
            font-weight: 700;
            text-transform: uppercase;
        }

        .primary-btn:hover {
            background-color: #34c626;
            color: #fff;
        }

        .thumb-icon i {
            color: #fff;
            /* White color for icon */
            font-size: 20px;
        }
    </style>

</head>

<body id="home-version-1" class="home-version-1" data-style="default">

    <!-- <div id="loader-wrapper">
        <div class="loader">
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
        </div>
    </div> -->

    <div id="site">


        <!--=========================-->
        <!--=        Navbar         =-->
        <!--=========================-->
        <header id="header" class="header_area hdr_area_two hdr_area_four">
            <!-- Start top toolbar -->
            <section class="top_toolbar top_toolbar_new">
                <div class="vigo_container_one">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="toolbar_left">
                                <p><span>Get 30% Discounts!</span> Offer ends in</p>
                                <div id="count_down"></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="toolbar_right">
                                <ul>
                                    <li class="search">
                                        <i class="fas fa-search"></i>
                                    </li>
                                    <li class="cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <div class="cart_detail">
                                            <div class="single_cart">
                                                <div class="cart_left">
                                                    <img src="media/images/banner-two/cart-one.png" alt="">
                                                </div>
                                                <div class="cart_right">
                                                    <h3>Vaxin Regular Big Name</h3>
                                                    <p>$66 <sup>USD</sup></p>
                                                </div>
                                            </div>
                                            <div class="single_cart">
                                                <div class="cart_left">
                                                    <img src="media/images/banner-two/cart-two.png" alt="">
                                                </div>
                                                <div class="cart_right">
                                                    <h3>Vaxin Woman</h3>
                                                    <p>$76 <sup>USD</sup></p>
                                                </div>
                                            </div>
                                            <div class="cart_more">
                                                <a href="#">View Cart <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phone">
                                        <a href="#">
                                            <i class="fas fa-phone"></i>
                                            Call +123 4567890
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End top toolbar -->

            <!-- Start Main Menu -->
            <section class="header_nav">
                <div class="vigo_container_one">
                    <div class="row">
                        <div class="col-auto mr-auto">
                            <div class="header_logo">
                                <a href="index-2.html">
                                    <img class="logo-default" src="media/images/home6/logo.png" alt="">
                                    <img class="logo-white" src="media/images/home6/footer-logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto no-position">
                            <nav class="main_menu">
                                <ul id="example-one">
                                    <li>
                                        <a class="current_page_item active" href="index-2.html">Home</a>
                                        
                                    </li>
                                 
                                    <li>
                                        <a href="feature.html">Feature</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/product')}}">Product</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('/collection')}}">Collection All</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{url('/ingredient')}}">Ingredient</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-details.html">blog-details</a></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{url('/contact')}}">Contact</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('/contact')}}">contact</a></li>
                                            <li><a href="{{url('/about')}}">About</a></li>
                                            <li><a href="{{url('/privacy')}}">privacy</a></li>
                                            <li><a href="{{url('/signin')}}">Sign in</a></li>
                                            <li><a href="{{url('/signup')}}">Sign Up</a></li>

                                        </ul>
                                    </li>
                                    <li class="inherit">
                                        <a href="#">Megamenu</a>
                                        <section class="megamenu">
                                            <div class="column">
                                                <div class="mm-header">
                                                    <h3>TOP PRODUCTS</h3>
                                                </div>
                                                <div class="megamenu-product-slider owl-carousel">
                                                    <div class="megamenu-product-highlight-single">
                                                        <div class="sn_related_product">
                                                            <div class="sn_pd_img">
                                                                <a href="#">
                                                                    <img src="media/images/popup/product-one.png"
                                                                        alt="!">
                                                                </a>
                                                                <span>$12</span>
                                                            </div>
                                                            <div class="sn_pd_rating">
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                            </div>
                                                            <div class="sn_pd_detail">
                                                                <a href="#">
                                                                    <h5>Vaxin Regular (500mg), Mild Intake 150 pcs</h5>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="megamenu-product-highlight-single">
                                                        <div class="sn_related_product">
                                                            <div class="sn_pd_img">
                                                                <a href="#">
                                                                    <img src="media/images/popup/product-two.png"
                                                                        alt="!">
                                                                </a>
                                                                <span>$12</span>
                                                            </div>
                                                            <div class="sn_pd_rating">
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                            </div>
                                                            <div class="sn_pd_detail">
                                                                <a href="#">
                                                                    <h5>Vaxin Regular (500mg), Mild Intake 150 pcs</h5>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="megamenu-product-highlight-single">
                                                        <div class="sn_related_product">
                                                            <div class="sn_pd_img">
                                                                <a href="#">
                                                                    <img src="media/images/popup/product-one.png"
                                                                        alt="!">
                                                                </a>
                                                                <span>$12</span>
                                                            </div>
                                                            <div class="sn_pd_rating">
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                            </div>
                                                            <div class="sn_pd_detail">
                                                                <a href="#">
                                                                    <h5>Vaxin Regular (500mg), Mild Intake 150 pcs</h5>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="megamenu-product-highlight-single">
                                                        <div class="sn_related_product">
                                                            <div class="sn_pd_img">
                                                                <a href="#">
                                                                    <img src="media/images/popup/product-two.png"
                                                                        alt="!">
                                                                </a>
                                                                <span>$12</span>
                                                            </div>
                                                            <div class="sn_pd_rating">
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="far fa-star"></i>
                                                                </a>
                                                            </div>
                                                            <div class="sn_pd_detail">
                                                                <a href="#">
                                                                    <h5>Vaxin Regular (500mg), Mild Intake 150 pcs</h5>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column">
                                                <div class="column-inner">
                                                    <div class="mm-header">
                                                        <h3>LINKS</h3>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-caret-right"></i>
                                                            <a href="about.html">About Us</a>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-caret-right"></i>
                                                            <a href="supplement.html">Our Supplement</a>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-caret-right"></i>
                                                            <a href="collection.html">Our Product</a>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-caret-right"></i>
                                                            <a href="feature.html">All Featurer</a>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-caret-right"></i>
                                                            <a href="ingredient.html">All Ingredient</a>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-caret-right"></i>
                                                            <a href="blog.html">Our Blog</a>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-caret-right"></i>
                                                            <a href="contact.html">Contact Us</a>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-caret-right"></i>
                                                            <a href="faq.html">FAQ</a>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-caret-right"></i>
                                                            <a href="privacy.html">Privacy Policy</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="column">
                                                <div class="mm-header">
                                                    <h3>WATCH THE PROMOTIONAL</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Let the
                                                        lorem ipsum work for your demo!</p>
                                                </div>
                                                <div class="video-popup">
                                                    <a href="https://www.youtube.com/watch?v=b-TGpa0SDXw"
                                                        class="pop-up" data-effect="mfp-move-horizontal">
                                                        <i class="material-icons play">
                                                            play_arrow
                                                        </i>
                                                    </a>
                                                </div>

                                                <div class="sharing-caring">
                                                    <div class="mm-header">
                                                        <h3>SHARING IS CARING</h3>
                                                    </div>
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fab fa-medium-m"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fab fa-tumblr"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </section>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto">
                            <div class="hdr_btn_wrapper">
                                <a href="{{ url('/signin') }}">
                                    <i class="fas fa-caret-right"></i> Login
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search_detail_two">
                    <form action="#">
                        <input type="text" placeholder="Search Your key...">
                        <button><i class="material-icons">
                                search
                            </i>
                        </button>
                    </form>
                    <div class="search_detail_two_close">
                        <i class="material-icons">
                            clear
                        </i>
                    </div>
                </div>
            </section>
            <!-- End Main Menu -->

            <!-- Start Mobile Menu outer-->
            <section id="mobile-nav-wrap" class="clearfix">
                <div class="mobile_toolbar">
                    <div class="vigo_container_one">
                        <div class="top_toolbar_right">
                            <div class="phone_number">
                                <span class="flaticon-phone-call"></span> <a href="#">+1 (895) 852–6523</a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="vigo_container_one">
                    <div class="bottom_nav bottom_nav_two">
                        <div id="mobile-logo">
                            <a href="index-2.html">
                                <img src="assets/img/hm-two-logo.png" class="svg" alt="">
                            </a>
                        </div>
                        <div class="toggle-inner">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Mobile Menu outer-->
        </header>