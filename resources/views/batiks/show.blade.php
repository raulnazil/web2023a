
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Batiks Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nama : {{ $batiks->nama }}</h5>
        <p class="card-text">Merek : {{ $batiks->merek }}</p>
        <p class="card-text">Stok : {{ $batiks->stok }}</p>
        <p class="card-text">Ukuran : {{ $batiks->ukuran }}</p>
        <p class="card-text">Harga : {{ $batiks->harga }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
@endsection