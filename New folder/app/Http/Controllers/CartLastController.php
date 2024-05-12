<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\CartLast;
use App\Models\Category;
use App\Models\Latestproduct;
use App\Models\Product;

class CartLastController extends Controller
{
    public function listlastproduct(CartLast $cart){
        $cartItems = $cart->getList();
        $data_latestproduct = Latestproduct::all();
        $product_cart = Product::paginate(5);
        $data_category = Category::paginate(3);
        return view('cart', compact('cartItems','data_latestproduct','product_cart','data_category'));
    }

    public function addlast(Request $request,CartLast $cart)
    {
        $lastproduct = Latestproduct::find($request -> id);
        $quantity = $request->quantity;
        $cart->addlast($lastproduct,$quantity);
        return redirect()->route('cart.lastproduct','listlastproduct');
    }
}
