<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class WebsiteController extends Controller
{
    public function index()
    {
        $data['route'] = 'index_page';

        // جلب الفئات الشعبية
        $data['categories'] = Category::where('is_popular', 1)
            ->select('id', 'meta_title', 'meta_description', 'image', 'slug', 'is_showing')
            ->get();

        // جلب المنتجات الرائجة
        $data['products'] = Product::where('trend', 1)
            ->select('id', 'meta_title', 'meta_description', 'price', 'selling_price', 'image', 'slug', 'category_id')
            ->get();

        // جلب أفضل ثلاث مبيعات


        $data['mostSoldProduct'] = Sale::selectRaw('product_id, sum(quantity) as total_quantity')
            ->groupBy('product_id')
            ->orderByDesc('total_quantity')
            ->first();


        if ($data['mostSoldProduct']) {

            $product = Product::find($data['mostSoldProduct']->product_id);


            $data['product2'] = $product;
        }
        return view('website.index', $data);
    }
    public function getCategories()
    {
        $data['route'] = 'categories_page';
        $data['categories'] = Category::where('is_showing', 1)->get();


        return view('website.categories', $data);
    }


    public function getCategoryBySlug($slug)
    {
        $category = Category::with('products')
            ->where('slug', $slug)
            ->where('is_showing', 1)
            ->first();

        if (!$category) {
            return redirect('/')->with('error', 'Category not found');
        }

        $data['route'] = 'categories_page';
        $data['category'] = $category;

        return view('website.category', $data);
    }

    public function getProductBySlug($category_slug, $product_slug)
    {

        if (Category::where('slug', $category_slug)->exists()) {

            if (Product::where('slug', $product_slug)->exists()) {
                $data['route'] = 'categories_page';
                $data['product'] = Product::with('category')->where('slug', $product_slug)->first();
                $data['keywords'] = explode(',', $data['product']->meta_keywords);
                return view('website.product', $data);
            } else {
                return redirect('/')->with('error', 'there is no product');
            }
        } else {
            return redirect('/')->with('error', 'there is no category');
        }
    }
    public function contact()
    {

        $data['route'] = 'categories_page';
        return view('website.contact', $data);
    }
    public function submit(Request $request)
    {
        // التحقق من صحة البيانات الواردة (إن أردت)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);


        return redirect()->route('index_page')->with('success', '  تم إرسال رسالتك بنجاح! 🎉');
    }
}
