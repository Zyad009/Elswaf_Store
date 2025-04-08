<!DOCTYPE html>
<html lang="en">


<!-- molla/index-6.html  22 Nov 2019 09:56:18 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Zyad Tech - @yield("front-title")</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/assets2') }}/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('front/assets2') }}/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('front/assets2') }}/images/icons/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('front/assets2') }}/images/icons/site.html">
    <link rel="mask-icon" href="{{ asset('front/assets2') }}/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="{{ asset('front/assets2') }}/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ asset('front/assets2') }}/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet"
        href="{{ asset('front/assets2') }}/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('front/assets2') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front/assets2') }}/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('front/assets2') }}/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('front/assets2') }}/css/plugins/jquery.countdown.css">
    @stack("front-css")
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('front/assets2') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('front/assets2') }}/css/skins/skin-demo-6.css">
    <link rel="stylesheet" href="{{ asset('front/assets2') }}/css/demos/demo-6.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-6">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <ul class="top-menu top-link-menu d-none d-md-block">
                            <li>
                                {{-- رقم الهاتف  --}}
                                <ul>
                                    <li>
                                        <i class="icon-phone">
                                        </i>Call: +01114656758 / +01555131167
                                    </li>
                                </ul>

                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="social-icons social-icons-color">
                            <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i
                                    class="icon-facebook-f"></i></a>
                            <a href="#" class="social-icon social-linkedin" title="linkedin" target="_blank"><i
                                    class="icon-linkedin"></i></a>
                        </div><!-- End .soial-icons -->

                    </div><!-- End .header-right -->
                </div>
            </div>
            <div class="header-middle">
                <div class="container">

                    {{-- لوجو الموقع --}}
                    <div class="header-center">
                        <a href="{{route("home")}}" class="logo">
                            <img src="{{ asset('front/assets2') }}/images/logo/my-logo.png" alt="Molla Logo"
                                width="82" height="20">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        {{-- السله --}}
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                {{-- عدد اللي في السلة --}}
                                <span class="cart-count">2</span>
                                <span class="cart-txt">$ 164,00</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                </div>
                                {{-- الاجمالي --}}
                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$164.00</span>
                                </div><!-- End .dropdown-cart-total -->
                                {{-- الدفع على طول او انه يشوف السله --}}
                                <div class="dropdown-cart-action">
                                    <a href="{{route("cart")}}" class="btn btn-outline-primary-2">View Cart</a>
                                    <a href="{{route("checkout")}}" class="btn btn-outline-primary-2"><span>Checkout</span><i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
