
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{$route == 'index_page' ? 'active' : ''}}" aria-current="page" href="{{url('/home')}}">{{trans('website_navbar.Home')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        {{-- <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-l  nk">Contact</a>
        </li> --}}
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->

                <ul class="navbar-nav mr-auto-navbav  {{ App::getLocale() === 'en' ? 'arabic-padding' : '' }}">

                    <div class="btn-group mb-1">
                        <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            @if (Config::get('app.locale') == 'ar')
                                {{ LaravelLocalization::getCurrentLocaleName() }}
                                <img src="{{ asset('assets/img/flags/ar.png') }}" alt="ar"
                                    style="max-width: 20px;width: 20px">
                            @else
                                {{ LaravelLocalization::getCurrentLocaleName() }}
                                <img src="{{ asset('assets/img/flags/en.png') }}" alt="en"
                                    style="max-width: 20px">
                            @endif
                        </button>
                        <div class="dropdown-menu">
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            @endforeach
                        </div>
                        <div class="btn-group mb-1">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <div class="dropdown-menu">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>

                    </div>

                </ul>


</nav>
