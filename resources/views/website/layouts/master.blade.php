<!DOCTYPE html>
<html lang="{{Config::get('app.locale')}}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  @include('website.layouts.head')
  <style>
      a {text-decoration: none;}
  </style>

</head>
<body dir="{{(Config::get('app.locale') == 'ar' ? 'rtl' : 'ltr')}}">
<div class="wrapper">
    <div id="loader">
        <img src="{{ asset('images/logo.png') }}" alt="جاري التحميل">

      </div>
  <!-- Navbar -->
  @include('website.layouts.navbar')
  <!-- /.navbar -->
  @yield('content')

 @include('website.layouts.footer')

</div>
<!-- ./wrapper -->
@include('website.layouts.main-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
