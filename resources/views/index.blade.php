@extends('Common.main')
@section('content')
    <div class="relative">
        <!-- start hero-slider -->
        <section
            class="bg-[#131313] w-full h-[900px]  lg:h-[680px]
                 md:h-[600px] sm:h-[500px]  relative z-[1] overflow-hidden
                 ">
            <div class="swiper-container w-full h-full absolute left-0 top-0">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image before:absolute before:left-0
                            before:top-0 before:w-full before:h-full before:bg-[#040128] before:opacity-[0.6] pt-[35px] lg:pt-0"
                            data-background="assets/images/slider/slide-1.jpg">
                            <!-- <div class="gradient-overlay"></div> -->
                            <div class="wraper">
                                <div class="relative h-[900px] lg:h-[680px]  md:h-[600px] sm:h-[500px]">
                                    <div
                                        class="max-w-[720px] lg:w-[600px] md:w-full  absolute top-1/2 left-0 transform  -translate-y-1/2 pb-[175px] lg:pb-0">

                                        <div data-swiper-parallax="200" class="wpo-hero-title-top">
                                            <p
                                                class="text-[25px] col:text-[16px] text-white  capitalize
                                                    mb-[30px] font-normal tracking-[2px]">
                                                “<span class="text-[#F78914]">SUPPLIER</span>”</p>
                                        </div>
                                        <div data-swiper-parallax="300" class="slide-title">
                                            <h2
                                                class="text-[75px] font-heading-font font-normal uppercase leading-[90px] mt-[10px] mb-[25px]
                                                     lg:text-[50px] md:text-[40px] md:leading-[55px] col:text-[35px]
                                                     col:leading-[35px] text-white col:mb-[20px]">
                                                Highest <span class="text-[#F78914]">Quality</span> Seeds Supplier</h2>
                                        </div>
                                        <div data-swiper-parallax="400" class="slide-text">
                                            <p
                                                class="text-[22px] text-[#e2e2e2]
                                                    leading-[35px]
                                                     mb-[40px]
                                                    md:text-[18px] col:leading-[25px]
                                                    col:mb-[30px]">
                                                Manufacturer, Wholesaler, and Trader of Desi Chana, Groundnut
                                                Seeds, Soybean Seeds, Fish Fertilizer & many more</p>
                                        </div>

                                        <div data-swiper-parallax="500" class="slide-btn">
                                            <a href="/about" class="btn theme-btn">
                                                Explore more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image before:absolute before:left-0
                            before:top-0 before:w-full before:h-full before:bg-[#040128] before:opacity-[0.6] pt-[35px] lg:pt-0"
                            data-background="assets/images/slider/slide-4.jpg">
                            <!-- <div class="gradient-overlay"></div> -->
                            <div class="wraper">
                                <div class="relative h-[900px] lg:h-[680px]  md:h-[600px] sm:h-[500px]">
                                    <div
                                        class="max-w-[720px] lg:w-[600px] md:w-full  absolute top-1/2 left-0 transform  -translate-y-1/2 pb-[175px] lg:pb-0">

                                        <div data-swiper-parallax="200" class="wpo-hero-title-top">
                                            <p
                                                class="text-[25px] col:text-[16px] text-white  capitalize
                                                    mb-[30px] font-normal tracking-[2px]">
                                                “<span class="text-[#F78914]">SEEDS</span>”</p>
                                        </div>
                                        <div data-swiper-parallax="300" class="slide-title">
                                            <h2
                                                class="text-[75px] font-heading-font font-normal uppercase leading-[90px] mt-[10px] mb-[25px]
                                                     lg:text-[50px] md:text-[40px] md:leading-[55px] col:text-[35px]
                                                     col:leading-[35px] text-white col:mb-[20px]">
                                                We Fulfill Your All
                                                <span class="text-[#F78914]">Agriculture Requirements</span>!
                                            </h2>
                                        </div>
                                        <div data-swiper-parallax="400" class="slide-text">
                                            <p
                                                class="text-[22px] text-[#e2e2e2]
                                                    leading-[35px]
                                                     mb-[40px]
                                                    md:text-[18px] col:leading-[25px]
                                                    col:mb-[30px]">
                                                All Agri Commodities Cleaning Plant & Coriander Seeds Processors</p>
                                        </div>

                                        <div data-swiper-parallax="500" class="slide-btn">
                                            <a href="/about" class="btn theme-btn">
                                                Explore more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->

                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <!-- end of wpo-hero-slide-section-->
        </section>

        <!-- start of orico-hero-features  -->
        <div
            class="hidden lg:relative overflow-hidden z-10 w-full bottom-0 border-t border-t-[rgba(255,255,255,.10)] py-10">
            <div class="wraper">
                <div class="grid grid-cols-12 gap-x-4">
                    <div class="col-span-4 md:col-span-6 col:col-span-12">
                        <div
                            class="flex items-center justify-center md:mb-4 md:justify-center sm:mb-8 sm:flex-wrap sm:text-center col:block">
                            <div>
                                <div
                                    class="w-[70px] h-[70px] bg-white rounded-full flex justify-center items-center relative lg:bg-[#232323] md:w-[60px] md:h-[60px]
                                            sm:mx-auto  sm:mb-3  before:absolute before:left-[-10%]  before:top-[-10%] before:border-white before:border before:border-dashed before:w-[120%] before:h-[120%] before:rounded-[50%] lg:before:border-[#232323]">
                                    <img src="assets/images/icon/1.png" alt="">
                                </div>
                            </div>
                            <div class="px-10 xl:px-5 md:pr-0">
                                <h4
                                    class="font-normal text-2xl text-white mb-3 xl:text-xl xl:mb-1 lg:text-[#232323] md:text-lg">
                                    Free Deliver</h4>
                                <p class="text-white lg:text-[#6e6e6e] xl:text-sm">Lorem ipsum simply dummy text the
                                    printing type setting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 md:col-span-6 col:col-span-12">
                        <div
                            class="flex items-center justify-center md:mb-4 md:justify-center sm:mb-8 sm:flex-wrap sm:text-center col:block">
                            <div>
                                <div
                                    class="w-[70px] h-[70px] bg-white rounded-full flex justify-center items-center relative lg:bg-[#232323] md:w-[60px] md:h-[60px]
                                            sm:mx-auto  sm:mb-3  before:absolute before:left-[-10%]  before:top-[-10%] before:border-white before:border before:border-dashed before:w-[120%] before:h-[120%] before:rounded-[50%] lg:before:border-[#232323]">
                                    <img src="assets/images/icon/2.png" alt="">
                                </div>
                            </div>
                            <div class="px-10 xl:px-5 md:pr-0">
                                <h4
                                    class="font-normal text-2xl text-white mb-3 xl:text-xl xl:mb-1 lg:text-[#232323] md:text-lg">
                                    Support 24/07</h4>
                                <p class="text-white lg:text-[#6e6e6e] xl:text-sm">Lorem ipsum simply dummy text the
                                    printing type setting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 md:col-span-6 col:col-span-12">
                        <div
                            class="flex items-center justify-center  md:justify-center sm:flex-wrap sm:text-center col:block">
                            <div>
                                <div
                                    class="w-[70px] h-[70px] bg-white rounded-full flex justify-center items-center relative lg:bg-[#232323] md:w-[60px] md:h-[60px]
                                            sm:mx-auto  sm:mb-3  before:absolute before:left-[-10%]  before:top-[-10%] before:border-white before:border before:border-dashed before:w-[120%] before:h-[120%] before:rounded-[50%] lg:before:border-[#232323]">
                                    <img src="assets/images/icon/3.png" alt="">
                                </div>
                            </div>
                            <div class="px-10 xl:px-5 md:pr-0">
                                <h4
                                    class="font-normal text-2xl text-white mb-3 xl:text-xl xl:mb-1 lg:text-[#232323] md:text-lg">
                                    Secure Payment</h4>
                                <p class="text-white lg:text-[#6e6e6e] xl:text-sm">Lorem ipsum simply dummy text the
                                    printing type setting.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of orico-hero-features  -->
    </div>

    <!-- start of orico-about-section -->
    <section
        class="relative flex justify-center flex-col z-20 py-[120px] md:pt-[70px] md:py-[90px] sm:py-[80px] sm:pt-[60px] ">
        <div class="wraper">
            <div class="grid grid-cols-12 gap-x-4 items-center">
                <div class="col-span-6 md:col-span-12">
                    <div class="orico-about-text-wrap 111">
                        <div class="orico-about-text">
                            <span
                                class="text-xl font-heading-font inline-block mb-1 font-normal underline text-[#F78914]">“ABOUT
                                US”</span>
                            <h2 class="text-5xl font-normal font-heading-font mb-5 lg:text-4xl sm:text-3xl">Welcome
                                To Gopal Agri Export
                            </h2>
                            <p class="mb-5">Established in 2021, Gopal Agri Export is a leading Manufacturer,
                                Wholesaler, and Trader of Desi Chana, Groundnut Seeds, Soybean Seeds, Fish
                                Fertilizer, and more. We help farmers with professional advice on managing crops and
                                increasing productivity. Using data and technology, we ensure farmers get
                                high-quality agricultural inputs and close the knowledge gap.</p>
                            <ul class="mb-8 flex col:block">
                                <li class="py-1 relative pl-6 font-semibold inline-block text-base  text-[#687693]">
                                    <i class="absolute left-0 top-1">
                                        <img src="assets/images/about/4.png" alt="">
                                    </i>
                                    <p>It has survived not only
                                        five centuries the leap into.</p>
                                </li>
                                <li class="py-1 relative pl-6 font-semibold inline-block text-base  text-[#687693]">
                                    <i class="absolute left-0 top-1">
                                        <img src="assets/images/about/5.png" alt="">
                                    </i>
                                    <p>It has survived not only
                                        five centuries the leap into.</p>
                                </li>
                            </ul>
                            <a class="theme-btn bg-[#F78914] hover:bg-[#f78914ee]" href="/about">Get In
                                Touch</a>

                        </div>
                    </div>
                </div>
                <div class="col-span-6 md:col-span-12">
                    <div class="pl-12 md:pl-0 md:mt-14">
                        <div class="relative z-10 w-full p-5 col:p-2 border border-[#f7891470] ">
                            <video autoplay loop muted playsinline>
                                <source src="/assets/Video/banner_Video.mp4" type="video/mp4">
                                <!-- <source src="path/to/your/video.webm" type="video/webm"> -->
                                Your browser does not support the video tag.
                            </video>
                            <div
                                class="w-[101px] h-[135px] col:w-[60px] col:h-[10px] reward-card bg-[rgba(247,137,20,0.65)] rounded-[8px] flex justify-center items-center text-center absolute
                                 left-[-25px] bottom-[-25px]  backdrop-blur-[15px] md:bottom-0 md:left-0">
                                <div class="block">
                                    <img src="assets/images/about/badge.svg" alt="" class="max-w-[50px] mx-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute left-[40px] top-1/2 -translate-y-1/2 -z-10 xl:hidden "><img src="assets/images/about/2.png"
                alt=""></div>
        <div class="absolute right-[40px] top-1/2 -translate-y-1/2 -z-10 xl:hidden"><img src="assets/images/about/3.png"
                alt=""></div>
    </section>
    <!-- end of orico-about-section -->

    <!-- start orico-fun-fact-section -->
    <section
        class="Scroller-bg bg-cover bg-center bg-no-repeat bg-fixed
             md:bg-local ">
        <div
            class="text-center py-20 md:pb-12 relative z-10  before:absolute before:left-0 before:top-0
             before:bg-[#0008] before:-z-10 before:w-full before:h-full">
            <div class="wraper">
                <div class="grid grid-cols-12 gap-x-4">
                    <div class="col-span-3 md:col-span-6 col:col-span-12 md:mb-8">
                        <div>
                            <h3
                                class="text-7xl text-white font-heading-font lg:text-6xl sm:text-5xl flex items-center justify-center">
                                <span class="odometer" data-count="250">00</span>+
                            </h3>
                            <p class="text-base text-white md:text-sm">Trusted By Customers</p>
                        </div>
                    </div>
                    <div class="col-span-3 md:col-span-6 col:col-span-12 md:mb-8">
                        <div>
                            <h3
                                class="text-7xl text-white font-heading-font lg:text-6xl sm:text-5xl flex items-center justify-center">
                                <span class="odometer" data-count="46">00</span>+
                            </h3>
                            <p class="text-base text-white md:text-sm">Product Sale Per Day</p>

                        </div>
                    </div>
                    <div class="col-span-3 md:col-span-6 col:col-span-12 md:mb-8">
                        <div>
                            <h3
                                class="text-7xl text-white font-heading-font lg:text-6xl sm:text-5xl flex items-center justify-center">
                                <span class="odometer" data-count="9">00 </span>+
                            </h3>
                            <p class="text-base text-white md:text-sm">Years Of Foundation</p>
                        </div>
                    </div>
                    <div class="col-span-3 md:col-span-6 col:col-span-12 md:mb-8">
                        <div>
                            <h3
                                class="text-7xl text-white font-heading-font lg:text-6xl sm:text-5xl flex items-center justify-center">
                                <span class="odometer" data-count="86">00</span>+
                            </h3>
                            <p class="text-base text-white md:text-sm">Monthly Product Order</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end orico-fun-fact-section -->

    <!-- start of orico-service  -->
    <div class="pt-[120px] md:pt-[90px] sm:pt-[80px] pb-[90px] md:pb-[60px] sm:pb-[50px]">
        <div class="wraper">
            <div class="grid justify-center">
                <div class="col-span-6">
                    <div class="text-center mb-16 md:mb-12 col:mb-10">
                        <h2
                            class="text-6xl font-heading-font font-medium uppercase mt-5 col:mt-2 text-[#232323] sm:text-3xl col:text">
                            What We do</h2>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-9 justify-center gap-x-4">
                <div class="col-span-3 lg:col-span-4 md:col-span-6 col:col-span-12">
                    <div class="p-7 bg-white rounded-[0.75rem] shadow-[4px_8px_20px_#eaeced] text-center mb-7 group">
                        <div class="overflow-hidden rounded-[0.75rem] blog-img">
                            <img src="assets/images/service/Manufacturer.jpg" alt=""
                                class="w-full rounded-[0.75rem] transform-all scale-100 transition group-hover:scale-110">
                        </div>
                        <div>
                            <!-- <div class="w-[120px] h-[120px] leading-[120px] flex items-center justify-center bg-white shadow-[4px_8px_20px_rgba(35,35,35,0.1)]
                                rounded-full mx-auto relative mt-[-60px] mb-[20px] text-center">
                                        <img src="assets/images/service/icon-1.svg" alt="" class="max-w-[55px]">
                                    </div> -->
                            <h4 class="font-normal text-xl text-center my-5 sm:text-lg font-heading-font">
                                Manufacturer</h4>
                            <a href="service-single.html"
                                class="block w-16 h-16 leading-[64px] border border-[#F78914] bg-transparent
                                mx-auto mt-2 rounded-[50%] transition-all hover:bg-[#F78914] hover:text-white">
                                <i class="ti-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 lg:col-span-4 md:col-span-6 col:col-span-12">
                    <div class="p-7 bg-white rounded-[0.75rem] shadow-[4px_8px_20px_#eaeced] text-center mb-7 group">
                        <div class="overflow-hidden rounded-[0.75rem] blog-img">
                            <img src="assets/images/service/Wholesaler-relationships.jpg" alt=""
                                class="w-full rounded-[0.75rem] transform-all scale-100 transition group-hover:scale-110 h-full">
                        </div>
                        <div>
                            <!-- <div class="w-[120px] h-[120px] leading-[120px] flex items-center justify-center bg-white shadow-[4px_8px_20px_rgba(35,35,35,0.1)]
                                rounded-full mx-auto relative mt-[-60px] mb-[20px] text-center">
                                        <img src="assets/images/service/icon-2.svg" alt="" class="max-w-[55px]">
                                    </div> -->
                            <h4 class="font-normal text-xl text-center my-5 sm:text-lg font-heading-font">Wholesaler
                            </h4>
                            <a href="service-single.html"
                                class="block w-16 h-16 leading-[64px] border border-[#F78914] bg-transparent
                                mx-auto mt-2 rounded-[50%] transition-all hover:bg-[#F78914] hover:text-white">
                                <i class="ti-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 lg:col-span-4 md:col-span-6 col:col-span-12">
                    <div class="p-7 bg-white rounded-[0.75rem] shadow-[4px_8px_20px_#eaeced] text-center mb-7 group">
                        <div class="overflow-hidden rounded-[0.75rem] blog-img">
                            <img src="assets/images/service/Trader.jpg" alt=""
                                class="w-full rounded-[0.75rem] transform-all scale-100 transition group-hover:scale-110 h-full">
                        </div>
                        <div>
                            <!-- <div class="w-[120px] h-[120px] leading-[120px] flex items-center justify-center bg-white shadow-[4px_8px_20px_rgba(35,35,35,0.1)]
                                rounded-full mx-auto relative mt-[-60px] mb-[20px] text-center">
                                        <img src="assets/images/service/icon-3.svg" alt="" class="max-w-[55px]">
                                    </div> -->
                            <h4 class="font-normal text-xl text-center my-5 sm:text-lg font-heading-font">Trader
                            </h4>
                            <a href="service-single.html"
                                class="block w-16 h-16 leading-[64px] border border-[#F78914] bg-transparent
                                mx-auto mt-2 rounded-[50%] transition-all hover:bg-[#F78914] hover:text-white">
                                <i class="ti-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end of orico-hero-service  -->



    <!-- start of orico-product-section  -->
    <section class="pb-20 bg-[#F7F6F1] relative z-10 md:pb-12 pt-28 md:pt-24 sm:pt-20 overflow-hidden">
        <div class="wraper">
            <div class="grid justify-center">
                <div class="col-span-8">
                    <div class="text-center mb-16 md:mb-12 col:mb-10">
                        <span
                            class="capitalize text-xl text-[#6e6e6e] font-heading-font font-normal underline  mb-2 inline-block">“<span
                                class="text-[#F78914]">BEST PRODUCT</span>”</span>
                        <h2
                            class="text-6xl font-heading-font font-medium uppercase mt-5 col:mt-2 text-[#232323] sm:text-3xl col:text">
                            Latest Products</h2>
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="grid-cols-12 sortable-gallery">
                    <div class="gallery-filters md:flex md:justify-center md:items-center">
                        <ul
                            class="flex items-center justify-center bg-white max-w-[640px] mx-auto rounded-[130px] uppercase sm:flex-wrap sm:justify-center col:p-1">
                            <li class="flex items-center lg:mr-1">
                                <a data-filter="*" href="#"
                                    class="current py-[20px] px-[30px] relative font-heading-font text-lg col:text-sm sm:p-[10px_20px] col:p-1
                                    before:absolute before:left-full before:top-1/2   before:w-[8px] before:h-[3px] before:bg-[#8B8B8B] before:-translate-x-1/2 col:before:hidden">
                                    all
                                </a>
                            </li>
                            <li class="flex items-center lg:mr-1">
                                <a data-filter=".fruit" href="#"
                                    class="py-[20px] px-[30px] relative font-heading-font text-lg col:text-sm sm:p-[10px_20px] col:p-1
                                    before:absolute before:left-full before:top-1/2   before:w-[8px] before:h-[3px] before:bg-[#8B8B8B] before:-translate-x-1/2 col:before:hidden">
                                    Peanuts
                                </a>
                            </li>
                            <li class="flex items-center lg:mr-1">
                                <a data-filter=".vegetable" href="#"
                                    class="py-[20px] px-[30px] relative font-heading-font text-lg col:text-sm sm:p-[10px_20px] col:p-1
                                    before:absolute before:left-full before:top-1/2   before:w-[8px] before:h-[3px] before:bg-[#8B8B8B] before:-translate-x-1/2 col:before:hidden">
                                    Seeds
                                </a>
                            </li>
                            <li class="flex items-center ">
                                <a data-filter=".milk" href="#"
                                    class="py-[20px] px-[30px] relative font-heading-font text-lg col:text-sm sm:p-[10px_20px] col:p-1">
                                    Spices
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="gallery-container gallery-fancybox masonry-gallery  mt-20 md:mt-12">
                <div class="product-box w-[400px] xl:w-[400px] lg:w-[280px] md:w-[44%] sm:w-full mx-[15px] sm:mx-0 milk fruit  zoomIn"
                    data-wow-duration="2000ms">
                    <div
                        class="group bg-white p-0 transition mb-7 cursor-pointer relative  text-center
                        ">
                        <div
                            class="relative bg-[#F3F1EA] py-5 product_image-div max-h-[220px] min-h-[220px] overflow-hidden flex justify-center flex-col">
                            <div class="mx-auto">
                                <img src="assets/images/product/jpeg-optimizer_SPP01151.webp" alt=""
                                    class="relative transition group-hover:opacity-[0.8 ]">
                            </div>
                        </div>
                        <div class="transition product-text-div">
                            <h2><a href="shop-single.html"
                                    class="font-normal text-xl text-[#232323] font-heading-font mb-2 mt-1 transition hover:text-[#F78914]">Producst
                                    Name</a></h2>
                        </div>
                        <div class="hidden">
                            <div
                                class="transition-all text-center absolute top-0 left-0 z-20 scale-0 flex justify-center flex-col w-full h-full group-hover:scale-100">
                                <ul class="flex items-center justify-center transition-all mb-5">
                                    <li class="flex justify-center items-center ml-2 transition-all prodact-modal">
                                        <button
                                            class="prodact-modal-open block w-[45px] h-[45px] leading-[45px] transition-all-all bg-transparent text-white rounded-[50px] border-white border-solid border hover:bg-white hover:text-[#F78914] relative group/edit">
                                            <i class="fi ti-eye"></i>
                                            <span
                                                class="bg-black text-white text-center text-sm rounded-[6px] py-1 px-3 absolute left-1/2 top-[-20px]  opacity-0 invisible
                                                -translate-y-1/2 -translate-x-1/2 transition-all-all block  w-[120px] before:absolute before:bottom-[-5px] before:left-1/2
                                                before:w-[5px] before:h-[5px] before:[clip-path:polygon(0_0,50%_100%,100%_0);] before:bg-black before:border-[#000]
                                                 group-hover/edit:opacity-100 group-hover/edit:visible">Quick
                                                View</span>
                                        </button>
                                    </li>
                                </ul>
                                <h2><a href="shop-single.html"
                                        class="font-normal text-xl text-white mb-2 mt-1 font-heading-font transition-all-all hover:text-white">Fresh
                                        Orangey</a></h2>
                                <a href="cart.html"
                                    class="p-[10px_25px] bg-white rounded-[50px] text-[#6e6e6e] w-[160px] mx-auto mt-5 inline-block">View
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-box w-[400px] xl:w-[400px] lg:w-[280px] md:w-[44%] sm:w-full mx-[15px] sm:mx-0 milk vegetable zoomIn"
                    data-wow-duration="2000ms">
                    <div
                        class="group bg-white p-0 transition mb-7 cursor-pointer relative  text-center
                        ">
                        <div
                            class="relative bg-[#F3F1EA] py-5 product_image-div max-h-[220px] min-h-[220px] overflow-hidden flex justify-center flex-col">
                            <div class="mx-auto">
                                <img src="assets/images/product/jpeg-optimizer_SPP01172.webp" alt=""
                                    class="relative transition group-hover:opacity-[0.8 ]">
                            </div>
                        </div>
                        <div class="transition product-text-div">
                            <h2><a href="shop-single.html"
                                    class="font-normal text-xl text-[#232323] font-heading-font mb-2 mt-1 transition hover:text-[#F78914]">Red
                                    Radish</a></h2>
                        </div>

                        <div class="hidden">
                            <div
                                class="transition-all text-center absolute top-0 left-0 z-20 scale-0 flex justify-center flex-col w-full h-full group-hover:scale-100">
                                <ul class="flex items-center justify-center transition-all mb-5">
                                    <li class="flex justify-center items-center ml-2 transition-all prodact-modal">
                                        <button
                                            class="prodact-modal-open block w-[45px] h-[45px] leading-[45px] transition-all-all bg-transparent text-white rounded-[50px] border-white border-solid border hover:bg-white hover:text-[#F78914] relative group/edit">
                                            <i class="fi ti-eye"></i>
                                            <span
                                                class="bg-black text-white text-center text-sm rounded-[6px] py-1 px-3 absolute left-1/2 top-[-20px]  opacity-0 invisible
                                                -translate-y-1/2 -translate-x-1/2 transition-all-all block  w-[120px] before:absolute before:bottom-[-5px] before:left-1/2
                                                before:w-[5px] before:h-[5px] before:[clip-path:polygon(0_0,50%_100%,100%_0);] before:bg-black before:border-[#000]
                                                 group-hover/edit:opacity-100 group-hover/edit:visible">Quick
                                                View</span>
                                        </button>
                                    </li>
                                </ul>
                                <h2><a href="shop-single.html"
                                        class="font-normal text-xl text-white mb-2 mt-1 font-heading-font transition-all-all hover:text-white">Fresh
                                        Orangey</a></h2>
                                <a href="cart.html"
                                    class="p-[10px_25px] bg-white rounded-[50px] text-[#6e6e6e] w-[160px] mx-auto mt-5 inline-block">View
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-box w-[400px] xl:w-[400px] lg:w-[280px] md:w-[44%] sm:w-full mx-[15px] sm:mx-0  fruit zoomIn"
                    data-wow-duration="2000ms">
                    <div
                        class="group bg-white p-0 transition mb-7 cursor-pointer relative  text-center
                        ">
                        <div
                            class="relative bg-[#F3F1EA] py-5 product_image-div max-h-[220px] min-h-[220px] overflow-hidden flex justify-center flex-col">
                            <div class="mx-auto">
                                <img src="assets/images/product/jpeg-optimizer_SPP01178.webp" alt=""
                                    class="relative transition group-hover:opacity-[0.8 ]">
                            </div>
                        </div>
                        <div class="transition product-text-div">
                            <h2><a href="shop-single.html"
                                    class="font-normal text-xl text-[#232323] font-heading-font mb-2 mt-1 transition hover:text-[#F78914]">Cauliflower</a>
                            </h2>
                        </div>

                        <div class="hidden">
                            <div
                                class="transition-all text-center absolute top-0 left-0 z-20 scale-0 flex justify-center flex-col w-full h-full group-hover:scale-100">
                                <ul class="flex items-center justify-center transition-all mb-5">
                                    <li class="flex justify-center items-center ml-2 transition-all prodact-modal">
                                        <button
                                            class="prodact-modal-open block w-[45px] h-[45px] leading-[45px] transition-all-all bg-transparent text-white rounded-[50px] border-white border-solid border hover:bg-white hover:text-[#F78914] relative group/edit">
                                            <i class="fi ti-eye"></i>
                                            <span
                                                class="bg-black text-white text-center text-sm rounded-[6px] py-1 px-3 absolute left-1/2 top-[-20px]  opacity-0 invisible
                                                -translate-y-1/2 -translate-x-1/2 transition-all-all block  w-[120px] before:absolute before:bottom-[-5px] before:left-1/2
                                                before:w-[5px] before:h-[5px] before:[clip-path:polygon(0_0,50%_100%,100%_0);] before:bg-black before:border-[#000]
                                                 group-hover/edit:opacity-100 group-hover/edit:visible">Quick
                                                View</span>
                                        </button>
                                    </li>
                                </ul>
                                <h2><a href="shop-single.html"
                                        class="font-normal text-xl text-white mb-2 mt-1 font-heading-font transition-all-all hover:text-white">Fresh
                                        Orangey</a></h2>
                                <!-- <div class="pb-2">
                                            <ul class="flex justify-center">
                                                <li class="line-through mr-2 text-white text-sm font-heading-font font-normal ">
                                                    $75.00</li>
                                                <li class="text-white text-sm font-heading-font font-normal"> $85.00</li>
                                            </ul>
                                        </div> -->
                                <a href="cart.html"
                                    class="p-[10px_25px] bg-white rounded-[50px] text-[#6e6e6e] w-[160px] mx-auto mt-5 inline-block">View
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="absolute left-0 bottom-0 -z-10">
            <img src="assets/images/product/shape-1.png" alt="">
        </div>
        <div class="absolute right-0 top-0 -z-10">
            <img src="assets/images/product/shape-2.png" alt="">
        </div>
    </section>

    <!-- start of orico-partners-section  -->
    <section
        class="relative py-[60px] bg-[url(../images/partner/bg.jpg)] bg-no-repeat bg-center bg-cover z-10
        before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#8AC224] before:opacity-[0.9] before:-z-10 ">
        <h2 class="hidden">hidden</h2>
        <div class="wraper">
            <div class="partners-slider owl-carousel">
                <div class="h-[120px] flex items-center justify-center">
                    <div>
                        <img src="assets/images/partner/1.png" alt="" class="mx-auto w-auto">
                    </div>
                </div>
                <div class="h-[120px] flex items-center justify-center">
                    <div>
                        <img src="assets/images/partner/2.png" alt="" class="mx-auto w-auto">
                    </div>
                </div>
                <div class="h-[120px] flex items-center justify-center">
                    <div>
                        <img src="assets/images/partner/3.png" alt="" class="mx-auto w-auto">
                    </div>
                </div>
                <div class="h-[120px] flex items-center justify-center">
                    <div>
                        <img src="assets/images/partner/4.png" alt="" class="mx-auto w-auto">
                    </div>
                </div>
                <div class="h-[120px] flex items-center justify-center">
                    <div>
                        <img src="assets/images/partner/5.png" alt="" class="mx-auto w-auto">
                    </div>
                </div>
                <div class="h-[120px] flex items-center justify-center">
                    <div>
                        <img src="assets/images/partner/2.png" alt="" class="mx-auto w-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of orico-partners-section  -->



    <!-- modal section -->
    <div id="popup-quickview"
        class="fixed top-0 left-0 z-20 hidden w-full h-full overflow-x-hidden overflow-y-auto bg-[rgba(0,0,0,0.4)]">
        <div class="max-w-[1120px] my-[200px] mx-auto md:max-w-[500px]">
            <div
                class="relative flex flex-col w-full pointer-events-auto bg-white rounded-[10px] overflow-hidden duration-150 ease-in-out">
                <button class="modal-clous absolute top-0 right-0 w-10 h-10  bg-[#ececec] text-center z-10"><i
                        class="ti-close text-[24px] leading-10 text-[#b3b3b3]"></i></button>
                <div class="p-3">
                    <div class="grid grid-cols-12 items-center">
                        <div class="col-span-5 md:col-span-12">
                            <div class="md:w-full">
                                <img src="assets/images/modal.jpg" alt="" class="w-full">
                            </div>
                        </div>
                        <div class="col-span-7 md:col-span-12">
                            <div class="md:p-[30px_0] ml-4">
                                <h5 class="font-bold text-[34px] mb-5 font-heading-font col:text-xl col:mb-0">
                                    Organic Products</h5>
                                <h6 class="font-bold text-[28px] mb-[20px] col:text-xl">350.00 USD</h6>
                                <ul class="flex mb-7">
                                    <li class="mr-[5px] text-[#8188a9] "><i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                    <li class="mr-[5px] text-[#8188a9] "><i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                    <li class="mr-[5px] text-[#8188a9] "><i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                    <li class="mr-[5px] text-[#8188a9] "><i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                    <li class="text-[#8188a9] "><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                                <p class="text-[#676767] text-[16px]">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Nunc quis ultrices
                                    lectus lobortis, dolor et tempus porta, leo mi efficitur ante, in varius
                                    felis
                                    sem ut mauris. Proin volutpat lorem inorci sed vestibulum tempus. Lorem
                                    ipsum
                                    dolor sit amet, consectetur adipiscing elit. Aliquam
                                    hendrerit.
                                </p>
                                <div class="flex items-center mt-5">
                                    <div
                                        class="flex items-center border border-[#6e6e6e] h-[52px] leading-[52px] max-w-[180px] mr-3 px-2 rounded-full">
                                        <span id="decrease"
                                            class="w-11 h-11 leading-[44px] text-center border cursor-pointer border-[#6e6e6e] rounded-full text-base font-semibold">-</span>
                                        <input
                                            class="w-1/2 h-[52px] text-center border-y-[#6e6e6e] border-x-transparent border"
                                            type="number" id="number" placeholder="1">
                                        <span id="increase"
                                            class="w-11 h-11 leading-[44px] text-center border cursor-pointer border-[#6e6e6e] rounded-full text-base font-semibold">+</span>
                                    </div>
                                    <a href="cart.html" class="theme-btn ">Add to cart</a>
                                </div>
                                <div class="mt-7 flex items-center">
                                    <span class="font-normal font-heading-font text-sm text-[#6e6e6e]">Share with :
                                    </span>
                                    <ul class="ml-2">
                                        <li class="inline-block"><a href='#'
                                                class="w-7 h-7 rounded-[100px] leading-7 text-center text-white bg-[#F78914] mr-2 block"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li class="inline-block"><a href='#'
                                                class="w-7 h-7 rounded-[100px] leading-7 text-center text-white bg-[#F78914] mr-2 block"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                        <li class="inline-block"><a href='#'
                                                class="w-7 h-7 rounded-[100px] leading-7 text-center text-white bg-[#F78914] mr-2 block"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li class="inline-block"><a href='#'
                                                class="w-7 h-7 rounded-[100px] leading-7 text-center text-white bg-[#F78914] mr-2 block"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <li class="inline-block"><a href='#'
                                                class="w-7 h-7 rounded-[100px] leading-7 text-center text-white bg-[#F78914] mr-2 block"><i
                                                    class="fa fa-youtube-play"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
