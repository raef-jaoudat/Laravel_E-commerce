<script src="https://unpkg.com/@lottiefiles/lottie-player@2.0.8/dist/lottie-player.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/js/web/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/web/script.js') }}"></script>

<script src="{{ asset('assets/js/web/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/web/all.js') }}"></script>
<script src="{{ asset('assets/js/owl/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/owl/owl.carousel.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>$('.owl-carousel').owlCarousel({
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
            items:2
        },
        1000:{
            items:4
        }
    }
})</script>


<script>$('.trend_category').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    rtl:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})
</script>
{{-- /////////////////////// --}}


@yield('js')
