@extends('layouts.app')


@section('head')
    <title>Login - CheckedIn - Covid-19 User Registry Platform</title>
@endsection

@section('content')

    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
   
                <div class="my-auto">





                    <img alt="CheckIn" class="-intro-x w-1/4 -mt-16" src="{{ asset('dist/images/logo.svg') }}">

                    
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">Check in with CheckIn. <br> Help stop Covid-19</div>
                    <!-- <div class="-intro-x mt-5 text-lg text-white">
                    Our platform allows you to create a digital diary of places <br> 
                    you visit by simply Checking-in with your cellphone number. <br> 
                    This helps contact tracers to quickly identify and isolate <br> 
                    anyone who may have been exposed to COVID-19.</div> -->
           
           
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
        

                <!-- <img alt="CheckIn" class="-intro-x w-1/4 -mt-16" src="{{ asset('dist/images/logos/mtc.png') }}"> -->




        
                    <h1 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left mt-12">Check In </h1>

                    <h3 class="intro-x font-bold text-2m  text-center xl:text-left mt-4"> Please enter your Cellphone number.</h3>

        <br>

                    <!-- <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div> -->
                    <div class="intro-x mt-8">
                    
                    
                    



                    
                        <form id="login-form" method="GET" action="{{ route('simple_search') }}" name="search" role="search">
                        @csrf

                            <input type="text" id="intTextBox" value="" name="search"  class="intro-x login__input input input--lg border border-gray-300 block" placeholder="e.g 0812345678" required minlength = "10" maxlength = "10">
                            <div id="error-phone" class="input__error w-5/6 text-theme-6 mt-2"></div>


                            @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                


                            <button id="btn-login" type="submit" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Search</button>


<div class="hidden">
                            <input type="text" id="fingerprint" value="" class="" name="fingerprint" >
</div>
                          
                        </form>

                      




                    </div>
                   
                
                       
                        <a class="" href="{{ route('register') }}">
                 <button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-12">Register</button>
                 </a>

<br>
              
<!-- 
<div class="mt-40">

 <div class="fp mt-40">Company ID: <span id="fingerprint" > 000RandomSTR89</span></div>

 </div>  -->


<div class="hidden">

<hr/>
<div class="info-big">Your Fingerprint:</div><div id="fingerprint" class="fp"></div>
<br/><hr/><br/>
<div class="info">try opening this pen in incognito mode and it should still assign you the same fingerprint id</div>
<br/><br/><br/>
<div class="info">Browser:</div><div id="browser" class="fp"></div>
<br/>
<div class="info">Flash:</div><div id="flash" class="fp"></div>
<br/>
<div class="info">Canvas:</div><div id="canvas" class="fp"></div>
<br/>
<div class="info">Connection:</div><div id="connection" class="fp"></div>
<br/>
<div class="info">Cookie:</div><div id="cookie" class="fp"></div>
<br/>
<div class="info">Display:</div><div id="display" class="fp"></div>
<br/>
<div class="info">Font Smoothing:</div><div id="fontsmoothing" class="fp"></div>
<br/>
<div class="info">Fonts:</div><div id="fonts" class="fp"></div>
<br/>
<div class="info">Form Fields:</div><div id="formfields" class="fp"></div>
<br/>
<div class="info">Java:</div><div id="java" class="fp"></div>
<br/>
<div class="info">Language:</div><div id="language" class="fp"></div>
<br/>
<div class="info">Silverlight:</div><div id="silverlight" class="fp"></div>
<br/>
<div class="info">OS:</div><div id="os" class="fp"></div>
<br/>
<div class="info">Time Zone:</div><div id="timezone" class="fp"></div>
<br/>
<div class="info">Touch:</div><div id="touch" class="fp"></div>
<br/>
<div class="info">True Browser:</div><div id="truebrowser" class="fp"></div>
<br/>
<div class="info">Plug Ins:</div><div id="plugins" class="fp"></div>
<br/>
<div class="info">User Agent:</div><div id="useragent" class="fp"></div>

</div>




                    </div>
                    
                </div>
            </div>
            <!-- END: Login Form -->

















        </div>
    </div> 
  
@endsection

@section('script')
    <script>
        $(document).ready(function() {



      //    document.getElementById('fingerprint').value = fingerprint();

            async function login222() {
                // Reset state
                $('#login-form').find('.input').removeClass('border-theme-6')
                $('#login-form').find('.input__error').html('')

                // Post form
                let phone = $('#input-phone').val()
                // let password = $('#input-password').val()
                // let rememberMe = $('#input-remember-me').val()
                
                // Loading state
                $('#btn-login').html('<i data-loading-icon="oval" data-color="white" class="w-5 h-5 mx-auto"></i>').svgLoader()
                await helper.delay(1500)

                // axios.post(`login`, {
                //     phone: phone,
                // }).then(res => {
                //     location.reload()
                // }).catch(err => {
                //     $('#btn-login').html('Verify')
                //     for (const [key, val] of Object.entries(err.response.data.errors)) {
                //         $(`#input-${key}`).addClass('border-theme-6')
                //         $(`#error-${key}`).html(val)
                //     }
                // })
            }

            $('#login-form').on('keyup', function(e) {
                if (e.keyCode === 13) {
                    login222()
                }
            })
            
            $('#btn-login').on('click', function() {
                login222()
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
setInputFilter(document.getElementById("intTextBox"), function(value) {
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


