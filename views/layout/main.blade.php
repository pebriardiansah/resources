<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="icon" href="img/icon/ico_tiara.png" type="image/x-icon">
    <link rel="icon" href="img/icon/ico_tiara.png"> 
    <link rel="stylesheet" href="bootstrap-4.4.1/css/bootstrap.min.css"> 
  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>@yield('title')RSIA Tiara Cikupa</title>
</head>
<body class="mt-5">
  <div class="main">
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a href="{{('/')}}" class="navbar-brand">
          <img src="img/logo.png" width="150">
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" name="tombol" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" type="button" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                  Fasilitas Dan Pelayanan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{('/rawat-inap')}}">Rawat Inap</a>
                  <a class="dropdown-item" href="{{('/instalasi-farmasi')}}">Instalasi Farmasi</a>
                  <a class="dropdown-item" href="{{('/laboratorium')}}">Laboratorium</a>
                  <a class="dropdown-item" href="{{('/radiologi')}}">Radiologi</a>
                  <a class="dropdown-item" href="{{('/igd-24jam')}}">IGD 24Jam</a>
                  <a class="dropdown-item" href="{{('/kerjasama')}}">Kerjasama</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{('/jadwal-dokter')}}">Jadwal Dokter</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" type="button" id="navbarDropdownMenuLink"  data-toggle="dropdown" aria-expanded="false">
                Poliklinik
                </a>                
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{('/kebidanan-dan-kandungan')}}">Poli Kebidanan & Kandungan</a>
                  <a class="dropdown-item" href="{{('/anak')}}">Poli Anak</a>
                  <a class="dropdown-item" href="{{('/penyakit-dalam')}}">Poli Penyakit Dalam</a>
                  <a class="dropdown-item" href="{{('/bedah')}}">Poli Bedah</a>
                </div>
                <li class="nav-item">
                  <a class="nav-link nav-item" href="{{('/promo')}}">Promo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-item" href="{{('/kontak')}}">Kontak</a>
                </li>
                {{-- Search --}}
                {{-- <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-lg-0" type="submit"><i class=" align-content-center fa fa-fw fa-search" style="height:25px"></i></button>
                </form> --}}
              
              </li>
            </ul>
        </div>
      </div>
    </nav>
<!-- contack us -->
<section id="contact" class="contact">
  <div class="container-fluid bg-success">
  <div class="row justify-content-center">
    <div class="col-lg-4 text-white">
      <div class="card-body">
        <div class="card-title text-left">
          <h5 class="mb-4">About</h5>
          <p class="text-justify">Rumah Sakit Ibu dan Anak TIARA berdiri sejak tahun 2008 dan diresmikan oleh H. Rano Karno pada tanggal 19 Desember 2009. Rumah Sakit Ibu dan Anak TIARA dinaungi oleh suatu Badan Usaha berbentuk Perseroan Terbatas yaitu PT. Yatama Abadi. Struktur PT terdiri dari 2 orang jajaran Direksi, yaitu : Ibu Evi Yunisal Tiandra, SE selaku Direktur Utama PT dan dr. Jasran Asya, Sp.OG selaku Direktur Operasional PT serta menjabat sebagai Dewan Pengawas Rumah Sakit. <br>
          Untuk meningkatkan pelayanan kepada masyarakat dan sebagai bentuk dukungan positif terhadap program Kementerian Kesehatan RI, maka pada tahun 2018 mengadakan kerjasama dengan BPJS Kesehatan untuk melayani peserta JKN. <br>
          Dan sesuai dengan komitmen untuk menjaga dan meningkatkan mutu SDM serta kualitas pelayanan rumah sakit, maka Rumah Sakit Ibu dan Anak TIARA mengikuti Survei Akreditasi Versi SNARS 1 dan mendapatkan Sertifikat Akreditasi Madya pada tanggal
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
            <div class="card-body text-white">
              <div class="card-title">
                <h5 class="mb-4">Contact Us</h5>
                <p>
                  <strong class="contact-pad" style="padding-bottom: 50px;">Address : </strong>Jl. Raya Serang No. 1 KM 14,5 Tangerang Banten 15710
                  </p>
                <p>
                    <strong class="contact-pad">Phone :</strong> 5-961-999
                </p>
                <p class="contact-link">
                  <strong class="contact-pad email">Email :</strong>
                  <a href="mailto:info@rsiatiara.com">info@rsiatiara.com</a>
                  </p>
              </div>
            </div>
    </div>
    <div class="col-lg-3">
      <div class="card-body pl-0 text-white">
        <h5>Subscibe</h5>
      </div>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="nama" placeholder="Your Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="email" placeholder="Your Email">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary">Subscribe</button>
            </div>
        </form>
    </div>
  </div>
</div>

  <footer class="py-4 bg-footer text-white">
    <div class="container">
        <div class="row">
            <div class="col text-center">
              <div class="left-footer footer-link"> &copy; Copyright 2020. <a href="http://www.rsiatiara.com">rsiatiara.com</a> . All rights reserved.  </div>
              <div class="right-footer footer-link">Design by. <a href="mailto:pebri@rsiatiara.com">admin</a> 
              <button class="navbar-toggler float-right border-info" onclick="topFunction()" id="myBtn" title="Go to top" type="button" data-toggle="collapse" data-target="#" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" name="tombol">
                <i class="material-icons"><img src="img/icon/sharp_keyboard_capslock_white_24.png" alt="arrow-up">
                </i>
              </button>
              </div>
            </div>
        </div>
    </div>
  </footer>
</div>

<!-- my js -->
{{-- <script src="js/preloader.js"></script> --}}
<script type="text/javascript" src="js/script.js"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

  </body>
</html>