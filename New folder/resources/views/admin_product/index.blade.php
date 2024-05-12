@extends('admin_product.layout_home')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                    <div class="card-body">
                        <a href="{{ route('admin_product.create') }}" class="btn btn-success btn-sm" title="Add New Product">
                                Add New Product

                        </a>
                        </div>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>product_name</th>
                                        <th>product_type</th>
                                        <th>product_quantity</th>
                                        <th>product_price</th>
                                        <th>product_detail</th>
                                        <th>product_image</th>
                                        <th>type_name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data_product_admin as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{asset('img/'.$item->product_image)}}" alt="" with="100px" height="100px"></td>
                                        <td>{{ $item->product_name }}</td>
                                        <td>{{ $item->product_type }}</td>
                                        <td>{{ $item->product_quantity }}</td>
                                        <td>{{ $item->product_price }}</td>
                                        <td>{{ $item->product_detail }}</td>
                                        <td>{{ $item->type_name }}</td>

                                        <td>
                                        <a href="{{ route('admin_product.show', $item->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('admin_product.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                                <form method="POST" action="{{ route('admin_product.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm('Are you sure you want to delete this product?')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$data_product_admin->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
