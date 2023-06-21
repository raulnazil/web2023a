@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Karyawans</div>
  <div class="card-body">
      
      <form action="{{ url('karyawans/' .$karyawans->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$karyawans->id}}" id="id" />
        <label>Kode</label></br>
        <input type="text" name="kode" id="kode" value="{{$karyawans->kode}}" class="form-control"></br>
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" value="{{$karyawans->nama}}" class="form-control"></br>
        <label>Alamat</label></br>
        <input type="text" name="alamat" id="alamat" value="{{$karyawans->alamat}}" class="form-control"></br>
        <label>Pekerjaan</label></br>
        <input type="text" name="pekerjaan" id="pekerjaan" value="{{$karyawans->pekerjaan}}" class="form-control"></br>
        <label>Notlpn</label></br>
        <input type="text" name="notlpn" id="notlpn" value="{{$karyawans->notlpn}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop