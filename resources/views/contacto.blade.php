@extends('layouts.app')

@section('content')

<div id="carouselCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/rene.jfif" class="rounded mx-auto d-block" alt="200x200">
        <div class="carousel-caption d-none d-md-block">
          <h5>Rene Ismael Fuentes Benitez</h5>
          <p>SMIS047221.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/mondragon.jfif" class="rounded mx-auto d-block" alt="200x200">
        <div class="carousel-caption d-none d-md-block">
          <h5>Oscar Rene Mondragon Orellana</h5>
          <p>SMIS081919.</p>
        </div>
      </div>
      <div class="carousel-item text-center">
        <img src="images/mauro.jfif" class="rounded" alt="200x200">
        <div class="carousel-caption d-none d-md-block">
          <h5>Geovany Mauricio Alvarez Velazquez</h5>
          <p>SMIS063721.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/arnoldo.png" class="rounded mx-auto d-block" alt="200x200">
        <div class="carousel-caption d-none d-md-block">
          <h5>David Arnoldo Hernandez Gomez</h5>
          <p>SMIS051821.</p>
        </div>
      </div>
      <div class="carousel-item text-center">
        <img src="images/hector.jfif" class="rounded" alt="200x200">
        <div class="carousel-caption d-none d-md-block">
          <h5>Hector Alejandro Franco Berrios</h5>
          <p>SMIS092321.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

@endsection