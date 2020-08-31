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

<body class="login2">

@yield('content')





  <!-- BEGIN: JS Assets-->
  <script src="{{ asset('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->


@yield('script')

</body>

</html>
