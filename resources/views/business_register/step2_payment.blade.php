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
                    
                    <!-- <br>

                    <span class="text-white text-xs ml-3" style="font-size: 0.8rem;">
                        Covid-19 Registry App
                    </span> -->

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
                            <button class="h-10 rounded-full button text-gray-600 bg-gray-200">1</button>
                            <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Add Business Details</div>
                        </div>
                        <!-- <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full button text-gray-600 bg-gray-200">2</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700">Verify Location</div>
                        </div> -->
                        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full button text-white bg-theme-1 w-10">2</button>
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
                            <!-- <input type="text" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Business Name">
                      -->
                            <div class="intro-y flex-1 px-5 py-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity w-12 h-12 text-theme-1 mx-auto"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg> 
                        <div class="text-xl font-medium text-center mt-4">Basic Plan</div>

                        <div class="flex justify-center">
                            <div class="relative text-5xl font-semibold mt-0 mx-auto">  N$125</div>
                        </div>

                        <div class="text-gray-700 text-center mt-5"> 1 Business location <span class="mx-1">•</span> 12 months Access <span class="mx-1">•</span> Unlimited Usages </div>
                       <br>
                 
                        <div class="text-gray-600 px-10 text-center mx-auto mt-2">Simply view invoice, make a payment and mail us <br> the Proof of Payment to <strong> <a href="mailto:support@pressplay.solutions" target"_new">support@pressplay.solutions </a> </strong>. 
                        <br> An activation code will be mailed as soon as payment is confirmed. </div>
     
                        <button type="button" class="button button--lg block text-white bg-theme-1 rounded-full mx-auto mt-8">VIEW INVOICE </button>


                        <br>
                        
                        <hr>
                        
                        
                        <br>



<h2 class="text-center"> Got the Activation code? </h2> <br>


 <div class="inline-flex">
  <div>
  <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mx-auto text-center " placeholder="ENTER ACTIVATION CODE">
  </div>
  <!-- ... -->
  <div>
  <button type="button" class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded mt-1 inline-flex items-center">

  <span>
  VERIFY 
  </span>
  </button>

  </div>

</div>



<br>
<h2 class="text-center mt-4"> <a class="text-center" href="#"> Activate Later </a> </h2> <br> 

                    </div>
                    
                        </div>


              


                        <!-- <div class="intro-x flex items-center text-gray-700 mt-4 text-xs sm:text-sm">
                            <input type="checkbox" class="input border mr-2" id="remember-me">
                            <label class="cursor-pointer select-none" for="remember-me">I agree to the Check-In</label>
                            <a class="text-theme-1 ml-1" href="">Privacy Policy</a>. 
                        </div> -->
                        <!-- <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Add Business</button>
                            <button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0">Sign In</button>
                            
                        </div> -->
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