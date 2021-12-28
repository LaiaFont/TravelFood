@include('layouts.header')

@section('content')
    <section>
        <p>Prova vista</p>
        @foreach ($paisos as $pais) 
            <h2>{{ $pais->continent}}</h2>
            <!--<p> {{ $pais->pais_nom }} </p>-->
        @endforeach
    </section>

@include('layouts.footer')