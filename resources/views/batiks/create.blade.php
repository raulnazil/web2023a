@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Create Page</div>
  <div class="card-body">
      
      <form action="{{ url('batiks') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>Merek</label></br>
        <input type="text" name="merek" id="merek" class="form-control"></br>
        <label>Stok</label></br>
        <input type="text" name="stok" id="stok" class="form-control"></br>
        <label>Ukuran</label></br>
        <input type="text" name="ukuran" id="ukuran" class="form-control"></br>
        <label>Harga</label></br>
        <input type="text" name="harga" id="harga" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop