<?php

namespace App\Http\Controllers\Admin;
use Laracasts\Flash\Flash;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\updateCategoryRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data ['route']='category';
        $data['categories'] = Category::select('id', 'name', 'image', 'is_showing', 'is_popular')->get();
        // return $data['categories'];
        return view('admin.category.index', $data);
    }

    public function test()
    {
        session()->flash('success', 'تم إنشاء العنصر بنجاح!');
        return view('test');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['route'] = 'categories';

        return view('admin.category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeCategoryRequest $request)
    {
        try {
            $validate = $request->validated();

            // تخزين الصورة
            // $image = $request->file('image')->store('assets/uploads/Category', 'public');
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // توليد اسم فريد للصورة
            $image->move(public_path('assets/uploads/Category'), $imageName);


            // إنشاء فئة جديدة
            $category = new Category();
            $category->name = [
                'ar' => $request->name_ar,
                'en' => $request->name_en
            ];
            $category->slug = $request->slug;
            $category->description = [
                'ar' => $request->description_ar,
                'en' => $request->description_en
            ];
            $category->is_showing = $request->is_showing ? '1' : '0';
            $category->is_popular = $request->is_popular ? '1' : '0';
            $category->meta_title = [
                'ar' => $request->meta_title_ar,
                'en' => $request->meta_title_en
            ];
            $category->meta_description = [
                'ar' => $request->meta_description_ar,
                'en' => $request->meta_description_en
            ];
            $category->meta_keywords = $request->meta_keywords;
            // $category->image = $image;
            $category->image = 'assets/uploads/Category/' . $imageName;
            $category->save();

            session()->flash('success', 'تم إنشاء العنصر بنجاح!');

            return redirect()->route('categories.index');

        } catch (\Exception $e) {
            Flash::error('حدث خطأ أثناء المعالجة: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $data['route'] = 'categories';
        $data['category'] = $category;
        return view('admin.category.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $data['route'] = 'categories';
        $data['category'] = $category;
        return view('admin.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
{
    try {
        $validated = $request->validated();

        $image = $category->image; // الاحتفاظ بالصورة القديمة إذا لم يتم تحديثها

        if ($request->hasFile('image')) {
            // حذف الصورة القديمة إذا كانت موجودة
            if ($category->image && file_exists(public_path($category->image))) {
                unlink(public_path($category->image));
            }

            // حفظ الصورة الجديدة في مجلد public مباشرة
            $imageFile = $request->file('image');
            $imageName = time() . '_' . $imageFile->getClientOriginalName();
            $imageFile->move(public_path('assets/uploads/Category'), $imageName);

            // حفظ المسار الجديد في قاعدة البيانات
            $image = 'assets/uploads/Category/' . $imageName;
        }

        // تحديث بيانات الفئة في قاعدة البيانات
        $category->update([
            'name' => ['ar' => $request->name_ar, 'en' => $request->name_en],
            'slug' => $request->slug,
            'description' => ['ar' => $request->description_ar, 'en' => $request->description_en],
            'is_showing' => $request->is_showing ? '1' : '0',
            'is_popular' => $request->is_popular ? '1' : '0',
            'meta_title' => ['ar' => $request->meta_title_ar, 'en' => $request->meta_title_en],
            'meta_description' => ['ar' => $request->meta_description_ar, 'en' => $request->meta_description_en],
            'meta_keywords' => $request->meta_keywords,
            'image' => $image, // إضافة الصورة هنا
        ]);

        return redirect()->route('categories.index')->with('success', trans("messages_trans.success_update"));

    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // حذف الصورة فقط إذا كانت موجودة
        if ($category->image && file_exists(public_path($category->image))) {
            unlink(public_path($category->image));
        }

        // حذف الفئة من قاعدة البيانات
        $category->delete();

        return redirect()->route('categories.index')->with('success', trans('messages_trans.success_delete'));
    }

}
