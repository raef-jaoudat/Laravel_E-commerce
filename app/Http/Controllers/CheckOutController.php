<?php

namespace App\Http\Controllers;

use App\Models\sale;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    public function index(){
        $data['carts'] = Cart::where('user_id',Auth::id())->get();
        $data['route'] = '';
        $data['user'] = User::where('id',Auth::id())->first();
        return view('website.checkout.index',$data);
    }
    public function checkout(Request $request)
    {

        try {
            $user = Auth::user();
            $cartItems = Cart::where('user_id', $user->id)->get();

            if ($cartItems->isEmpty()) {
                return redirect()->route('index_page')->with('error', 'Your cart is empty.');
            }

            foreach ($cartItems as $item) {
                $product = $item->product;

                // تسجيل البيع
                Sale::create([
                    'product_id' => $product->id,
                    'category_id' => $product->category_id,
                    'user_id' => $user->id,
                    'quantity' => $item->qty,
                    'price' => $product->selling_price,
                    'total' => $product->selling_price * $item->qty,
                    'sold_at' => now(),
                ]);

                // خصم الكمية من المخزون
                $product->update(['qty' => $product->qty - $item->qty]);
            }

            // إفراغ السلة
            Cart::where('user_id', $user->id)->delete();

            // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('index_page')->with('success', 'Checkout completed successfully!');
    } catch (\Exception $e) {
        // إعادة التوجيه مع رسالة خطأ
        return redirect()->route('index_page')->with('error', 'An error occurred during checkout. Please try again.');
    }
    }

}
