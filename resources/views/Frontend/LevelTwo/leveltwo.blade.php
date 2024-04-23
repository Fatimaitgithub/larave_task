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
                        <label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label></a>
                    <input type="checkbox" id="sm1">
                    <ul class="sub-menu" style="background-color: #cae1e8 !important">
                        @foreach ($allcategory as $category)
                            @php
                                $subCategories = $allsubcateory->where('category', $category->id);
                            @endphp

                            <li>
                                <a href="{{ url('/get_category/' . $category->category_slug) }}"
                                    style="color: black !important">
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
                                            <a href="{{ url('/get_subcategory/' . $subCategory->subcategory_slug) }}"
                                                style="color: black !important">
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
                                                        <a href="{{ url('/get_leveltwo/' . $twoLevel->level_two_slug) }}"
                                                            style="color: black !important">
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
                                                <a href="{{ url('/get_category/' . $category->category_slug) }}"
                                                    style="color: black !important">
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
                                                            <a href="{{ url('/get_subcategory/' . $subCategory->subcategory_slug) }}"
                                                                style="color: black !important">
                                                                {{ ucfirst($subCategory->subcategory_title) }}
                                                                @if ($twoLevels->isNotEmpty())
                                                                    <span class="drop-icon">▾</span>
                                                                    <label title="Toggle Drop-down" class="drop-icon"
                                                                        for="sm{{ $subCategory->id }}">▾</label>
                                                                @endif
                                                            </a>
                                                            <input type="checkbox" id="sm{{ $subCategory->id }}">
                                                            <ul class="sub-menu"
                                                                style="background-color: #cae1e8 !important">
                                                                @foreach ($twoLevels as $twoLevel)
                                                                    <li>
                                                                        <a href="{{ url('/get_leveltwo/' . $twoLevel->level_two_slug) }}"
                                                                            style="color: black !important">
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
                                <li class="scroll-to-section"><a href="{{ url('/') }}" class="active">Home
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
        function openNav() {
            document.getElementById("myNav").style.display = "block";
        }

        function closeNav() {
            document.getElementById("myNav").style.display = "none";
        }
    </script>
    <script>
        function toggleSearchPopup() {
            var searchPopup = document.getElementById("searchPopup");
            searchPopup.style.display = searchPopup.style.display === "none" ? "block" : "none";
        }

        function performSearch() {
            // Implement your search logic here
            alert("Performing search...");
        }
    </script>
    <div id="main-content" class="site-main-content">
        <div class="site-content-area">
            <div class="uni-banner-default"
                style="background:url({{ asset('./images/'.$leveltwo->level_two_banner) }}); height: 410px!important;
                     background-size: cover!important;
                     background-position: center center!important;">
                <div class="container">
                    <div class="caption"
                        style="
                           text-align: right;
                           padding: -24px;
                           float: right;
                           margin-top: 76px;
                           ">
                        <h1
                            style="font-family: 'Poppins';
                              font-size: 60px;
                              font-weight: 600;
                              font-style: normal;
                              font-stretch: normal;
                              line-height: 1;
                              letter-spacing: normal;
                              text-align: right;
                              color: #ffffff;
                              ">
                            {{ $category->category_title }}</h1>
                    </div>
                    <!--div class="page-title" style="float: right!important;margin-right: -303px!important;">
                           <div class="page-title-inner" >
                               <h1 style="font-size: 80px!important;margin-top: 201px;  text-transform:unset!important;text-align: right!important;">fillers and injectables
                               </h1>
                           </div>
                           </div-->
                </div>
            </div>
            <div class="copyright-area uni-banner-default banner-sticky bottom-sticky">
                <div class="container">
                    <div class="copyright-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="breadcrumbs" style="line-height: unset!important;">
                                    @php
                                        $unserializeSection = isset($leveltwo->section_name) ? unserialize($leveltwo->section_name) : [];
                                        $unserializeSectionDes = isset($leveltwo->section_description) ? unserialize($leveltwo->section_description) : [];
                                        $unserializeproductTitle = isset($leveltwo->section_product_title) ? unserialize($leveltwo->section_product_title) : [];
                                        $unserializeproductSupplier = isset($leveltwo->section_product_supplier) ? unserialize($leveltwo->section_product_supplier) : [];
                                        $unserializeproductDes = isset($leveltwo->section_product_description) ? unserialize($leveltwo->section_product_description) : [];
                                        $unserializeproductImage = isset($leveltwo->section_product_image) ? unserialize($leveltwo->section_product_image) : [];
                                        $unserializeproductBrand = isset($leveltwo->section_product_brand) ? unserialize($leveltwo->section_product_brand) : [];
                                        $unserializeproductURL = isset($leveltwo->section_product_url) ? unserialize($leveltwo->section_product_url) : [];
                                    @endphp
                                    @foreach ($unserializeSection as $key => $section)
                                        <li><a href="#">{{ $section != '' ? $section : '' }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uni-single-product-left">
                    <div class="uni-siderbar-left">
                        <div class="uni-filter-price sticky-button">
                            <button class="btn-filter-prince myBtn">Contact us for
                                <br> details</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                // Vanilla JavaScript
                var lastScroll = 0;

                window.addEventListener('scroll', function() {
                    var header = document.querySelector('.header-area');
                    header.classList.toggle('sticky-header', window.scrollY > 0);

                    var bannerSticky = document.querySelector('.banner-sticky');
                    bannerSticky.classList.toggle('sticky-banner', window.scrollY > 0);

                    var buttonSticky = document.querySelector('.btn-filter-prince');
                    buttonSticky.classList.toggle('sticky-button', window.scrollY > 0);

                    // Calculate scroll direction
                    var currentScroll = window.scrollY;
                    var scrollDirection = currentScroll > lastScroll ? 'down' : 'up';

                    // Adjust button's position based on scroll direction
                    if (scrollDirection === 'down') {
                        buttonSticky.style.top = '50px'; // Adjust as needed
                        buttonSticky.style.right = '10px'; // Adjust as needed
                    } else {
                        buttonSticky.style.top = 'unset';
                        buttonSticky.style.right = 'unset';
                    }

                    lastScroll = currentScroll;
                });

                // jQuery
                var lastScroll = 0;

                $(document).ready(function() {
                    var nav = $("#nav");
                    var navOffset = nav.offset().top;

                    $(window).scroll(function() {
                        var scrollPos = $(window).scrollTop();
                        nav.toggleClass("sticky-nav", scrollPos > navOffset);

                        var bannerSticky = $(".banner-sticky");
                        bannerSticky.attr("id", "nav");
                        bannerSticky.toggleClass("sticky-banner", scrollPos > navOffset);

                        var buttonSticky = $(".btn-filter-prince");
                        buttonSticky.toggleClass("sticky-button", scrollPos > navOffset);

                        // Calculate scroll direction
                        var scrollDirection = scrollPos > lastScroll ? 'down' : 'up';

                        // Adjust button's position based on scroll direction

                        if (scrollDirection === 'down') {
                            buttonSticky.css({
                                top: '50px',
                                right: '10px'
                            }); // Adjust as needed
                        } else {
                            buttonSticky.css({
                                top: 'unset',
                                right: 'unset'
                            });
                        }

                        lastScroll = scrollPos;
                    });
                });
            </script>

            <style>
                .sticky-header {
                    /* Your styles for the sticky header */
                    background-color: #f8f8f8;
                    position: fixed;
                    top: 0;
                    width: 100%;
                    z-index: 1000;

                }

                .sticky-banner {
                    /* Your styles for the sticky banner */
                    position: fixed;
                    top: 90px;
                    /* Adjust as needed */
                    width: 100%;
                    z-index: 1000;
                }

                .sticky-button {
                    /* Your styles for the sticky button */
                    position: fixed;
                    z-index: 1000;
                    transition: top 0.3s, right 0.3s;
                    /* Add smooth transition for position changes */
                }
            </style>



            <main id="main" class="site-main">
                <div class="uni-shop-body" style="background-color: #ffffff!important; padding: 40px;">
                    <div class="container">
                        <div id="content">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <div class="uni-shop-siderbar-left">
                                        @foreach ($unserializeSection as $key => $section)
                                            <div class="category-product uni-product-wapper">
                                                <div class="category-product uni-product-wapper">
                                                    <div class="row">
                                                        <div class="product-filter">
                                                            <h4 class="woocommerce-ordering"
                                                                style="font-family: 'Poppins';
                                                font-size: 30px;
                                                font-weight: 600;
                                                font-style: normal;
                                                font-stretch: normal;
                                                line-height: 1;
                                                letter-spacing: normal;
                                                text-align: center;
                                                color: #333333;
                                                float: left!important;
                                                margin-top: 22px;">
                                                                {{ $section != '' ? $section : '' }}</h4>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 text-left pt-5">
                                                            <p style="margin-top: 10px">
                                                                {{ isset($unserializeSectionDes[$key]) ? $unserializeSectionDes[$key] : '' }}
                                                            </p>
                                                        </div>
                                                        @if (isset($unserializeproductTitle[$section]))
                                                            @php
                                                                if (!is_array($unserializeproductTitle[$section])) {
                                                                    $unserializeproductTitle[$section] = [$unserializeproductTitle[$section]];
                                                                }
                                                            @endphp
                                                            @foreach ($unserializeproductTitle[$section] as $key => $products)
                                                                <div class="col-md-6 col-sm-6"
                                                                    style="padding-right:0px;">
                                                                    <div class="sculptra_box"
                                                                        style="box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.11);
                                                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                                                /* padding: 59px 57px 111px 8px; */
                                                border-style: dashed;
                                                border-width: 1px 1px 1px 1px;
                                                border-color: #bfbed5;
                                                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                                                border-radius: 10px 10px 10px 10px;margin-top: 35px;
                                                padding-bottom: 30px; height: 280px;">
                                                                        <div class="item-icons"
                                                                            style="
                                                   position: absolute;
                                                   right: 31px;
                                                   /* left: 5px; */
                                                   -webkit-transform: translateY(-50%);
                                                   -ms-transform: translateY(-50%);
                                                   transform: translateY(-50%);
                                                   display: -webkit-box;
                                                   display: -ms-flexbox;
                                                   /* display: flex; */
                                                   -webkit-box-align: center;
                                                   -ms-flex-align: center;
                                                   align-items: center;
                                                   -webkit-box-pack: center;
                                                   -ms-flex-pack: center;
                                                   /* justify-content: center; */
                                                   width: 142px;
                                                   height: 58px;
                                                   background-image: linear-gradient(180deg, #FFFFFF 0%, #ECF0F4 100%);
                                                   border-color: #bfbed5;
                                                   border-radius: 50px 50px 50px 50px;
                                                   /* margin: auto; */
                                                   border-width: 1px 1px 1px 1px !important;
                                                   border-style: dashed;">
                                                                            <img src="{{ asset(isset($unserializeproductBrand[$section][$key]) ? './images/' . $unserializeproductBrand[$section][$key] : '') }}"
                                                                                alt="" class="img-responsive">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <h3
                                                                                style="font-family: 'Poppins';
                                                      font-size: 23px;
                                                      font-weight: 600;
                                                      font-style: normal;
                                                      font-stretch: normal;
                                                      line-height: 1.50;
                                                      letter-spacing: normal;
                                                      text-align: left;
                                                      color: #333333;
                                                      margin-top: 15px">
                                                                                {{ $products != '' ? $products : '' }}
                                                                            </h3>
                                                                            <span
                                                                                style="font-size: 15px;
                                                      font-weight: 400;
                                                      line-height: 1.2em;
                                                      letter-spacing: var(--e-global-typography-a2f32b9-letter-spacing);
                                                      word-spacing: var(--e-global-typography-a2f32b9-word-spacing);
                                                      color: #223950;
                                                      ">{{ $unserializeproductDes[$section][$key] }}</span>
                                                                            <br><a href="#">
                                                                                <span
                                                                                    style="font-size: 14px;
                                                      font-weight: 400;
                                                      line-height: 2.2em;
                                                      color: #3073a4;
                                                      ">
                                                                                    Supplier:
                                                                                    {{ isset($unserializeproductSupplier[$section][$key]) ? $unserializeproductSupplier[$section][$key] : '' }}
                                                                                </span> </a>
                                                                        </div>
                                                                        <div class="col-md-6"
                                                                            style="margin-bottom: 70px">
                                                                            <img decoding="async"
                                                                                src="{{ asset(isset($unserializeproductImage[$section][$key]) ? './images/' . $unserializeproductImage[$section][$key] : '') }}"
                                                                                class="elementor-animation-shrink"
                                                                                alt="" loading="lazy"
                                                                                style="padding-top: -14px;margin-top: 70px; width:100% ;">
                                                                        </div>
                                                                        <a href="{{ isset($unserializeproductURL[$section][$key]) ? $unserializeproductURL[$section][$key] : '#' }}"
                                                                            class="vk-btn  vk-btn-xs vk-btn-default  bg-3f97d">
                                                                            <span class="title">to the product
                                                                                page</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row mobile_btn" style="display:none;">
                                                    <div class="col-md-3">
                                                        <div class="uni-single-product-left">
                                                            <div class="uni-siderbar-left">
                                                                <div class="uni-filter-price"
                                                                    style="margin-top: unset!important;">
                                                                    <button class="btn-filter-prince myBtn mob_bt_l"
                                                                        style="width:260px!important;">Contact
                                                                        us
                                                                        for details</button>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
    </div>
    <!-- Modal start-->
    <div class="modal fade" id="myModal" role="dialog" style="margin-top: 98px;">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content"
                style="animation-duration: 0.8s!important;
                  background-color: #f5f5f5 !important;
                  border-radius: 0px 0px 0px 0px !important;
                  box-shadow: 2px 8px 23px 3px rgba(0,0,0,0.2) !important">
                <div class="modal-header" style="border-bottom:unset!important;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"
                        style="
                        font-size: 24px!important;
                        font-weight: 600;
                        font-style: normal;
                        font-stretch: normal;
                        line-height: 1.50;
                        letter-spacing: normal;
                        text-align: center;
                        color: #333333;">
                        Contact the representative : fillers and injectables</h4>
                    <p
                        style="
                        font-size: 16px!important;
                        font-weight: 600;
                        font-style: normal;
                        font-stretch: normal;
                        line-height: 1.5;
                        letter-spacing: normal;
                        text-align: center;
                        color: #3073a4;">
                        Do you have any questions? Leave details here and we will get back to you as
                        soon as possible:​
                    </p>
                </div>
                <div class="modal-body">
                    <div class="uni-single-department-appointment" style="padding-top:unset!important;">
                        <div class="uni-single-department-appointment-form" style="padding-top:unset!important;">
                            <form action="contact_process.php" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group form-group">

                                            <input type="text" class="form-control" name="fname" value=""
                                                placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group form-group">
                                            <input type="text" class="form-control" name="lname" value=""
                                                placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group form-group">
                                            <input type="text" class="form-control" name="name_of_clinic"
                                                value="" placeholder="Name of clinic/medical center">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group form-group">
                                            <input type="email" class="form-control" required name="email"
                                                value="" placeholder="email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group form-group">
                                            <input type="tel" class="form-control" name="phone" value=""
                                                placeholder="phone number">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group form-group">
                                            <select class="form-control" name="product_name" style="height: 50px">
                                                <option>Select Product from list</option>
                                                <option>Restylane</option>
                                                <option>Sculptra</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h3 class="contact_mobv"
                                            style="
                                                    font-size: 12px;
                                                    font-weight: 300;
                                                    font-style: normal;
                                                    font-stretch: normal;
                                                    line-height: 1.5;
                                                    letter-spacing: normal;
                                                    text-align: left;
                                                    color: #787874;">
                                            <input id="paymentmethodcheque" type="checkbox"
                                                class="input-radio checkbox-create-account" name="payment_method"
                                                value="cheque" data-order_button_text="">

                                            <label for="payment_method_cheque">
                                                I agree to receive updates and promotions from time to time
                                            </label>
                                        </h3>
                                        <div class="input-group form-group" style="margin-top:10px;">
                                            <button type="submit" class="vk-btn vk-btn-send"
                                                style="float: left;text-transform: unset!important;" ;><i
                                                    class="fa fa-arrow-right"></i> Sending</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>

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
                                            class="img-responsive" style="margin-top: -20px;margin-left: -15px;"></a>
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
                                            <li><a href="{{ url('/') }}"> Home</a></li>
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
