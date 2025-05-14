<!DOCTYPE html>
<html lang="en">
<?php $base_url = 'http://localhost/health/'; ?>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Nutrition Health and Diet HTML Template" />
    <meta name="description" content="Lifestyle - Nutrition Health and Diet HTML Template" />
    <title>Lifestyle - Nutrition Health and Diet HTML Template</title>
    <link rel="shortcut icon" href="<?= $base_url; ?>assets/img/favicon.png" />
    <link rel="apple-touch-icon" href="img/logos/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png" />
    <link rel="stylesheet" href="<?= $base_url; ?>assets/css/plugins.css">
    <link rel="stylesheet" href="<?= $base_url; ?>assets/css/search.css">
    <link rel="stylesheet" href="<?= $base_url; ?>assets/css/base.css">
    <link rel="stylesheet" href="<?= $base_url; ?>assets/css/styles.css" >
    <style>
        .card-footer{
            height: 150px;
        }
        .before{
            position: absolute;
            color: #000;
            top: 50%;
            background-color: #FFFFFF;
            left: 0;
            border-radius: 0 5px 5px 0;
            padding: 2px 9px;
            font-size: 14px;
        }
        .after{
            position: absolute;
            color: #000;
            top: 50%;
            background-color: #FFFFFF;
            right: 0;
            border-radius: 5px 0 0 5px;
            padding: 2px 9px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
        <header class="header-style1">

            <div class="container">
                <div class="navbar-header navbar-header-custom row text-dark">

                    <div class="col-lg-3">
                        <!-- start logo -->
                        <a href="index.html" class="navbar-brand logodefault"><img id="logo" src="<?= $base_url; ?>assets/img/logo.png" alt="logo"></a>
                        <!-- end logo -->
                    </div>

                    <div class="col-lg-9 col-xl-8 offset-xl-1 offset-lg-0 d-none d-lg-block">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="media">
                                    <i class="ti-location-pin header-icon text-primary display-12"></i>
                                    <div class="media-body ms-3">
                                        <span class="font-weight-600 d-block display-29">Our Location</span>
                                        <span class="font-weight-500 display-29 d-block">Guild Street 51, UK</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media">
                                    <i class="ti-email header-icon text-primary display-14"></i>
                                    <div class="media-body ms-3">
                                        <span class="font-weight-600 d-block display-29">Mail Us</span>
                                        <span class="display-29 d-block">info@youremail.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media">
                                    <i class="ti-mobile header-icon text-primary display-12"></i>
                                    <div class="media-body ms-3">
                                        <span class="font-weight-600 d-block display-29">Call Us</span>
                                        <span class="display-29 d-block">+123 4567 890</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="navbar-default">

                <!-- start top search -->
                <div class="top-search custom-search bg-primary">
                    <div class="container">
                        <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search display-28 text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                                <span class="input-group-addon close-search mt-2"><i class="fas fa-times display-28"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end top search -->

                <div class="menu_area alt-font bg-secondary">
                    <div class="container">
                        <div class="col-lg-12">                        
                            <nav class="navbar navbar-expand-lg navbar-light p-0">
                                
                                <div class="navbar-toggler bg-secondary"></div>

                                <!-- start menu area -->
                                <ul class="navbar-nav me-auto" id="nav" style="display: none;">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#!">Pages</a>
                                        <ul>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="our-history.html">Our History</a></li>
                                            <li><a href="meal-plans.html">Meal Plans</a></li>
                                            <li><a href="seminar-schedule.html">Seminar Schedule</a></li>
                                            <li><a href="success-story.html">Success Story</a></li>
                                            <li>
                                                <a href="#!">Our Team</a>
                                                <ul>
                                                    <li><a href="our-team.html">Our Team</a></li>
                                                    <li><a href="team-details.html">Team Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="appointment.html">Appointment</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="#!">Others</a>
                                                <ul>
                                                    <li><a href="coming-soon.html">Comingsoon</a></li>
                                                    <li><a href="404-page.html">404 Page</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#!">Services</a>
                                        <ul>
                                            <li><a href="our-services.html">Our Services</a></li>
                                            <li><a href="balance-body-mind.html">Balance Body & Mind</a></li>
                                            <li><a href="personalized-nutrition.html">Personalized Nutrition</a></li>
                                            <li><a href="fitness-performance.html">Fitness & Performance</a></li>
                                            <li><a href="healthy-daily-life.html">Healthy Daily Life</a></li>
                                            <li><a href="support-motivation.html">Support & Motivation</a></li>
                                            <li><a href="weight-loss-programs.html">Weight Loss Programs</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#!">Portfolio</a>
                                        <ul>
                                            <li><a href="our-portfolio.html">Our Portfolio</a></li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#!">Blog</a>
                                        <ul>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#!">Elements</a>
                                        <ul class="row megamenu">
                                            <li class="col-lg-3 col-sm-12">
                                                <span class="mb-0 mb-lg-3 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-600 display-30">Elements 01</span>
                                                <ul>
                                                    <li><a href="accordion.html"><i class="fas fa-sliders-h me-2"></i>Accordion</a></li>
                                                    <li><a href="alerts.html"><i class="far fa-bell me-2"></i>Alerts</a></li>
                                                    <li><a href="blockquotes.html"><i class="fas fa-vector-square me-2"></i>Blockquotes</a></li>
                                                    <li><a href="buttons.html"><i class="fas fa-link me-2"></i>Buttons</a></li>
                                                    <li><a href="call-to-action.html"><i class="far fa-square me-2"></i>Call to Action</a></li>
                                                    <li><a href="carousel-slider.html"><i class="far fa-images me-2"></i>Carousel Slider</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-lg-3 col-sm-12">
                                                <span class="mb-0 mb-lg-3 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-600 display-30">Elements 02</span>
                                                <ul>
                                                    <li><a href="count-down.html"><i class="far fa-flag me-2"></i>Count Down</a></li>
                                                    <li><a href="counter.html"><i class="fas fa-compress me-2"></i>Counters</a></li>
                                                    <li><a href="dropcaps.html"><i class="far fa-closed-captioning me-2"></i>Dropcaps</a></li>
                                                    <li><a href="forms.html"><i class="fab fa-wpforms me-2"></i>Forms</a></li>
                                                    <li><a href="font-icons.html"><i class="far fa-check-square me-2"></i>Font Icons</a></li>
                                                    <li><a href="google-map.html"><i class="fas fa-map-marker-alt me-2"></i>Google Map</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-lg-3 col-sm-12">
                                                <span class="mb-0 mb-lg-3 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-600 display-30">Elements 03</span>
                                                <ul>
                                                    <li><a href="grid-system.html"><i class="fas fa-th me-2"></i>Grid System</a></li>
                                                    <li><a href="highlights.html"><i class="fas fa-highlighter me-2"></i>Highlights</a></li>
                                                    <li><a href="icon-with-text.html"><i class="fab fa-fonticons-fi me-2"></i>Icon With Text</a></li>
                                                    <li><a href="list-styles.html"><i class="fas fa-list-ul me-2"></i>List Styles</a></li>
                                                    <li><a href="media-object.html"><i class="fas fa-photo-video me-2"></i>Media Object</a></li>
                                                    <li><a href="modal.html"><i class="fas fa-expand me-2"></i>Modal</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-lg-3 col-sm-12">
                                                <span class="mb-0 mb-lg-3 d-block py-2 p-lg-0 px-4 px-lg-0 text-uppercase sub-title font-weight-600 display-30">Elements 04</span>
                                                <ul>
                                                    <li><a href="pagination.html"><i class="far fa-caret-square-right me-2"></i>Pagination</a></li>
                                                    <li><a href="progress-bar.html"><i class="fas fa-tasks me-2"></i>Progress Bars</a></li>
                                                    <li><a href="tables.html"><i class="fas fa-table me-2"></i>Tables</a></li>
                                                    <li><a href="tabs.html"><i class="fas fa-sliders-h me-2"></i>Tabs</a></li>
                                                    <li><a href="typography.html"><i class="fas fa-text-height me-2"></i>Typography</a></li>
                                                    <li><a href="videos.html"><i class="fas fa-video me-2"></i>Videos</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                                <!-- end menu area -->

                                <!-- start attribute navigation -->
                                <div class="attr-nav align-items-lg-center ms-auto">
                                    <ul>
                                        <li class="search"><a href="#!"><i class="fas fa-search text-white"></i></a></li>
                                        <li class="d-none d-xl-inline-block"><a href="contact.html" class="butn white-hover sm">Get A Quote</a></li>
                                    </ul>
                                </div>
                                <!-- end attribute navigation -->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- BANNER
        ================================================== -->
        <section class="p-0">
            <div class="container-fluid px-0 z-index-2 position-relative">
                <div class="slider-fade-02 owl-carousel owl-theme w-100">
                    <div class="item bg-img cover-background pt-6 pb-10 pt-sm-6 pb-sm-14 py-md-16 py-lg-20 py-xxl-24 dark-overlay" data-overlay-dark="4" data-background="<?= $base_url; ?>assets/img/banner-01.jpg">
                        <div class="container pt-6 pt-md-0 my-xxl-4">
                            <div class="row justify-content-end text-end align-items-center">
                                <div class="col-md-10 col-lg-8 col-xl-7">
                                    <h1 class="display-17 display-sm-11 display-md-9 display-lg-8 display-xl-3 display-xxl-2 mb-lg-3 text-white">Nutrition With <span class="text-primary">Hygienic </span>Food</h1>
                                    <p class="lead opacity7 text-white mb-1-6 mb-md-2-2">We encourage you to fix and forestall illness with nourishment for carrying on with your life in a solid manner.</p>
                                    <a href="contact.html" class="butn-style01 secondary"><span>Get Started Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item bg-img cover-background pt-6 pb-10 pt-sm-6 pb-sm-14 py-md-16 py-lg-20 py-xxl-24 dark-overlay" data-overlay-dark="4" data-background="<?= $base_url; ?>assets/img/banner-02.jpg">
                        <div class="container pt-6 pt-md-0 my-xxl-4">
                            <div class="row justify-content-end text-end align-items-center">
                                <div class="col-md-10 col-lg-8 col-xl-7">
                                    <h1 class="display-17 display-sm-11 display-md-9 display-lg-8 display-xl-3 display-xxl-2 mb-lg-3 text-white">Keeping Your Body at its<span class="text-primary"> Best.</span></h1>
                                    <p class="lead opacity7 text-white mb-1-6 mb-md-2-2">We encourage you to fix and forestall illness with nourishment for carrying on with your life in a solid manner.</p>
                                    <a href="contact.html" class="butn-style01 secondary"><span>Get Started Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item bg-img cover-background pt-6 pb-10 pt-sm-6 pb-sm-14 py-md-16 py-lg-20 py-xxl-24 dark-overlay" data-overlay-dark="4" data-background="<?= $base_url; ?>assets/img/banner-03.jpg">
                        <div class="container pt-6 pt-md-0 my-xxl-4">
                            <div class="row justify-content-end text-end align-items-center">
                                <div class="col-md-10 col-lg-8 col-xl-7">
                                    <h1 class="display-17 display-sm-11 display-md-9 display-lg-8 display-xl-3 display-xxl-2 mb-lg-3 text-white">Loss The Fat Eat Right, <span class="text-primary">Be Right</span></h1>
                                    <p class="lead opacity7 text-white mb-1-6 mb-md-2-2">We encourage you to fix and forestall illness with nourishment for carrying on with your life in a solid manner.</p>
                                    <a href="contact.html" class="butn-style01 secondary"><span>Get Started Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7 Pillar
        =============================================== -->
        <section class="overflow-visible">
            <div class="container">
                <div class="section-heading">
                    
                    <h2 class="display-25 display-sm-20 display-md-20 display-xl-9 font-weight-600 mb-3">Seven pillars of life for  <span class="fw-bolder text-secondary">Good Health</span></h2>
                    <p class="mb-0 w-md-80 w-lg-70 w-xl-50 mx-auto">The Essential Foundations for a Healthier, Happier Life.</p>
                </div>
                <div class="row align-items-center mt-n1-6">
                    <div class="col-sm-6 col-xl-3 mt-1-6">
                        <div class="card card-style6 border-0">
                            <div class="text-center">
                                <img class="border-radius-10" src="<?= $base_url; ?>assets/img/nutretion.png" alt="...">
                            </div>
                            <div class="card-body py-5 position-relative">
                                <div class="process-line"></div>
                                <div class="process-dot"></div>
                            </div>
                            <div class="card-footer px-4 bg-transparent border-0 text-center">
                                <h3 class="display-28 display-md-27">Nutrition</h3>
                                <p class="mb-0 display-29">A proper, balanced nutrition will help fuel your daily activities and promote a lifetime of wellness.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mt-1-6">
                        <div class="card card-style6 border-0">
                            <div class="text-center">
                                <img class="border-radius-10" src="<?= $base_url; ?>assets/img/exercise.png" alt="...">
                            </div>
                            <div class="card-body py-5 position-relative">
                                <div class="process-line"></div>
                                <div class="process-dot"></div>
                            </div>
                            <div class="card-footer px-4 bg-transparent border-0 text-center">
                                <h3 class="display-28 display-md-27">Exercise</h3>
                                <p class="mb-0 display-29">Through exercise, you burn calories. Exercise creates an energy deficit, and also improves lean muscle mass.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mt-1-6">
                        <div class="card card-style6 border-0">
                            <div class="text-center">
                                <img class="border-radius-10" src="<?= $base_url; ?>assets/img/water.png" alt="...">
                            </div>
                            <div class="card-body py-5 position-relative">
                                <div class="process-line"></div>
                                <div class="process-dot"></div>
                            </div>
                            <div class="card-footer px-4 bg-transparent border-0 text-center">
                                <h3 class="display-28 display-md-27">Water</h3>
                                <p class="mb-0 display-29">The human body is 70% water, so it’s no surprise that we need to stay hydrated in order to remain healthy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mt-1-6">
                        <div class="card card-style6 border-0">
                            <div class="text-center">
                                <img class="border-radius-10" src="<?= $base_url; ?>assets/img/sleep.png" alt="...">
                            </div>
                            <div class="card-body py-5 position-relative">
                                <div class="process-line"></div>
                                <div class="process-dot"></div>
                            </div>
                            <div class="card-footer px-4 bg-transparent border-0 text-center">
                                <h3 class="display-28 display-md-27">Sleep</h3>
                                <p class="mb-0 display-29">During sleep, your body is working to support healthy brain function and maintain your physical health.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mt-5" style="display: flex; justify-content: center;">
                    <div class="col-sm-6 col-xl-3 mt-1-6">
                        <div class="card card-style6 border-0">
                            <div class="text-center">
                                <img class="border-radius-10" src="<?= $base_url; ?>assets/img/healthy-socilisation.png" alt="...">
                            </div>
                            <div class="card-body py-5 position-relative">
                                <div class="process-line"></div>
                                <div class="process-dot"></div>
                            </div>
                            <div class="card-footer px-4 bg-transparent border-0 text-center">
                                <h3 class="display-28 display-md-27">Healthy Socialization</h3>
                                <p class="mb-0 display-29">Socialization helps to improve our mental and emotional health,and physical well being.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mt-1-6">
                        <div class="card card-style6 border-0">
                            <div class="text-center">
                                <img class="border-radius-10" src="<?= $base_url; ?>assets/img/positive-mind.png" alt="...">
                            </div>
                            <div class="card-body py-5 position-relative">
                                <div class="process-line"></div>
                                <div class="process-dot"></div>
                            </div>
                            <div class="card-footer px-4 bg-transparent border-0 text-center">
                                <h3 class="display-28 display-md-27">Positive Mindset</h3>
                                <p class="mb-0 display-29">Positive thinking just means that you approach unpleasantness in a more positive and productive way.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mt-1-6">
                        <div class="card card-style6 border-0">
                            <div class="text-center">
                                <img class="border-radius-10" src="<?= $base_url; ?>assets/img/coach.png" alt="...">
                            </div>
                            <div class="card-body py-5 position-relative">
                                <div class="process-line"></div>
                                <div class="process-dot"></div>
                            </div>
                            <div class="card-footer px-4 bg-transparent border-0 text-center">
                                <h3 class="display-28 display-md-27">Wellness coach</h3>
                                <p class="mb-0 display-29">A coach provides space and structure for the reflection that is necessary for learning and growth.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>


        <section class="bg-light">
            <div class="container">
                <div class="row">
                    <!-- service left -->
                    <div class="col-lg-8 mb-2-9 mb-lg-0">
                        <div>
                            <div class="row mb-2-2">
                                <div class="col-lg-12">
                                    <h3 class="mb-3">Nutrition Is Good For Everyone!</h3>
                                    <p class="w-95 mb-1-9">Good for all men, women and children. Nutrition gives nurishment to body and calories gives energy to body....</p>
                                    
                                    <div class="row mt-n1-9 align-items-center">
                                        <div class="col-xl-6 order-2 order-xl-1 mt-1-9">
                                            <div>
                                                <div class="d-flex mb-1-9">
                                                    <div class="flex-shrink-0">
                                                        <div class="about-icon">
                                                            <img src="<?= $base_url; ?>assets/img/leafwhite.png" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h4 class="h5">Nutrition makes you look better & feel better</h4>
                                                        <p class="mb-0">Eat well to glow outside and feel great inside</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-1-9">
                                                    <div class="flex-shrink-0">
                                                        <div class="about-icon">
                                                            <img src="<?= $base_url; ?>assets/img/leafwhite.png" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h4 class="h5">Boosts immunity</h4>
                                                        <p class="mb-0">Strengthens your body’s natural defense.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-1-9">
                                                    <div class="flex-shrink-0">
                                                        <div class="about-icon">
                                                            <img src="<?= $base_url; ?>assets/img/leafwhite.png" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h4 class="h5">Helps in healthy fat loss</h4>
                                                        <p class="mb-0">Promotes natural and sustainable fat loss.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="about-icon">
                                                            <img src="<?= $base_url; ?>assets/img/leafwhite.png" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h4 class="h5">Strengthens bones & muscle</h4>
                                                        <p class="mb-0">Keeps your body active and resilient.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 order-2 order-xl-1 mt-1-9">
                                            <div>
                                                <div class="d-flex mb-1-9">
                                                    <div class="flex-shrink-0">
                                                        <div class="about-icon">
                                                            <img src="<?= $base_url; ?>assets/img/leafwhite.png" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h4 class="h5">Creates balance between mental & physical health</h4>
                                                        <p class="mb-0">Nurtures both mental peace and physical vitality</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-1-9">
                                                    <div class="flex-shrink-0">
                                                        <div class="about-icon">
                                                            <img src="<?= $base_url; ?>assets/img/leafwhite.png" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h4 class="h5">Helps in overall well being</h4>
                                                        <p class="mb-0">Promotes balance, energy, and vitality.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-1-9">
                                                    <div class="flex-shrink-0">
                                                        <div class="about-icon">
                                                            <img src="<?= $base_url; ?>assets/img/leafwhite.png" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h4 class="h5">Improves digestion.</h4>
                                                        <p class="mb-0">Helps your body process food efficiently.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="about-icon">
                                                            <img src="<?= $base_url; ?>assets/img/leafwhite.png" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h4 class="h5">Helps in weight management.</h4>
                                                        <p class="mb-0">Promotes smart, sustainable weight goals.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- end service left -->

                    <!-- service right -->
                    <div class="col-lg-4">
                        <div class="service-details-sidebar ps-lg-1-6">
                            <aside class="widget widget-address">
                            <img src="<?= $base_url; ?>assets/img/sir&mam.jpg" class="border-radius-10" alt="...">
                            </aside>
                        </div>
                    </div>
                    <!-- end service right -->

                    
                </div>
            </div>
        </section>


                <!-- EXTRA
        ================================================== -->
        <section class="bg-img cover-background extra-section dark-overlay" data-overlay-dark="9" data-background="img/bg/bg-06.png">
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-lg-6">
                        <span class="title-font text-primary display-25 display-md-23 d-block mb-1">Healty Food, For Breakfast.</span>
                        <h2 class="mb-sm-2-3 display-20 display-sm-15 display-xl-9 display-xxl-6 font-weight-600 text-white">The Decision Is Yours To Make You <span class="fw-bolder text-secondary">Healthy</span></h2> 
                        <a href="contact.html" class="butn bg-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT US
        ================================================== -->
        <section>
            <div class="container">
               <div class="row align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3">
                        <div class="pe-xxl-2-3">
                            <span class="title-font text-primary display-25 display-md-23 d-block mb-1">About Us</span>
                            <h2 class="display-25 display-sm-20 display-md-20 display-xl-9 font-weight-600 mb-3">A healthy diet is essential for good health and <span class="fw-bolder text-secondary"> Nutrition</span></h2>
                            <p class="mb-4 w-md-95 mb-xl-5">Eating wholesome meals withinside the proper quantities offers your frame strength to carry out day by day activities, lets you hold a wholesome frame weight, and might decrease your chance for positive sicknesses inclusive of diabetes and coronary heart disease.</p>
                            <div>
                                <h4 class="mb-5">Nutrition Special Features</h4>
                                <div class="row mt-n3">
                                <div class="col-sm-6">
                                    <div class="nutrition-list">
                                        <ul class="p-0 mb-0 list-unstyled">
                                            <li class="mb-3 font-weight-600 display-30 display-md-29 display-lg-30 display-xl-29 display-xxl-28"><i class="ti-angle-double-right me-2 text-secondary"></i>Physical exercise</li>
                                            <li class="mb-3 font-weight-600 display-30 display-md-29 display-lg-30 display-xl-29 display-xxl-28"><i class="ti-angle-double-right me-2 text-secondary"></i>Lifestyle In Pregnancy</li>
                                            <li class="mb-3 font-weight-600 display-30 display-md-29 display-lg-30 display-xl-29 display-xxl-28"><i class="ti-angle-double-right me-2 text-secondary"></i>Ways to Follow Diet</li> 
                                        </ul>
                                    </div>
                                </div> 
                                <div class="col-sm-6 ">
                                    <div class="nutrition-list">
                                        <ul class="p-0 list-unstyled">
                                            <li class="mb-3 font-weight-600 display-30 display-md-29 display-lg-30 display-xl-29 display-xxl-28"><i class="ti-angle-double-right me-2 text-secondary"></i>Supplement Necessities</li>
                                            <li class="mb-3 font-weight-600 display-30 display-md-29 display-lg-30 display-xl-29 display-xxl-28"><i class="ti-angle-double-right me-2 text-secondary"></i>Protein Advice</li>
                                            <li class="mb-3 font-weight-600 display-30 display-md-29 display-lg-30 display-xl-29 display-xxl-28"><i class="ti-angle-double-right me-2 text-secondary"></i>A Nutrition Lifestyle</li>
                                        </ul>
                                    </div>
                                </div>        
                            </div>
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-6 mb-lg-0 order-1 order-lg-2">
                        <div class="row mt-1-6">
                            <div class="col-6">
                                <div class="people-story overflow-hidden border-radius-10 mb-4">
                                    <img class="border-radius-10" src="<?= $base_url; ?>assets/img/about-01.jpg" alt="...">
                                </div>
                                <div class="people-story overflow-hidden border-radius-10">
                                    <img class="border-radius-10" src="<?= $base_url; ?>assets/img/about-02.jpg" alt="...">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="position-relative overflow-hidden">
                                   <div class="mb-5 mb-sm-10">
                                    <div class="people-story overflow-hidden border-radius-10">
                                        <img class="border-radius-10" src="<?= $base_url; ?>assets/img/about-03.jpg" alt="...">
                                    </div>
                                </div>
                                <div class="story-video video-column text-center">
                                    <a class="video video_btn bg-primary" href="https://www.youtube.com/watch?v=bREPaPWc2zI">
                                        <i class="fas fa-play text-center"></i>
                                    </a>
                                </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="p-3 bg-secondary position-absolute rounded-circle top-10 right-5 ani-left-right d-none d-md-block"></div>
            <div class="p-5 bg-primary position-absolute rounded-circle bottom-5 left-5 ani-left-right d-none d-lg-block"></div>           
        </section>
        
        <!-- SERVICE
        ================================================== -->
        <section class="bg-light">
            <div class="container">
                <div class="section-heading">
                    <span class="title-font text-primary display-25 display-md-23 d-block mb-1">What we offer</span>
                    <h2 class="display-25 display-sm-20 display-md-20 display-xl-9 font-weight-600 mb-3">Our Diet & Nutrition<span class="fw-bolder text-secondary"> Services</span></h2>
                    <p class="mb-0 w-md-80 w-lg-70 w-xl-50 mx-auto">We connect buyers and sellers of natural, organic, environmentally sound products. We find the best suppliers and makers of natural and organic products.</p>
                </div>
                <div class="service-carousel owl-carousel owl-theme gx-xxl-5 mt-n10">

                    <div class="mt-10">
                        <div class="card-style1" style="display: flex;">
                            <div class="before-img" style="width: 49%; margin-right: 1%; postion: relative;">
                                <img src="<?= $base_url; ?>assets/img/before.jpeg" alt="..." class="border-top-radius-10" style="height: 250px; width: 100%;">
                                <div class="before">Before</div>
                            </div>
                            <div class="after-img" style="width: 49%; margin-left: 1%; postion: relative;">
                                <img src="<?= $base_url; ?>assets/img/after.jpeg" alt="..." class="border-top-radius-10" style="height: 250px; width: 100%;">
                                <div class="after">After</div>
                            </div>
                            <div class="card-body p-0">
                                <div class="position-relative main-title overflow-hidden">
                                    <h3 class="title"><a href="balance-body-mind.html">Rashmika 55kg to 65kg</a></h3>
                                </div>
                                <p class="text-white opacity9 mb-0">Thanks to TasteYourBestLife, I gained 20 kg in a year with a healthy, sustainable plan. Truly life-changing!" – Amit</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <div class="card-style1">
                            <img src="<?= $base_url; ?>assets/img/service-02.jpg" alt="..." class="border-top-radius-10">
                            <div class="card-body p-0">
                                <div class="position-relative main-title overflow-hidden">
                                    <h3 class="title"><a href="personalized-nutrition.html">Personalized Nutrition</a></h3>
                                </div>
                                <p class="text-white opacity9 mb-0">Our nutrition team love the benefits of exercise and healthy food.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <div class="card-style1">
                            <img src="<?= $base_url; ?>assets/img/service-03.jpg" alt="..." class="border-top-radius-10">
                            <div class="card-body p-0">
                                <div class="position-relative main-title overflow-hidden">
                                    <h3 class="title"><a href="fitness-performance.html">Fitness Performance</a></h3>
                                </div>
                                <p class="text-white opacity9 mb-0">Our nutrition team love the benefits of exercise and healthy food.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <div class="card-style1">
                            <img src="<?= $base_url; ?>assets/img/service-04.jpg" alt="..." class="border-top-radius-10">
                            <div class="card-body p-0">
                                <div class="position-relative main-title overflow-hidden">
                                    <h3 class="title"><a href="healthy-daily-life.html">Healthy Daily Life</a></h3>
                                </div>
                                <p class="text-white opacity7 mb-0">Our nutrition team love the benefits of exercise and healthy food.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <div class="card-style1">
                            <img src="<?= $base_url; ?>assets/img/service-05.jpg" alt="..." class="border-top-radius-10">
                            <div class="card-body p-0">
                                <div class="position-relative main-title overflow-hidden">
                                    <h3 class="title"><a href="support-motivation.html">Support & Motivation</a></h3>
                                </div>
                                <p class="text-white opacity7 mb-0">Our nutrition team love the benefits of exercise and healthy food.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <div class="card-style1">
                            <img src="<?= $base_url; ?>assets/img/service-06.jpg" alt="..." class="border-top-radius-10">
                            <div class="card-body p-0">
                                <div class="position-relative main-title overflow-hidden">
                                    <h3 class="title"><a href="weight-loss-programs.html">Weight Loss Programs</a></h3>
                                </div>
                                <p class="text-white opacity7 mb-0">Our nutrition team love the benefits of exercise and healthy food.</p>
                            </div>
                        </div>
                    </div>
                                        
                </div>
            </div>
            <div class="bg-secondary p-2-2 rounded-circle position-absolute bottom-10 left-5 d-none d-lg-block"></div>
            <div class="bg-primary p-3 rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none d-lg-block"></div>
        </section>



        <!-- COUNTER
        ================================================== -->
        <section class="p-1-9 p-md-5 bg-secondary">
            <div class="container">
                <div class="row text-center position-relative z-index-1 mt-n1-6">
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-1-6 mb-sm-1-9 mb-lg-0">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="flex-shrink-0 display-14 display-sm-12 display-lg-10 text-white title-font fw-bold w-75px w-lg-auto">
                                <span class="countup">15</span>k
                            </div>
                            <div class="flex-grow-1 ms-3 ms-xl-4 text-start">
                                <h4 class="h6 text-white mb-0 text-uppercase lh-base">Happy <br>Customers</h4>
                            </div>
                            <img src="<?= $base_url; ?>assets/img/icon-02.png" class="position-absolute opacity3 left-n5 bottom-95 left-xxl-n10 bottom-lg-n50" alt="...">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-1-6 mb-sm-1-9 mb-lg-0">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="flex-shrink-0 display-14 display-sm-12 display-lg-10 text-white title-font fw-bold w-75px w-lg-auto">
                                <span class="countup">3</span>k
                            </div>
                            <div class="flex-grow-1 ms-3 ms-xl-4 text-start">
                                <h4 class="h6 text-white mb-0 text-uppercase lh-base">Nutrition <br>Programs</h4>
                            </div>
                            <img src="<?= $base_url; ?>assets/img/icon-04.png" class="position-absolute opacity3 left-70 bottom-95 left-lg-65 bottom-lg-n50" alt="...">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-1-6 mb-sm-0">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="flex-shrink-0 display-14 display-sm-12 display-lg-10 text-white title-font fw-bold w-75px w-lg-auto">
                                <span class="countup">78</span>+
                            </div>
                            <div class="flex-grow-1 ms-3 ms-xl-4 text-start">
                                <h4 class="h6 text-white mb-0 text-uppercase lh-base">Nutrition <br>Certificates</h4>
                            </div>
                            <img src="<?= $base_url; ?>assets/img/icon-03.png" class="position-absolute opacity3 left-n5 top-95 left-lg-20 top-lg-n60" alt="...">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-1-6">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="flex-shrink-0 display-14 display-sm-12 display-lg-10 text-white title-font fw-bold w-75px w-lg-auto">
                                <span class="countup">8</span>+
                            </div>
                            <div class="flex-grow-1 ms-3 ms-xl-4 text-start">
                                <h4 class="h6 text-white mb-0 text-uppercase lh-base">Workout <br>Sessions</h4>
                            </div>
                            <img src="<?= $base_url; ?>assets/img/icon-01.png" class="position-absolute opacity3 left-70 top-95 left-lg-95 top-lg-n60" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        
        <!-- TESTIMONIAL
        ================================================== -->
        <section class="testimonial-1 overflow-visible bg-dark bg-img cover-background dark-overlay" data-overlay-dark="4" data-background="img/bg/bg-08.png">
            <div class="container">
                <div class="content-box">
                <div class="section-heading text-center mb-5 mb-md-5">
                    <span class="title-font text-primary display-25 display-md-23 d-block mb-1">Testimonials</span>
                    <h2 class="display-25 display-sm-20 display-md-20 display-xl-9 font-weight-600 mb-3 text-white">What Our <span class="fw-bolder text-secondary">Clients </span>Say</h2>
                </div>
                <div class="px-5 text-center">
                <div class="testimonial-style1 owl-carousel owl-theme">
                    <div>
                        <div class="d-sm-flex align-items-center justify-content-center mb-4">                        
                            <img class="rounded-circle mb-3" src="img/avatar/avatar-01.jpg" alt="...">
                            <div class="text-center text-sm-start ps-sm-4">
                                <h4 class="text-white">Alice Camm</h4>
                                <span class="text-primary font-weight-600">Sports Nutritionist</span>
                            </div>      
                        </div>
                        <p class="text-white display-28 display-md-23">" Sport nutrition has completely surpassed our expectations. Since I invested in sport nutrition I made over 100,000 dollars profits. I was amazed at the quality of sport nutrition. "</p>
                        <div class="display-25 text-secondary">
                            <i class="ti-star"></i>
                            <i class="ti-star"></i>
                            <i class="ti-star"></i>
                            <i class="ti-star"></i>
                            <i class="ti-star"></i>
                        </div>
                    </div>
                    <div>
                        <div class="d-sm-flex align-items-center justify-content-center mb-4">
                                <img class="rounded-circle mb-3" src="img/avatar/avatar-02.jpg" alt="...">
                            <div class="text-center text-sm-start ps-sm-4">
                                <h4 class="text-white">Laure Ruel</h4>
                                <span class="text-primary font-weight-600">Dietician</span>
                            </div>     
                        </div>
                        <p class="text-white display-28 display-md-23">" I Strongly recommend nutrition to everyone interested in running a successful online business! Thank you for making it painless, pleasant and most of all hassle free! I was amazed at the quality of nutrition. "</p>
                            <div class="display-25 text-secondary">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                            </div>
                    </div>
                    <div>
                        <div class="d-sm-flex align-items-center justify-content-center mb-4">
                                <img class="rounded-circle mb-3" src="img/avatar/avatar-03.jpg" alt="...">
                            <div class="text-center text-sm-start ps-sm-4">
                                <h4 class="text-white">Kiara Boyd</h4>
                                <span class="text-primary font-weight-600">Nutritionist</span>
                            </div>    
                        </div>
                        <p class="text-white display-28 display-md-23">" Dietician saved my business. Needless to say we are extremely satisfied with the results. I will let my mum know about this, she could really make use of dietician! "</p>
                        <div class="display-25 text-secondary">
                            <i class="ti-star"></i>
                            <i class="ti-star"></i>
                            <i class="ti-star"></i>
                            <i class="ti-star"></i>
                            <i class="ti-star"></i>
                        </div>
                    </div>
                </div>
                </div> 
                </div>
            </div>
        </section> 

        <!-- BLOG
        ================================================== -->
        <section class="overflow-visible">
            <div class="container">
                <div class="section-heading">
                    <span class="title-font text-primary display-25 display-md-23 d-block mb-1">Our blogs</span>
                    <h2 class="display-25 display-sm-20 display-md-20 display-xl-9 font-weight-600 mb-3">Most Recent Article Of<span class="fw-bolder text-secondary"> Nutrition</span></h2>
                    <p class="mb-0 w-md-80 w-lg-70 w-xl-50 mx-auto">We connect buyers and sellers of natural, organic, environmentally sound products. We find the best suppliers and makers of natural and organic products.</p>
                </div>
                <div class="row mt-n2-6">

                    <div class="col-md-6 col-xl-4 mt-2-6">
                        <article class="card card-style3">
                            <div class="blogs-image">
                                <img src="<?= $base_url; ?>assets/img/blog-01.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <ul class="list-style">
                                    <li><a href="#!">April 30</a></li>
                                    <li><a href="#!">12 Comment</a></li>
                                </ul>
                                <h4 class="h5 text-capitalize mb-0"><a href="blog-details.html">The Exercise Improve Your health to do Daily Activities.</a></h4>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-2-6">
                        <article class="card card-style3">
                            <div class="blogs-image">
                                <img src="<?= $base_url; ?>assets/img/blog-02.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <ul class="list-style">
                                    <li><a href="#!">Mar 30</a></li>
                                    <li><a href="#!">04 Comment</a></li>
                                </ul>
                                <h4 class="h5 text-capitalize mb-0"><a href="blog-details.html">The Water Regulate body temperature through sweating.</a></h4>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-xl-4 mt-2-6">
                        <article class="card card-style3">
                            <div class="blogs-image">
                                <img src="<?= $base_url; ?>assets/img/blog-03.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <ul class="list-style">
                                    <li><a href="#!">Feb 30</a></li>
                                    <li><a href="#!">04 Comment</a></li>
                                </ul>
                                <h4 class="h5 text-capitalize mb-0"><a href="blog-details.html">By slow eating , you can know the portion size actually needs.</a></h4>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section> 

    

        <!-- FOOTER
        ================================================== -->
        <footer>
            <div class="container">
                <div class="row mt-n2-6">
                    <div class="col-md-6 col-lg-6 col-xl-4 mt-2-6">
                        <div class="pe-md-5">
                            <div class="footer-logo mb-1-9">
                                <a href="index.html"><img src="<?= $base_url; ?>assets/img/logo.png" alt="..."></a>
                            </div>
                            <p class="text-white mb-1-6 mb-lg-1-9 opacity9">We are a team of trained Wellness coaches dedicated to helping people achieve their Wellness goals.</p>
                            <ul class="footer-social-style1">
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100094406018605"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/tybl1212"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCNqlcK5CfS5I8UdPQt3lz5w"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/tasteyourbestlife/"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/tasteyour-bestlife-2422ab282/"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2 mt-2-6">
                        <div class="ps-xl-2 ps-xxl-4">
                            <h3 class="title-font text-secondary mb-4 h4">Quick Links</h3>
                            <ul class="footer-list-style1 quick-list">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="our-team.html">Our Team</a></li>
                                <li><a href="our-services.html">Services</a></li>
                                <li><a href="blog-list.html">Blog</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 mt-2-6">
                        <div class="ps-xl-4 ps-xxl-5">
                            <h3 class="title-font text-secondary mb-4 h4">Opening Hours</h3>
                            <ul class="footer-hour-list quick-hours">
                                <li>
                                    <i class="ti-time text-white"></i>
                                    <div>
                                        <h4 class="h6 text-white">Monday - Friday</h4>
                                        <p class="mb-0 text-white display-30">8:00 AM - 5:00 PM</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="ti-time text-white"></i>
                                    <div>
                                        <h4 class="h6 text-white">Saturday</h4>
                                        <p class="mb-0 text-white display-30">9:00 AM - 4:00 PM</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="ti-time text-white"></i>
                                    <div>
                                        <h4 class="h6 text-white">Sunday</h4>
                                        <p class="mb-0 text-white display-30">Closed</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 mt-2-6">   
                        <div>
                            <h3 class="title-font text-secondary mb-4 h4">Get In Touch</h3>
                            <p class="text-white mb-1-6 mb-lg-1-9 opacity9">Lorem ipsum dolor sit amet,adipiscing elit. Sed lorem quis venenatis euismod.</p>
                            <form class="quform newsletter-form w-90 w-sm-100" action="quform/newsletter-two.php" method="post" enctype="multipart/form-data" onclick="">
                                <div class="quform-elements position-relative">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="quform-element mb-0">
                                                <div class="quform-input">
                                                    <input class="form-control news-box" id="email_address" type="text" name="email_address" placeholder="Enter Your Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner inner-button">
                                                <button class="newsletter-btn bg-primary" type="submit"><span>Subscribe</span></button>
                                            </div>
                                            <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bar">
                <div class="container">
                    <div class="text-center">
                        <p class="d-inline-block text-white mb-0 display-30 display-lg-29">&copy; <span class="current-year"></span> TYBL Powered By <a href="#!" class="text-secondary white-hover">Order It Solutions</a></p>
                    </div>
                </div>
            </div>
        </footer>

    </div>


    <!-- start scroll to top -->
    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->

    <script src="<?= $base_url; ?>assets/js/jquery.min.js"></script>
    <script src="<?= $base_url; ?>assets/js/popper.min.js"></script>
    <script src="<?= $base_url; ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= $base_url; ?>assets/js/core.min.js"></script>
    <script src="<?= $base_url; ?>assets/js/search.js"></script>
    <script src="<?= $base_url; ?>assets/js/main.js"></script>
    <script src="<?= $base_url; ?>assets/js/plugins.js"></script>
    <script src="<?= $base_url; ?>assets/js/scripts.js"></script>
</body>
</html>