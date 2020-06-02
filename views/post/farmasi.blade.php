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
        <h2>Instalasi Farmasi</h2>
        <span>Post By Admin On 2020.</span><hr>
      <p class="text-justify">
        Instalasi Farmasi Rumah Sakit adalah suatu unit di rumah sakit yang merupakan fasilitas penyelenggaraan kefarmasian di bawah pimpinan seorang Apoteker dan memenuhi persyaratan secara hukum untuk mengadakan, menyediakan, dan mengelola seluruh aspek penyediaan perbekalan kesehatan di rumah sakit. <br> Instalasi farmasi Rumah Sakit Syarif Hidayatullah melayani pasien setiap harinya selama 24 jam. dikepalai oleh seorang Apoteker yang sudah berpengalaman, layanan yang diberikan berupa pelayanan obat untuk pasien Rawat Jalan, pasien Rawat Inap, dan pasien UGD, pelayanan pemberian informasi obat dan tatacara penggunaannya kepada pasien dan keluarga pasien. 
      </p>
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
</div>
