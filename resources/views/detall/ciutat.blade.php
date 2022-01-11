@include('includes.page_head')

@include('layouts.header')
@include('layouts.menu')

@section('content')
@foreach ($ciutats as $ciutat)
    <div class="row">
        <h1 class="col-lg-6">{{ $ciutat->ciutat_nom }}</h1>
    </div>
    <div class="row">
        @foreach ($ciutat->plat as $plat) 
            <div class="col-lg-6" style="width: 18rem;">
                <a href=""> <!--ruta que anira a detall plat-->
                    <img class="card-img" src="{{ $plat->imatge_url }}" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $plat->nom }}</h5>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endforeach

@include('layouts.footer')
@include('includes.page_tail')