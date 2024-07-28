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
                            <a href="{{ url('/') }}" class="text-white text-lg transition-all hover:text-[#F78914]">Home</a>
                        </li>
                        <li class="inline-block px-1 pr-[15px] text-white relative text-xl sm:text-lg">{{ $product['name'] }}</li>
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
                        <div class="cursor-pointer"><img src="{{ asset('assets/images/product/' . $image) }}" alt></div>
                        @endforeach
                    </div>
                    <div class="slider-nav">
                        @foreach ($product['images'] as $image)
                        <div class="cursor-pointer"><img src="{{ asset('assets/images/product/' . $image) }}" alt></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-span-6 md:col-span-12">
                <div class="p-[15px_30px_80px] lg:p-[10px_30px_15px] md:p-[40px_30px] md:mt-[45px] sm:p-0">
                    <h2 class="text-[35px] text-[#0a272c] leading-[40px] font-bold mb-[15px] sm:text-[22px]">
                        {{ $product['name'] }}
                    </h2>

                    <div class="text-[25px] text-[#F78914] m-[7px_0_20px] font-bold md:text-[30px] sm:text-[25px]">
                        <span class="text-[24px] text-[#a1a1a1] line-through inline-block ml-[5px] font-medium md:text-[20px] sm:text-[18px]">
                            {{-- ${{ $product['original_price'] }} --}}25129
                        </span>
                        <span class="current">${{ $product['price'] }}</span>
                    </div>
                    <p class="text-[16px] text-[#687693] leading-[25px]">{{ $product['description'] }}</p>


                    <div class="product-option">
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
                    </div> <!-- end option -->
                    <div class="mt-[25px]">
                        <p><span class="font-bold text-[#0a272c] mr-[2px]">Categories:</span>
                            {{ $product['category'] }}
                        </p>
                        <p><span class="font-bold text-[#0a272c] mr-[2px]">Tags:</span>
                            {{ implode(', ', $product['tags']) }}
                        </p>
                    </div>
                </div> <!-- end product details -->
            </div> <!-- end col -->
        </div>
        <div class="mt-[75px]">
            <!-- Tabs navigation -->
            <ul class="flex list-none flex-row flex-wrap border-b-0 pl-0" role="tablist" data-te-nav-ref>
                <li role="presentation">
                    <a href="#tabs-home" class=" block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4
                                text-[18px] font-medium capitalize leading-tight text-[#6e6e6e] hover:isolate
                                hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent
                                data-[te-nav-active]:border-[#F78914] data-[te-nav-active]:text-[#F78914]
                                dark:text-[#6e6e6e] dark:hover:bg-transparent
                                dark:data-[te-nav-active]:border-[#F78914] dark:data-[te-nav-active]:text-[#F78914]" data-te-toggle="pill" data-te-target="#tabs-home" data-te-nav-active role="tab" aria-controls="tabs-home" aria-selected="true">Description</a>
                </li>
            </ul>
            <!-- Tabs content -->
            <div class="pt-6 border-t-[rgba(255,74,23,0.3)] border-t-[1px]">
                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-home" role="tabpanel" data-te-tab-active>
                    <div class="content">
                        <p class="text-[16px] text-[#687693] mb-[20px]">{{ $product['description'] }}</p>
                        <p class="text-[16px] text-[#687693] mb-[20px]">
                            <strong>Dimensions:</strong>
                            Width: {{ $product['dimensions']['width'] }} cm,
                            Height: {{ $product['dimensions']['height'] }} cm,
                            Depth: {{ $product['dimensions']['depth'] }} cm
                        </p>
                        <p class="text-[16px] text-[#687693] mb-[20px]">
                            <strong>Manufacturer:</strong> {{ $product['manufacturer'] }}
                        </p>
                        <p class="text-[16px] text-[#687693] mb-[20px]">
                            <strong>Expiry Date:</strong> {{ $product['expiry_date'] }}
                        </p>
                    </div>
                </div>
            </div>
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
            slidesToShow: 3,
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