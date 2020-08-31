@extends('layouts.app')



@section('head')
    <title>Register - Check-In - Covid-19 User Registry Platform</title>
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
                    <img alt="Midone Laravel Admin Dashboard Starter Kit" class="-intro-x w-1/2 -mt-16" src="{{ asset('dist/images/illustration.svg') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">Register with CheckIn. <br> Help stop Covid-19</div>
<!--              
                 <div class="-intro-x mt-5 text-lg text-white">Our platform allows you to create a digital diary of places <br> you visit by simply Checking-in with your cellphone number. <br> This helps contact tracers to quickly identify and isolate <br> anyone who may have been exposed to COVID-19.</div>
              -->
                </div>
            </div>
            <!-- END: Login Info -->
           <!-- BEGIN: Register Form -->

      
           <form method="POST" action="{{ route('register') }}" class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                        @csrf
                    <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">



                    @include('flash-message')
<!-- 
<div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> Awesome alert with icon </div> -->
<br>


                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Register with CheckIn
                        </h2>
               
                        <!-- <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Our platform allows you to create a digital diary of places you visit by simply Checking-in with your cellphne number. This will help contact tracers to quickly identify and isolate anyone who may have been exposed to COVID-19 if there is a further outbreak in Namibia.</div>
                       -->
                        <div class="intro-x mt-8">
                            <input type="text" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Name" id="name" name="name">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            
                            <!-- <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Email" id="email" name="email"> -->
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Cellphone Number" id="phone" name="phone" required minlength = "10" maxlength = "10">
                            @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Location" id="location" name="location">
                            @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <!-- <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password" name="password"> -->
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            <!-- <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                                <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                <div class="col-span-3 h-full rounded bg-gray-200"></div>
                            </div>
                            <a href="" class="intro-x text-gray-600 block mt-2 text-xs sm:text-sm">What is a secure password?</a>  -->
                            <!-- <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password Confirmation" id="password-confirm" name="password_confirmation">
                    
                     -->
                        </div>
                        <!-- <div class="intro-x flex items-center text-gray-700 mt-4 text-xs sm:text-sm">
                            <input type="checkbox" class="input border mr-2" id="remember-me">
                            <label class="cursor-pointer select-none" for="remember-me">I agree to the Check-In</label>
                            <a class="text-theme-1 ml-1" href="">Privacy Policy</a>. 
                        </div> -->
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Register</button>
                                           
                          <!-- <a  href="{{ route('login') }}" class="button button--lg w-full xl:w-32 text-white border bg-theme-9 mt-3 xl:mt-0"> Add Business</a> -->
                        </div>

            
            
                        <div class="intro-x flex items-center text-gray-700 mt-4 text-xs sm:text-sm">

<br> 

<a  href="{{ route('enter-number') }}" class="text-theme-1 ml-1 mt-12">   

<button class="button px-2 mr-1 mb-2 border text-gray-700"> <span class="w-5 h-5 flex items-center justify-center"> <i data-feather="rewind" class="w-4 h-4"></i> </span> </button> 

Return to Check In                                </a>

</div>


                    </div>
                </form>

        






            

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




// Restricts input for the given textbox to the given inputFilter.
function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  });
}


// Install input filters.
setInputFilter(document.getElementById("phone"), function(value) {
  return /^-?\d*$/.test(value); });
setInputFilter(document.getElementById("uintTextBox"), function(value) {
  return /^\d*$/.test(value); });
setInputFilter(document.getElementById("intLimitTextBox"), function(value) {
  return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 500); });
setInputFilter(document.getElementById("floatTextBox"), function(value) {
  return /^-?\d*[.,]?\d*$/.test(value); });
setInputFilter(document.getElementById("currencyTextBox"), function(value) {
  return /^-?\d*[.,]?\d{0,2}$/.test(value); });
setInputFilter(document.getElementById("latinTextBox"), function(value) {
  return /^[a-z]*$/i.test(value); });
setInputFilter(document.getElementById("hexTextBox"), function(value) {
  return /^[0-9a-f]*$/i.test(value); });






    </script>
@endsection
