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
                    <a href="{{ url('/business-dashboard')}}" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
               
            
                <!-- <li>
                    <a href="side-menu-post.html" class="menu">
                        <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                        <div class="menu__title"> Alerts </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li> -->


   
                <li>
                    <a href="side-menu-post.html" class="menu">
                        <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                        <div class="menu__title"> Store Settings </div>
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
                        <a href="{{ url('/business-dashboard')}}" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                  
                    <!-- <li>
                        <a href="side-menu-inbox.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title"> Visitors </div>
                        </a>
                    </li>
                  
             
                    <li class="side-nav__devider my-6"></li> -->

          <!-- <li>
                        <a href="side-menu-post.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                            <div class="side-menu__title"> Edit Company Information </div>
                        </a>
                    </li> -->



                  
                </ul>
            </nav>
            <!-- END: Side Menu -->



             <!-- BEGIN: Content -->
             <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">CheckIn</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="{{ url('/business-dashboard')}}" class="breadcrumb--active">Business Dashboard</a>  <i data-feather="chevron-right" class="breadcrumb__icon"></i> {{ $business->name}} </div>
                    <!-- END: Breadcrumb -->
                 
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8 relative">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                            <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                        </div>
                        <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                            <div class="dropdown-box__content box bg-theme-38 text-white">
                                <div class="p-4 border-b border-theme-40">
                                    <div class="font-medium">{{ $business->name}}</div>
                                    <div class="text-xs text-theme-41">Business Account</div>
                                </div>
                                <div class="p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="phone" class="w-4 h-4 mr-2"></i> {{ $business->phone}} </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="mail" class="w-4 h-4 mr-2"></i>{{ $business->email}}  </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="map-pin" class="w-4 h-4 mr-2"></i> {{ $business->location}}  </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                                </div>
                                <!-- <div class="p-2 border-t border-theme-40">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->






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
                        <!-- BEGIN: Inbox Filter -->
                        <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                            <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-gray-700"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg> 
                                
                                
                               <form type="GET" action="{{ url('/search')}}">
                                <input type="text" class="input w-full sm:w-64 box px-10 text-gray-700 placeholder-theme-13" placeholder="Search name ..." name="query" id="query">
                               </form>
                               
                               
                              
                            </div>


                            <div class="w-full sm:w-auto flex">

                            <a href="{{ url('/export/all_visits')}}"><button class="button text-white bg-theme-1 shadow-md mr-2">Export as PDF</button></a>
                              
                            </div>

                            <!-- <div class="w-full sm:w-auto flex">
                                <button class="button bg-theme-2 shadow-md mr-2">Export to Excel</button>
                              
                            </div> -->
                         
                        </div>
                        <!-- END: Inbox Filter -->
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
