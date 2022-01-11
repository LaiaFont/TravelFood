@include('includes.page_head')

@include('layouts.header')
@include('layouts.menu')

@section('content')
@foreach ($plats as $plat)
    <img class="img-fluid plat" src="{{ $plat->imatge_url }}">
    <h1> {{ $plat->nom }} </h1>
    <h3> Ingredients </h3>
    @foreach ($plat->ingredient as $ingredient) <!--afegir img a icone-->
        {{ $ingredient->ingredient_nom }}
    @endforeach
    <h3> Descripció </h3>
    <p> {{ $plat->descripcio }} </p>

@endforeach


@include('layouts.footer')
@include('includes.page_tail')