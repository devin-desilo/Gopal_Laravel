@extends('Common.main')

@section('content')
<!-- start wpo-page-title -->
<section class="relative bg-[url(../images/page-title.jpg)] bg-no-repeat bg-center bg-cover min-h-[450px] flex justify-center flex-col z-10
                sm:min-h-[250px] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#040128] before:-z-10 before:opacity-[0.65]">
    <div class="wraper">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="text-center">
                    <h2 class="text-[60px] text-white leading-[60px]m mt-[-10px] mb-5 font-heading-font font-medium sm:text-[30px] sm:leading-[35px] sm:mb-[10px]">
                        {{ $product['name'] }}
                    </h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li class="inline-block px-1 pr-[15px] text-white relative text-xl sm:text-lg
                                after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-[8px] after:h-[8px] after:bg-white after:rounded-[50%]">
                            <a href="{{ url('/') }}" class="text-white text-lg transition-all hover:text-[#F5811E]">Home</a>
                        </li>
                        <li class="inline-block px-1 pr-[15px] text-white relative text-xl sm:text-lg">
                            {{ $product['name'] }}
                        </li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->

<!-- start shape single page -->
<section class="section-wrap">
    <div class="wraper">
        <div class="grid grid-cols-12">
            <div class="col-span-6 md:col-span-12">
                <div class="shop-single-slider">
                    <div class="slider-for">
                        @foreach ($product['images'] as $image)
                        <div class="cursor-pointer slider-main-image overflow-hidden"><img class="object-cover w-full h-full" src="{{ asset('assets/images/product/' . $image) }}" alt>
                        </div>
                        @endforeach
                    </div>
                    <div class="slider-nav flex items-center justify-between gap-2">
                        @foreach ($product['images'] as $image)
                        <div class="cursor-pointer slider-small overflow-hidden "><img class="object-cover w-full h-full" src="{{ asset('assets/images/product/' . $image) }}" alt>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-span-6 md:col-span-12">
                <div class="p-[15px_30px_80px] lg:p-[10px_30px_15px] md:p-[40px_30px] md:mt-[45px] sm:p-0">
                    <h2 class="text-[35px] text-[#0a272c] leading-[40px] font-bold  sm:text-[22px]">
                        {{ $product['name'] }}
                    </h2>

                    <!-- <div class="text-[25px] text-[#F5811E] m-[7px_0_20px] font-bold md:text-[30px] sm:text-[25px]">
                            <span
                                class="text-[24px] text-[#a1a1a1] line-through inline-block ml-[5px] font-medium md:text-[20px] sm:text-[18px]">
                            </span>
                            <span class="current">${{ $product['price'] }}</span>
                        </div> -->
                    <!-- <p class="text-[16px] text-[#E1D4D1] leading-[25px] mt-[10px]">{{ $product['description'] }}</p> -->


                    <!-- <div class="product-option">
                            <form class="form">
                                <div class="product-row">
                                    <div>
                                        <input id="product-count" type="text" value="1" name="product-count">
                                    </div>
                                    <div>
                                        <button type="submit" class="theme-btn">Add to cart</button>
                                    </div>
                                    <div>
                                        <button class="theme-btn heart-btn"><i class="ti-heart"></i></button>
                                        <span></span>
                                    </div>
                                </div>
                            </form>
                        </div>  -->
                    <!-- end option -->
                    <div class="mt-[10px]">
                        <p><span class="font-bold text-[#0a272c] mr-[2px]">Categories:</span>
                            {{ $product['category'] }}
                        </p>
                        <!-- <p><span class="font-bold text-[#0a272c] mr-[2px]">Description:</span> -->
                        <p class="text-[16px] text-[#E1D4D1] mb-[20px]">{{ $product['description'] }}</p>
                        </p>
                        <!-- <p><span class="font-bold text-[#0a272c] mr-[2px]">Tags:</span>
                            {{ implode(', ', $product['tags']) }}
                        </p> -->
                    </div>
                </div> <!-- end product details -->
            </div> <!-- end col -->
        </div>

    </div>
</section>
<!-- end shape single page -->


<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Slick Slider JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Initialize Slider -->
<script>
    $(document).ready(function() {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: true,
            focusOnSelect: true
        });
    });
</script>

<!-- Include Slick Slider CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
@endsection