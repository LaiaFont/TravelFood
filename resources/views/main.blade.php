@include('includes.page_head')

@include('layouts.header')

@section('content')
    @foreach ($continents as $continent) 
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ $continent }}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach ($paisos as $pais)
                @if ($continent == $pais->continent)
                    <a class="dropdown-item" href="#"> {{ $pais->pais_nom }} </a>
                @endif
             @endforeach
        </div> 
    </div>
    @endforeach

@include('layouts.footer')
@include('includes.page_tail')