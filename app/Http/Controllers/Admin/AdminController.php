<?php

namespace App\Http\Controllers\Admin;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visit;
use App\Models\Sale;

class AdminController extends Controller
{
    public function index()
    {
        $data['last_buyers'] = Sale::with('user')  // الحصول على بيانات المستخدم المرتبطة بكل عملية بيع
                            ->orderBy('sold_at', 'desc')  // ترتيب النتائج حسب تاريخ البيع (الأحدث أولاً)
                            ->take(5)  // أخذ آخر 5 عمليات بيع
                            ->get();  // تنفيذ الاستعلام



     $data['lastOrders'] = Sale::with('Product') // استرجاع المنتج المرتبط بكل طلب
            ->orderBy('sold_at', 'desc') // ترتيب حسب تاريخ البيع (الأحدث أولاً)
            ->limit(6)
            ->get();

            $data['allOrders'] = Sale::with('Product') // استرجاع المنتج المرتبط بكل طلب
            ->orderBy('sold_at', 'desc') // ترتيب حسب تاريخ البيع (الأحدث أولاً)
            ->get();

        $data['totalSold'] = Sale::count();
        $data['totalSalesAmount'] = Sale::sum('total');
        // مجموع قيمة المبيعات

        // تحديث عداد الزيارات
        Visit::create([
            'ip_address' => request()->ip(),
            'url' => request()->url(),
            'visited_at' => now(),
        ]);

        // حساب عدد الزيارات
        $data['visit_count'] = Visit::distinct('ip_address')->count('ip_address');

        $data['route'] = 'dashboard';
        return view('admin.dashboard', $data);
    }
}
