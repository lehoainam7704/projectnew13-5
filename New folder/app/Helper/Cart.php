<?php
namespace App\Helper;
class Cart{
    private $items = [];
    private $total_quantity = 0;
    private $total_price = 0;

    public function __construct(){

        $this->items = session('cart') ? session('cart') : [];
    }

    public function getList(){
        return $this->items;
    }

    public function add($product, $quantity = 1){
        $item = [
            'productId' => $product->id,
            'product_name' => $product->product_name,
            'product_price' => $product->product_price,
            'product_image' => $product->product_image,
            'quantity' => $quantity
        ];
        $this->items[$product->id] = $item;
        session(['cart' => $this->items]);
    }

}
