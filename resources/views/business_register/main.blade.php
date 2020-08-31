@extends('../layout/' . $layout)

@section('head')
    <title>Add your Business - Check-In - Covid-19 User Registry Platform</title>
@endsection

@section('content')
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="CheckIn Covid-19 User Registry Platform" class="w-12" src="{{ asset('dist/images/logo.svg') }}">
                    <span class="text-white text-lg ml-3" style="font-size: 1.8rem;">
                        Check<span class="font-medium">In</span>
                    </span>
                </a>
                <div class="my-auto">
                    <img alt="CheckIn Covid-19 User Registry Platform" class="-intro-x w-1/2 -mt-16" src="{{ asset('dist/images/illustration.svg') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">Add your business to CheckIn. <br> Keep a record of visitors. <br> Help stop Covid-19.</div>
                    <div class="-intro-x mt-5 text-lg text-white">Our platform allows you to create a digital records of visitors <br> by simply Checking-in with visitor cellphone numbers. <br> This helps contact tracers to quickly identify and isolate <br> anyone who may have been exposed to COVID-19.</div>
                </div>
            </div>
            <!-- END: Login Info -->
           <!-- BEGIN: Register Form -->
           <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Business Sign Up
                        </h2>

                        <div class="intro-x py-10 sm:py-20 mt-5">
                    <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-0">
                        <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full button text-white bg-theme-1">1</button>
                            <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Add Business Details</div>
                        </div>
                        <!-- <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200">2</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700">Verify Location</div>
                        </div> -->
                        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200">2</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700">Make Account Payment</div>
                        </div>
                        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200">3</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700">Complete</div>
                        </div>
                   
                        <div class="wizard__line hidden lg:block w-2/3 bg-gray-200 absolute mt-5"></div>
                    </div>
                    
                </div>



                        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Our platform allows you to create a digital diary of places you visit by simply Checking-in with your cellphne number. This will help contact tracers to quickly identify and isolate anyone who may have been exposed to COVID-19 if there is a further outbreak in Namibia.</div>
                        <div class="intro-x mt-8">
                            <input type="text" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Business Name">
                            <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Physical Address">                    
                            <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Email">
                            <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Phone Number">
                            <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password">
                            <!-- <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                                <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                <div class="col-span-3 h-full rounded bg-gray-200"></div>
                            </div>
                            <a href="" class="intro-x text-gray-600 block mt-2 text-xs sm:text-sm">What is a secure password?</a>  -->
                            <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password Confirmation">
                        </div>
                        <div class="intro-x flex items-center text-gray-700 mt-4 text-xs sm:text-sm">
                            <input type="checkbox" class="input border mr-2" id="remember-me">
                            <label class="cursor-pointer select-none" for="remember-me">I agree to the Check-In</label>
                            <a class="text-theme-1 ml-1" href="">Privacy Policy</a>. 
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Add Business</button>
                            <button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0">Sign In</button>
                            <!-- <button class="button button--lg w-full xl:w-32 text-white border bg-theme-9 mt-3 xl:mt-0">Add Business</button> -->
                        </div>
                    </div>
                </div>
                <!-- END: Register Form -->
        </div>
    </div>    
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            async function login() {
                // Reset state
                $('#login-form').find('.input').removeClass('border-theme-6')
                $('#login-form').find('.input__error').html('')

                // Post form
                let email = $('#input-email').val()
                let password = $('#input-password').val()
                let rememberMe = $('#input-remember-me').val()
                
                // Loading state
                $('#btn-login').html('<i data-loading-icon="oval" data-color="white" class="w-5 h-5 mx-auto"></i>').svgLoader()
                await helper.delay(1500)

                axios.post(`login`, {
                    email: email,
                    password: password,
                    remember_me: rememberMe
                }).then(res => {
                    location.reload()
                }).catch(err => {
                    $('#btn-login').html('Login')
                    for (const [key, val] of Object.entries(err.response.data.errors)) {
                        $(`#input-${key}`).addClass('border-theme-6')
                        $(`#error-${key}`).html(val)
                    }
                })
            }

            $('#login-form').on('keyup', function(e) {
                if (e.keyCode === 13) {
                    login()
                }
            })
            
            $('#btn-login').on('click', function() {
                login()
            })
        })
    </script>
@endsection