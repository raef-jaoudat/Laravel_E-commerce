@extends('website.layouts.master')

@section('title')
{{trans('website_navbar.Home')}}
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        <style>
    .owl-item {
        margin-right:  30px !important;
    }

        .card{
            box-shadow: 10px 10px 20px;
        }
        .owl-carousel .card { overflow: hidden;}
        .owl-carousel .item img{ transition: all .2s ease-in-out; }
        .owl-carousel .item img:hover { transform: scale(1.1);  }
    </style>

    <style>
        .owl-stage-outer{
            max-height: 500px !important;
        }
    .owl-stage {
     max-height: 500px !important;
    }



    </style>

@endsection

@section('content')

@include('website.sections.slider')

@include('website.sections.trend_product')

@include('website.sections.best_sells')
@include('website.sections.trend_category')



@include('website.sections.contact')


@endsection


@section('js')
{{-- ????????????????ratio --}}



{{-- ??????????????? --}}
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            rtl:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })

        $('.trend_category').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            rtl:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })
    </script>
{{-- اخفاء الكتابة في تواصل معنا عند التكبير --}}
<script>
    function checkZoom() {
        let zoomLevel = Math.round(window.devicePixelRatio * 100); // حساب نسبة التكبير
        let textElements = document.querySelectorAll('.contacttext, .contact p');

        if (zoomLevel >= 150) {
            textElements.forEach(el => el.style.display = 'none');
        } else {
            textElements.forEach(el => el.style.display = 'block');
        }
    }

    window.addEventListener('resize', checkZoom);
    window.addEventListener('load', checkZoom);
</script>

    @endsection
