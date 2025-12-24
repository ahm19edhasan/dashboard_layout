<!DOCTYPE html>
<html lang="{{ app()->getLocale() == 'ar' ? "ar" : "en" }}" dir="{{ app()->getLocale() == 'ar' ? "rtl" : "ltr" }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>
        {{ $title ?? 'Nashir' }}
    </title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">
    @if( app()->getLocale() == 'en')
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @endif
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    @yield('css')
</head>


<!-- page wrapper -->
<body>

<div class="boxed_wrapper @if( app()->getLocale() == 'ar' ) rtl @endif">

    <!-- main header -->
    <header class="main-header style-three">

        <!-- header-lower -->
        <div class="header-lower">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('storage') . '/' . $setting->where('key', 'avatar')->first()->value }}" style="height: 65px !important;" alt="">
                            </a>
                        </figure>
                    </div>
                    <div class="menu-area">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li >
                                        <a href="{{ route('home') }}">
                                            {{ __('lang.home') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('category.index') }}">
                                            {{ __('lang.categories') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ad.index') }}">
                                            {{ __('lang.browse_ads') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog.index') }}">
                                            {{ __('lang.blog') }}
                                        </a>
                                    </li>
                                    <li>
                                        @if( app()->getLocale() == 'en' )
                                            <a rel="alternate" hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                                                {{ 'Arabic' }}
                                            </a>
                                        @else
                                            <a rel="alternate" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                                                {{ 'English' }}
                                            </a>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="btn-box">
                        <a href="{{ route('login') }}" class="theme-btn-one">
                            <i class="icon-1"></i>
                            {{ __('lang.login') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('storage') . '/' . $setting->where('key', 'avatar')->first()->value }}" style="height: 65px !important;" alt=""></a></figure>
                    </div>
                    <div class="menu-area">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    <div class="btn-box">
                        <a href="{{ route('login') }}" class="theme-btn-one"><i class="icon-1"></i>
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ asset('storage') . '/' . $setting->where('key', 'avatar')->first()->value }}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>
                    {{ __('lang.contact') }}
                </h4>
                <ul>
                    <li>{{ $setting->where('key', 'address')->first()->value }}</li>
                    <li><a href="tel:+8801682648101">{{ $setting->where('key', 'phone')->first()->value }}</a></li>
                    <li><a href="mailto:info@example.com">{{ $setting->where('key', 'email')->first()->value }}</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="{{ $setting->where('key', 'twitter_link')->first()->value }}"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="{{ $setting->where('key', 'facebook_link')->first()->value }}"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="{{ $setting->where('key', 'google_link')->first()->value }}"><span class="fab fa-google-plus-g"></span></a></li>
                    <li><a href="{{ $setting->where('key', 'instagram_link')->first()->value }}"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="{{ $setting->where('key', 'linkedin_link')->first()->value }}"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

    {{ $slot }}

    <!-- main-footer -->
    <footer class="main-footer">
        <div class="footer-top" style="background-image: url({{ asset('assets/images/background/footer-1.jpg') }});">
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('storage') . '/' . $setting->where('key', 'avatar')->first()->value }}" alt="">
                                    </a>
                                </figure>
                                <div class="text">
                                    <p>
                                        {{ $setting->where('key', 'footer_description')->first()->value }}
                                    </p>
                                </div>
                                <ul class="social-links clearfix">
                                    <li><a href="{{ $setting->where('key', 'facebook_link')->first()->value }}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $setting->where('key', 'twitter_link')->first()->value }}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ $setting->where('key', 'instagram_link')->first()->value }}"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{ $setting->where('key', 'google_link')->first()->value }}"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="{{ $setting->where('key', 'linkedin_link')->first()->value }}"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h3>
                                        {{ __('lang.services') }}
                                    </h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li>
                                            <a href="{{ route('page.aboutUs') }}">
                                                {{ __('lang.about_us') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('page.package') }}">
                                                {{ __('lang.packages') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog.index') }}">
                                                {{ __('lang.our_blog') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('page.contactUs') }}">
                                                {{ __('lang.contact_us') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget">
                                <div class="widget-title">
                                    <h3>
                                        {{ __('lang.top_news') }}
                                    </h3>
                                </div>
                                <div class="post-inner">
                                    @foreach( $latest_blogs as $latest_blog )
                                        <div class="post">
                                            <figure class="post-thumb">
                                                <img src="{{ asset('storage') . '/' . $latest_blog->cover_image }}" alt="">
                                                <a href="{{ route('blog.index') }}"><i class="fas fa-link"></i></a>
                                            </figure>
                                            <h5>
                                                <a href="{{ route('blog.index') }}">
                                                    {{ (app()->getLocale() == 'ar') ? $latest_blog->title_ar : $latest_blog->title_en }}
                                                </a>
                                            </h5>
                                            <p> {{ \Carbon\Carbon::parse($latest_blog->created_at)->isoFormat('MMMM DD, YYYY') }}

                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>
                                        {{ __('lang.contacts') }}
                                    </h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i>
                                            {{ $setting->where('key', 'address')->first()->value }}
                                        </li>
                                        <li>
                                            <i class="fas fa-microphone"></i>
                                            <a href="tel:23055873407">
                                                {{ $setting->where('key', 'phone')->first()->value }}
                                            </a>
                                        </li>
                                        <li>
                                            <i class="fas fa-envelope"></i>
                                            <a href="mailto:info@example.com">
                                                {{ $setting->where('key', 'email')->first()->value }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="footer-inner clearfix">
                    <div class="copyright pull-left"><p><a href="index.html">Clasifico</a> &copy; 2020 All Right Reserved</p></div>
                    <ul class="footer-nav pull-right clearfix">
                        <li><a href="index.html">Terms of Service</a></li>
                        <li><a href="index.html">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="far fa-long-arrow-up"></span>
    </button>
</div>


<!-- jequery plugins -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/validation.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/bxslider.js') }}"></script>
<script src="{{ asset('js/share.js') }}"></script>

<!-- main-js -->
<script src="{{ asset('assets/js/script.js') }}"></script>
@yield('js')
</body><!-- End of .page_wrapper -->
</html>
