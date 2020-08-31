<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CheckIn') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->


    <meta charset="utf-8">
        <link href="{{ asset('dist/images/logo.svg') }} " rel="shortcut icon">
      
      
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <meta name="author" content="PressPlay">
      
    
      
      
        <!-- BEGIN: CSS Assets-->
         <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" /> 
        <!-- END: CSS Assets-->

        @yield('head')
</head>

<body class="app">

@include('flash-message')


 <!-- BEGIN: Mobile Menu -->
 <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="CheckIn" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="index.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
               
            
                <li>
                    <a href="side-menu-post.html" class="menu">
                        <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                        <div class="menu__title"> Alerts </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>


   
                <li>
                    <a href="side-menu-post.html" class="menu">
                        <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                        <div class="menu__title"> Stats </div>
                    </a>
                </li>
              
             
    
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="CheckIn" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                    <span class="hidden xl:block text-white text-lg ml-3"> Check<span class="font-medium">In</span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="index.html" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                  
                    <li>
                        <a href="side-menu-inbox.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title"> Users </div>
                        </a>
                    </li>
                  
             
                    <li class="side-nav__devider my-6"></li>

          <li>
                        <a href="side-menu-post.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                            <div class="side-menu__title"> Checkpoints </div>
                        </a>
                    </li>



                  
                </ul>
            </nav>
            <!-- END: Side Menu -->

@yield('content')



  <!-- BEGIN: JS Assets-->
  <script src="{{ asset('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->

         <!-- BEGIN: JS Assets-->
         <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
 
        <!-- END: JS Assets-->


@yield('script')

</body>

</html>
