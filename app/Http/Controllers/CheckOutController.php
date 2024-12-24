<?php

namespace App\Http\Controllers;

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
}
