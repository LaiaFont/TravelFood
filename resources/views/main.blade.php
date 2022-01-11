@include('includes.page_head')

@include('layouts.header')

@include('layouts.menu')

@section('content')
<div id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{ $plats['plats'][0]->imatge_url }}" class="d-block w-100" alt="{{ $plats['plats'][0]->nom }}">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $plats['plats'][0]->nom }}</h5>
          <p>{{ $plats['plats'][0]->descripcio }}</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{ $plats['plats'][1]->imatge_url }}" class="d-block w-100" alt="{{ $plats['plats'][1]->nom }}">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $plats['plats'][1]->nom }}</h5>
          <p>{{ $plats['plats'][1]->descripcio }}</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ $plats['plats'][2]->imatge_url }}" class="d-block w-100" alt="{{ $plats['plats'][2]->nom }}">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $plats['plats'][2]->nom }}</h5>
          <p>{{ $plats['plats'][2]->descripcio }}</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    
    

@include('layouts.footer')
@include('includes.page_tail')