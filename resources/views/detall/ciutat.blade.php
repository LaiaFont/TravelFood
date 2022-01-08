@include('includes.page_head')

@include('layouts.header')
@include('layouts.menu')

@section('content')
<div class="card-group mt-3">
    @foreach ($plats as $plat)
        <div class="card" style="width: 18rem;">
            <a href="/{{ $plat->id }}">
                <img class="card-img" src="{{ $plat->imatge_url }}" alt="Card image">
                <div class="card-body">
                    <h5 class="card-title">{{ $plat->plat_id }}</h5>
                </div>
            </a>
        </div>
    @endforeach
</div>

@include('layouts.footer')
@include('includes.page_tail')