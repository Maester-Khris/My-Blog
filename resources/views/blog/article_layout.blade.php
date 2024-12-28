<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$title}}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description"
        content="InBio is a one-page responsive personal portfolio layout which can be utilized to demonstrate your inventiveness. It’s an ideal decision for a developer, engineer, specialist, designer, content writer, Instructor, Photographer, Freelancer, Politician, Software engineer, Teacher or some other expert who needs to speak to his abilities and inventive work. InBio is well documented, very easy to use, Easily Customized, loads faster and provides better performance.">
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
        .sticky .header-wrapper .logo img {
            max-width: 100% !important;
        }

        .progress {
            position: relative !important;
        }

        .progress-bar {
            position: unset !important;
        }

        span.percent-label {
            right: 7px !important;
            z-index: 10 !important;
            font-weight: bolder !important;
            color: #2796aa !important;
        }

        .progress-wrapper h4.maintitle {
            margin-bottom: 10px !important;
        }

        .progress-charts {
            margin-top: 12px !important;
        }

        span.percent-label {
            top: -14px !important;
        }

        .progress-charts .heading-h6 {
            margin-bottom: 5px !important;
        }

        .modal i.bi.bi-github {
            margin-left: 10px;
        }

        .experience-list {
            width: 50%;
        }

        @media (max-width: 1024px) {
            .experience-container {
                flex-wrap: wrap;
            }

            .experience-list {
                width: 100%;
                flex-grow: 1;
                margin-left: 0px !important;
            }

            .skills-container {
                width: 90% !important;
                height: auto !important;
                border-radius: 10px;
            }

            .skills-view {
                position: relative;
                width: 100% !important;
                clip-path: none;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            }

            .skills-view-icon {
                transform: translateX(0px) !important;
                padding: 10px;
                width: 100% !important;
                height: 100% !important;
                right: 0px !important;
            }

            .skiilset-container {
                position: relative;
            }

            .experience-left {
                margin-bottom: 10px !important;
            }

            .experience-left.exp_back {
                height: 510px !important;
            }

            .experience-left.exp_front,
            .experience-left.exp_cloud {
                height: 400px !important;
            }

            .experience-left h4 {
                display: none;
            }

            .experience-right {
                position: absolute;
                /* float: left; */
                bottom: 0px !important;
                right: 0px !important;
                left: 0px !important;
                height: 200px !important;
                overflow: hidden;
            }

            .skills-list {
                width: 100% !important;
            }
        }

        /* ==================================================== */
        .mb-10{
            margin-bottom: 10px!important;
        }
        .highlight-pr-color{
            color:#0047AB!important;
        }
        .post-overview{
            font-size: 15px!important;
        }
        h3{
            font-size: 20px;
        }
        h4{
            font-size: 18px;
            margin-bottom: 10px;
        }
        p,li{
            font-size: 15px!important;
        }
        h3,h4{
            color:#0047AB!important;
        }
        p.inner-partial{
            margin-bottom: 7px!important;
        }
        .spec-formula{
            margin: 7px 0px;
        }
        em{
            text-decoration: underline
        }
        .img-illustration{
            margin: 15px 0;
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
                            <img src="/images/cropped_image.png" alt="logo"
                                style="width:48px!important;height:48px!important;">
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
                            <li class="nav-item"><a class="nav-link active" href="/blog">My Blog</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/">Portfolio</a></li>
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
                        <li class="facebook"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg></a>
                        </li>
                        <li class="instagram"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5">
                                    </rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg></a>
                        </li>
                        <li class="linkedin"><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-linkedin">
                                    <path
                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                    </path>
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
        <div class="container w-100" style="margin-top:200px;">
            <div class="row">
                {{-- central pane --}}
                <div class="col-lg-8">
                   @yield('content')
                </div>
                

                {{-- sidebar  --}}
                <div class="col-lg-3 offset-lg-1" style="">
                    <div style="margin-top:0px; margin-bottom:42px">
                        <h3 style="font-size:20px; color:#0047AB;margin-bottom:8px;">Searchbar</h3>
                        <form>
                            <div class="form-group">
                                <input style="border-color:#0047AB;color:grey;font-size:12px;"
                                    placeholder="Enter the title of an article" type="email" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </form>
                    </div>
                    <div class="w-100" id="quick-stories-section">
                        <h3 style="font-size:20px; color:#0047AB">Quick Stories</h3>
                        {{-- Where there is content --}}
                        {{-- @for ($i = 0; $i < 2; $i++)
                            <div class="card" style="margin-bottom:12px;">
                                <img src="https://fakeimg.pl/600x200" class="card-img-top" alt="content image">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size:14px;color:#0047AB;">Card title</h5>
                                    <p class="card-text" style="margin-bottom:10px;font-size:13px;">Some quick example
                                        text to build on the card title.</p>
                                    <a href="#" class="btn btn-primary"
                                        style="padding:8px 15px;font-size:12px;">Read more <i
                                            class="bi bi-caret-right-fill"></i></a>
                                </div>
                            </div>
                        @endfor --}}
                        {{-- Where there is no content --}}
                        <div class="card" style="margin-bottom:12px;">
                            <img src="/images/no_data.png" class="card-img-top" alt="content image" style="">
                            <div class="card-body d-flex justify-content-center align-items-center" style="background-color: azure;">
                                <p style="margin-bottom:0px;font-size:13px;">There is no content at this moment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
    </main>

    <div id="footer" class="rn-footer-area footer-style-2 rn-section-gapTop">
        <div class="copyright text-center ptb--40 section-separator">
            <p class="description">NK Portfolio © 2024, customization made on top of
                <em><a target="_blank"
                        href="https://github.com/ahmedsharifkhan/InBio-One-Page-Personal-Portfolio-Template"
                        style="color: #2796aa;">In-Bio themes</a></em>
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
    <script>
        MathJax = {
          tex: {
            inlineMath: [['$', '$'], ]
          }
        };
    </script>
    <script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</body>
</html>