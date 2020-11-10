<!DOCTYPE html>
<html lang="en">

    <head>
        <style>
            .gm-style-pbc {
                transition: opacity ease-in-out;
                background-color: rgba(0, 0, 0, 0.45);
                text-align: center
            }
    
            .gm-style-pbt {
                font-size: 22px;
                color: white;
                font-family: Roboto, Arial, sans-serif;
                position: relative;
                margin: 0;
                top: 50%;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%)
            }
    
        </style>
        <style>
            .gm-style img {
                max-width: none;
            }
    
            .gm-style {
                font: 400 11px Roboto, Arial, sans-serif;
                text-decoration: none;
            }
    
        </style>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500">
        <link rel="stylesheet" href="{{asset('styles/style.css')}}">
        <script src="{{ asset('scripts/uikit.js')}}"></script>
        <script src="{{ asset('scripts/uikit-icons.js')}}"></script>
       
    </head>

<body>
    <div class="uk-offcanvas-content">
       <!-- header isinya navbar dan topbar -->
        @include('parsial.header')
       <!--  end header -->
       
        @yield('content')
       
       <!-- footer start -->
       @include('parsial.footer')
    {{-- oofcanvas   --}}
    </div>
    {{-- oofcanvas     --}}
    <script src="{{asset('scripts/script.js')}}"></script>
    
</body>
</html>