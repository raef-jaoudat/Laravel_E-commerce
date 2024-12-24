<!DOCTYPE html>
<html lang="ar" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Slider RTL</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: ltr;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/image.png') }}"  class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>الشريحة الأولى</h5>
                        <p>وصف الشريحة الأولى.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image (1).png') }}" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>الشريحة الثانية</h5>
                        <p>وصف الشريحة الثانية.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image.png') }}" class="d-block w-100" alt="Slide 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>الشريحة الثالثة</h5>
                        <p>وصف الشريحة الثالثة.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">السابق</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">التالي</span>
            </button>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
