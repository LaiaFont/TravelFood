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
        <h3> {{__("Ingredients") }} </h3>
        <div class="row">
        @foreach ($plat->ingredient as $ingredient) <!--afegir img a icone-->
            @foreach($icons["icons"] as $icon)
                @if ($ingredient->categoria_id == $icon->id)
                <div class="col-lg-2">
                    @if ($icon->categoria_nom == 'Carn')
                        <img src="{{ asset('/images/icons/carn.png') }}">
                    @elseif ($icon->categoria_nom == 'Verdura')
                        <img src="{{ asset('/images/icons/verdura.png') }}">
                    @elseif ($icon->categoria_nom == 'Cereals')
                        <img src="{{ asset('/images/icons/cereals.png') }}">
                    @elseif ($icon->categoria_nom == 'Fruits Secs')
                        <img src="{{ asset('/images/icons/fruits_secs.png') }}">
                    @elseif ($icon->categoria_nom == 'Làctics')
                        <img src="{{ asset('/images/icons/lactics.png') }}">
                    @elseif ($icon->categoria_nom == 'Llegums')
                        <img src="{{ asset('/images/icons/llegums.png') }}">
                    @elseif ($icon->categoria_nom == 'Marisc')
                        <img src="{{ asset('/images/icons/marisc.png') }}">
                    @elseif ($icon->categoria_nom == 'Condiments')
                        <img src="{{ asset('/images/icons/condiments.png') }}">
                    @elseif ($icon->categoria_nom == 'Líquids')
                        <img src="{{ asset('/images/icons/liquids.png') }}">
                    @endif
                    
                    <p class="ingredient"> {{__($ingredient->ingredient_nom) }} </p>
                </div>
                @endif
            @endforeach
        @endforeach
            </div>
        <h3> {{__("Descripció") }} </h3>
        <p> {{ $plat->descripcio }} </p>
    </div>
@endforeach


@include('layouts.footer')
@include('includes.page_tail')