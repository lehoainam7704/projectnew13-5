<?php
namespace App\Helper;
class CartLast{
    private $items = [];
    private $total_quantity = 0;
    private $total_price = 0;

    public function __construct(){

        $this->items = session('cart') ? session('cart') : [];
    }

    public function getList(){
        return $this->items;
    }

    public function addlast($latestproducts, $quantity = 1){
        $item = [
            'id' => $latestproducts->id,
            'latestproduct_name' => $latestproducts->latestproduct_name,
            'latestproduct_price' => $latestproducts->latestproduct_price,
            'latestproduct_image' => $latestproducts->latestproduct_image,
            'quantity' => $quantity
        ];
        $this->items[$latestproducts->id] = $item;
        session(['cart' => $this->items]);
    }
}