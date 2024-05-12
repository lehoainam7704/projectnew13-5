@extends('admin_product.layout_home')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Update Product</div>
  <div class="card-body">
       
    <form action="{{ route('admin_product.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" id="product_name" class="form-control" value="{{ $product->product_name }}" required>
        </div>

        <div class="form-group">
            <label for="product_type">Product Type:</label>
            <input type="text" name="product_type" id="product_type" class="form-control" value="{{ $product->product_type }}" required>
        </div>

        <div class="form-group">
            <label for="product_quantity">Product Quantity:</label>
            <input type="number" name="product_quantity" id="product_quantity" class="form-control" value="{{ $product->product_quantity }}" required>
        </div>

        <div class="form-group">
            <label for="product_price">Product Price:</label>
            <input type="number" name="product_price" id="product_price" class="form-control" value="{{ $product->product_price }}" required>
        </div>

        <div class="form-group">
            <label for="product_detail">Product Detail:</label>
            <input type="text" name="product_detail" id="product_detail" class="form-control" value="{{ $product->product_detail }}" required>
        </div>

        <div class="form-group">
            <label for="product_image">Product Image:</label>
            <input type="file" name="product_image" id="product_image" class="form-control">
        </div>

        <div class="form-group">
            <label for="type_name">Type Name:</label>
            <input type="text" name="type_name" id="type_name" class="form-control" value="{{ $product->type_name }}" required>
        </div>

        <div class="form-group">
            <label for="type_logo">Type Logo:</label>
            <input type="text" name="type_logo" id="type_logo" class="form-control" value="{{ $product->type_logo }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Product</button>
    </form>
    
  </div>
</div>
@endsection
