@extends('admin_product.layout_home')

@section('content')
    <div class="container">
        <div class="row" style="margin: 20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->product_name }}</h5>
                        <p class="card-text">Product Type: {{ $product->product_type }}</p>
                        <p class="card-text">Product Quantity: {{ $product->product_quantity }}</p>
                        <p class="card-text">Product Price: {{ $product->product_price }}</p>
                        <p class="card-text">Product Detail: {{ $product->product_detail }}</p>
                        <p class="card-text">Type Name: {{ $product->type_name }}</p>
                        <img src="{{ asset('img/'.$product->product_image) }}" alt="Product Image" width="200px" height="200px">
                    </div>
                </div>
                <a href="{{ route('admin_product.index') }}" class="btn btn-primary mt-3">Trở lại trang Admin</a>
            </div>
        </div>
    </div>
@endsection
