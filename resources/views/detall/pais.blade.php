@include('includes.page_head')

@include('layouts.header')
@include('layouts.menu')

@section('content')
<div class="card-group mt-3">
    @foreach ($ciutats as $ciutat)
        <div class="card" style="width: 18rem;">
            <a href="{{ route('ciutatplat',[$ciutat->pais_id, $ciutat->id]) }}">
                <img class="card-img" src="{{ $ciutat->imatge_url }}" alt="Card image">
                <div class="card-body">
                    <h5 class="card-title">{{ $ciutat->ciutat_nom }}</h5>
                </div>
            </a>
        </div>
    @endforeach
</div>

@include('layouts.footer')
@include('includes.page_tail')