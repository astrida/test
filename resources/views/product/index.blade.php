@extends('admin.index')

@section('content')
    <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Data Product</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Price
                      </th>
                      <th>
                        Stock
                      </th>
                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
                        @foreach ($product as $product)
                      <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->stock}}</td>
                        <td>
                                <form action="{{route('product.destroy',$product)}}" method="post">
                                    <a href="{{route('product.edit',$product)}}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete">
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
    
    <a href="product/create">Tambah</a>
@endsection