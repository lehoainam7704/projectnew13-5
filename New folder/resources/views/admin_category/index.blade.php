@extends('admin_category.layout_home')
@section('content')


    <div class="container">



        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                    <div class="card-body">
                        <a href="{{ route('admin_category.create') }}" class="btn btn-success btn-sm" title="Add danh muc">
                                Add Danh Mục
                        </a>
                    <!-- <div class="card-body">
                    <a href="#" class="btn btn-success btn-sm" title="Add danh muc">
                                Danh Mục
                        </a>
                        </div> -->
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Tên Danh Mục</th>
                                        <th>Thao Tác</th>



                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                  <tr>
                                      <td>{{ $category->id }}</td>
                                       <td>{{ $category->name }}</td>
                                 <td>
                           <a href="{{ route('admin_category.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                              <form method="POST" action="{{ route('admin_category.destroy', $category->id) }}" accept-charset="UTF-8" style="display:inline">
                            @method('DELETE')
                              @csrf
                         <button type="submit" class="btn btn-danger btn-sm" title="Delete Category" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')">
                                 <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                  </button>
                          </form>
                     </td>
                            </tr>
                        @endforeach
                            </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
