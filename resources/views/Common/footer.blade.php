<!-- start footer -->
<section class="footer-bg relative z-[1]">
    <div class="py-[80px] md:py-[60px] relative overflow-hidden">
        <div class="wraper">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-6 col:col-span-12 md:mb-[30px]">
                    <div class="footer-logo mb-[30px]">
                        <img src={{ url('assets/images/footer-logo.png') }} class="w-full" srcset="/assets/images/footer-logo.png" alt="blog">
                    </div>
                    <p class="mb-[10px] text-white text-[16px] leading-[30px]">Global Agri Export of Premium
                        Agricultural Products: Desi Chana, Groundnut Seeds, Soybean Seeds, Fish Fertilizer &
                        More.</p>
                    <ul class="pt-[10px]">
                        <!-- <li class="inline-block text-[22px] text-white">
                            <a class="icon-div text-white w-[36px] h-[36px] leading-[40px]
                                     bg-[rgba(255,255,255,0.1)] block text-center rounded-[50%]
                                      text-[18px] transition-all-all
                                      hover:bg-[#F5811E]" href="#">
                                <i class="ti-facebook"></i>
                            </a>
                        </li> -->
                        <li class="inline-block text-[22px] text-white ">
                            <a class="icon-div text-white w-[36px] h-[36px] leading-[40px]
                                     bg-[rgba(255,255,255,0.1)] block text-center rounded-[50%]
                                      text-[18px] transition-all-all
                                      hover:bg-[#F5811E]" href="#">
                                <i class="ti-twitter-alt"></i>
                            </a>
                        </li>
                        <li class="inline-block text-[22px] text-white ml-[20px] lg:ml-[20px]">
                            <a class="icon-div text-white w-[36px] h-[36px] leading-[40px]
                                     bg-[rgba(255,255,255,0.1)] block text-center rounded-[50%]
                                      text-[18px] transition-all-all
                                      hover:bg-[#F5811E]" href="#">
                                <i class="ti-instagram"></i>
                            </a>
                        </li>
                        <!-- <li class="inline-block text-[22px] text-white ml-[20px] lg:ml-[20px]">
                            <a class="icon-div text-white w-[36px] h-[36px] leading-[40px]
                                     bg-[rgba(255,255,255,0.1)] block text-center rounded-[50%]
                                      text-[18px] transition-all-all
                                      hover:bg-[#F5811E]" href="#">
                                <i class="ti-google"></i>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <div class="col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-6 col:col-span-12 md:mb-[30px]">
                    <div class="pl-[50px] lg:pl-0 md:pl-0">
                        <div class="footer-link-title">
                            <h3 class="text-[25px] text-white capitalize relative font-heading-font font-normal
                                     ">
                                Quick Links</h3>
                        </div>
                        <ul>
                            <li class="relative z-[1] ">
                                <a href="/about" class="text-[16px] font-heading-font transition-all-all text-white
                                           duration-300 hover:text-[#F5811E]">
                                    About us
                                </a>
                            </li>
                            <li class="relative z-[1] ">
                                <a href="/products" class="text-[16px] font-heading-font transition-all-all text-white
                                           duration-300 hover:text-[#F5811E]">
                                    Products
                                </a>
                            </li>
                            <li class="relative z-[1] ">
                                <a href="/contact" class="text-[16px] font-heading-font transition-all-all text-white
                                           duration-300 hover:text-[#F5811E]">
                                    Contact us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-6 col:col-span-12 md:mb-[30px]">
                    <div class="px-[20px] lg:px-0 ">
                        <div class="footer-link-title">
                            <h3 class="text-[25px] text-white capitalize relative font-heading-font font-normal
                                     ">
                                Our Address</h3>
                        </div>
                        <ul>
                            <li class="mb-[10px] text-white text-[15px] font-heading-font flex items-center gap-2">
                                <div>
                                    <i class="ti-location-pin text-[#F5811E]"></i>
                                </div>
                                <div>
                                    <span>Plot No. 5, Jay Industrial Park-3, Sukhpur, Junagadh</span>
                                </div>
                            </li>

                            <li class="mb-[10px] flex items-center gap-2 text-white text-[15px] font-heading-font">
                                <div>
                                    <i class="ti-email text-[#F5811E]"></i>
                                </div>
                                <div>
                                    <a href="mailto:info@gopalagriexport.in">
                                        <span>info@gopalagriexport.in</span>
                                    </a>
                                </div>
                            </li>

                            <li class="mb-[10px] flex items-center gap-2 text-white text-[15px] font-heading-font">
                                <div>
                                    <i class="ti-mobile text-[#F5811E]"></i>
                                </div>
                                <div>
                                    <a href="tel:+919712416262">
                                        <span>+91 97124 16262</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-span-3 lg:col-span-3 md:col-span-6 sm:col-span-6 col:col-span-12 md:mb-[30px]">
                    <div class="footer-link-title">
                        <h3 class="text-[25px] text-white capitalize relative font-heading-font font-normal
                                     ">
                            Newsletter</h3>
                    </div>
                    <p class="mb-[10px] text-white text-[16px] leading-[30px] font-heading-font">
                        Never Miss Anything From Gopal Agri Export By Signing Up To Our Newsletter.
                    </p>
                    <form class="mt-[25px] relative" method="POST" action="{{ route('newsletter.store') }}" id="newsletter-form">
                        @csrf
                        <input type="email" name="email" class="text-white footer-email bg-[#141d37] h-[55px] text-white p-[6px_15px] border-[1px] border-[#28343e] w-full focus:outline-0 rounded-[5px]" placeholder="Email Address *" required>
                        <div class="absolute right-[5px] top-[-17px] translate-y-1/2">
                            <button type="submit" class="border-0 outline-0 text-white w-[40px] h-[45px] leading-[45px] transition-all-all rounded-[5px]" id="submit-btn">
                                <i class="ti-angle-right" id="submit-icon"></i>
                                <div id="spinner" class="spinner" style="display: none;">
                                    <!-- Your spinner (or use a loading icon) -->
                                    <div class="spinner-border spinner-border-sm text-light" role="status">

                                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 200'>
                                            <circle fill='#FFFFFF' stroke='#FFFFFF' stroke-width='15' r='15' cx='40' cy='100'>
                                                <animate attributeName='opacity' calcMode='spline' dur='2' values='1;0;1;' keySplines='.5 0 .5 1;.5 0 .5 1' repeatCount='indefinite' begin='-.4'></animate>
                                            </circle>
                                            <circle fill='#FFFFFF' stroke='#FFFFFF' stroke-width='15' r='15' cx='100' cy='100'>
                                                <animate attributeName='opacity' calcMode='spline' dur='2' values='1;0;1;' keySplines='.5 0 .5 1;.5 0 .5 1' repeatCount='indefinite' begin='-.2'></animate>
                                            </circle>
                                            <circle fill='#FFFFFF' stroke='#FFFFFF' stroke-width='15' r='15' cx='160' cy='100'>
                                                <animate attributeName='opacity' calcMode='spline' dur='2' values='1;0;1;' keySplines='.5 0 .5 1;.5 0 .5 1' repeatCount='indefinite' begin='0'></animate>
                                            </circle>
                                        </svg>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </form>


                    <!-- Add a Success Message Div -->
                    <div id="success-message" style="display:none;"></div>


                </div>
            </div>
        </div>
    </div>
    <div class="text-center relative bg-[#141d37] py-[20px]">
        <div class="wraper">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <p class="text-[15px] text-white text-center font-heading-font">
                        Copyright &copy; 2024 All Right Reserved by
                        <a href="/" class="text-[#F5811E]">Gopalagriexport</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



</div>

<!-- end of page-wrapper -->
<!-- All JavaScript files
    ================================================== -->
<script src="{{ url('assets/js/jquery.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#newsletter-form').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission

            var email = $('input[name="email"]').val(); // Get the email value
            var $submitButton = $('#submit-btn');
            var $submitIcon = $('#submit-icon');
            var $spinner = $('#spinner');

            // Hide the submit icon and show the spinner
            $submitIcon.hide(); // Hide the icon
            $spinner.show(); // Show the spinner
            $submitButton.prop('disabled', true); // Disable the submit button

            $.ajax({
                url: $(this).attr('action'), // Form action (route)
                method: 'POST', // HTTP method
                data: {
                    _token: $('input[name="_token"]').val(), // CSRF Token
                    email: email
                },
                success: function(response) {
                    // Show success message
                    $('#success-message').text(response.message).show();
                    // Optionally, clear the form
                    $('#newsletter-form')[0].reset();
                },
                error: function(response) {
                    // Handle error response
                    alert('Something went wrong, please try again.');
                },
                complete: function() {
                    // Hide the spinner, show the submit icon and enable the submit button after the request is complete
                    $spinner.hide();
                    $submitIcon.show(); // Show the icon again
                    $submitButton.prop('disabled', false);
                }
            });
        });
    });
</script>


<script>
    document.getElementById('toggleDrawer').addEventListener('click', function() {
        var drawer = document.getElementById('drawer');
        var body = document.getElementById('body');
        var openIcon = document.getElementById('openIcon');
        var closeIcon = document.getElementById('closeIcon');

        if (drawer.classList.contains('open')) {
            drawer.classList.remove('open');
            body.style.overflow = '';
            body.style.height = '';
            openIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        } else {
            drawer.classList.add('open');
            body.style.overflow = 'hidden';
            body.style.height = '100vh';
            openIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        }
    });
</script>
<!-- Plugins for this template -->
<script src="{{ url('assets/js/modernizr.custom.js') }}"></script>
<script src="{{ url('assets/js/jquery-plugin-collection.js') }}"></script>
<script src="{{ url('assets/js/tw-elements.umd.min.js') }}"></script>
<script src="{{ url('assets/js/moving-animation.js') }}"></script>
<!-- Custom script for this template -->

<script src="{{ url('assets/js/script.js') }}"></script>
</body>


</html>