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
<body
{{-- dir="{{(Config::get('app.locale') == 'ar' ? 'rtl' : 'ltr')}}" --}}
>
<div class="wrapper">
    <div id="loader">
        <img src="{{ asset('images/logo.png') }}" alt="جاري التحميل">

      </div>
  <!-- Navbar -->
  @include('website.layouts.navbar')
  @if (session('success'))
  <div class="alert alert-success" id="success-alert" style="margin-top: 70px;">
      {{ session('success') }}
  </div>
@endif

@if (session('error'))
  <div class="alert alert-danger" id="error-alert" style="margin-top: 70px;">
      {{ session('error') }}
  </div>
@endif
  <!-- /.navbar -->
  @yield('content')


 @include('website.layouts.footer')

</div>
<!-- ./wrapper -->
@include('website.layouts.main-js')
<script>
document.addEventListener("DOMContentLoaded", function () {
    // تحديد مدة الظهور بالمللي ثانية (5000 = 5 ثوانٍ)
    const alertDuration = 5000;

    // أخفاء تنبيه النجاح
    const successAlert = document.getElementById('success-alert');
    if (successAlert) {
        setTimeout(() => {
            successAlert.style.transition = "opacity 4s ease";
            successAlert.style.opacity = 0;
            setTimeout(() => successAlert.remove(), 500); // إزالة العنصر بعد انتهاء التأثير
        }, alertDuration);
    }

    // أخفاء تنبيه الخطأ
    const errorAlert = document.getElementById('error-alert');
    if (errorAlert) {
        setTimeout(() => {
            errorAlert.style.transition = "opacity 0.5s ease";
            errorAlert.style.opacity = 0;
            setTimeout(() => errorAlert.remove(), 500); // إزالة العنصر بعد انتهاء التأثير
        }, alertDuration);
    }
});

</script>
<script>
    document.getElementById("subscribeBtn").addEventListener("click", function(event) {
        event.preventDefault();
        let email = document.getElementById("emailInput").value;

        if(email) {
            let url = "{{ url('/contact') }}?email=" + encodeURIComponent(email);
            window.location.href = url;
        } else {
            alert("Please insert yor email");
        }
    });
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
