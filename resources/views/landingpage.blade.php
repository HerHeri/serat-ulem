<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Selamat datang di Serat-Ulem! Temukan inspirasi pernikahan sempurna, mulai dari venue, gaun, hingga dekorasi dan catering. Dapatkan tips dan panduan perencanaan pernikahan yang lengkap untuk hari istimewa Anda. Buat momen berharga Anda lebih berkesan bersama kami.">
    <meta name="keywords" content="wedding, wedding invitation, undangan pernikahan, serat-ulem">
    <meta name="author" content="MadeHeri">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Serat Ulem | Landingpage</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ url('/assets-lp') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('/assets-lp') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('/assets-lp') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ url('/assets-lp') }}/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="{{ url('/assets-lp') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('/assets-lp') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('/assets-lp') }}/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    {{-- <div class="offcanvas__menu__overlay"></div> --}}
    <div class="offcanvas__menu__wrapper">
        <div class="canvas__close">
            <span class="fa fa-times-circle-o"></span>
        </div>
        <div class="offcanvas__logo">
            <a href="#"><img src="{{ url('/assets-lp') }}/img/logo.png" alt=""></a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                {{-- <li><a href="./about.html">About</a></li>
                <li><a href="./hosting.html">Hosting</a></li>
                <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./pricing.html">Pricing</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                        <li><a href="./404.html">404</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li> --}}
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <ul>
                <li><a href="#"><span class="icon_chat_alt"></span> Live chat</a></li>
                <li><a href="#"><span class="fa fa-user"></span> Login / Register</a></li>
            </ul>
        </div>
        <div class="offcanvas__info">
            <ul>
                <li><span class="icon_phone"></span> +1 123-456-7890</li>
                <li><span class="fa fa-envelope"></span> Support@gmail.com</li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        {{-- <div class="header__info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__info-left">
                            <ul>
                                <li><span class="icon_phone"></span> +1 123-456-7890</li>
                                <li><span class="fa fa-envelope"></span> Support@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__info-right">
                            <ul>
                                <li><a href="#"><span class="icon_chat_alt"></span> Live chat</a></li>
                                <li><a href="#"><span class="fa fa-user"></span> Login / Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="{{ url('/') }}">
                            <h5 style="font-size: x-large; font-weight: 600; color: white;">Serat Ulem</h5>
                            {{-- <img src="{{ url('/assets-lp') }}/img/logo.png" alt=""> --}}
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="header__menu">
                        <ul>
                            <li>
                                <a href="http://wa.me/6285746762431?text=Saya ingin bertanya mengenai undangan digital di Serat Ulem" target="_blank">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="{{ url('/assets-lp') }}/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>Ayo buat Undangan Digital untuk acara Pernikahan</h2>
                                <h5>Jadikan undangan pernikahanmu lebih sopan, elegan dan lebih modern.</h5>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img">
                                <img src="{{ url('/assets-lp') }}/img/hero/hero-right.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad" style="background: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Pilihan Template Undangan</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                    $arrTemplate = [
                        [
                            'title' => 'Template Wedding Invitation 1',
                            'url' => 'temp/template-wedding-1',
                            'img' => 'app-assets/images/illustration/personalization.svg',
                            'deskripsi' => 'Undangan pernikahan dengan desain elegan dan minimalis, cocok untuk pernikahan modern. Gunakan template ini untuk memberikan kesan mewah dan bersih pada undangan Anda.'
                        ],
                        [
                            'title' => 'Template Wedding Invitation 2',
                            'url' => 'temp/template-wedding-2',
                            'img' => 'app-assets/images/illustration/personalization.svg',
                            'deskripsi' => 'Template undangan pernikahan dengan sentuhan klasik dan romantis. Desain ini menampilkan ornamen bunga dan detail vintage, sempurna untuk pesta pernikahan yang anggun dan berkesan.'
                        ],
                        [
                            'title' => 'Template Wedding Invitation 3',
                            'url' => 'temp/template-wedding-3',
                            'img' => 'app-assets/images/illustration/personalization.svg',
                            'deskripsi' => 'Ciptakan undangan pernikahan yang hangat dan alami dengan template rustic ini. Dengan elemen kayu dan daun hijau, undangan Anda akan memancarkan pesona alam yang menawan.'
                        ],
                        [
                            'title' => 'Template Wedding Invitation 4',
                            'url' => 'temp/template-wedding-4',
                            'img' => 'app-assets/images/illustration/personalization.svg',
                            'deskripsi' => 'Undangan pernikahan dengan desain glamor dan berkilau. Dihiasi dengan glitter dan elemen emas, template ini akan membuat undangan Anda tampak mewah dan memukau.'
                        ],
                        [
                            'title' => 'Template Wedding Invitation 5',
                            'url' => 'temp/template-wedding-5',
                            'img' => 'app-assets/images/illustration/personalization.svg',
                            'deskripsi' => 'Undangan pernikahan dengan desain modern dan artistik. Dengan penggunaan warna-warna cerah dan pola geometris, template ini cocok untuk pasangan yang ingin tampil beda dan kreatif.'
                        ],
                        [
                            'title' => 'Template Wedding Invitation 6',
                            'url' => 'temp/template-wedding-6',
                            'img' => 'app-assets/images/illustration/personalization.svg',
                            'deskripsi' => 'Template undangan pernikahan dengan gaya tradisional yang elegan. Menampilkan motif batik dan warna-warna klasik, cocok untuk pernikahan dengan tema budaya yang kuat.'
                        ],
                        [
                            'title' => 'Template Wedding Invitation 7',
                            'url' => 'temp/template-wedding-7',
                            'img' => 'app-assets/images/illustration/personalization.svg',
                            'deskripsi' => 'Template undangan pernikahan dengan sentuhan vintage dan klasik. Desain ini cocok untuk pesta pernikahan yang anggun dan klasik.'
                        ]
                    ];
                @endphp
                @foreach ($arrTemplate as $item)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item text-center p-0">
                            <img src="{{ url('/') }}/assets-lp/img/default-template.png" alt="Default Image" srcset="" style="border-radius: 10px 10px 0px 0px;">
                            <div class="p-3">
                                <h5>{{ $item['title'] }}</h5>
                                <p>{{ $item['deskripsi'] }}</p>
                                {{-- button for view --}}
                                <a href="{{ url('/'.$item['url']) }}" target="_blank" class="btn btn-info btn-sm" type="button">View Demo</a>
                                <a href="http://wa.me/6285746762431?text=Saya ingin order {{ $item['title'] }} di Serat Ulem" target="_blank" class="btn btn-primary btn-sm" type="button">Order Template</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Pricing Section Begin -->
    {{-- <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="section-title normal-title">
                        <h3>Choose your plan</h3>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="pricing__swipe-btn">
                        <label for="month" class="active">Monthly
                            <input type="radio" id="month">
                        </label>
                        <label for="yearly">Yearly
                            <input type="radio" id="yearly">
                        </label>
                    </div>
                </div>
            </div>
            <div class="row monthly__plans active">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <h4>Started</h4>
                        <h3>$15.90 <span>/ month</span></h3>
                        <ul>
                            <li>2,5 GB web space</li>
                            <li>Free site buiding tools</li>
                            <li>Free domain registar</li>
                            <li>24/7 Support</li>
                            <li>Free marketing tool</li>
                            <li>99,9% Services uptime</li>
                            <li>30 day money back</li>
                        </ul>
                        <a href="#" class="primary-btn">Choose plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <h4>Business</h4>
                        <h3>$25.90 <span>/ month</span></h3>
                        <ul>
                            <li>90 GB web space</li>
                            <li>Free site buiding tools</li>
                            <li>Free domain registar</li>
                            <li>24/7 Support</li>
                            <li>Free marketing tool</li>
                            <li>99,9% Services uptime</li>
                            <li>30 day money back</li>
                        </ul>
                        <a href="#" class="primary-btn">Choose plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <h4>Premium</h4>
                        <h3>$35.90 <span>/ month</span></h3>
                        <ul>
                            <li>150 GB web space</li>
                            <li>Free site buiding tools</li>
                            <li>Free domain registar</li>
                            <li>24/7 Support</li>
                            <li>Free marketing tool</li>
                            <li>99,9% Services uptime</li>
                            <li>30 day money back</li>
                        </ul>
                        <a href="#" class="primary-btn">Choose plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <h4>Dedicated</h4>
                        <h3>$45.90 <span>/ month</span></h3>
                        <ul>
                            <li>Unlimited web space</li>
                            <li>Free site buiding tools</li>
                            <li>Free domain registar</li>
                            <li>24/7 Support</li>
                            <li>Free marketing tool</li>
                            <li>99,9% Services uptime</li>
                            <li>30 day money back</li>
                        </ul>
                        <a href="#" class="primary-btn">Choose plan</a>
                    </div>
                </div>
            </div>
            <div class="row yearly__plans">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <h4>Started</h4>
                        <h3>$150 <span>/ month</span></h3>
                        <ul>
                            <li>2,5 GB web space</li>
                            <li>Free site buiding tools</li>
                            <li>Free domain registar</li>
                            <li>24/7 Support</li>
                            <li>Free marketing tool</li>
                            <li>99,9% Services uptime</li>
                            <li>30 day money back</li>
                        </ul>
                        <a href="#" class="primary-btn">Choose plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <h4>Business</h4>
                        <h3>$250 <span>/ month</span></h3>
                        <ul>
                            <li>90 GB web space</li>
                            <li>Free site buiding tools</li>
                            <li>Free domain registar</li>
                            <li>24/7 Support</li>
                            <li>Free marketing tool</li>
                            <li>99,9% Services uptime</li>
                            <li>30 day money back</li>
                        </ul>
                        <a href="#" class="primary-btn">Choose plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <h4>Premium</h4>
                        <h3>$350 <span>/ month</span></h3>
                        <ul>
                            <li>150 GB web space</li>
                            <li>Free site buiding tools</li>
                            <li>Free domain registar</li>
                            <li>24/7 Support</li>
                            <li>Free marketing tool</li>
                            <li>99,9% Services uptime</li>
                            <li>30 day money back</li>
                        </ul>
                        <a href="#" class="primary-btn">Choose plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <h4>Dedicated</h4>
                        <h3>$450 <span>/ month</span></h3>
                        <ul>
                            <li>Unlimited web space</li>
                            <li>Free site buiding tools</li>
                            <li>Free domain registar</li>
                            <li>24/7 Support</li>
                            <li>Free marketing tool</li>
                            <li>99,9% Services uptime</li>
                            <li>30 day money back</li>
                        </ul>
                        <a href="#" class="primary-btn">Choose plan</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Pricing Section End -->

    <!-- Achievement Section Begin -->
    {{-- <section class="achievement-section set-bg spad" data-setbg="{{ url('/assets-lp') }}/img/achievement-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="achievement__item">
                        <span class="fa fa-user-o"></span>
                        <h2 class="achieve-counter">100+</h2>
                        <p>Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="achievement__item">
                        <span class="fa fa-edit"></span>
                        <h2 class="achieve-counter">2468</h2>
                        <p>Domains</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="achievement__item">
                        <span class="fa fa-clone"></span>
                        <h2 class="achieve-counter">2468</h2>
                        <p>Server</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="achievement__item">
                        <span class="fa fa-cog"></span>
                        <h2 class="achieve-counter">2468</h2>
                        <p>Installs</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Achievement Section End -->

    <!-- Work Section Begin -->
    {{-- <section class="work-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>HOW TO BUILD YOUR WEBSITE ONLINE TODAY?</h3>
                    </div>
                    <div class="work__text">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="work__item">
                                    <i class="fa fa-desktop"></i>
                                    <span>CREATE YOUR OWN WEBSITE WITH OUR</span>
                                    <h3>WEB SITE BUILDER</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                        gravida facilisis. </p>
                                    <a href="#" class="primary-btn">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="work__item">
                                    <i class="fa fa-shopping-bag"></i>
                                    <span>EASY CREATE, MANAGE & SELL</span>
                                    <h3>ONLINE STORE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                        gravida facilisis. </p>
                                    <a href="#" class="primary-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Work Section End -->

    <!-- Choose Plan Section Begin -->
    <section class="choose-plan-section spad pt-0" style="padding-bottom: 240px;"
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6" style="text-align: center;">
                    <img src="{{ url('/assets-lp') }}/img/choose-plan.png" alt="">
                </div>
                <div class="col-lg-6 col-md-6" style="display: flex; align-items: center;">
                    <div class="plan__text">
                        <h3>Fitur-fitur Unggulan Undangan</h3>
                        <ul>
                            <li><span class="fa fa-check"></span> Tamu Undangan</li>
                            <li><span class="fa fa-check"></span> Coundown Timer</li>
                            <li><span class="fa fa-check"></span> Amplop Digital</li>
                            <li><span class="fa fa-check"></span> Peta Alamat</li>
                            <li><span class="fa fa-check"></span> Galeri Foto</li>
                            <li><span class="fa fa-check"></span> Cerita Pasangan</li>
                        </ul>
                        <a href="http://wa.me/6285746762431?text=Saya ingin bertanya mengenai undangan digital di Serat Ulem" target="_blank" class="primary-btn">Get start now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choose Plan Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        {{-- <div class="footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top-call">
                            <h5>Need Help? Call us</h5>
                            <h2>+1 175 946 2316 096</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top-auth">
                            <h5>Join Now And Have Free Month Of Deluxe Hosting</h5>
                            <a href="#" class="primary-btn">Log in</a>
                            <a href="#" class="primary-btn sign-up">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="footer__text set-bg" data-setbg="{{ url('/assets-lp') }}/img/footer-bg.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer__text-about">
                            <div class="footer__logo">
                                <a href="{{ url('/') }}" style="font-size: large; font-weight: 600; color: white;">Serat Ulem</a>
                            </div>
                            <p>
                                Website penyedia layanan undangan digital dengan harga yang murah namun kualitas bukan murahan.
                            </p>
                            <div class="footer__social">
                                {{-- <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a> --}}
                                <a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        {{-- <div class="footer__text-widget">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Press & Media</a></li>
                                <li><a href="#">News / Blogs</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        {{-- <div class="footer__text-widget">
                            <h5>Hosting</h5>
                            <ul>
                                <li><a href="#">Web Hosting</a></li>
                                <li><a href="#">Reseller Hosting</a></li>
                                <li><a href="#">VPS Hosting</a></li>
                                <li><a href="#">Dedicated Servers</a></li>
                                <li><a href="#">Cloud Hosting</a></li>
                            </ul>
                        </div> --}}
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer__text-widget">
                            <h5>CONTACT US</h5>
                            <ul class="footer__widget-info">
                                <li>
                                    <span class="fa fa-map-marker"></span> 500 South Main Street Los Angeles,<br />ZZ-96110 USA
                                </li>
                                <li><span class="fa fa-mobile"></span> 125-711-811 | 125-668-886</li>
                                <li><span class="fa fa-headphones"></span> Support.hosting@gmail.com</li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
                <div class="footer__text-copyright">
                    <p style="color: white;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://serat-ulem.my.id" target="_blank">Serat Ulem</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ url('/assets-lp') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ url('/assets-lp') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('/assets-lp') }}/js/jquery.slicknav.js"></script>
    <script src="{{ url('/assets-lp') }}/js/owl.carousel.min.js"></script>
    <script src="{{ url('/assets-lp') }}/js/main.js"></script>
</body>

</html>