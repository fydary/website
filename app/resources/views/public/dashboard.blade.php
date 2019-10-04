@extends('layouts.app')
@section('content')
    <!-- Main Carousel Section Start -->
    <section id="home">
        <div id="main-slide" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="static-carousel-image"
                     style="background-image: url('assets/images/SlideStarEffect_1.gif');">
                    <div class="carousel-item active">
                        <!-- <img class="d-block w-100" src="assets/images/slider/slider-bg1.jpeg" alt="First slide"> -->
                        <div class="carousel-caption d-md-block">
                            <h1 class="animated wow fadeInDown hero-heading" data-wow-delay=".4s">Fydary</h1>
                            <h5 class="animated fadeInUp wow hero-sub-heading" data-wow-delay=".6s">Change
                                Everything</h5>
                            <a href="javascript:void(0)" class="animated fadeInUp wow btn btn-common"
                               data-wow-delay=".8s"><i
                                    class="material-icons mdi mdi-lightbulb-outline"></i> Explore
                                <div class="ripple-container"></div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <img class="d-block w-100" src="assets/images/slider/slider-bg2.jpeg" alt="Second slide"> -->
                        <div class="carousel-caption d-md-block">
                            <h1 class="animated wow fadeInLeft hero-heading" data-wow-delay=".7s">Investment for
                                All</h1>
                            <h5 class="animated wow fadeInRight hero-sub-heading" data-wow-delay=".9s">Opening ownership
                                to
                                high
                                value assets</h5>
                            <a href="javascript:void(0)" class="animated fadeInUp wow btn btn-common"
                               data-wow-delay=".6s"><i
                                    class="material-icons mdi mdi-cart-outline"></i>Whitepaper</a>
                            <a href="javascript:void(0)" class="animated fadeInUp wow btn btn-border"
                               data-wow-delay=".8s"><i
                                    class="material-icons mdi mdi-lightbulb-outline"></i> Learn More
                                <div class="ripple-container"></div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <img class="d-block w-100" src="assets/images/slider/slider-bg1.jpeg" alt="Third slide"> -->
                        <div class="carousel-caption d-md-block">
                            <h1 class="animated wow fadeInDown hero-heading" data-wow-delay=".6s">Legal Meets
                                Fintech</h1>
                            <h5 class="animated fadeInUp wow hero-sub-heading" data-wow-delay=".8s">Creating legal
                                compliance
                                within the EU</h5>
                            <a href="javascript:void(0)" class="animated fadeInUp wow btn btn-common"
                               data-wow-delay=".8s"><i
                                    class="material-icons mdi mdi-arrow-collapse-down"></i>Whitepaper</a>
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
                        <i class="icons_new"><img src="assets/images/icons/removingbarriericon.png" alt=""></i>
                        <h2 class="subtitle">Removing the Barrier of Entry</h2>
                        <p>Allowing everyone to invest in high value assets</p>
                    </div>
                </div>
                <!-- Single About -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".3s">
                    <div class="about-single">
                        <i class="icons_new"><img src="assets/images/icons/financemeetslegalicon.png" alt=""></i>
                        <h2 class="subtitle">Finance Meets Legal</h2>
                        <p>Providing strong legal backing to secure financial investment</p>
                    </div>
                </div>
                <!-- Single About -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".4s">
                    <div class="about-single">
                        <i class="icons_new"><img src="assets/images/icons/blockchaintechnologyicon.png" alt=""></i>
                        <h2 class="subtitle">Blockchain Technology</h2>
                        <p>Utilizing smart contracts to secure trades and assets</p>
                    </div>
                </div>
                <!-- Single About -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".5s">
                    <div class="about-single">
                        <i class="icons_new"><img src="assets/images/icons/fulluserexperienceicon.png" alt=""></i>
                        <h2 class="subtitle">Full User Experience</h2>
                        <p>Finance doesn't have to be boring, but in fact can be enjoyable and engaging</p>
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
                <div class="col-md-12 col-lg-8 col-xs-12">
                    <div class="Material-tab">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#finance" role="tab"><i
                                        class="icons_new"><img src="assets/images/icons/financeicon.png" alt=""></i>
                                    <br>Finance</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#technology" role="tab"><i
                                        class="icons_new"><img src="assets/images/icons/technologyicon.png" alt=""></i>
                                    <br>Technology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#legal" role="tab"><i class="icons_new"><img
                                            src="assets/images/icons/legalicon.png" alt=""></i> <br>Legal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#businessdevelopment" role="tab"><i
                                        class="icons_new"><img src="assets/images/icons/businessdevelopmenticon.png"
                                                               alt=""></i>
                                    <br>Business</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="finance" role="tabpanel">
                                <p>The financial industry has always been controlled by the wealthiest of society in
                                    that
                                    many investments are too valuable for even the upper middle class to reasonably
                                    invest.
                                    Investments that require hundreds of millions of dollars can only be accessed by
                                    billionaires, and even those with high net worth are unable to access these
                                    opportunities. We are removing these barriers by allowing for fractional ownership
                                    of
                                    assets through crowdfunding methods.</p>

                            </div>
                            <div class="tab-pane fade" id="technology" role="tabpanel">
                                <p>Blockchain technology allows us to be able to manage fractional ownership
                                    opportunities
                                    in several ways. First, open ledgers allow for all transactions to be open and
                                    honest,
                                    allowing for all investors to be aware of exactly what they are receiving and that
                                    no
                                    money goes unaccounted for. Second, smart contracts allow for the management and
                                    execution of the will of all owners in a quick and efficient manner, speeding up the
                                    process of a traditional shareholders meeting. Third, blockchain governance allows
                                    for
                                    users to make decisions regarding their assets in a fair and open environment,
                                    regardless of where they are in the world.</p>

                            </div>
                            <div class="tab-pane fade" id="legal" role="tabpanel">
                                <p>Many financial and technology institutions begin their projects with the best
                                    intentions
                                    of mind without looking into future potential legal ramifications for their projects
                                    or
                                    how current laws can bottleneck their development. We take the law seriously and it
                                    is
                                    even a necessary element to our business. Progress in current law is a key element
                                    to
                                    adapting new technology in society, and we actively find the best ways to be
                                    compliant
                                    as well as fill in the gaps where no law exists.</p>

                            </div>
                            <div class="tab-pane fade" id="businessdevelopment" role="tabpanel">
                                <p>Many technology companies focus only on their tech and ignore the business aspect of
                                    things. Fydary is ran as a proper business, with user and partner acquisition a top
                                    priority. Without having a strong symbiotic relationship with our users and
                                    partners,
                                    building our technology will be for nothing. Our growth plan is focused on bringing
                                    highly qualified users and partners to our platform, with the end goal of having
                                    mass
                                    adoption of Fydary.</p>

                            </div>
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
                    <h1 class="section-title">Our Industries</h1>
                </div>
            </div>
            <!-- Services Widget Section -->
            <div class="row">
                <!-- Service Widgets -->
                <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp"
                     data-wow-delay=".3s">
                    <div class="media">
                        <div class="media-left">
                            <i class="icons_new"><img src="assets/images/icons/hedgefundsicon.png" alt=""></i>
                        </div>
                        <div class="media-body">
                            <h2 class="subtitle"><a href="#">Hedge Funds</a></h2>
                            <p>Allowing hedge funds to accept those that may not otherwise qualify as investors.</p>
                        </div>
                    </div>
                </div>
                <!-- Service Widgets -->
                <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp"
                     data-wow-delay=".4s">
                    <div class="media">
                        <div class="media-left">
                            <i class="icons_new"><img src="assets/images/icons/realestateicon.png" alt=""></i>
                        </div>
                        <div class="media-body">
                            <h2 class="subtitle"><a href="#">Real Estate</a></h2>
                            <p>Opening opportunities for users to invest in large real estate projects.</p>
                        </div>
                    </div>
                </div>
                <!-- Service Widgets -->
                <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp"
                     data-wow-delay=".5s">
                    <div class="media">
                        <div class="media-left">
                            <i class="icons_new"><img src="assets/images/icons/energyicon.png" alt=""></i>
                        </div>
                        <div class="media-body">
                            <h2 class="subtitle"><a href="#">Energy</a></h2>
                            <p>Building renewable energy farms is no small task; Fydary opens the opportunity to
                                everyone.</p>
                        </div>
                    </div>
                </div>
                <!-- Service Widgets -->
                <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp"
                     data-wow-delay=".6s">
                    <div class="media">
                        <div class="media-left">
                            <i class="icons_new"><img src="assets/images/icons/transportlogisticsicon.png" alt=""></i>
                        </div>
                        <div class="media-body">
                            <h2 class="subtitle"><a href="#">Transportation and Logistics</a></h2>
                            <p>The world runs on our ability to move people and items.</p>
                        </div>
                    </div>
                </div>
                <!-- Service Widgets -->
                <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp"
                     data-wow-delay=".7s">
                    <div class="media">
                        <div class="media-left">
                            <i class="icons_new"><img src="assets/images/icons/farmingicon.png" alt=""></i>
                        </div>
                        <div class="media-body">
                            <h2 class="subtitle"><a href="#">Farming</a></h2>
                            <p>The world needs food, and we are looking towards the most advanced farming methods to
                                bring
                                progress to the industry.</p>
                        </div>
                    </div>
                </div>
                <!-- Service Widgets -->
                <div class="col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp"
                     data-wow-delay=".8s">
                    <div class="media">
                        <div class="media-left">
                            <i class="icons_new"><img src="assets/images/icons/charityicon.png" alt=""></i>
                        </div>
                        <div class="media-body">
                            <h2 class="subtitle"><a href="#">Charity</a></h2>
                            <p>Want to help out with some of your investment? We have charitable options for you to do
                                your
                                part.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->


    <!-- work-counter area -->
    <section class="work-counter-section section-padding" id="partners">
        <div class="container">
            <div class="row">
                <!-- Single Counter -->
                <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp"
                     data-wow-delay=".2s">
                    <div class="counter">
                        <div class="icons_new"><img src="assets/images/icons/partnersicon.png" alt=""></div>
                        <div class="timer">5</div>
                        <p>Partners</p>
                    </div>
                </div>
                <!-- Single Counter -->
                <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp"
                     data-wow-delay=".3s">
                    <div class="counter">
                        <div class="icons_new"><img src="assets/images/icons/projectsicon.png" alt=""></div>
                        <div class="timer">27</div>
                        <p>Projects</p>
                    </div>
                </div>
                <!-- Single Counter -->
                <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp"
                     data-wow-delay=".4s">
                    <div class="counter">
                        <div class="icons_new"><img src="assets/images/icons/teammembersicon.png" alt=""></div>
                        <div class="timer">35</div>
                        <p>Team Members</p>
                    </div>
                </div>
                <!-- Single Counter -->
                <div class="col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp"
                     data-wow-delay=".5s">
                    <div class="counter">
                        <div class="icons_new"><img src="assets/images/icons/usersicon.png" alt=""></div>
                        <div class="timer">5478</div>
                        <p>Users</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work-counter area end -->

    <!-- Our Team Section -->
    <section class="team section-padding section-dark" id="team">
        <div class="container">
            <div class="row">
                <!-- Section Titile -->
                <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                    <h1 class="section-title">Meet The Team</h1>
                </div>
            </div>
            <div class="row">
                <!-- Single Team Widget -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".3s">
                    <div class="single-team-widget">
                        <img src="assets/images/team/team1.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            <div class="know-more">
                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i
                                        class="material-icons mdi mdi-arrow-right"></i>
                                    <div class="ripple-container"></div>
                                </a>
                            </div>
                            <h2 class="subtitle">Matic Jagodic</h2>
                            <p>Co-Founder and CEO</p>
                            <div class="social-profiles">
                                <a href="#"><i class="mdi mdi-twitter"></i></a>
                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                <a href="#"><i class="mdi mdi-dribbble"></i></a>
                                <a href="#"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Widget -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".4s">
                    <div class="single-team-widget">
                        <img src="assets/images/team/team2.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            <div class="know-more">
                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i
                                        class="material-icons mdi mdi-arrow-right"></i>
                                    <div class="ripple-container"></div>
                                </a>
                            </div>
                            <h2 class="subtitle">Joshua Blount</h2>
                            <p>Co-Founder and CMO</p>
                            <div class="social-profiles">
                                <a href="#"><i class="mdi mdi-twitter"></i></a>
                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                <a href="#"><i class="mdi mdi-dribbble"></i></a>
                                <a href="#"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Team Widget -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".6s">
                    <div class="single-team-widget">
                        <img src="assets/images/team/team4.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            <div class="know-more">
                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i
                                        class="material-icons mdi mdi-arrow-right"></i>
                                    <div class="ripple-container"></div>
                                </a>
                            </div>
                            <h2 class="subtitle">Peter Kodermac</h2>
                            <p>Co-Founder</p>
                            <div class="social-profiles">
                                <a href="#"><i class="mdi mdi-twitter"></i></a>
                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                <a href="#"><i class="mdi mdi-dribbble"></i></a>
                                <a href="#"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Widget -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".5s">
                    <div class="single-team-widget">
                        <img src="assets/images/team/team3.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            <div class="know-more">
                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i
                                        class="material-icons mdi mdi-arrow-right"></i>
                                    <div class="ripple-container"></div>
                                </a>
                            </div>
                            <h2 class="subtitle">Priyadarshini Bhuyan</h2>
                            <p>Graphic Designer</p>
                            <div class="social-profiles">
                                <a href="#"><i class="mdi mdi-twitter"></i></a>
                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                <a href="#"><i class="mdi mdi-dribbble"></i></a>
                                <a href="#"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Widget -->
                <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".5s">
                    <div class="single-team-widget">
                        <img src="assets/images/team/team3.jpg" class="img-fluid" alt="">
                        <div class="team-member-info">
                            <div class="know-more">
                                <a class="btn btn-round btn-fab btn-xs" href="javascript:void(0)"><i
                                        class="material-icons mdi mdi-arrow-right"></i>
                                    <div class="ripple-container"></div>
                                </a>
                            </div>
                            <h2 class="subtitle">Markus Schaffer</h2>
                            <p>Social Media Marketer</p>
                            <div class="social-profiles">
                                <a href="#"><i class="mdi mdi-twitter"></i></a>
                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                <a href="#"><i class="mdi mdi-dribbble"></i></a>
                                <a href="#"><i class="mdi mdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team Section End -->

    <!-- Start Testimonial Section  -->
    <div class="testimonial section-padding">
        <div class="container">
            <div class="row">
                <!-- Testimonial section  -->
                <div class="testimonials-carousel owl-carousel">
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="datils">
                                <h5>Adam Schwartz</h5>
                                <span>Software Articulate, Google</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry's <br> standard dummy text ever since the 1500s Lorem Ipsum.
                                </p>
                            </div>
                            <div class="img">
                                <a href="#"><img class="img-fluid" src="assets/images/testimonial/author1.jpg"
                                                 alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="datils">
                                <h5>Clark Brown</h5>
                                <span>Brand Managerr</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry's <br> standard dummy text ever since the 1500s Lorem Ipsum.
                                </p>
                            </div>
                            <div class="img">
                                <a href="#"><img class="img-fluid" src="assets/images/testimonial/author2.jpg"
                                                 alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="datils">
                                <h5>Ana Blunt</h5>
                                <span>Creative Director</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry's <br> standard dummy text ever since the 1500s Lorem Ipsum.
                                </p>
                            </div>
                            <div class="img">
                                <a href="#"><img class="img-fluid" src="assets/images/testimonial/author3.jpg"
                                                 alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Section  -->

    <!-- Start Client Section -->
    <div class="client section-padding section-dark client-image1">
        <div class="container">
            <div class="row">
                <div id="client-logo" class="owl-carousel">
                    <div class="client-logo item">
                        <a href="#">
                            <img class="img-fluid" src="assets/images/clients/client1.png" alt=""/>
                        </a>
                    </div>
                    <div class="client-logo item">
                        <a href="#">
                            <img class="img-fluid" src="assets/images/clients/client2.png" alt=""/>
                        </a>
                    </div>
                    <div class="client-logo item">
                        <a href="#">
                            <img class="img-fluid" src="assets/images/clients/client3.png" alt=""/>
                        </a>
                    </div>
                    <div class="client-logo item">
                        <a href="#">
                            <img class="img-fluid" src="assets/images/clients/client4.png" alt=""/>
                        </a>
                    </div>
                    <div class="client-logo item">
                        <a href="#">
                            <img class="img-fluid" src="assets/images/clients/client1.png" alt=""/>
                        </a>
                    </div>
                    <div class="client-logo item">
                        <a href="#">
                            <img class="img-fluid" src="assets/images/clients/client2.png" alt=""/>
                        </a>
                    </div>
                    <div class="client-logo item">
                        <a href="#">
                            <img class="img-fluid" src="assets/images/clients/client3.png" alt=""/>
                        </a>
                    </div>
                    <div class="client-logo item">
                        <a href="#">
                            <img class="img-fluid" src="assets/images/clients/client4.png" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Client Section -->


    <!-- Contact Us Section -->
    <section class="Material-contact-section section-padding section-dark contact-image1" id="contact">
        <div class="container">
            <div class="row">
                <!-- Section Titile -->
                <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                    <h1 class="section-title">Love to Hear From You</h1>
                </div>
            </div>
            <div class="row">
                <!-- Section Titile -->
                <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                    <p>If you are looking to partner with us, want to learn more about our IEO, or any general questions
                        you
                        may have, feel free to reach out to us and we will be happy to give you any information you
                        require.</p>

                    <div class="find-widget">
                        <a href="#"><i class="material-icons mdi mdi-map-marker"></i>Ljubljana, Slovenia</a>
                    </div>

                    <div class="find-widget">
                        <a href="#"><i class="material-icons mdi mdi-email-open mr-3"></i>contact@fydary.io</a>
                    </div>

                </div>
                <!-- contact form -->
                <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                    <form class="shake" role="form" method="post" id="contactForm" name="contact-form"
                          data-toggle="validator">
                        <!-- Name -->
                        <div class="form-group label-floating">
                            <label class="control-label" for="name">Name</label>
                            <input class="form-control" id="name" type="text" name="name" required
                                   data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- email -->
                        <div class="form-group label-floating">
                            <label class="control-label" for="email">Email</label>
                            <input class="form-control" id="email" type="email" name="email" required
                                   data-error="Please enter your Email">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Subject -->
                        <div class="form-group label-floating">
                            <label class="control-label">Subject</label>
                            <input class="form-control" id="msg_subject" type="text" name="subject" required
                                   data-error="Please enter your message subject">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Message -->
                        <div class="form-group label-floating">
                            <label for="message" class="control-label">Message</label>
                            <textarea class="form-control" rows="3" id="message" name="message" required
                                      data-error="Write your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Form Submit -->
                        <div class="form-submit mt-5">
                            <button class="btn btn-common" type="submit" id="form-submit"><i
                                    class="material-icons mdi mdi-message-outline"></i> Send Message
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
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Section End -->
@endsection
