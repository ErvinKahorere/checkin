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



                <div class="p-5">

                    <img alt="CheckIn" class="-intro-x w-1/4 -mt-16" src="{{ asset('dist/images/logo.svg') }}">
</div>

<div class="p-5">
                    
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">Check in with CheckIn. <br> Help stop Covid-19</div>
    
                    </div>

                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
        
    
                    <!-- <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div> -->
                    <div class="intro-x mt-8">
                    

                            
        
                    <div class="p-5">
                
</div>



             

                    </div>
                   



                        
            <div class="intro-x flex items-center text-gray-700 mt-4 text-xs sm:text-sm">

<br> 


<p class="text-theme-1 ml-1 mt-12">
<svg width="20" viewBox="0 0 105 105" xmlns="http://www.w3.org/2000/svg" fill="rgb(45, 55, 72)" class="w-8 h-8">
                    <circle cx="12.5" cy="12.5" r="12.5">
                        <animate attributeName="fill-opacity" begin="0s" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"></animate>
                    </circle>
                    <circle cx="12.5" cy="52.5" r="12.5" fill-opacity=".5">
                        <animate attributeName="fill-opacity" begin="100ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"></animate>
                    </circle>
                    <circle cx="52.5" cy="12.5" r="12.5">
                        <animate attributeName="fill-opacity" begin="300ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"></animate>
                    </circle>
                    <circle cx="52.5" cy="52.5" r="12.5">
                        <animate attributeName="fill-opacity" begin="600ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"></animate>
                    </circle>
                    <circle cx="92.5" cy="12.5" r="12.5">
                        <animate attributeName="fill-opacity" begin="800ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"></animate>
                    </circle>
                    <circle cx="92.5" cy="52.5" r="12.5">
                        <animate attributeName="fill-opacity" begin="400ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"></animate>
                    </circle>
                    <circle cx="12.5" cy="92.5" r="12.5">
                        <animate attributeName="fill-opacity" begin="700ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"></animate>
                    </circle>
                    <circle cx="52.5" cy="92.5" r="12.5">
                        <animate attributeName="fill-opacity" begin="500ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"></animate>
                    </circle>
                    <circle cx="92.5" cy="92.5" r="12.5">
                        <animate attributeName="fill-opacity" begin="200ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"></animate>
                    </circle>
                </svg> <br>
  Redirecting ... </p>

</div>


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
function myFunction() {

   
   setTimeout(function(){ 
    
   // alert("Hello");

 //  window.location.replace(url="{{ route('logout') }}");

   window.location.replace(url="{{ route('enter-number') }}");

  
   }, 1000);
  

}
</script>

@endsection



