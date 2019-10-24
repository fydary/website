@extends('layouts.app')
@section('content')
    <!-- Main Carousel Section Start -->
    <section id="home">
        <div id="main-slide" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
                <li data-target="#main-slide" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="static-carousel-image">
                    <div class="carousel-item active">
                        <!-- <img class="d-block w-100" src="assets/images/slider/slider-bg1.jpeg" alt="First slide"> -->
                        <div class="carousel-caption d-md-block">
                            <h1 class="animated wow fadeInDown hero-heading"
                                data-wow-delay=".4s">@lang('dashboard.slider-title-1')</h1>
                            <h5 class="animated fadeInUp wow hero-sub-heading"
                                data-wow-delay=".6s">@lang('dashboard.slider-desc-1')</h5>
                            {{--                            <a href="javascript:void(0)" class="animated fadeInUp wow btn btn-common"--}}
                            {{--                               data-wow-delay=".8s"><i--}}
                            {{--                                    class="material-icons mdi mdi-lightbulb-outline"></i> @lang('dashboard.slider-button-1')--}}
                            {{--                                <div class="ripple-container"></div>--}}
                            {{--                            </a>--}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <img class="d-block w-100" src="assets/images/slider/slider-bg2.jpeg" alt="Second slide"> -->
                        <div class="carousel-caption d-md-block">
                            <h1 class="animated wow fadeInLeft hero-heading"
                                data-wow-delay=".7s">@lang('dashboard.slider-title-1.5')</h1>
                            <h5 class="animated wow fadeInRight hero-sub-heading"
                                data-wow-delay=".9s">@lang('dashboard.slider-desc-1.5')</h5>
                            {{--                            <a href="javascript:void(0)" class="animated fadeInUp wow btn btn-common"--}}
                            {{--                               data-wow-delay=".6s"><i--}}
                            {{--                                    class="material-icons mdi mdi-cart-outline"></i>@lang('dashboard.slider-button-2-1')--}}
                            {{--                            </a>--}}
                            {{--                            <a href="javascript:void(0)" class="animated fadeInUp wow btn btn-border"--}}
                            {{--                               data-wow-delay=".8s"><i--}}
                            {{--                                    class="material-icons mdi mdi-lightbulb-outline"></i> @lang('dashboard.slider-button-2-2')--}}
                            {{--                                <div class="ripple-container"></div>--}}
                            {{--                            </a>--}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <img class="d-block w-100" src="assets/images/slider/slider-bg2.jpeg" alt="Second slide"> -->
                        <div class="carousel-caption d-md-block">
                            <h1 class="animated wow fadeInLeft hero-heading"
                                data-wow-delay=".7s">@lang('dashboard.slider-title-2')</h1>
                            <h5 class="animated wow fadeInRight hero-sub-heading"
                                data-wow-delay=".9s">@lang('dashboard.slider-desc-2')</h5>
                            {{--                            <a href="javascript:void(0)" class="animated fadeInUp wow btn btn-common"--}}
                            {{--                               data-wow-delay=".6s"><i--}}
                            {{--                                    class="material-icons mdi mdi-cart-outline"></i>@lang('dashboard.slider-button-2-1')--}}
                            {{--                            </a>--}}
                            {{--                            <a href="javascript:void(0)" class="animated fadeInUp wow btn btn-border"--}}
                            {{--                               data-wow-delay=".8s"><i--}}
                            {{--                                    class="material-icons mdi mdi-lightbulb-outline"></i> @lang('dashboard.slider-button-2-2')--}}
                            {{--                                <div class="ripple-container"></div>--}}
                            {{--                            </a>--}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <img class="d-block w-100" src="assets/images/slider/slider-bg1.jpeg" alt="Third slide"> -->
                        <div class="carousel-caption d-md-block">
                            <h1 class="animated wow fadeInDown hero-heading"
                                data-wow-delay=".6s">@lang('dashboard.slider-title-3')</h1>
                            <h5 class="animated fadeInUp wow hero-sub-heading"
                                data-wow-delay=".8s">@lang('dashboard.slider-desc-3')</h5>
                            {{--                            <a href="javascript:void(0)" class="animated fadeInUp wow btn btn-common"--}}
                            {{--                               data-wow-delay=".8s"><i--}}
                            {{--                                    class="material-icons mdi mdi-arrow-collapse-down"></i>@lang('dashboard.slider-button-3')--}}
                            {{--                            </a>--}}
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
                <span class="carousel-control" aria-hidden="true"><i class="mdi mdi-arrow-left"
                                                                     data-ripple-color="#F0F0F0"></i></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
                <span class="carousel-control" aria-hidden="true"><i class="mdi mdi-arrow-right"
                                                                     data-ripple-color="#F0F0F0"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Carousel Section End -->

    <!-- About Section -->
    <section class="Material-about-section section-padding" id="about">
        <div class="container">
            <div class="row">
                <!-- Single About -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".2s">
                    <div class="about-single">
                        <i class="icons_new"><img src="assets/images/icons/removingbarriericon.png" class="custom-icon" alt=""></i>
                        <h2 class="subtitle">@lang('dashboard.about-title-1')</h2>
                        <p>@lang('dashboard.about-desc-1')</p>
                    </div>
                </div>
                <!-- Single About -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".3s">
                    <div class="about-single">
                        <i class="icons_new"><img src="assets/images/icons/financemeetslegalicon.png" class="custom-icon" alt=""></i>
                        <h2 class="subtitle">@lang('dashboard.about-title-2')</h2>
                        <p>@lang('dashboard.about-desc-2')</p>
                    </div>
                </div>
                <!-- Single About -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".4s">
                    <div class="about-single">
                        <i class="icons_new"><img src="assets/images/icons/blockchaintechnologyicon.png" class="custom-icon" alt=""></i>
                        <h2 class="subtitle">@lang('dashboard.about-title-3')</h2>
                        <p>@lang('dashboard.about-desc-3')</p>
                    </div>
                </div>
                <!-- Single About -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".5s">
                    <div class="about-single">
                        <i class="icons_new"><img src="assets/images/icons/fulluserexperienceicon.png" class="custom-icon" alt=""></i>
                        <h2 class="subtitle">@lang('dashboard.about-title-4')</h2>
                        <p>@lang('dashboard.about-desc-4')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Welcome Section Start -->
    <section class="welcome-section section-padding section-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 col-xs-12">
                    <div class="Material-tab">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#finance" role="tab"><i
                                        class="icons_new"><img src="assets/images/icons/financeicon.png" class="custom-icon" alt=""></i>
                                    <br>@lang('dashboard.tab-title-1')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#technology" role="tab"><i
                                        class="icons_new"><img src="assets/images/icons/technologyicon.png" class="custom-icon" alt=""></i>
                                    <br>@lang('dashboard.tab-title-2')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#legal" role="tab"><i class="icons_new"><img
                                            src="assets/images/icons/legalicon.png" class="custom-icon" alt=""></i>
                                    <br>@lang('dashboard.tab-title-3')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#businessdevelopment" role="tab"><i
                                        class="icons_new"><img src="assets/images/icons/businessdevelopmenticon.png" class="custom-icon"
                                                               alt=""></i>
                                    <br>@lang('dashboard.tab-title-4')</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="finance" role="tabpanel">
                                <p>@lang('dashboard.tab-desc-1')</p>

                            </div>
                            <div class="tab-pane fade" id="technology" role="tabpanel">
                                <p>@lang('dashboard.tab-desc-2')</p>

                            </div>
                            <div class="tab-pane fade" id="legal" role="tabpanel">
                                <p>@lang('dashboard.tab-desc-3')</p>

                            </div>
                            <div class="tab-pane fade" id="businessdevelopment" role="tabpanel">
                                <p>@lang('dashboard.tab-desc-4')</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 col-xs-12" id="whitepaper-section">
                    <div class="whitepaper row">
                        <div class="col-sm-12">
                            <h4 class="white whitepaper-title">
                                @lang('dashboard.whitepaper-title')
                            </h4>
                            <form  action="javascript:;"
                                   onsubmit="getWhitepaper(this)" id="whitepaper" method="get">
                                <input type="email" name="email" id="whitepaper-email" placeholder="{{__('dashboard.email')}}"
                                       class="form-control white" data-error="{{__('dashboard.invalid-email-address')}}" data-success="{{__('dashboard.whitepaper-success')}}">
                                <small id="email-validation-message"></small>
                                <small id="whitepaper-success-message" class="white"></small>
                                @csrf
                                <br>
                                <a id="submit-whitepaper" class="animated4 btn btn-common btn-lg"><i
                                        class="material-icons mdi mdi-email" id="submit-whitepaper-icon"></i>
                                    @lang('dashboard.get-whitepaper')</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Section End -->

    <!-- Services Section -->
    <section class="Material-service-section section-padding" id="industry">
        <div class="container">
            <div class="row">
                <!-- Section Titile -->
                <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                    <h1 class="section-title">@lang('dashboard.industries-section-title')</h1>
                </div>
            </div>
            <!-- Services Widget Section -->
            <div class="row">
                <!-- Service Widgets -->
                <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp"
                     data-wow-delay=".3s">
                    <div class="media">
                        <div class="media-left">
                            <i class="icons_new"><img src="assets/images/icons/hedgefundsicon.png" class="custom-icon" alt=""></i>
                        </div>
                        <div class="media-body">
                            <h2 class="subtitle"><a href="#">@lang('dashboard.industry-title-1')</a></h2>
                            <p>@lang('dashboard.industry-desc-1')</p>
                        </div>
                    </div>
                </div>
                <!-- Service Widgets -->
                <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp"
                     data-wow-delay=".4s">
                    <div class="media">
                        <div class="media-left">
                            <i class="icons_new"><img src="assets/images/icons/realestateicon.png" class="custom-icon" alt=""></i>
                        </div>
                        <div class="media-body">
                            <h2 class="subtitle"><a href="#">@lang('dashboard.industry-title-2')</a></h2>
                            <p>@lang('dashboard.industry-desc-2')</p>
                        </div>
                    </div>
                </div>
                <!-- Service Widgets -->
                <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp"
                     data-wow-delay=".5s">
                    <div class="media">
                        <div class="media-left">
                            <i class="icons_new"><img src="assets/images/icons/energyicon.png" class="custom-icon" alt=""></i>
                        </div>
                        <div class="media-body">
                            <h2 class="subtitle"><a href="#">@lang('dashboard.industry-title-3')</a></h2>
                            <p>@lang('dashboard.industry-desc-3')</p>
                        </div>
                    </div>
                </div>
                <!-- Service Widgets -->
                <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp"
                     data-wow-delay=".6s">
                    <div class="media">
                        <div class="media-left">
                            <i class="icons_new"><img src="assets/images/icons/transportlogisticsicon.png" class="custom-icon" alt=""></i>
                        </div>
                        <div class="media-body">
                            <h2 class="subtitle"><a href="#">@lang('dashboard.industry-title-4')</a></h2>
                            <p>@lang('dashboard.industry-desc-4')</p>
                        </div>
                    </div>
                </div>
                <!-- Service Widgets -->
                <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp"
                     data-wow-delay=".7s">
                    <div class="media">
                        <div class="media-left">
                            <i class="icons_new"><img src="assets/images/icons/farmingicon.png" class="custom-icon" alt=""></i>
                        </div>
                        <div class="media-body">
                            <h2 class="subtitle"><a href="#">@lang('dashboard.industry-title-5')</a></h2>
                            <p>@lang('dashboard.industry-desc-5')</p>
                        </div>
                    </div>
                </div>
                <!-- Service Widgets -->
                <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp"
                     data-wow-delay=".8s">
                    <div class="media">
                        <div class="media-left">
                            <i class="icons_new"><img src="assets/images/icons/charityicon.png" class="custom-icon" alt=""></i>
                        </div>
                        <div class="media-body">
                            <h2 class="subtitle"><a href="#">@lang('dashboard.industry-title-6')</a></h2>
                            <p>@lang('dashboard.industry-desc-6')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->


    <!-- work-counter area -->
{{--    <section class="work-counter-section section-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <!-- Single Counter -->--}}
{{--                <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp"--}}
{{--                     data-wow-delay=".2s">--}}
{{--                    <div class="counter">--}}
{{--                        <div class="icons_new"><img src="assets/images/icons/partnersicon.png" class="custom-icon" alt=""></div>--}}
{{--                        <div class="timer">5</div>--}}
{{--                        <p>@lang('dashboard.counter-1')</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Single Counter -->--}}
{{--                <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp"--}}
{{--                     data-wow-delay=".3s">--}}
{{--                    <div class="counter">--}}
{{--                        <div class="icons_new"><img src="assets/images/icons/projectsicon.png" class="custom-icon" alt=""></div>--}}
{{--                        <div class="timer">27</div>--}}
{{--                        <p>@lang('dashboard.counter-2')</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Single Counter -->--}}
{{--                <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp"--}}
{{--                     data-wow-delay=".4s">--}}
{{--                    <div class="counter">--}}
{{--                        <div class="icons_new"><img src="assets/images/icons/teammembersicon.png" class="custom-icon" alt=""></div>--}}
{{--                        <div class="timer">35</div>--}}
{{--                        <p>@lang('dashboard.counter-3')</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Single Counter -->--}}
{{--                <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp"--}}
{{--                     data-wow-delay=".5s">--}}
{{--                    <div class="counter">--}}
{{--                        <div class="icons_new"><img src="assets/images/icons/usersicon.png" class="custom-icon" alt=""></div>--}}
{{--                        <div class="timer">5478</div>--}}
{{--                        <p>@lang('dashboard.counter-4')</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- work-counter area end -->

    <!-- Our Team Section -->
    <section class="team section-padding section-dark" id="team">
        <div class="container">
            <div class="row">
                <!-- Section Titile -->
                <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                    <h1 class="section-title">@lang('dashboard.team-section-title')</h1>
                </div>
            </div>
            <div class="row">
                <!-- Single Team Widget -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".3s">
                    <div class="single-team-widget">
                        <img src="img/maticprofileimage.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            {{--                            <div class="know-more">--}}
                            {{--                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i--}}
                            {{--                                        class="material-icons mdi mdi-arrow-right"></i>--}}
                            {{--                                    <div class="ripple-container"></div>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                            <h2 class="subtitle">Matic Jagodic</h2>
                            <p>Co Founder and Project Manager</p>
                            <div class="social-profiles">
                                {{--                                <a href="#"><i class="mdi mdi-twitter"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-facebook"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-dribbble"></i></a>--}}
                                <a href="https://www.linkedin.com/in/matic-jagodic-5b6747190/" target="_blank"
                                   rel="noopener noreferrer"><i
                                        class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Widget -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".4s">
                    <div class="single-team-widget">
                        <img src="img/joshprofileimage.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            {{--                            <div class="know-more">--}}
                            {{--                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i--}}
                            {{--                                        class="material-icons mdi mdi-arrow-right"></i>--}}
                            {{--                                    <div class="ripple-container"></div>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                            <h2 class="subtitle">Joshua Blount</h2>
                            <p>Co Founder and Chief Marketing Officer</p>
                            <div class="social-profiles">
                                {{--                                <a href="#"><i class="mdi mdi-twitter"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-facebook"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-dribbble"></i></a>--}}
                                <a href="https://www.linkedin.com/in/joshualeeblount/" target="_blank"
                                   rel="noopener noreferrer"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Team Widget -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".6s">
                    <div class="single-team-widget">
                        <img src="img/peterprofileimage.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            {{--                            <div class="know-more">--}}
                            {{--                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i--}}
                            {{--                                        class="material-icons mdi mdi-arrow-right"></i>--}}
                            {{--                                    <div class="ripple-container"></div>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                            <h2 class="subtitle">Peter Kodermac</h2>
                            <p>Co Founder & Chief Legal Officer</p>
                            <div class="social-profiles">
                                {{--                                <a href="#"><i class="mdi mdi-twitter"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-facebook"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-dribbble"></i></a>--}}
                                <a href="#"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Widget -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".5s">
                    <div class="single-team-widget">
                        <img src="img/augustinprofileimage.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            {{--                            <div class="know-more">--}}
                            {{--                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i--}}
                            {{--                                        class="material-icons mdi mdi-arrow-right"></i>--}}
                            {{--                                    <div class="ripple-container"></div>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                            <h2 class="subtitle">Augustin Ladar</h2>
                            <p>Business Development Executive</p>
                            <div class="social-profiles">
                                {{--                                <a href="#"><i class="mdi mdi-twitter"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-facebook"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-dribbble"></i></a>--}}
                                <a href="https://www.linkedin.com/in/augustinladar/" target="_blank"
                                   rel="noopener noreferrer"><i
                                        class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Widget -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".5s">
                    <div class="single-team-widget">
                        <img src="img/henaprofileimage.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            {{--                            <div class="know-more">--}}
                            {{--                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i--}}
                            {{--                                        class="material-icons mdi mdi-arrow-right"></i>--}}
                            {{--                                    <div class="ripple-container"></div>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                            <h2 class="subtitle">Hena Klaric</h2>
                            <p>Full Stack Developer</p>
                            <div class="social-profiles">
                                {{--                                <a href="#"><i class="mdi mdi-twitter"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-facebook"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-dribbble"></i></a>--}}
                                <a href="https://www.linkedin.com/in/henaklaric/" target="_blank"
                                   rel="noopener noreferrer"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".5s">
                    <div class="single-team-widget">
                        <img src="img/jennyprofileimage.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            {{--                            <div class="know-more">--}}
                            {{--                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i--}}
                            {{--                                        class="material-icons mdi mdi-arrow-right"></i>--}}
                            {{--                                    <div class="ripple-container"></div>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                            <h2 class="subtitle">Jenny Jang</h2>
                            <p>Korean SEO Specialist</p>
                            <div class="social-profiles">
                                {{--                                <a href="#"><i class="mdi mdi-twitter"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-facebook"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-dribbble"></i></a>--}}
                                <a href="https://www.linkedin.com/in/koreaseoservice/" target="_blank"
                                   rel="noopener noreferrer"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".5s">
                    <div class="single-team-widget">
                        <img src="img/stacyprofileimage.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            {{--                            <div class="know-more">--}}
                            {{--                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i--}}
                            {{--                                        class="material-icons mdi mdi-arrow-right"></i>--}}
                            {{--                                    <div class="ripple-container"></div>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                            <h2 class="subtitle">Stacy Kim</h2>
                            <p>Korean Marketing Specialist</p>
                            <div class="social-profiles">
                                {{--                                <a href="#"><i class="mdi mdi-twitter"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-facebook"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-dribbble"></i></a>--}}
                                <a href="https://www.linkedin.com/in/stacy-ji-eun-kim-36367b54/" target="_blank"
                                   rel="noopener noreferrer"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".5s">
                    <div class="single-team-widget">
                        <img src="img/naoprofileimage.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            {{--                            <div class="know-more">--}}
                            {{--                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i--}}
                            {{--                                        class="material-icons mdi mdi-arrow-right"></i>--}}
                            {{--                                    <div class="ripple-container"></div>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                            <h2 class="subtitle">Nao Izawa</h2>
                            <p>Japanese Marketing Specialist</p>
                            <div class="social-profiles">
                                {{--                                <a href="#"><i class="mdi mdi-twitter"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-facebook"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-dribbble"></i></a>--}}
                                <a href="https://www.linkedin.com/in/naohikoizawa/" target="_blank"
                                   rel="noopener noreferrer"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".5s">
                    <div class="single-team-widget">
                        <img src="img/mosthandsomeguy.jpg" class="img-fluid" alt="" title="Most Handsome Guy">
                        <div class="team-member-info">
                            {{--                            <div class="know-more">--}}
                            {{--                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i--}}
                            {{--                                        class="material-icons mdi mdi-arrow-right"></i>--}}
                            {{--                                    <div class="ripple-container"></div>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                            <h2 class="subtitle">Markus Schäfer</h2>
                            <p>German Marketing Specialist</p>
                            <div class="social-profiles">
                                {{--                                <a href="#"><i class="mdi mdi-twitter"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-facebook"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-dribbble"></i></a>--}}
                                <a href="https://www.linkedin.com/in/markus-schäfer-090539178/" target="_blank"
                                   rel="noopener noreferrer"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".5s">
                    <div class="single-team-widget">
                        <img src="img/priyaprofileimage.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            {{--                            <div class="know-more">--}}
                            {{--                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i--}}
                            {{--                                        class="material-icons mdi mdi-arrow-right"></i>--}}
                            {{--                                    <div class="ripple-container"></div>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                            <h2 class="subtitle">Priyadarshini Bhuyan</h2>
                            <p>Graphic Designer</p>
                            <div class="social-profiles">
                                {{--                                <a href="#"><i class="mdi mdi-twitter"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-facebook"></i></a>--}}
                                {{--                                <a href="#"><i class="mdi mdi-dribbble"></i></a>--}}
                                <a href="https://www.linkedin.com/in/priyadarshini-bhuyan-794377142/" target="_blank"
                                   rel="noopener noreferrer"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team Section End -->


    <!-- Start Testimonial Section  -->
    {{--    <div class="testimonial section-padding"  id="partners">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <!-- Testimonial section  -->--}}
    {{--                <div class="testimonials-carousel owl-carousel">--}}
    {{--                    <div class="item">--}}
    {{--                        <div class="testimonial-item">--}}
    {{--                            <div class="datils">--}}
    {{--                                <h5>Adam Schwartz</h5>--}}
    {{--                                <span>Software Articulate, Google</span>--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem--}}
    {{--                                    Ipsum--}}
    {{--                                    has been the industry's <br> standard dummy text ever since the 1500s Lorem Ipsum.--}}
    {{--                                </p>--}}
    {{--                            </div>--}}
    {{--                            <div class="img">--}}
    {{--                                <a href="#"><img class="img-fluid" src="assets/images/testimonial/author1.jpg"--}}
    {{--                                                 alt=""></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="item">--}}
    {{--                        <div class="testimonial-item">--}}
    {{--                            <div class="datils">--}}
    {{--                                <h5>Clark Brown</h5>--}}
    {{--                                <span>Brand Managerr</span>--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem--}}
    {{--                                    Ipsum--}}
    {{--                                    has been the industry's <br> standard dummy text ever since the 1500s Lorem Ipsum.--}}
    {{--                                </p>--}}
    {{--                            </div>--}}
    {{--                            <div class="img">--}}
    {{--                                <a href="#"><img class="img-fluid" src="assets/images/testimonial/author2.jpg"--}}
    {{--                                                 alt=""></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="item">--}}
    {{--                        <div class="testimonial-item">--}}
    {{--                            <div class="datils">--}}
    {{--                                <h5>Ana Blunt</h5>--}}
    {{--                                <span>Creative Director</span>--}}
    {{--                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem--}}
    {{--                                    Ipsum--}}
    {{--                                    has been the industry's <br> standard dummy text ever since the 1500s Lorem Ipsum.--}}
    {{--                                </p>--}}
    {{--                            </div>--}}
    {{--                            <div class="img">--}}
    {{--                                <a href="#"><img class="img-fluid" src="assets/images/testimonial/author3.jpg"--}}
    {{--                                                 alt=""></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- End Testimonial Section  -->

    <!-- Start Client Section -->
    {{--    <div class="client section-padding section-dark client-image1">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div id="client-logo" class="owl-carousel">--}}
    {{--                    <div class="client-logo item">--}}
    {{--                        <a href="#">--}}
    {{--                            <img class="img-fluid" src="assets/images/clients/client1.png" alt=""/>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                    <div class="client-logo item">--}}
    {{--                        <a href="#">--}}
    {{--                            <img class="img-fluid" src="assets/images/clients/client2.png" alt=""/>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                    <div class="client-logo item">--}}
    {{--                        <a href="#">--}}
    {{--                            <img class="img-fluid" src="assets/images/clients/client3.png" alt=""/>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                    <div class="client-logo item">--}}
    {{--                        <a href="#">--}}
    {{--                            <img class="img-fluid" src="assets/images/clients/client4.png" alt=""/>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                    <div class="client-logo item">--}}
    {{--                        <a href="#">--}}
    {{--                            <img class="img-fluid" src="assets/images/clients/client1.png" alt=""/>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                    <div class="client-logo item">--}}
    {{--                        <a href="#">--}}
    {{--                            <img class="img-fluid" src="assets/images/clients/client2.png" alt=""/>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                    <div class="client-logo item">--}}
    {{--                        <a href="#">--}}
    {{--                            <img class="img-fluid" src="assets/images/clients/client3.png" alt=""/>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                    <div class="client-logo item">--}}
    {{--                        <a href="#">--}}
    {{--                            <img class="img-fluid" src="assets/images/clients/client4.png" alt=""/>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- End Client Section -->

    <!-- Contact Us Section -->
    <section class="Material-contact-section section-padding section-dark contact-image1" id="contact">
        <div class="container contact-section">
            <div class="row">
                <!-- Section Titile -->
                <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                    <h1 class="section-title white">@lang('dashboard.contact-section-title')</h1>
                </div>
            </div>
            <div class="row">
                <!-- Section Titile -->
                <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                    <p class="white">@lang('dashboard.contact-desc')</p>

                    <div class="find-widget">
                        <a href="#" class="white"><i
                                class="material-icons mdi mdi-map-marker"></i>@lang('dashboard.ljubljana-slovenia')</a>
                    </div>

                    <div class="find-widget">
                        <a href="#" class="white"><i class="material-icons mdi mdi-email-open mr-3"></i>contact@fydary.io</a>
                    </div>

                </div>
                <!-- contact form -->
                <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                    <form class="shake" role="form" method="post" id="contactForm" name="contact-form"
                          data-toggle="validator" action="javascript:;" onsubmit="submitForm(this)">
                        <!-- Name -->
                        <div class="form-group label-floating">
                            <label class="control-label white" for="name">@lang('dashboard.name')</label>
                            <input class="form-control white" id="name" type="text" name="name" required
                                   data-error="{{__('dashboard.name-validation-message')}}"
                                   autocomplete="off">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- email -->
                        <div class="form-group label-floating">
                            <label class="control-label white" for="email">@lang('dashboard.email')</label>
                            <input class="form-control white" id="email" type="email" name="email" required
                                   data-error="{{__('dashboard.email-validation-message')}}"
                                   autocomplete="off">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Subject -->
                        <div class="form-group label-floating">
                            <label class="control-label white">@lang('dashboard.subject')</label>
                            <input class="form-control white" id="msg_subject" type="text" name="subject" required
                                   data-error="{{__('dashboard.subject-validation-message')}}"
                                   autocomplete="off">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Message -->
                        <div class="form-group label-floating">
                            <label for="message" class="control-label white">@lang('dashboard.message')</label>
                            <textarea class="form-control white" rows="3" id="message" name="message" required
                                      data-error="{{__('dashboard.message-validation-message')}}"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                        <!-- Form Submit -->
                        <div class="form-submit mt-5">
                            <button class="btn btn-common" type="submit" id="form-submit"><i
                                    class="material-icons mdi mdi-message-outline"></i> @lang('dashboard.send-message')
                            </button>
                            <!--Big blue-->
                            <div class="preloader-wrapper active">
                                <div class="spinner-layer spinner-blue-only">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="gap-patch">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Section End -->
@endsection
