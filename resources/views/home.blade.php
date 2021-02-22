@extends('layouts.plantilla')
@section('title','UmbroShop-Inicio')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('img/fotoumbro7.jpg') }}" class="d-block w-100 rounded" alt="Umbro-foto">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/fotoumbro8.jpg') }}" class="d-block w-100 rounded" alt="Umbro-foto">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/fotoumbro9.jpg') }}" class="d-block w-100 rounded" alt="Umbro-foto">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/fotoumbro10.jpg') }}" class="d-block w-100 rounded" alt="Umbro-foto">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/fotoumbro11.jpg') }}" class="d-block w-100 rounded" alt="Umbro-foto">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-12">
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-6">
        <h1 class="display-4 text-dark mt-4 mb-4">
          Umbro Inc. Fabrica de grandes
        </h1>
        <p class="lead text-white text-justify">
          Umbro Inc. se caracteriza por repuntar en el mercado, apoyando y fabricando junto a los grandes del deporte
          en general, siempre de la mano con sus aliados estrategicos. Creamos las mejores confecciones e implementos
          para los mismos, dando lo mejor de nosotros para que las grandes instituciones deportivas rindan al maximo con
          los productos Umbro. Maxima calidad y confort asegurado.
        </p>
      </div>
      <div class="col-12 col-lg-6">
        <img class="img-fluid rounded mt-5 mb-4" src="./img/fotoumbro12.jpg" alt="Umbro-foto">
      </div>
      <div class="col-12">
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-12">  
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('img/fotoumbro2.jpg') }}" class="d-block w-100 rounded" alt="Umbro-foto">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/fotoumbro3.jpeg') }}" class="d-block w-100 rounded" alt="Umbro-foto">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/fotoumbro4.jpg') }}" class="d-block w-100 rounded" alt="Umbro-foto">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/fotoumbro5.jpg') }}" class="d-block w-100 rounded" alt="Umbro-foto">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/fotoumbro6.png') }}" class="d-block w-100 rounded" alt="Umbro-foto">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-6">
        <h1 class="display-4 text-dark mt-5">
            Calidad Umbro
        </h1>
        <p class="lead text-white text-justify">
            Nuestra marca siempre se caracterizo por llevar el estandarte de calidad y 
            durabilidad ante cualquier reto deportivo de gran exigencia, por eso trabajamos
            con los mas altos estandares de fabricacion y los mejores materiales para hacer 
            de nuestros productos, el referente actual ante las distintas marcas competidoras.
            La calidad Umbro se define por nuestra gran capacidad de soportar la exigencia en 
            cualquier disciplina realizada, desde futbol, rugby, atletismo e inclusive prendas
            deportivas para el running. Umbro Inc siempre estara agradecido con todos sus clientes,
            ya que estos han sido quienes han llevado a esta organizacion a explorar y finalmente
            a alcanzar nuevos horizontes o simplemente expandir de alguna forma los existentes.
        </p>
      </div>
      <div class="col-12 col-lg-6">
        <img class="img-fluid rounded mt-5 mb-4" src="./img/fondoumbro1.jpg" alt="Umbro-foto">
      </div>
    </div>
          <div class="col-12">
            <hr>
          </div>
    <div class="row">
      <div class="col-12 col-lg-6">
          <img class="img-fluid mb-4 mt-5 rounded umbroalto3" src="./img/fondoumbro2.jpg" alt="Umbro-foto">
      </div>
      <div class="col-12 col-lg-6">
          <h1 class="display-4 text-dark mt-5">
              Umbro Inc
          </h1>
          <p class="lead text-white text-justify">
            Umbro es una compañía británica fabricante de calzado, ropa deportiva y otros productos 
            relacionados con el fútbol, el deporte en general y la moda, siendo sus productos vendidos
            en más de 90 países de todo el mundo. Su sede principal se encuentra en Cheadle, Gran Mánchester, 
            Inglaterra, Reino Unido. 
          </p>
        <div class="d-flex flex-column justify-content-between">
          <a class="py-2" href="{{route('nosotros')}}">
              <button type="submit" class="btn btn-lg btn-block bg-dark text-white rounded">
                  Conocenos
              </button> 
          </a>
          <a class="py-2" href="{{route('umbroshop.contactanos.index')}}">
              <button class="btn btn-lg btn-block bg-dark text-white rounded">
                  Contactanos
              </button> 
          </a>
          <a class="py-2" href="{{route('umbroshop.index')}}">
              <button class="btn btn-lg btn-block bg-dark text-white rounded">
                  Conoce nuestros productos
              </button> 
          </a>
        </div>
      </div>
    </div>
  </div>
    <div class="container">
      <div class="col-12">
        <hr>
      </div>
    </div>
      
</div>
@endsection