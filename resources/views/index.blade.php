<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Home')</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500">
    <link rel="stylesheet" href="{{ asset('styles/style.css')}}">
    <script src="{{ asset('scripts/uikit.js')}}"></script>
    <script src="{{ asset('scripts/uikit-icons.js')}}"></script>
</head>

<body>
    <div class="uk-offcanvas-content">
       <!-- header isinya navbar dan topbar -->
        @include('parsial.header')
       <!--  end header -->
        <main>
           @yield('content')
        </main>
       <!-- footer start -->
       @include('parsial.footer')
      
