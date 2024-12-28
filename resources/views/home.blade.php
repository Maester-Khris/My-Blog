<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Joel Gouend | My Portfolio</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="InBio is a one-page responsive personal portfolio layout which can be utilized to demonstrate your inventiveness. It’s an ideal decision for a developer, engineer, specialist, designer, content writer, Instructor, Photographer, Freelancer, Politician, Software engineer, Teacher or some other expert who needs to speak to his abilities and inventive work. InBio is well documented, very easy to use, Easily Customized, loads faster and provides better performance.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/cropped_image.png">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/css/vendor/slick.css">
    <link rel="stylesheet" href="/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="/css/vendor/aos.css">
    <link rel="stylesheet" href="/css/plugins/feature.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Style css -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/custom-styles.css">
    <style>
        .sticky .header-wrapper .logo img{
            max-width: 100%!important;
        }
        .progress{
            position: relative!important;
        }
        .progress-bar{
            position: unset!important;
        }
        span.percent-label{
           right: 7px!important;
           z-index: 10!important;
           font-weight: bolder!important;
           color: #2796aa!important;
        }
        .progress-wrapper h4.maintitle{
            margin-bottom: 10px!important;
        }
        .progress-charts{
            margin-top: 12px!important;
        }
        span.percent-label{
            top:-14px!important;
        }
        .progress-charts .heading-h6{
            margin-bottom: 5px!important;
        }
        .modal i.bi.bi-github{
            margin-left: 10px;
        }
        .experience-list{
            width: 50%;
        }
        .carousel-control-next,
        .carousel-control-prev /*, .carousel-indicators */ {
            filter: invert(100%);
        }
        .live-badge{
            position: absolute;
            top: 6px;
            right: 6px;
            font-size: 13px;
            padding: 5px 8px;
            border-radius: 11px;
            background-color: #F05340;
        }
        a.live-preview{
            color:#F05340!important;
        }
        a.live-preview:hover{
            background-color: #F05340!important;
            color:white!important;
        }
        @media (max-width: 1024px) {
            .experience-container{
                flex-wrap: wrap;
            }
            .experience-list {
                width: 100%;
                flex-grow: 1; 
                margin-left: 0px!important;
            }
            .skills-container{
                width: 90%!important;
                height: auto!important;
                border-radius: 10px;
            }
            .skills-view{
                position: relative;
                width: 100%!important;
                clip-path: none;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            }
            .skills-view-icon{
                transform: translateX(0px)!important;
                padding: 10px;
                width: 100%!important;
                height: 100%!important;
                right: 0px!important;
            }
            .skiilset-container{
                position: relative;
            }
            .experience-left{
                margin-bottom: 10px!important;
            }
            .experience-left.exp_back{
                height: 510px!important;
            }
            .experience-left.exp_front, .experience-left.exp_cloud{
                height: 400px!important;
            }
           
            .experience-left h4{
                display: none;
            }
            .experience-right{
                position: absolute;
                /* float: left; */
                bottom: 0px!important;
                right: 0px!important;
                left: 0px!important;
                height: 200px!important;
                overflow: hidden;
            }
            .skills-list{
                width: 100%!important;
            }
        }
    </style>
</head>

<body class="template-color-1 spybody white-version" data-spy="scroll" data-target=".navbar-example2" data-offset="150">

    <!-- Start Header -->
    <header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
        <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            <!-- Start Header Left -->
            <div class="col-lg-2 col-6">
                <div class="header-left">
                    <div class="logo">
                        <a href="index.html">
                            <img src="/images/cropped_image.png" alt="logo" style="width:48px!important;height:48px!important;">
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Header Left -->
            <!-- Start Header Center -->
            <div class="col-lg-10 col-6">
                <div class="header-center">
                    <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block">
                        <ul class="primary-menu nav nav-pills">
                            <li class="nav-item"><a class="nav-link smoth-animation active" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                            <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link" href="/blog">My Blog</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
                    <a class="logo" href="index.html">
                        <img src="/images/logo/logos-circle.png" alt="Personal Portfolio">
                    </a>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
                <p class="discription">Inbio is a personal portfolio template. You can customize all.</p>
            </div>
            <div class="content">
                <ul class="primary-menu nav nav-pills"> 
                    <li class="nav-item"><a class="nav-link smoth-animation active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Portfolios</a></li>
                    
                </ul>
                <!-- social sharea area -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">find with me</span>
                    <ul class="social-share d-flex liststyle">
                        <li class="facebook"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg></a>
                        </li>
                        <li class="instagram"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg></a>
                        </li>
                        <li class="linkedin"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg></a>
                        </li>
                    </ul>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    

    <main class="main-page-wrapper">

        <!-- Hero section -->
        <div id="home" class="rn-slide-area">
            <div class="slide slider-style-3">
                <div class="container">
                    <div class="row slider-wrapper">
                        <div class="order-2 order-xl-1 col-lg-12 col-xl-5 mt_lg--50 mt_md--50 mt_sm--50">
                            <div class="slider-info">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-12">
                                        <div class="user-info-top">
                                            <div class="user-info-header">
                                                <div class="user">
                                                    <i data-feather="user"></i>
                                                </div>
                                                <h2 class="title">
                                                    Hi, I’m <span>Joel</span>
                                                </h2>
                                                <p class="disc">
                                                    I am a Full stack developer, focusing now on Cloud & Infrastuctre management. My main stacks are MEAN, MERN, LAPP and Spring Ecosystem.
                                                </p>
                                            </div>
                                            <div class="user-info-footer">
                                                <div class="info">
                                                    <i data-feather="check-square"></i>
                                                    <span>Full stack developer <small class="my-subtitle">Proficient</small></span>
                                                </div>
                                                <div class="info">
                                                    <i data-feather="check-square"></i>
                                                    <span>DevOps & Cloud <small class="my-subtitle">Beginner</small></span>
                                                </div>
                                                <div class="info">
                                                    <i data-feather="mail"></i>
                                                    <span>jombeh121@gmail.com</span>
                                                </div>
                                                <div class="info">
                                                    <i data-feather="github"></i>
                                                    <span class="position-relative d-inline-block" style="width:85px;">Mr. Khris <a class="position-absolute" target="_blank" href="https://github.com/Maester-Khris" style="top:-5px;right:1px;color:#2796aa;">
                                                        <i class="bi bi-box-arrow-up-right" style="font-size: 10px;"></i>
                                                    </a> </span>
                                                </div>
                                                <div class="info">
                                                    <i data-feather="map-pin"></i>
                                                    <span>Toronto, Ontario</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-12">
                                        <div class="user-info-bottom">
                                            <span>Let's get in touch: </span>
                                            <div class="button-wrapper d-flex">
                                                <a class="rn-btn mr--30" href="/assets/files/joel_gouend_resume.pdf" download=""><span>Download CV</span></a>
                                                <a class="rn-btn" href="mailto:jombeh121@gmail.com"><span>CONTACT ME</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-1 order-xl-2 col-lg-12 col-xl-7">
                            <div class="background-image-area">
                                <div class="thumbnail-image">
                                    <img src="/images/photo_portfolio.jpg" alt="Personal Portfolio" style="height: 780px;">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Start Resume Area -->
        <div class="rn-resume-area rn-section-gap section-separator" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                            <span class="subtitle">4+ Years of Experience</span>
                            <h2 class="title">My Resume</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="col-lg-12">
                        <ul data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="professional-tab" data-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false">professional
                                    Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">experience</a>
                            </li>
                        </ul>

                        <!-- Start Tab Content Wrapper  -->
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" data-aos-once="true" class="rn-nav-content tab-content" id="myTabContents">
                            <div class="tab-pane show active fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2015 - 2023</span>
                                                <h4 class="maintitle">Education</h4>
                                                <div class="d-flex flex-row experience-container">
                                                    <div class="experience-list">
                                                        <div class="resume-single-list">
                                                            <div class="inner">
                                                                <div class="heading">
                                                                    <div class="title">
                                                                        <h4>Master Degree in Computer science</h4>
                                                                        <span>University of Yaoundé I (2020 - 2023)</span>
                                                                    </div>
                                                                </div>
                                                                <p class="description">
                                                                    I delve into Advanced software design principles, fundamental problem solving method.
                                                                    My coursework also included Agile Development, Data Science, and Introduction to Research
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="experience-list" style="margin-left: 15px;">
                                                        <div class="resume-single-list">
                                                            <div class="inner">
                                                                <div class="heading">
                                                                    <div class="title">
                                                                        <h4>Bachelor in Computer science</h4>
                                                                        <span>University of Yaounde I (2015 - 2020)</span>
                                                                    </div>
                                                                </div>
                                                                <p class="description">
                                                                    I was focused on Programming and Software Modeling, I developed proficiency in various programming languages. 
                                                                    I explored Algorithmic & Data Structures, Networking, and relevant topics.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="professional" role="tabpanel" aria-labelledby="professional-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row row--40">
                                        <div class="col-lg-12">
                                            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                                                <h2 class="title">My Skill Set </h2>
                                                <span class="subtitle">Ranked by proficiency level</span>
                                            </div>
                                        </div>
                                        <div class="col-12 mt_experience">
                                            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="experience-style-two skiilset-container">
                                                <div class="experience-left exp_back">
                                                    <div class="col-md-9">
                                                        <div class="progress-wrapper">
                                                            <div class="content">
                                                                <span class="subtitle">Skills</span>
                                                                <h4 class="maintitle">Backend & System Design</h4>
                                                                <div class="progress-charts">
                                                                    <h6 class="heading heading-h6">MERN, MEAN Stack</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">100%</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="progress-charts">
                                                                    <h6 class="heading heading-h6">Java & Spring Ecosystem: Web, Cloud, Security, Data</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 95%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">95%</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="progress-charts">
                                                                    <h6 class="heading heading-h6">LAPP: Linux Apache Php PostgreSQL</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 95%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">95%</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="progress-charts">
                                                                    <h6 class="heading heading-h6">Python: Django & Flask</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 95%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">95%</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="progress-charts">
                                                                    <h6 class="heading heading-h6">Architectural Design pattern, Methodology & Agile Framework</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 60%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">60%</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="experience-right">
                                                    <div class="skills-view" >
                                                        <div class="skills-view-background" style="background: center 15% url('/images/back.jpg');"></div>
                                                        <div class="skills-view-icon">
                                                            <h4>Backend & System Design</h4>
                                                            <div class="skills-list d-flex flex-row flex-wrap justify-content-end">
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/nodejs-icon-logo-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/java-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/python-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/php2-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/spring-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/django-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/flask-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/laravel-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/brand-scrum-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/distributed-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="experience-style-two skiilset-container">
                                                <div class="experience-left exp_front">
                                                    <div class="col-md-9">
                                                        <div class="progress-wrapper">
                                                            <div class="content">
                                                                <span class="subtitle">Skills</span>
                                                                <h4 class="maintitle">Frontend, Mobile & UI/UX</h4>
                                                                <div class="progress-charts">
                                                                    <h6 class="heading heading-h6">Framework, tools: Angular, React, Boostrap, Tailwind, Jquery</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">70%</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="progress-charts">
                                                                    <h6 class="heading heading-h6">Mobile: Ionic Framework, Capacitor, Flutter</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 95%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">70%</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="progress-charts">
                                                                    <h6 class="heading heading-h6">UI/UX Design: Figma</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 60%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">60%</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="experience-right">
                                                    <div class="skills-view">
                                                        <div class="skills-view-background" style="background: center 20% url('/images/front3.jpg');"></div>
                                                        <div class="skills-view-icon">
                                                            <h4>Frontend & UI</h4>
                                                            <div class="skills-list d-flex flex-row flex-wrap justify-content-end">
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/angular-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/react-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/bootstrap-4-logo-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/tailwind-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/ionic-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/flutter-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/figma-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="experience-style-two skiilset-container">
                                                <div class="experience-left exp_cloud">
                                                    <div class="col-md-9">
                                                        <div class="progress-wrapper">
                                                            <div class="content">
                                                                <span class="subtitle">Skills</span>
                                                                <h4 class="maintitle">DevOps, Cloud & Infrastructure</h4>
                                                                <div class="progress-charts">
                                                                    <h6 class="heading heading-h6">DevOps: Git, Github, Github action, Gitlab, Gitlab CI, Jenkins</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 75%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">75%</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="progress-charts">
                                                                    <h6 class="heading heading-h6">Cloud AWS</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 50%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">50%</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="progress-charts">
                                                                    <h6 class="heading heading-h6">Infrastructure: Docker, Kubernetes & Terraform</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 30%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">30%</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="experience-right">
                                                    <div class="skills-view">
                                                        <div class="skills-view-background"></div>
                                                        <div class="skills-view-icon">
                                                            <h4>Devops, Cloud & Infrastructure</h4>
                                                            <div class="skills-list d-flex flex-row flex-wrap justify-content-end">
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/git-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/github-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/gitlab-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/jenkins-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/docker-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/kubernetes-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/aws-logo-logo-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                                <div class="icon-skill"><img class="icon-logo" src="/toolslogo/terraform-svgrepo-com.svg" alt="My Happy SVG"/></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2021 - Present</span>
                                                <h4 class="maintitle">Professional Experience</h4>
                                                <div class="d-flex flex-row experience-container">
                                                    <div class="experience-list">
                                                        <div class="resume-single-list">
                                                            <div class="inner">
                                                                <div class="heading">
                                                                    <div class="title">
                                                                        <h4>Full Stack engineer</h4>
                                                                        <span>Wiconet - part time (since Jan 2024)</span>
                                                                    </div>
                                                                </div>
                                                                <p class="description">
                                                                    Wiconet is a startup created inside a laboratory of applied science that focused on Machine learning, Network and cutting-edge technique to solve real society problems.
                                                                    My day to day work focused on <strong>Python - React - Nodejs</strong>. One my accomplishement is the building of a machine learning wen service for advanced text processing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="experience-list" style="margin-left: 15px;">
                                                        <div class="resume-single-list">
                                                            <div class="inner">
                                                                <div class="heading">
                                                                    <div class="title">
                                                                        <h4>Full stack Engineer</h4>
                                                                        <span>Firesoftware - Full time (2021 - 2023)</span>
                                                                    </div>
                                                                </div>
                                                                <p class="description">
                                                                    Firesoftware is an established company with more than 12 years of existance and solution providing. I integrated the team as Software engineer Intern, then advance to the software development project manager.
                                                                    My day to day task inclued planning and executing meeting with client, executing the whole process of software lifecyle. My techincal stack here was principally <strong>Java - Php - Angular</strong>.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('portfolio/sections/projects')
       
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
    </main>

    <div id="footer" class="rn-footer-area footer-style-2 rn-section-gapTop">
        <div class="copyright text-center ptb--40 section-separator">
            <p class="description">NK Portfolio © 2024, customization made on top of  
                <em><a target="_blank" href="https://github.com/ahmedsharifkhan/InBio-One-Page-Personal-Portfolio-Template" style="color: #2796aa;">In-Bio themes</a></em> 
            </p>
        </div>
    </div>
   

    <!-- JS ============================================ -->
    <script src="/js/vendor/jquery.js"></script>
    <script src="/js/vendor/modernizer.min.js"></script>
    <script src="/js/vendor/feather.min.js"></script>
    <script src="/js/vendor/slick.min.js"></script>
    <script src="/js/vendor/bootstrap.js"></script>
    <script src="/js/vendor/text-type.js"></script>
    <script src="/js/vendor/wow.js"></script>
    <script src="/js/vendor/aos.js"></script>
    <script src="/js/vendor/particles.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>