<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeProductRequest;
use App\Http\Requests\upateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['route'] = 'product';
        $data['products'] = Product::select('id', 'category_id', 'name', 'image', 'status', 'trend')->get();
        return view('admin.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['route'] = 'products';
        $data['categories'] = Category::select('id', 'name')->get();
        return view('admin.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeProductRequest $request)
    {
        DB::beginTransaction();
        try {
            $validated = $request->validated();

            // رفع الصورة إلى public مباشرة
            $image = null;
            if ($request->hasFile('image')) {
                $newImage = $request->file('image');
                $imageName = time() . '_' . $newImage->getClientOriginalName();
                $newImage->move(public_path('assets/uploads/Product'), $imageName);
                $image = 'assets/uploads/Product/' . $imageName;
            }

            // إنشاء المنتج
            $product = new Product();
            $product->category_id = $request->category_id;
            $product->name = ['ar' => $request->name_ar, 'en' => $request->name_en];
            $product->slug = $request->slug;
            $product->short_description = ['ar' => $request->short_description_ar, 'en' => $request->short_description_en];
            $product->description = ['ar' => $request->description_ar, 'en' => $request->description_en];
            $product->status = $request->status ? 1 : 0;
            $product->trend = $request->trend ? 1 : 0;
            $product->price = $request->price;
            $product->selling_price = $request->selling_price;
            $product->qty = $request->qty;
            $product->tax = $request->tax;
            $product->meta_title = $request->meta_title;
            $product->meta_description = ['ar' => $request->meta_description_ar, 'en' => $request->meta_description_en];
            $product->meta_keywords = $request->meta_keywords;
            $product->image = $image;
            $product->save();

            DB::commit();
            return redirect()->route('products.index')->with('success', trans('messages_trans.success_save'));
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error while saving product: ' . $e->getMessage());
            return redirect()->back()->with(['error_catch' => trans('messages_trans.error_save')]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $data['route'] = 'products';
        $data['product'] = $product;
        $data['categories'] = Category::select('id', 'name')->get();
        return view('admin.product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(upateProductRequest $request, Product $product)
    {
        try {
            $validated = $request->validated();
            $image = $product->image;

            // التحقق من وجود صورة جديدة
            if ($request->hasFile('image')) {
                // حذف الصورة القديمة إن وجدت
                if ($product->image && file_exists(public_path($product->image))) {
                    unlink(public_path($product->image));
                }

                // رفع الصورة الجديدة إلى public مباشرة
                $newImage = $request->file('image');
                $imageName = time() . '_' . $newImage->getClientOriginalName();
                $newImage->move(public_path('assets/uploads/Product'), $imageName);
                $image = 'assets/uploads/Product/' . $imageName;
            }

            // تحديث بيانات المنتج
            $product->update([
                'category_id' => $request->category_id,
                'name' => ['ar' => $request->name_ar, 'en' => $request->name_en],
                'slug' => $request->slug,
                'short_description' => ['ar' => $request->short_description_ar, 'en' => $request->short_description_en],
                'description' => ['ar' => $request->description_ar, 'en' => $request->description_en],
                'status' => $request->status ? '1' : '0',
                'trend' => $request->trend ? '1' : '0',
                'price' => $request->price,
                'selling_price' => $request->selling_price,
                'qty' => $request->qty,
                'tax' => $request->tax,
                'meta_title' => $request->meta_title,
                'meta_description' => ['ar' => $request->meta_description_ar, 'en' => $request->meta_description_en],
                'meta_keywords' => $request->meta_keywords,
                'image' => $image,
            ]);

            return redirect()->route('products.index')->with('success', trans('messages_trans.success_update'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error_catch' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
            // حذف الصورة إذا كانت موجودة
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }

            // حذف المنتج
            $product->delete();

            return redirect()->route('products.index')->with('success', trans('messages_trans.success_delete'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error_catch' => $e->getMessage()]);
        }
    }

    /**
     * Get all sales.
     */
    public function getSales()
    {
        $sales = Sale::with('product', 'category', 'user')->get();
        $route = 'sales';
        return view('admin.sales', compact('sales', 'route'));
    }
    public function show(Product $product)
    {
        $data['route'] = 'products';
        $data['product'] = $product;
        return view('admin.product.show',$data);
    }

}
