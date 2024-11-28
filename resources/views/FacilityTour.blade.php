@extends('Common.main')
@section('content')


<!-- start wpo-page-title -->
<section class="relative bg-[url(../images/page-title.jpg)] bg-no-repeat bg-center bg-cover min-h-[450px] flex justify-center flex-col z-10
                sm:min-h-[250px]  before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#040128] before:-z-10 before:opacity-[0.65]">
    <div class="wraper">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="text-center">
                    <h2 class="text-[60px] text-white leading-[60px]m mt-[-10px] mb-5 font-heading-font font-medium sm:text-[30px] sm:leading-[35px] sm:mb-[10px]">
                        Gopal Infrastructure</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li class="inline-block px-1 pr-[15px] text-white relative text-xl sm:text-lg
                                after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-[8px] after:h-[8px] after:bg-white after:rounded-[50%]">
                            <a href="{{ url('/') }}" class="text-white text-lg transition-all hover:text-[#F5811E]">Home</a>
                        </li>
                        <li class="inline-block px-1 pr-[15px] text-white relative text-xl sm:text-lg">Infrastructure</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->
<section class="py-[120px] md:py-[90px]  sm:py-[80px]   ">
    <div class="wraper">
        <div class="col-span-6 md:col-span-12">
            <div class="orico-about-text-wrap 111">
                <div class="orico-about-text">
                    <!-- <h2 class="text-4xl font-normal font-heading-font mb-5 lg:text-4xl sm:text-3xl">Infrastructure</h2> -->
                    <p class="mb-5 description-text">
                        At Gopal Agri Export, we specialize in the post-harvest processing of a broad selection of seed products. From efficient shelling and grading to meticulous sorting, roasting, blanching, and packaging, our facility is dedicated to quality and freshness across every seed type.
                    </p>
                    <div class="infrastructure-slider">
                        <div class="swiper-container infrastructure-swiper">
                            <div class="swiper-wrapper">
                                @foreach ($images as $image)
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/infrastructure/' . $image['filename']) }}" alt="{{ $image['name'] }}">
                                    <!-- <h3>{{ $image['name'] }}</h3> -->
                                </div>
                                @endforeach
                            </div>
                            <!-- Add Pagination and Navigation -->
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <ul class="mb-8 flex col:block mt-3">

                        <li data-wow-duration="1s" class=" wow fadeIn py-1 relative pl-6 font-medium inline-block text-base  text-[#E1D4D1]">
                            <i class="absolute left-0 top-1">
                                <img src="assets/images/about/4.png" alt="">
                            </i>
                            <p>Capacity to meet the demand of the market and the supply of the raw material.</p>
                        </li>
                        <li data-wow-duration="1s" class=" wow fadeIn py-1 relative pl-6 font-medium inline-block text-base  text-[#E1D4D1]">
                            <i class="absolute left-0 top-1">
                                <img src="assets/images/about/4.png" alt="">
                            </i>
                            <p>Efficient equipment and machinery to perform the various operations with minimal losses and wastage.</p>
                        </li>
                    </ul>
                    <!-- <ul class="mb-8 flex col:block">
                        <li data-wow-duration="1s" class=" wow fadeIn py-1 relative pl-6 font-medium inline-block text-base  text-[#E1D4D1]">
                            <i class="absolute left-0 top-1">
                                <img src="assets/images/about/4.png" alt="">
                            </i>
                            <p>Our aim is to establish Agri clinics in every state and reach every district down to the
                                village level, focusing on comprehensive agricultural consultancy.</p>
                        </li>
                        <li data-wow-duration="1s" class=" wow fadeIn py-1 relative pl-6 font-medium inline-block text-base  text-[#E1D4D1]">
                            <i class="absolute left-0 top-1">
                                <img src="assets/images/about/4.png" alt="">
                            </i>
                            <p>We are developing software for APMC price lists, integrating auto voice commands and
                                instructional videos, and aiming to export high-quality goods.</p>
                        </li>
                    </ul> -->
                </div>

            </div>
        </div>
    </div>

    <!-- infrastructure-section end -->
</section>

<script>
var swiper = new Swiper(".infrastructure-swiper", {
    loop: true,
    speed: 1000,
    parallax: true,
    autoplay: {
        delay: 100,
        disableOnInteraction: false,
    },
    effect: 'fade', // Options: 'fade', 'cube', 'coverflow', 'flip'
    fadeEffect: {
        crossFade: true, // Smooth fading
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    on: {
        init: function () {
            const activeSlide = this.slides[this.activeIndex];
            animateSlide(activeSlide);
        },
        slideChangeTransitionStart: function () {
            const activeSlide = this.slides[this.activeIndex];
            animateSlide(activeSlide);
        },
    },
});

// Animation function for the slides
function animateSlide(slide) {
    const img = slide.querySelector('img');
    if (img) {
        // Initial state
        img.style.transform = 'scale(0.5) rotate(5deg)';
        img.style.opacity = '0';
        img.style.transition = 'transform 0.8s ease-out, opacity 0.8s ease-out';

        // Animate to final state
        setTimeout(() => {
            img.style.transform = 'scale(1) rotate(0deg)';
            img.style.opacity = '1';
        }, 100);
    }
}

</script>
@endsection