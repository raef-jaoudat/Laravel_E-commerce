<div class="py-5" style="max-height: max-content">
    <div class="container">
        <h2 class="text-center">{{ trans('website_trans.trend_category') }}</h2>

        <div class="owl-carousel trend_category owl-theme py-5" style="
    height: 500px;">
            @foreach ($categories as $category)
                {{-- <script>
                    console.log('is_showing:', {{ $category->is_showing }});
                </script> --}}

                @if ($category->is_showing == 1)
                    <div class="items">
                        <a href="{{ route('get_category_slug', $category->slug) }}">
                            <div class="card my-5 mx-5" style="width: 16rem;">
                                {{-- <img src="/storage/{{ $category->image }}" class="card-img-top img-responsive"> --}}
                                <img src="{{ asset('/' . $category->image) }}" class="card-img-top img-responsive" style="height: 250px; width: 100%;" alt="...">

                                {{-- <img src="{{ Storage::url($category->image) }}" class="card-img-top img-responsive"
                                    style="height: 250px; width: 100%;" alt="..."> --}}
                                <div class="card-body">
                                    <h5 class="card-title">{{ $category->meta_title }}</h5>
                                    <p class="card-text">
                                        {{ $category->meta_description }}<br>
                                        {{-- {{ $category->slug }}\
                                        {{ $category->is_showing }} --}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @else
                    <div class="items">
                        <div class="card my-5 mx-5 bg-dark text-white"
                            style="width: 16rem; pointer-events: none; opacity: 0.6;">
                            <img src="{{ asset('/' . $category->image) }}" class="card-img-top img-responsive"
                                style="height: 250px; width: 100%; filter: grayscale(100%);" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $category->meta_title }}</h5>
                                <p class="card-text">
                                    {{ $category->meta_description }}<br>
                                    {{ $category->slug }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </div>
</div>
