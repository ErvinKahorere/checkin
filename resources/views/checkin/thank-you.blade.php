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
        
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle w-16 h-16 text-theme-9 mx-auto mt-3" style="float:left;">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg> 
                                                                                          
<br><br>
<br><br>
                <div class="text-3xl mt-5 intro-x font-bold text-2xl xl:text-3xl text-left xl:text-left">All done, <br> thank you! </div>
          

        <br>

                    <!-- <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div> -->
                    <div class="intro-x mt-8">
                    

                            
        
                    <div class="p-5">
                    <div class="font-medium text-base">     <p class="flex items-center text-theme-1 font-medium"> <i data-feather="user" class="w-4 h-4 mr-2"></i>  {{ $user->name }} </p> </div>
</div>


                    <div class="p-5 border-t border-gray-200">
                                <p class="flex items-center text-theme-1 font-medium"> 
                                
                                <i data-feather="phone" class="w-4 h-4 mr-2"></i> 
                                {{ $user->phone }} </p>
                                
                                <p class="flex items-center mt-5"> 
                                <i data-feather="map-pin" class="w-4 h-4 mr-2"></i> 
                                {{ $user->location }} </p>
        
                                <br>  
        <hr>
        <br>   
             Checkpoint   
             <br>               <p class="flex items-center mt-5"> 
           
             <i data-feather="eye" class="w-4 h-4 mr-2"></i>   
             
             {{ $business->name}} |  {{ $business->location}}
 </p>

           

             <p class="flex items-center mt-5"> 
           
             <i data-feather="clock" class="w-4 h-4 mr-2"></i>  {{ $time }}</p>



        
        
                       </div>

                       <!-- <form action="" class="hidden">
                       @csrf
                       
                       <input type="text" id="fingerprint" value="547457547" class="" name="fingerprint">
                       
                       </form> -->


                       
<div class="mt-40">

<div class="fp mt-40">Company ID: <span id="fingerprint" > 000RandomSTR89</span></div>

</div> 




                              
<div class="hidden">

<form id="login-form" method="GET" action="" name="search" role="search">
                        @csrf
                            <input type="text" id="fingerprint" value="dfhhdh" class="" name="fingerprint" >

</form>


</div>




             

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
    


 //  alert("Hello");

 window.location.replace(url="{{ route('logout') }}");

  
   }, 5000);
  

}
</script>

@endsection



