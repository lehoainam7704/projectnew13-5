<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Cart;
use App\Models\Category;
use App\Models\Latestproduct;
use App\Models\Product;

class CartController extends Controller
{
    public function listproduct(Cart $cart,Product $product){
        $cartItems = $cart->getList();
        $data_latestproduct = Latestproduct::all();
        $product_cart = Product::paginate(5);
        $data_category = Category::paginate(3); 
        return view('cart', compact('cartItems','data_latestproduct','product_cart','data_category','product'));
    }

    public function add(Request $request,Cart $cart)
    {
        $product = Product::find($request -> id);
        $quantity = $request->quantity;
        $cart->add($product,$quantity);
        return redirect()->route('cart.product','listproduct');
    }

}
