@extends('app')
    @section('content')
    <div class="product-breadcroumb">
        <a href="index">Home</a>
        <a href="cart">Cart</a>
    </div> 
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form role="timkiem"  action="{{ route('timkiem.product', 'searchproduct') }}" method="get">
                            <input type="text" placeholder="Search products..." name="key">
                            <button style="border-radius: 10px;" type="submit">Search</button>
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Latest Products</h2>
                        @foreach($data_latestproduct as $data ) 
                        <div class="thubmnail-recent">
                            <a href="{{route('latest.product',$data->id)}}"><img src="{{asset('img/' . $data->latestproduct_image)}}" alt="" class="recent-thumb"></a>
                            <h2><a href="{{route('latest.product',$data->id)}}">{{$data->latestproduct_name}}</a></h2>
                            <div class="product-sidebar-price">
                            {{number_format( $data->latestproduct_price,0, ',', '.')}} vnđ
                            </div>                             
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        @foreach($product_cart as $data)
                        <ul>
                            <li><a href="{{route('single.product',$data->id)}}">{{$data->product_name}}</a></li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cartItems as $key => $value)
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="#">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="{{route('single.product','$product -> id')}}"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="{{asset('img')}}/{{$value['product_image']}}"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="{{route('single.product','$product -> id')}}">{{$value['product_name']}}</a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">{{number_format( $value['product_price'],0, ',', '.')}} vnđ</span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <input style="text-align: center;" type="number" size="4" class="input-text qty text" title="Qty" value="{{$value['quantity']}}" min="0" step="1">
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount">{{number_format( $value['product_price'] * $value['quantity'],0, ',', '.')}} vnđ</span> 
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                        
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <input style="border-radius: 10px;margin-right: 30px;" type="submit" value="Update Cart" name="update_cart" class="button">
                                                <input style="border-radius: 10px;" type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">
                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
@endsection

   