@extends('website.layouts.master')
@section('title')
    Contact
@stop
@section('css')
<style>
    body {
      background-color: #000;
      color: #fff;
      font-family: Arial, sans-serif;
    }

    .form-section button {
      background: linear-gradient(90deg, #191427 0%, #1f10f0 100%);
      color: #fff;
      border: none;
      position: relative;
      overflow: hidden;
    }

    .form-section button::after {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: rgba(3, 240, 3, 0.7);
      transition: left 0.4s ease-in-out;
    }

    .form-section button:hover::after {
      left: 0;
    }

    .info-box {
        margin-top: 5px;
      background-color: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 20px;
      border-radius: 15px;
      text-align: center;
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.5);
    }

    .info-box a {
      color: #2a16e0;
      text-decoration: none;
    }

    .info-box a:hover {
      text-decoration: underline;
    }
  </style>
@stop
@section('content')

<body>

    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="row w-100">
          <!-- Form Section -->
          <div class="col-lg-7 col-md-12 p-4 form-section">
            <h1 class="text-center mb-4">{{trans('website_contact.contact_us')}}</h1>
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
              <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="{{trans('website_contact.name')}}" required>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" name="email" value="{{ request('email') }}" placeholder="{{trans('website_contact.email')}}" required readonly>
              </div>
              <div class="mb-3">
               <textarea class="form-control" name="message" placeholder="{{trans('website_contact.your_massege')}}" rows="5" required></textarea>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-lg">{{trans('website_contact.send')}}</button>
              </div>
            </form>

          </div>

          <!-- Info Section -->
          <div class="col-lg-4 col-md-12 p-4 pt-5 justify-content-center align-items-center mt-5 ">
            <div class="info-box">
              <p>Raef Jaoudat</p>
            </div>
            <div class="info-box">
              <p><i class="fas fa-phone-alt"></i> <a href="tel:+201234567890">+963933219934</a></p>
            </div>
            <div class="info-box">
              <p><i class="fas fa-envelope"></i> <a href="mailto:developer@example.com">jtraef@gmail.com</a></p>
            </div>
          </div>
        </div>
      </div>


    <!-- Bootstrap JS Bundle -->

    </body>

@stop
{{-- <script src="{{ asset('assets/Contact/js/web/all.js') }}"></script> --}}
@section('js')





@stop
