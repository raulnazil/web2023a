
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Karyawans Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Kode : {{ $karyawans->kode }}</h5>
        <p class="card-text">Nama : {{ $karyawans->nama }}</p>
        <p class="card-text">Alamat : {{ $karyawans->alamat }}</p>
        <p class="card-text">Pekerjaan : {{ $karyawans->pekerjaan }}</p>
        <p class="card-text">Notlpn : {{ $karyawans->notlpn }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
@endsection