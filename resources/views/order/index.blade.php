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
                    <th>No.Struk</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Total transaksi</th>
                  <th class="text-center">
                    Action
                  </th>
                </thead>
                <tbody>
                    @foreach ($order as $order)
                    <tr>
                        <td>{{$order->kode}}</td>
                        <td>{{$order->tgl}}</td>
                        <td>{{$order->customer_id}}</td>
                        <td>{{$order->tb}}</td>
                        <td>
                            <form action="" method="post">
                                <a href="">Edit</a>
                                <a href="">Detail</a>
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


        <a href="{{route('order.create')}}">Tambah</a>
@endsection

