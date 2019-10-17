<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Fydary - Change Everything</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Meterial Icon CSS -->
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="assets/css/material.min.css">
    <!-- Ripples CSS -->
    <link rel="stylesheet" href="assets/css/ripples.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Flag icons-->
    <link rel="stylesheet" href="flag-icon-css/css/flag-icon.min.css">
    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="assets/css/colors/indigo.css" media="screen"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

</head>
<body>
@include('partials.header')
<div id="app">
    @yield('content')
</div>
<!--Footer-->
<footer class="page-footer center-on-small-only  pt-0 footer-widget-container">
    <!--Footer Links-->
    <div class="container pt-5 mb-5¸footer-container">
        <div class="row">
            <!--First column-->
            <div class="col-md-6 col-lg-3 col-xl-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer-contact-widget">
                            <h3 class="footer-title">@lang('dashboard.footer-about')</h3>
                            <p>@lang('dashboard.footer-social')</p>
                            <ul class="list-social">
                                <li class="list-item-social">
                                    <a href="https://twitter.com/fydaryio" target="_blank"
                                       rel="noopener noreferrer"><i class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-item-social">
                                    <a href="https://www.facebook.com/fydary/" target="_blank"
                                       rel="noopener noreferrer"><i class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-item-social">
                                    <a href="https://www.linkedin.com/company/fydary/about/" target="_blank"
                                       rel="noopener noreferrer"><i
                                            class="mdi mdi-linkedin"></i></a>
                                </li>
                                <li class="list-item-social list-item-social-bottom">
                                    <a href="https://www.reddit.com/r/fydary/" target="_blank"
                                       rel="noopener noreferrer"><i
                                            class="mdi mdi-reddit icon-reddit"></i></a>
                                </li>
                                <li class="list-item-social list-item-social-bottom">
                                    <a href="https://medium.com/@fydary" target="_blank"
                                       rel="noopener noreferrer"><i class="mdi mdi-medium icon-medium"></i></a>
                                </li>
                                <li class="list-item-social list-item-social-bottom">
                                    <a href="https://t.me/fydary" target="_blank"
                                       rel="noopener noreferrer"><i class="mdi mdi-telegram icon-telegram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="widget">
                            <h5 class="footer-title">@lang('dashboard.useful-links')</h5>
                            <ul class="unordered-list useful-links">
                                <li><a href="/terms-and-conditions"
                                       class="nocolor">@lang('dashboard.terms-of-use')</a></li>
                                <li><a href="#" class="nocolor">@lang('dashboard.privacy-policy')</a></li>
                                <li><a href="https://mailchi.mp/fydary/partner" class="nocolor" target="_blank"
                                       rel="noopener noreferrer">@lang('dashboard.partners')</a></li>
                                <li><a href="#" class="nocolor">@lang('dashboard.why-choose-us')</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6 col-lg-3 col-xl-3 recent-widget">
                <h3 class="footer-title">@lang('dashboard.recent-posts')</h3>
                <ul class="image-list">
                    @foreach($feed as $item)
                        <li>
                            <figure class="overlay">
                                <img class="img-fluid" src="{{$item['thumbnail']}}" alt="">
                                <figcaption><a href="{{$item['link']}}" target="_blank" rel="noopener noreferrer"><i
                                            class="mdi mdi-link-variant from-top icon-xs"></i></a>
                                </figcaption>
                            </figure>
                            <div class="post-content">
                                <h6 class="post-title"><a href="{{$item['link']}}" target="_blank"
                                                          rel="noopener noreferrer">{{$item['title']}}</a></h6>
                                <div class="meta"><span class="date">{{$item['date']}}</span></div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-6 col-lg-3 col-xl-3 link-widget">
                <h3 class="footer-title">@lang('dashboard.subscribe')</h3>
                <p>@lang('dashboard.subscribe-desc')</p>
                <div class="mt-3"></div>
                <ul class="icon-list">
                    <li><i class="mdi mdi-map-marker"></i>@lang('dashboard.ljubljana-slovenia')</li>
                    <li><i class="mdi mdi-email"></i> <a href="mailto:contact@fydary.io" class="nocolor">contact@fydary.io</a>
                    </li>
                </ul>
                <form method="post" id="subscribe-form" name="subscribe-form" class="validate">
                    <div class="form-group">
                        <input type="email" value="" name="EMAIL" class="email form-control"
                               placeholder="{{__('dashboard.email')}}" required="">
                        <button type="submit" name="subscribe" id="subscribe" class="btn btn-common pull-right">
                            @lang('dashboard.join')
                        </button>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-6 col-lg-3 col-xl-3">
                <img src="/img/roadmap.jpg" alt="" data-toggle="modal" data-target="#modal1"
                     style="width: 100%; margin-bottom: 10px; cursor: pointer">
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright-->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; @lang('dashboard.footer-copyright')</p>
                </div>
            </div>
        </div>
    </div>
    <!--/.Copyright -->

</footer>
<!--/.Footer-->


<!-- Back To Top -->
<a href="#" class="back-to-top">
    <div class="ripple-container"></div>
    <i class="mdi mdi-arrow-up">
    </i>
</a>

<!-- Preloader -->
<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>
<!-- End Preloader -->

<!--Modal: Name-->
<div class="modal fade" id="modal1" tabindex="-2" role="dialog" aria-labelledby="roadmap" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Body-->
            <div class="modal-body">

                <img src="/img/roadmap.jpg" alt="roadmap" class="full-width">
            </div>
            <!--Footer-->
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Name-->

<!-- Optional JavaScript -->
<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.mixitup.min.js"></script>
<script src="assets/js/jquery.inview.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/scroll-top.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/material.min.js"></script>
<script src="assets/js/ripples.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
{{--<script src="assets/js/form-validator.min.js"></script>--}}
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery.vide.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/jquery-validation.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/dark-mode.js"></script>
{{--<script src="/js/app.js"></script>--}}

@if(session('dark_mode') == 'true')
    <script>
        $("#darkMode").prop('checked', true);
        jQuery('head').append('<link rel="stylesheet" id="darkModeCss" href="assets/css/dark-mode.css" type="text/css" />');
        $(".custom-icon").each(function (key, icon) {
            $(icon).attr("src", icon.src.replace("assets/images/icons/", "assets/images/icons/dark_mode/"));
        });
    </script>
@endif

</body>
</html>
