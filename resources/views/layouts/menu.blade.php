<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <h2 class="navbar-brand">Continents</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
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
        </div>
    </div>
    <a href="/admin" ><img class="login-img" src="/images/login.png"></a>
</nav>