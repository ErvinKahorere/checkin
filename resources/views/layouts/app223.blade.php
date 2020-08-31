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

<


             <!-- BEGIN: Content -->
             <div class="content">
             



 <div class="grid grid-cols-12 gap-6 mt-8">
               
               <!--
               
                    <div class="col-span-12 lg:col-span-3 xxl:col-span-2">
                        <h2 class="intro-y text-lg font-medium mr-auto mt-2">
                            Visitor Information
                        </h2>
                        <! BEGIN: Inbox Menu -
                        <div class="intro-y box bg-theme-1 p-5 mt-6">
              
<h6 class="intro-y text-lg font-medium mr-auto mt-2 text-white"> Filter by</h6>

                            <div class="border-t border-theme-3 mt-6 pt-6 text-white">
                                <a href="{{ url('/search_today')}}" class="flex items-center px-3 py-2 rounded-md bg-theme-22 font-medium"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail w-4 h-4 mr-2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Today </a>

                                <a href="{{ url('/search_this_week')}}" class="flex items-center px-3 py-2 mt-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star w-4 h-4 mr-2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> This Week </a>


                                 <a href="{{ url('/search_this_month')}}" class="flex items-center px-3 py-2 rounded-md  font-medium"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail w-4 h-4 mr-2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> This Month </a>
                                
                                <a href="{{ url('/search_this_week')}}" class="flex items-center px-3 py-2 mt-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star w-4 h-4 mr-2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> All Time </a>
               
                            </div>
                          
                        </div>
                        <! END: Inbox Menu -
                    </div> -->


                    <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                      
                        <!-- BEGIN: Inbox Content -->








@yield('content')







</div>

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
