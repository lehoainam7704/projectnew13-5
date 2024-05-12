@extends('shop-product')
    @section('content-products')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Product</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($category as $data)                                  
    <a href="{{route('product.category',$data->id)}}" style="margin-top: 20px;" class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" >{{$data->type_name}}</a>
    @endforeach
    @endsection
        
 

    