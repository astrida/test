@extends('admin.index')

@section('content')  
<div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Data customer</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Name
                  </th>
                  <th>
                    Address
                  </th>
                  <th class="text-right">
                    Action
                  </th>
                </thead>
                <tbody>
                    @foreach ($customer as $customer)
                  <tr>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->address}}</td>
                        <td>
                            <form action="{{route('customer.destroy',$customer)}}" method="post">
                                <a href="{{route('customer.edit',$customer)}}">Edit</a>
            
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

<a href="{{route('customer.create')}}">Tambah</a>
@endsection

