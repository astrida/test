@extends('admin.index')

@section('content')
<form action="{{route('product.store')}}" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" class="form-control" placeholder="Nama Barang" name="name">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Harga Barang</label>
              <input type="number" class="form-control" placeholder="Harga Barang" name="price">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Stock Barang</label>
              <input type="number" class="form-control" placeholder="Stock Barang" name="stock">
            </div>
          </div>
        </div>
        <input type="submit" class="btn btn-active" value="Simpan">
    </form>
@endsection