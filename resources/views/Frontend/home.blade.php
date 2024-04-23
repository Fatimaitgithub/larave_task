<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital Management System</title>

    <link rel="stylesheet" href="{{ asset('/user-assets/css/custom.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('/user-assets/plugin/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/user-assets/plugin/bootstrap/css/bootstrap-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/user-assets/fonts/poppins/poppins.css') }}">
    <link rel="stylesheet" href="{{ asset('/user-assets/plugin/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user-assets/plugin/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user-assets/plugin/process-bar/tox-progress.css') }}">
    <link rel="stylesheet" href="{{ asset('/user-assets/plugin/owl-carouse/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user-assets/plugin/owl-carouse/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user-assets/plugin/animsition/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/user-assets/plugin/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user-assets/plugin/mediaelement/mediaelementplayer.css') }}">
    <link rel="stylesheet" href="{{ asset('/user-assets/plugin/datetimepicker/bootstrap-datepicker3.css') }}">
    <link rel="stylesheet" href="{{ asset('/user-assets/plugin/datetimepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user-assets/plugin/lightgallery/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ asset('/user-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/user-assets/css/main.css') }}">
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-ZbQRib3IfdXJA5vnUn3sydfpsUFK13u8xAm3Pb4EE8eNSk3sLQ6Me0Hn0F9IvtgR" crossorigin="anonymous"-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" id="elementor-frontend-css"
        href="{{ asset('/user-assets/plugins/elementor/assets/css/frontend-lite-rtl.mina1c3.css?ver=3.14.1') }}"
        media="all">
    <link rel="stylesheet" id="elementor-post-261-css"
        href="{{ asset('/user-assets/uploads/elementor/css/post-2616af0.css?ver=1691067830') }}" media="all">
    <link rel="stylesheet" id="elementor-lazyload-css"
        href="{{ asset('/user-assets/plugins/elementor/assets/css/modules/lazyload/frontend.mina1c3.css?ver=3.14.1') }}"
        media="all">
    <link rel="stylesheet" id="jet-elements-css"
        href="{{ asset('/user-assets/plugins/jet-elements/assets/css/jet-elements-rtla117.css?ver=2.6.11') }}"
        media="all">
    <link rel="stylesheet" id="jet-elements-skin-css"
        href="{{ asset('/user-assets/plugins/jet-elements/assets/css/jet-elements-skin-rtla117.css?ver=2.6.11') }}"
        media="all">
    <link rel="stylesheet" id="swiper-css"
        href="{{ asset('/user-assets/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5') }}"
        media="all">
    <link rel="stylesheet" id="elementor-pro-css"
        href="{{ asset('/user-assets/plugins/elementor-pro/assets/css/frontend-lite-rtl.mina1c3.css?ver=3.14.1') }}"
        media="all">
    <link rel="stylesheet" id="jet-tabs-frontend-css"
        href="{{ asset('/user-assets/plugins/jet-tabs/assets/css/jet-tabs-frontendddb2.css?ver=2.1.22') }}"
        media="all">
    <link rel="stylesheet" id="elementor-global-css"
        href="{{ asset('/user-assets/uploads/elementor/css/globalab64.css?ver=1690215525') }}" media="all">
    <link rel="stylesheet" id="elementor-post-7-css"
        href="{{ asset('/user-assets/uploads/elementor/css/post-72f45.css?ver=1697460320') }}" media="all">
    <link rel="stylesheet" id="elementor-post-18-css"
        href="{{ asset('/user-assets/uploads/elementor/css/post-18a6ee.css?ver=1690215526') }}" media="all">
    <link rel="stylesheet" id="elementor-post-22-css"
        href="{{ asset('/user-assets/uploads/elementor/css/post-22a6ee.css?ver=1690215526') }}" media="all">
    <link rel="stylesheet" id="elementor-post-2212-css"
        href="{{ asset('/user-assets/uploads/elementor/css/post-2212ff72.css?ver=1701348901') }}" media="all">
    <link rel="stylesheet" id="elementor-post-25-css"
        href="{{ asset('/user-assets/uploads/elementor/css/post-25a6ee.css?ver=1690215526') }}" media="all">
    <link rel="stylesheet" id="pojo-a11y-css"
        href="{{ asset('/user-assets/plugins/pojo-accessibility/assets/css/style.min8a54.css?ver=1.0.0') }}"
        media="all">
    <link rel="stylesheet" id="jquery-chosen-css"
        href="{{ asset('/user-assets/plugins/jet-search/assets/lib/chosen/chosen.min2e49.css?ver=1.8.7') }}"
        media="all">
    <link rel="stylesheet" id="jet-search-css"
        href="{{ asset('/user-assets/plugins/jet-search/assets/css/jet-search324d.css?ver=3.1.0') }}" media="all">
    <link rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Hebrew%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;subset=hebrew&amp;ver=6.2.2"
        media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <script src="{{ asset('/user-assets/web_theme/js/jquery/jquery.min5aed.js?ver=3.6.4') }}" id="jquery-core-js"></script>
    <!--script src="web_theme/js/jquery/jquery-migrate.min6b00.js?ver=3.4.0" id="jquery-migrate-js"></script-->
    <script src="{{ asset('/user-assets/web_theme/js/imagesloaded.min3781.js?ver=6.2.2') }}" id="imagesLoaded-js"></script>

</head>
<style>
    .header-area .main-nav .nav li a:hover {
        color: #223950 !important;
    }

    .sticky #menu .nav li a {
        color: #223950 !important;
    }

    @media not all and (min-resolution:.001dpcm) {
        @supports (-webkit-appearance: none) {
            .circle-container svg {
                box-sizing: unset !important;
                padding: unset !important;
                margin: 0px 64px !important;
                margin-top: unset !important;
            }
        }
    }

    @-moz-document url-prefix() {
        .circle-container svg {
            box-sizing: unset !important;
            padding: unset !important;
        }
    }

    #menu ul {
        margin: 0;
        padding: 0;
    }

    #menu .main-menu {
        display: none;
    }

    #tm:checked+.main-menu {
        display: block;
    }

    #menu input[type="checkbox"],
    #menu ul span.drop-icon {
        display: none;
    }

    #menu li,
    #toggle-menu,
    #menu .sub-menu {
        border-style: solid;
        border-color: rgba(0, 0, 0, .05);
    }

    #menu li,
    #toggle-menu {
        border-width: 0 0 1px;
    }

    #menu .sub-menu {
        background-color: #444;
        border-width: 1px 1px 0;
        margin: 0 1em;
    }

    #menu .sub-menu li:last-child {
        border-width: 0;
    }

    #menu li,
    #toggle-menu,
    #menu a {
        position: relative;
        display: block;
        color: white;
        text-shadow: 1px 1px 0 rgba(0, 0, 0, .125);
    }

    #menu,
    #toggle-menu {
        /*  background-color: #09c; */
    }

    #toggle-menu,
    #menu a {
        /* padding: 1em 1.5em; */
    }

    #menu a {
        transition: all .125s ease-in-out;
        -webkit-transition: all .125s ease-in-out;
    }

    #menu a:hover {
        background-color: white;
        color: #09c;
    }

    #menu .sub-menu {
        display: none;
    }

    #menu input[type="checkbox"]:checked+.sub-menu {
        display: block;
    }

    #menu .sub-menu a:hover {
        color: #444;
    }

    #toggle-menu .drop-icon,
    #menu li label.drop-icon {
        position: absolute;
        right: 1.5em;
        top: 1.25em;
    }

    #menu label.drop-icon,
    #toggle-menu span.drop-icon {
        border-radius: 50%;
        width: 1em;
        height: 1em;
        text-align: center;
        background-color: rgba(0, 0, 0, .125);
        text-shadow: 0 0 0 transparent;
        color: rgba(255, 255, 255, .75);
    }

    #menu .drop-icon {
        line-height: 1;
    }

    @media only screen and (max-width: 64em) and (min-width: 52.01em) {
        #menu li {
            width: 33.333%;
        }

        #menu .sub-menu li {
            width: auto;
        }
    }

    @media only screen and (min-width: 52em) {
        #menu .main-menu {
            display: block;
        }

        #toggle-menu,
        #menu label.drop-icon {
            display: none;
        }

        #menu ul span.drop-icon {
            display: inline-block;
        }

        #menu li {
            float: left;
            border-width: 0 1px 0 0;
        }

        #menu .sub-menu li {
            float: none;
        }

        #menu .sub-menu {
            border-width: 0;
            margin: 0;
            position: absolute;
            top: 100%;
            left: 0;
            width: 12em;
            z-index: 3000;
        }

        #menu .sub-menu,
        #menu input[type="checkbox"]:checked+.sub-menu {
            display: none;
        }

        #menu .sub-menu li {
            border-width: 0 0 1px;
        }

        #menu .sub-menu .sub-menu {
            top: 0;
            left: 0%;
            right: 100%;
        }

        #menu li:hover>input[type="checkbox"]+.sub-menu {
            display: block;
        }
    }
</style>


</head>

<body
    class="rtl home page-template-default page page-id-7 wp-custom-logo e-lazyload elementor-default elementor-kit-261 elementor-page elementor-page-7 e--ua-blink e--ua-chrome e--ua-webkit"
    data-elementor-device-mode="desktop">
    <!--load page-->
    {{-- <div class="load-page">
        <div class="sk-wave">
            <div class="sk-rect sk-rect1"></div>
            <div class="sk-rect sk-rect2"></div>
            <div class="sk-rect sk-rect3"></div>
            <div class="sk-rect sk-rect4"></div>
            <div class="sk-rect sk-rect5"></div>
        </div>
    </div> --}}
    <!-- Mobile nav -->
    <nav class="visible-sm visible-xs mobile-menu-container mobile-nav">
        <div class="menu-mobile-nav navbar-toggle">
            <span class="icon-bar"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </div>
        <div id="cssmenu" class="animated">
            <div class="uni-icons-close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <ul class="nav navbar-nav animated">
                <li><a href="{{ url('#') }}">Home</a></li>
                <li><a href="{{ url('#') }}">Our story</a></li>
                <li><a href="{{ url('#') }}">Areas of Activity <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon"
                        for="sm1">▾</label></a>
                <input type="checkbox" id="sm1">
                <ul class="sub-menu" style="background-color: #cae1e8 !important">
                    @foreach ($allcategory as $category)
                        @php
                            $subCategories = $allsubcateory->where('category', $category->id);
                        @endphp

                        <li>
                            <a href="{{ url('/get_category/'.$category->category_slug) }}" style="color: black !important">
                                {{ ucfirst($category->category_title) }}
                                @if ($subCategories->isNotEmpty())
                                    <span class="drop-icon">▾</span>
                                    <label title="Toggle Drop-down" class="drop-icon"
                                        for="sm{{ $category->id }}">▾</label>
                                @endif
                            </a>
                            <input type="checkbox" id="sm{{ $category->id }}">
                            <ul class="sub-menu" style="background-color: #cae1e8 !important">
                                @foreach ($subCategories as $subCategory)
                                    <li>
                                        @php
                                            $twoLevels = $alltwolevel->where('subcategory', $subCategory->id);
                                        @endphp
                                        <a
                                            href="{{ url('/get_subcategory/'.$subCategory->subcategory_slug) }}" style="color: black !important">
                                            {{ ucfirst($subCategory->subcategory_title) }}
                                            @if ($twoLevels->isNotEmpty())
                                                <span class="drop-icon">▾</span>
                                                <label title="Toggle Drop-down" class="drop-icon"
                                                    for="sm{{ $subCategory->id }}">▾</label>
                                            @endif
                                        </a>
                                        <input type="checkbox" id="sm{{ $subCategory->id }}">
                                        <ul class="sub-menu" style="background-color: #cae1e8 !important">
                                            @foreach ($twoLevels as $twoLevel)
                                                <li>
                                                    <a
                                                        href="{{ url('/get_leveltwo/'.$twoLevel->level_two_slug) }}" style="color: black !important">
                                                        {{ ucfirst($twoLevel->level_two_title) }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>

            </li>
                <li><a href="{{ url('#') }}">Our Partners</a></li>
                <li><a href="{{ url('#') }}">Career</a></li>
                <li><a href="{{ url('#') }}">Contact Us</a></li>


                <div class="clearfix"></div>
        </div>
    </nav>
    <!-- End mobile menu -->

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <img src="{{ asset('/user-assets/images/logo (2).png') }}" class="logo">
                        <span class="search-icon-mobile" style="display:none;">
                            <i class="fas fa-search"
                                style="
                            color: #223950;
                            margin-top: 29px;
                            float: right;
                            "
                                onclick="openNav()"> <span class="dotted" href="{{ url('#top') }}"
                                    style="
                            border-left: 1px dashed #223950;
                            border-right: 1px dashed #223950;
                            padding-left: 10px;
                            padding-right: 10px;
                            height: 3px;
                            ">EN</span></i>

                        </span>

                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <!--ul class="nav">
                            <li class="scroll-to-section"><a href="{{ url('#top') }}">Contact Us</a></li>
                            <li><a href="{{ url('meetings.html') }}">Careers</a></li>
                            <li class="scroll-to-section"><a href="{{ url('#courses') }}">Our Partners</a></li>

                            <li class="has-sub">
                                <a href="{{ url('javascript:void(0)') }}">Areas of Activity</a>
                                <ul class="sub-menu">
                                    <li class="has-sub">
                                        <a href="{{ url('javascript:void(0)') }}">Surgery</a>
                                        <ul class="sub-menu">
                                            <li><a href="meeting-details.html">Neurosergery</a></li>
                                            <li><a href="meeting-details.html">Otolaryngology</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="meeting-details.html">Neurosergery</a></li>
                                    <li><a href="meeting-details.html">Otolaryngology</a></li>
                                    <li><a href="meeting-details.html">Plastic surgery and aesthetic medicine</a></li>
                                    <li><a href="meeting-details.html">orthopedics</a></li>
                                    <li><a href="meeting-details.html">urology</a></li>
                                    <li><a href="meeting-details.html">image</a></li>
                                    <li><a href="meeting-details.html">orthopedics</a></li>
                                    <li><a href="meeting-details.html">urology</a></li>
                                    <li><a href="meeting-details.html">chest heart</a></li>
                                    <li><a href="meeting-details.html">Invasive and vascular radiology</a></li>
                                    <li><a href="meeting-details.html">Lymphedema</a></li>
                                    <li><a href="meeting-details.html">Rehabilitation of burns and scars</a></li>
                                </ul>
                            </li>

                            <li class="scroll-to-section"><a href="{{ url('#contact') }}">Our Story</a></li>
                            <li class="scroll-to-section"><a href="{{ url('#contact') }}" class="active">Home Page</a></li>
                            <li class="search-icon" onclick="openNav()"><i class="fas fa-search"></i></li>
                            <li class="scroll-to-section"><a class=" dotted" href="{{ url('#top') }}">EN</a></li>

                        </ul-->

                        <nav id="menu" class="nav">
                            <label for="tm" id="toggle-menu">Navigation <span
                                    class="drop-icon">▾</span></label>
                            <input type="checkbox" id="tm">
                            <ul class="main-menu nav  clearfix">
                                <li class="scroll-to-section"><a href="{{ url('#top') }}">Contact Us</a></li>
                                <li><a href="{{ url('meetings.html') }}">Careers</a></li>
                                <li class="scroll-to-section">
                                    <a href="{{ url('#courses') }}">Our Partners</a>
                                </li>
                                <li><a href="{{ url('#') }}">Areas of Activity <span class="drop-icon">▾</span>
                                        <label title="Toggle Drop-down" class="drop-icon"
                                            for="sm1">▾</label></a>
                                    <input type="checkbox" id="sm1">
                                    <ul class="sub-menu" style="background-color: #cae1e8 !important">
                                        @foreach ($allcategory as $category)
                                            @php
                                                $subCategories = $allsubcateory->where('category', $category->id);
                                            @endphp

                                            <li>
                                                <a href="{{ url('/get_category/'.$category->category_slug) }}" style="color: black !important">
                                                    {{ ucfirst($category->category_title) }}
                                                    @if ($subCategories->isNotEmpty())
                                                        <span class="drop-icon">▾</span>
                                                        <label title="Toggle Drop-down" class="drop-icon"
                                                            for="sm{{ $category->id }}">▾</label>
                                                    @endif
                                                </a>
                                                <input type="checkbox" id="sm{{ $category->id }}">
                                                <ul class="sub-menu" style="background-color: #cae1e8 !important">
                                                    @foreach ($subCategories as $subCategory)
                                                        <li>
                                                            @php
                                                                $twoLevels = $alltwolevel->where('subcategory', $subCategory->id);
                                                            @endphp
                                                            <a
                                                                href="{{ url('/get_subcategory/'.$subCategory->subcategory_slug) }}" style="color: black !important">
                                                                {{ ucfirst($subCategory->subcategory_title) }}
                                                                @if ($twoLevels->isNotEmpty())
                                                                    <span class="drop-icon">▾</span>
                                                                    <label title="Toggle Drop-down" class="drop-icon"
                                                                        for="sm{{ $subCategory->id }}">▾</label>
                                                                @endif
                                                            </a>
                                                            <input type="checkbox" id="sm{{ $subCategory->id }}">
                                                            <ul class="sub-menu" style="background-color: #cae1e8 !important">
                                                                @foreach ($twoLevels as $twoLevel)
                                                                    <li>
                                                                        <a
                                                                            href="{{ url('/get_leveltwo/'.$twoLevel->level_two_slug) }}" style="color: black !important">
                                                                            {{ ucfirst($twoLevel->level_two_title) }}
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>

                                </li>

                                <li class="scroll-to-section"><a href="{{ url('#contact') }}" class="active">Home
                                        Page</a></li>
                                <li class="scroll-to-section">
                                    <a href="{{ url('/login') }}" target="_blank">Login</a>
                                </li>
                                <li class="search-icon" onclick="openNav()"><i class="fas fa-search"></i></li>
                                <li class="scroll-to-section"><a class=" dotted" href="{{ url('#top') }}">EN</a>
                                </li>
                            </ul>
                        </nav>









                        <div id="myNav" class="overlay">
                            <a href="{{ url('javascript:void(0)') }}" class="closebtn"
                                onclick="closeNav()">&times;</a>
                            <!-- Your search bar content goes here -->
                            <input type="text" class="serch-input" placeholder="Search...">

                        </div>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>


                        <script>
                            function openNav() {
                                document.getElementById("myNav").style.display = "block";
                            }

                            function closeNav() {
                                document.getElementById("myNav").style.display = "none";
                            }
                        </script>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <script>
        window.addEventListener('scroll', function() {
            var header = document.querySelector('.header-area');
            header.classList.toggle('sticky', window.scrollY > 0);
        });

        function toggleSearchPopup() {
            var searchPopup = document.getElementById("searchPopup");
            searchPopup.style.display = searchPopup.style.display === "none" ? "block" : "none";
        }

        function performSearch() {
            // Implement your search logic here
            alert("Performing search...");
        }
    </script>



    <main id="content" class="site-main post-7 page type-page status-publish has-post-thumbnail hentry">

        <header class="page-header">
            <h1 class="entry-title">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">homepage</font>
                </font>
            </h1>
        </header>





        <div class="page-content">
            <div data-elementor-type="wp-page" data-elementor-id="7" class="elementor elementor-7"
                data-elementor-post-type="page">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-24ee2c5 elementor-section-full_width elementor-section-height-min-height elementor-section-items-stretch elementor-section-height-default lazyloaded"
                    data-id="24ee2c5" data-element_type="section" style="width: 100%;">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bd878a4"
                            data-id="bd878a4" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-c259e0d elementor-widget__width-initial elementor-absolute elementor-align-center elementor-widget elementor-widget-lottie"
                                    data-id="c259e0d" data-element_type="widget" data-widget_type="lottie.default">
                                    <div class="elementor-widget-container">
                                        <div class="e-lottie__container">
                                            <div class="e-lottie__animation"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-af62db3 elementor-widget__width-initial elementor-absolute elementor-align-center elementor-widget elementor-widget-lottie"
                                    data-id="af62db3" data-element_type="widget" data-widget_type="lottie.default">
                                    <div class="elementor-widget-container">
                                        <div class="e-lottie__container">
                                            <div class="e-lottie__animation"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4ffa86a elementor-widget__width-initial elementor-absolute elementor-align-center elementor-widget elementor-widget-lottie"
                                    data-id="4ffa86a" data-element_type="widget" data-widget_type="lottie.default">
                                    <div class="elementor-widget-container">
                                        <div class="e-lottie__container">
                                            <div class="e-lottie__animation"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-af137f7 elementor-widget__width-initial elementor-absolute elementor-align-center elementor-widget elementor-widget-lottie"
                                    data-id="af137f7" data-element_type="widget" data-widget_type="lottie.default">
                                    <div class="elementor-widget-container">
                                        <div class="e-lottie__container">
                                            <div class="e-lottie__animation"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-38f0eee elementor-widget__width-initial elementor-absolute elementor-align-center elementor-widget elementor-widget-lottie"
                                    data-id="38f0eee" data-element_type="widget" data-widget_type="lottie.default">
                                    <div class="elementor-widget-container">
                                        <div class="e-lottie__container">
                                            <div class="e-lottie__animation"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-cd14c76 elementor-widget__width-initial elementor-absolute e-transform elementor-align-center elementor-widget elementor-widget-lottie"
                                    data-id="cd14c76" data-element_type="widget" data-widget_type="lottie.default">
                                    <div class="elementor-widget-container">
                                        <div class="e-lottie__container">
                                            <div class="e-lottie__animation"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-fd47ca8 elementor-widget__width-initial elementor-absolute elementor-align-center elementor-invisible elementor-widget elementor-widget-lottie elementor-motion-effects-parent"
                                    data-id="fd47ca8" data-element_type="widget" data-widget_type="lottie.default">
                                    <div class="elementor-widget-container elementor-motion-effects-element"
                                        style="--translateX: -5.929721815519766px; --translateY: -127.9891304347826px; transform: translateX(var(--translateX))translateY(var(--translateY));">
                                        <div class="e-lottie__container">
                                            <div class="e-lottie__animation"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-902add4 elementor-widget__width-initial elementor-absolute elementor-align-center elementor-widget elementor-widget-lottie elementor-motion-effects-parent"
                                    data-id="902add4" data-element_type="widget" data-widget_type="lottie.default">
                                    <div class="elementor-widget-container elementor-motion-effects-element"
                                        style="--translateX: 3.5578330893118597px; --translateY: 76.79347826086955px; transform: translateX(var(--translateX))translateY(var(--translateY));">
                                        <div class="e-lottie__container">
                                            <div class="e-lottie__animation"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6c01623 vitamin elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image animated bounceIn"
                                    data-id="6c01623" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img decoding="async" width="244" height="195"
                                            src="{{ asset('/user-assets/uploads/2022/09/formula-05.png') }}"
                                            class="attachment-large size-large wp-image-1846" alt=""
                                            loading="lazy">
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-b46b08b vitamin2 elementor-widget__width-initial elementor-absolute animated-slow elementor-widget elementor-widget-image animated fadeInRight"
                                    data-id="b46b08b" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img decoding="async" width="244" height="195"
                                            src="{{ asset('/user-assets/uploads/2022/09/formula-04.png') }}"
                                            class="attachment-large size-large wp-image-1841" alt=""
                                            loading="lazy">
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-cc2e530 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                    data-id="cc2e530" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-faca519"
                                            data-id="faca519" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a6c09e0"
                                            data-id="a6c09e0" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-affddf8 mission elementor--v-position-top animated-slow elementor--h-position-left elementor-widget elementor-widget-slides animated fadeIn"
                                                    data-id="affddf8" data-element_type="widget"
                                                    data-widget_type="slides.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-swiper">
                                                            <div class="elementor-slides-wrapper elementor-main-swiper swiper"
                                                                dir="rtl" data-animation="fadeInLeft">
                                                                <div class="swiper-wrapper elementor-slides">
                                                                    <div
                                                                        class="elementor-repeater-item-e632806 swiper-slide">
                                                                        <div class="swiper-slide-bg elementor-ken-burns--active"
                                                                            role="img"></div>
                                                                        <div class="swiper-slide-inner">
                                                                            <div
                                                                                class="swiper-slide-contents animated fadeInLeft">
                                                                                <div class="elementor-slide-heading">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            Top Technologies
                                                                                        </font>
                                                                                    </font>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-slide-description">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            For Top Experts</font>
                                                                                    </font>
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
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-5a6fd01 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="5a6fd01" data-element_type="section" data-e-bg-lazyload=".elementor-background-overlay">
                    <div class="elementor-background-overlay lazyloaded"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4b177e5"
                            data-id="4b177e5" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-f9361c6 elementor-widget elementor-widget-heading animated fadeInUp"
                                    data-id="f9361c6" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                    data-widget_type="heading.default">
                                    <div class="elementor-widget-container">

                                        <h2 class="elementor-heading-title elementor-size-default">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Area of Activity</font>
                                            </font>
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-e61583c elementor-absolute ani-wrap elementor-widget elementor-widget-html"
                                    data-id="e61583c" data-element_type="widget"
                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                    data-widget_type="html.default">
                                    <div class="elementor-widget-container">
                                        <p class="ani-border"><span class="ani-circle"></span></p>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-dd8927e elementor-section-boxed elementor-section-height-default elementor-section-height-default animated fadeInUp"
                                    data-id="dd8927e" data-element_type="section"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;jet_parallax_layout_list&quot;:[]}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-784118d"
                                            data-id="784118d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-4d24357 elementor-widget elementor-widget-text-editor"
                                                    data-id="4d24357" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container"
                                                        style="line-height: 22px;">
                                                        <p>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Advanced and
                                                                    innovative medical technologies are today the basis
                                                                    of the professional success of all medical service
                                                                    providers. The significant challenge is to choose
                                                                    and match accurately
                                                                    from a competitive market of leading companies.
                                                                    That's what we're here for. </font>
                                                            </font><br>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">My mother.
                                                                    Medical Technologies Ltd. is one of the leaders in
                                                                    Israel in the marketing of medical
                                                                    technologies.&nbsp; </font>
                                                            </font><br>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">We maintain
                                                                    regular working relationships with exclusive
                                                                    representatives of leading manufacturers in the
                                                                    world. As a result, our experts who are continuously
                                                                    updated, know the variety of
                                                                    existing solutions and are skilled in selecting and
                                                                    bringing to the Israeli market the advanced
                                                                    technologies in each field, in accordance The
                                                                    highest safety (which meets the strict standards
                                                                    of the FDA, CE and AMR) and with the most
                                                                    significant added value. </font>
                                                            </font><br>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">We complement
                                                                    our expertise in the selection of technologies with
                                                                    a holistic service envelope, which accompanies the
                                                                    customer personally with training and close
                                                                    implementation until the state
                                                                    of optimal independent operation.</font>
                                                            </font>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-b85e4e2 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated fadeInUp"
                                    data-id="b85e4e2" data-element_type="section"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;jet_parallax_layout_list&quot;:[]}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1d3dc20"
                                            data-id="1d3dc20" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-d352258 elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="d352258" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <link rel="stylesheet"
                                                            href="{{ asset('/user-assets/plugins/elementor/assets/css/widget-icon-box-rtl.min.css') }}">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 403.4 403.4"
                                                                        style="enable-background:new 0 0 403.4 403.4;"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <path
                                                                                d="M144.7,403.3c6.7,0,11.3-2.4,14.3-4.7c3.8-3,4.3-4.7,4.3-4.7h104c0,0,1.8,3.1,6.1,6.4c2.7,2,6.9,3.3,12.5,3.3  c10.9,0,16.5-9.6,16.5-9.6c2-3.2,3.1-6.8,3.1-10.8c0-4.2-1.3-8.2-3.5-11.5c4.1-1,7.8-3.3,10.5-6.7c3.7-4.7,5.1-10.7,3.8-16.6  l-3.2-14c-0.5-2.2-2.5-3.8-4.8-3.8H247v-15.9c0-7-4.6-12.9-10.9-15v-21.7h54.6c6.1,0,12.1-1.6,17.4-4.6l47.6-27.3h8.2  c2.7,0,4.9-2.2,4.9-4.9v-11.6c0-11.4-9.2-20.6-20.6-20.6h-37.9l-66-24.4c-0.7-0.3-1.4-0.5-2.2-0.5h-56.8c-0.6,0-1.2,0.2-1.8,0.4  c-0.1,0-0.1,0-0.2,0.1c-0.1,0-0.2,0.1-0.3,0.1l-86.9,24.4H52c-8.6,0-16.9,3.4-22.9,9.4c-6.1,6.1-9.5,14.2-9.5,22.8  c0,2.7,2.2,5,4.9,5h36.9l47.6,27.3c5.3,3,11.3,4.6,17.4,4.6h63.1v21.7c-6.3,2.1-10.9,8-10.9,15v15.9h-61.2c-2.3,0-4.3,1.6-4.8,3.8  l-3.2,14c-1.3,5.9,0,11.9,3.8,16.6c3.7,4.7,9.2,7.3,15.2,7.4c-1,1.5-3.2,5.4-3.1,10.9c0,5.4,2.2,9.3,3.1,10.8  C131.2,398.6,137.6,403.3,144.7,403.3z M242,192.6c-2.8,13.9-14.4,24.4-28.1,24.4c-14,0-25.5-10.3-28.3-24.4H242z M36.1,225.1  c4.1-4.1,9.9-6.5,15.9-6.5h44.8c0.4,0,0.9-0.1,1.3-0.2l82.9-23.2c3.1,15.4,16.6,27.1,32.8,27.1c16,0,29.4-11.4,32.6-26.6l61.2,22.6  c0.5,0.2,1.1,0.3,1.7,0.3h38.8c6,0,10.8,4.9,10.8,10.8v6.7H30.1C31,232,33.1,228.2,36.1,225.1z M113.9,264.7L81.3,246h254.5  l-32.6,18.7c-3.8,2.2-8.1,3.3-12.5,3.3c-54.1,0-101,0-164.2,0C122.1,268,117.7,266.9,113.9,264.7z M229.5,277.9v20.8h-32.8v-20.8  H229.5z M187.3,314.5c0-3.1,2.6-5.7,5.9-5.9c0.2,0,0.3,0.1,0.5,0.1h39.2c0.2,0,0.3-0.1,0.5-0.1c3.3,0.3,5.9,2.8,5.9,5.9v15.8h-52  V314.5z M274.1,383c0-6,4.9-10.8,10.8-10.8c6,0,10.8,4.9,10.8,10.8c0,6-4.8,10.8-10.8,10.8C278.9,393.9,274.1,389,274.1,383z   M267.4,393.9h-104c4.2-6.8,4.2-14.9,0-21.6h104c-2,3.2-3.1,6.8-3.1,10.8C264.2,387,265.4,390.7,267.4,393.9z M119,350.4l2.3-12.2  h183l2.3,12.2c0.7,2.9,0,5.9-1.9,8.3c-1.9,2.3-4.7,3.7-7.6,3.7H128.5C122.2,362.4,117.6,356.5,119,350.4z M135,383  c0-6,4.8-10.8,10.8-10.8c6,0,10.8,4.9,10.8,10.8c0,6-4.9,10.8-10.8,10.8C139.9,393.9,135,389,135,383z">
                                                                            </path>
                                                                            <path
                                                                                d="M89.9,55.3c-11.8,0-21.4,9.6-21.4,21.4c0,12.4,10.7,22.5,23.4,21.3l30.5,30.5c0,0.1,0,0.2,0,0.3c0,11,8.9,19.9,19.9,19.9  c4.4,0,8.5-1.5,11.8-4l8.3,8.3v19.2c0,2.2,0.7,3.9,2.9,3.9s2.9-1.7,2.9-3.9v-22.8c0-1-0.4-2-1.1-2.8l-7.7-7.7  c1.8-3,2.9-6.4,2.9-10.2c0-11-8.9-19.9-19.9-19.9c-0.1,0-0.2,0-0.2,0L111.2,78c0.1-1.1,0.1-1.2,0-2.9l15.2-15.2  c0.9,0.1,1.7,0.2,2.6,0.2c11.8,0,21.4-9.6,21.4-21.4c0-5.2-1.8-9.9-4.9-13.6h35.1c0,0.4-0.1,0.8-0.1,1.2v35.2  c0,4.1,2.7,7.5,6.4,8.5c-7.8,8.3-8.5,20.9-1.6,30l1.4,32.5c0.1,2.1,1.8,3.7,3.9,3.7h11.9v19.5c0,2.2,0.7,3.9,2.9,3.9  s2.9-1.7,2.9-3.9v-19.5h7.6c2.1,0,3.8-1.6,3.9-3.7l1.3-30.9c8.2-9,8.1-22.7-0.3-31.6c3.7-1.1,6.4-4.5,6.4-8.5V26.2  c0-0.4-0.1-0.8-0.1-1.2h41.4c-3,3.7-4.9,8.4-4.9,13.6c0,12.6,11,22.8,24,21.2L302.7,75c-0.1,1.7-0.1,1.8,0,2.9l-30.8,30.8  c-0.1,0-0.2,0-0.2,0c-11,0-19.9,8.9-19.9,19.9c0,3.7,1.1,7.2,2.9,10.2l-7.7,7.7c-0.7,0.7-1.1,1.7-1.1,2.8v12.6  c0,2.2,0.7,3.9,2.9,3.9c2.2,0,2.9-1.7,2.9-3.9v-9l8.3-8.3c3.3,2.5,7.4,4,11.8,4c11,0,19.9-8.9,19.9-19.9c0-0.1,0-0.2,0-0.2L322,98  c12.7,1.2,23.4-8.8,23.4-21.3c0-11.8-9.6-21.4-21.4-21.4c-0.6,0-1.1,0-1.7,0.1l-16.1-16.1c0-0.2,0-0.5,0-0.7  c0-5.9-2.4-11.3-6.4-15.2c7.5-3.1,12.9-10.5,13-19.1c0-2.2-1.7-4-3.9-4H104.8c-2.2,0-3.9,1.8-3.9,4c0.1,8.6,5.5,15.9,13,19.1  c-3.9,3.9-6.4,9.3-6.4,15.2c0,0.2,0,0.5,0,0.7l-16.1,16C91,55.4,90.4,55.3,89.9,55.3z M77.8,76.7c0-6.7,5.4-12.1,12.1-12.1  c6.7,0,12.1,5.4,12.1,12.1s-5.4,12.1-12.1,12.1C83.2,88.8,77.8,83.4,77.8,76.7z M153,128.7c0,5.9-4.8,10.7-10.8,10.7  c-5.9,0-10.8-4.8-10.8-10.7c0-5.9,4.8-10.8,10.8-10.8C148.2,117.9,153,122.8,153,128.7z M133.2,111c-3.7,1.9-6.7,4.9-8.6,8.6  l-24.3-24.3c3.6-2,6.6-5.1,8.5-8.8L133.2,111z M141.1,38.7c0,6.7-5.5,12.2-12.2,12.2c-6.7,0-12.2-5.5-12.2-12.2  c0-6.7,5.5-12.2,12.2-12.2C135.6,26.5,141.1,31.9,141.1,38.7z M213.3,95.5c-0.1,0.1-0.1,0.1-0.2,0.2c-2.4,2.3-5.7,3.8-9.3,3.8  c-7.5,0-13.5-6.1-13.5-13.5c0-7.5,6.1-13.5,13.5-13.5c7.5,0,13.5,6.1,13.5,13.5C217.3,89.7,215.8,93.1,213.3,95.5z M194.3,128.4  l-0.9-21.7c6.3,3.2,13.4,3.3,19.6,0.6l-0.9,21.1H194.3z M219.4,26.2v35.2c0,0.6-0.5,1.2-1.2,1.2h-28.9c-0.6,0-1.2-0.5-1.2-1.2V26.2  c0-0.6,0.5-1.2,1.2-1.2h28.9C218.9,25.1,219.4,25.6,219.4,26.2z M272.8,38.7c0-6.7,5.5-12.2,12.2-12.2c6.7,0,12.2,5.5,12.2,12.2  c0,6.7-5.5,12.2-12.2,12.2C278.2,50.8,272.8,45.4,272.8,38.7z M271.6,139.4c-5.9,0-10.7-4.8-10.7-10.7c0-5.9,4.8-10.7,10.7-10.7  s10.7,4.8,10.7,10.7C282.3,134.6,277.5,139.4,271.6,139.4z M289.3,119.7c-1.9-3.7-4.9-6.7-8.6-8.6l24.4-24.4  c1.9,3.7,4.9,6.7,8.5,8.7L289.3,119.7z M335.7,76.7c0,6.4-5.2,11.7-11.7,11.7s-11.7-5.2-11.7-11.7S317.6,65,324,65  S335.7,70.3,335.7,76.7z M313.8,57.9c-3.6,2-6.6,5-8.6,8.6l-9.4-9.5c3.6-2.1,6.5-5.2,8.3-8.9L313.8,57.9z M121.9,17.3  c-5.8,0-10.8-3.8-12.5-9.1h195.1c-1.8,5.3-6.7,9.1-12.5,9.1C226.7,17.3,180.6,17.3,121.9,17.3z M109.8,48.2  c1.9,3.7,4.7,6.8,8.3,8.9l-9.4,9.5c-2-3.6-5-6.6-8.6-8.6L109.8,48.2z">
                                                                            </path>
                                                                        </g>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                surgery</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-d1ce729 elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="d1ce729" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 394.114 394.114"
                                                                        style="enable-background:new 0 0 394.114 394.114;"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <path
                                                                                        d="M380.834,202.114l-6.144-34.304c-5.168-29.019-16.203-56.185-32.141-80.302c-0.049-0.862-0.546-1.603-1.298-1.935    c-4.23-6.254-8.787-12.302-13.665-18.115l-25.088-29.696c-17.408-20.48-40.96-33.28-67.584-36.864l-3.072-0.512    c-10.24-1.024-20.48,2.048-28.16,8.704c-2.541,2.371-4.736,5.027-6.549,7.885c-1.852-2.934-4.121-5.595-6.763-7.885    c-7.68-7.168-17.92-10.24-28.16-8.704l-3.072,0.512c-26.112,3.584-50.176,16.384-67.584,36.864L66.466,67.458    C41.89,96.13,26.018,130.946,19.362,167.81l-6.144,34.304c-6.656,38.912,1.536,78.848,22.528,112.128l17.92,28.672    c17.408,28.16,48.128,46.592,80.896,49.664l17.92,1.024c1.536,0,2.56,0,4.096,0c11.264,0,22.528-4.096,31.232-11.776    c3.773-3.563,6.932-7.733,9.363-12.287c1.974,3.741,4.486,7.22,7.531,10.318c0.112,0.148,0.241,0.28,0.386,0.395    c0.54,0.536,1.093,1.062,1.665,1.574c8.704,8.192,19.968,12.288,31.232,12.288c1.536,0,2.56,0,3.584,0l17.92-1.536    c32.768-3.072,62.976-21.504,80.896-49.664l17.92-28.672C379.81,280.962,387.49,241.026,380.834,202.114z M180.642,374.658    c-2.469,2.14-5.153,3.958-7.995,5.411c1.255-3.266,1.787-6.948,1.339-10.531c-0.512-4.608-4.096-13.824-17.92-16.896    c-1.536,0-2.56,0.512-3.072,2.048c0,1.536,0.512,2.56,2.048,3.072c10.24,2.56,13.312,8.192,13.824,12.8    c0.707,4.594-1.026,9.186-3.346,12.265c-4.01,1.084-8.222,1.477-12.526,1.047l-17.92-1.536    c-29.696-3.072-57.344-19.968-73.216-45.056l-17.92-28.672c-19.968-31.232-27.136-68.608-20.992-104.96l0.562-3.138    c3.658,3.353,9.898,6.812,19.918,5.698c0.512,4.096,2.56,11.264,8.192,16.384c4.608,4.608,11.264,6.656,18.944,6.144    c3.072,11.776,12.288,29.184,32.256,26.112c1.024,0,1.536-0.512,2.048-1.024c0,0,3.072-4.096,7.168-5.12    c2.56-0.512,5.12,0.512,8.192,2.56c0.512,0.512,1.536,0.512,2.048,0.512c0,0,18.432-1.536,26.624,10.24    c0.512,0.512,1.024,1.024,2.048,1.024c0.512,0,1.024-0.512,0.512-0.512c1.024-1.024,1.536-2.56,0.512-3.584    c-8.704-12.288-25.6-12.288-30.208-12.288c-4.096-2.56-8.192-3.584-11.776-3.072c-5.12,1.024-8.192,4.608-9.728,6.656    c-20.992,2.048-25.6-23.04-25.6-24.064s-1.024-2.048-2.56-2.048c-7.168,0.512-13.312-1.024-17.408-4.608    c-6.656-6.144-6.656-15.872-6.656-15.872c0-1.024-0.512-1.536-1.024-2.048c-0.512-0.512-1.536-0.512-2.048-0.512    c-8.704,1.536-14.336-1.024-17.408-3.584c-1.232-1.026-2.204-2.13-2.942-3.156l4.478-25.004    c3.502-20.136,10.008-39.434,19.213-57.338c0.303,4.497,1.044,8.763,2.291,11.258c1.536,2.56,3.584,4.608,5.12,6.656    c3.072,3.584,5.12,5.632,5.12,11.776c0,1.536,1.024,2.56,2.56,2.56c1.024,0,2.56-1.024,2.56-2.56    c0.512-8.192-3.072-11.776-6.144-15.36c-1.536-1.536-3.072-3.072-4.096-5.632c-1.963-3.534-2.119-13.388-1.623-19.177    c5.712-9.638,12.238-18.811,19.543-27.415l25.088-29.696c14.322-16.632,33.239-27.821,54.476-32.109    c-2.872,8.944-9.889,12.913-14.028,15.213c-2.56,1.536-4.608,2.56-4.608,5.12s3.072,3.584,4.608,4.096    c6.144,2.048,9.728,4.608,10.752,7.168s-0.512,5.12-1.536,7.168v0.512c-0.512,1.024,0,2.56,1.024,3.072    c0,0.512,0.512,0.512,1.024,0.512c1.024,0,2.048-0.512,2.56-1.536c1.536-2.56,4.096-7.168,2.048-11.776    c-1.536-4.096-5.632-7.168-12.8-9.728c4.958-2.975,13.737-8.371,16.614-20.795c0.437-0.062,0.868-0.141,1.306-0.197l3.072-0.512    c7.68-1.024,14.848,1.536,20.48,6.144c4.204,3.822,6.979,8.784,8.118,14.036c-0.285,1.783-0.438,3.593-0.438,5.42    c0,0.882,0.186,1.666,0.499,2.355c-0.147,17.029-1.602,25.798-3.059,35.021c-0.714,4.523-1.428,9.158-1.988,14.829    c-7.485,8.504-14.479,4.585-15.42,4.115c-1.024-0.512-3.072,0-3.584,1.024c-1.024,1.024-0.512,2.56,0.512,3.584    c0,0,3.584,2.048,8.192,2.048c2.816,0,6.206-0.774,9.702-3.238c-0.303,4.952-0.486,10.684-0.486,17.574    c0,19.968,1.536,30.208,3.072,39.936c0.918,5.812,1.835,11.444,2.425,19.075c-3.555-3.625-8.99-6.941-17.273-8.834    c-1.536,0-2.56,0.512-3.072,2.048c0,1.536,0.512,2.56,2.048,3.072c11.334,2.429,16.585,7.738,18.794,12.891    c0.097,2.919,0.15,6.109,0.15,9.637c0,19.456-1.536,28.672-3.072,38.4c-0.657,4.159-1.313,8.414-1.849,13.479    c-1.967-3.182-4.675-5.984-8.391-7.335c-6.144-2.56-10.24-3.072-13.824-3.584c-6.656-1.024-8.704-1.536-13.824-10.24    c-6.144-10.24-16.384-10.24-25.6-10.752c-5.632-0.512-11.264-0.512-14.336-3.072s-4.608-6.656-6.144-10.752    c-2.56-6.656-5.632-14.336-16.384-17.408c-6.144-1.536-11.264-2.048-16.896-2.56h-2.048c-1.024,0-2.56,1.024-2.56,2.56    c0,1.024,1.024,2.56,2.56,2.56h2.048c5.12,0.512,10.752,1.024,15.872,2.56c8.192,2.56,10.24,7.68,12.8,14.336    c1.536,4.608,3.584,9.216,7.68,12.8c4.608,3.584,10.752,4.096,17.408,4.096c8.704,0,16.896,0.512,21.504,8.192    c6.144,10.752,9.728,11.776,17.408,12.8c3.072,0.512,7.168,1.024,12.8,3.072c5.52,1.725,8.015,9.257,9.058,13.99    c-0.223,4.393-0.354,9.379-0.354,15.194c0,19.968,1.536,30.208,3.072,39.936c1.536,10.24,3.072,19.456,3.072,38.4    c0,1.534,0.078,3.061,0.224,4.575C191.093,361.129,187.166,369.004,180.642,374.658z M350.626,308.61l-6.642,10.627    c-3.311,1.983-8.079,2.335-13.326,2.685c-2.56,0.512-5.632,0.512-8.192,1.024c-10.752,2.048-13.312,7.68-15.36,12.288    c-1.536,3.072-2.048,4.608-4.096,5.12c-2.048,0.512-5.632-0.512-9.216-1.024c-7.68-1.536-17.408-3.584-20.48,7.168    c-2.56,10.24-16.896,14.848-16.896,14.848c-1.024,0.512-2.048,1.536-1.536,3.072c0.512,1.024,1.536,1.536,2.56,1.536    c0.128,0,0.224,0,0.288,0c-0.064,0-0.16,0-0.288,0c0.512,0,16.896-5.12,20.48-18.432c2.048-5.632,5.632-5.632,14.336-3.584    c4.096,1.024,8.192,2.048,11.776,1.024c4.096-1.024,5.632-4.608,7.168-7.68c2.048-4.096,3.584-7.68,11.776-9.216    c2.56,0,5.12-0.512,7.68-0.512c2.859-0.179,5.839-0.365,8.685-0.892l-6.638,10.62c-15.872,25.6-43.52,42.496-73.216,45.056    l-17.92,1.536c-8.54,0.854-16.718-1.506-23.655-6.17c4.139-2.245,8.412-6.112,10.855-12.774c0.512-1.024,0-2.56-1.536-3.072    c-1.024-0.512-2.56,0-3.072,1.536c-2.382,6.352-6.815,9.416-10.614,10.898c-6.318-6.047-10.124-13.51-11.125-21.796    c0.151-1.478,0.235-2.966,0.235-4.463c0-0.901-0.194-1.699-0.521-2.398c-0.118-18.402-1.59-28.208-3.063-37.538    c-1.536-10.24-3.072-19.456-3.072-38.4c0-19.456,1.536-28.672,3.072-38.4c1.536-9.728,3.072-19.968,3.072-39.936    s-1.536-30.208-3.072-39.936c-1.031-6.528-2.061-12.83-2.627-21.992c3.19,1.287,10.532,4.961,11.331,11.752    c0,1.536,1.024,2.56,2.56,2.56s2.56-1.536,2.56-2.56c-0.376-4.322-2.616-7.745-5.325-10.35c2.944-1.107,6.715-3.28,9.932-7.57    c1.024-1.024,0.512-2.56-0.512-3.584s-2.56-0.512-3.584,0.512c-4.608,6.144-10.752,6.656-10.752,6.656    c-0.135,0-0.262,0.018-0.389,0.033c-3.017-1.761-5.549-2.593-5.755-2.593c-0.103-0.052-0.214-0.085-0.326-0.116    c-0.119-3.188-0.186-6.7-0.186-10.636c0-18.944,1.536-28.16,3.072-37.888c1.245-7.884,2.49-16.106,2.917-29.569    c2.88,2.745,7.399,4.993,14.491,4.993c1.024,0,1.536,0,1.536,0c1.536,0,2.56-1.024,2.56-2.56s-1.024-2.56-2.56-2.56    c-11.403,0.814-14.705-5.17-15.58-8.169c0.13-0.486,0.22-0.998,0.22-1.559c0-1.933-0.154-3.831-0.443-5.686    c1.135-5.45,3.913-10.326,8.123-13.77c4.798-4.362,11.082-6.485,17.269-6.388c8.342,2.541,8.878,6.05,9.867,10.996    c1.024,4.608,2.048,10.24,10.752,13.824c12.288,4.608,10.752,11.776,7.168,24.064l-0.512,1.024    c-0.612,2.142-0.944,4.074-1.045,5.832c-9.615-6.641-21.176-3.682-27.115-0.712c-1.024,1.024-1.536,2.56-1.024,3.584    c1.024,1.024,2.56,1.536,3.584,1.024c1.024,0,16.384-8.192,26.624,5.12c0.1,0.1,0.202,0.197,0.305,0.293    c2.651,3.856,7.176,6.275,11.983,8.411c5.12,2.56,6.656,13.824,7.168,17.408c0,1.536,1.024,2.56,2.56,2.56    c1.536-0.512,2.56-1.536,2.56-3.072s-1.536-17.408-10.24-21.504c-9.728-4.096-13.312-7.68-10.24-17.408l-0.512-1.024    c3.584-11.264,7.168-24.064-9.728-30.72c-6.144-2.56-6.656-5.632-7.68-10.24c-0.499-2.495-1.123-5.354-2.991-7.987    c22.223,3.926,42.395,15.335,56.752,32.563l25.088,29.696c3.057,3.601,5.969,7.307,8.753,11.1    c-4.476,0.5-9.517,1.893-13.361,5.284c-4.608,4.096-6.656,10.24-5.632,18.432c2.048,18.944-2.56,19.456-14.336,20.992    c-3.072,0-5.632,1.024-8.192,2.048c-1.024,1.024-1.536,2.048-1.024,3.584c0.512,1.024,1.536,1.536,2.56,1.536    c0.512,0,0.512,0,1.024,0c2.048-1.024,4.096-1.536,6.656-2.048c14.848-2.048,21.504-5.12,18.944-26.624    c-1.024-6.144,0.512-10.752,3.584-13.824c3.638-3.358,9.108-4.267,13.323-4.403c2.79,4.056,5.411,8.218,7.889,12.462    c1.744,6.881,12.493,51.753-21.212,63.621c-10.752,4.096-13.824,12.288-16.384,19.968c-3.072,8.192-5.632,16.384-18.432,20.992    c-4.608,2.048-11.776,1.536-18.944,1.536c-9.728-0.512-19.968-0.512-28.16,3.584c-3.072,1.536-5.632,4.096-7.68,7.168    c-0.512,1.536,0,3.072,1.024,3.584c0.512,0.512,1.024,0.512,1.536,0.512c1.024,0,1.536-0.512,1.536-1.536    c1.536-2.048,3.072-4.096,5.632-5.12c7.168-3.584,16.384-3.584,25.6-3.072c7.68,0.512,14.848,0.512,20.992-1.536    c14.848-5.632,18.432-15.872,21.504-24.576c2.56-7.68,4.608-13.824,13.312-16.896c26.609-9.768,28.622-37.039,26.885-54.704    c8.109,16.72,13.915,34.584,17.147,53.168l6.144,34.304C377.762,240.002,370.594,277.378,350.626,308.61z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M41.378,157.57c-0.512-1.536-1.536-2.048-3.072-1.536c-1.536,0.512-2.048,1.536-1.536,3.072    c0.512,2.048,1.024,3.584,2.048,5.12c0,1.024,1.024,1.536,2.048,1.536c0,0,0.512-0.512,1.536,0    c1.024-1.024,1.536-2.56,1.024-3.584C42.402,160.642,41.89,159.106,41.378,157.57z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M57.762,175.49c-4.096-1.536-7.168-3.072-9.728-6.144c-1.024-1.024-2.56-1.024-3.584,0c-1.024,1.024-1.024,2.56,0,3.584    c3.072,3.584,7.168,6.144,11.776,7.68c0.512,0,0.512,0,1.024,0c1.024,0,2.048-0.512,2.048-2.048    C59.81,177.538,59.298,176.002,57.762,175.49z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M207.266,238.466c-1.536,0.512-3.072,1.024-4.608,1.536c-1.024,1.024-1.536,2.56-1.024,3.584    c0.512,1.024,1.536,1.536,2.56,1.536c0.512,0,1.024-0.512,1.024-0.512c1.024-0.512,2.56-1.024,3.584-1.536    c1.024-0.512,2.048-2.048,1.536-3.072C209.826,238.978,208.802,237.954,207.266,238.466z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M217.506,241.026c0,0,0.512,0,1.024,0c6.144-1.536,10.24-4.608,12.8-8.704c0.512-1.536,0-3.072-1.024-3.584    c-1.536-0.512-3.072,0-3.584,1.024c-1.536,2.048-3.584,4.608-9.728,6.144c-1.536,0.512-2.56,1.536-2.048,3.072    C215.458,240.514,216.482,241.026,217.506,241.026z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M218.53,192.898c1.024,0,8.704,1.536,17.92,1.536c10.24,0,22.528-2.048,28.672-8.704    c4.096-4.608,5.12-10.752,3.072-17.92c-1.536-6.656-4.608-10.752-9.216-13.312c-2.56-1.536-5.12-2.048-7.168-2.048    c1.024-3.072,2.56-7.168,1.536-11.776c-1.024-5.12-5.12-10.24-11.776-13.824c3.072-4.608,8.192-13.312,3.072-20.992    c-1.536-2.56-3.584-4.608-5.632-6.656c-5.12-5.12-9.728-9.728-8.192-16.896c0-1.536-0.512-2.56-2.048-3.072    c-1.536,0-2.56,0.512-3.072,2.048c-2.048,9.728,4.096,15.872,9.216,21.504c2.048,2.048,3.584,4.096,5.12,6.144    c4.608,6.656-4.608,16.896-4.608,16.896c-0.512,0.512-0.512,1.024-0.512,2.048c0.512,1.024,1.024,1.536,1.536,2.048    c6.656,3.072,10.752,7.168,11.776,11.776c1.536,6.656-3.584,12.288-3.584,12.288c-0.512,1.024-0.512,2.048,0,3.072    c1.024,1.024,2.048,1.536,3.072,1.024c0,0,4.608-1.536,9.216,1.024c3.072,2.048,5.12,5.12,6.656,10.24    c1.536,5.632,1.024,9.728-2.048,12.8c-8.192,9.216-33.28,7.168-41.984,5.632c-1.536-0.512-3.072,0.512-3.072,2.048    C215.97,191.362,216.994,192.898,218.53,192.898z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M282.018,151.938c0-1.536,0-5.632,2.048-8.704c0.512-1.536,0-3.072-1.024-3.584c-1.536-0.512-3.072,0-3.584,1.024    c-2.56,4.608-2.56,9.216-2.56,11.264h2.56H282.018z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M230.818,343.426c-1.536,0-2.56,0.512-3.072,2.048c-0.512,1.024-1.024,2.56-1.024,3.584c0,1.536,0.512,2.56,2.56,3.072    c1.024,0,2.56-0.512,3.072-2.56c0-1.024,0-2.048,0.512-3.072C232.866,344.962,232.354,343.938,230.818,343.426z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M237.474,330.626c-3.072,1.536-5.12,4.096-7.168,7.168c-0.512,1.024,0,3.072,1.024,3.584    c0.512,0.512,1.024,0.512,1.536,0.512c1.024,0,1.536,0,1.536-1.024c1.536-2.048,3.072-4.096,5.632-5.632    c1.536-1.024,1.536-2.56,1.024-3.584C240.034,330.114,238.498,330.114,237.474,330.626z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M283.042,272.258c-1.536-1.024-2.56-1.536-3.072-2.56c-1.024-1.536-2.56-1.536-3.584-1.024    c-1.536,1.024-1.536,2.56-1.024,3.584c1.024,2.048,3.072,3.584,5.632,4.608c5.632,2.56,9.216,7.168,10.24,12.288    c1.024,6.656-3.072,13.824-11.264,21.504c-6.656,6.144-15.36,7.68-23.552,9.216c-2.048,0-4.096,0.512-6.144,1.024    c-1.536,0.512-2.56,1.536-2.048,3.072c0.512,1.024,1.536,2.048,2.56,2.048c0.512,0,0.512,0,1.024,0.512    c1.536-0.512,3.584-0.512,5.632-1.024c8.704-1.536,18.432-3.584,26.112-10.752c9.728-9.216,13.824-17.92,12.8-26.112    C295.33,281.474,290.21,275.842,283.042,272.258z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M276.898,264.578h0.512c1.536,0,2.56-0.512,3.072-1.536l0.512-1.024v-0.512c0-1.536-0.512-2.56-2.048-3.072    c-1.024-0.512-2.56,0.512-3.072,2.048l-0.512,1.024C274.85,262.53,275.362,264.066,276.898,264.578z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M322.978,224.13c2.56-8.704,5.12-16.896,16.896-19.968c1.536-0.512,2.56-1.536,2.048-3.072    c-0.512-1.536-1.536-2.56-3.072-2.048c-14.848,3.072-17.92,14.336-20.48,23.04c-2.56,9.728-4.608,15.872-18.432,13.312    c-13.617-2.476-25.169-1.397-32.296-0.157c-5.983-0.296-13.653,3.093-17.88,12.957c-0.512,2.048-1.536,4.096-2.048,6.144    c-2.56,8.192-4.608,15.872-15.36,15.872c-13.824,0-19.968,11.264-20.992,17.408c0,1.536,0.512,2.56,2.56,3.072    c1.024,0,2.048-1.024,2.048-2.048c0-0.512,2.56-12.8,15.872-13.312c14.336-0.512,17.92-10.752,20.48-19.456    c0.512-2.048,1.536-4.096,2.048-5.632c1.82-4.161,4.301-6.731,6.906-8.191c-0.062,0.134-0.142,0.296-0.25,0.511    c0,0,3.302-1.029,8.829-1.841c3.964,0.937,6.575,4.285,7.043,8.497c0,0.512,0,1.536,0,2.048c0,1.536,1.024,2.56,2.56,2.56    s2.56-1.024,2.56-2.56c0-1.024,0-1.536,0-2.56c-0.258-3.348-1.682-6.435-3.946-8.808c5.814-0.321,12.77-0.162,20.33,1.129    C316.834,244.61,320.418,233.858,322.978,224.13z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M354.722,191.874c-1.536,1.536-3.584,2.56-6.144,3.584c-1.536,1.024-2.048,2.048-1.536,3.584    c0.512,1.024,1.536,1.536,2.56,1.536c0.512,0,0.512,0,1.536-0.512c3.072-1.536,5.12-3.072,7.168-4.608    c1.024-1.024,1.024-2.56,0-3.584S355.746,190.85,354.722,191.874z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M359.842,182.146l-2.56,0.512c0,1.536,0,2.56,0,4.096c0,1.536,0.512,2.56,2.56,3.072c1.536,0,2.56-0.512,2.048-2.048    c0.512-2.048,0.512-3.584,0.512-5.12L359.842,182.146z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M349.09,242.05c1.024-1.024,1.536-2.56,0.512-3.584c-1.024-1.024-2.56-1.536-3.584-0.512    c-2.56,2.048-9.728,10.24-0.512,26.624c3.584,6.144,0.512,11.264-3.584,14.336c-4.096,3.072-9.728,4.096-13.312,0    c-1.024-1.024-2.56-1.024-3.584-0.512c-1.024,0.512-1.536,2.048-1.024,3.072c0,0,3.072,6.656,0.512,11.776    c-1.536,3.072-5.12,5.632-10.24,6.656c-1.536,0.512-2.56,1.536-2.048,3.072c0.512,1.024,1.536,2.048,2.56,2.048    c0.512,0,0.512,0,1.024-0.512c7.168-1.536,11.776-4.608,13.824-9.216c1.536-3.072,1.536-6.656,1.024-9.216    c4.608,1.024,9.728,0,13.824-3.072c6.144-4.096,10.24-12.288,5.12-20.992C342.434,249.218,347.554,243.586,349.09,242.05z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M158.626,65.41c0.512,0.512,1.536,1.024,2.048,1.024c1.024,0,1.536-0.512,1.536-1.024c1.024-1.024,1.024-2.56,0-3.584    l-0.512-0.512c-1.024-1.024-2.56-1.024-3.584,0s-1.024,2.56,0,3.584L158.626,65.41z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M161.698,69.506c1.024,1.536,1.024,3.072,1.024,4.608c0,1.024,1.024,2.56,2.56,2.56c1.536,0,2.56-1.024,2.56-2.56    c0-2.56-0.512-4.608-1.536-7.168c-1.024-1.024-2.56-1.536-3.584-1.024C161.698,66.946,161.186,68.482,161.698,69.506z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M154.018,191.874c10.24,3.072,14.336,6.144,15.872,8.704c1.536,2.048,1.024,3.584,1.024,3.584    c-0.512,1.024,0,2.56,1.536,3.072c0.512,0,0.512,0,1.024,0c1.024,0,1.536-0.512,1.024-1.536c0-0.512,1.024-3.072-0.512-6.656    c-2.56-5.12-9.216-9.216-19.456-12.288c-8.704-2.56-14.336-7.168-15.872-13.824c-2.048-7.68,2.048-15.872,6.144-20.48    c2.56-2.048,5.12-4.096,8.192-6.144c6.656-4.608,14.336-10.24,11.776-19.456c-1.536-6.144-4.608-9.728-7.168-12.8    c-4.096-4.608-6.144-7.68-1.024-16.896c1.536-3.072,3.072-5.632,4.608-7.68c1.536-2.56,3.072-4.608,4.096-6.656    c0.512-1.536,0-3.072-1.024-3.584c-1.536-0.512-3.072,0-3.584,1.024c-1.024,2.048-2.048,4.096-3.584,6.656    c-1.536,2.048-3.072,4.608-4.608,7.68c-6.656,12.288-2.56,17.408,1.536,22.528c2.56,3.072,4.608,6.144,6.144,10.752    c1.536,5.632-2.56,8.704-9.728,13.824c-3.072,2.56-6.144,4.608-8.704,7.168c-5.632,5.632-9.728,15.872-7.168,25.6    C136.098,180.098,140.706,187.778,154.018,191.874z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M105.378,127.874c6.656,3.584,12.8,7.168,13.312,15.872c0,1.536,1.024,2.56,2.56,2.56c2.048,0,3.072-1.536,1.536-3.072    c-1.024-11.776-8.704-15.872-15.872-19.968c-6.144-3.584-12.288-6.656-13.824-14.848c-2.56-14.336,12.8-22.016,13.312-22.528    c1.024,0,1.536-1.024,1.536-1.536c0-0.512,0-1.536-0.512-2.048c-3.584-4.608-5.12-10.24-4.096-14.848    c1.536-6.144,7.68-11.264,16.896-14.848c1.536-0.512,2.048-1.536,1.536-3.072c-0.512-1.536-1.536-2.048-3.072-1.536    c-13.824,5.12-18.432,12.8-19.968,17.92c-1.536,5.632,0,11.264,3.584,16.896c-6.656,4.096-15.872,13.824-13.312,26.624    C91.042,119.682,98.722,124.29,105.378,127.874z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M100.77,160.13c14.336,3.072,15.872,12.288,15.872,12.8c0,1.024,1.024,2.048,2.56,2.048    c1.536-0.512,2.56-1.536,2.56-3.072c0-1.024-1.536-13.824-19.968-17.408c-18.432-3.584-24.576-11.776-24.576-11.776    c-1.024-1.024-2.56-1.536-3.584-0.512s-1.536,2.56-0.512,3.584C73.634,146.306,79.778,156.034,100.77,160.13z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M155.554,278.914c-1.024,0-2.56,1.024-2.56,2.56c0,1.024-0.512,2.56-0.512,3.584c0,1.536,0.512,3.072,2.56,3.072    c1.536,0,2.56-1.024,2.56-2.56c0-1.536,0.512-2.56,0.512-4.096C158.114,280.45,157.09,278.914,155.554,278.914z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M153.506,274.818c0,1.536,1.024,2.56,2.56,2.56s2.56-1.536,2.56-3.072c0-2.048-0.512-4.096-1.024-6.144    c-0.512-1.536-1.536-2.56-3.072-2.048c-1.536,0.512-2.56,1.536-2.048,3.072C152.994,271.234,153.506,272.77,153.506,274.818z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M178.594,324.994c0,0-10.752,5.12-17.408,1.536c-3.072-1.536-5.12-5.12-5.632-10.24c0-1.024-0.512-1.536-1.536-2.048    c-1.024,0-2.048,0-2.56,0.512c0,0-6.656,4.608-14.336,3.072c-5.632-1.024-10.752-5.12-15.36-12.288    c0,0-8.192-13.824,1.024-29.696c0.512-1.536,0-3.072-1.024-3.584c-1.536-0.512-3.072,0-3.584,1.024    c-10.24,18.432-1.024,34.304-1.024,35.328c5.632,8.704,11.776,13.312,18.944,14.848c0.402,0.067,0.801,0.122,1.198,0.168    c-1.236,1.96-2.04,4.124-2.734,5.976c-1.024,3.072-2.048,5.12-3.584,6.144c-1.536,0.512-4.608,0-8.704-1.536    c-1.024-0.512-2.048-0.512-2.56,0c-0.512,0.512-1.024,1.024-1.024,2.048c0,0,0,2.048-2.048,4.096    c-2.048,1.536-5.12,2.56-9.728,2.048c-0.512,0-7.68,0-10.752,4.608c-2.048,3.072-1.536,7.68,1.536,13.824    c0,1.024,1.024,1.536,2.048,1.536c0,0,0.512,0,1.024,0c1.024-1.024,1.536-2.56,1.024-3.584c-2.048-4.096-2.56-7.168-1.536-8.704    c1.024-2.048,5.12-2.048,6.144-2.048c6.144,0.512,10.752-1.024,13.824-3.584c1.536-1.536,2.56-3.072,3.072-4.608    c4.096,1.024,7.68,1.024,10.24,0c3.584-1.536,5.12-5.632,5.632-8.192c1.536-4.608,2.56-7.168,6.144-8.192    c0.304-0.101,0.58-0.228,0.835-0.37c1.92-0.451,3.566-1.063,4.797-1.678c1.536,4.608,4.096,8.192,7.68,10.24    c3.072,1.536,5.632,2.048,8.704,2.048c6.656,0,13.312-3.072,13.824-4.096c1.024-1.024,2.048-2.56,1.024-3.584    C181.154,324.994,179.618,324.482,178.594,324.994z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M97.186,334.21c0.512-1.536,0-3.072-1.536-3.584c-8.192-3.584-12.8-8.192-14.336-13.824    c-2.56-9.728,5.632-19.456,5.632-19.456c1.024-1.024,1.024-2.048,0.512-3.072c-0.512-1.024-1.536-1.536-2.56-1.536    c-6.656,1.024-12.288,0.512-16.384-1.536c-1.536-0.512-3.072,0-3.584,1.536c-0.512,1.536,0,3.072,1.536,3.584    c4.096,2.048,8.704,2.56,13.824,2.56c-2.56,4.608-5.632,11.776-3.584,19.456c2.048,7.68,7.68,13.312,17.408,17.408    c0.512,0,0.512,0,1.024,0C96.162,335.746,97.186,335.234,97.186,334.21z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M60.834,260.994c0-0.512-1.024-1.024-1.536-1.024c-9.216-1.536-13.312-5.632-13.312-12.288c0-1.536-1.024-2.56-2.56-2.56    s-2.56,1.024-2.56,2.56c0,5.12,2.048,13.824,14.848,16.896c-1.024,4.096-2.048,11.264,0,18.432    c0.512,1.536,1.536,2.048,2.56,2.048c0,0,0.512,0,1.024-0.512c1.024-0.512,2.048-1.536,1.536-3.072    c-2.56-8.704,0.512-18.432,0.512-18.432C61.346,262.53,61.346,261.506,60.834,260.994z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M44.45,241.538c0,0.512,0.512,0.512,1.024,0.512c1.024,0,2.048-0.512,3.072-2.048c0-0.512,0.512-1.024,0.512-1.024    c0.512-1.024,0.512-2.56-0.512-3.584c-1.024-0.512-2.56-0.512-3.584,0.512c-0.512,0.512-1.024,1.024-1.536,2.048    C42.914,239.49,43.426,241.026,44.45,241.538z">
                                                                                    </path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                Neurosurgery</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a2d9654 elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="a2d9654" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 403.4 403.4"
                                                                        style="enable-background:new 0 0 403.4 403.4;"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <path
                                                                                d="M212.9,139.3c-3.4,18.1-19.1,65.1-42.5,81.9C141.3,242,136,267,128.2,277.3c-13.5,17.9-32.2,23.2-43.8,19.8  c-21.2-6.1-37-19.9-37-47.4v-72.4c0-3.2-2.6-5.9-5.9-5.9s-5.9,2.6-5.9,5.9v72.4c0,15.7,4.8,31.8,15.9,42.9  c10,10,20.2,14.4,34.4,16.2c2.3,0.3,4.7,0.4,7.1,0.4c23.3-2.4,36.5-14.5,44.5-26.7c8.8-13.5,14.2-33.8,39.9-53  c19.3-14.4,37.9-53.5,44.5-83.8c11.7,4.8,22.4,10.9,30.6,15.3c0.8,0.5,1.8,0.7,2.8,0.7h6.1l8.8,38.4c-2.3,0.8-4.2,2.3-5.5,4.4  c-1.6,2.5-2.1,5.4-1.5,8.2L299,374.5c2,9.2,7.6,17.1,15.5,22.2c5.8,3.7,12.3,5.6,19,5.6c2.6,0,5.1-0.3,7.7-0.8  c9.2-2,17.1-7.5,22.2-15.5c5.1-8,6.8-17.5,4.7-26.7c0,0,0,0,0,0c-3.2-14.4-6.3-28.7-9.5-43.1c-8.7-39.5-17.5-79.1-26.2-118.6  c-1.2-5.3-6-8.8-11.3-8.5l-6-27.2h22.2c9.3,0,16.9-7.6,16.9-16.9v-78c0-9.3-7.6-16.9-16.9-16.9h-82c-1,0-2,0.2-2.8,0.7  c-8.1,4.4-18.8,13-31.7,18.2c-1.9-4.9-4.2-12.6-6.8-16.8c-14.9-24.5-40.9-41.8-71.2-47.5C113.2-1,84.1,5.1,62.9,21.4  c-27.4,21-27.3,50.5-27.2,79.1l0,19.8c0,3.2,2.6,5.9,5.9,5.9s5.9-2.6,5.9-5.9v-19l0-0.9C47.3,73.5,47.2,48.1,70,30.7  c18.6-14.2,44.3-19.5,70.6-14.6c27.1,5.1,50.2,20.4,63.4,42.1c2.9,4.8,5.4,10.2,7.3,16c-7.5,2.5-15,5.7-22.7,7.5  c-5.4-14.2-15.6-26.7-29.9-34.3c-10.4-5.6-22.8-8.8-35-9.2c-13.3-0.4-25.6,2.6-35.5,8.8c-9.2,5.7-15.6,13.6-19.3,23.7  c-3.5,9.7-2,19.9,0.1,26.5c4.8,15.1,13.5,18.7,22,18.6c1.3,0,2.6,0,3.9,0c5.6,0.1,11.4,2.7,13.6,7.9c4.3,10-7,16.6-9.1,26.3  c-2.9,13.5,14.9,21,3.7,29c-2.5,1.8-13.7,2.4-17.1,3.3C73.3,185.3,64,194,62.7,215.7c0,0.2,0,0.4,0,0.6  c0.7,19.6,10.1,34.9,23.9,38.9c2.4,0.7,4.9,1.1,7.4,1.1c10.9,0,21.9-7,30.9-19.9c8.3-11.9,9.1-28.2,23.4-36.2  c23.3-13.1,35.9-50.9,41.4-68.8C197,133.1,205.7,136.9,212.9,139.3 M347.2,318.6c3.2,14.4,6.3,28.7,9.5,43.1  c1.4,6.2,0.2,12.5-3.2,17.8c-3.4,5.3-8.7,9-14.8,10.4c-6.1,1.4-12.5,0.2-17.8-3.2c-5.4-3.4-9.1-8.7-10.4-14.8L290,279.5l46.3-10.2  c1.7,7.6,3.4,15.2,5,22.8C343.3,300.9,345.2,309.8,347.2,318.6z M320.5,61.6h16.8c2.9,0,5.2,2.3,5.2,5.2v78c0,2.9-2.3,5.2-5.2,5.2  h-16.8V61.6z M141.2,190.7c-14.6,10.9-17.2,26.3-26,38.9c-8,11.5-18.2,16.7-26.4,14.3c-8.8-2.6-17.9-12.5-18.5-26.8  c1.7-26.7,11.8-26,23.3-28.9c4.1-1,10.2-1.1,14.3-3.2c0.1-0.1,1.2-1.1,1.3-1.2c12.1-15.2-4.5-22.1-1.2-33.8  c1.8-7.3,12-17.4,6.7-29.6c-5-8.2-9.7-11.3-19.4-11.5c-1.5,0-4.9-1-6.3-1c-7.9,0.1-11.5-7.6-13.7-14.5c-1.8-5.5-1.4-13.9,0.7-19.9  c2.7-7.6,11.5-14.4,18.4-18.7c15.6-9.7,39.8-7.4,58.7,2.8c11.3,6.1,20.3,16.7,24.9,27.6c-13.3,2.6-24.5,4.4-38.3,5.1  c-2.1,0.1-3.8,1.9-3.8,4v23.1c0,2.1,1.7,3.9,3.8,4c14.2,0.8,24.7,4.5,38.3,7.3C173.4,142.8,162.7,181,141.2,190.7L141.2,190.7z   M144.7,112.2V99.5c22.7-1.8,48.1-8.2,69.8-15.1v44C195.6,122,173.6,115.3,144.7,112.2L144.7,112.2z M250.5,147.2  c-7.4-3.8-17.3-9-27.3-13V79.5c10.1-3.9,19.9-11.1,27.3-15V147.2z M256.2,150V61.6h58.6V150H256.2z M303.1,161.8l6.5,29.6l-28,6.2  l-8.2-35.8H303.1z M274.9,211l46.3-10.2l6,27.8l-46.3,10.2L274.9,211z M282.5,245.3l46.3-10.2l6,27.8l-46.3,10.2L282.5,245.3z">
                                                                            </path>
                                                                        </g>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                Otolaryngology</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-31a0488 elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="31a0488" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 403.4 403.4"
                                                                        style="enable-background:new 0 0 403.4 403.4;"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <path
                                                                                d="M246,217.4c-1.5,0.2-3.1,0.5-4.7,0.7c-2.8,0.5-5.5,0.9-8.2,1.1c-3.7,0.3-7.7-2.6-11.6-5.3c-0.5-0.4-1-0.7-1.5-1.1  c-5.5-3.9-12.5-6.2-20.7-6.8c-11.6-0.8-20.9,3.6-23.4,4.9c-2.2,1.2-4.1,2.7-5.9,4.2c-2.4,2-4.9,4-6.7,3.9c-1.7,0-3.6-0.4-5.6-0.7  c-0.8-0.1-1.6-0.3-2.4-0.4c-1.9-0.3-3-0.5-3.1-0.5c-0.1,0-0.2,0-0.3,0c-35.9-4.7-48.3,11-52.3,25c-1.5,5.1-1.9,10.3-1.4,15.4  l-8.9,7.2c-5.4,4.3-7.3,11.4-4.7,17.7l9.4,23.1c0.5,1.1,0.7,2.3,0.7,3.5l0,83.2c0,1.8,1,3.6,2.6,4.4c4.2,2.2,8.4-0.8,8.4-4.7v-82.9  c0-2.6-0.5-5.2-1.5-7.7l-9.4-23.1c-0.7-1.7-0.1-3.7,1.4-4.9l4.9-3.9c3.4,8.6,9.6,16.3,18,22c2.1,1.4,4.1,2.9,6.1,4.5l-1.7,2.2  c-2.5,3.3-3.9,7.3-3.9,11.4l0,82.8c0,1.8,1,3.6,2.6,4.4c4.2,2.2,8.4-0.8,8.4-4.7v-82.4c0-1.7,0.6-3.3,1.6-4.7l1-1.3  c13.8,14.9,21.6,34.5,21.4,55.3l-0.4,33.9c0,2.9,2.3,5.3,5.3,5.3h1.4c2.9,0,5.3-2.3,5.3-5.3l0.4-33.8c0.3-31.1-15-60.1-40.9-77.5  c-12.6-8.4-18.5-22.8-14.7-35.9c1.5-5.1,6-20.8,39.1-16.5c0.4,0.1,1.5,0.3,3.3,0.5c0.7,0.1,1.4,0.2,2.1,0.4  c2.3,0.4,4.8,0.8,7.4,0.9c0.1,0,0.2,0,0.3,0c6,0,10.6-3.7,14.2-6.6c1.5-1.2,2.9-2.3,4-2.9c0.8-0.4,8.2-4.2,16.9-3.5  c6,0.4,10.9,2,14.7,4.6c0.5,0.3,0.9,0.7,1.4,1c1.2,0.8,2.4,1.7,3.7,2.6c-19,6.6-26.9,11.8-31,15.9c-2.2,2.3-3.2,4.1-2.9,5.5  c0.2,1,0,0.8,0.6,0.7c0.7,0,0.8-0.6,2-2.1c8.8-10.6,31.9-13.1,40.4-15.7c2.1,0.6,4.4,0.8,6.8,0.6c3.1-0.3,6.2-0.7,9.1-1.2  c1.5-0.2,2.9-0.5,4.4-0.7c33.2-4.4,37.8,11.3,39.3,16.5c3.8,13-2.1,27.4-14.7,35.8C246.3,299,231,328,231.3,359.1  c0,4.9-0.1,9.4-0.2,13.8c-0.2,8-0.4,14.9,0.7,20.5c0.6,2.9,3.1,4.8,5.9,4.8c1.3,0,2.7-0.4,4-1.4c1.6-1.3,2.4-3.4,2-5.5  c-0.9-4.2-0.7-10.6-0.5-18c0.1-4.3,0.3-9.1,0.2-14.2c-0.3-27.1,13-52.3,35.6-67.4c16.9-11.4,24.8-31.1,19.5-49.2  C294.3,228.4,282,212.7,246,217.4z">
                                                                            </path>
                                                                            <path
                                                                                d="M307.4,232c-2.1-5.8-7.4-12.8-19.6-21.7c-2.1-1.5-7.6-4.4-10-5.4c13.4-7,22.3-15.3,26.3-23.6c0.5-1,1.9-5.1,1.3-6  c-1.8-2.6-6.3,15.5-29.5,24.2c-2.2,0.8-4.9,2.2-9.5,2.5h-16.6c-0.9,0-1.8,0.4-2.3,1.2c-1.9,2.8,0.1,5.8,2.7,5.8h19.5  c5.3,0.9,10.1,3,14.7,5.3c14.2,7.3,23,22.5,23.9,21.3C308.6,234.8,307.7,232.9,307.4,232z">
                                                                            </path>
                                                                            <path
                                                                                d="M117.1,186c10.8,8,23.9,12.1,36.9,12.1c10.4,0,20.7-2.7,29.4-8c4.7-2.9,9.8-4.5,15.2-4.7c0.1,0,0.1,0,0.2,0  c0.1,0,0.2,0,0.3,0h0.9c5.5,0.2,10.7,1.7,15.4,4.5c2.1,1.2,4.3,2.4,6.6,3.3c15.4,6.4,34.1,5.7,49.9-1.9c13.4-6.5,22.9-17,26.5-29.7  c2.1-7.3,2.2-15.2,0.1-22.6c-2.9-10.6-9.9-20-19.6-26.6c-22.5-15.1-35.8-40.3-35.6-67.4l0.3-32.1c0-2.9-1.7-5.6-4.4-6.7  c-1.8-0.7-1.3-0.3-2.2-0.6c-2.9-0.9-5.3,0.9-5.4,3.9l-0.4,35.3c-0.3,31.1,15,60.1,40.9,77.5c7.3,4.9,12.6,12,14.7,19.8  c1.5,5.4,1.5,10.8-0.1,16.1c-2.7,9.4-9.9,17.3-20.2,22.2c-12.6,6.1-28,6.7-40.1,1.7c-1.8-0.7-3.5-1.6-5.1-2.5  c-3.5-2.1-11.7-4.2-16.9-4.6c3.6-3.7,15.6-5.7,22.5-5.7c5.3,0,8.9,1.7,7-1c-0.6-0.8-5.3-1.4-6.3-1.5c-15.1-1.6-25.2,2.6-34.6,7.2  c-5.7,0.9-11,2.9-16,6c-17.2,10.6-39.6,6.3-52.8-3.5c-11.8-8.8-16.6-21.2-13.2-34c2.1-8,7.4-15.1,14.8-20.1  c25.9-17.4,41.2-46.3,40.9-77.5l-0.4-33.1c0-3.3-2.7-5.9-6-5.9c0,0,0,0-0.1,0c-3.3,0-6,2.8-5.9,6.1l0.4,33.1  c0.3,27.1-13,52.3-35.5,67.4c-9.8,6.6-16.8,16.1-19.7,26.9C94.8,156.9,101.4,174.4,117.1,186z">
                                                                            </path>
                                                                            <path
                                                                                d="M88.6,233.3c-1.1,2.3-1.9,6-0.8,6c1.4,0,7-15.7,24-25c13.3-7.3,34.6-5.3,34.6-5.3c0.9,0,1.8-0.4,2.3-1.2  c1.9-2.8-0.1-5.8-2.7-5.8c0,0-23.5-1.2-25.8-1.5c-12.7-1.4-28.5-24.6-29.3-25.4c-3-3.3-1.4,1.2-0.3,3.5c4,8.3,11.4,19.3,24.6,26.3  c-2.4,1-9.6,5.6-11.6,7.3C92.2,221.5,89,232.5,88.6,233.3z">
                                                                            </path>
                                                                        </g>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                orthopedics</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-fba1125 elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="fba1125" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 403.4 403.4"
                                                                        style="enable-background:new 0 0 403.4 403.4;"
                                                                        xml:space="preserve">
                                                                        <g id="Veins">
                                                                            <path
                                                                                d="M368,130.3c-0.4-0.7,1.9-3.6,2.5-4l17.4-9.6c6.6-3.7,9-10.2,5.2-16.8c-2.4-4.3-6.9-5-11.9-5c-4.2,0-3.7,0.3-30.3,12.8  c-3.4,1.6-7.2,2.2-10.9,1.9l-72-7.6c-1.9-0.2-3.3-3.8-3.2-5.7c0.3-9,1-31.6,2.8-89.4c0-2.3-1.9-4.2-4.2-4.2h-78c0,0,0,0-0.1,0  c-2.2,0-4,1.8-4.1,4L178.9,85c-0.7,23.1-3.3,36.4-5.5,43c-2.9,8.1-8.1,19.4-13.4,26.1c-12.9,17.7-25.3,28.1-41.4,42.9  c23-63.5,18.1-46.6,30.4-189.9c0.2-2.3-1.5-4.3-3.8-4.5c-0.1,0-0.3,0-0.4,0H99.9c-2.3,0-4.2,1.9-4.2,4.2l-2.1,42.9L61.5,34  c-2.3-1.2-3.7-3.6-3.6-6.2l0.5-10.1c0.1-5.6-4.3-10.1-9.9-10.2c-5.1-0.1-9.5,3.7-10.1,8.8l-0.8,9.6c-0.3,2.9-2.5,5.3-5.4,5.8  l-15.2,2.7c-6.3,1.1-10.5,7.2-9.4,13.5s7.2,10.5,13.5,9.4l21.7-3.8c2.5-0.4,5,0,7.2,1.2l29.6,16.2c8,4.2,12.9,12.7,12.5,21.8  c-0.8,19.7-0.9,33.2-6.4,55c-2.7-9.9-5.4-13-18.9-33.6c-1.2-1.9-3.8-2.5-5.7-1.2c0,0,0,0,0,0c-1.9,1.3-2.4,3.8-1.2,5.7l7.7,11.7  l-13.3,2c-2.3,0.2-4,2.2-3.8,4.5s2.2,4,4.5,3.8c0.5,0,3.6-0.5,17.7-2.6c6.9,11,8.6,24.6,4.4,37l-10.1,29.1c-3.4-0.9-6.9-0.6-10,1.1  c-3.7,2.7-5.4,7.9-3.8,12.6c1.5,2.9,4,5.1,7,6.3c-5.7,18.5-9.6,40.8-9.6,60.2v113c0,2.3,1.9,4.2,4.2,4.2h37.2  c2.3,0,4.2-1.9,4.2-4.2V282.4l14.2-37.1c3.3-8.7,10.2-18.6,16.7-25.3l27.3-28.1c-28,67.2-25.1,68.4-25.1,167.4l-15.6-11.3  c-1.9-1.4-4.5-2.9-5.8-1.1c-1.4,1.9-0.9,3.5,0.9,4.8l20.5,14.9v30.6c0,2.3,1.9,4.2,4.2,4.2h77.9c2.3,0,4.2-1.9,4.2-4.2v-46  l34.7-36.8c7.6-8,18.1-12.5,29.1-12.5h25.5c9.9,0,19.2,5.1,24.4,13.5l8.6,13.5c1.9,3,5.1,5,8.6,5.3c6.4,0.6,12-4.1,12.6-10.4  c0.2-2.4-0.3-4.8-1.5-6.9l-13-22.8c-2.3-4-2.4-9-0.2-13.1l12.5-23.9c3.4-6.1,1.3-13.8-4.8-17.3c-6.1-3.4-13.8-1.3-17.3,4.8  l-14.9,25.3c-1.6,2.6-4.5,4.2-7.5,4.2h-29.6l10.7-18.9c3.3-6.3,0.8-14.1-5.6-17.3c-5.9-3.1-13.2-1.1-16.8,4.6L254,271.6  c-2.5,4.2-1.5,2.7-38.8,39.7c0-31.4-1.4-54,11.8-87.2l8.3-21.5c24.4-15.8,20.8-15,51.4-18.1c2.3-0.2,4-2.2,3.7-4.5l0,0  c-0.2-2.3-2.3-4-4.6-3.7l0,0l-10.4,1l3.4-13.3c0.6-2.2-0.8-4.5-3-5c-2.2-0.6-4.5,0.8-5,3l0,0l-4.2,16.6  c-9.4,1.5-18.4,5.3-26.1,10.9c4.3-10.9,14.6-35.8,17.4-46.7c2-7.2,9-13.8,16.4-12.9l58.1,5.2c6.6,0.6,14.6,6.4,17.9,12.1l20.8,34.8  c3.6,6.3,9.6,6.4,15.8,2.9s6.4-9.6,2.9-15.8L368,130.3z M103,92.9c0.6-12.2-8.9-20.7-19.6-26.5L53.8,50.3c-3.8-2-10.2-2.7-14.5-2  l-19.7,3.6c-1.8,0.3-6-1-6.8-5.7c-1-4.1,3.8-6.5,5.5-6.9c0,0,0.1,0,0.1,0l15.1-2.6c6.7-1,8.8-3.5,9.5-10.2l0.9-9.5  c0.1-0.8,0.3-4.8,4.5-4.5c3.8,0,4.8,3.8,4.8,4.8c0,0,0,0,0,0l-0.5,10.1c-0.3,5.8-0.1,8.3,5.1,11c36.8,19,37.4,19.1,37.8,19.5  c2,1.2,6.9,3.7,7.7,1.6c1.5-3.7,1.6-11.5,1.6-12.3l2-39.6h30.5L132,81.6c-1.6,40-7.5,64.9-13.1,80.4c-14.4,40-18.7,48.1-20.6,49.5  c-0.7,0.7-1.7,1.2-2.7,1.4c-1.3,0.6-3.2-0.1-4.2-0.2c-4.5-1.3-7.1-2.6-14.8-5.2c19.7-57.3,21.6-64.9,26.5-114.7L103,92.9z   M85.6,393.1H75v-28.6c0-2.3,0.1-4.2-2.2-4.2c-2.3,0-3.2,1.9-3.2,4.2v28.5h-8.8V284.2c0-18.5,3.8-39,9.3-56.7l8.1,2.7  c0.8,0.2,7.7,1.7,9,4.6c0.8,1.8-0.5,5.1-19.1,55.7c-2.8,7.5-3,13.8,4.5,16.6c0.1,0,0.1,0,0.2,0.1c4.8,1.7,9.1,0.8,13-2.4  L85.6,393.1z M255.6,280.5c4.7-4.6,2.1-3.5,19.3-33.5c1.2-2.2,7-3.1,9.2-1.9c0.9,0.5,1.7,1.3,2.1,2.3c0.6,1.3,2.5,3.9,1.8,5.2  l-11.1,19.6c-2.1,3.8-2.8,4.6,1,6.7c1.2,0.7,2.5,1,3.8,1h30.5c6,0,8.5-0.2,11.6-5.3l15-25.3c1.1-2.1,6.8-2.8,8.8-1.7  s4.8,3.8,3.7,5.8l-12.5,23.9c-3.5,6.6-3.4,14.6,0.4,21.1l13.1,22.6c0.8,1.6-1.9,3.5-3.5,4.3c-0.6,0.3-1.2,0.4-1.8,0.3  c-1-0.1-2.9,0.4-3.4-0.5l-7.4-11.5c-6.8-10.8-18.7-17.4-31.4-17.3h-25.5c-13.3,0-26.1,5.5-35.3,15.2l-28.7,30.4v-21.2L255.6,280.5z   M383.8,178.3c-1.6,2-4.6,2.3-6.6,0.7c-0.5-0.4-0.9-0.9-1.2-1.4l-20.8-34.9c-4.8-8.1-13.1-13.3-22.4-14.2l-57.7-4.9  c-11.5-1-25.1,6.5-27.9,17.7c-2.4,9.2-9.6,26.7-30.8,80.4C202,258.5,204,284,204,322c0,1.1,0-3.6,0,27.6c0,4.5,0-16.2,0,43.6h-35.6  v-35.5l11.7,11.2c1.6,1.7,5,3.6,5.9,3.1c1.7-1.6,1.7-3.2,0.1-4.9l-17.7-17.5c0-66.8,0-67,0.3-73.9l7.3-4.4  c10.6-6,16.5-17.1,22.2-28c1.1-2,1.7-4.5-0.6-4.6c-2.7-0.2-4.5,4.6-5.6,6.6c0,0.1-0.1,0.1-0.1,0.2c-6.6,12.5-10.4,17.9-23.3,24.4  c0.9-7.3,2.3-17.6,4.2-24.8c0.6-2.6,1-5.4-1.2-6.1c-0.1,0,0,0-0.1,0c-2.2-0.6-3.3,1.6-3.8,3.9c0,0,0,0,0,0  c-3.7,14.4-5.6,29.2-5.6,44.1v106h-21.7V287c0-21.3,4-42.5,11.9-62.3l18.6-54.8c0.8-2.1-0.2-4.6-2.3-5.4c-2.1-0.8-4.6,0.2-5.4,2.3  l0,0l-5.9,15l-36.3,37.4c-7.2,7.5-12.9,16.3-16.6,26c-25.4,66.5-16.2,42.3-20.1,52.5c-1.2,3.2-4.7,4.9-7.9,3.7  c-1.6-0.6-2.9-1.7-3.5-3.3c-0.7-1.5-0.7-3.3,0-4.8l19.3-52.1c2.5-9,1.2-12.1-6.8-14.7c-0.2-0.1-0.4-0.1-0.6-0.2l-21.9-6.8  c-2.3-0.7-5.9-2.8-5.9-5.2c0-3.4,1.5-6.5,4.5-6.5c3,0.5,6.1,1.1,6.7,1.3c24.9,8.3,25.5,9.8,31.9,8.7c4-0.7,7.6-1.5,10.5-4.3  c21.5-21,39-32.6,60.6-62.8c5.8-7.4,10.4-17.7,13.4-26.6c2.5-7.4,4.9-25.1,5.2-32.9l2.8-83.3h30.5l-1.2,42  c-0.4,12.8,3.1,24.3,10.1,35c1.3,1.9,1.9,3.5,3.8,2.2c1.9-1.3,2.5-3.9,1.2-5.8c-6.1-9.2-9.2-20.1-8.8-31.2l1.2-42.2h26.7  c-1.7,54.7-2.3,79.3-2.6,88.1c-0.2,6.2,7.5,11.5,13.6,12.1l72.2,7.7c5.3,0.5,10.5-0.4,15.3-2.6l24.5-11.4c2.7-1.2,6,0,7.2,2.8  c1.1,2.5,0.2,5.5-2.2,6.9l-17.4,9.6c-4.7,2.6-6.4,8.5-3.8,13.2c24.4,43.7,21.2,38.2,21.6,38.6C385.4,174.7,385.1,176.8,383.8,178.3  z">
                                                                            </path>
                                                                            <path
                                                                                d="M228.7,152.2c-2.1-1-3.6,1.9-4.5,4c0,0,0,0,0,0l-12.2,25.8c-1,2.1-2.1,4.6,0,5.5c2.1,1,3.6-1.9,4.5-4l12.1-25.9  C229.6,155.7,230.7,153.2,228.7,152.2z">
                                                                            </path>
                                                                        </g>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a
                                                                        href="{{ url('%d7%aa%d7%97%d7%95%d7%9e%d7%99-%d7%a4%d7%a2%d7%99%d7%9c%d7%95%d7%aa/vascular/index.html') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                Vascular</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-c0862ad elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="c0862ad" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 429.788 429.788"
                                                                        style="enable-background:new 0 0 429.788 429.788;"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <path
                                                                                        d="M396.804,108.751l-2.048-3.584c-14.336-22.016-37.888-35.84-64-38.4l-16.896-1.536    c-15.872-1.536-31.232,5.632-39.936,18.432c-8.192,11.776-9.728,26.624-4.608,39.936l11.776,30.72    c4.952,12.952,6.213,27.036,3.796,40.569c-24.535,27.773-38.502,64.511-36.052,101.255l10.24,118.784    c0,1.536,1.024,2.56,2.56,2.56s2.56-1.024,2.56-2.56l-10.24-118.784c-2.202-32.152,8.486-63.918,27.81-89.446    c-0.222,0.632-0.434,1.267-0.674,1.894c-4.096,10.752-3.072,23.552,2.048,34.304l7.68,16.896    c-8.192,18.432-6.656,38.912,4.608,56.32c11.264,16.896,29.696,27.136,49.664,27.136c4.608,0,8.704-0.512,12.8-1.024l15.36-3.072    c23.552-5.12,41.472-24.064,46.08-47.616l7.168-38.4C435.716,202.447,425.476,151.247,396.804,108.751z M416.772,250.575    l-7.168,38.4c-4.096,19.968-18.944,35.328-38.4,39.424l-15.36,3.072c-3.584,0.512-7.168,1.024-10.752,1.024    c-16.384,0-31.744-8.192-40.96-22.528c-9.109-13.663-10.7-30.824-3.815-46.051c4.431,5.324,9.248,9.455,15.591,13.795    c0.512,0.512,1.024,0.512,1.536,0.512c1.024,0,1.536-0.512,2.048-1.024c1.024-1.024,0.512-2.56-0.512-3.584    c-7.37-4.914-12.448-9.833-17.329-16.579c-0.03-0.106-0.044-0.211-0.079-0.317l-9.216-18.432    c-4.096-8.192-4.608-17.408-1.536-26.112c0.811-2.109,1.518-4.239,2.157-6.378c3.48,6.821,8.121,12.96,13.715,18.154    c0.512,0.512,1.024,0.512,1.536,0.512c0.512,0,1.024-0.512,2.56-0.512c1.024-1.024,1.024-2.56,0-3.584    c-6.656-6.656-11.776-13.824-15.36-22.528c-0.122-0.183-0.244-0.35-0.367-0.504c0.909-4.747,1.395-9.535,1.483-14.328    c2.761-7.097,8.768-12.869,16.292-15.377l8.192-2.56c1.024-0.512,2.048-1.536,1.536-3.072c-0.512-1.024-1.536-2.048-3.072-1.536    l-8.192,2.56c-6.222,1.675-11.417,5.267-15.155,10.013c-0.345-3.429-0.902-6.846-1.669-10.238    c1.899-5.439,4.842-10.453,8.633-14.623l8.192-9.216c1.024-1.024,1.024-2.56,0-3.584s-2.56-1.024-3.584,0l-8.192,9.216    c-2.836,3.093-5.28,6.577-7.207,10.383c-0.464-1.419-0.957-2.834-1.497-4.239l-11.776-30.72    c-4.096-10.24-2.56-21.504,3.584-30.72c6.144-9.216,16.384-14.336,27.136-14.336c1.024,0,2.048,0.512,3.584,0.512l16.896,1.536    c23.04,2.048,43.52,14.336,56.32,33.792l2.048,3.072C415.748,154.319,425.476,202.959,416.772,250.575z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M120.324,94.927c0.512,0,1.536,0,2.048-1.024c1.024-1.024,0.512-2.56-0.512-3.584l-3.584-2.56    c-1.024-1.024-2.56-0.512-3.584,0.512s-0.512,2.56,0.512,3.584l3.584,2.56C119.3,94.927,119.812,94.927,120.324,94.927z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M127.492,211.663c1.024-1.024,1.536-2.56,0.512-3.584c-1.024-1.024-2.56-1.536-3.584-0.512    c-1.536,1.024-2.56,1.536-4.096,2.56c-1.536,1.024-1.536,2.56-1.024,3.584c0.512,0.512,1.024,1.024,2.048,1.024    c0.512,0,0.512,0,2.048-0.512C124.932,213.711,125.956,212.687,127.492,211.663z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M332.804,280.783l-4.096-2.048c-1.536-0.512-3.072-0.512-3.584,1.024c-0.512,1.536,0,3.072,1.024,3.584l4.096,2.048    c0,0.512,0.512,0.512,1.024,0.512c1.024,0,2.048-0.512,2.56-1.536C334.34,282.831,333.828,281.295,332.804,280.783z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M322.052,229.071c-1.536-1.024-3.072-1.536-4.096-2.56c-1.024-1.024-2.56-0.512-3.584,0.512    c-1.024,1.024-0.512,2.56,0.512,3.584s2.56,1.536,4.096,2.56c0.512,0.512,1.024,0.512,1.536,0.512c1.024,0,1.536,0,2.56-1.024    C323.588,231.119,323.076,229.583,322.052,229.071z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M160.772,136.399c-0.2-0.2-0.423-0.349-0.655-0.471c-0.277-0.872-0.566-1.741-0.881-2.601l-0.512-2.048    c-4.608-12.288-4.096-26.112,1.536-37.888l10.24-21.504c6.656-13.312,5.632-29.184-2.56-41.472    c-8.704-13.824-24.064-21.504-40.448-19.968l-3.072,0.512c-38.4,3.072-71.68,25.6-90.112,58.88l-10.24,19.456    C4.1,126.159-3.58,167.119,1.54,208.591l1.024,7.168c5.12,38.912,35.328,69.632,74.24,74.752l17.408,2.56    c2.56,0.512,5.632,0.512,8.192,0.512c18.944,0,36.864-9.216,47.616-25.088c11.264-15.36,14.336-34.816,8.704-53.248    l-3.479-10.669l6.039,5.549c9.216,8.704,14.848,20.992,15.36,33.792l3.584,129.024c0,1.536,1.024,2.56,2.56,2.56    c1.536,0,2.56-1.024,2.56-2.048l-3.072-129.536c-0.512-14.336-6.656-28.16-17.408-37.376l-12.825-11.785l-0.999-3.063    l5.632-10.752c5.749-11.115,7.48-23.665,5.625-35.716l14.855,15.236c19.968,21.504,32.256,50.688,30.208,80.384l-7.168,78.336    c0,1.024,1.024,2.56,2.56,2.56s2.56-1.024,2.56-2.048l7.168-78.336c2.048-31.232-10.24-61.952-31.744-84.48L160.772,136.399z     M142.852,262.863c-10.752,14.848-28.672,22.528-46.592,19.968l-17.408-2.56c-34.304-4.608-60.928-31.744-65.536-66.048    l-1.024-7.168c-5.12-38.912,2.048-77.824,20.992-112.64l10.24-19.456c16.896-30.72,47.104-50.688,81.92-53.76l2.56-0.512    c1.024,0,2.048,0,3.072,0c11.264,0,22.016,6.144,28.16,15.36c6.144,9.728,6.656,21.504,2.048,31.744l-10.24,21.504    c-3.825,8.239-5.61,17.323-5.377,26.378c-4.057-6.511-8.979-12.477-14.591-17.674c-1.024-1.024-2.56-1.024-3.584,0    c-1.024,1.024-1.024,2.56,0,3.584c12.436,11.939,21.47,27.747,24.323,44.601c-5.426-6.566-13.659-10.809-22.787-10.809h-8.704    c-1.536,0-2.56,1.024-2.56,2.56s1.024,2.56,2.56,2.56h8.704c11.264,0,20.992,8.192,23.552,18.944v0.512    c0.046,0.092,0.101,0.183,0.154,0.274c-0.646,5.551-2.211,11.008-4.762,16.11l-0.146,0.305c-0.387,0.287-0.698,0.692-0.878,1.231    c-3.584,8.704-8.704,16.384-15.36,22.528c-1.024,1.024-1.024,2.56,0,3.584c0.512,0.512,1.536,1.024,2.048,1.024    c0.512,0,1.536,0,2.048-1.024c2.577-2.393,4.946-4.991,7.102-7.757l2.083,6.509l0.031,0.736    c0.512,13.824-5.12,27.136-16.384,35.84l-4.608,3.584c-1.024,1.024-1.536,2.56-0.512,3.584c0.512,0.512,1.536,1.024,2.048,1.024    c0.512,0,1.024,0,1.536,0l4.608-3.584c8.945-7.081,15.157-17.151,17.491-28.029l0.941,2.941    C154.628,234.191,152.068,250.063,142.852,262.863z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M201.22,337.615c-1.024,0-2.56,1.024-2.56,2.56l-1.024,15.872c0,1.024,1.024,2.56,2.56,2.56    c1.024,0,2.56-1.024,2.56-2.56l1.024-15.872C203.78,339.151,202.756,337.615,201.22,337.615z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M199.684,363.727c-1.024,0-2.56,1.024-2.56,2.56l-0.512,5.12c0,1.024,1.024,2.56,2.56,2.56    c1.024,0,2.048-1.024,2.56-2.56l0.512-5.12C202.244,365.263,201.22,363.727,199.684,363.727z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M281.092,284.879c-1.024,0-2.56,1.024-2.56,2.56v6.656c0,1.536,1.024,2.56,2.56,2.56c1.024,0,2.56-1.024,2.56-2.56    v-6.656C283.652,285.903,282.628,284.879,281.092,284.879z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M280.58,305.359c-1.536,0-2.56,1.024-2.56,2.56l-2.56,109.056c0,1.536,1.024,2.56,2.56,2.56    c1.024,0,2.048-1.536,2.56-2.56l2.56-109.056C283.14,306.383,282.116,305.359,280.58,305.359z">
                                                                                    </path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                urology</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-42f52cf elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="42f52cf" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 403.4 403.4"
                                                                        style="enable-background:new 0 0 403.4 403.4;"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <path
                                                                                d="M344.1,355.2c5.5,0,9.9-4.4,9.9-9.9v-51.5c0-5.5-4.4-9.9-9.9-9.9h0h-13c-5.7,0-10.3-4.6-10.3-10.3v-22.4  c4.7-5.9,8.9-12.1,12.7-18.6c13.4-23.3,20.5-49.9,20.5-76.9c0-51.2-21.8-79.8-32.6-93.4C306.7,41.5,265.6,3.2,200,1.7  c-28.1-0.7-49.5,7.8-58.2,11.4c-36.7,15-57.8,40.3-66.6,52.3c-6.4,8.9-14.7,22.2-20.8,39.9c-3.3,9.6-8.4,27.4-8.4,50.4  c0,27,7.1,53.6,20.5,76.9c3.8,6.5,8,12.7,12.7,18.6v22.4c0,5.7-4.6,10.3-10.3,10.3h-13c-5.5,0-9.9,4.4-9.9,9.9v51.5  c0,5.5,4.4,9.9,9.9,9.9h63.8c4.1,4.6,10.3,9,19.4,12.9v24.2c0,5.5,4.4,9.9,9.9,9.9H251c5.5,0,9.9-4.4,9.9-9.9v-24.2  c9.1-3.9,15.3-8.3,19.4-12.9C286.6,355.2,338.3,355.2,344.1,355.2z M299.3,343.5c-4.1,0-8.2,0-12.3,0c0.7-2.5,0.9-4.9,0.9-7v-36.3  c0-0.6-0.1-1.2-0.3-1.8l0,0l-4.2-13.1c9.3-6,17.9-13,25.7-20.8v9.2c0,12.1,9.9,22,22,22h11.2c0,16,0,31.9,0,47.9  C327.9,343.5,313.6,343.5,299.3,343.5z M84.8,72.3c7.4-10.1,18.8-23,35.3-34.3c7-4.7,13.7-8.4,19.9-11.3  c38.2,16.1,81.6,16.1,119.9,0c48.6,22.7,82.4,72,82.4,129c0,25-6.6,49.5-19,71c-10.8,18.7-25.8,34.8-43.7,46.9l-19.1-59.3  c15.3-15.8,23.7-36.4,23.7-58.6c0-46.4-37.8-84.2-84.2-84.2s-84.2,37.8-84.2,84.2c0,22.1,8.4,42.8,23.7,58.6l-19.1,59.3  c-17.9-12.1-32.9-28.2-43.7-46.9c-5.1-8.8-18.9-35-19-71c0-21.4,4.8-38.1,7.9-46.8C71.3,92.7,78.8,80.4,84.8,72.3z M156.4,20.2  c27.6-8.8,60.2-9.2,95.6,2.4c-30,13-75.7,11.7-103.7,0.3L156.4,20.2z M123.9,320.1V306h152.3v14.1h-38.7c-2.5,0-4.5,2-4.5,4.5V341  h-65.8v-15.7c0.2-3.8-2.2-5.2-5.2-5.2H123.9z M126.1,294.2l28.4-88.2h17.2V222c0,5.1,4.2,9.3,9.3,9.3h38c5.1,0,9.3-4.2,9.3-9.3  v-15.9h17.2l28.4,88.2L126.1,294.2z M222.6,206.1v15.8c0,2.1-1.7,3.7-3.7,3.7h-37.8c-2.1,0-3.7-1.7-3.7-3.7v-15.8H222.6z   M127.5,155.7c0-40,32.5-72.5,72.5-72.5s72.5,32.5,72.5,72.5c0,16.9-5.7,32.8-16.2,45.6l0-0.2c-1.3-4.1-5.1-6.9-9.4-6.9h-93.7  c-4.3,0-8.1,2.8-9.4,6.9l0,0.2C133.2,188.5,127.5,172.6,127.5,155.7L127.5,155.7z M57.7,343.5v-47.9h11.2c12.1,0,22-9.9,22-22v-9.2  c7.8,7.8,16.4,14.8,25.7,20.8l-4.2,13.1l0,0c-0.2,0.6-0.3,1.3-0.3,1.8v36.3c0,2.2,0.3,4.5,0.9,7H57.7z M150.8,390.5v-18.2  c14.1,4.1,31.2,6.3,49.2,6.3s35.1-2.2,49.2-6.3v18.2H150.8z M200,366.8c-20.5,0-40.2-3.2-54.2-8.7c-27.7-10.9-20.8-30.3-21.9-32.3  h37.5v15.5c0,3,2.4,5.5,5.5,5.5h67c2.6,0,4.8-2.1,4.8-4.8v-16.1h37.5c-0.3,3.2,1.2,13.7-3.1,19.7  C258.3,362.8,222.6,366.8,200,366.8L200,366.8z">
                                                                            </path>
                                                                            <path
                                                                                d="M205.9,55.6v-0.8c0-3.2-2.6-5.9-5.9-5.9s-5.9,2.6-5.9,5.9v0.8c0,3.2,2.6,5.9,5.9,5.9S205.9,58.9,205.9,55.6z">
                                                                            </path>
                                                                            <path
                                                                                d="M100,161.6c3.2,0,5.9-2.6,5.9-5.9c0-3.2-2.6-5.9-5.9-5.9h-0.8c-3.2,0-5.9,2.6-5.9,5.9c0,3.2,2.6,5.9,5.9,5.9H100z">
                                                                            </path>
                                                                            <path
                                                                                d="M300.9,161.6c3.2,0,5.9-2.6,5.9-5.9c0-3.2-2.6-5.9-5.9-5.9h-0.8c-3.2,0-5.9,2.6-5.9,5.9c0,3.2,2.6,5.9,5.9,5.9H300.9z">
                                                                            </path>
                                                                        </g>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                image</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-721f23e elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="721f23e" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 403.4 403.4"
                                                                        style="enable-background:new 0 0 403.4 403.4;"
                                                                        xml:space="preserve">
                                                                        <path
                                                                            d="M315.1,347.4L315.1,347.4c-3.4,0-6.1,2.7-6.1,6.1c0,3.4,2.7,6.1,6.1,6c3.4-0.1,6.1-2.7,6-6.1 C321.2,350.1,318.5,347.4,315.1,347.4z">
                                                                        </path>
                                                                        <path
                                                                            d="M315.1,323.2L315.1,323.2c-3.4,0-6.1,2.7-6.1,6.1c0,3.4,2.7,6.1,6.1,6c3.4,0,6.1-2.7,6-6.1 C321.2,325.9,318.5,323.3,315.1,323.2z">
                                                                        </path>
                                                                        <path
                                                                            d="M315.1,299.2L315.1,299.2c-3.4,0-6.1,2.7-6.1,6.1c0,3.4,2.7,6.1,6.1,6c3.4,0,6.1-2.7,6-6.1 C321.2,301.9,318.5,299.2,315.1,299.2z">
                                                                        </path>
                                                                        <path
                                                                            d="M315.1,275.1L315.1,275.1c-3.4,0-6.1,2.7-6.1,6.1c0,3.4,2.7,6.1,6.1,6c3.4,0,6.1-2.7,6-6.1 C321.2,277.8,318.5,275.1,315.1,275.1z">
                                                                        </path>
                                                                        <path
                                                                            d="M315.1,250.9L315.1,250.9c-3.4,0-6.1,2.7-6.1,6.1c0,3.4,2.7,6.1,6.1,6c3.4,0,6.1-2.7,6-6.1 C321.2,253.6,318.5,250.9,315.1,250.9z">
                                                                        </path>
                                                                        <path
                                                                            d="M315.1,226.8L315.1,226.8c-3.4,0-6.1,2.7-6.1,6.1c0,3.4,2.7,6.1,6.1,6c3.4,0,6.1-2.7,6-6.1 C321.2,229.5,318.5,226.8,315.1,226.8z">
                                                                        </path>
                                                                        <path
                                                                            d="M315.1,202.7L315.1,202.7c-3.4,0-6.1,2.7-6.1,6.1s2.7,6.1,6.1,6c3.4,0,6.1-2.7,6-6.1C321.2,205.4,318.5,202.8,315.1,202.7z">
                                                                        </path>
                                                                        <path
                                                                            d="M315.1,178.6L315.1,178.6c-3.4,0-6.1,2.7-6.1,6.1s2.7,6.1,6.1,6c3.4,0,6.1-2.7,6-6.1C321.2,181.3,318.5,178.6,315.1,178.6z">
                                                                        </path>
                                                                        <path
                                                                            d="M315.1,58L315.1,58c-3.4,0-6.1,2.7-6.1,6.1s2.7,6.1,6.1,6c3.4,0,6.1-2.7,6-6.1C321.2,60.7,318.5,58,315.1,58z">
                                                                        </path>
                                                                        <path
                                                                            d="M315.1,154.5L315.1,154.5c-3.4,0-6.1,2.7-6.1,6.1s2.7,6.1,6.1,6c3.4,0,6.1-2.7,6-6.1C321.2,157.2,318.5,154.5,315.1,154.5z">
                                                                        </path>
                                                                        <path
                                                                            d="M315.1,130.3L315.1,130.3c-3.4,0-6.1,2.7-6.1,6.1s2.7,6.1,6.1,6c3.4,0,6.1-2.7,6-6.1C321.2,133.1,318.5,130.3,315.1,130.3z">
                                                                        </path>
                                                                        <path
                                                                            d="M315.1,106.3L315.1,106.3c-3.4,0-6.1,2.7-6.1,6.1s2.7,6.1,6.1,6c3.4,0,6.1-2.7,6-6.1C321.2,109,318.5,106.3,315.1,106.3z">
                                                                        </path>
                                                                        <path
                                                                            d="M315.1,82.1L315.1,82.1c-3.4,0-6.1,2.7-6.1,6.1s2.7,6.1,6.1,6c3.4,0,6.1-2.7,6-6.1C321.2,84.8,318.5,82.2,315.1,82.1z">
                                                                        </path>
                                                                        <path
                                                                            d="M375.3,396.1c3.3,0,6-2.7,6-6V15.3c0-3.3-2.7-6-6-6c-23.3,0-42.2,19-42.2,42.2v302.4C333.2,377.2,352,396.1,375.3,396.1z  M345.2,51.5c0-14.3,10.1-26.7,24.1-29.6v361.5c-14-2.9-24.1-15.2-24.1-29.6V51.5z">
                                                                        </path>
                                                                        <path
                                                                            d="M134.3,190.7h-2v-21.9h0.4c13.3,0,33.3-0.1,38,1.9c1.1,3.2,4.4,4.8,7.6,3.8c2.4-0.9,4.2-0.2,4.2-2.8c0-2.4-1-3.8-2.7-5.4 c-5.5-5.5-20.5-5.7-47.1-5.7h-0.4c0-3.3-0.8-6-4.1-6c-3.3,0-4.1,2.7-4.1,6h-0.4c-26.6-0.1-41.6,0.2-47.1,5.7c-1.7,1.6-2.7,3-2.7,5.4 c0,3.3,2.7,3.1,6,3.1c2.6,0,4.9-1.6,5.7-4.2c4.7-2,24.7-1.9,38-1.9h0.4v21.9h-2c-34.3,0-51.7,0.2-57.5,6.1c-1.6,1.6-2.6,2.8-2.6,5.1 c0,3.3,2.7,4.1,6,4.1c2.4,0,4.6-1.5,5.6-3.8c5.6-2.3,30.2-2.3,48.5-2.2h2v20.9h-0.4c-26.6-0.1-41.6,0.2-47.1,5.7 c-1.7,1.6-2.7,3-2.7,5.4c0,3.3,2.7,4.1,6,4.1c2.6,0,4.9-1.6,5.7-4.2c4.7-2,24.7-1.9,38-1.9h0.4v21h-19.8c-3.3,0-6,2.7-6,6 c0,16.6,13.5,30.2,30.2,30.2s30.2-13.5,30.2-30.2c0-3.3-2.7-6-6-6h-20v-21h0.4c13.3,0,33.3-0.1,38,1.9c1.1,3.2,4.4,4.8,7.6,3.8 c2.4-0.9,4.2-1.2,4.2-3.8c0-2.4-1-3.8-2.7-5.4c-5.5-5.5-20.5-5.7-47.1-5.7h-0.4v-21h2c18.4,0,42.9-0.1,48.5,2.2 c1.3,3.1,4.7,4.5,7.8,3.4c2.3-0.9,3.8-1.2,3.8-3.7c0-2.3-1-3.5-2.6-5.1C186.1,190.8,168.7,190.6,134.3,190.7z M151.3,257.6 c-2.7,19.4-18.4,26.6-31.7,20.4c-7.3-3.4-12.7-9.3-14.6-20.4H151.3z">
                                                                        </path>
                                                                        <path
                                                                            d="M25.7,311.2h48.2v48.2c0,13.3,10.8,24.1,24.1,24.1s24.1-10.8,24.1-24.1v-48.2h12.1v48.2c0,13.3,10.8,24.1,24.1,24.1 c13.3,0,24.1-10.8,24.1-24.1v-48.2h48.2c3.3,0,6-2.7,6-6V136.4c0-3.3-2.7-6-6-6H206c-3-20.8-14.8-36.2-35.8-36.2h-19.7 c1.5-1.7,2.8-3.6,4.1-5.6c6-9.4,9.8-21.1,9.8-30.6c0-20-16.1-36.2-36.2-36.2S92,38,92,58c0,9.5,3.8,21.3,9.8,30.6 c1.3,1.9,2.6,3.8,4.1,5.6H86c-21,0-32.8,15.5-35.8,36.2H25.7c-3.3,0-6,2.7-6,6v168.8C19.7,308.5,22.4,311.2,25.7,311.2z  M116.1,358.5c0,10-8.1,18.1-18.1,18.1s-18.1-8.1-18.1-18.1v-47.3H116v47.3H116.1z M99.2,57.8c0-16,13-28.9,28.9-28.9 s28.9,13,28.9,28.9c0,18-11.1,37.5-28.9,37.5C110.7,95.3,99.2,75.8,99.2,57.8z M86,100.3h84.4c14.3,0,25.9,12,29.6,30.1H56.4 C58.7,112.3,71.6,100.3,86,100.3z M31.7,142.4h192.9v156.7H31.7V142.4z M176.1,358.5c0,10-8.1,18.1-18.1,18.1 c-10,0-18.1-8.1-18.1-18.1v-47.3H176v47.3H176.1z">
                                                                        </path>
                                                                        <path
                                                                            d="M297,353.4V64c0-3.3-2.7-6-6-6H182.4c-3.3,0-6-0.2-6,3.1c0,3.3,2.7,3.1,6,3.1h108.3v289h-72.1c-3.3,0-6-0.2-6,3.1 c0,3.3,2.7,3.1,6,3.1h72.3C294.3,359.5,297,356.8,297,353.4z">
                                                                        </path>
                                                                        <path
                                                                            d="M64.5,150.7H43.8c-2.2,0-4,1.7-4,4v38.6c0,1.6,1.3,2.9,2.9,2.9l0,0c1.6,0,2.9-1.3,2.9-2.9v-36.7h18.9c1.5,0,2.9-1.3,2.9-2.9 l0,0C67.4,151.9,66.1,150.7,64.5,150.7z">
                                                                        </path>
                                                                        <path
                                                                            d="M191.6,291.1h20.7c2.2,0,4-1.7,4-4v-38.6c0-1.6-1.3-2.9-2.9-2.9l0,0c-1.6,0-2.9,1.3-2.9,2.9v36.7h-18.9 c-1.5,0-2.9,1.3-2.9,2.9l0,0C188.7,289.8,190,291.1,191.6,291.1z">
                                                                        </path>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                Invasive and vascular radiology</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-748c008 elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="748c008" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 403.4 403.4"
                                                                        style="enable-background:new 0 0 403.4 403.4;"
                                                                        xml:space="preserve">
                                                                        <path
                                                                            d="M96.8,147.8c0-3-4.2-3.2-7.2-3.2c-33.7,0-61,27.4-61.1,61.1c0,3,0.5,5.5,3.5,5.5s3.5-2.5,3.5-5.5 c0-27.6,26.4-54.1,54.1-54.1C92.6,151.6,96.8,150.8,96.8,147.8L96.8,147.8z">
                                                                        </path>
                                                                        <path
                                                                            d="M142.8,32.7c-17.6,0-31.9,14.3-31.9,31.9c0,3,0.5,5.5,3.5,5.5s3.5-2.5,3.5-5.5c0-11.5,9.1-24.9,24.9-24.9 c14.5,0,24.9,13.4,24.9,24.9c0,3,0.5,5.5,3.5,5.5c3,0,3.5-2.5,3.5-5.5C174.7,46.9,160.4,32.7,142.8,32.7L142.8,32.7z">
                                                                        </path>
                                                                        <path
                                                                            d="M111.7,109h2.4c14.9,0,31,16.1,31,31v17.8c0,14.9-16.1,31-31,31c-3,0-5.5,0.5-5.5,3.5s2.5,3.5,5.5,3.5c21,0,38-17,38-38V140 c0-21-17-38-38-38h-2.4c-3,0-5.5,0.5-5.5,3.5C106.2,108.5,108.6,109,111.7,109z">
                                                                        </path>
                                                                        <path
                                                                            d="M148.3,241.3c3,0,6.7-3.8,4.5-6.5c-1.9-2.3-5.5,0-8.6,0c0,0-19.1,7.1-27.3,8.5c-17.3,2.9-35.8-17.2-35.8-34.8 c0-3-0.5-5.5-3.5-5.5c-3,0-3.5,2.5-3.5,5.5c0,23.6,19.7,47.7,42.8,42.8C132.3,248,148.3,241.3,148.3,241.3z">
                                                                        </path>
                                                                        <path
                                                                            d="M166.6,320.3c-21.7,0-43.2-21.6-43.2-43.2c0-3-0.5-5.5-3.5-5.5s-3.5,2.5-3.5,5.5c0,27.7,22.5,50.2,50.2,50.2 c3,0,5.5-0.5,5.5-3.5S169.6,320.3,166.6,320.3z">
                                                                        </path>
                                                                        <path
                                                                            d="M87.6,308.9c-9.2-1.4-18.5-13.9-17.1-23.1c0.5-3,0.5-5.8-2.5-6.3c-3-0.5-3.8,1.5-4.3,4.5c0,0,0,0.1,0,0.1 c-2.3,15.2,8.2,29.3,23.4,31.6c0.3,0,0.5,0.1,0.8,0.1c3,0,5.5-0.5,5.5-3.5C93.3,309.6,90.3,309.3,87.6,308.9z">
                                                                        </path>
                                                                        <path
                                                                            d="M144.2,366.9c-13,0-27.5-14.5-27.5-27.5c0-3-0.5-5.5-3.5-5.5c-3,0-3.5,2.5-3.5,5.5c0,19.1,15.5,34.5,34.5,34.5 c3,0,5.5-0.5,5.5-3.5S147.3,366.9,144.2,366.9z">
                                                                        </path>
                                                                        <path
                                                                            d="M379.1,222.1c-3.9,0-7.7,1-11,3l-71.3-71.3c-1-1-2.4-1.6-3.9-1.6h-87.5v-34h152.6c3,11.6,14.9,18.6,26.6,15.6 s18.6-14.9,15.6-26.6c-3-11.6-14.9-18.6-26.6-15.6c-7.6,2-13.6,8-15.6,15.6H205.4V82.6H293c1.5,0,2.9-0.6,3.9-1.6l23.5-23.5 c10.7,5.6,23.9,1.4,29.4-9.3c5.6-10.7,1.4-23.9-9.3-29.4c-10.7-5.6-23.9-1.4-29.4,9.3c-3.7,7-3.2,15.5,1.1,22.1l-21.5,21.5h-85.2 v-8.3c0-34.6-28.1-62.6-62.6-62.6c-32.7,0-59.8,25.1-62.4,57.7c-26.6,3.9-46.3,26.7-46.3,53.6c0,6.6,1.2,13.2,3.6,19.3 c-41,28.6-51,85.1-22.4,126.1c5.6,8,12.5,15.1,20.4,20.9c-7.1,29,10.7,58.3,39.7,65.5c1.7,0.4,3.4,0.7,5,1 c2.7,34.5,32.8,60.2,67.3,57.5c32.6-2.6,57.7-29.7,57.7-62.4v-1h60.1l23.4,29.8c-7,9.8-4.8,23.5,5.1,30.5c9.8,7,23.5,4.8,30.5-5.1 c7-9.8,4.8-23.5-5.1-30.5c-6.5-4.6-14.9-5.4-22.1-2l-24.9-31.6c-1-1.3-2.6-2.1-4.3-2.1h-62.8v-33h58c3,11.6,14.9,18.6,26.6,15.6 s18.6-14.9,15.6-26.6c-3-11.6-14.9-18.6-26.6-15.6c-7.6,2-13.6,8-15.6,15.6h-58v-33H298c3,11.6,14.9,18.6,26.6,15.6 s18.6-14.9,15.6-26.6c-3-11.6-14.9-18.6-26.6-15.6c-7.6,2-13.6,8-15.6,15.6h-92.6v-33h33c3.3,11.6,15.4,18.2,27,14.9 c11.6-3.3,18.2-15.4,14.9-27c-3.3-11.6-15.4-18.2-27-14.9c-7.6,2.2-13.4,8.3-15.2,16h-32.8v-33h85.2l69.7,69.7 c-6.1,10.4-2.6,23.7,7.8,29.8c10.4,6.1,23.7,2.6,29.8-7.8c6.1-10.4,2.6-23.7-7.8-29.8C386.8,223.1,383,222.1,379.1,222.1 L379.1,222.1z M379.1,96.5c9,0,16.2,7.3,16.2,16.2s-7.3,16.2-16.2,16.2c-9,0-16.2-7.3-16.2-16.2c0,0,0,0,0,0 C362.9,103.8,370.2,96.5,379.1,96.5z M330.4,21.3c9.3,0,16.9,7.6,16.9,16.9S339.8,55,330.4,55c-9.3,0-16.9-7.6-16.9-16.9 c0,0,0,0,0,0C313.6,28.8,321.1,21.3,330.4,21.3z M324,381.4c0,9.6-7.7,17.3-17.3,17.3c-9.6,0-17.3-7.7-17.3-17.3 c0-9.6,7.7-17.3,17.3-17.3h0C316.3,364.2,324,371.9,324,381.4z M284.5,273.5c8.9,0,16.1,7.2,16.1,16.1c0,8.9-7.2,16.1-16.1,16.1 c-8.9,0-16.1-7.2-16.1-16.1c0,0,0,0,0,0C268.4,280.7,275.6,273.5,284.5,273.5z M319.1,228.7c9.4,0,16.9,7.6,16.9,16.9 s-7.6,16.9-16.9,16.9c-9.4,0-16.9-7.6-16.9-16.9c0,0,0,0,0,0C302.2,236.3,309.7,228.7,319.1,228.7z M259.4,184.9 c9,0,16.3,7.3,16.3,16.3c0,9-7.3,16.3-16.3,16.3c-9,0-16.3-7.3-16.3-16.3c0,0,0,0,0,0C243.1,192.2,250.4,184.9,259.4,184.9z  M194.5,340c-0.2,28.5-23.4,51.5-51.9,51.3c-28.2-0.2-51-23-51.3-51.2c0-0.1,0-0.2,0-0.3c0-2.9-2.3-5.3-5.2-5.5 c-23.8-1.2-42.1-21.5-40.9-45.3c0.2-3.8,0.9-7.6,2.1-11.2c0.8-2.3-0.1-4.9-2.2-6.3C8.6,247.1-1,197.6,23.6,161.2 c6.3-9.3,14.4-17.2,23.9-23.1c2.4-1.5,3.3-4.5,2-7.1C39,109.6,47.9,83.8,69.2,73.3c5.2-2.6,11-4.1,16.8-4.4c2.9-0.2,5.2-2.6,5.2-5.5 c0-0.1,0-0.2,0-0.3c0.3-28.5,23.6-51.4,52.1-51.2c28.2,0.2,51,23.1,51.2,51.3L194.5,340z M379.1,260.1c-9,0-16.2-7.3-16.2-16.2 c0-9,7.3-16.2,16.2-16.2s16.2,7.3,16.2,16.2c0,0,0,0,0,0C395.3,252.8,388.1,260.1,379.1,260.1L379.1,260.1z">
                                                                        </path>
                                                                        <path
                                                                            d="M362.8,142.8c-12,0-21.8,9.7-21.8,21.8c0,12,9.7,21.8,21.8,21.8c12,0,21.8-9.7,21.8-21.8c0,0,0,0,0,0 C384.6,152.6,374.9,142.8,362.8,142.8z M362.8,180.9c-9,0-16.3-7.3-16.3-16.3c0-9,7.3-16.3,16.3-16.3c9,0,16.3,7.3,16.3,16.3 c0,0,0,0,0,0C379.1,173.6,371.8,180.9,362.8,180.9z">
                                                                        </path>
                                                                        <path
                                                                            d="M362.8,292.1c-12,0-21.8,9.7-21.8,21.8c0,12,9.7,21.8,21.8,21.8c12,0,21.8-9.7,21.8-21.8c0,0,0,0,0,0 C384.6,301.9,374.9,292.1,362.8,292.1z M362.8,330.2c-9,0-16.3-7.3-16.3-16.3c0-9,7.3-16.3,16.3-16.3c9,0,16.3,7.3,16.3,16.3 c0,0,0,0,0,0C379.1,322.9,371.8,330.2,362.8,330.2z">
                                                                        </path>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                Neuroradiology</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-09971c1 elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="09971c1" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 403.4 403.4"
                                                                        style="enable-background:new 0 0 403.4 403.4;"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <path
                                                                                d="M254.1,57.3c-8.2,4.4-15.9,9.4-22.9,14.9c-2.8,2.2-5.4,4.4-7.9,6.6c-1.3,1.2-1.4,3.2-0.2,4.5c0.6,0.7,1.5,1,2.3,1  s1.6-0.3,2.2-0.8c2.3-2.1,4.8-4.2,7.5-6.3c6.8-5.3,14.2-10.1,22-14.3c1.6-0.8,2.1-2.8,1.3-4.3C257.6,57,255.7,56.5,254.1,57.3  L254.1,57.3z">
                                                                            </path>
                                                                            <path
                                                                                d="M215.6,86.8c-2.1,2.4-4,4.9-5.6,7.4c-1,1.5-0.6,3.5,0.9,4.4c0.5,0.4,1.1,0.5,1.7,0.5c1,0,2.1-0.5,2.7-1.4  c1.4-2.2,3.1-4.5,5.1-6.7c1.1-1.3,1-3.4-0.3-4.5C218.8,85.3,216.8,85.5,215.6,86.8L215.6,86.8z">
                                                                            </path>
                                                                            <path
                                                                                d="M258.9,147.7c-0.4,0.3-34.6,24.5-32.4,67.3c-5.8,2.8-32.9,17.7-32.9,53.6c0,1.8,1.4,3.2,3.2,3.2s3.2-1.4,3.2-3.2  c0-29.5,19.6-42.8,27.1-46.8c0.4,3,1,6.1,1.8,9.2c9.9,39.7,20.8,95.2,0.7,118.6c-1.2,1.3-1,3.4,0.3,4.5c0.6,0.5,1.3,0.8,2.1,0.8  c0.9,0,1.8-0.4,2.4-1.1c17-19.8,17.2-58.2,0.7-124.4C223,181.1,261,154,262.6,152.9c1.4-1,1.8-3,0.8-4.4  C262.3,147,260.3,146.7,258.9,147.7L258.9,147.7z">
                                                                            </path>
                                                                            <path
                                                                                d="M361.5,121.3c-1.1-1.7-2.8-2.8-4.7-3c-0.6-0.1-1.1,0-1.7,0.1H355l-17.6-0.1l0,0c0-0.8,0-1.8,0.1-2.8c0-1.3,0.1-2.8,0.1-4.1  l15.2-2.6c0.1,0,0.1,0,0.2-0.1c0.5,0,1-0.1,1.6-0.2c4.9-1.5,6.7-8.5,4.3-16.7c-1.5-5.1-4.4-9.2-7.6-10.9c-1.7-0.9-3.5-1.1-5.2-0.6  c-0.2,0.1-0.4,0.2-0.6,0.3c-0.1,0-0.2,0-0.3,0L329,85.3c-2.5-4.4-5.4-8.2-8.6-11.3c-1.3-6.5-3.5-12.7-6.6-18.5  c1-0.4,1.9-0.9,2.8-1.2c0.1,0,0.1-0.1,0.1-0.1c4.7-1.2,8.1-7.5,8.1-15.7c0-9.1-4.1-16-9.6-16c-0.3,0-0.5,0.1-0.8,0.1  c-0.2,0-0.4-0.1-0.6-0.1c-6.8,0.3-15.5,2.1-26.5,5.5c-4-2.2-9.2-3.9-13.6-5.2V10.5c0-0.1,0-0.2-0.1-0.3c0-0.2,0.1-0.4,0.1-0.6  c0-12.6-35.2-12.6-35.2,0c0,0.2,0,0.3,0,0.5c0,0.1,0,0.1,0,0.2v10.4c0,0.9-0.7,1.7-1.6,1.7h-1.5h-1.5c-0.9,0-1.6-0.7-1.6-1.7V10.4  c0-0.1,0-0.2,0-0.2c0-0.2,0-0.4,0-0.5c0-12.6-35.2-12.6-35.2,0c0,0.2,0,0.4,0.1,0.6c0,0.1-0.1,0.2-0.1,0.3v12.2  c-9.6,2.8-18.2,7.7-25.4,14.1c-5.3-15.1-12.4-26.7-21.1-34.4h-0.1c-0.7-0.9-1.8-1.9-3.8-2.2c-5-0.9-12.3,2.8-17.5,6.6  c-7.5,5.4-13.6,13-11.7,18.2v0.1c2.2,17.1,3.6,42.7-2.4,68.3c-3.6,2.8-7.1,5.9-10.6,9.4c-0.4,0.4-0.9,0.9-1.3,1.4  c-11.1-8.7-20.1-20.4-22.7-23.9C80,80.1,79.9,80,79.9,80c-0.5-0.9-1.3-1.7-2.1-2.2c-4.7-2.9-12,0.7-17.3,8.6  c-3.4,5.1-5,10.4-4.1,14.4c0.3,1.5,1,2.7,1.9,3.6c0,0.1,0.1,0.1,0.1,0.2c3,3.8,6,7.4,9.1,10.9c-4.9-0.2-9.5-0.3-13.9-0.3l0,0  c-0.2,0-0.3,0.1-0.5,0.1c-5.1-0.5-10.9,4.5-14.1,12.5c-2.3,5.6-2.6,11.2-0.9,15c0.9,2,2.4,3.4,4.3,4c0.7,0.2,1.4,0.4,2.2,0.4  c0.2,0,0.5-0.1,0.7-0.1c0.1,0,0.2,0.1,0.4,0.1h0.1c4.6-0.1,15.9-0.1,28,1.7c-6.5,15.5-11.5,33.6-9.2,44.2c1.7,8,8.1,11.3,11.6,12.8  c-0.5,4.8-0.7,6.7-0.7,11.7c0,43.9,34,77.4,66.9,109.8c5.7,5.6,11.6,11.4,17.1,17.1c6.7,7,10.2,17.9,13.6,28.6  c4.7,14.7,9.5,30,23.9,30c69.3,0,121.5-112.5,121.5-185.5c0-17.2-2.8-33.2-8.3-47.6c9-4.1,16.7-12.6,21.6-23.8l13.1,3.7  c0.1,0,0.1,0,0.2,0c0.6,0.3,1.3,0.5,2,0.6c0.2,0,0.4,0,0.6,0c5.6,0,11.2-7,13.8-14.3C363.5,130,363.6,124.5,361.5,121.3  L361.5,121.3z M354.9,92.5c1.7,5.6,0.5,10-1.9,10.9c-2.8,1-5.8-2.6-7.5-8.1c-1.1-3.6-0.2-7.5,0.7-9.2c0.7-1.2,2.2-1.7,3.4-1  C351.5,86.1,353.7,88.6,354.9,92.5z M312,67.8c-4.2-2.3-8.8-3.6-13.4-3.8c3-2.2,6.2-4.1,9.3-5.8C309.5,61.3,310.9,64.5,312,67.8z   M220.5,140.2c-13.9-1.7-23.2-8.4-26-18.9c-4.5-16.3,7.3-37.8,30.9-56.1C252.7,44,288.5,32.5,307,29.6c-1,2.5-1.5,5.5-1.5,8.8  c0,5,1.3,9.3,3.3,12.2c-8,3.8-21.3,11.5-29.2,23.2c-3.8,5.6-6.2,13.6-8.8,22.2C263.9,118.8,256.1,144.6,220.5,140.2z M190.7,91.9  c-2.7-2.9-5.7-5.3-8.8-7.4c5.1-23.1,27.2-39.7,53.2-39.7c3,0,6,0.2,9,0.7c-7.9,4.4-15.7,9.3-22.7,14.7  c-13.5,10.5-23.4,22.2-29,33.6L190.7,91.9z M315,50c-0.8,0-5.2-3-5.2-11.6c0-8.8,4.4-11.6,5.2-11.6c0.8,0,5.2,2.8,5.2,11.6  C320.2,48.2,315.8,50,315,50z M255.9,3.4c7,0,13.2,3,13.2,6.1c0,2.3-6.2,5.3-13.2,5.3c-6.9,0-13.2-2.6-13.2-5.2  C242.7,6.4,249,3.4,255.9,3.4z M214.3,3.4c11.7,0,12.7,5.3,13.2,6.2c-0.5,0.9-3.5,5.2-13.2,5.2c-10.2,0-12.9-4.4-13.2-5.1  C201.4,8.8,204,3.4,214.3,3.4z M200.7,30.2c1.4-0.4,2.4-1.6,2.4-3.1v-10c3.2,1.3,7.2,2,11.2,2s8-0.7,11.2-2v3.6  c0,4.4,3.6,10,8,10.1h1.6h1.6c4.4,0,8-5.6,8-10.1v-3.6c3.2,1.3,7.2,2,11.2,2s8-0.7,11.2-2v10c0,1.5,1,2.7,2.4,3.1  c2.6,0.7,4.2,0.5,6.7,1.6c-7.8,2.7-15,5.1-23.2,9.1c-5.8-1.6-11.8-2.5-17.9-2.5c-28.3,0-52.5,17.8-59,42.8  c-5.7-2.7-10-4.2-16.5-4.4c-0.5,0-1,0-1.5,0C161.9,53.5,177.5,36.2,200.7,30.2z M130.6,10.9c8.9-6.8,13.7-6.8,15.2-5.5  c1,1.3,0.3,6.8-8.4,12.5c-7.3,6-13.5,7.1-15.2,5.5C121.2,21.7,122.5,17.1,130.6,10.9z M124,28.7c4.8-0.3,10.8-3.5,15.2-6.7  s8.4-7.2,10.5-11c6.7,7.4,12.2,17.7,16.5,30.8c-8.9,9.7-14.9,20-16.8,33.5c-8.9,1.3-16,4.8-25.1,10.6  C128.5,63.9,125.7,44.5,124,28.7L124,28.7z M98.4,108.8c-4.7,5.3-9,11.1-12.9,17.2c-5.3-5.5-11.9-12.8-18.4-20.7  c3.3-1.4,6.7-4.4,9.6-8.6c1.4-2.1,2.5-4.3,3.3-6.4C84.4,95.6,90.9,102.8,98.4,108.8z M63.7,88.9c4.5-6.8,8.9-8.6,11.7-6.7  c2.5,2,1.1,8.1-3,13c-3.7,5.5-8.6,7.5-10.7,5.7C59.7,99.8,58.7,95.7,63.7,88.9z M42.7,130.1c3.3-9.6,8-10.6,9.4-10.6  c0.1,0,0.2,0,0.2,0c0.2,0.1,0.4,0.3,0.5,0.7c1.7,0.6,3.5,5.8,0,12.9c-2.5,6.4-7.5,8.9-8.6,8.6c-0.2-0.1-1.4-0.3-1.5-0.7  C42,139.3,41,134.5,42.7,130.1L42.7,130.1z M54.4,140.7c1.3-1.8,2.5-3.8,3.4-6.2c1.9-4.7,2.4-9.3,1.5-12.9  c4.4,0.1,9.1,0.3,13.9,0.5c3.2,3.6,6.3,6.8,8.9,9.5c-2.1,3.6-4.1,7.3-5.8,11C68.3,141.4,60.4,140.9,54.4,140.7L54.4,140.7z   M108.6,109.3c16-15.8,30.6-25.1,46-25.1c0.3,0,0.6,0,0.8,0c10.9,0.2,20.7,4.8,28.6,13.1l3.7,5c-2.3,6.6-3.1,14.1-2.2,20.1  l-1.4,3.4c-2.9,5.4-6.9,11.3-11.8,17.5c-15,19.2-32.9,34.3-53.2,44.8c-17.5,9.1-31.5,12.1-40.6,8.8c-3-1.1-5.1-3.9-6-8.3  C72,169.5,83.4,134.2,108.6,109.3L108.6,109.3z M199.7,392.5c-9.1,0-12.8-5.6-17.8-21.5c-3.4-10.8-7.3-23-15.1-31.1  c-5.6-5.7-14.5-14.6-20.2-20.2c-32-31.5-62-61-62-102.3c0-4.4,0.2-5.8,0.6-10.1c1.5,0.2,6,0.5,7.6,0.3c6.7-0.7,15.4-3.6,29.3-10.8  c0.7-0.4,1.4-0.8,2.1-1.2c2.5,23.4,10.3,58.2,35.1,80.7c0.6,0.6,1.4,0.8,2.2,0.8c0.9,0,1.7-0.4,2.4-1c1.2-1.3,0.1-2.3-1.2-3.5  c-12.9-11.8-19.9-28.4-24.9-44.8c8.5,1.6,26.3,6,30.4,16.4c0.5,1.3,1.7,2,3,2c0.4,0,0.8-0.1,1.2-0.2c1.6-0.7,1.4-2.5,0.8-4.2  c-5.9-14.7-28.7-19.5-37.3-20.8c-3.1-11.9-4.7-20.1-5.5-28.8c17.8-10.6,33.6-24.7,47.1-42c5.1-6.5,9.2-12.7,12.4-18.4l0.4-0.8  c4.9,10.1,15.3,16.7,29.5,18.5c3,0.4,5.8,0.5,8.5,0.5c20.6,0,31.8-10.5,38.8-23.4c28.9,20.6,41.8,50.8,41.8,90.7  C308.8,288.1,255.9,392.5,199.7,392.5L199.7,392.5z M330.5,139c-1.6-0.5-3.3,0.4-3.9,1.9c-4.1,10.9-11,19.1-19.1,22.9  c-8.2-18.6-20.9-34.2-37.7-46c2.9-6.7,5.1-13.7,7-20c2.4-8.1,4.7-15.7,7.9-20.4c1.4-2,3-3.9,4.8-5.8c2.5-0.8,5-1.3,7.6-1.3  c10.7,0,20.8,7.5,27.1,20.1c0.6,1.1,1.7,1.8,2.9,1.8c0.3,0,0.6,0,0.9-0.1l12.6-3.6c-0.2,2.5,0.1,5.4,1,8.5c0.8,2.5,1.9,4.8,3.1,6.7  l-11.2,1.9c-1.7,0.3-2.8,1.8-2.6,3.5c0.2,1.5,0.1,4,0,6.3c0,1.1-0.1,2.1-0.1,3v0.8c0,0.8,0,1.9,0,2.3c0,0.9,0.3,1.7,0.9,2.3  c0.6,0.6,1.4,1,2.3,1h12.3c-1.7,2.3-3.2,5.1-4.2,7.8c-1.2,3.4-1.8,6.6-1.7,9.3L330.5,139z M357.3,133.8c-2.5,6.8-6.9,10.2-9.7,10.2  l0,0c-1.9,0-3.1-3.9-1.2-9.2c2.4-6.6,6.5-11.8,9.8-11.1C358,125.7,359.7,126.7,357.3,133.8L357.3,133.8z">
                                                                            </path>
                                                                        </g>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                chest heart</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7e39ec0 elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="7e39ec0" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 403.4 403.4"
                                                                        style="enable-background:new 0 0 403.4 403.4;"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <path
                                                                                        d="M391.3,371.4l-7-44c-3.7-24.2-13.1-46.5-27.3-65.2l9.1,0.5c1.5,0,2.6-1.1,2.9-2.6c0.3-1.8-0.8-3.1-2.6-3.1l-13.6-0.8    c-0.2,0-0.4,0-0.6,0c-1.3-1.5-2.5-2.9-3.9-4.3c2.6-1.3,5-2.8,7.4-4.6c1.1-0.8,1.5-2.9,0.6-4.1c-0.8-1.1-2.9-1.5-4.1-0.6    c-2.5,2-5.2,3.7-8.3,4.8l-1.9-1.9c-1.9-1.9-4-3.7-6.1-5.2c4.3-3.1,9-5.6,13.9-7.5c0.3-0.1,0.6-0.3,0.9-0.5    c3-1.6,4.9-6.1,4.9-12.2c0-6.4-2.9-12.7-7.5-12.7c-0.5,0-1,0.1-1.5,0.3l-6.6,1.4c-4.9,1-9.8,2.5-14.5,4.4c0.1-7-2-13.3-6.4-17.7    c-4-4-9.3-6-15.4-6.3c0.6-1.5,1.3-2.8,2-4.2l3.8-6.4c0.6-1.5,0.3-3.1-1.1-4.1c-1.5-0.8-3.1-0.3-4.1,1.1l-3.8,6.4    c-1.4,2.5-2.4,4.9-3.2,7.4c-0.8,0.1-1.7,0.3-2.6,0.5c0.1-3.6,0.7-7,1.8-10.5c0.3-1.8-0.6-3.1-2-3.8c-1.8-0.3-3.1,0.6-3.8,2    c-1.6,4.6-2.2,9.2-2.1,14c-0.8,0.3-1.7,0.6-2.6,1c-0.3-6.5-2-12.8-4.9-18.6c-0.6-1.5-2.3-1.8-3.8-1.1s-1.8,2.3-1.1,3.8    c3,5.8,4.5,12.1,4.4,18.7c-4.4,2.5-8.6,5.7-12.4,9.6c-5.2,5.2-9.2,11-11.9,16.9c0.3-2.8,0.8-5.8,1.6-9.4l1.1-5.7    c0.1-0.4,0.1-0.7,0-1V206c0-5.5-9.5-8.1-18.8-8.1s-18.8,2.3-18.8,8.1l0,0c-0.1,0.4-0.1,0.7,0,1.1l0.8,2.6    c3.4,17.3,3.4,26.3,0.6,43.4l-3.1,18.5c0,0.2,0,0.3,0,0.5c-0.4,0.7-0.8,1.5-1.1,2.2c-4.6-0.8-8.9-2.3-13-4.7l-6.4-3.8    c-1.5-0.6-3.1-0.3-4.1,1.1c-0.6,1.5-0.3,3.1,1.1,4.1l6.4,3.8c4.2,2.2,8.9,4.1,13.6,5c-0.5,1.5-0.9,2.9-1.4,4.4    c-1.8,0.2-3.7,0.5-5.3,1l-11.9,3.2c-1.5,0.3-2.3,2-2,3.4c0.6,1.1,1.8,2,2.9,2c0.3,0,0.6,0,0.3,0.3l11.9-3.1c1-0.3,2-0.5,2.9-0.7    c-2.5,16.8,1.9,34.7,8.4,43.6c1.3,1.8,2.4,3.3,3.6,4.8c-0.1,0.2-0.1,0.4-0.1,0.7c-0.6,9.5-2,19.1-4.1,27.5l-2,9.5    c0,0.2-0.1,0.5,0,0.7c-0.6,5.1,6.8,8.8,14.5,10.2c2,0.3,4.9,0.6,7.5,0.6c5.2,0,10.3-1.1,11.3-4.9c0.1-0.3,0.2-0.5,0.3-0.9    l1.9-14.7c18.4,13.8,39.8,22.8,63,26.3l43.4,7.1c1.1,0.3,2.6,0.3,4.1,0.3c6.7,0,13.4-2.6,18.3-7.2    C389.8,387.9,392.7,379.9,391.3,371.4z M338,249.5l2.6,2.6c3.8,3.8,7.3,7.8,10.7,12c0,0.1,0,0.3,0,0.4c0.8,3.8-0.3,7.5-2.6,9.8    c-2,2-5.2,2.9-9,2.6c-4.9-0.6-9.5-3.1-12.4-7.5c-2.2-3.1-5-5.7-8.3-7.8c2.4-5.8,5.7-11.1,10-15.4c0.7-0.7,1.5-1.5,2.2-2.2    C333.7,245.7,335.9,247.4,338,249.5z M347.4,213.5l0.7-0.1c0.6,0.9,1.8,3.3,1.8,6.7c0,4-1.1,6.3-1.7,6.9    c-1.4-0.3-2.9-3.1-2.9-6.9C345.2,216.9,346.3,214.5,347.4,213.5z M272.8,209.5c7.8-7.8,17.1-12.7,25.4-14.1    c0.1,0.1,0.3,0.1,0.4,0.2c0.3,0,0.6,0,0.8,0c0.5,0,1.1-0.2,1.6-0.5c5.7-0.4,10.8,1,14.3,4.6c3.7,3.7,5.4,9.5,4.4,16.2    c-5.3,2.6-10.4,5.7-15.2,9.3c-0.6-0.8-1.4-1.7-2.3-2.3c-4.1-2.9-10.1-0.3-14.2,5.5c-1.9,3-3.3,7.6,0,13.2c-1.6,2-3,4-4.3,6.2    l-1.3,2.2c-6-4.6-14.2-6.2-23.3-4.8C256.5,234.8,262,220.5,272.8,209.5z M240.2,203.2c8.3,0.3,11.8,2.1,12.8,3    c-0.8,1.4-5.4,3.7-13.2,3.7c-6.7,0-10.9-1.7-12.5-3l-0.1-0.5C228.1,205.2,231.6,203,240.2,203.2z M226.6,272.1    c0.2-0.2,0.3-0.4,0.4-0.6c0.3-0.4,0.7-0.8,1-1.1c6.1-6.7,13.1-11.6,20.6-14.2c0.8-0.3,1.1-0.8,0.8-1.8c-0.3-0.8-0.8-1.1-1.8-0.8    c-7.7,2.9-15.2,7.7-21.5,14.6l-0.1-0.1c0,0-0.1,0-0.1-0.1l2.4-14.1c2.2-14.4,2.3-28.5-0.2-43.4c3.1,1.4,7.5,2,11.8,2    c4.6,0,9.3-0.8,12.5-2.3l-0.4,1.9c-2.9,15.4-2.3,22.9,1.8,37.6c0.3,1.1,1.5,2,2.6,2c0.3,0,0.6,0,0.8,0c0.4-0.1,0.7-0.2,1-0.5    c9.4-2,17.4-0.2,22.5,4.8c4.6,4.9,7.2,12.7,6.4,21.1c-0.8,11.6-6.4,16.9-17.1,27.2c-15.9,11.3-21.1,28.2-24.3,37.1    c-1.1,2.9-2.6,6.7-3.1,7.2c-1.8,0-7.2-6.1-15.9-18C218.1,319.3,213.8,290.1,226.6,272.1z M247.2,381.5    C247.2,381.6,247.2,381.6,247.2,381.5c-1.3,0.6-6.2,1.6-12.2,0.4c-5.6-0.8-9.1-3.1-9.8-4l2-9.3c1.7-6.9,2.9-14.9,3.7-23    c1.8,2.2,3.3,3.9,4.8,5.1c0.1,0.3,0.3,0.5,0.5,0.7l2.6,2.3c3.4,3.4,7,6.7,10.7,9.8L247.2,381.5z M253.6,335.2    c2.5-6.6,6.5-13.2,14.8-21.1c3.4-3.7,7.7-6.8,11.2-10.5c3.1-3.3,5.4-7.2,8.5-10.5c1.7-3.2,4-8.7,4.4-15.8    c0.7-11.5-3.9-19.9-5.8-23.3l1.9-3c1.8-2.6,3.4-5.2,5.5-7.5c1.1-1.1,0.8-3.1-0.3-4.1c-0.2-0.2-0.5-0.4-0.8-0.5    c-1.6-2.6-1.6-4.9,0-7c2.3-3.4,5.2-4.6,6.4-4.1c0.6,0.6,0.8,1.5,0.8,2c0,0.2,0.1,0.4,0.2,0.5c0.1,0.5,0.3,1,0.7,1.5    c0.6,0.8,1.5,1.1,2.3,1.1c0.8,0,1.5-0.3,1.8-0.6c10.4-8.7,22.9-14.7,36.2-17.7l2.6-0.5c-0.6,1.6-0.9,3.6-0.9,5.7    c0,3.6,0.8,6.6,2.3,8.3c-7.4,3.2-14.6,8-20.3,13.7c-7.2,7.2-12.1,16.5-14.5,27.3l-1.1,5.2c-0.3,1.5,0.8,3.1,2.3,3.4    c0.3,0,0.3,0,0.6,0c1.5,0,2.6-0.8,2.9-2l1.1-5.2c0.2-1,0.5-2.2,0.7-3.2c2.1,1.6,3.9,3.4,5.3,5.5c2.9,4,6.9,7,11.3,8.7l8,18.1    c2,4.6,3.8,9.3,4.9,14.2c0.3,0.6,0.8,1.1,1.5,1.1c0,0,0.3,0,0.3-0.3c0.8-0.3,1.5-0.8,1.1-1.8c-1.5-4.9-3.1-10.1-5.2-14.7l-7-15.6    c0.6,0.1,1.1,0.2,1.8,0.2c0.8,0,1.5,0,2,0c4.9,0,9-1.8,11.9-4.4c1.8-1.8,3.1-4.1,3.8-6.7c11.2,16.6,18.7,35.7,21.9,56.4l7,44    c0.8,6.4-1.1,12.7-5.7,17.3s-11,7-17.3,5.7l-44-7c-27.7-4.4-53-16.8-73-35.8c2.4-1.7,3.8-5.3,5.3-9.9c0.4-1.4,0.9-2.9,1.6-4.5">
                                                                                    </path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                        <path class="st0"
                                                                            d="M360.2,147.2h-12.3c-2.3,0-4.1-0.8-4.1-3.1s1.8-3.1,4.1-3.1h12.3c2.3,0,4.1,0.8,4.1,3.1 C364.3,146.4,362.5,147.2,360.2,147.2z">
                                                                        </path>
                                                                        <path class="st0"
                                                                            d="M316.5,141h12.3c2.3,0,4.1,0.8,4.1,3.1s-1.8,3.1-4.1,3.1h-12.3c-2.3,0-4.1-0.8-4.1-3.1 C312.4,141.9,314.3,141,316.5,141z">
                                                                        </path>
                                                                        <path
                                                                            d="M316.5,147.2h12.3c2.3,0,4.1-0.8,4.1-3.1s-1.8-3.1-4.1-3.1h-12.3c-2.3,0-4.1,0.8-4.1,3.1S314.3,147.2,316.5,147.2z">
                                                                        </path>
                                                                        <path
                                                                            d="M360.2,141h-12.3c-2.3,0-4.1,0.8-4.1,3.1s1.8,3.1,4.1,3.1h12.3c2.3,0,4.1-0.8,4.1-3.1C364.3,141.9,362.5,141,360.2,141z">
                                                                        </path>
                                                                        <g>
                                                                            <polygon class="st0"
                                                                                points="81.4,307.7 90.5,279.9 42.3,279.9 51.3,307.7  ">
                                                                            </polygon>
                                                                            <path class="st0"
                                                                                d="M330.3,56.8c-8.3,0-15,6.7-15,15l0,0c0,8.3,6.7,15,15,15c8.3,0,15-6.7,15-15C345.4,63.6,338.6,56.8,330.3,56.8  z">
                                                                            </path>
                                                                            <path
                                                                                d="M330.3,47.1c-13.7,0-24.8,11.1-24.8,24.8l0,0c0,13.7,11.1,24.8,24.8,24.8s24.8-11.1,24.8-24.8S344,47.1,330.3,47.1z   M330.3,86.9c-8.3,0-15-6.7-15-15l0,0c0-8.3,6.7-15,15-15c8.3,0,15,6.7,15,15S338.6,86.9,330.3,86.9z">
                                                                            </path>
                                                                            <path
                                                                                d="M264.5,156.3h-54.8l-32.8-65.8c-0.6-1.1-1.6-1.8-2.8-2c-2.1-0.4-4.1,1.1-4.5,3.3l-14,90.3l-29.7-60  c-0.4-0.8-1.1-1.3-1.9-1.7c-2-0.9-4.3,0.1-5.2,2l-12.1,33.9H70.4c-2.2,0-3.9,1.7-3.9,3.9c0,2.2,1.7,3.9,3.9,3.9h39  c1.5,0,3-1,3.5-2.4l9.9-23.1l31.2,62.8c0.6,1.1,1.6,1.8,2.8,2c2.1,0.4,4.1-1.1,4.5-3.3l14-90.2l28.5,52.1c0.7,1.2,2,2,3.4,2h57.1  c2.2,0,3.9-1.7,3.9-3.9l0,0C268.4,158.1,266.7,156.3,264.5,156.3z">
                                                                            </path>
                                                                            <path
                                                                                d="M321.1,117.4h-11.8c-2.2,0-3.9,0.8-3.9,3c0,2.2,1.7,3,3.9,3h11.8c2.2,0,3.9-0.8,3.9-3C325.1,118.1,323.3,117.4,321.1,117.4  z">
                                                                            </path>
                                                                            <path
                                                                                d="M351.2,117.4h-11.8c-2.2,0-3.9,0.8-3.9,3c0,2.2,1.7,3,3.9,3h11.8c2.2,0,3.9-0.8,3.9-3C355.1,118.1,353.4,117.4,351.2,117.4  z">
                                                                            </path>
                                                                            <path
                                                                                d="M376.3,12.2H15.9c-2.2,0-3.9,1.7-3.9,3.9V276c0,2.2,1.7,3.9,3.9,3.9l0,0H34l10.6,32.8c0.5,1.6,2,2.7,3.7,2.7h35.9  c1.7,0,3.2-1.1,3.7-2.7l10.6-32.8h79.1c3,0,5.5-2.4,5.5-5.5v-0.8c0-3-2.4-5.5-5.5-5.5H23.7V23.8h345v195c0,3.3,2.6,5.8,5.8,5.8l0,0  c3.3,0,5.8-2.6,5.8-5.8V16.1C380.2,13.9,378.5,12.2,376.3,12.2z M90.5,279.9l-9,27.8H51.3l-9-27.8H90.5z">
                                                                            </path>
                                                                            <path
                                                                                d="M56.6,233.3V56.7h223.8v94.7c0,3.2,2.5,5.9,5.7,6c3.3,0.1,6-2.6,6-5.8V52.9c0-3.9-2.9-7.8-7.8-7.8H50.8  c-3.2,0-5.8,2.6-5.8,5.8v190.1c0,2.2,3.6,3.9,5.8,3.9l146.1-0.8c3,0,5.4-2.5,5.4-5.5l0,0c0-3-2.4-5.5-5.5-5.5H56.6z">
                                                                            </path>
                                                                        </g>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                Cardiology</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-55ba304 elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="55ba304" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 403.4 403.4"
                                                                        style="enable-background:new 0 0 403.4 403.4;"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <g>
                                                                                <path
                                                                                    d="M82.6,132.4h-1.3c-3.7,0-6.6-2.9-6.6-6.6s2.9-6.6,6.6-6.6h1.3c10.9,0,19.8-8.9,19.8-19.8V25.7c0-3.9-3.1-7-7-7H32.8   c-3.9,0-7,3.1-7,7v73.6c0,10.9,8.9,19.8,19.8,19.8c3.7,0,6.6,2.9,6.6,6.6c0,3.7-2.9,6.6-6.6,6.6c-18.2,0-33.1-14.8-33.1-33.1V25.7   c0-11.2,9.1-20.4,20.3-20.4h62.6c11.2,0,20.3,9.1,20.3,20.3v73.6C115.7,117.6,100.8,132.4,82.6,132.4z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M80.6,156.2h-33c-3.7,0-6.6-2.9-6.6-6.6v-23.8c0-3.7,2.9-6.6,6.6-6.6s6.6,2.9,6.6,6.6v17.2h19.8v-17.2   c0-3.7,2.9-6.6,6.6-6.6c3.7,0,6.6,2.9,6.6,6.6v23.8C87.2,153.2,84.3,156.2,80.6,156.2z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M68.2,129h-7.7c-1.8,0-3.3-1.5-3.3-3.3s1.5-3.3,3.3-3.3h7.7c1.8,0,3.3,1.5,3.3,3.3S70,129,68.2,129z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M29.6,81.2c-8.1,0-12.2-2.8-12.4-3c-1.5-1-1.8-3.1-0.8-4.7c1-1.5,3.1-1.8,4.7-0.8c0.1,0,10.9,6.9,34.9-6.8   c28-16,53.7-0.6,54.8,0.1c1.5,0.9,2.1,3,1,4.6c-0.9,1.5-3,2.1-4.6,1.1l0,0c-0.9-0.6-23.5-14-48,0.1C46.3,79.2,36.5,81.2,29.6,81.2   z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M47.5,33.1H19.1c-1.8,0-3.3-1.5-3.3-3.3s1.5-3.3,3.3-3.3h28.4c1.8,0,3.3,1.5,3.3,3.3C50.9,31.6,49.3,33.1,47.5,33.1z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M35.3,49.3H19.1c-1.8,0-3.3-1.5-3.3-3.3c0-1.8,1.5-3.3,3.3-3.3h16.2c1.8,0,3.3,1.5,3.3,3.3C38.7,47.8,37.2,49.3,35.3,49.3   z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M47.5,65.4H19.1c-1.9,0-3.3-1.5-3.3-3.3c0-1.8,1.5-3.3,3.3-3.3h28.4c1.8,0,3.3,1.5,3.3,3.3C50.9,63.9,49.3,65.4,47.5,65.4   z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M47.5,97.7H19.1c-1.8,0-3.3-1.5-3.3-3.3c0-1.8,1.5-3.3,3.3-3.3h28.4c1.8,0,3.3,1.5,3.3,3.3C50.9,96.2,49.3,97.7,47.5,97.7   z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M74.6,399.5c-3.7,0-3.8-2.9-3.8-6.6V149.6c0-3.7,0.1-6.6,3.8-6.6c3.7,0,3.8,2.9,3.8,6.6v243.3   C78.4,396.5,78.3,399.5,74.6,399.5z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M53.3,398.4c-3.7,0-3.8-2.9-3.8-6.6V149.5c0-3.7,0.1-6.6,3.8-6.6c3.7,0,3.8,2.9,3.8,6.6v242.3   C57.1,395.5,57,398.4,53.3,398.4z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M312.1,195.9h-26.4c-20.4,0-35.1-16.3-35.1-38.8s14.8-38.8,35.1-38.8h26.4c20.4,0,35.1,16.3,35.1,38.8   S332.5,195.9,312.1,195.9z M285.7,131.4c-15.1,0-21.8,12.8-21.8,25.5s6.7,25.5,21.8,25.5h26.4c15.1,0,21.8-12.8,21.8-25.5   s-6.7-25.5-21.8-25.5H285.7z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M355.9,176.4h-11.6c-1.8,0-3.3-1.5-3.3-3.3s1.5-3.3,3.3-3.3h8.3v-26.6h-7.9c-1.8,0-3.3-1.5-3.3-3.3s1.5-3.3,3.3-3.3h11.2   c1.8,0,3.3,1.5,3.3,3.3v33.2C359.3,174.9,357.7,176.4,355.9,176.4z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M253.5,172.7h-11.4c-5.4,0-9.8-4.4-9.8-9.8v-14.3c0-5.4,4.4-9.8,9.8-9.8h10.3c1.8,0,3.3,1.5,3.3,3.3   c0,1.8-1.5,3.3-3.3,3.3h-10.3c-1.7,0-3.1,1.4-3.1,3.1V163c0,1.7,1.4,3.1,3.1,3.1h11.4c1.8,0,3.3,1.5,3.3,3.3   S255.3,172.7,253.5,172.7z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M224.9,225.6H161c-4.7,0-8.5-3.9-8.5-8.5v-3.2c0-4.7,3.9-8.6,8.6-8.6h64.7c4.9,0,8.8,4,8.8,8.8v1.9   C234.6,221.3,230.2,225.6,224.9,225.6z M161.1,211.7c-1.1,0-2,0.9-2,2v3.2c0,1,0.9,1.9,1.9,1.9h63.9c1.7,0,3-1.4,3-3v-1.9   c0-1.2-0.9-2.2-2.2-2.2H161.1z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M166.6,211.4c-0.5,0-0.9-0.1-1.4-0.3c-1.6-0.8-2.4-2.8-1.5-4.5c0.4-0.9,10.1-20.6,33.7-25.7c9.1-2,18.4,1.2,23.3,8.1   c3.8,5.4,5.6,11.4,5.6,18.9c0,1.8-1.5,3.3-3.3,3.3s-3.3-1.5-3.3-3.3c0-7.8-2.4-12.2-4.4-15c-3.2-4.6-10-6.8-16.4-5.4   c-20.4,4.5-29.1,21.9-29.2,22.1C168.9,210.6,167.8,211.4,166.6,211.4z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M232.2,166.5h-16c-1.8,0-3.3-1.5-3.3-3.3s1.5-3.3,3.3-3.3h16c1.8,0,3.3,1.5,3.3,3.3S234,166.5,232.2,166.5z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M210.2,187.3c-1.8,0-3.3-1.5-3.3-3.3V169c0-1.8,1.5-3.3,3.3-3.3s3.3,1.5,3.3,3.3v14.9C213.5,185.7,212,187.3,210.2,187.3z   ">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M194.7,187.3c-1.8,0-3.3-1.5-3.3-3.3v-16.5c0-1.8,1.5-3.3,3.3-3.3s3.3,1.5,3.3,3.3v16.5   C198,185.7,196.5,187.3,194.7,187.3z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M235.6,151.6h-20.4c-1.8,0-3.3-1.5-3.3-3.3s1.5-3.3,3.3-3.3h20.4c1.8,0,3.3,1.5,3.3,3.3S237.4,151.6,235.6,151.6z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M203.7,174c-9.7,0-17.5-7.9-17.5-17.5s7.9-17.5,17.5-17.5c9.6,0,17.5,7.9,17.5,17.5S213.3,174,203.7,174z M203.7,145.7   c-6,0-10.8,4.8-10.8,10.8s4.8,10.8,10.8,10.8s10.8-4.8,10.8-10.8S209.7,145.7,203.7,145.7z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M99,399.1c-2.1,0-3.8-1.7-3.8-3.8c0-5.8,0-20.6,0-32.9c0-16,13.1-29.2,29.2-29.2l274.2,0c2.1,0,3.9,1.7,3.8,3.8   c-0.1,3.6-3,3.5-6.6,3.5H124.3c-12,0-21.7,9.8-21.7,21.7v30.2C102.5,396.1,102.6,399,99,399.1z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M394.2,266.2c-0.3,0-0.6,0-0.8-0.1c-20.4-2.5-24.2-2.7-31.1-3.1c-4.6-0.3-10.9-0.8-24.6-2c-3.6-0.4-6.4-3.6-6-7.2   c0.4-3.6,3.5-6.4,7.2-6c13.5,1.2,19.5,1.6,24.2,2c7,0.5,10.9,0.8,31.7,3.2c3.6,0.5,6.3,3.7,5.8,7.4   C400.4,263.7,397.5,266.2,394.2,266.2z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M396.5,328.1L396.5,328.1c-2.9-0.1-5.8-0.1-8.5-0.1c-20.6-0.3-41.9-0.5-77.9-10.8c-3.5-1-5.6-4.7-4.6-8.3   c1-3.5,4.7-5.6,8.3-4.6c34.3,9.9,53.8,10.1,74.4,10.4c2.8,0,5.7,0.1,8.6,0.1c3.7,0.1,6.6,3.1,6.6,6.7   C403.1,325.3,400.1,328.1,396.5,328.1z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M317.3,339.8c-21,0-41.5-1.8-58-15.9c-6-5.1-12.8-8.1-19.8-8.5h-0.1c-0.1,0-16.3-0.9-33.6,7.8c-0.9,0.5-2.3,1.2-3.8,2.1   c-7.6,4.3-21.7,11.3-37.4,13.9c-20.2,3.3-37.1-2.9-50.3-18.6c-17.9-21.2-18.9-41.7-16.6-56.1c2.7-16.3,10.5-29.8,17.2-36   c9.2-8.5,20.1-16.2,37.7-15.5c3.7,0.2,6.6,3.2,6.4,6.9c-0.2,3.7-3.2,5.6-6.9,5.4c-12.1-0.5-19.5,4-28.1,12   c-4,3.7-11.8,15.3-14,29.3c-1.9,11.6,0,30.1,14.6,47.4c20.6,24.5,47.4,13.2,70.9-0.2c1.7-0.9,3.1-1.8,4.4-2.4   c20.3-10.4,39-9.3,40.5-9.2c9.9,0.6,19.5,4.6,27.6,11.6c14.3,12.3,32.2,20,50.2,19.7h0.1c3.6,0,9.6-1.1,9.6,2.6   c0,3.7-5.9,3.6-9.6,3.7C318,339.8,317.6,339.8,317.3,339.8z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M241.5,252.6c-4,0-9-1.4-12-4c-3.5-2.9-4.6-6.1-4.9-10.7v-0.4c-0.2-5.5-0.8-6.5-1.6-7.9l-0.3-0.6   c-1.9-3.1-1.9-7.2,1.3-9.1s7.2-0.9,9.1,2.3l0.3,0.5c1.9,3.1,3.2,6,3.6,14.2v0.1c0.1,1.1,0.7,1.8,1.1,2.3c0.9,0.7,1.9,1,2.9,0.9   c5.2-0.7,10.2-2.4,14.7-5.2c19.9-12.4,47.2-18.7,81-18.6l58.2,0.8c3.7,0,6.6,3,6.6,6.7c0,3.6-3,6.6-6.6,6.6h-0.1l-58.1-0.8   c-0.3,0-0.6,0-0.9,0c-30.4,0-55.7,5.7-72.9,16.6c-6.1,3.8-12,5.3-19.1,6.1C242.8,252.6,242.1,252.6,241.5,252.6z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="M359.9,161.8c-0.8,0-1.4-0.2-2.1-0.8c-1.4-1.1-1.7-3.2-0.6-4.7l0,0c0.2-0.2,18.5-23.8,11.4-41   c-4.1-9.9-16.1-16.1-35.5-18.3c-39-4.7-60.7,6-78.2,14.6c-13.8,6.7-25.6,12.6-41,8.1c-10.4-3.1-19.8-6.9-29-10.6   c-19.6-8-48.1-15.6-75.2-15.6c-1.8,0-3.3-1.5-3.3-3.3s1.5-3.3,3.3-3.3c28.4,0,58.4,8.2,77.7,16.1c8.9,3.7,18.2,7.4,28.4,10.4   c12.8,3.8,22.6-1,36.2-7.7c18.2-8.9,40.9-20,81.9-15.2c22,2.7,35.8,10.2,40.8,22.4c8.6,20.7-11.4,46.5-12.3,47.7   C361.9,161.4,361,161.8,359.9,161.8z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                ICU</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-fd8a9fa elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="fd8a9fa" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 403.4 403.4"
                                                                        style="enable-background:new 0 0 403.4 403.4;"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <path
                                                                                d="M62.7,23.2l7.1-2.9c2,4.4,6.4,7.4,11.6,7.4c5,0,21.3-4,21.3-12.8S86.4,2.1,81.4,2.1c-6.1,0-11.2,4.3-12.5,10l-9.3,3.8  C48.3,20.5,41,31.4,41,43.6v93.8l-5.2-0.1c-2.4,0-4.6,0.9-6.3,2.6c-1.6,1.7-2.5,3.9-2.5,6.3c0.7,19.4,6.5,37.8,16.9,53.2  c12.6,18.9,42.4,33.2,59,40.1c2.8,1.1,4.6,3.8,4.6,6.9v18.4c0,8.5,8.3,8,12.5,8.5v10.2c0,75.1,51.7,112.6,101.4,112.6  c52.3,0,102.3-48.8,102.3-121.6v-55.9c28-2.9,46.8-29.1,45-55.3c-1.9-26.1-23.2-46.9-49.3-48.2c-29.8-1.4-54.5,22.4-54.5,51.9  c0,24.6,19.4,49,46.1,51.6v55.9c0,49.2-32.7,107-87.7,107h-2.8c-67.2,0-87.7-62.1-87.7-98v-10.2c4.2-0.5,13.6-0.3,13.6-8.5v-18.3  c0-3.2,2-6,5-7.1c1.2-0.4,2.4-0.8,4-1.3c41.9-13,69.9-49.1,71.4-91.9l0,0c0.1-2.3-0.8-4.5-2.5-6.2s-4.1-2.6-6.3-2.6l-5.2,0.1V44.2  c0-12.4-7.8-23.7-19.5-28.1l-9.7-3.6C182.9,6,177.5,1,170.9,1c-5,0-21.3,4-21.3,12.8s16.3,12.8,21.3,12.8c4.7,0,8.7-2.6,11-6.3  l8.6,3.2c8.6,3.2,14.4,11.5,14.4,20.7v93.4l-5.6,0.1c-4.5,0.1-8.3,3.7-8.5,8.2c-0.1,1.4-0.2,2.7-0.4,4.1c-0.4,0.2-0.9,0.4-1.2,0.7  c-67,56.8-122.1,5.3-124.4,3.1c-0.3-0.3-0.7-0.5-1.1-0.7c-0.3-2.3-0.6-4.7-0.7-7.1c-0.2-4.5-4-8.1-8.6-8.2l-5.5-0.1V43.6  C48.9,34.6,54.3,26.6,62.7,23.2z M79.2,12.1c2.2,0,6.6,1.6,7.4,2.7c-0.9,1.1-5.2,2.7-7.4,2.7c-1.5,0-2.7-1.2-2.7-2.7  C76.5,13.4,77.7,12.1,79.2,12.1z M173,16.6c-2.2,0-6.6-1.7-7.5-2.8c0.9-1.1,5.3-2.8,7.5-2.8c1.3,0,2.3,0.9,2.6,2.1  c-0.1,0.2-0.2,0.3-0.3,0.5c-0.2,0.5-0.2,1,0,1.5C174.9,16,174.1,16.6,173,16.6z M271.4,171.2c-2.5-28.4,21.2-52.1,49.5-49.5  c21.7,2,39.3,19.4,41.2,41.2c2.5,28.4-21.2,52.1-49.5,49.5C290.9,210.5,273.4,193,271.4,171.2z M125.1,182.8  c18.7,0,42.2-7.9,64.9-25.2c-7.1,23.1-28.5,41-45.3,46.2c-21.8,6.8-51.9,4-71-24.4c-2.9-4.4-6.2-12.2-8-17.2  C76.3,169.8,98.3,182.8,125.1,182.8z M51.1,146.2c0.6,13.7,5.7,29.7,13,40.7c21.5,32,58.4,36.2,82.9,28.5  c25.6-8.5,54-32.4,55.6-69.2c0-0.3,0.3-0.6,0.7-0.6c1.1,0,11.2-0.2,10.7-0.2c0.3-0.2,0.5,0.2,0.6,0.2c0.1,0.1,0.2,0.2,0.2,0.4  c-1.4,40-24.6,70.4-64.1,82.7c-1.4,0.5-2.8,0.9-4,1.3c-6.2,2.1-11.4,10-11.4,16.6v14.3c0,0.4-0.3,0.7-0.7,0.7s-16.7,0-15.6,0  c-0.4,0-0.7-0.3-0.7-0.7v-14.4c0-6.3-4.8-14.9-10.5-17.2c-12.7-5.2-42.5-17.3-54.4-35.1c-9.5-14.2-13.9-30.1-14.5-48  c0-0.2,0.1-0.3,0.2-0.4c0.1-0.1,0.3-0.2,0.5-0.2c0.6,0,10.9,0.2,10.6,0.2C50.7,145.5,51.1,145.9,51.1,146.2z">
                                                                            </path>
                                                                            <path
                                                                                d="M343.9,167.1c0-14.9-12.2-27.1-27.1-27.1s-27.1,12.2-27.1,27.1c0,14.9,12.2,27.1,27.1,27.1  C331.7,194.2,343.9,182,343.9,167.1z M301.6,167.1c0-8.4,6.8-15.1,15.1-15.1c8.4,0,15.1,6.8,15.1,15.1c0,8.4-6.8,15.1-15.1,15.1  S301.6,175.4,301.6,167.1z">
                                                                            </path>
                                                                        </g>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                Diagnostics</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-86dd365 elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="86dd365" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 403.4 403.4"
                                                                        style="enable-background:new 0 0 403.4 403.4;"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <path
                                                                                d="M293,206c55.1,0,99.9-44.8,99.9-99.9c0-55.1-44.8-99.9-99.9-99.9C237.9,6.1,193,51,193,106.1c0,26.3,10.2,50.3,26.9,68.2  l-38.9,38.9c-25.8-19.1-29.1-36-30.8-72.1c-2-43.1-2.2-87.3-0.5-131.4c0.1-1.9-1.4-3.5-3.3-3.5c-1.9-0.1-7.5,1.4-7.5,3.3  c-1.7,44.3-1.5,88.7,0.5,132c1,21,1.5,35.7,6.8,47.9c4.7,11,13.6,23.4,26,32.7c0,0-14.6,14.6-14.6,14.6c-2.1,2.1-0.5,5.8,2.4,5.8  c0.9,0,1.7-0.3,2.4-1l15.4-15.4c0.6,0.4,1.1,0.8,1.7,1.2c74.9,44.5,197.5,98.2,204.5,101.4c10.6,5.4,10.9-8.3,6.9-10.2  c-58.9-27.2-177.1-83.2-203.6-100.9c-0.2-0.1-0.4-0.3-0.6-0.4l38-38C242.7,195.8,266.6,206,293,206L293,206z M199.8,106.1  c0-51.4,41.8-93.1,93.1-93.1c51.4,0,93.1,41.8,93.1,93.1c0,51.4-41.8,93.1-93.1,93.1C241.6,199.2,199.8,157.4,199.8,106.1  L199.8,106.1z">
                                                                            </path>
                                                                            <path
                                                                                d="M350,125.5c4.2,0,8.1-1.1,11.5-3.4c13.4-9.1,12.3-33.4-2.6-55.3c-14.9-21.9-37-31.8-50.5-22.7  c-13.4,9.1-12.3,33.4,2.6,55.3C322.2,115.8,337.4,125.5,350,125.5L350,125.5z M315.7,54.8c1.8-1.3,4-1.8,6.5-1.8  c8.7,0,19.2,8.6,27.4,20.6c10.5,15.4,13.2,32.2,4.7,37.9c-8.4,5.7-24.4-3.4-34.9-18.8C309,77.4,307.3,60.5,315.7,54.8L315.7,54.8z">
                                                                            </path>
                                                                            <path
                                                                                d="M324.5,89.3c5.2,7.6,12.1,13.5,18.9,16.2c1.1,0.4,2.3,0.3,3.2-0.4c2.2-1.5,1.7-5-0.7-5.9c-5.6-2.2-11.4-7.2-15.8-13.7  c-3.5-5.2-5.9-10.9-6.7-16.1c-0.3-1.9-2-3.1-3.9-2.9c-1.9,0.3-3.1,2-2.9,3.9C317.7,76.6,320.4,83.2,324.5,89.3L324.5,89.3z">
                                                                            </path>
                                                                            <path
                                                                                d="M247.6,157.3c0,16.2,20.7,29,47.2,29c26.4,0,47.2-12.7,47.2-29c0-16.2-20.7-29-47.2-29C268.3,128.3,247.6,141,247.6,157.3z   M294.8,138.6c19.5,0,35.9,8,35.9,18.7c0,10.7-16.4,17.7-35.9,17.7c-19.5,0-35.9-7-35.9-17.7C258.9,146.6,275.3,138.6,294.8,138.6  L294.8,138.6z">
                                                                            </path>
                                                                            <path
                                                                                d="M273.9,165.2c5.7,2.8,12.7,4.2,20,4.2c9.2,0,18-2.4,24.1-6.5c1.6-1.1,2-3.2,0.9-4.7c-1.1-1.6-3.2-2-4.7-0.9  c-5,3.4-12.4,5.4-20.2,5.4c-6.3,0-12.3-1.3-17.1-3.6c-1.7-0.8-3.7-0.1-4.5,1.6C271.5,162.3,272.2,164.3,273.9,165.2L273.9,165.2z">
                                                                            </path>
                                                                            <path
                                                                                d="M237.9,130.7c13,0,28.4-11.4,38.5-29.8c12.7-23.2,11.6-47.5-2.7-55.3c-14.2-7.8-35.4,4.2-48.1,27.4  c-12.7,23.2-11.6,47.5,2.7,55.3C231.3,129.9,234.5,130.7,237.9,130.7L237.9,130.7z M235.2,77.8c8.1-14.7,23.7-25.4,31.8-20.9  c8.1,4.4,8.1,23.6,0,38.3c-8.1,14.7-23.7,26.4-31.8,21.9C225.3,112.3,227.1,92.5,235.2,77.8z">
                                                                            </path>
                                                                            <path
                                                                                d="M238.3,107.6c1.8,0,3.6-1.3,3.4-3.6c-0.6-6,1.3-13.4,5-20.3c3-5.5,7-10.2,11.3-13.3c1.5-1.1,1.9-3.2,0.8-4.8  c-1.1-1.5-3.2-1.9-4.8-0.8c-5.2,3.7-9.8,9.1-13.4,15.5c-4.4,8.1-6.6,16.9-5.9,24.3C235.2,106.7,236.8,107.7,238.3,107.6  L238.3,107.6z">
                                                                            </path>
                                                                            <path
                                                                                d="M68.7,40.3c-0.3-9.9-0.5-20.1-0.8-30.8C67.8,5.2,57,5.1,57.1,9.6c0.3,10.7,0.5,20.9,0.8,30.8c2.2,82.2,3.7,136.5-12,171.4  c-3.2,7.1-6.4,13.8-9.6,20.2c-12.7,26-24.7,50.6-27.8,93.8c-1.6,23-1.6,69.3-1.6,69.8c0,4.3,10.8,4.4,10.8,0c0-0.5,0-46.6,1.6-69.3  c3-41.9,14.2-64.8,27.1-91.3c3.2-6.5,6.5-13.2,9.7-20.4C72.4,178.3,70.9,123.4,68.7,40.3L68.7,40.3z">
                                                                            </path>
                                                                            <path
                                                                                d="M116.2,237.8c-0.2,0-0.4,0-0.6,0c-27.3,0-55,60.5-59.7,111.2c-1.5,15.5-1.1,31.4,1,47.1c0.6,4.3,11.4,3.5,10.8-0.9  c-2.1-15.2-2.4-30.6-1-45.6c4.9-51.4,28-99,48.9-99c0.1,0,0.2,0,0.4,0c22.7,0.7,54.4,76.2,70,145.8c0.9,4.1,11.6,2.9,10.6-1.5  C184.4,340.6,148.4,238.8,116.2,237.8L116.2,237.8z">
                                                                            </path>
                                                                            <path
                                                                                d="M391.2,369.7c-20.2-11.4-61.5-36.9-98.1-54.2c-70.4-33.3-84.4-33.6-87.2-31.8c-3.7,2.3-0.5,16.3,1.3,27.9  c1.3,8.1,3.8,18.8,7.5,31.7c6.3,21.9,15.1,46.5,18.8,53.8c1.9,3.9,12.1,1,10.1-3c-3-6-11.2-28.2-17.8-50.9  c-10.9-37.2-8.7-44.7-8.1-45.8c2.1-0.4,13.8,2.3,74.3,31c36.4,17.3,75.8,40.8,96,52.2C391.6,382.7,395,371.8,391.2,369.7  L391.2,369.7z">
                                                                            </path>
                                                                        </g>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                Lymphedema</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-81dd77f elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="81dd77f" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascipt:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 403.4 403.4"
                                                                        style="enable-background:new 0 0 403.4 403.4;"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <path
                                                                                d="M6,168.2h391.6c3.3,0,5.9-2.6,5.9-5.9c0-3.3-2.6-5.9-5.9-5.9H6c-3.3,0-5.9,2.6-5.9,5.9C0.1,165.6,2.8,168.2,6,168.2  L6,168.2z">
                                                                            </path>
                                                                            <path
                                                                                d="M4.4,207.1l50.7,14.6c14.2,4.1,29.2,4.3,43.5,0.6l40.1-10.4c11.2-2.9,23-3,34.3-0.3l48.4,11.7c11.7,2.8,25.5,3.2,38.3,0.1  l52.7-12.5c2.2-0.5,9.4-0.9,11.6-1.2v29.4l-14.2,19.4c-2,2.6-4.6,7.3-2,9.3c1.1,0.8,0.4,0.3,1.6,0.3c1.8,0,2.5-0.8,3.6-2.3  l14.1-20.4l20.9,27.9c1.2,1.3,2.8,2,4.5,2c1.4,0,0.8,0.5,1.9-0.5c1.3-1.4,1.7-3.9-0.4-6.3l-23.1-29.6v-29.8c3.7,0.1,7.4,0.5,11,1.2  l54.4,10.3c3.2,0.6,6.3-1.5,6.9-4.7c0.6-3.2-1.5-6.3-4.7-6.9l-54.4-10.3c-11.5-2.2-23-1.9-34.4,0.8L257,211.9  c-10.8,2.5-22.1,2.5-32.8-0.1l-48.4-11.7c-13.1-3.2-26.9-3-40,0.3l-40.1,10.4c-12.2,3.2-25.1,3-37.3-0.5L7.7,195.8  c-3.1-0.9-6.4,0.9-7.3,4C-0.6,202.9,1.2,206.2,4.4,207.1L4.4,207.1z">
                                                                            </path>
                                                                            <path
                                                                                d="M397.5,358.5H6.2c-3.3,0-5.9,2.6-5.9,5.9s2.6,5.9,5.9,5.9h391.4c3.3,0,5.9-2.6,5.9-5.9S400.8,358.5,397.5,358.5z">
                                                                            </path>
                                                                            <path
                                                                                d="M0.3,330.5c0,3.3,2.6,5.9,5.9,5.9h130.3c3.3,0,5.9-2.6,5.9-5.9c0-3.3-2.6-5.9-5.9-5.9H6.2C2.9,324.6,0.3,327.2,0.3,330.5z">
                                                                            </path>
                                                                            <path
                                                                                d="M164.3,336.4h233.2c3.3,0,5.9-2.6,5.9-5.9c0-3.3-2.6-5.9-5.9-5.9H166.2v-24.3l28.6-55.2c1.2-3.1,3.6-7.5,0.6-8.6  c-3.1-1.1-5.5,1.4-6.6,4.4l-27.2,51.7L136.4,273c-11.9-11-30.9-15.7-42.1-15.7h-6.1c-3.3,0-5.9,1.6-5.9,4.9c0,3.3,2.6,2.9,5.9,2.9  h6.1c8.6,0,26.6,3.9,41.4,17.3l22.7,17.7v30.4C158.4,333.8,161,336.4,164.3,336.4L164.3,336.4z">
                                                                            </path>
                                                                            <path
                                                                                d="M234.9,283.1c0-3.2-2.6-5.8-5.8-5.8s-5.8,2.6-5.8,5.8s2.6,5.8,5.8,5.8S234.9,286.3,234.9,283.1z">
                                                                            </path>
                                                                            <path
                                                                                d="M40.8,272.4c0-3.2-2.6-5.8-5.8-5.8c-3.2,0-5.8,2.6-5.8,5.8s2.6,5.8,5.8,5.8C38.2,278.2,40.8,275.6,40.8,272.4z">
                                                                            </path>
                                                                        </g>
                                                                        <path
                                                                            d="M174.3,64.2c-5.8,17-17.6,31.2-33.3,40l-11.3,6.3c-10.8,6-23,9.2-35.4,9.2H3.8c-2.1,0-3.7,3.7-3.7,5.7s1.7,5.7,3.7,5.7h90.5 h82c2.1,0,4.7-3.7,4.7-5.7s-2.7-5.7-4.7-5.7H128c1.8-0.8,3.6-1.8,5.4-2.7l11.3-6.3C162,101,175,85.3,181.3,66.6l4.8-14.1 c1.3-3.7-0.6-9.3-5.3-10.8l-9.7-3.3c-3.7-1.3-9.3,0.6-10.8,5.3l-4.8,14.1c-4.2,12.4-12.8,22.7-24.2,29.1l-11.3,6.3 c-7.8,4.4-16.7,6.7-25.7,6.7H3.8c-2.1,0-3.7,1.7-3.7,3.7c0,2.1,1.7,3.7,3.7,3.7h90.5c10.3,0,20.4-2.6,29.3-7.7l11.3-6.3 c13-7.3,22.8-19.1,27.6-33.2l4.8-14.1c0.3-0.2-0.1-0.7,1.4-0.7l9.7,3.3c0.2,0.3,0.7-0.1,0.7,1.4L174.3,64.2z">
                                                                        </path>
                                                                        <path
                                                                            d="M229.3,64.2c5.8,17,17.6,31.2,33.3,40l11.3,6.3c10.8,6,23,9.2,35.4,9.2h90.5c2.1,0,3.7,3.7,3.7,5.7s-1.7,5.7-3.7,5.7h-90.5 h-82c-2.1,0-4.7-3.7-4.7-5.7s2.7-5.7,4.7-5.7h48.4c-1.8-0.8-3.6-1.8-5.4-2.7l-11.3-6.3c-17.3-9.7-30.3-25.3-36.7-44.1l-4.8-14.1 c-1.3-3.7,0.6-9.3,5.3-10.8l9.7-3.3c3.7-1.3,9.3,0.6,10.8,5.3l4.8,14.1c4.2,12.4,12.8,22.7,24.2,29.1l11.3,6.3 c7.8,4.4,16.7,6.7,25.7,6.7h90.5c2.1,0,3.7,1.7,3.7,3.7c0,2.1-1.7,3.7-3.7,3.7h-90.5c-10.3,0-20.4-2.6-29.3-7.7l-11.3-6.3 c-13-7.3-22.8-19.1-27.6-33.2l-4.8-14.1c-0.3-0.2,0.1-0.7-1.4-0.7l-9.7,3.3c-0.2,0.3-0.7-0.1-0.7,1.4L229.3,64.2z">
                                                                        </path>
                                                                        <path
                                                                            d="M150.8,235.9c0-3.2-2.6-5.8-5.8-5.8c-3.2,0-5.8,2.6-5.8,5.8c0,3.2,2.6,5.8,5.8,5.8C148.2,241.7,150.8,239.1,150.8,235.9z">
                                                                        </path>
                                                                        <path
                                                                            d="M295.8,247.5c0-3.2-2.6-5.8-5.8-5.8s-5.8,2.6-5.8,5.8s2.6,5.8,5.8,5.8S295.8,250.7,295.8,247.5z">
                                                                        </path>
                                                                        <path
                                                                            d="M113.3,304.8c0-3.2-2.6-5.8-5.8-5.8s-5.8,2.6-5.8,5.8c0,3.2,2.6,5.8,5.8,5.8S113.3,308,113.3,304.8z">
                                                                        </path>
                                                                        <path
                                                                            d="M338.7,304.8c0-3.2-2.6-5.8-5.8-5.8s-5.8,2.6-5.8,5.8c0,3.2,2.6,5.8,5.8,5.8S338.7,308,338.7,304.8z">
                                                                        </path>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascipt:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                Rehabilitation of burns and scars</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-613280c elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="613280c" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 403.4 403.4"
                                                                        style="enable-background:new 0 0 403.4 403.4;"
                                                                        xml:space="preserve">
                                                                        <g id="layer2">
                                                                            <path id="path2753"
                                                                                d="M61.7,8.9v1.9c-4.7,0.8-9.2,2.7-13.2,5.5L47.1,15c-1.1-1.1-2.5-1.7-4.1-1.7  c-5.2,0-7.7,6.3-4.1,9.9l1.3,1.3c-2.9,4.2-4.8,8.9-5.6,13.7h-1.8c-7.7,0-7.7,11.5,0,11.5h2c0.9,4.8,2.9,9.4,5.9,13.5l-1.2,1.3  c-5.5,5.5,2.8,13.5,8.2,8.1l1.4-1.4c3.8,2.5,8,4.2,12.4,4.9V78c0,7.7,11.5,7.6,11.5,0v-1.9c4.7-0.8,9.2-2.7,13.2-5.5l1.3,1.3  c5.6,5.1,13.4-2.5,8.2-8.2l-1.3-1.4c2.7-3.9,4.5-8.2,5.4-12.7h2c7.7,0,7.7-11.5,0-11.5h-1.8c-0.8-4.7-2.6-9.3-5.4-13.4l1.4-1.4  c3.8-3.7,1.1-10.1-4.2-9.9c-1.5,0-2.9,0.7-4,1.7l-1.3,1.3c-4.1-2.9-8.7-4.8-13.5-5.7V8.9c0-3.2-2.6-5.9-5.9-5.8  C64.2,3.2,61.6,5.8,61.7,8.9z M178.5,7.6v112.7l-13.3,9.2c-1.6-11.3-4.5-23.1-10.4-33.2c-7-12.1-18.5-21.4-36.1-21.4  c-28.7,0-53.8,20.5-71.8,47.3s-29.4,60.3-29.8,89.5c-0.3,23.5,5.3,48.2,15.9,68s26.8,35.2,47.5,37.2c22.7,2.2,44.4-13.1,60-32.6  c15.8-19.8,26.6-44.9,26.6-66.9v-40.7l34.5-23.9l34.5,23.9v40.7c0,3.9,0.3,7.9,1,12c1.2,7.6,12.6,5.8,11.4-1.8  c-0.6-3.5-0.9-7-0.9-10.2v-32.7l31.3,21.7c6.4,4.3,13-5.1,6.6-9.4l-80.6-56c-1.1-0.8-2.5-1.1-3.8-1c-1,0.1-2,0.4-2.8,1L117.9,197  c-6.6,4.6-0.1,13.9,6.3,9.6l31.4-21.8v32.7c0,18-9.7,41.6-24.1,59.7c-14.7,18.4-33,30-49.8,28.3c-15.7-1.5-29-13.4-38.5-31.2  c-3.1-5.8-7.8-17.3-10-24c18.5,2.9,31,0.1,45-10.6c0.7,0.9,1.3,1.8,2,2.7c2.1,2.6,7.4,7,9.8,9.2c2.4,2.2,5,4.2,7.8,5.9  c3.5,2.2,7.7-3.6,1.2-7.8c-2.2-1.4-4.3-3-6.3-4.8c-2-1.8-3.8-3.7-5.5-5.8c-0.8-1-2.6-3-3.3-4.1c3.1-3.4,5.9-6.3,8.3-10.5  c2.2-3.8,3.4-7.6-0.1-7.6c-2.1,0-4,1.1-5,3c-3.2,5.7-7.4,10.2-10.2,12.7c-11.8,10.6-28.1,14.8-43.9,10.5c-0.4-0.1-0.7-0.2-1.2-0.3  c-2.2-10.2-3.3-20.6-3.2-30.8c0.3-23.8,9.1-52.3,23.2-76c0.5,0.4,1,0.8,1.5,1.1c2.2,1.4,4.3,3,6.3,4.8c2,1.8,3.8,3.7,5.5,5.8  c1.1,1.4,2.1,2.8,3.1,4.3c-0.9,1.9-1.7,4-2.4,6c-1,3.1-1.8,6.4-2.3,9.7c-0.5,3.3-0.8,6.7-0.7,10.1c0,7.6,6.6,7.7,6.5-0.1  c0-2.8,0.2-5.6,0.6-8.3c0.4-2.7,1-5.3,1.9-7.8c0.7-2.1,1.6-4.2,2.6-6.2c0.8,0.1,6.6,0.2,7.3,0.3c2.7,0.4,5.2,1,7.7,1.9  c2.5,0.8,5.1,1.9,7.4,3.1c7.1,3.5,12-3,5.3-6.2c-2.9-1.5-5.9-2.8-9-3.8c-3.1-1-6.4-1.8-9.7-2.3c-2.3-0.4-7.6-1.6-10-1.7  c-0.8-1.1-1.5-2.2-2.4-3.2c-2.1-2.6-4.4-5-6.9-7.2c-2.4-2.2-5-4.1-7.8-5.9c-0.5-0.3-1-0.6-1.5-0.9c16.6-23.8,41.3-43,63.8-43  c12.6,0,20.5,6,26.1,15.7c5.5,9.6,8.4,22.7,9.6,34.8l-36.8,25.6c-6.3,4.2,0,13.9,6.6,9.4l63.3-43.9c1.5-1.1,2.5-2.8,2.5-4.7V7.6  c0.1-3.2-2.5-5.8-5.9-5.8C180.7,1.9,178.4,4.7,178.5,7.6L178.5,7.6z M213.1,7.6v115.8c0,1.9,0.9,3.7,2.5,4.8l63.3,43.9  c6.4,4.4,12.9-5,6.6-9.4L248.6,137c1.3-12.1,4.1-25.3,9.6-34.8c5.2-9,13-15.7,26.2-15.7c22.5,0,45.1,17.2,61.7,41  c-0.6,0.3-1,0.6-1.5,1c-2.7,1.7-5.3,3.7-7.8,5.9c-2.4,2.2-4.7,4.6-6.8,7.2c-0.8,1-1.6,2.1-2.4,3.3c-2.3,0.1-5.7,0.3-8,0.7  c-3.3,0.5-6.5,1.3-9.7,2.3c-3.1,1-6.1,1.3-9,2.8c-6.8,3.6-1.7,9.7,5.3,6.2c2.3-1.2,4.8-2.3,7.3-3.1c2.5-0.8,8.1-1.5,10.8-1.9  c0.8-0.1,1.5-0.2,2.3-0.3c1,2,1.9,5,2.6,7.2c0.8,2.5,1.5,8.1,1.9,10.8c0.4,2.7,0.6,5.5,0.6,8.3c0,7.9,6.5,7.7,6.5,0.1  c0-3.4-0.2-6.8-0.7-10.1c-0.5-3.3-1.3-9.5-2.3-12.7c-0.7-2-1.5-4-2.4-6c1-1.5,2-3,3.1-4.4c1.7-2.1,3.6-4.1,5.5-5.8  c2-1.8,4.1-3.4,6.3-4.8c0.5-0.3,0.9-0.7,1.5-1c14.1,23.7,24.8,55.1,25.2,78.9c0.1,6.5-0.3,13.2-1.2,19.8  c-1.1,7.7,10.6,9.1,11.4,1.5c1-7.2,1.5-14.4,1.4-21.5c-0.4-29.2-11.8-62.7-29.8-89.5c-18-26.8-43.1-47.3-71.8-47.3  c-17,0-28.7,8.6-36.1,21.4c-5.8,10.1-8.8,21.9-10.4,33.2l-13.3-9.2V7.6c0.1-3.2-2.7-5.8-5.9-5.8C215.6,1.8,213,4.7,213.1,7.6  L213.1,7.6z M67.4,17.4c14.9,0,26.2,12.3,26,26c0,15.2-12.6,26-26,26c-13.4,0-26.1-10.8-26.1-26C41.4,29.4,52.8,17.4,67.4,17.4z   M60.1,30.2c-1.6,0-3.1,0.6-4.2,1.7c-2.3,2.3-2.3,5.9,0,8.2c2.3,2.3,5.9,2.3,8.1,0c2.3-2.3,2.3-5.9,0-8.2  C63,30.9,61.6,30.3,60.1,30.2z M71.6,45.1c-1.6,0-3.1,0.6-4.2,1.7c-2.3,2.3-2.3,5.9,0,8.2c2.3,2.3,5.9,2.3,8.1,0  c2.3-2.3,2.3-5.9,0-8.2C74.5,45.8,73.1,45.2,71.6,45.1z M288.1,105.6c-1.6,0-3.1,0.6-4.2,1.7c-2.3,2.3-2.3,5.9,0,8.2  c2.3,2.3,5.9,2.3,8.1,0c2.3-2.3,2.3-5.9,0-8.2C291,106.3,289.6,105.6,288.1,105.6z M109.4,117.2c-1.6,0-3.1,0.6-4.2,1.7  c-2.3,2.3-2.3,5.9,0,8.2c2.3,2.3,5.9,2.3,8.1,0c2.3-2.3,2.3-5.9,0-8.2C112.3,117.8,110.9,117.2,109.4,117.2L109.4,117.2z   M311.1,186.3c-1.6,0-3.1,0.6-4.2,1.7c-2.3,2.3-2.3,5.9,0,8.2c2.3,2.3,5.9,2.3,8.1,0s2.3-5.9,0-8.2  C314.1,187,312.6,186.3,311.1,186.3z M80.6,192.1c-1.6,0-3.1,0.6-4.2,1.7c-2.3,2.3-2.3,5.9,0,8.2c2.3,2.3,5.9,2.3,8.1,0  c2.3-2.3,2.3-5.9,0-8.2C83.5,192.7,82.1,192.1,80.6,192.1z M351.5,192.1c-1.6,0-3.1,0.6-4.2,1.7c-2.3,2.3-2.3,5.9,0,8.2  c2.3,2.3,5.9,2.3,8.1,0c2.3-2.3,2.3-5.9,0-8.2C354.4,192.7,353,192.1,351.5,192.1z M51.8,209.4c-1.6,0-3.1,0.6-4.2,1.7  c-2.3,2.3-2.3,5.9,0,8.2c2.3,2.3,5.9,2.3,8.1,0c2.3-2.3,2.3-5.9,0-8.2C54.7,210,53.3,209.4,51.8,209.4z M305.3,221v8.8  c-11.7,1.1-23.2,5.7-32.8,13.6l-6.2-6.2c-1.2-1.3-3-1.8-4.7-1.7c-4.9,0.5-6.9,6.5-3.4,9.8l6.3,6.2c-8.2,9.9-12.7,21.7-13.7,33.8  H242c-7.6,0.2-7.8,11.3,0,11.5h8.9c1.3,12,6.3,23.6,14.7,33.2l-6.1,6.1c-5.4,5.4,2.7,13.6,8.2,8.2l6.3-6.4  c9.3,7.2,20.2,11.3,31.3,12.4v8.8c0,7.9,11.5,7.7,11.5,0v-8.8c11.7-1.1,23.2-5.6,32.8-13.6l6.3,6.2c5.6,5.4,13.5-2.7,8.1-8.2  l-6.2-6.2c7.7-9.3,12.2-20.4,13.5-31.7h8.9c7.7-0.2,7.7-11.4,0-11.5h-8.7c-0.9-11.9-5.3-23.5-13.2-33.2l6.3-6.3  c3.7-3.7,1-10.1-4.3-9.9c-1.5,0-2.8,0.6-3.8,1.7l-6.2,6.2c-9.7-8.2-21.4-13-33.3-14.1V221c0-3.3-2.6-5.8-5.9-5.8  C307.8,215.3,305.2,217.8,305.3,221L305.3,221z M126.7,226.7c-1.6,0-3.1,0.6-4.2,1.7c-2.3,2.3-2.3,5.9,0,8.2c2.3,2.3,5.9,2.3,8.1,0  c2.3-2.3,2.3-5.9,0-8.2C129.6,227.3,128.2,226.7,126.7,226.7z M363.9,291.1c-0.2,24.2-19.3,51.4-52.9,51.8  c-33.7-0.4-52.5-28.5-52.8-51.6c-1.1-26.1,20.1-54,52.9-54.1C341.2,237.5,364.2,261.7,363.9,291.1L363.9,291.1z M299.5,261.2  c-1.6,0-3.1,0.6-4.2,1.7c-2.3,2.3-2.3,5.9,0,8.2s5.9,2.3,8.1,0c2.3-2.3,2.3-5.9,0-8.2C302.5,261.9,301,261.3,299.5,261.2z   M144.3,315.7v3c-5.8,0.9-11.6,3.2-16.5,6.8l-2.1-2.1c-1.1-1.1-2.6-1.7-4.2-1.7c-5.2,0-7.6,6.4-4,9.8l2.1,2.1  c-3.8,5.1-6.1,11.1-6.9,17.1h-2.9c-7.7,0.2-7.7,11.4,0,11.5h3.1c1,6,3.5,11.8,7.4,16.8l-2,2c-5.3,5.5,2.6,13.4,8.2,8.1l2.2-2.2  c4.7,3.3,10.1,5.3,15.6,6.2l0,2.9c0.2,7.7,11.4,7.7,11.5,0v-2.9c5.8-0.9,11.5-3.2,16.5-6.8l2.1,2.1c5.8,5.5,13.5-2.8,8.1-8.1  l-2.1-2.2c3.5-4.8,5.8-10.2,6.7-15.9h3.1c7.7-0.2,7.7-11.4,0-11.5h-2.9c-0.8-5.9-3.1-11.7-6.7-16.8l2.2-2.2c3.7-3.7,0.9-10-4.2-9.9  c-1.5,0-2.9,0.7-4,1.7l-2.1,2c-5-3.8-10.9-6.2-16.8-7.1v-3c0-3.2-2.4-5.8-5.9-5.8C146.5,309.9,144.2,312.8,144.3,315.7L144.3,315.7  z M339.9,278.5c-1.6,0-3.1,0.6-4.2,1.7c-2.3,2.3-2.3,5.9,0,8.2c2.3,2.3,5.9,2.3,8.1,0c2.3-2.3,2.3-5.9,0-8.2  C342.8,279.2,341.4,278.6,339.9,278.5z M180.7,355.8c0,18.1-14.7,30.9-30.8,30.9c-16.7,0-30.7-13.6-30.7-31  c0-15.3,12.3-30.5,30.7-30.5C168.3,325.3,180.7,340.3,180.7,355.8L180.7,355.8z M155.8,338.6c-1.6,0-3.1,0.6-4.2,1.7  c-2.3,2.3-2.3,5.9,0,8.2c2.3,2.3,5.9,2.3,8.1,0s2.3-5.9,0-8.2C158.8,339.2,157.3,338.6,155.8,338.6z M289.6,291.6  c-1.6,0-3.1,0.6-4.2,1.7c-2.3,2.3-2.3,5.9,0,8.2c2.3,2.3,5.9,2.3,8.1,0c2.3-2.3,2.3-5.9,0-8.2C292.5,292.2,291.1,291.6,289.6,291.6  z M144.3,361.7c-1.6,0-3.1,0.6-4.2,1.7c-2.3,2.3-2.3,5.9,0,8.2c2.3,2.3,5.9,2.3,8.1,0s2.3-5.9,0-8.2  C147.2,362.3,145.8,361.7,144.3,361.7L144.3,361.7z M197.2,243.4v1.8c-3.5,0.5-7,1.9-10,4.1l-1.3-1.3c-0.7-0.7-1.6-1-2.5-1  c-3.1,0-4.6,3.9-2.4,6l1.3,1.3c-2.3,3.1-3.7,6.7-4.2,10.4h-1.8c-4.6,0.1-4.6,6.9,0,7h1.9c0.6,3.6,2.1,7.1,4.5,10.1l-1.2,1.2  c-3.2,3.3,1.6,8.1,4.9,4.9l1.3-1.4c2.9,2,6.1,3.2,9.4,3.7l0,1.8c0.1,4.6,6.9,4.6,7,0v-1.8c3.5-0.5,7-1.9,10-4.1l1.3,1.3  c3.5,3.3,8.1-1.7,4.9-4.9l-1.3-1.3c2.1-2.9,3.5-6.2,4.1-9.6h1.9c4.6-0.1,4.6-6.9,0-7h-1.7c-0.5-3.6-1.9-7.1-4-10.1l1.3-1.3  c2.3-2.2,0.5-6-2.5-6c-0.9,0-1.8,0.4-2.4,1.1l-1.2,1.2c-3.1-2.3-6.6-3.7-10.2-4.3v-1.8c0-2-1.5-3.5-3.5-3.5  C198.6,239.9,197.2,241.6,197.2,243.4L197.2,243.4z M217.2,267.7c0,9.7-7.9,16.6-16.6,16.6c-9,0-16.5-7.3-16.5-16.7  c0-8.2,6.6-16.4,16.5-16.4C210.5,251.2,217.2,259.3,217.2,267.7L217.2,267.7z M196.8,261.6c-1.6,0-3.1,0.6-4.2,1.7  c-2.3,2.3-2.3,5.9,0,8.2c2.3,2.3,5.9,2.3,8.1,0s2.3-5.9,0-8.2C199.8,262.2,198.3,261.6,196.8,261.6z M315.6,313.6  c-1.6,0-3.1,0.6-4.2,1.7c-2.3,2.3-2.3,5.9,0,8.2c2.3,2.3,5.9,2.3,8.1,0c2.3-2.3,2.3-5.9,0-8.2C318.5,314.2,317.1,313.6,315.6,313.6  z">
                                                                            </path>
                                                                        </g>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                infections prevention</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3d9163b elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="3d9163b" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Layer_1" x="0px" y="0px"
                                                                        viewBox="0 0 403.4 403.4"
                                                                        style="enable-background:new 0 0 403.4 403.4;"
                                                                        xml:space="preserve">
                                                                        <path
                                                                            d="M191.7,255.7c-5.7-0.3-11.2-2.6-15.3-6.4c-1.6-1.6-1.6-4.5,0-6.4c1.6-1.6,4.1-1.6,5.7-0.3c6.4,5.7,12.4,5.7,18.8,0 c1.9-1.6,4.8-1,6.4,1c1.3,1.9,1.3,4.1-0.3,5.7C202.8,253.1,197.4,255.7,191.7,255.7L191.7,255.7z">
                                                                        </path>
                                                                        <path
                                                                            d="M226.1,275.8c-1-1.6-2.9-2.2-4.5-1.3l-0.6,0.3c-0.6,0.3-1.6,0.6-2.2,0.6c-1.3,0.3-2.2,0.3-3.5,0.3c-2.6,0-4.8-2-7.3-2.6 c-0.6,0-3.5-1-3.8-1c-2.6-0.6-5.4,0-7.7,1.6c-1.6,1.3-3.2,3.6-4.8,3.9c-1.6,0-3.2-2.6-4.5-3.6c-2.2-1.6-5.1-2.2-7.7-1.6 c-0.3,0-3.2,0.6-3.8,1c-2.6,0.3-4.8,2.6-7.3,2.6c-1.3,0-2.2,0-3.5-0.3c-1,0-1.6-0.3-2.2-0.6l-0.6-0.3c-1.6-1-3.8-0.3-4.5,1.3 c-0.6,1.3-0.6,3.2,0.6,4.1c1.3,1.3,3.2,2.2,5.1,2.9c1.6,0.6,3.2,1,4.8,1c2.9,0.6,6.1,0.6,8.9,0.3c1.3-0.3,2.9-0.3,4.1-0.3 c1,0.3,1.6,2,2.6,2.6c1,0.6,2.9,2,3.9,2.3c3.5,1,5.3,1,8.8,0c1-0.3,1.9-1.6,2.9-2.3c1-0.6,2.6-2.3,3.6-2.6c1.6,0,2.9,0,4.1,0.3 c2.9,0.3,6.1,0,8.9-0.3c1.6-0.3,3.2-0.6,4.8-1c1.9-0.6,3.5-1.6,5.1-2.9C226.4,278.7,226.7,277.1,226.1,275.8L226.1,275.8z">
                                                                        </path>
                                                                        <path
                                                                            d="M191.7,303.5c-2.6,0-5.4-0.6-7.7-1.9s-3.2-4.1-1.9-6.4s3.8-3.2,6.1-2.2c2.2,1.3,4.8,1.3,7,0c2.6-1,5.1,0,6.4,2.6 c1,2.2,0,4.8-2.2,6.1C197.1,302.8,194.5,303.5,191.7,303.5L191.7,303.5z">
                                                                        </path>
                                                                        <path
                                                                            d="M111.9,339.5c-0.6,0-1.6-0.3-2.2-0.6c-15.9-8.6-26.8-28.1-27.4-29c-1.3-2.2-0.3-5.1,1.9-6.4c2.2-1.3,5.1-0.3,6.4,1.9 c0,0.3,9.9,17.9,23.6,25.2c2.2,1.3,3.2,4.1,1.9,6.4C115.1,338.5,113.5,339.5,111.9,339.5L111.9,339.5z">
                                                                        </path>
                                                                        <path
                                                                            d="M75,308.9c-0.6,0-1,0-1.6-0.3c-2.6-1-3.8-3.5-2.9-6.1l2.9-8.3c1.6-4.5,6.4-6.7,10.8-5.1l8.3,2.9c2.6,1,3.8,3.5,2.9,6.1 c-1,2.6-3.5,3.8-6.1,2.9l-7.3-2.6l-2.6,7.3C78.8,307.6,76.9,308.9,75,308.9L75,308.9z">
                                                                        </path>
                                                                        <path
                                                                            d="M271.4,339.5c-2.6,0-4.8-2.2-4.8-4.8c0-1.9,1-3.5,2.6-4.1c13.4-7.3,23.6-24.9,23.6-25.2c1.3-2.2,4.1-3.2,6.7-1.6 c2.2,1.3,2.9,4.1,1.9,6.4c-0.3,1-11.5,20.1-27.4,29C273,339.5,272.3,339.5,271.4,339.5L271.4,339.5z">
                                                                        </path>
                                                                        <path
                                                                            d="M308.3,308.9c-1.9,0-3.8-1.3-4.5-3.2l-2.6-7.3l-7.3,2.6c-2.6,1-5.1-0.3-6.1-2.9s0.3-5.1,2.9-6.1l8.3-2.9 c4.5-1.6,9.2,0.6,10.8,5.1l2.9,8.3c1,2.6-0.3,5.1-2.9,6.1C309.6,308.9,309,308.9,308.3,308.9L308.3,308.9z">
                                                                        </path>
                                                                        <path
                                                                            d="M166.1,176.6c-5.4-0.3-10.8-0.6-16.6-1.3c-5.4-0.3-11.2-1-16.6-1.6c0,0-6.4-0.6-8.3-1c-2.6-0.3-5.1-0.3-7.7-0.3 c-5.1,0.6-10.2,2.2-15,4.8c-1,0.6-2.2,0-2.9-1c-0.3-1-0.3-1.9,0.6-2.6c4.8-3.5,10.2-7.4,16.3-8.7c1.6-0.3,7-1,7-1h2.2h8.6 c5.7,0,11.5,0.3,16.9,1c5.7,0.6,11.5,1.6,16.9,3.2c1.9,0.6,3.2,3.6,2.6,5.5S168.1,176.6,166.1,176.6L166.1,176.6z">
                                                                        </path>
                                                                        <path
                                                                            d="M229.3,205.6h6.4c4.1,0,8.3-0.3,12.1-1.3c3.8-0.6,7.7-1.9,11.2-3.5c0,0,1.6-1,1.9-1c1-0.3,1.6-0.6,2.6-0.6 c1.6,0,3.2,0.3,4.8,1c1.9,1,3.5,1.6,5.4,2.2c1,0.3,1.6,1.6,1.3,2.6c-0.3,0.6-0.6,1.3-1.3,1.3c-2.6,0.6-5.1,0.6-7.3,0 c-0.6-0.3-1.3,0-1.9,0c-0.3,0-1.3,1-1.3,1c-4.1,2.9-8.6,4.8-13.7,5.4c-4.8,1-9.2,1.3-14,0.6c-4.8-0.3-9.6-1-14-2.6 c-1.6-0.6-2.6-2.6-1.9-4.1c0.6-1.3,1.9-2.2,3.2-1.9C222.9,205.3,227.4,205.6,229.3,205.6L229.3,205.6z">
                                                                        </path>
                                                                        <path
                                                                            d="M154,205.6c-2.2,0-4.1,0-6.4,0c-4.1,0-8.3-0.3-12.1-1.3c-3.8-0.6-7.7-1.9-11.2-3.5c0,0-1.6-1-1.9-1c-1-0.3-1.9-0.3-2.6-0.6 c-1.6,0-3.2,0.3-4.8,1c-1.9,1-3.5,1.6-5.4,2.2c-1,0.3-1.6,1.6-1.3,2.6c0.3,0.6,0.6,1.3,1.3,1.3c2.6,0.6,5.1,0.6,7.3,0 c0.6-0.3,1.3,0,1.9,0c0.3,0,1.3,1,1.3,1c4.1,2.9,8.6,4.8,13.7,5.4c4.8,1,9.2,1.3,14,0.6c4.8-0.3,9.6-1,14-2.6 c1.6-0.6,2.6-2.6,1.9-4.1c-0.6-1.3-1.9-2.2-3.2-1.9C160.4,205.3,155.9,205.6,154,205.6L154,205.6z">
                                                                        </path>
                                                                        <path
                                                                            d="M215.9,168.2c5.4-1.6,11.2-2.6,16.9-3.2c5.7-0.6,11.5-1,16.9-1h8.6l4.5,0.3c1.6,0.3,3.2,0.3,4.8,0.6 c5.7,1.6,11.5,5.1,16.3,8.7c1,0.6,1.3,1.9,0.3,2.9c-0.6,1-1.9,1.3-2.9,0.6c-4.8-2.6-9.9-4.1-15-4.8c-1.3,0-2.6-0.3-3.8-0.3l-3.8,0.6 l-8.3,1c-5.4,0.6-11.2,1.3-16.6,1.6c-5.4,0.6-11.2,0.6-16.6,1.3c-1.9,0-3.8-1.3-3.8-3.5C213,171.5,214,168.9,215.9,168.2 L215.9,168.2z">
                                                                        </path>
                                                                        <path
                                                                            d="M250,299c1.3-1.3,3.2-1.3,4.5,0.3s1.3,3.2-0.3,4.5c-1.6,1.6-3.2,2.9-4.8,4.5c-1.3,1-3.5,1-4.5-0.6c-1-1.3-1-3.2,0.3-4.5 C247.1,301.6,248.7,300.3,250,299z">
                                                                        </path>
                                                                        <path
                                                                            d="M208.5,325.2c1.9-0.6,3.8-1.3,5.7-2.2c1.6-0.6,3.5,0,4.1,1.6c0.6,1.6,0,3.5-1.6,4.1c-1.9,1-4.1,1.6-6.1,2.2 c-1.6,0.6-3.5-0.3-4.1-1.9C206,327.7,206.6,325.8,208.5,325.2L208.5,325.2z">
                                                                        </path>
                                                                        <path
                                                                            d="M228,315.9c1.9-1,3.5-2.2,5.1-3.5c1.6-1,3.5-0.6,4.5,1c1,1.6,0.6,3.5-1,4.5c-1.9,1.3-3.5,2.6-5.4,3.5c-1.6,1-3.5,0.3-4.5-1 C225.8,319.1,226.4,316.9,228,315.9z">
                                                                        </path>
                                                                        <path
                                                                            d="M278.7,265.5c1-1.6,2.9-1.9,4.5-0.6c1.6,1,1.9,2.9,0.6,4.5c-1.3,1.6-2.6,3.5-3.8,5.1c-1,1.3-2.9,1.6-4.5,0.6 c-1.6-1-1.6-2.9-0.6-4.5C276.5,269,277.7,267.1,278.7,265.5z">
                                                                        </path>
                                                                        <path
                                                                            d="M265.3,283.1c1-1.3,3.2-1.6,4.5-0.6c1.3,1,1.6,3.2,0.6,4.5c0,0,0,0-0.3,0.3c-1.3,1.6-2.9,3.2-4.1,4.8 c-1,1.3-3.2,1.6-4.5,0.6c-1.3-1-1.6-3.2-0.6-4.5l0.3-0.3C262.4,286.3,264,284.7,265.3,283.1z">
                                                                        </path>
                                                                        <path
                                                                            d="M150.2,312.7c1.6,1.3,3.5,2.2,5.1,3.5c1.6,1,1.9,2.9,1,4.5c-1,1.6-2.9,1.9-4.5,1c-1.9-1.3-3.8-2.2-5.4-3.5 c-1.6-1-1.9-2.9-1-4.5C146.4,312.1,148.6,311.4,150.2,312.7L150.2,312.7z">
                                                                        </path>
                                                                        <path
                                                                            d="M118,283.1c1.3,1.6,2.9,3.2,4.1,4.8c1.3,1.3,1.3,3.2,0,4.5s-3.2,1.3-4.5,0c-1.6-1.6-2.9-3.2-4.1-4.8c-1.3-1.3-1.3-3.2,0-4.5 C114.5,281.5,116.7,281.5,118,283.1C118,282.8,118,283.1,118,283.1z">
                                                                        </path>
                                                                        <path
                                                                            d="M104.6,265.5c1.3,1.6,2.2,3.2,3.8,5.1c1,1.3,1,3.5-0.6,4.5c-1.3,1-3.5,1-4.5-0.6c-1.3-1.9-2.6-3.5-3.8-5.1 c-1-1.6-0.6-3.5,0.6-4.5S103.3,264.3,104.6,265.5z">
                                                                        </path>
                                                                        <path
                                                                            d="M133.3,299c1.6,1.3,3.2,2.9,4.8,4.1c1.3,1.3,1.3,3.2,0.3,4.5c-1.3,1.3-2.9,1.3-4.5,0.3c-1.6-1.3-3.2-2.9-4.8-4.5 c-1.3-1.3-1.6-3.2-0.3-4.5C129.8,297.7,131.7,297.7,133.3,299C133,298.7,133.3,299,133.3,299z">
                                                                        </path>
                                                                        <path
                                                                            d="M188.1,329h7c1.6-0.3,3.5,1,3.5,2.6c0.3,1.6-1,3.5-2.6,3.5c-1,0-8,0-8.6,0c-1.6-0.3-2.9-1.9-2.9-3.5 C184.6,329.9,186.2,328.7,188.1,329L188.1,329z">
                                                                        </path>
                                                                        <path
                                                                            d="M169,322.9c1.9,1,3.8,1.6,5.7,2.2c1.6,0.6,2.6,2.2,1.9,4.1c-0.6,1.6-2.2,2.6-4.1,1.9c-1.9-0.6-4.1-1.6-6.1-2.2 c-1.6-0.6-2.2-2.6-1.6-4.1C165.8,323.2,167.4,322.3,169,322.9L169,322.9z">
                                                                        </path>
                                                                        <path
                                                                            d="M326.5,194.1c-0.3-0.3-0.3-0.3-0.6-0.6c5.1-29.3,4.8-81.6-8.9-110.3C294,36,241.4,1.9,191.7,1.9S89.3,36,66.7,83.2 c-14,28.7-14,81.3-8.9,110.3c-0.3,0.3-0.3,0.3-0.6,0.6c-6.7,7.3-4.6,17.9-2.7,30c3.2,18.5,18.4,34.3,34.5,34.3 c6.4,21.7,16.9,42.9,29.4,55c9.2,9.2,19.8,17.5,31.2,24.2c-1.6,14-8.3,45.9-35.1,56.8c-2.6,1-3.5,3.8-2.6,6.4 c0.6,1.9,2.6,2.9,4.5,2.9c0.6,0,5.3,0,5.9-0.3c29.3-11.8,35.9-43,38.5-59.9c7.7,3.5,13.9,5.4,22.2,7.6c6.1,1.3,12.1,1.3,18.2,0 c8.3-1.9,14.6-3.8,22.2-7.6c2.6,16.9,9.2,48.1,38.5,59.9c2.6,1,9.1-0.3,10.4-2.6c1-2.6-0.3-5.1-2.6-6.4 c-26.8-10.8-33.5-42.7-35.1-56.8c11.5-6.7,22-15,31.2-24.2c12.4-12.1,23-33.3,29.4-55c15.4,0,30.3-15.8,33.5-34.3 C329.8,212,333.2,201.5,326.5,194.1L326.5,194.1z M61.7,222.5c-1.9-7.7-5-16.6,0.1-22.7c4.5-4.5,12.5-9,18.6-8.7 c0,5.7,0.3,14.2,0.6,19.6c-3.5-1.3-7-1.9-10.8-1.6c-2.6,0.3-4.5,1.6-4.1,4.1c0.3,2.6,2.6,3.5,5.1,3.1c4.1-0.3,8.3,1.3,10.8,4.1 c1,10.2,2.6,20.1,5.1,30C72.8,251.2,63.9,235.2,61.7,222.5L61.7,222.5z M261.6,307.3c-14.7,14.3-35.2,30.4-62.9,37.1 c-4.5,1-9.2,1-13.7,0c-27.7-6.7-48.3-23.7-62.9-38.1c-23.9-23.3-36-68.2-34.4-126.9c1-14.3,2.9-29,5.7-43 c27.7-4.1,47.6-27.4,60.1-45.3c9.2-13.7,25.2-22,41.8-21.4c14,0.3,26.8,7.7,34.1,19.4c1.9,3.2,5.1,5.1,8.6,5.4h3.2 c1.9,0,4.1,0.3,6.1,0.6c8.9,3.2,14,10.8,19.4,19.1c2,3.4,4.5,7,7.7,10.8c3.2,3.8,10.3,8.3,15.1,10.6c4.1,14.3,6.4,28.3,7,43.6 C297.6,238.1,285.5,284.1,261.6,307.3L261.6,307.3z M283.2,116.5c-2.6-3.2-4.8-6.4-7-9.9c-5.7-8.6-13.1-19.5-24.9-23.6 c-2.9-1-6.1-1.3-8.9-1.3c-1,0-1.9,0-2.9,0c-0.6,0-1-0.3-1.3-1c-8.9-14.3-26.9-23.3-43.8-23.9c-19.8-0.3-40.3,12.2-51.4,28.2 c-13.7,19.1-27.9,40-57.3,38.8c-2.6,0-7.8,4.9-7.8,7.5c0,2.6,4.9,5.8,7.5,5.8h0.3h1c-2.9,14-4.5,28.1-5.4,42.1v5.1 c-4.8,0-6.9,0.3-11.3,2.2c-4.1-28.1-4.2-71.9,7.9-97.1c20.4-44,67.5-74.9,113.7-74.9S284,43.3,305,87c12.1,25.2,14.1,71.1,9.9,99.1 c-4.5-1.9-7.2-2.2-12.3-2.2c0-1.6,0-3.2,0-5.1c-0.3-13.7-2.2-27.1-5.4-40.5c1,0.3,1.9,0.3,3.2,0.6h0.6c2.6,0,6.8-2.9,6.8-5.5 s-3.6-7.5-6.1-7.8C293.7,125.4,288.3,122.6,283.2,116.5L283.2,116.5z M321.3,222.5c-2.3,18.2-15.8,28-24.4,28 c2.2-9.9,3.1-20.1,4.1-30c2.9-3.2,6.7-4.8,10.8-4.1c2.6,0.3,4.8-0.6,5.1-3.1s-1.6-4.1-4.1-4.1c-3.8-0.3-7.3,0.3-10.8,1.6 c0.3-5.4,0.6-13.8,0.6-19.6c6.4,0,13.1,3.6,17.6,7.7C325.3,204.6,323.2,214.8,321.3,222.5L321.3,222.5z">
                                                                        </path>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                Plastic surgery and aesthetic medicine
                                                                            </font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5cb21bb elementor-widget__width-initial icon-box-color elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="5cb21bb" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <a class="elementor-icon elementor-animation-"
                                                                    href="{{ url('javascript:void(0)') }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        id="Capa_1" x="0px" y="0px"
                                                                        viewBox="0 0 486.24 486.24"
                                                                        style="enable-background:new 0 0 486.24 486.24;"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <g>
                                                                                <path
                                                                                    d="M312.3,181.32h-87.24c-2.209,0-4,1.791-4,4v105.8c0,2.209,1.791,4,4,4h87.24c2.209,0,4-1.791,4-4v-105.8   C316.3,183.111,314.509,181.32,312.3,181.32z M308.3,287.12h-79.24v-97.8h79.24V287.12z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path
                                                                                    d="M445.66,311.16h-97.64V138.12c-0.022-11.898-9.662-21.538-21.56-21.56h-7.16V78.64c-0.022-7.148-5.811-12.938-12.96-12.96   h-17.28V31.76c0-2.209-1.791-4-4-4h-12.4V8h19.32c2.209,0,4-1.791,4-4c0-2.209-1.791-4-4-4H189.3   c-12.786,0.021-23.17,10.334-23.28,23.12c0,2.209,1.791,4,4,4c2.209,0,4-1.791,4-4c0-8.439,6.841-15.28,15.28-15.28h75.36V27.6   h-12.4c-2.209,0-4,1.791-4,4v33.92h-17.2c-7.142,0.022-12.92,5.818-12.92,12.96v37.92h-7.08   c-11.898,0.022-21.538,9.662-21.56,21.56v326.56c-0.066,11.929,9.55,21.653,21.48,21.72c0.027,0,0.054,0,0.08,0h84.2h0.48h1.92   h148c16.102-0.022,29.156-13.058,29.2-29.16V340.32C474.816,324.218,461.762,311.182,445.66,311.16z M256.26,35.76h24.8v29.92   h-24.8V35.76z M226.06,78.64c0-2.739,2.221-4.96,4.96-4.96c0.013,0,0.027,0,0.04,0h75.4c2.73,0.022,4.938,2.23,4.96,4.96v37.92   h-85.36V78.64z M211.06,478.2c-7.489,0-13.56-6.071-13.56-13.56V138.12c0-7.489,6.071-13.56,13.56-13.56h115.4   c7.489,0,13.56,6.071,13.56,13.56v173h-42.36c-16.102,0.022-29.156,13.058-29.2,29.16v116.76c0.013,8.021,3.343,15.68,9.2,21.16   H211.06z M467.06,457.08c-0.022,11.693-9.507,21.16-21.2,21.16h-148c-11.693,0-21.178-9.467-21.2-21.16v-86.92h190.4V457.08z    M467.06,362.16h-190.6v-21.84c0.022-11.699,9.501-21.178,21.2-21.2h148c11.73-0.088,21.311,9.349,21.399,21.079   c0,0.04,0,0.08,0.001,0.121V362.16z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path
                                                                                    d="M134.26,220.2h-87.2c-2.209,0-4,1.791-4,4v105.76c0,2.209,1.791,4,4,4h87.2c2.209,0,4-1.791,4-4V224.2   C138.26,221.991,136.469,220.2,134.26,220.2z M130.26,325.96h-79.2V228.2h79.2V325.96z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path
                                                                                    d="M149.98,159.88v-42.4c0-7.135-5.784-12.92-12.92-12.92H44.3c-7.135,0-12.92,5.784-12.92,12.92v42.4   c-11.248,0.816-19.967,10.162-20,21.44v283.36c0.022,11.867,9.613,21.494,21.48,21.56h115.56   c11.898-0.022,21.538-9.662,21.56-21.56V181.32C169.947,170.042,161.228,160.696,149.98,159.88z M136.94,112.56   c2.717,0,4.92,2.203,4.92,4.92v42.28h-12l-0.16-47.2H136.94z M106.3,112.56h15.4v47.2h-15.4V112.56z M98.3,112.56v47.2H83.06   l-0.12-47.2H98.3z M59.54,112.56h15.52v47.2H59.54V112.56z M44.46,112.56h7.24v47.2h-12l-0.16-42.28   C39.54,114.763,41.743,112.56,44.46,112.56z M161.98,464.84c0,7.489-6.071,13.56-13.56,13.56H32.86   c-7.495,0-13.578-6.065-13.6-13.56l0.28-283.36c0.022-7.495,6.105-13.56,13.6-13.56h115.28c7.489,0,13.56,6.071,13.56,13.56   V464.84z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path
                                                                                    d="M36.18,367.12c-2.209,0-4,1.791-4,4v43.68c0.086,2.146,1.852,3.842,4,3.84c2.209,0,4-1.791,4-4v-43.52   C40.18,368.911,38.389,367.12,36.18,367.12z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path
                                                                                    d="M36.18,432.8c-2.209,0-4,1.791-4,4v14c0,2.209,1.791,4,4,4c2.209,0,4-1.791,4-4v-14   C40.18,434.591,38.389,432.8,36.18,432.8z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path
                                                                                    d="M440.26,390.56h-137.2c-2.209,0-4,1.791-4,4v48.84c0,2.209,1.791,4,4,4h137.2c2.209,0,4-1.791,4-4v-48.84   C444.26,392.351,442.469,390.56,440.26,390.56z M436.26,439.4h-129.2v-40.84h129.2V439.4z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path
                                                                                    d="M440.26,337.2h-47.52c-2.209,0-4,1.791-4,4c0,2.209,1.791,4,4,4h47.52c2.209,0,4-1.791,4-4   C444.26,338.991,442.469,337.2,440.26,337.2z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                        <g></g>
                                                                    </svg> </a>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <a href="{{ url('javascript:void(0)') }}">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                Dermo Cosmetics</font>
                                                                        </font>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="elementor-element elementor-element-49e7aec elementor-align-center elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-button"
                                    data-id="49e7aec" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-md"
                                                href="{{ url('javascript:void(0)') }}">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon elementor-align-icon-left">
                                                        <svg aria-hidden="true"
                                                            class="e-font-icon-svg e-fas-arrow-circle-left"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zm28.9-143.6L209.4 288H392c13.3 0 24-10.7 24-24v-16c0-13.3-10.7-24-24-24H209.4l75.5-72.4c9.7-9.3 9.9-24.8.4-34.3l-11-10.9c-9.4-9.4-24.6-9.4-33.9 0L107.7 239c-9.4 9.4-9.4 24.6 0 33.9l132.7 132.7c9.4 9.4 24.6 9.4 33.9 0l11-10.9c9.5-9.5 9.3-25-.4-34.3z">
                                                            </path>
                                                        </svg> </span>
                                                    <span class="elementor-button-text">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Our technologies
                                                            </font>
                                                        </font>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-93b1443 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="93b1443" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jet_parallax_layout_list&quot;:[]}"
                    data-e-bg-lazyload=".elementor-background-overlay">
                    <div class="elementor-background-overlay lazyloaded"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5bb5892 animated fadeInUp"
                            data-id="5bb5892" data-element_type="column"
                            data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-7bc87fa elementor-widget elementor-widget-heading animated fadeInUp"
                                    data-id="7bc87fa" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                    data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Our Partners</font>
                                            </font>
                                        </h2>
                                    </div>
                                </div>
                                <section
                                    class="ltr elementor-section elementor-top-section elementor-element elementor-element-4d1a3d8 ltr elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="4d1a3d8" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jet_parallax_layout_list&quot;:[]}"
                                    data-e-bg-lazyload=".elementor-background-overlay">
                                    <div class="elementor-background-overlay lazyloaded"></div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-043bed1 animated fadeInUp"
                                            data-id="043bed1" data-element_type="column"
                                            data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-3e6d18e elementor-widget elementor-widget-heading animated fadeInUp"
                                                    data-id="3e6d18e" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                    </div>
                                                </div>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-77ea509 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated fadeInUp"
                                                    data-id="77ea509" data-element_type="section"
                                                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;jet_parallax_layout_list&quot;:[]}">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-348bd8f"
                                                            data-id="348bd8f" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-bb7ae9f elementor-widget elementor-widget-text-editor"
                                                                    data-id="bb7ae9f" data-element_type="widget"
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container"
                                                                        style="text-align: center;line-height: 30px;">
                                                                        <p>AMI Technologies is committed to raising the
                                                                            standards of healthcare in Israel; by
                                                                            introducing breakthrough medical technology
                                                                            from the world’s top manufacturers.&nbsp;
                                                                        </p>
                                                                        <p>Over the years, AMI has developed strategic
                                                                            collaborations with leading international
                                                                            suppliers from the USA and Europe. They
                                                                            share AMI’s vision for the development of
                                                                            revolutionary
                                                                            new technologies to improve the lives of
                                                                            people with serious medical conditions.
                                                                        </p>
                                                                        <p>The company’s operational infrastructure and
                                                                            its local market expertise, come from over
                                                                            30 years of experience in the successful
                                                                            implementation of cutting-edge medical
                                                                            technologies;
                                                                            deploying them at clinics and hospitals
                                                                            around the country. AMI adds significant
                                                                            value by providing the training and
                                                                            operational expertise to support clinical
                                                                            demands of all types.
                                                                            AMI proudly dedicates its resources to
                                                                            supporting its partners and customers to
                                                                            ensure its ongoing leadership role in the
                                                                            local medical industry.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="elementor-element elementor-element-c91a688 elementor-widget elementor-widget-gallery animated fadeInUp"
                                                    data-id="c91a688" data-element_type="widget"
                                                    data-settings="{&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;image_hover_animation&quot;:&quot;grow&quot;,&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;aspect_ratio&quot;:&quot;21:9&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;columns&quot;:8,&quot;columns_tablet&quot;:6,&quot;columns_mobile&quot;:3,&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:25,&quot;sizes&quot;:[]},&quot;lazyload&quot;:&quot;yes&quot;,&quot;gallery_layout&quot;:&quot;grid&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}"
                                                    data-widget_type="gallery.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-gallery__container e-gallery-container e-gallery-grid e-gallery--rtl e-gallery--lazyload"
                                                            style="--hgap: 50px; --vgap: 50px; --animation-duration: 350ms; --columns: 8; --rows: 3; --aspect-ratio: 42.857142857142854%; --container-aspect-ratio: 19.413674560733384%;">
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 0; --row: 0;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/stryker-2.png"
                                                                    data-width="230" data-height="100" aria-label=""
                                                                    role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/stryker-2.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 1; --row: 0;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/Galderma_logo.png"
                                                                    data-width="230" data-height="100" aria-label=""
                                                                    role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/Galderma_logo.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 2; --row: 0;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/Becton_Dickinson_logo-BD.png"
                                                                    data-width="230" data-height="100" aria-label=""
                                                                    role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/Becton_Dickinson_logo-BD.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 3; --row: 0;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/ACIST_Logo_GrayBlue-1-1.png"
                                                                    data-width="4500" data-height="1725"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/ACIST_Logo_GrayBlue-1-1.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 4; --row: 0;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/applied.png"
                                                                    data-width="230" data-height="100" aria-label=""
                                                                    role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/applied.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 5; --row: 0;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/bk-medical-logo.png"
                                                                    data-width="230" data-height="100" aria-label=""
                                                                    role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/bk-medical-logo.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 6; --row: 0;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/Lifent_Health-1.png"
                                                                    data-width="230" data-height="100" aria-label=""
                                                                    role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/Lifent_Health-1.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 7; --row: 0;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/medistim.png"
                                                                    data-width="230" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/medistim.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 0; --row: 1;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/Sensible-medical.png"
                                                                    data-width="230" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/Sensible-medical.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 1; --row: 1;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/organ-assist-xvivo-2.png"
                                                                    data-width="230" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/organ-assist-xvivo-2.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 2; --row: 1;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/cutera.png"
                                                                    data-width="230" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/cutera.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 3; --row: 1;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/johnson-johnson-logo.png"
                                                                    data-width="221" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/johnson-johnson-logo.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 4; --row: 1;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/GAMA_logo.png"
                                                                    data-width="230" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/GAMA_logo.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 5; --row: 1;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/jenasurgical.png"
                                                                    data-width="230" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/jenasurgical.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 6; --row: 1;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/Numed-Logo-Colour.png"
                                                                    data-width="230" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/Numed-Logo-Colour.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 7; --row: 1;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/renalguard_logo.png"
                                                                    data-width="230" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/renalguard_logo.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 0; --row: 2;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/corcym.png"
                                                                    data-width="2446" data-height="806"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/corcym.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 1; --row: 2;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/symmetrysurgical_logo.png"
                                                                    data-width="230" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/symmetrysurgical_logo.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 2; --row: 2;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/toray_logo.png"
                                                                    data-width="230" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/toray_logo.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 3; --row: 2;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/TSK.png"
                                                                    data-width="230" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/TSK.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 4; --row: 2;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/tsc-endovision.png"
                                                                    data-width="230" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/tsc-endovision.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 5; --row: 2;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/usmi-logo.png"
                                                                    data-width="230" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/usmi-logo.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 6; --row: 2;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/veol-logo.png"
                                                                    data-width="230" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/veol-logo.png&quot;);">
                                                                </div>
                                                            </div>
                                                            <div class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                                                style="--column: 7; --row: 2;">
                                                                <div class="e-gallery-image elementor-gallery-item__image elementor-animated-item--grow e-gallery-image-loaded"
                                                                    data-thumbnail="./user-assets/upload_images/sigvaris-2.png"
                                                                    data-width="230" data-height="100"
                                                                    aria-label="" role="img"
                                                                    style="background-image: url(&quot;./user-assets/upload_images/sigvaris-2.png&quot;);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="elementor-element elementor-element-fe3235f elementor-widget elementor-widget-gallery animated fadeInUp"
                                    data-id="fe3235f" data-element_type="widget"
                                    data-settings="{&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;image_hover_animation&quot;:&quot;grow&quot;,&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;aspect_ratio&quot;:&quot;21:9&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;columns&quot;:8,&quot;columns_tablet&quot;:6,&quot;columns_mobile&quot;:3,&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:25,&quot;sizes&quot;:[]},&quot;lazyload&quot;:&quot;yes&quot;,&quot;gallery_layout&quot;:&quot;grid&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}"
                                    data-widget_type="gallery.default">
                                    <div class="elementor-widget-container">
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-8c642d6 elementor-align-center button-call-to elementor-widget elementor-widget-button"
                                    data-id="8c642d6" data-element_type="widget"
                                    data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-md"
                                                href="{{ url('javascript:void(0)') }}">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-icon elementor-align-icon-left">
                                                        <svg aria-hidden="true"
                                                            class="e-font-icon-svg e-fas-arrow-left"
                                                            viewBox="0 0 448 512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z">
                                                            </path>
                                                        </svg> </span>
                                                    <span class="elementor-button-text">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">To all our partners
                                                            </font>
                                                        </font>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-f7c74db elementor-section-full_width inner-p elementor-section-height-default lazyloaded"
                    data-id="f7c74db" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jet_parallax_layout_list&quot;:[]}"
                    data-e-bg-lazyload="">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-87e5134"
                            data-id="87e5134" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-b08bd00 elementor-widget elementor-widget-heading animated fadeInUp"
                                    data-id="b08bd00" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                    data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">About Us
                                                </font>
                                            </font>
                                        </h2>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-ca13a21 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated fadeInUp"
                                    data-id="ca13a21" data-element_type="section"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;jet_parallax_layout_list&quot;:[]}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4f9489c"
                                            data-id="4f9489c" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-90b3a2e elementor-widget elementor-widget-heading"
                                                    data-id="90b3a2e" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">
                                                                    My mother. Medical Technologies Ltd. is a leading
                                                                    company in the field of marketing and promoting
                                                                    medical technologies in Israel.

                                                                </font>
                                                            </font>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="ltr elementor-section elementor-inner-section elementor-element elementor-element-870dbb0 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default animated fadeInUp"
                                    data-id="870dbb0" data-element_type="section"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;jet_parallax_layout_list&quot;:[]}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-fae0314"
                                            data-id="fae0314" data-element_type="column">
                                            <div
                                                class="elementor-widget-wrap elementor-element-populated e-swiper-container">
                                                <div class="elementor-element elementor-element-ec932ad elementor-widget elementor-widget-image-carousel elementor-motion-effects-parent e-widget-swiper"
                                                    data-id="ec932ad" data-element_type="widget"
                                                    data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay_speed&quot;:4000,&quot;effect&quot;:&quot;fade&quot;,&quot;speed&quot;:800,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_opacity_effect&quot;:&quot;yes&quot;,&quot;motion_fx_opacity_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:6,&quot;end&quot;:50}},&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;motion_fx_opacity_direction&quot;:&quot;out-in&quot;,&quot;motion_fx_opacity_level&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}"
                                                    data-widget_type="image-carousel.default"
                                                    aria-roledescription="carousel"
                                                    aria-label="Carousel Horizontal scrolling: left and right arrows">
                                                    <div class="elementor-widget-container elementor-motion-effects-element"
                                                        style="--e-transform-transition-duration: 100ms; opacity: 1; will-change: opacity;">
                                                        <div class="elementor-image-carousel-wrapper swiper swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden"
                                                            dir="ltr">
                                                            <div class="elementor-image-carousel swiper-wrapper"
                                                                aria-live="off"
                                                                id="swiper-wrapper-11d49d4fa36f10a48"
                                                                style="transition-duration: 0ms;">
                                                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev"
                                                                    role="group" aria-roledescription="slide"
                                                                    aria-label="3 / 3" data-swiper-slide-index="2"
                                                                    style="width: 641px; transition-duration: 0ms; opacity: 0; transform: translate3d(0px, 0px, 0px);">
                                                                    <figure class="swiper-slide-inner"><img
                                                                            decoding="async"
                                                                            class="swiper-slide-image"
                                                                            src="{{ asset('/user-assets/uploads/2023/05/slider-05.jpg') }}"
                                                                            alt="slider-05"></figure>
                                                                </div>
                                                                <div class="swiper-slide swiper-slide-duplicate-active"
                                                                    role="group" aria-roledescription="slide"
                                                                    aria-label="1 / 3" data-swiper-slide-index="0"
                                                                    style="width: 641px; transition-duration: 0ms; opacity: 0; transform: translate3d(-641px, 0px, 0px);"
                                                                    aria-hidden="true" inert="">
                                                                    <figure class="swiper-slide-inner"><img
                                                                            decoding="async"
                                                                            class="swiper-slide-image"
                                                                            src="{{ asset('/user-assets/uploads/2023/05/slider-04.jpg') }}"
                                                                            alt="slider-04"></figure>
                                                                </div>
                                                                <div class="swiper-slide" role="group"
                                                                    aria-roledescription="slide" aria-label="2 / 3"
                                                                    data-swiper-slide-index="1"
                                                                    style="width: 641px; transition-duration: 0ms; opacity: 0; transform: translate3d(-1282px, 0px, 0px);"
                                                                    aria-hidden="true" inert="">
                                                                    <figure class="swiper-slide-inner"><img
                                                                            decoding="async"
                                                                            class="swiper-slide-image"
                                                                            src="{{ asset('/user-assets/uploads/2022/08/slider-02.jpg') }}"
                                                                            alt="slider-02"></figure>
                                                                </div>
                                                                <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next"
                                                                    role="group" aria-roledescription="slide"
                                                                    aria-label="3 / 3" data-swiper-slide-index="2"
                                                                    style="width: 641px; transition-duration: 0ms; opacity: 0; transform: translate3d(-1923px, 0px, 0px);"
                                                                    aria-hidden="true" inert="">
                                                                    <figure class="swiper-slide-inner"><img
                                                                            decoding="async"
                                                                            class="swiper-slide-image"
                                                                            src="{{ asset('/user-assets/uploads/2023/05/slider-05.jpg') }}"
                                                                            alt="slider-05"></figure>
                                                                </div>
                                                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-visible swiper-slide-active"
                                                                    role="group" aria-roledescription="slide"
                                                                    aria-label="1 / 3" data-swiper-slide-index="0"
                                                                    style="width: 641px; transition-duration: 0ms; opacity: 1; transform: translate3d(-2564px, 0px, 0px);"
                                                                    aria-hidden="true" inert="">
                                                                    <figure class="swiper-slide-inner"><img
                                                                            decoding="async"
                                                                            class="swiper-slide-image"
                                                                            src="{{ asset('/user-assets/uploads/2023/05/slider-04.jpg') }}"
                                                                            alt="slider-04"></figure>
                                                                </div>
                                                            </div>

                                                            <span class="swiper-notification" aria-live="assertive"
                                                                aria-atomic="true"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8cc045c"
                                            data-id="8cc045c" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-84ba247 elementor-widget elementor-widget-text-editor"
                                                    data-id="84ba247" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">For over three
                                                                    decades, the company has been leading the field in
                                                                    Israel as the exclusive representative of the
                                                                    leading medical technology manufacturers in the
                                                                    world (Europe and the USA).</font>
                                                            </font>
                                                        </p>
                                                        <p>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">My mother.
                                                                    Medical Technologies Ltd. has set its sights on
                                                                    making a mark on the world of medicine in Israel,
                                                                    through its expertise in selecting and implementing
                                                                    innovative and advanced technologies
                                                                    for hospitals, clinics and treatment rooms.&nbsp;
                                                                </font>
                                                            </font>
                                                        </p>
                                                        <p>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">The new
                                                                    technologies promoted in Israel by Emi Technologies
                                                                    allow the medical teams to provide more advanced
                                                                    treatment to ensure the improvement of the patients'
                                                                    quality of life.</font>
                                                            </font>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7065de1 elementor-align-right button-call-to elementor-widget elementor-widget-button"
                                                    data-id="7065de1" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a class="elementor-button elementor-button-link elementor-size-md"
                                                                href="{{ url('javascript:void(0)') }}">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span
                                                                        class="elementor-button-icon elementor-align-icon-left">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-arrow-left"
                                                                            viewBox="0 0 448 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z">
                                                                            </path>
                                                                        </svg> </span>
                                                                    <span class="elementor-button-text">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">to
                                                                                continue reading</font>
                                                                        </font>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="elementor-element elementor-element-a81c901 elementor-absolute ani-wrap elementor-widget elementor-widget-html"
                                    data-id="a81c901" data-element_type="widget"
                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                    data-widget_type="html.default">
                                    <div class="elementor-widget-container">
                                        <p class="ani-border"><span class="ani-circle"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="post-tags">
            </div>
        </div>


    </main>

    <footer class="site-footer footer-default">
        <div class="footer-main-content" style="background-color: #223950!important;">
            <div class="container">
                <div class="row">
                    <div class="footer-main-content-elements">
                        <div class="footer-main-content-element footer_1 col-md-4 col-sm-6">
                            <aside class="widget">
                                <div class="widget-title uni-uppercase">
                                    Contact Information
                                </div>
                                <div class="widget-content">
                                    <div class="uni-info-contact">
                                        <ul>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i> 09-7760300
                                            </li>
                                            <li><i class="fa fa-fax" aria-hidden="true"></i> 09-7760303
                                            </li>
                                            <li> <i class="fa fa-map-marker" aria-hidden="true"></i> The carpenter
                                                22 Hod Hasharon
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="footer-main-content-element footer_2 col-md-3 col-sm-6" style="display:none;">
                            <aside class="widget">
                                <h3 class="widget-title uni-uppercase">
                                    <a href="{{ url('#') }}">
                                        <img src="{{ asset('/user-assets/images/logowhite.png') }}" alt=""
                                            class="img-responsive"
                                            style="margin-top: -20px;margin-left: -15px;"></a>
                                </h3>
                                <div class="widget-content">
                                    <div class="uni-footer-newletter">
                                        <div class="uni-social">
                                            <h4>Follow us on social networks
                                            </h4>
                                            <ul>
                                                <li><a href="{{ url('#') }}"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="{{ url('#') }}"><i class="fa fa-facebook"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="footer-main-content-element footer_3 col-md-5 col-sm-6">
                            <aside class="widget">
                                <div class="widget-content">
                                    <div class="uni-quick-link">
                                        <ul>
                                            <li><a href="{{ url('#') }}"> Home</a></li>
                                            <li><a href="{{ url('#') }}"> Our story</a></li>
                                            <li><a href="{{ url('#') }}"> Areas of activity</a></li>
                                            <li><a href="{{ url('#') }}"> Our partners</a></li>
                                            <li><a href="{{ url('#') }}"> Career</a></li>
                                            <li><a href="{{ url('#') }}"> Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="elementor-post__text" style="margin-top:10px;">
                                        <h3
                                            style="font-family: 'Poppins';
                                                font-size: 15px;
                                                font-weight: normal ;
                                                font-style: normal;
                                                font-stretch: normal;
                                                line-height: 1.90;
                                                letter-spacing: normal;
                                                text-align: left;
                                                color: #b2becc!important;
                                            ">
                                            Terms of use and privacy policy

                                        </h3>
                                        <h3
                                            style="font-family: 'Poppins';
                                                font-size: 15px;
                                                font-weight: normal;
                                                font-style: normal;
                                                font-stretch: normal;
                                                line-height: 1.14;
                                                letter-spacing: normal;
                                                text-align: left;
                                                color: #b2becc!important;
                                                ">
                                            Accessibility statement
                                        </h3>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="footer-main-content-element footer_4 col-md-3 col-sm-6">
                            <aside class="widget">
                                <h3 class="widget-title uni-uppercase">
                                    <a href="{{ url('#') }}">
                                        <img src="{{ asset('/user-assets/images/logowhite.png') }}" alt=""
                                            class="img-responsive" style="margin-top: -6px;margin-left: -15px;"></a>
                                </h3>
                                <div class="widget-content">
                                    <div class="uni-footer-newletter">
                                        <div class="uni-social">
                                            <h4>Follow us on social networks
                                            </h4>
                                            <ul>

                                                <li><a href="{{ url('#') }}"><i class="fa-brands fa-linkedin"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="{{ url('#') }}"><i class="fa-brands fa-facebook"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                                <!--li><a href="{{ url('#') }}">
                                                        <svg class="e-font-icon-svg e-fab-linkedin" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="{{ url('#') }}">
                                                        <svg class="e-font-icon-svg e-fab-facebook-f" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
                                                        </a>
                                                        </li-->

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area" style="border-top:1px solid #939393;margin-top:-38px;">
            <div class="container">
                <div class="copyright-content">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p class="copyright-text"><a href="{{ url('#') }}">Powered & Designed by Medical
                                    Online</a></p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <ul class="copyright-menu">
                                <li><a href="{{ url('#') }}">All rights reserved 2023 ©</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <link rel="stylesheet" id="elementor-gallery-css"
        href="{{ asset('/user-assets/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min7359.css?ver=1.2.0') }}"
        media="all">
    <link rel="stylesheet" id="e-animations-css"
        href="{{ asset('/user-assets/plugins/elementor/assets/lib/animations/animations.mina1c3.css?ver=3.14.1') }}"
        media="all">
    <script src="{{ asset('/user-assets/web_theme/js/underscore.mind584.js?ver=1.13.4') }}" id="underscore-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/wp-util.min3781.js?ver=6.2.2') }}" id="wp-util-js"></script>
    <script src="{{ asset('/user-assets/plugins/jet-search/assets/lib/chosen/chosen.jquery.min2e49.js?ver=1.8.7') }}"
        id="jquery-chosen-js"></script>
    <script src="{{ asset('/user-assets/plugins/jet-search/assets/lib/jet-plugins/jet-plugins8a54.js?ver=1.0.0') }}"
        id="jet-plugins-js"></script>
    <script src="{{ asset('/user-assets/plugins/jet-search/assets/js/jet-search324d.js?ver=3.1.0') }}" id="jet-search-js">
    </script>
    <script src="{{ asset('/user-assets/themes/hello-elementor/assets/js/hello-frontend.min8a54.js?ver=1.0.0') }}"
        id="hello-theme-frontend-js"></script>
    <script src="{{ asset('/user-assets/plugins/pojo-accessibility/assets/js/app.min8a54.js?ver=1.0.0') }}"
        id="pojo-a11y-js"></script>
    <script
        src="{{ asset('/user-assets/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.minf269.js?ver=1.0.1') }}"
        id="smartmenus-js"></script>
    <script src="{{ asset('/user-assets/plugins/elementor-pro/assets/lib/lottie/lottie.min3f90.js?ver=5.6.6') }}"
        id="lottie-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/imagesloaded.mineda1.js?ver=4.1.4') }}" id="imagesloaded-js">
    </script>
    <script src="{{ asset('/user-assets/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min7359.js?ver=1.2.0') }}"
        id="elementor-gallery-js"></script>

    <script src="{{ asset('/user-assets/plugins/elementor-pro/assets/js/webpack-pro.runtime.mina1c3.js?ver=3.14.1') }}"
        id="elementor-pro-webpack-runtime-js"></script>
    <script src="{{ asset('/user-assets/plugins/elementor/assets/js/webpack.runtime.mina1c3.js?ver=3.14.1') }}"
        id="elementor-webpack-runtime-js"></script>
    <script src="{{ asset('/user-assets/plugins/elementor/assets/js/frontend-modules.mina1c3.js?ver=3.14.1') }}"
        id="elementor-frontend-modules-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2') }}"
        id="wp-polyfill-inert-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/dist/vendor/regenerator-runtime.min8fa4.js?ver=0.13.11') }}"
        id="regenerator-runtime-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0') }}"
        id="wp-polyfill-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/dist/hooks.min6c65.js?ver=4169d3cf8e8d95a3d6d5') }}"
        id="wp-hooks-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/dist/i18n.mine57b.js?ver=9e794f35a71bb98672ae') }}" id="wp-i18n-js">
    </script>



    <script src="{{ asset('/user-assets/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2') }}"
        id="elementor-waypoints-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/jquery/ui/core.min3f14.js?ver=1.13.2') }}" id="jquery-ui-core-js">
    </script>


    <script src="{{ asset('/user-assets/plugins/elementor-pro/assets/js/elements-handlers.mina1c3.js?ver=3.14.1') }}"
        id="pro-elements-handlers-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>

    <script src="{{ asset('/user-assets/plugins/jet-elements/assets/js/jet-elements.mina117.js?ver=2.6.11') }}"
        id="jet-elements-js"></script>

    <script src="{{ asset('/user-assets/plugins/jet-tabs/assets/js/jet-tabs-frontend.minddb2.js?ver=2.1.22') }}"
        id="jet-tabs-frontend-js"></script>
    <script src="{{ asset('/user-assets/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.mina1c3.js?ver=3.14.1') }}"
        id="e-sticky-js"></script>







    <link rel="stylesheet" id="elementor-gallery-css"
        href="{{ asset('/user-assets/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min7359.css?ver=1.2.0') }}"
        media="all">
    <link rel="stylesheet" id="e-animations-css"
        href="{{ asset('/user-assets/plugins/elementor/assets/lib/animations/animations.mina1c3.css?ver=3.14.1') }}"
        media="all">
    <script src="{{ asset('/user-assets/web_theme/js/underscore.mind584.js?ver=1.13.4') }}" id="underscore-js"></script>

    <script src="{{ asset('/user-assets/web_theme/js/wp-util.min3781.js?ver=6.2.2') }}" id="wp-util-js"></script>
    <script src="{{ asset('/user-assets/plugins/jet-search/assets/lib/chosen/chosen.jquery.min2e49.js?ver=1.8.7') }}"
        id="jquery-chosen-js"></script>
    <script src="{{ asset('/user-assets/plugins/jet-search/assets/lib/jet-plugins/jet-plugins8a54.js?ver=1.0.0') }}"
        id="jet-plugins-js"></script>
    <script src="{{ asset('/user-assets/plugins/jet-search/assets/js/jet-search324d.js?ver=3.1.0') }}" id="jet-search-js">
    </script>
    <script src="{{ asset('/user-assets/themes/hello-elementor/assets/js/hello-frontend.min8a54.js?ver=1.0.0') }}"
        id="hello-theme-frontend-js"></script>

    <script src="{{ asset('/user-assets/plugins/pojo-accessibility/assets/js/app.min8a54.js?ver=1.0.0') }}"
        id="pojo-a11y-js"></script>
    <script
        src="{{ asset('/user-assets/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.minf269.js?ver=1.0.1') }}"
        id="smartmenus-js"></script>
    <script src="{{ asset('/user-assets/plugins/elementor-pro/assets/lib/lottie/lottie.min3f90.js?ver=5.6.6') }}"
        id="lottie-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/imagesloaded.mineda1.js?ver=4.1.4') }}" id="imagesloaded-js">
    </script>
    <script src="{{ asset('/user-assets/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min7359.js?ver=1.2.0') }}"
        id="elementor-gallery-js"></script>
    <script src="{{ asset('/user-assets/plugins/elementor-pro/assets/js/webpack-pro.runtime.mina1c3.js?ver=3.14.1') }}"
        id="elementor-pro-webpack-runtime-js"></script>
    <script src="{{ asset('/user-assets/plugins/elementor/assets/js/webpack.runtime.mina1c3.js?ver=3.14.1') }}"
        id="elementor-webpack-runtime-js"></script>
    <script src="{{ asset('/user-assets/plugins/elementor/assets/js/frontend-modules.mina1c3.js?ver=3.14.1') }}"
        id="elementor-frontend-modules-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2') }}"
        id="wp-polyfill-inert-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/dist/vendor/regenerator-runtime.min8fa4.js?ver=0.13.11') }}"
        id="regenerator-runtime-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0') }}"
        id="wp-polyfill-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/dist/hooks.min6c65.js?ver=4169d3cf8e8d95a3d6d5') }}"
        id="wp-hooks-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/dist/i18n.mine57b.js?ver=9e794f35a71bb98672ae') }}" id="wp-i18n-js">
    </script>



    <script src="{{ asset('/user-assets/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2') }}"
        id="elementor-waypoints-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/jquery/ui/core.min3f14.js?ver=1.13.2') }}" id="jquery-ui-core-js">
    </script>

    <script src="{{ asset('/user-assets/plugins/elementor-pro/assets/js/elements-handlers.mina1c3.js?ver=3.14.1') }}"
        id="pro-elements-handlers-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>

    <script src="{{ asset('/user-assets/plugins/jet-elements/assets/js/jet-elements.mina117.js?ver=2.6.11') }}"
        id="jet-elements-js"></script>

    <script src="{{ asset('/user-assets/plugins/jet-tabs/assets/js/jet-tabs-frontend.minddb2.js?ver=2.1.22') }}"
        id="jet-tabs-frontend-js"></script>
    <script src="{{ asset('/user-assets/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.mina1c3.js?ver=3.14.1') }}"
        id="e-sticky-js"></script>








    <script src="{{ asset('/user-assets/plugin/jquery/jquery-2.0.2.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/process-bar/tox-progress.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/waypoint/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/owl-carouse/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/mediaelement/mediaelement-and-player.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/masonry/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/datetimepicker/moment.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/datetimepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/datetimepicker/bootstrap-datepicker.tr.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/datetimepicker/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/datetimepicker/bootstrap-datetimepicker.fr.js') }}"></script>

    <script src="{{ asset('/user-assets/plugin/lightgallery/picturefill.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/lightgallery/lightgallery.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/lightgallery/lg-pager.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/lightgallery/lg-autoplay.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/lightgallery/lg-fullscreen.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/lightgallery/lg-zoom.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/lightgallery/lg-hash.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/lightgallery/lg-share.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/sticky/jquery.sticky.js') }}"></script>
    <script src="{{ asset('/user-assets/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".fillers_and_injectables").click(function() {
                $("#fillers_and_injectables").modal();
            });
            $(".threads").click(function() {
                $("#threads").modal();
            });
            $(".medical_equipment").click(function() {
                $("#medical_equipment").modal();
            });
            $(".plastic_surgery").click(function() {

                $("#plastic_surgery").modal();
            });
        });
    </script>
    <script src="{{ asset('/user-assets/plugins/jet-tabs/assets/js/jet-tabs-frontend.minddb2.js?ver=2.1.22') }}"
        id="jet-tabs-frontend-js"></script>
    <script src="{{ asset('/user-assets/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.mina1c3.js?ver=3.14.1') }}"
        id="e-sticky-js"></script>

    <link rel="stylesheet" id="elementor-gallery-css"
        href="{{ asset('/user-assets/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min7359.css?ver=1.2.0') }}"
        media="all">
    <link rel="stylesheet" id="e-animations-css"
        href="{{ asset('/user-assets/plugins/elementor/assets/lib/animations/animations.mina1c3.css?ver=3.14.1') }}"
        media="all">
    <script src="{{ asset('/user-assets/web_theme/js/underscore.mind584.js?ver=1.13.4') }}" id="underscore-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/wp-util.min3781.js?ver=6.2.2') }}" id="wp-util-js"></script>
    <script src="{{ asset('/user-assets/plugins/jet-search/assets/lib/chosen/chosen.jquery.min2e49.js?ver=1.8.7') }}"
        id="jquery-chosen-js"></script>
    <script src="{{ asset('/user-assets/plugins/jet-search/assets/lib/jet-plugins/jet-plugins8a54.js?ver=1.0.0') }}"
        id="jet-plugins-js"></script>
    <script src="{{ asset('/user-assets/plugins/jet-search/assets/js/jet-search324d.js?ver=3.1.0') }}" id="jet-search-js">
    </script>
    <script src="{{ asset('/user-assets/themes/hello-elementor/assets/js/hello-frontend.min8a54.js?ver=1.0.0') }}"
        id="hello-theme-frontend-js"></script>
    <script src="{{ asset('/user-assets/plugins/pojo-accessibility/assets/js/app.min8a54.js?ver=1.0.0') }}"
        id="pojo-a11y-js"></script>
    <script
        src="{{ asset('/user-assets/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.minf269.js?ver=1.0.1') }}"
        id="smartmenus-js"></script>
    <script src="{{ asset('/user-assets/plugins/elementor-pro/assets/lib/lottie/lottie.min3f90.js?ver=5.6.6') }}"
        id="lottie-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/imagesloaded.mineda1.js?ver=4.1.4') }}" id="imagesloaded-js">
    </script>
    <script src="{{ asset('/user-assets/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min7359.js?ver=1.2.0') }}"
        id="elementor-gallery-js"></script>
    <script src="{{ asset('/user-assets/plugins/elementor-pro/assets/js/webpack-pro.runtime.mina1c3.js?ver=3.14.1') }}"
        id="elementor-pro-webpack-runtime-js"></script>
    <script src="{{ asset('/user-assets/plugins/elementor/assets/js/webpack.runtime.mina1c3.js?ver=3.14.1') }}"
        id="elementor-webpack-runtime-js"></script>
    <script src="{{ asset('/user-assets/plugins/elementor/assets/js/frontend-modules.mina1c3.js?ver=3.14.1') }}"
        id="elementor-frontend-modules-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2') }}"
        id="wp-polyfill-inert-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/dist/vendor/regenerator-runtime.min8fa4.js?ver=0.13.11') }}"
        id="regenerator-runtime-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0') }}"
        id="wp-polyfill-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/dist/hooks.min6c65.js?ver=4169d3cf8e8d95a3d6d5') }}"
        id="wp-hooks-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/dist/i18n.mine57b.js?ver=9e794f35a71bb98672ae') }}" id="wp-i18n-js">
    </script>


    <script src="{{ asset('/user-assets/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2') }}"
        id="elementor-waypoints-js"></script>
    <script src="{{ asset('/user-assets/web_theme/js/jquery/ui/core.min3f14.js?ver=1.13.2') }}" id="jquery-ui-core-js">
    </script>


    <script src="{{ asset('/user-assets/plugins/elementor-pro/assets/js/elements-handlers.mina1c3.js?ver=3.14.1') }}"
        id="pro-elements-handlers-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>

    <script src="{{ asset('/user-assets/plugins/jet-elements/assets/js/jet-elements.mina117.js?ver=2.6.11') }}"
        id="jet-elements-js"></script>

    <script src="{{ asset('/user-assets/plugins/jet-tabs/assets/js/jet-tabs-frontend.minddb2.js?ver=2.1.22') }}"
        id="jet-tabs-frontend-js"></script>
    <script src="{{ asset('/user-assets/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.mina1c3.js?ver=3.14.1') }}"
        id="e-sticky-js"></script>






    <script src="{{ asset('/user-assets/plugins/elementor/assets/lib/swiper/v8/swiper.min.js?ver=8.4.5') }}"></script>




    <script src="{{ asset('/user-assets/plugin/jquery/jquery-2.0.2.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/process-bar/tox-progress.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/waypoint/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/owl-carouse/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/mediaelement/mediaelement-and-player.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/masonry/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/datetimepicker/moment.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/datetimepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/datetimepicker/bootstrap-datepicker.tr.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/datetimepicker/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/datetimepicker/bootstrap-datetimepicker.fr.js') }}"></script>

    <script src="{{ asset('/user-assets/plugin/lightgallery/picturefill.min.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/lightgallery/lightgallery.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/lightgallery/lg-pager.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/lightgallery/lg-autoplay.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/lightgallery/lg-fullscreen.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/lightgallery/lg-zoom.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/lightgallery/lg-hash.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/lightgallery/lg-share.js') }}"></script>
    <script src="{{ asset('/user-assets/plugin/sticky/jquery.sticky.js') }}"></script>

    <script src="{{ asset('/user-assets/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".fillers_and_injectables").click(function() {

                $("#fillers_and_injectables").modal();
            });

            $(".threads").click(function() {

                $("#threads").modal();
            });
            $(".medical_equipment").click(function() {

                $("#medical_equipment").modal();
            });


            $(".plastic_surgery").click(function() {

                $("#plastic_surgery").modal();
            });


        });
    </script>


</body>

</html>
