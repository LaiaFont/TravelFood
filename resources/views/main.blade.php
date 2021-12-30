@include('layouts.header')

@section('content')
    <section>
        @foreach ($continents as $continent) 
            <h2>{{ $continent }}</h2>
            <ul>
            @foreach ($paisos as $pais)
                @if ($continent == $pais->continent)
                    <li> {{ $pais->pais_nom }} </li>
                @endif
            @endforeach
            </ul>
        @endforeach
    </section>

@include('layouts.footer')