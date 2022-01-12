@include('includes.page_head')

@include('layouts.header')
@include('layouts.menu')

@section('content')
@foreach ($plats as $plat)
    <div class="img-container">
        <h1> {{ $plat->nom }} </h1>
        <img class="img plat" src="{{ $plat->imatge_url }}">
    </div>
    <h3> Ingredients </h3>
    @foreach ($plat->ingredient as $ingredient) <!--afegir img a icone-->
        {{ $ingredient->ingredient_nom }}
    @endforeach
    <h3> Descripció </h3>
    <p> {{ $plat->descripcio }} </p>

@endforeach


@include('layouts.footer')
@include('includes.page_tail')