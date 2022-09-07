<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
   
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('css')
    @yield('script')
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
       
        <div class="container-fluid navs">
        <div class="brands">
            <a class="navbar-brand" href="#">
                <img src="{{ url('image/logo.png') }}" class="mx-3 mt-3" alt="" width="70" height="70">
            </a>
        </div>
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon icons"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-end me-auto mb-2 mb-lg-0">
           
                <li class="nav-item mx-3 items ">
                    <div class="active">
                    </div>
                    <a class="nav-link  text-light " aria-current="page" href="#">Home</a>
                  </li>
          
              <li class="nav-item mx-4 items">
                <a class="nav-link text-light" href="#">Services</a>
              </li>
              <li class="nav-item mx-4 items">
                <a class="nav-link text-light" href="#">About Us</a>
              </li>

              <li class="nav-item mx-4 items">
                <a class="nav-link text-light" href="#">Mini Project</a>
              </li>
              <li class="nav-item mx-4 items">
                <a class="nav-link  text-light" href="#">Contact Us</a>
              </li>
              <li class="nav-item mx-4 ">
                  <button class="btn nav-link text-light btns">Explore</button>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>
    @yield('content')
   
</body>
</html>
