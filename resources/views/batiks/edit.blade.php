@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('batiks/' .$batiks->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$batiks->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" value="{{$batiks->nama}}" class="form-control"></br>
        <label>Merek</label></br>
        <input type="text" name="merek" id="merek" value="{{$batiks->merek}}" class="form-control"></br>
        <label>Stok</label></br>
        <input type="text" name="stok" id="stok" value="{{$batiks->stok}}" class="form-control"></br>
        <label>Ukuran</label></br>
        <input type="text" name="ukuran" id="ukuran" value="{{$batiks->ukuran}}" class="form-control"></br>
        <label>Harga</label></br>
        <input type="text" name="harga" id="harga" value="{{$batiks->harga}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop