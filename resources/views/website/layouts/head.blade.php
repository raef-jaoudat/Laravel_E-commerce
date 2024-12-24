<link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">

<!-- CSS Files -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('assets/css/web/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/web/all.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/web/style.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

{{-- @if (App::getlocale()=='ar')
    <!-- Bootstrap 4 RTL -->
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
<!-- Custom style for RTL -->
<link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">
@endif --}}
@if (App::getlocale()=='ar')

    <!-- Bootstrap 5 RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">
    <!-- Custom style for RTL -->
    <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/web/all.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/web/style.css') }}">

@endif
<link rel="stylesheet" href="{{ asset('assets/css/owl/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl/owl.theme.default.min.css') }}">

@yield('css')
