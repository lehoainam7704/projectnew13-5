@extends('admin_product.layout_home')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Create New Product</div>
  <div class="card-body">

      <form action="{{ route('admin_product.AddProduct') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Product_Name</label><br>
        <input type="text" name="product_name" id="name" class="form-control" required><br>
        <label>Product_Type</label><br>
        <input type="text" name="product_type" id="address" class="form-control" required><br>
        <label>Product_Quantity</label><br>
        <input type="number" name="product_quantity" id="mobile" class="form-control" required><br>
        <label>Product_Price</label><br>
        <input type="number" name="product_price" id="mobile" class="form-control" required><br>
        <label>Product_Detail</label><br>
        <input type="text" name="product_detail" id="mobile" class="form-control" required><br>
        <label>Product_Image</label><br>
        <input type="file" name="product_image" id="product_image" class="form-control" required><br>
        <label>Type Name</label><br>
        <input type="text" name="type_name" id="mobile" class="form-control" required><br>
        <label>Type Logo</label><br>
        <input type="text" name="type_logo" id="type_logo" class="form-control" required><br>
        <input type="submit" value="Thêm Sản Phẩm" class="btn btn-success"><br>
    </form>

  </div>
</div>
@endsection

