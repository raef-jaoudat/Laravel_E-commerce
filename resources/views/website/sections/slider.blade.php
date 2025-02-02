

<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src={{ asset('images/image(1).png') }} class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font: 2em sans-serif;;">{{trans('website_slider.Our goal')}}</h5>
          <h5>{{trans('website_slider.We always strive to meet your satisfaction')}}</h5>



          <a class="nav-link {{$route == 'categories_page' ? 'active' : ''}}"  href="{{route('get_categories')}}">
            <button class="btn btn-success bt">{{trans('website_slider.Our Products')}}</button>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src={{ asset('images/image(2).png') }} class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font: 2em sans-serif;;">{{trans('website_slider.Our goal')}}</h5>
          <h5>{{trans('website_slider.We always strive to meet your satisfaction')}}</h5>
          <a class="nav-link {{$route == 'categories_page' ? 'active' : ''}}"  href="{{route('get_categories')}}">
                  <button class="btn btn-success bt">{{trans('website_slider.Our Products')}}</button>
                </a>

        </div>
      </div>
      <div class="carousel-item">
        <img src={{ asset('images/image.png') }} class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font: 2em sans-serif;;">{{trans('website_slider.Our goal')}}</h5>
          <h5>{{trans('website_slider.We always strive to meet your satisfaction')}} </h5>
          <a class="nav-link {{$route == 'categories_page' ? 'active' : ''}}"  href="{{route('get_categories')}}">
            <button class="btn btn-success bt">{{trans('website_slider.Our Products')}}</button>
          </a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <i class="fa-solid fa-angles-left fa-3x co"></i>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <i class="fa-solid fa-angles-right fa-3x co"></i>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
{{--
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src={{ asset('images/image(1).png') }} class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src={{ asset('images/image(2).png') }} class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src={{ asset('images/image.png') }} class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
 --}}
