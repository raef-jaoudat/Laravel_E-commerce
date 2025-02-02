<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>تواصل معنا</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #000;
      color: #fff;
      font-family: Arial, sans-serif;
    }

    .form-section button {
      background: linear-gradient(90deg, #8030A6 0%, #540D80 100%);
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
      background: rgba(255, 255, 255, 0.3);
      transition: left 0.4s ease-in-out;
    }

    .form-section button:hover::after {
      left: 0;
    }

    .info-box {
      background-color: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 20px;
      border-radius: 15px;
      text-align: center;
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.5);
    }

    .info-box a {
      color: #8030A6;
      text-decoration: none;
    }

    .info-box a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="container-fluid min-vh-100 d-flex flex-column justify-content-center align-items-center">
  <div class="row w-100">
    <!-- Form Section -->
    <div class="col-lg-6 col-md-12 p-4 form-section">
      <h1 class="text-center mb-4">تواصل معنا</h1>
      <form>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="الاسم الكامل" required>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" placeholder="البريد الإلكتروني" required>
        </div>
        <div class="mb-3">
          <textarea class="form-control" placeholder="اكتب رسالتك هنا..." rows="5" required></textarea>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-lg">إرسال</button>
        </div>
      </form>
    </div>

    <!-- Info Section -->
    <div class="col-lg-6 col-md-12 p-4 d-flex justify-content-center align-items-center">
      <div class="info-box">
        <h2>معلومات المبرمج</h2>
        <p>الاسم: محمد أحمد</p>
        <p>الهاتف: <a href="tel:+201234567890">+20 123 456 7890</a></p>
        <p>البريد: <a href="mailto:developer@example.com">developer@example.com</a></p>
        <p>العنوان: القاهرة، مصر</p>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
