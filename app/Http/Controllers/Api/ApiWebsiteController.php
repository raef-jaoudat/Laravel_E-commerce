<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiWebsiteController extends Controller
{
    public function __construct()
    {
        // تأكد من أن التوكن موجود وصالح باستخدام auth:sanctum
        $this->middleware('auth:sanctum');
    }

    public function index(Request $request)
    {
        // تحقق من وجود التوكن
        if (!Auth::check()) {
            return response()->json([
                'message' => 'Unauthorized: Invalid or missing token.'
            ], 401);
        }

        $data = [];

        // جلب الفئات الشعبية
        $data['categories'] = Category::where('is_popular', 1)
            ->select('id', 'meta_title', 'meta_description', 'image', 'slug', 'is_showing')
            ->get();

        // جلب المنتجات الرائجة
        $data['products'] = Product::where('trend', 1)
            ->select('id', 'meta_title', 'meta_description', 'price', 'selling_price', 'image', 'slug', 'category_id')
            ->get();

        // جلب أفضل منتج مبيعاً
        $mostSoldProduct = Sale::selectRaw('product_id, sum(quantity) as total_quantity')
            ->groupBy('product_id') // تجميع البيانات حسب المنتج
            ->orderByDesc('total_quantity') // ترتيب النتائج تنازلياً حسب إجمالي الكمية المباعة
            ->first(); // الحصول على المنتج الأكثر مبيعاً

        if ($mostSoldProduct) {
            $product = Product::find($mostSoldProduct->product_id);
            $data['most_sold_product'] = $product;
        } else {
            $data['most_sold_product'] = null;
        }

        return response()->json($data, 200); // إعادة البيانات كـ JSON مع كود الحالة 200
    }

    // دوال أخرى (مثل store, show, update, destroy)...
}
