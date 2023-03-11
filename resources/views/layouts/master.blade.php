<!doctype html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content>
  <meta name="description" content>
  <title>Premat - Product Landing Page</title>
  <!--favicon-->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" href="">
  <link rel="shortcut icon" type="image/png" href="/front_asset/images/favicon.png">
  <!--bootstrap css-->
  <link rel="stylesheet" type="text/css" href="/front_asset/css/bootstrap.min.css">
  <!--owl carousel css-->
  <link rel="stylesheet" type="text/css" href="/front_asset/css/owl.carousel.min.css">
  <!--magnific popup css-->
  <link rel="stylesheet" type="text/css" href="/front_asset/css/magnific-popup.css">
  <!--icomoon css-->
  <link rel="stylesheet" type="text/css" href="/front_asset/css/icomoon.css">
  <!--icofont css-->
  <link rel="stylesheet" type="text/css" href="/front_asset/css/icofont.min.css">
  <!--animate css-->
  <link rel="stylesheet" type="text/css" href="/front_asset/css/animate.css">
  <!--main css-->
  <link rel="stylesheet" type="text/css" href="/front_asset/css/style.css">
  <!--responsive css-->
  <link rel="stylesheet" type="text/css" href="/front_asset/css/responsive.css">

</head>

<body>
  <div id="app">
    {{-- <test></test> --}}
    <!--Start Preloader-->
    <div class="preloader">
      <div class="d-table">
        <div class="d-table-cell align-middle">
          <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
          </div>
        </div>
      </div>
    </div>
    <!--End Preloader-->
    <!--start header-->
    @include('layouts.front.header')
    <!--end header-->
    <!--start home area-->
    @yield('main')
    <!--end contact area-->
    <!--start footer-->
    @include('layouts.front.footer')

    <!--end footer-->
    <!--jQuery js-->


    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/front_asset/js/jquery-3.3.1.min.js"></script>
    <!--proper js-->
    <script src="/front_asset/js/popper.min.js"></script>
    <!--bootstrap js-->
    <script src="/front_asset/js/bootstrap.min.js"></script>
    <!--magnic popup js-->
    <script src="/front_asset/js/magnific-popup.min.js"></script>
    <!--owl carousel js-->
    <script src="/front_asset/js/owl.carousel.min.js"></script>
    <!--scrollIt js-->
    <script src="/front_asset/js/scrollIt.min.js"></script>
    <!--validator js-->
    <script src="/front_asset/js/validator.min.js"></script>
    <!--contact js-->
    <script src="/front_asset/js/contact.js"></script>
    <!--main js-->
    <script src="/front_asset/js/custom.js"></script>
</body>
</div>

</html>
