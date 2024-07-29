@extends('Common.main')
@section('content')

<style>
    .label {
        font-size: .625rem;
        font-weight: 400;
        text-transform: uppercase;
        letter-spacing: +1.3px;
        margin-bottom: 1rem;
    }

    .searchBar {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    #searchQueryInput {
        width: 100%;
        height: 2.8rem;
        background: #f5f5f5;
        outline: none;
        border: none;
        border-radius: 1.625rem;
        padding: 0 3.5rem 0 1.5rem;
        font-size: 1rem;
    }

    #searchQuerySubmit {
        width: 3.5rem;
        height: 2.8rem;
        margin-left: -3.5rem;
        background: none;
        border: none;
        outline: none;
    }

    #searchQuerySubmit:hover {
        cursor: pointer;
    }

    .search-button {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
    }
</style>
<!-- start wpo-page-title -->
<section class="relative bg-[url(../images/page-title.jpg)] bg-no-repeat bg-center bg-cover min-h-[450px] flex justify-center flex-col z-10
                sm:min-h-[250px]  before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#040128] before:-z-10 before:opacity-[0.65]">
    <div class="wraper">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="text-center">
                    <h2 class="text-[60px] text-white leading-[60px]m mt-[-10px] mb-5 font-heading-font font-medium sm:text-[30px] sm:leading-[35px] sm:mb-[10px]">
                        {{ $query }}</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li class="inline-block px-1 pr-[15px] text-white relative text-xl sm:text-lg
                                after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-[8px] after:h-[8px] after:bg-white after:rounded-[50%]">
                            <a href="{{ url('/') }}" class="text-white text-lg transition-all hover:text-[#F78914]">Home</a>
                        </li>
                        <li class="inline-block px-1 pr-[15px] text-white relative text-xl sm:text-lg">{{ $query }}</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->

<!-- shop-section start-->
<div class="bg-[#f9f9f9] py-[120px] md:py-[90px] sm:py-[80px]">
    <div class="wraper">
        <!-- Search Form -->
        <form action="{{ route('products.search') }}" method="GET" class="mb-8 text-center">
            <div class="searchBar relative">
                <input id="searchQueryInput" type="text" name="query" placeholder="Search products..." value="" />
                <button type="submit" class="p-2 bg-blue-500 text-white rounded absolute search-button">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                    </svg>
                </button>
            </div>
        </form>

        <div>
            @if(count($products) > 0)
            <div class="grid products-wrap gap-x-3 gap-y-5">
                @foreach ($products as $product)
                <div id="product-{{ $product['id'] }}" class="product-box w-[400px] xl:w-[400px] lg:w-[280px] md:w-[44%] sm:w-full mx-[15px] sm:mx-0 milk fruit zoomIn" data-wow-duration="2000ms">
                    <a href="{{ route('products.show', $product['id']) }}">
                        <div class="group bg-white p-0 transition mb-7 cursor-pointer relative text-center">
                            <div class="relative bg-[#F3F1EA] py-5 product_image-div max-h-[220px] min-h-[220px] overflow-hidden flex justify-center flex-col">
                                <div class="mx-auto">
                                    @if (count($product['images']) > 0)
                                    <img src="{{ asset('assets/images/product/' . $product['images'][0]) }}" alt="" class="relative transition group-hover:opacity-[0.8]">
                                    @else
                                    <img src="assets/images/default-product.jpg" alt="" class="relative transition group-hover:opacity-[0.8]">
                                    @endif
                                </div>
                            </div>
                            <div class="transition product-text-div">
                                <h2>
                                    <p href="{{ route('products.show', $product['id']) }}" class="font-normal text-xl text-[#232323] font-heading-font mb-2 mt-1 transition hover:text-[#F78914]">{{ $product['name'] }}</p>
                                </h2>
                            </div>
                            <div class="hidden">
                                <div class="transition-all text-center absolute top-0 left-0 z-20 scale-0 flex justify-center flex-col w-full h-full group-hover:scale-100">
                                    <ul class="flex items-center justify-center transition-all mb-5">
                                        <li class="flex justify-center items-center ml-2 transition-all prodact-modal">
                                            <button class="prodact-modal-open block w-[45px] h-[45px] leading-[45px] transition-all-all bg-transparent text-white rounded-[50px] border-white border-solid border hover:bg-white hover:text-[#F78914] relative group/edit">
                                                <i class="fi ti-eye"></i>
                                                <span class="bg-black text-white text-center text-sm rounded-[6px] py-1 px-3 absolute left-1/2 top-[-20px]  opacity-0 invisible
                                                    -translate-y-1/2 -translate-x-1/2 transition-all-all block  w-[120px] before:absolute before:bottom-[-5px] before:left-1/2
                                                    before:w-[5px] before:h-[5px] before:[clip-path:polygon(0_0,50%_100%,100%_0);] before:bg-black before:border-[#000]
                                                     group-hover/edit:opacity-100 group-hover/edit:visible">Quick
                                                    View</span>
                                            </button>
                                        </li>
                                    </ul>
                                    <h2>
                                        <p href="{{ route('products.show', $product['id']) }}" class="font-normal text-xl text-[#232323] font-heading-font mb-2 mt-1 transition hover:text-[#F78914]">{{ $product['name'] }}</p>
                                    </h2>
                                    {{-- <a href="{{ route('cart.index') }}"
                                    class="p-[10px_25px] bg-white rounded-[50px] text-[#6e6e6e] w-[160px] mx-auto mt-5 inline-block">View
                                    Details
                    </a> --}}
                </div>
            </div>
        </div>
        </a>
    </div>
    @endforeach
</div>
@else
<div class="text-center py-10">
    <h2 class="text-2xl font-semibold">"{{ $query }}" No products found</h2>
    <p class="text-lg">Try adjusting your search to find what you're looking for.</p>
</div>
@endif
</div>
</div>
</div>
<!-- shop-section end -->
@endsection
