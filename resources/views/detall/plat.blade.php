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
        <div class="row">
        @foreach ($plat->ingredient as $ingredient) <!--afegir img a icone-->
            @foreach($icons["icons"] as $icon)
                @if ($ingredient->categoria_id == $icon->id)
                <div class="col-sm">
                    <img src="{{ $icon->imatge_url }}">
                    <p> {{ $ingredient->ingredient_nom }} </p>
                </div>
                @endif
            @endforeach
        @endforeach
            </div>
        <h3> Descripció </h3>
        <p> {{ $plat->descripcio }} </p>
    </div>
@endforeach


@include('layouts.footer')
@include('includes.page_tail')