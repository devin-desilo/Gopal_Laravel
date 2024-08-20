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
                        Contact</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li class="inline-block px-1 pr-[15px] text-white relative text-xl sm:text-lg
                                after:absolute after:right-0 after:top-1/2 after:-translate-y-1/2 after:w-[8px] after:h-[8px] after:bg-white after:rounded-[50%]">
                            <a href="index.html" class="text-white text-lg transition-all hover:text-[#F5811E]">Home</a>
                        </li>
                        <li class="inline-block px-1 pr-[15px] text-white relative text-xl sm:text-lg">Contact
                        </li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->

<!-- start contact -->
<section class="relative pt-[120px] pb-0  z-1">
    <div class="wraper">
        <div class="grid grid-cols-12">
            <div class="col-span-1"></div>
            <div class="col-span-10 md:col-span-12">
                <div class="pb-[100px] sm:pb-[60px]">
                    <div class="contact-container">
                        <div class="contact-item address-item">
                            <div class="icon-container address-icon">
                                <i class="fi flaticon-placeholder icon"></i>
                            </div>
                            <h2 class="contact-title address-title">Address</h2>
                            <p class="contact-text address-text">Yamunaji Ind. Estate, Bhesan Road, Bamangam, Junagadh
                            </p>
                        </div>
                        <div class="contact-item email-item">
                            <div class="icon-container email-icon">
                                <i class="fi flaticon-email icon"></i>
                            </div>
                            <h2 class="contact-title email-title">Email Us</h2>
                            <p class="contact-text email-text">
                                <a href="mailto:gopalagriexport@gmail.com" class="contact-link email-link">gopalagriexport@gmail.com</a>
                            </p>
                        </div>
                        <div class="contact-item call-item">
                            <div class="icon-container call-icon">
                                <i class="fi flaticon-phone-call icon"></i>
                            </div>
                            <h2 class="contact-title call-title">Call Now</h2>
                            <p class="contact-text call-text">
                                <a href="tel:+919712416262" class="contact-link call-link">+91 97124 16262</a>
                                <br>
                                <a href="tel:+919979989941" class="contact-link call-link">+91 99799 89941</a>
                            </p>
                        </div>
                    </div>


                </div>
                <!-- hidden Form  -->
                <div class="hidden">
                    <div class="max-w-[440px] mx-auto text-center mb-[50px]">
                        <h2 class="text-[35px] col:text-[25px] text-[#0a272c] font-heading-font font-bold
                                    mb-[20px]">
                            Have
                            Any Question?</h2>
                        <p class="text-[#687693] text-[16px] leading-[22px]">It is a long established fact that a
                            reader will be distracted
                            content of a page when looking.</p>
                    </div>
                    <div class="p-[50px] bg-white mb-[-125px] relative z-10
                                shadow-[0px_1px_15px_0px_rgba(62,65,159,0.1)] sm:p-7 sm:pt-[50px]">
                        <form id="contact-form-main" action="{{ route('contact-form.submit') }}" method="POST">
                            @csrf
                            <div class="w-[calc(50%-30px)] float-left mx-[15px] mb-[25px] col:float-none col:w-[calc(100%-25px)]">
                                <input type="text" class="form-control w-full bg-transparent border-[1px] border-[#ebebeb] h-[50px]
                        text-[#212529] transition-all pl-[25px] focus:outline-0 focus:shadow-none
                         focus:border-[#F5811E] focus:bg-transparent " name="name" id="name" placeholder="Your Name*">
                            </div>
                            <div class="w-[calc(50%-30px)] float-left mx-[15px] mb-[25px] col:float-none col:w-[calc(100%-25px)]">
                                <input type="email" class="form-control  w-full bg-transparent border-[1px] border-[#ebebeb] h-[50px] text-[#212529] transition-all pl-[25px] focus:outline-0 focus:shadow-none  focus:border-[#F5811E] focus:bg-transparent" name="email" id="email" placeholder="Your Email*">
                            </div>
                            <div class="w-[calc-(100%-25px)] mb-[25px] mx-[15px]">
                                <textarea class="form-control  w-full bg-transparent border-[1px] border-[#ebebeb] h-[180px]  text-[#212529] transition-all pt-[15px] pl-[25px] focus:outline-0 focus:shadow-none  focus:border-[#F5811E] focus:bg-transparent" name="note" id="note" placeholder="Message..."></textarea>
                            </div>
                            <div class="text-center w-full mb-[10px]">
                                <div class="flex-center pt-5">
                                    <button type="submit" data-wow-duration="1s" class="wow fadeInUp theme-btn bg-[#F5811E] hover:bg-[#F5811Eee]">Get
                                        in Touch</button>
    
                                </div>
                                <div id="loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                            <div class="clearfix error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
    
    
                    </div>
                </div>
                <!-- hidden Form End -->
            </div>
            <div class="col-span-1"></div>
        </div>
    </div>
</section>

<!--  start contact-map -->
<section class="wpo-contact-map-section">
    <h2 class="hidden">Contact map</h2>
    <div class="h-[550px]">
        <iframe class="w-full h-full border-0 outline-0 " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.3433580732576!2d70.48349356386727!3d21.58657117209968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39580304681e7f27%3A0xf7bc021acd6cd29a!2sShakti%20Enterprise!5e0!3m2!1sen!2sin!4v1722148666610!5m2!1sen!2sin" allowfullscreen></iframe>

    </div>
</section>



@endsection