<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function showCart()
    {
        return view("products.cart");
    }

    public function addToCart($id)
    {
//        if(!Session::exists('carts')){
//            Session::put('carts',[]);
//        }
        $product = DB::table("products")->where("id", "=",$id)->get();
        $carts = Session::get('cart');
        $carts[$product[0]->id] = [
            "name" => $product[0]->name,
            'description' => $product[0]->description,
            'photo' => $product[0]->photo,
            'price' => $product[0]->price
        ];
        Session::push("carts", $carts);
        Session::flash("success", "add to cart successfully");
        Session::save();
//        dd(Session::get("carts"));
        return redirect()->back();
    }
}
