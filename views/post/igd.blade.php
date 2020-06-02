@extends('layout.main')
@section('title')
<div class="container mt-5 pt-5">
  <div class="text-left p-4 bg-success text-light">
  <h2>Fasilitas & Pelayanan</h2>
  </div>
  <nav aria-label="breadcrumb m-1">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="black-text" href="{{url('/')}}" style="text-decoration:none;">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Fasilitas & Pelayanan</li>
    </ol>
  </nav>
  <div class="container">
    
  <div class="row">
    <div class="col-md-9 py-3">
      <h2>IGD 24 Jam</h2>
      <span>Post By Admin On 2020.</span><hr>
      <img class="float-left w-50" style="margin:0 10px 5px 0;" src="img/radiologi.jpg" alt="igd">
      <p class="text-justify particle ">
      <strong>IGD RSIA Tiara</strong> selalu siap melayani pasien - pasien yang mengalami kegawatdaruratan medis selama <b>24 jam</b>.<br>
      Sesuai dengan Kebijakan Mutu IGD yang harus melayani pasien dengan cepat dan sesuai prosedur, maka Pelayanan IGD kami dilakukan oleh dokter jaga  dan perawat  yang profesional di bidangnya, untuk melakukan tindakan resusitasi pasien ataupun kasus medis lainnya. <br>
      Untuk memudahkan dan mempercepat tibanya pasien ke RS, maka <strong>IGD RSIA Tiara</strong> menyediakan Pelayanan Ambulan yang selalu siap selama <b>24 jam</b>. <br>
      Selain itu, demi menunjang keakuratan dan ketepatan dalam menegakkan diagnosis, <strong>IGD RSIA Tiara</strong>  didukung oleh adanya Laboratorium, Radiologi dan Farmasi yang beroperasional <b>24 jam</b>. <br>
      <strong>IGD RSIA Tiara</strong> juga didukung oleh Dokter – Dokter  Spesialis yang selalu siap dihubungi untuk melayani pasien yang membutuhkan.</p>
      <p class="font-weight-bolder">Untuk INFORMASI lebih lanjut, silahkan hubungi IGD 021-5961999.</p>
    </div>
    <div class="col-md-3 mt-4 pt-3">
      <h5>Fasilitas dan Pelayanan</h5><br>
      <a href="{{'/instalasi-farmasi'}}"> Instalasi Farmasi</a><hr>
      <a href="{{'/instalasi-farmasi'}}"> Rawat Inap</a><hr>
      <a href="{{'/radiologi'}}"> Radiologi</a><hr>
      <a href="{{'/instalasi-farmasi'}}"> Instalasi Farmasi</a><hr>
      <a href="{{'/instalasi-farmasi'}}"> Instalasi Farmasi</a><hr>
    </div>
  </div>
  </div>
</div>

