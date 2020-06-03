@extends('layout.main')
@section('title')
<!-- slide navigation arrows -->

  <div id="carousel" class="carousel slide carousel-fade my-4" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slide/tiara.png" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/slide/tiara3.jpg" class="d-block w-100" >
      </div>
      <div class="carousel-item">
        <img src="img/slide/tiara3.jpg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <a class="carousel-control-prev ml-0" href="#carousel" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next mr-0" href="#carousel" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
  </div>

<section>
  <div class="container py-4">
    <div class="text-center text-bold">
      <h1>Selamat datang di RSIA Tiara Cikupa</h1>
      <p>
        Melayani dengan Professional dan Penuh Kasih
      </p>
    </div>
  </div>
</section>

<section id="about" class="about">
  <div class="container">
    <div class="row mb-4">
      <div class="col text-center">
        <h2>About</h2>
      </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-5 text-justify">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eius ut eaque corporis, sit repellendus ratione asperiores, aut iusto nobis voluptatem delectus dignissimos quaerat natus obcaecati laborum deleniti laboriosam officia.</p>
        </div>
        <div class="col-sm-5 text-justify">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae fuga id saepe corporis quam dolor deserunt laudantium quia aut et ex commodi in quod, eum labore magnam. Soluta, dolorum a.</p>
        </div>
    </div>
  </div>
</section>

  <!-- article -->
  <section id="portfolio" class="portfolio bg-light pb-2">
    <div class="container">
      <div class="row mb-4 pt-4">
          <div class="col text-center">
            <h2>Article</h2>
          </div>
      </div>
    <div class="row">
      <div class="col-sm">
        <div class="card">
          <img src="img/kehamilan.jpg" class="card-img-top">
          <div class="card-body text-center">
            <h4>Kesehatan Dalam Kehamilan</h4>
            <p class="card-text">Terlambat datang bulan merupakan hal</p>
            <p> pertama yang menandakan kehamilan. </p>
            <p>demikian, tanda ini bisa salah jika </p> 
            <p> memang memiliki siklus menstruasi yang tidak </p> 
            <p> teratur. Untuk mengecek kepastian hamil,
            <a href="{{('/news')}}">Read More</a>.</p>
          </div>
        </div>
      </div>
        <div class="col-sm">
          <div class="card">
            <img src="img/tiara.jpg" class="card-img-top">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content <a href="#">Read More</a>.</p>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card">
            <img src="img/tiara.jpg" class="card-img-top">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content <a href="#">Read More</a>.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- paralax --}}
<div class="jumbotron-fluid">
  <div class="container-fluid bg-transparent text-center">
    <div class="">
      <img src="img/slide/tiara2.jpg" alt="tiara" class="d-block w-100">
    </div>


  </div>


</div>
  