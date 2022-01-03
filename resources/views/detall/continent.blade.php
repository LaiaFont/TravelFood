@include('includes.page_head')

@include('layouts.header')

@section('content')
    <div class="content">
        @foreach ($paisos as $pais)
            <p>{{ $pais->pais_nom }}</p>
        @endforeach
    </div>

@include('layouts.footer')

@include('includes.page_tail')