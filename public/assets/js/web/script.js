// عند تحميل الصفحة، إخفاء الشعار وعرض المحتوى
window.addEventListener("load", function() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("content").style.display = "block";
  });


// تحديد الأزرار والمنتجات
const filterButtons = document.querySelectorAll('.btn');
const products = document.querySelectorAll('.col-lg-3, .col-md-6');

// إضافة حدث لكل زر
filterButtons.forEach(button => {
  button.addEventListener('click', () => {
    const filter = button.textContent.trim(); // نوع الفلترة

    // عرض وإخفاء المنتجات بناءً على الفئة
    products.forEach(product => {
      const category = product.getAttribute('data-category');

      if (filter === 'الكل' || category === translateFilter(filter)) {
        product.style.display = 'block';
      } else {
        product.style.display = 'none';
      }
    });
  });
});

// دالة لتحويل النص العربي إلى اسم الفئة
function translateFilter(filter) {
  const translations = {
    'الأكثر مبيعا': 'bestseller',
    'الأحدث': 'latest',
    'الخصومات': 'discount',
    'السمات': 'feature'
  };
  return translations[filter] || '';
}
