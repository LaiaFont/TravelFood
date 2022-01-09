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
        <img src="https://spanishsabores.com/wp-content/uploads/2020/05/Seafood-Paella-1837-Blog.jpg" class="d-block w-100" alt="Paella">
        <div class="carousel-caption d-none d-md-block">
          <h5>Paella</h5>
          <p>Spanish Dish</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="https://www.hogarmania.com/archivos/201411/bocadillo-calamares-xl-668x400x80xX.jpg" class="d-block w-100" alt="Bocadillo de Calamares">
        <div class="carousel-caption d-none d-md-block">
          <h5>Bocadillo de calamares</h5>
          <p>Madrid food</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.gourmetkebab.es/wp-content/uploads/2019/09/Kebab-shawarma.jpg" class="d-block w-100" alt="Kebab">
        <div class="carousel-caption d-none d-md-block">
          <h5>Kebab</h5>
          <p>Kibab typical</p>
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