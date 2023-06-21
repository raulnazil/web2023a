@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Create Karyawans</div>
  <div class="card-body">
      
      <form action="{{ url('karyawans') }}" method="post">
        {!! csrf_field() !!}
        <label>Kode</label></br>
        <input type="text" name="kode" id="kode" class="form-control"></br>
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>Alamat</label></br>
        <input type="text" name="alamat" id="alamat" class="form-control"></br>
        <label>Pekerjaan</label></br>
        <input type="text" name="pekerjaan" id="pekerjaan" class="form-control"></br>
        <label>Notlpn</label></br>
        <input type="text" name="notlpn" id="notlpn" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop