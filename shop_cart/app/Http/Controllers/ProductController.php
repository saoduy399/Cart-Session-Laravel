<?php

namespace App\Http\Controllers;

use App\Models\Product;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function show(Request $request)
    {
        $value = session()->all();
    }

    public function showLoginForm()
    {
        return view("products.login");
    }

    public function login(Request $request)
    {
        $request->session()->put('username', $request->user);
        $username = $request->session()->get("username");

        return view("products.welcome");
    }

    public function index()
    {
//        $products = DB::table("products")->get();
        $products = Product::all();
        return view("products.list", compact("products"));

    }
}
