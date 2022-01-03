@include('includes.page_head')

@include('layouts.header')

@section('content')
    <div class="card-deck">
        @foreach ($continents as $continent) 
                
                    <div class="card text-center" style="width: 18rem;">
                        @if ($continent == "Àfrica")
                            <!--<img class="card-img-top" src="https://i.pinimg.com/originals/30/c6/ef/30c6effe70e2baf6e07cdba0c87934a6.gif" alt="Card image cap">-->
                        @elseif ($continent == "Amèrica")
                            <!--<img class="card-img-top" src="https://shop.gfk-geomarketing.de/media/catalog/product/cache/7193213495034ce484d0f8078f0d4fd0/a/m/america_outline_large.png" alt="Card image cap">-->
                        @elseif ($continent == "Àsia")
                            <!--<img class="card-img-top" src="https://i.pinimg.com/564x/ee/6b/32/ee6b32bd47274709f42b7bb8c89b57dd--asia-continent-felt-boards.jpg" alt="Card image cap">-->
                        @elseif ($continent == "Europa")
                            <!--<img class="card-img-top" src="https://i.pinimg.com/originals/e6/ad/6e/e6ad6ed735972d208ccf824959d7ca44.gif" alt="Card image cap">-->
                        @elseif ($continent == "Oceania")
                            <!--<img class="card-img-top" src="https://www.enchantedlearning.com/bwbig/australia.png" alt="Card image cap">-->
                        @endif
                        <div class="card-body flex-fill flex-column dropdown">
                            <h5 class="card-footer mt-auto">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ $continent }}
                                    </button>
                                    <div class = "dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a> $continent </a>
                                    </div>
                            </h5>
                        </div>
                    </div>
               
        @endforeach
    </div>
    

@include('layouts.footer')
@include('includes.page_tail')