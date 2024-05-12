@extends('app')
@section('content')
<div class="product-breadcroumb">
  <a href="index"></i>Home</a>
  <a href="shop">Shop page</a>
</div>
@yield('content-products')
<div class="single-product-area">
  <div class="zigzag-bottom"></div>
  <div class="container">
    <div class="row">
      @foreach($product as $data)
      <div class="col-md-3 col-sm-6">
        <div class="single-shop-product">
          <div class="product-upper">
            <a href="{{route('single.product',$data->id)}}"> <img src="{{asset('img/' . $data->product_image)}}" alt=""></a>
          </div>
          <h2><a href="{{route('single.product',$data->id)}}">{{$data->product_name}}</a></h2>
          <div class="product-carousel-price">
            {{number_format( $data->product_price,0, ',', '.')}} vnđ
          </div>

          <form action="{{route('cart.add','add')}}" class="cart" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <button style="margin-left: 65px;width: 130px;padding: 10px;margin-top:10px;" class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow">Add to cart</button>
          </form>
        </div>
      </div>
      @endforeach

    </div>
  </div>
  <div style="text-align: center;">
      {{$product->links()}}
    </div>
</div>
@endsection