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
                        Gopal Certifications</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li class="inline-block px-1 pr-[15px] text-white relative text-xl sm:text-lg
                                after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-[8px] after:h-[8px] after:bg-white after:rounded-[50%]">
                            <a href="{{ url('/') }}" class="text-white text-lg transition-all hover:text-[#F5811E]">Home</a>
                        </li>
                        <li class="inline-block px-1 pr-[15px] text-white relative text-xl sm:text-lg">Certifications</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->

<!-- certifications-section start-->
<div class="bg-[#f9f9f9] py-[120px] md:py-[90px] sm:py-[80px]">
    <div class="wraper">
        <div class="grid grid-cols-3 gap-6">
            @foreach ($certifications as $certification)
                <a href={{ asset('assets/images/certifications/' . $certification['filename']) }} class="bg-white p-4 rounded-lg shadow-lg text-center">
                    <img src="{{ asset('assets/images/certifications/' . $certification['filename']) }}" alt="{{ $certification['name'] }}" class="w-full h-auto mb-4 rounded cursor-pointer" >
                    <h3 class="text-lg font-semibold text-white" style="color: #000;">{{ $certification['name'] }}</h3>
                </a>
            @endforeach
        </div>
    </div>
</div>
<!-- certifications-section end -->

<!-- Lightbox/Modal for Zoom Effect -->
<div id="lightbox" class="fixed inset-0 bg-black bg-opacity-80 hidden items-center justify-center z-50">
    <div class="relative max-w-3xl w-full">
        <button onclick="closeLightbox()" class="absolute top-2 right-2 text-black text-2xl">&times;</button>
        <img id="lightbox-img" src="" alt="" class="w-full h-auto rounded">
        <h3 id="lightbox-title" class="text-white text-center mt-4"></h3>
    </div>
</div>

<script>
    function openLightbox(imgUrl, imgTitle) {
        document.getElementById('lightbox-img').src = imgUrl;
        document.getElementById('lightbox-title').innerText = imgTitle;
        document.getElementById('lightbox').classList.remove('hidden');
    }

    function closeLightbox() {
        document.getElementById('lightbox').classList.add('hidden');
    }
</script>
@endsection
