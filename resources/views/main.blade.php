@extends('layouts.header')

@section('content')
    <section>
        <p>Prova vista</p>
        @foreach ($paisos as $pais)
            <p> {{ $pais }} </p>
        @endforeach
    </section>