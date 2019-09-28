@extends('admin.index')

@section('content')
<form action="{{route('customer.store')}}" method="POST">
        @csrf
        <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Alamat" name="address">
                  </div>
                </div>
              </div>
        <input type="submit" class="btn btn-active" value="Simpan">
    </form>
@endsection