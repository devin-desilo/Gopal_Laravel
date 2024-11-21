<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="{{ url('assets/images/favicon.ico')}}">
    <title>{{ $title  ?? 'Gopal Agri Export'}}</title>
    <link href="{{ url('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/odometer-theme-default.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/global.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />




    <style>
        .mobile-drawer {
            width: 100vw;
            height: 0;
            overflow: hidden;
            background-color: #210805;
            transition: height 0.3s ease;
        }

        .mobile-drawer.open {
            height: calc(100vh - 91.69px);
        }

        .mobile-drawer nav ul {
            list-style: none;
            padding: 20px;
            margin: 0;
        }

        .mobile-drawer nav ul li {
            margin: 10px 0;
            font-size: 14px;
        }

        .mobile-drawer nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
        }

        .mobile-drawer nav ul li a:hover {
            color: #F5811E;
        }


        .search-field {
            background-color: transparent;
            background-image: url("data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%23ffffff%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Ccircle%20cx%3D%2211%22%20cy%3D%2211%22%20r%3D%228%22%2F%3E%3Cpath%20d%3D%22m21%2021-4.3-4.3%22%2F%3E%3C%2Fsvg%3E");
            background-position: 5px center;
            background-repeat: no-repeat;
            background-size: 24px 24px;
            border: none;
            cursor: pointer;
            height: 40px;
            margin: 3px 0;
            padding: 0 0 0 34px;
            position: relative;
            -webkit-transition: width 400ms ease, background 400ms ease;
            transition: width 400ms ease, background 400ms ease;
            width: 0px;
            cursor: pointer;
            color: #FFF;
        }



        .search-field:focus {
            background-color: #210805;
            border: 1px solid #210805;
            background-size: 24px 20px;
            border-radius: 10px;
            cursor: text;
            outline: 0;
            width: 250px;
            color: #FFF;
        }

        .search-form .search-submit {
            display: none;
        }

        .active-text {
            color: #f78914 !important;
        }
    </style>
</head>

<body id="body">

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img class="" src="{{ url('assets/images/preloader.png') }}" alt="">
                </div>
            </div>
        </div>

        <!-- start header-section -->
        <header class="relative z-[111] Scroller-bg">
            {{-- <div class="absolute left-0 top-0 z-10 sm:hidden">
                <img src="{{ url('assets/images/header-shape1.png') }}" alt="">
    </div>
    <div class="absolute right-0 top-0 z-10  sm:hidden">
        <img src="{{ url('assets/images/header-shape2.png') }}" alt="">
    </div> --}}
    <h1 class="hidden">section heading hidden</h1>
    <div class="py-[20px] hidden z-10">
        <div class="wraper">
            <div class="flex gap-4 items-center justify-between">

                <div class="col-span-6">
                    <div class="flex   md:justify-center gap-[15px] flex-wrap space-x-[10px]">
                        <a href="tel:0123456789">
                            <div class="flex items-center justify-start gap-[10px]">
                                <div class="w-12 h-12 leading-[48px] border-[2px] border-[#F7F6F1]
                                         text-center rounded-full mr-2 sm:float-none sm:mx-auto sm:mb-1 sm:w-8 sm:h-8 sm:leading-8 col:mb-1">
                                    <i class="fi flaticon-phone-call  text-[#F5811E] sm:text-lg"></i>
                                </div>
                                <p class="text-[#232323] font-medium text-base leading-5 font-heading-font hide-from-tab">
                                    0123
                                    456 789</p>
                            </div>
                        </a>
                        <a href="mailto:gopalagriexport@gmail.com">
                            <div class="flex items-center justify-start gap-[10px]">
                                <div class="w-12 h-12 leading-[48px] border-[2px] border-[#F7F6F1]
                                         text-center rounded-full mr-2 sm:float-none sm:mx-auto sm:mb-1 sm:w-8 sm:h-8 sm:leading-8 col:mb-1">
                                    <i class=" fi flaticon-email text-[#F5811E] sm:text-lg"></i>
                                </div>
                                <p class="text-[#232323] font-medium text-base leading-5 font-heading-font hide-from-tab">
                                    gopalagriexport@gmail.com</p>
                            </div>

                        </a>
                        <a href="https://goo.gl/maps/8YHd4q4v8Zd" target="_blank">
                            <div class="flex items-center justify-start gap-[10px]">
                                <div class="w-12 h-12 leading-[48px] border-[2px] border-[#F7F6F1]
                                         text-center rounded-full mr-2 sm:float-none sm:mx-auto sm:mb-1 sm:w-8 sm:h-8 sm:leading-8 col:mb-1">
                                    <i class=" fi flaticon-placeholder text-[#F5811E] sm:text-lg"></i>
                                </div>
                                <p class="text-[#232323] font-medium text-base leading-5 font-heading-font hide-from-tab ">
                                    Yamunaji Ind. Estate, Bhesan Road, Bamangam, Junagadh</p>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="">
                    <ul class="text-right md:text-center md:mt-2">
                        <!-- <li class="inline-block ml-2">Visit our social pages</li> -->
                        <li class="inline-block ml-2"><a href="#" class="text-[#F5811E] text-sm transition-all hover:text-[#E1D4D1]"><i class="ti-facebook"></i></a></li>
                        <li class="inline-block ml-2"><a href="#" class="text-[#F5811E] text-sm transition-all hover:text-[#E1D4D1]"><i class="ti-twitter-alt"></i></a></li>
                        <li class="inline-block ml-2"><a href="#" class="text-[#F5811E] text-sm transition-all hover:text-[#E1D4D1]"><i class="ti-linkedin"></i></a></li>
                        <li class="inline-block ml-2"><a href="#" class="text-[#F5811E] text-sm transition-all hover:text-[#E1D4D1]"><i class="ti-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=" header-div">
        <div class=" header-bg-div">
            <div class="flex items-center justify-between  wraper    relative z-10 p-[20px] header-box ">
                <div class="w-[70px] md:w-[70px] sm:w-[70px]  ">
                    <a class="flex items-center md:justify-center text-white" href="/">
                        <img class="" src="{{ url('assets/images/logo.png') }}" alt=""></a>
                </div>
                <div class="flex items-center justify-end gap-20px font-heading-font header-menu-link">
                    <a href="/" class="relative text-[16px] lg:text-[17px] py-[25px] xl:py-[25px] menu-nav-item
    text-[#14212b] block capitalize font-medium transition-all-all hover:text-[#ea7c08]
    before:absolute before:left-0 before:top-0 before:w-full before:h-[4px] before:bg-[#ea7c08] before:content
    before:opacity-0 before:invisible before:transition-all-all before:rounded-[3px]
    hover:before:opacity-100 hover:before:visible {{ Request::is('/') ? 'active-text' : '' }}">
                        Home
                    </a>

                    <a href="/about" class="relative text-[16px] lg:text-[17px] py-[25px] xl:py-[25px] menu-nav-item
    text-[#14212b] block capitalize font-medium transition-all-all hover:text-[#ea7c08]
    before:absolute before:left-0 before:top-0 before:w-full before:h-[4px] before:bg-[#ea7c08] before:content
    before:opacity-0 before:invisible before:transition-all-all before:rounded-[3px]
    hover:before:opacity-100 hover:before:visible {{ Request::is('about') ? 'active-text' : '' }}">
                        About
                    </a>

                    <div class="group relative">
                        <a href="/products" class="relative text-[16px] lg:text-[17px] py-[25px] xl:py-[25px] menu-nav-item
        text-[#14212b] block capitalize font-medium transition-all hover:text-[#ea7c08]
        before:absolute before:left-0 before:top-0 before:w-full before:h-[4px] before:bg-[#ea7c08] before:content
        before:opacity-0 before:invisible before:transition-all before:rounded-[3px]
        hover:before:opacity-100 hover:before:visible {{ Request::is('products') ? 'active-text' : '' }}">
                            Products
                        </a>
                        <ul class="absolute w-[240px] left-0 rounded-lg top-[110%] pt-[20px] pb-[15px] px-[7px] z-[111] bg-[#210805]
            shadow-[0px_2px_20px_0px_rgba(62,65,159,0.09);] transition-all opacity-0 invisible
            group-hover:opacity-100 group-hover:top-full group-hover:visible hover-menu">
                            <li>
                                <a href="products/1" class="text-[16px] lg:text-[16px] inline-block px-[15px] capitalize
                text-[#0a272c] group relative overflow-hidden font-medium transition-all
                after:absolute after:left-[15px] after:bottom-0 after:w-0 after:h-[2px] after:content
                after:bg-[#ea7c08] after:transition-all hover:after:w-[50%]">
                                    Peanuts
                                </a>
                            </li>
                            <li>
                                <a href="products/2" class="text-[16px] lg:text-[16px] inline-block px-[15px] capitalize
                text-[#0a272c] group relative overflow-hidden font-medium transition-all
                after:absolute after:left-[15px] after:bottom-0 after:w-0 after:h-[2px] after:content
                after:bg-[#ea7c08] after:transition-all hover:after:w-[50%]">
                                    Seeds
                                </a>
                            </li>
                            <li>
                                <a href="products/3" class="text-[16px] lg:text-[16px] inline-block px-[15px] capitalize
                text-[#0a272c] group relative overflow-hidden font-medium transition-all
                after:absolute after:left-[15px] after:bottom-0 after:w-0 after:h-[2px] after:content
                after:bg-[#ea7c08] after:transition-all hover:after:w-[50%]">
                                    Nuts
                                </a>
                            </li>
                            <li>
                                <a href="products/4" class="text-[16px] lg:text-[16px] inline-block px-[15px] capitalize
                text-[#0a272c] group relative overflow-hidden font-medium transition-all
                after:absolute after:left-[15px] after:bottom-0 after:w-0 after:h-[2px] after:content
                after:bg-[#ea7c08] after:transition-all hover:after:w-[50%]">
                                    Spices
                                </a>
                            </li>
                        </ul>
                    </div>

                    <a href="/certifications" class="relative text-[16px] lg:text-[17px] py-[25px] xl:py-[25px] menu-nav-item
    text-[#14212b] block capitalize font-medium transition-all-all hover:text-[#ea7c08]
    before:absolute before:left-0 before:top-0 before:w-full before:h-[4px] before:bg-[#ea7c08] before:content
    before:opacity-0 before:invisible before:transition-all-all before:rounded-[3px]
    hover:before:opacity-100 hover:before:visible {{ Request::is('certifications') ? 'active-text' : '' }}">
    Our Credentials
                    </a>
                    <a href="/infrastructure" class="relative text-[16px] lg:text-[17px] py-[25px] xl:py-[25px] menu-nav-item
    text-[#14212b] block capitalize font-medium transition-all-all hover:text-[#ea7c08]
    before:absolute before:left-0 before:top-0 before:w-full before:h-[4px] before:bg-[#ea7c08] before:content
    before:opacity-0 before:invisible before:transition-all-all before:rounded-[3px]
    hover:before:opacity-100 hover:before:visible {{ Request::is('infrastructure') ? 'active-text' : '' }}">
                        Facility Tour
                    </a>

                    <form action="{{ route('products.search') }}" role="search" method="get" class="search-form m-0">
                        <label>
                            <input type="text" class="search-field" placeholder="Search …" value="" name="query" title="Search for:" />
                        </label>
                        <input type="submit" class="search-submit" value="Search" />
                    </form>


                    <div class="flex items-center pr-[15px] lg:pr-[4px] sm:pr-0">
                        <a class="theme-btn content-btn py-[10px] px-[25px] bg-[#72a01e] md:hidden before:hidden" href="/contact">Contact Us</a>
                    </div>
                </div>
                <!-- movile menu  -->
                <div class="hidden md:flex gap-2">
                    <div class="pl-2">
                        <form action="{{ route('products.search') }}" role="search" method="get" class="search-form m-0">
                            <label>
                                <input type="text" class="search-field" placeholder="Search …" value="" name="query" title="Search for:" />
                            </label>
                            <input type="submit" class="search-submit" value="Search" />
                        </form>
                    </div>
                    <div class="flex-center">
                        <button id="toggleDrawer" class="dl-trigger">
                            <svg id="openIcon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-right">
                                <line class="store-white" x1="21" x2="3" y1="6" y2="6" />
                                <line class="store-white" x1="21" x2="9" y1="12" y2="12" />
                                <line class="store-white" x1="21" x2="7" y1="18" y2="18" />
                            </svg>
                            <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x hidden">
                                <path class="store-white" d="M18 6 6 18" />
                                <path class="store-white" d="m6 6 12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-drawer bg-[#F7F6F1]" id="drawer">
        <nav class="">
            <ul class="font-heading-font">
                <li><a class="{{ Request::is('/') ? 'active-text' : '' }}" href="/">Home</a></li>
                <li><a class="{{ Request::is('/about') ? 'active-text' : '' }}" href="/about">About</a></li>
                <li><a class="{{ Request::is('/products') ? 'active-text' : '' }}" href="/products">Products</a></li>
                <li><a class="{{ Request::is('/certifications') ? 'active-text' : '' }}" href="/certifications">Our Credentials</a></li>
                <li><a class="{{ Request::is('/infrastructure') ? 'active-text' : '' }}" href="/infrastructure">infrastructure</a></li>
                <li><a class="{{ Request::is('/contact') ? 'active-text' : '' }}" href="/contact">Contact Us</a></li>
            </ul>
        </nav>
    </div>
    </header>