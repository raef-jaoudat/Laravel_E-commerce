<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['nullable', 'string', 'max:14'],
            'country' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'address1' => ['nullable', 'max:255'],
            'pincode' => ['nullable', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // if ($validator->fails()) {
        //     dd($validator->errors()->all()); // عرض الأخطاء إذا فشل التحقق
        // }

        return $validator;
    }




    protected function create(array $data)
    {
        return User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'country' => $data['country'] ?? null,
            'city' => $data['city'] ?? null,
            'address1' => $data['address1'] ?? null,
            'pincode' => $data['pincode'] ?? null,
            'password' => Hash::make($data['password']),

        ]);

        if ($validator->fails()) {
            dd($validator->errors()->all()); // عرض الأخطاء إذا فشل التحقق
        }
    }
    ////////////////////////////

}
