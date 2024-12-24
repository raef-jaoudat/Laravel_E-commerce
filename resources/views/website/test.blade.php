<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jaoudat_Ecomerce</title>
<!-- Shortcut Icon -->
<link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">

<!-- CSS Files -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('assets/css/web/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/web/all.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/web/style.css') }}">

  <script src="https://unpkg.com/@lottiefiles/lottie-player@2.0.8/dist/lottie-player.js"></script>
</head>

<body dir="rtl">
  <div id="loader">
    <img src="images/logo.png" alt="جاري التحميل">
  </div>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark ">
    <div class="container">
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


    </div>
  </nav>
  <!-- ============offcanvas=========== -->

  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h2 class="offcanvas-title" id="offcanvasExampleLabel">التسوق</h2>
      <button type="button" class="btn-close ms-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="card">


        <img src="images/—Pngtree—black tea ceremony_5427151.png" class="card-img-top" alt="...">

        <div class="card-body">
          <div class="mb-3 bluecimon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </div>

        <h5 class="card-title">أعشاب</h5>
        <p class="card-text fw-bold blue">25$</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
      <div class="card">


        <img src="images/—Pngtree—strawberry ingredients cut in half_5794714.png" class="card-img-top" alt="...">

        <div class="card-body">
          <div class="mb-3 bluecimon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </div>

        <h5 class="card-title">أعشاب</h5>
        <p class="card-text fw-bold blue">25$</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
      <p class="text-center text-bg-danger fs-4"> المجموع $50</p>



    </div>
  </div>

  <!-- ===slid====== -->
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
        <img src="images/image (1).png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font: 2em sans-serif;;">هدفنا</h5>
          <h5>نسعى دائما لإرضائكم</h5>
          <button class="btn btn-success bt">منتجاتنا</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/image (2).png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font: 2em sans-serif;;">هدفنا</h5>
          <h5>نسعى دائما لإرضائكم</h5>
          <button class="btn btn-success bt">منتجاتنا</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/image.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="font: 2em sans-serif;;">هدفنا</h5>
          <h5>نسعى دائما لإرضائكم</h5>
          <button class="btn btn-success bt">منتجاتنا</button>
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
  <!-- =======product======== -->
  <section id="products" class="text-center mt-5">
    <!-- ==========d-flex justify-content-center"===========ليكون التخطيط حر ومظبوط في المنتصف  -->
    <div class="d-flex justify-content-center">
      <h2 class="text-header pb-1">
        المنتجات
      </h2>

    </div>
    <div class="mt-2">
      <button class="btn btn-primary m-2">الأكثر مبيعا</button>
      <button class="btn btn-primary m-2">السمات </button>
      <button class="btn btn-primary m-2">الأحدث</button>
      <button class="btn btn-primary m-2">الخصومات</button>
      <button class="btn btn-primary m-2">الكل</button>
    </div>
    <div>
      <div class=" container mt-5">
        <div class="row">
          <div class="col-lg-3 col-md-6 " data-category="bestseller">
            <div class="card">


              <img src="images/—Pngtree—black tea ceremony_5427151.png" class="card-img-top" alt="..."
                data-bs-toggle="modal" data-bs-target="#staticBackdrop">

              <div class="card-body">
                <div class="mb-3 bluecimon">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>

              <h5 class="card-title">أعشاب</h5>
              <p class="card-text fw-bold blue">25$</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-category="bestseller">
            <div class="card">


              <img src="images/—Pngtree—strawberry ingredients cut in half_5794714.png" class="card-img-top" alt="..."
                data-bs-toggle="modal" data-bs-target="#staticBackdrop">

              <div class="card-body">
                <div class="mb-3 bluecimon">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>

              <h5 class="card-title">أعشاب</h5>
              <p class="card-text fw-bold blue">25$</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-6 " data-category="discount">
            <div class="card">


              <img src="images/—Pngtree—black tea ceremony_5427151.png" class="card-img-top" alt="..."
                data-bs-toggle="modal" data-bs-target="#staticBackdrop">

              <div class="card-body">
                <div class="mb-3 bluecimon">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>

              <h5 class="card-title">أعشاب</h5>
              <p class="card-text fw-bold blue "><span class="text-decoration-line-through text-danger">25$</span>20$
                </p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card">


              <img src="images/—Pngtree—strawberry ingredients cut in half_5794714.png" class="card-img-top" alt="..."
                data-bs-toggle="modal" data-bs-target="#staticBackdrop">

              <div class="card-body">
                <div class="mb-3 bluecimon">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>

              <h5 class="card-title">أعشاب</h5>
              <p class="card-text fw-bold blue">25$</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-6 " data-category="feature">
            <div class="card">


              <img src="images/—Pngtree—black tea ceremony_5427151.png" class="card-img-top" alt="..."
                data-bs-toggle="modal" data-bs-target="#staticBackdrop">

              <div class="card-body">
                <div class="mb-3 bluecimon">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>

              <h5 class="card-title">أعشاب</h5>
              <p class="card-text fw-bold blue">25$</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card">


              <img src="images/—Pngtree—strawberry ingredients cut in half_5794714.png" class="card-img-top" alt="..."
                data-bs-toggle="modal" data-bs-target="#staticBackdrop">

              <div class="card-body">
                <div class="mb-3 bluecimon">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>

              <h5 class="card-title">أعشاب</h5>
              <p class="card-text fw-bold blue">25$</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-6 " data-category="bestseller">
            <div class="card">


              <img src="images/—Pngtree—black tea ceremony_5427151.png" class="card-img-top" alt="..."
                data-bs-toggle="modal" data-bs-target="#staticBackdrop">

              <div class="card-body">
                <div class="mb-3 bluecimon">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>

              <h5 class="card-title">أعشاب</h5>
              <p class="card-text fw-bold blue">25$</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card">


              <img src="images/—Pngtree—strawberry ingredients cut in half_5794714.png" class="card-img-top" alt="..."
                data-bs-toggle="modal" data-bs-target="#staticBackdrop">

              <div class="card-body">
                <div class="mb-3 bluecimon">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>

              <h5 class="card-title">أعشاب</h5>
              <p class="card-text fw-bold blue">25$</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- =============model============ -->

    <!-- Modal -->

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true" style="margin-top: 5%;">
      <div class="modal-dialog">
        <div class="modal-content width">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">التفاصيل</h1>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
          </div>
          <div class="modal-body">


            <div class=" card">
              <div class="row">

                <div class="col-6 pt-5">
                  <div class="card-body">
                    <h1 class="card-title">أعشاب</h1>
                    <p class="card-text fs-3">تناول من خيرات الطبيعة,صحتنا مع الطبيعي أفضل</p>
                    <a href="#" class="btn btn-primary auto_size">أضف للسلة <i class="fa-brands fa-shopify"></i></a>
                  </div>
                </div>
                <div class="col-6 ">
                  <div id="carouselExample" class="carousel slide ">
                    <div class="carousel-inner bg-dark bg-opacity-25">
                      <div class="carousel-item active">
                        <img src="images/—Pngtree—black tea ceremony_5427151.png" style="height: 355px;width: 100%;"
                          class="d-block" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images/—Pngtree—strawberry ingredients cut in half_5794714.png"
                          style="height:355px;width: 100%;" class="d-block" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images/—Pngtree—black tea ceremony_5427151.png" style="height: 355px;width: 100%;"
                          class="d-block" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                      data-bs-slide="prev">
                      <i class="fa-solid fa-angles-left fa-2x co bluecimon"></i>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                      data-bs-slide="next">
                      <i class="fa-solid fa-angles-right fa-2x co bluecimon"></i>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>

              </div>
            </div>

          </div>
          <div class="modal-footer pt-0">
            <button type="button" class="btn btn-dark pt-0 pb-0" data-bs-dismiss="modal">إغلاق</button>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- =========contact====== -->
  <section id="contact" class="contact text-center"
    style="background:url(images/contact-us.jpeg);background-size: cover;background-attachment:fixed ;">
    <div class=" pt-5 w-50 m-auto ">
      <h1 class="blue text-header d-inline-block contacttext">تواصل معنا</h1>
      <p class="blue fs-4 fw-bold ">
        تأكد من أن منتجاتنا هي الأفضل وأعمالنا الأكثر إتقانا
      </p>
      <div class="input-group mb-3">

        <input type="text" class="form-control" placeholder="البريدالالكتروني">
        <button class="btn btn-primary w-25 fs-4 bucontact" type="button" id="button-addon1">اشترك</button>
      </div>
    </div>
  </section>
  <!-- ==============order=============== -->
  <section id="order" class="mb-3">
    <div class="container border rounded text-center">
      <h2 class="blue text-header d-inline-block mx-auto"> اطلب الان</h2>
      <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">الاسم</label>
          <input type="text" class="form-control" id="inputEmail4" required>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">البريد الالكتروني</label>
          <input type="email" class="form-control" id="inputPassword4" required>
        </div>
        <div class="col-md-6">
          <label for="inputnum" class="form-label">رقم الهاتف</label>
          <input type="number" class="form-control" id="inputnum" required>
        </div>
        <div class="col-md-6">
          <label for="inputAddress" class="form-label">عنوان الرسالة</label>
          <input type="text" class="form-control" id="inputAddress" required>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">تفاصيل الرسالة</label>
          <textarea class="form-control" placeholder="تفاصيل"></textarea>
        </div>

        <div class="col-12 ">
          <button type="submit" class="btn btn-primary w-25">إرسال</button>
        </div>
      </form>
    </div>
  </section>
  <!-- ========best=product==== -->
  <section id="best">
    <div class="container-fluid mt-5">
      <div class="text-center p-2">
        <h2 class="blue text-header d-inline-block mx-auto ">المنتجات الأكثر طلبا</h2>
      </div>

      <div class="container">
        <div class="row">
          <!-- ================الأكثر تقييما========== -->
          <div class="col-lg-4">
            <h5 class="card-title border-bottom">الأكثر تقييما</h5>
            <div class="card mb-3 border-0 p-3 " style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4 border rounded-2 p-1 imgtrans">
                  <img src="images/-----------------.png" class="img-fluid rounded-start img-thumbnail" alt="...">
                </div>
                <div class="col-md-6">
                  <div class="card-body card-body2">

                    <p class="card-text">مكملات طبيعية.</p>
                    <p class="card-text "><small class="text-body-secondary blue">10$</small></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- ++++++++++++++++++++ -->
            <div class="card mb-3 border-0 p-3 " style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4 border rounded-2 p-1 imgtrans ">
                  <img src="images/-----------------.png" class="img-fluid rounded-start border" alt="...">
                </div>
                <div class="col-md-6">
                  <div class="card-body card-body2">

                    <p class="card-text">مكملات طبيعية.</p>
                    <p class="card-text "><small class="text-body-secondary blue">10$</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ======الاكثر مبيعا======== -->

          <div class="col-lg-4">
            <h5 class="card-title border-bottom">الأكثر مبيعا</h5>
            <div class="card mb-3 border-0 p-3 " style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4 border rounded-2 p-1 imgtrans ">
                  <img src="images/-----------------.png" class="img-fluid rounded-start border" alt="...">
                </div>
                <div class="col-md-6">
                  <div class="card-body card-body2">

                    <p class="card-text">مكملات طبيعية.</p>
                    <p class="card-text "><small class="text-body-secondary blue">10$</small></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- ++++++++++++++++++++ -->
            <div class="card mb-3 border-0 p-3 " style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4 border rounded-2 p-1 imgtrans ">
                  <img src="images/-----------------.png" class="img-fluid rounded-start border" alt="...">
                </div>
                <div class="col-md-6">
                  <div class="card-body card-body2">

                    <p class="card-text">مكملات طبيعية.</p>
                    <p class="card-text "><small class="text-body-secondary blue">10$</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============العروض========== -->
          <div class="col-lg-4">
            <h5 class="card-title border-bottom ">العروض</h5>
            <div class="card mb-3 border-0 p-3 " style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4 border rounded-2 p-1 imgtrans ">
                  <img src="images/-----------------.png" class="img-fluid rounded-start border" alt="...">
                </div>
                <div class="col-md-6">
                  <div class="card-body card-body2">

                    <p class="card-text">مكملات طبيعية.</p>
                    <p class="card-text "><small class="text-body-secondary blue">7$</small><small
                        class="text-body-secondary text-danger text-decoration-line-through "> 10$ </small></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- ++++++++++++++++++++ -->
            <div class="card mb-3 border-0 p-3 " style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4 border rounded-2 p-1 imgtrans ">
                  <img src="images/-----------------.png" class="img-fluid rounded-start border" alt="...">
                </div>
                <div class="col-md-6">
                  <div class="card-body card-body2">

                    <p class="card-text">مكملات طبيعية.</p>
                    <p class="card-text "><small class="text-body-secondary blue">10$</small></small><small
                        class="text-body-secondary text-danger text-decoration-line-through "> 7$ </small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </section>
  <!-- ============contract=========== -->
  <hr>
  <section id="contract" class="mt-4 mb-4">
    <div class="container text-center">
      <button class="btn btn-danger " data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
        aria-controls="collapseExample">سياسات الخدمة</button>
      <button class="btn btn-dark w-25 " data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
        aria-controls="offcanvasExample">السلة
        <i class="fa-solid fa-cart-shopping"></i>
      </button>
      <div class="collapse" id="collapseExample">
        <div class="card card-body p-3 gap-2">
          <div class="text-center text-danger fw-bold border-0">سياسة ارجاع المنجات</div>
          <div class="btn btn-outline-primary divcontractstyle" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="false" aria-controls="collapseOne">مدة الاسترجاع</div>

          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>للاحتفاظ بالعلبة.</strong>هناك العديد من الخطواتا<code>للتأكد</code>, عليك مراجعة الدليل.
            </div>
          </div>

          <div class="btn btn-outline-primary divcontractstyle" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
            aria-expanded="false" aria-controls="collapseTwo">سياسة الاحتفاظ بالعلبة </div>

          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>للاحتفاظ بالعلبة.</strong>هناك العديد من الخطواتا<code>للتأكد</code>, عليك مراجعة الدليل.
            </div>
          </div>


          <div class="btn btn-outline-primary divcontractstyle" data-bs-toggle="collapse"
            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">سياسة تقييم المنتجات
          </div>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>للاحتفاظ بالعلبة.</strong>هناك العديد من الخطواتا<code>للتأكد</code>, عليك مراجعة الدليل.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
<!-- =========services========== -->
  <section id="services">
    <div class="container">
      <div class="d-flex justify-content-center mb-4 mt-4">
        <h2 class="text-header pb-1 pt-5">
         خدماتنا
        </h2>

      </div>
      <div class="row text-center">
        <div class="col-lg-4 text-center ">
          <lottie-player src="https://lottie.host/97789596-1c2a-40c7-a1bb-40c964dd79df/MAGt3LDbI5.json"
            background="#FFFFFF" speed="0.7" style="width: 300px; height: 300px;" loop autoplay direction="1" mode="normal">
          </lottie-player>
        </div>
        <div class="col-lg-8  align-content-center">
          <div class="card  mb-3 border-0 " >

            <div class="card-header border-0 bg-none">
              <h2>
                تصميم وتطوير المواقع
              </h2>

            </div>
            <div class="card-body ">

              <p class="card-text">تصميم وتطوير مواقع ويب متجاوبة تلبي احتياجات عملك وتوفر تجربة مستخدم متميزة.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5 text-center" dir="ltr">
        <div class="col-lg-4 text-center ">

          <lottie-player src="https://lottie.host/97789596-1c2a-40c7-a1bb-40c964dd79df/MAGt3LDbI5.json"
          background="#FFFFFF" speed="0.7" style="width: 300px; height: 300px;" loop autoplay direction="1" mode="normal">
        </lottie-player>
        </div>
        <div class="col-lg-8 align-content-center">
          <div class="card  mb-3 border-0" >
            <div class="card-header border-0  bg-none">
              <h2>  دعم فني مستمر</h2>
            </div>
            <div class="card-body">

              <p class="card-text">نقدم خدمات الدعم الفني لضمان سير العمل بسلاسة وتقديم حلول سريعة لأي مشاكل قد تواجهك.</p>
            </div>
          </div>


        </div>
      </div>
      <div class="row">
        <div class="col"></div>
        <div class="col"></div>
      </div>



    </div>



  </section>
  <div style="min-height: 100px;"></div>
  <footer class="footer" >
    <div class="footer-left"  class="h-card">
        <img src="images/logo.png" alt="Logo" itemprop="logo" class="u-logo logo" />
        <h3  class="p-name">programer<span>RAEF JAOUDAT</span></h3>
        <nav aria-label="Footer Navigation">
            <!-- <p class="footer-links">
                <a href="#" class="link-1" itemprop="url">Home</a>
                <a href="#" itemprop="url">Blog</a>
                <a href="#" itemprop="url">Comics</a>
                <a href="#" itemprop="url">Poems</a>
                <a href="#" itemprop="url">Gallery</a>
                <a href="#" itemprop="url">Contact</a>
            </p> -->
        </nav>
        <p class="footer-name pt-5" > © 2020</p>
    </div>

    <div class="footer-center">
        <div class="p-address">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <p>
                <span itemprop="streetAddress" class="p-street-address">الشارع</span>,
                <span itemprop="addressLocality" class="p-locality"> الموقع</span>,
                <span itemprop="addressRegion" class="p-region">المدينة</span>,
                <span itemprop="postalCode" class="p-postal-code">الرمز البريدي</span>
            </p>
        </div>
        <div>
            <i class="fa fa-phone" aria-hidden="true"></i>
            <p itemprop="telephone" class="p-tel">933219934 963+</p>
        </div>
        <div>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <p><a href="mailto:support@company.com" itemprop="email" class="u-email">jtraef@gmail.com</a></p>
        </div>
    </div>

    <div class="footer-right">
        <p class="footer-about">
            <span>عن الموقع</span>
            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>
        <div class="footer-socials">
            <a href="#" rel="me" aria-label="Facebook" itemprop="sameAs" class="u-url"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" rel="me" aria-label="Twitter" itemprop="sameAs" class="u-url"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#" rel="me" aria-label="LinkedIn" itemprop="sameAs" class="u-url"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#" rel="me" aria-label="GitHub" itemprop="sameAs" class="u-url"><i class="fa-brands fa-github"></i></a>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/js/web/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/web/script.js') }}"></script>

<script src="{{ asset('assets/js/web/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/web/all.js') }}"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>

</html>
