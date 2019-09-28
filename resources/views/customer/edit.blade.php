@extends('admin.index')

@section('content')
<form action="{{route('customer.update',$customer)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-md-12">
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" value="{{$customer->name}}" placeholder="Nama Lengkap" name="name">
                </div>
              </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" value="{{$customer->address}}" placeholder="Alamat" name="address">
            </div>
          </div>
        </div>
        <input type="submit" value="Simpan">
    </form>
@endsection