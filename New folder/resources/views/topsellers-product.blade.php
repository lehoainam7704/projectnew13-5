@extends('app')
    @section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Product Details</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input style="border-radius: 10px;" type="submit" value="Search">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                    <h2 class="sidebar-title">Latest Products</h2>
                    @foreach($data_latestproduct as $data ) 
                        <div class="thubmnail-recent">
                            <a href="{{route('latest.product',$data->id)}}"><img src="{{asset('img/' . $data->latestproduct_image)}}" class="recent-thumb" alt=""></a>
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
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href="">Top Sellers</a>
                            <a href="{{route('topsellers.product',$topselersproducts->id)}}">{{$topselersproducts->topsale_name}}</a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="{{asset('img/' . $topselersproducts->topsale_image)}}" alt="">
                                    </div>
                                    
                                    <!-- <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                    </div> -->
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">{{$topselersproducts->topsale_name}}</h2>
                                    <div class="product-inner-price">
                                    {{number_format( $topselersproducts->topsale_price,0, ',', '.')}} vnđ
                                    </div>    
                                    
                                    <form action="{{route('cart.add','add')}}" class="cart" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$topselersproducts->id}}">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Add to cart</button>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p>Category: <a href="">Phone</a></p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                               <p>   {{$topselersproducts->topsale_detail}}</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input style="border-radius: 10px;" type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                            
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="{{asset('img/' . $topselersproducts->topsale_image)}}" alt="" class="img-product">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="{{route('latest.product',$topselersproducts->id)}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="{{route('latest.product',$topselersproducts->id)}}">{{$topselersproducts->topsale_name}}</a></h2>

                                    <div class="product-carousel-price">
                                    {{number_format( $topselersproducts->topsale_price,0, ',', '.')}} vnđ
                                    </div> 
                                </div>
                                                            
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>


   
@endsection