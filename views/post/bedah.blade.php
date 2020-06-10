@extends('layout.main')
@section('title')
<div class="container mt-5 pt-5">
  <div class="text-left p-4 bg-success text-light">
    <h2>Poliklinik</h2>
  </div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="black-text" href="{{url('/')}}" style="text-decoration:none;">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Poli Bedah</li>
    </ol>
  </nav>
  <div class="container">
    <h2>
      Poli Bedah
    </h2><hr>
    <span>Post By Admin On 2020.</span>
  </div>
</div>
@endsection