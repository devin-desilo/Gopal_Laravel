@extends('Common.main')
@section('content')
    <!-- start wpo-page-title -->
    <section
        class="relative bg-[url(../images/page-title.jpg)] bg-no-repeat bg-center bg-cover min-h-[450px] flex justify-center flex-col z-10
                sm:min-h-[250px]  before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#040128] before:-z-10 before:opacity-[0.65]">
        <div class="wraper">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="text-center">
                        <h2
                            class="text-[60px] text-white leading-[60px]m mt-[-10px] mb-5 font-heading-font font-medium sm:text-[30px] sm:leading-[35px] sm:mb-[10px]">
                            Gopal Products</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li
                                class="inline-block px-1 pr-[15px] text-white relative text-xl sm:text-lg
                                after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-[8px] after:h-[8px] after:bg-white after:rounded-[50%]">
                                <a href="{{ url('/') }}"
                                    class="text-white text-lg transition-all hover:text-[#F5811E]">Home</a>
                            </li>
                            <li class="inline-block px-1 pr-[15px] text-white relative text-xl sm:text-lg">Products</li>
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
            <div>
                <div class="grid products-wrap gap-x-3 gap-y-5">
                    @foreach ($products as $product)
                        <div id="product-{{ $product->id }}"
                            class="product-box  sm:w-full mx-[15px] sm:mx-0 milk fruit zoomIn"
                            data-wow-duration="2000ms">
                            <a href="{{ route('products.show', $product->id) }}">
                                <div class="group bg-white p-0 transition mb-7 cursor-pointer relative text-center">
                                    <div
                                        class="relative bg-[#F3F1EA] product_image-div  overflow-hidden flex justify-center flex-col">
                                        @if (count($product->images) > 0)
                                            <img src="{{ asset('assets/images/product/' . $product['images'][0]) }}"
                                                alt="" class="relative transition 
                                                object-cover w-full h-full group-hover:opacity-[0.8]">
                                        @else
                                            <img src="assets/images/default-product.jpg" alt=""
                                                class="relative transition group-hover:opacity-[0.8]">
                                        @endif
                                    </div>
                                    <div class="transition product-text-div">
                                        <h2>
                                            <p href="{{ route('products.show', $product->id) }}"
                                                class="font-normal text-xl text-[#232323] font-heading-font mb-2 mt-1 transition group-hover:text-[#F5811E]">
                                                {{ $product->name }}</p>
                                        </h2>
                                    </div>
                                    <div class="hidden">
                                        <div
                                            class="transition-all text-center absolute top-0 left-0 z-20 scale-0 flex justify-center flex-col w-full h-full group-hover:scale-100">
                                            <ul class="flex items-center justify-center transition-all mb-5">
                                                <li
                                                    class="flex justify-center items-center ml-2 transition-all prodact-modal">
                                                    <button
                                                        class="prodact-modal-open block w-[45px] h-[45px] leading-[45px] transition-all-all bg-transparent text-white rounded-[50px] border-white border-solid border hover:bg-white hover:text-[#F5811E] relative group/edit">
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
                                            <h2>
                                                <p href="{{ route('products.show', $product->id) }}"
                                                    class="font-normal text-xl text-[#232323] font-heading-font mb-2 mt-1 transition hover:text-[#F5811E]">
                                                    {{ $product->name }}</p>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="mt-8 pagination-main-div flex items-center justify-center">
                    {{ $products->links() }}
                </div> --}}
                <!-- Pagination -->
                <div class="pagination-container">
                    <a href="{{ $products->previousPageUrl() }}"
                        class="pagination-link {{ $products->onFirstPage() ? 'disabled' : '' }}">Previous</a>

                    @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                        <a href="{{ $url }}"
                            class="pagination-link {{ $page == $products->currentPage() ? 'active' : '' }}">{{ $page }}</a>
                    @endforeach

                    <a href="{{ $products->nextPageUrl() }}"
                        class="pagination-link {{ !$products->hasMorePages() ? 'disabled' : '' }}">Next</a>
                </div>

            </div>
        </div>
    </div>
    <!-- shop-section end -->
@endsection
