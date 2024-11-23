@extends('Common.main')
@section('content')

<style>
    .contact-form {
        /* background: #ffffff; */
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 500px;
        width: 100%;
        margin: auto;
    }

    .contact-form h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #FFF;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #FFF;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    .form-group textarea {
        resize: none;
        height: 100px;
    }

    .submit-btn {
        background: #28a745;
        color: #ffffff;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .submit-btn:hover {
        background: #218838;
    }

    .alert {
        padding: 10px;
        margin-bottom: 15px;
        color: #ffffff;
        border-radius: 5px;
    }

    .alert-success {
        background: #28a745;
    }

    .alert-error {
        background: #dc3545;
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
        
        <form class="contact-form contact-item  " method="POST" action="{{ route('contact-form.submit') }}">
            @csrf
            <h2>Contact Us</h2>
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-error">
                Please fix the errors below.
            </div>
            @endif
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your name" required>
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
                <label for="note">Message</label>
                <textarea id="note" name="note" placeholder="Write your message here" required>{{ old('note') }}</textarea>
                @error('note') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
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
                            <p class="contact-text address-text">Plot no. 5 , jay industrial, 3, Junagadh, Gujarat 362037
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
                        <p class="text-[#E1D4D1] text-[16px] leading-[22px]">It is a long established fact that a
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
        <!-- <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.3433580732576!2d70.48349356386727!3d21.58657117209968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39580304681e7f27%3A0xf7bc021acd6cd29a!2sShakti%20Enterprise!5e0!3m2!1sen!2sin!4v1722148666610!5m2!1sen!2sin" allowfullscreen></iframe> -->
        <iframe class="w-full h-full border-0 outline-0 " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3052.7148614552602!2d70.45979187433686!3d21.600431880195845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39580396de834f6f%3A0x91ddc5d0c38ec0b5!2sGopal%20Agri%20Export!5e1!3m2!1sen!2sin!4v1731243418491!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
</section>



@endsection