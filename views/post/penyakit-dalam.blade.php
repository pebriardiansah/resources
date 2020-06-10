@extends('layout.main')

@section('title')
<div class="container mt-5 pt-5">
  <div class="text-left p-4 bg-success text-light">
    <h2>Poliklinik</h2>
  </div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="black-text" href="{{url('/')}}" style="text-decoration:none;">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Poli Penyakit Dalam</li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-md-9">
      <h3>Poliklinik Penyakit Dalam</h3>
      <img class="float-left w-50" style="margin:0 10px 5px 0;" src="img/kehamilan.jpg" alt="tiara">
      <p class="text-justify" style="font-size:20px;">
        Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
</div>
@endsection