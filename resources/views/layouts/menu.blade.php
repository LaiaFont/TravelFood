<nav class="navbar navbar-expand-lg navbar-light">
    <h2>Menú</h2>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: space-between;">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            @foreach ($data['continents'] as $continent) 
            <li class="nav-item dropdown">
                <a class="btn btn-lg btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown">
                    {{ $continent }}
                </a>
                <ul class = "dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach ($data['paisos'] as $pais)
                        @if ($pais->continent == $continent)
                            <li><a class="dropdown-item" href="{{ route('detall',[$pais->id])  }}"> {{ $pais->pais_nom }} </a></li>
                        @endif
                    @endforeach
                </ul>       
            </li>        
            @endforeach
        </ul>
        <span class="navbar-text" style="display: flex;">
            <li class="dropdown" style="list-style: none;">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ App::getlocale() }}
                    <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('lang/ca')}}">Català</a>
                    <a class="dropdown-item" href="{{url('lang/es')}}">Español</a>
                    <a class="dropdown-item" href="{{url('lang/en')}}">English</a>
                </div>
            </li>
        
            <a href="/public/admin"><img class="login-img" src="{{ asset("images/login.png") }}"></a>
        </span>
    </div>
</nav>