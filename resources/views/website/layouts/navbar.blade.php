<nav class="navbar fixed-top navbar-expand-lg navbar-dark ">
    {{-- <div class="container">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" class="rounded-5" width="50" height="50" alt="">

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">من نحن</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              صفحات
            </a>
            <ul class="dropdown-menu text-center">
              <li><a class="dropdown-item" href="#">الأخبار</a></li>
              <li><a class="dropdown-item" href="#">اخر المنتجات</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">تسجيل الدخول</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">الأصناف</a>
          </li>
        </ul>

      </div>
      <div style="color: rgb(173, 216, 230);background-color:rgb(14,8,109) ;" class="btn btn-primary" type="button"
        data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">

        <i class="fa-solid fa-cart-shopping fa-2x"></i>
      </div>


    </div> --}}
   <div class="container">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.png') }}"  class="rounded-5" width="50" height="50" alt="">



      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto
            {{-- {{ app()->getLocale() == 'ar' ? 'ms-auto' : 'me-auto' }} --}}
              mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{$route == 'index_page' ? 'active' : ''}}" aria-current="page" href="{{url('/home')}}">{{trans('website_navbar.Home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{$route == 'categories_page' ? 'active' : ''}}"  href="{{route('get_categories')}}">{{trans('website_navbar.category')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{$route == 'cart_page' ? 'active' : ''}}"  href="{{route('cart.index')}}">{{trans('website_navbar.cart')}}</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto m-0">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ trans('website_navbar.login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ trans('website_navbar.register') }}</a>
                        </li>
                    @endif
                @else
                    <!-- عند تسجيل الدخول، يظهر اسم المستخدم -->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->fname }} <!-- عرض اسم المستخدم -->
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

                <!-- Dropdown for language selection -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @if (Config::get('app.locale') == 'ar')
                            {{ LaravelLocalization::getCurrentLocaleName() }}
                            <img src="{{ asset('assets/img/flags/ar.png') }}" alt="ar" style="max-width: 20px">
                        @else
                            {{ LaravelLocalization::getCurrentLocaleName() }}
                            <img src="{{ asset('assets/img/flags/en.png') }}" alt="en" style="max-width: 20px">
                        @endif
                    </button>
                    <ul class="dropdown-menu">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        @endforeach
                    </ul>
                </div>
            </ul>

        </div>
    </div>
  </nav>
