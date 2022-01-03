@include('includes.page_head')

@include('layouts.header')

@section('content')
    <h2>
        {{ Route::current()->getName() }}
    </h2>
    <div class="content">
        @foreach ($paisos as $pais)
            @if ($pais->continent == Route::current()->getName())
                <p>{{ $pais->pais_nom }}</p>
            @endif
        @endforeach
    </div>

@include('layouts.footer')

@include('includes.page_tail')