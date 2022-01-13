@include('includes.page_head')

@include('layouts.header')
@include('layouts.menu')

@section('content')
@foreach ($plats as $plat)
    <div class="img-container">
        <h1> {{ $plat->nom }} </h1>
        <img class="img plat" src="{{ $plat->imatge_url }}">
    </div>
    <div class="informacio">
        <h3> Ingredients </h3>
        @foreach ($plat->ingredient as $ingredient) <!--afegir img a icone-->
            <p> {{ $ingredient->ingredient_nom }} </p>
        @endforeach
        <h3> Descripció </h3>
        <p> {{ $plat->descripcio }} </p>
    </div>
@endforeach


@include('layouts.footer')
@include('includes.page_tail')