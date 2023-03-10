<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/bites-logo.png') }}">

    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slinky.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custome.css') }}" rel="stylesheet">
</head>

<body>
    <!-- header start -->
    @include('layouts.front-inc.header')
    <!-- header end -->

    @yield('content')

    <!-- insta feed end -->
    <footer class="footer-area">
        <div class="footer-top-area bg-img pt-105 pb-65" style="background-image: url(frontend/assets/img/bg/bg-food.jpg)"
            data-overlay="9">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-3">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title">Custom Pages</h3>
                            <div class="footer-widget-content">
                                <ul>
                                    <li><a href="{{ route('cart') }}">Cart</a></li>
                                    <li><a href="javascript:void(0)">My Account</a></li>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    <li><a href="{{ route('contact') }}">Support</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-3">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title">Custom Service</h3>
                            <div class="footer-widget-content">
                                <ul>
                                    <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                    <li><a href="{{ route('orders') }}">Orders</a></li>
                                    <li><a href="{{ route('category') }}">Categories</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li><a href="{{ route('cart') }}">Cart</a></li>
                                    <li><a href="#">Items</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title">Contact</h3>
                            <div class="footer-newsletter">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum is dummy.</p>
                                <div id="mc_embed_signup" class="subscribe-form pr-40">
                                    <form
                                        action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                        class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input type="email" value="" name="EMAIL" class="email"
                                                placeholder="Enter Your E-mail" required>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div class="mc-news" aria-hidden="true"><input type="text"
                                                    name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1"
                                                    value=""></div>
                                            <div class="clear"><input type="submit" value="Subscribe"
                                                    name="subscribe" id="mc-embedded-subscribe" class="button">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="footer-contact">
                                    <p><span><i class="ti-location-pin"></i></span> 77 Seventh avenue USA 12555. </p>
                                    <p><span><i class=" ti-headphone-alt "></i></span> +88 (015) 609735 or +88 (012)
                                        112266</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom black-bg ptb-20">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="copyright">
                            <p>
                                Copyright ??
                                <a href="{{ route('home') }}">BuzznBite's</a>
                                2018 . All Right Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="clickable-mainmenu text-center">
        <div class="clickable-mainmenu-icon">
            <button class="clickable-mainmenu-close">
                <span class="pe-7s-close"></span>
            </button>
        </div>
        <div id="menu" class="text-left">
            <ul>
                <li>
                    <a href="#">home</a>
                    <ul>
                        <li><a href="index.html">Fashion</a></li>
                        <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                        <li><a href="index-fruits.html">fruits</a></li>
                        <li><a href="index-book.html">book</a></li>
                        <li><a href="index-electronics.html">electronics</a></li>
                        <li><a href="index-electronics-2.html">electronics style 2</a></li>
                        <li><a href="index-food.html">food & drink</a></li>
                        <li><a href="index-furniture.html">furniture</a></li>
                        <li><a href="index-handicraft.html">handicraft</a></li>
                        <li><a href="index-smart-watch.html">smart watch</a></li>
                        <li><a href="index-sports.html">sports</a></li>
                    </ul>
                </li>
                <li>
                    <a href="about-us.html">about us</a>
                </li>
                <li>
                    <a href="#">shop</a>
                    <ul>
                        <li>
                            <a href="#">shop grid</a>
                            <ul>
                                <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                <li><a href="shop.html">grid 4 column</a></li>
                                <li><a href="shop-grid-box.html">grid box style</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">shop list</a>
                            <ul>
                                <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                <li><a href="shop-list-box.html">list box style</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">product details</a>
                    <ul>
                        <li><a href="product-details.html">tab style 1</a></li>
                        <li><a href="product-details-2.html">tab style 2</a></li>
                        <li><a href="product-details-3.html"> tab style 3</a></li>
                        <li><a href="product-details-4.html">sticky style</a></li>
                        <li><a href="product-details-5.html">sticky style 2</a></li>
                        <li><a href="product-details-6.html">gallery style</a></li>
                        <li><a href="product-details-7.html">gallery style 2</a></li>
                        <li><a href="product-details-8.html">fixed image style</a></li>
                        <li><a href="product-details-9.html">fixed image style 2</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">pages</a>
                    <ul>
                        <li><a href="about-us.html">about us</a></li>
                        <li><a href="menu-list.html">menu list</a></li>
                        <li><a href="login.html">login</a></li>
                        <li><a href="register.html">register</a></li>
                        <li><a href="cart.html">cart page</a></li>
                        <li><a href="checkout.html">checkout</a></li>
                        <li><a href="wishlist.html">wishlist</a></li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">blog</a>
                    <ul>
                        <li><a href="blog.html">blog 3 colunm</a></li>
                        <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                        <li><a href="blog-details.html">blog details</a></li>
                        <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>




    <!-- all js here -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ajax-mail.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custome.js') }}"></script>


    @if (session('status'))
        <script>
            swal("{{ session('status') }}");
        </script>
    @endif

    @yield('scritp')
</body>

</html>
