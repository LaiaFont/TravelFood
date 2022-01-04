@include('includes.page_head')

@include('layouts.header')

@section('content')

@foreach ($ciutats as $ciutat)
    @if ($ciutat->pais_id == $id)
        {{ $ciutat->ciutat_nom }}
    @endif
@endforeach


@include('layouts.footer')
@include('includes.page_tail')