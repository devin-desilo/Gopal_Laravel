@extends('Common.main')
@section('content')
<section class="relative bg-[url(../images/page-title.jpg)] bg-no-repeat bg-center bg-cover min-h-[450px] flex justify-center flex-col z-10
                sm:min-h-[250px]  before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#040128] before:-z-10 before:opacity-[0.65]">
    <div class="wraper">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="text-center">
                    <h2 class="text-[60px] text-white leading-[60px]m mt-[-10px] mb-5 font-heading-font font-medium sm:text-[30px] sm:leading-[35px] sm:mb-[10px]">
                        About</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li class="inline-block px-1 pr-[15px] text-white relative text-xl sm:text-lg
                                after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-[8px] after:h-[8px] after:bg-white after:rounded-[50%]">
                            <a href="/" class="text-white text-lg transition-all hover:text-[#F5811E]">Home</a>
                        </li>
                        <li class="inline-block px-1 pr-[15px] text-white relative text-xl sm:text-lg">About
                        </li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->

<!-- start of orico-about-section -->
<section class="relative flex justify-center flex-col z-20 py-[120px] md:pt-[70px] md:py-[90px] sm:py-[80px] sm:pt-[60px] ">
    <div class="wraper">
        <div class="grid grid-cols-12 gap-x-4 items-center">
            <div class="col-span-6 md:col-span-12 mobile-order-2">
                <div class="orico-about-text-wrap 111">
                    <div class="orico-about-text">
                        <span data-wow-duration="1s" class="text-[16px] wow slideInLeft font-heading-font inline-block mb-1 font-normal underline text-[#F5811E]">“ABOUT
                            US”</span>
                        <h2 data-wow-duration="1s" class="wow fadeInDown text-4xl font-normal font-heading-font mb-5 lg:text-4xl sm:text-3xl">Welcome
                            To Gopal Agri Export
                        </h2>
                        <p data-wow-duration="1s" class="mb-5 wow fadeIn description-text">Established in 2018, Gopal Agri Export is a leading Manufacturer,
                            Wholesaler, and Trader of Desi Chana, Groundnut Seeds, Soybean Seeds, Fish
                            Fertilizer, and more. We help farmers with professional advice on managing crops and
                            increasing productivity. Using data and technology, we ensure farmers get
                            high-quality agricultural inputs and close the knowledge gap.</p>
                        <ul class="mb-8 flex col:block">
                            <li data-wow-duration="1s" class=" wow fadeIn py-1 relative pl-6 font-medium inline-block text-base  text-[#E1D4D1]">
                                <i class="absolute left-0 top-1">
                                    <img src="assets/images/about/4.png" alt="">
                                </i>
                                <p>It has survived not only
                                    five centuries the leap into.</p>
                            </li>
                            <li data-wow-duration="1s" class=" wow fadeIn py-1 relative pl-6 font-medium inline-block text-base  text-[#E1D4D1]">
                                <i class="absolute left-0 top-1">
                                    <img src="assets/images/about/5.png" alt="">
                                </i>
                                <p>It has survived not only
                                    five centuries the leap into.</p>
                            </li>
                        </ul>
                        <a data-wow-duration="1s" class=" wow fadeInUp theme-btn  " href="/about">Get In
                            Touch</a>
                    </div>
                </div>
            </div>
            <div class="col-span-6 md:col-span-12 mobile-order-1">
                <div class="pl-12 md:pl-0 md:mt-14">
                    <div class="relative z-10 w-full p-5 col:p-2 border border-[#F5811E70] ">
                        <video autoplay loop muted playsinline>
                            <source src="/assets/Video/banner_Video.mp4" type="video/mp4">
                            <!-- <source src="path/to/your/video.webm" type="video/webm"> -->
                            Your browser does not support the video tag.
                        </video>
                        <div class="w-[101px] h-[135px] col:w-[60px] col:h-[10px] reward-card bg-[rgba(247,137,20,0.65)] rounded-[8px] flex justify-center items-center text-center absolute
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
    <div class="absolute left-[40px] top-1/2 -translate-y-1/2 -z-10 xl:hidden "><img src="assets/images/about/2.png" alt=""></div>
    <div class="absolute right-[40px] top-1/2 -translate-y-1/2 -z-10 xl:hidden"><img src="assets/images/about/3.png" alt=""></div>
</section>
<!-- end of orico-about-section -->


<!-- start orico-fun-fact-section -->
<section class="Scroller-bg bg-cover bg-center bg-no-repeat bg-fixed
             md:bg-local ">
    <div class="text-center py-20 md:pb-12 relative z-10  before:absolute before:left-0 before:top-0
             before:bg-[#0008] before:-z-10 before:w-full before:h-full">
        <div class="wraper">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-3 md:col-span-6 col:col-span-12 md:mb-8">
                    <div>
                        <h3 class="text-7xl text-white font-heading-font lg:text-6xl sm:text-5xl flex items-center justify-center">
                            <span class="odometer" data-count="250">00</span>+
                        </h3>
                        <p class="text-base text-white md:text-sm">Trusted By Customers</p>
                    </div>
                </div>
                <div class="col-span-3 md:col-span-6 col:col-span-12 md:mb-8">
                    <div>
                        <h3 class="text-7xl text-white font-heading-font lg:text-6xl sm:text-5xl flex items-center justify-center">
                            <span class="odometer" data-count="46">00</span>+
                        </h3>
                        <p class="text-base text-white md:text-sm">Product Sale Per Day</p>

                    </div>
                </div>
                <div class="col-span-3 md:col-span-6 col:col-span-12 md:mb-8">
                    <div>
                        <h3 class="text-7xl text-white font-heading-font lg:text-6xl sm:text-5xl flex items-center justify-center">
                            <span class="odometer" data-count="9">00 </span>+
                        </h3>
                        <p class="text-base text-white md:text-sm">Years Of Foundation</p>
                    </div>
                </div>
                <div class="col-span-3 md:col-span-6 col:col-span-12 md:mb-8">
                    <div>
                        <h3 class="text-7xl text-white font-heading-font lg:text-6xl sm:text-5xl flex items-center justify-center">
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


<!-- blog-area-start -->
<section class="py-[120px] md:py-[90px]  sm:py-[80px]   ">
    <div class="wraper">
        <div class="col-span-6 md:col-span-12">
            <div class="orico-about-text-wrap 111">
                <div class="orico-about-text">
                    <h2 class="text-4xl font-normal font-heading-font mb-5 lg:text-4xl sm:text-3xl">Why Choose Us</h2>
                    <p class="mb-5 description-text">
                        Established in 2018, Gopal Agri Export is a leading Manufacturer, Wholesaler, and Trader of Desi
                        Chana, Groundnut Seeds, Soybean Seeds, Fish Fertilizer, and more. We help farmers with
                        professional advice on managing crops and increasing productivity. Using data and technology, we
                        ensure farmers get high-quality agricultural inputs and close the knowledge gap.
                    </p>
                    <ul class="mb-8 flex col:block">

                        <li data-wow-duration="1s" class=" wow fadeIn py-1 relative pl-6 font-medium inline-block text-base  text-[#E1D4D1]">
                                <i class="absolute left-0 top-1">
                                    <img src="assets/images/about/4.png" alt="">
                                </i>
                                <p>Our aim is to establish Agri clinics in every state and reach every district down to the
                                village level, focusing on comprehensive agricultural consultancy.</p>
                            </li>
                            <li data-wow-duration="1s" class=" wow fadeIn py-1 relative pl-6 font-medium inline-block text-base  text-[#E1D4D1]">
                                <i class="absolute left-0 top-1">
                                    <img src="assets/images/about/5.png" alt="">
                                </i>
                                <p>We are developing software for APMC price lists, integrating auto voice commands and
                                instructional videos, and aiming to export high-quality goods.</p>
                            </li>
                    </ul>
                    <a class="theme-btn  " href="/about">Get In Touch</a>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection