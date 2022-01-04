@foreach ($ciutats as $ciutat)
    @if ($ciutat->pais_id == $id)
        {{ $ciutat->ciutat_nom }}
    @endif
@endforeach