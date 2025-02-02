<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaleRequest;
use App\Models\sale;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreSaleController extends Controller
{

    public function storeSale(StoreSaleRequest $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'user_id' => 'required|exists:users,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);
        $category = $product->category;


        $totalPrice = $product->selling_price * $request->quantity;


        $sale = sale::create([
            'product_id' => $product->id,
            'category_id' => $category->id,
            'user_id' => $request->user_id,
            'quantity' => $request->quantity,
            'price' => $product->selling_price,
            'total' => $totalPrice,
            'sold_at' => now(),
        ]);

        return response()->json(['message' => 'Sale recorded successfully!', 'sale' => $sale]);
    }
}
