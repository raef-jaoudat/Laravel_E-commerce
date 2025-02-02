


<section id="contact" class="contact text-center"
    style="background:url('{{ asset('images/contact-us.jpg') }}');background-size: cover;background-attachment:fixed ;">
    <div> <div class=" pt-5 w-50 m-auto ">
        <h1 class="blue text-header d-inline-block contacttext">{{ trans('website_contact.contact_us') }}</h1>
        <p class="blue fs-4 fw-bold ">
            {{ trans('website_contact.contact_us_s') }}
        </p>
        <div class="input-group mb-3">

            <a id="subscribeBtn" class="btn btn-primary w-25 fs-4 bucontact" href="{{ url('/contact') }}">
                {{ trans('website_contact.subscribe') }}
            </a>
            <input id="emailInput" type="text" class="form-control"
                placeholder="{{ trans('website_contact.email') }}">



        </div>
    </div></div>

</section>
