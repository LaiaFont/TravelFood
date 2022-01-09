@include('includes.page_head')

@include('layouts.header')
@include('layouts.menu')

@section('content')
<div class="card-group mt-3">
    <div class="card" style="width: 18rem;">
        <a href=""> <!--ruta que anira a detall plat-->
            <img class="card-img" src="" alt="Card image">
            <div class="card-body">
                <h5 class="card-title">{{ $plats->nom }}</h5>
            </div>
        </a>
    </div>
</div>

@include('layouts.footer')
@include('includes.page_tail')