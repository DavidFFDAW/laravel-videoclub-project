@extends('layouts.master')

@section('title',"Show ".$pelicula['title'])

@section('content')
<div class="row">
    <div class="col-sm-4">
        <img src="{{ $pelicula['poster'] }}">
    </div>
    <?= $rented = $pelicula['rented']; ?>
    <div class="col-sm-8">
        <h3>{{ $pelicula['title'] }}</h3>
        <h5>Año: {{ $pelicula['year'] }}</h5>
        <h5>Director: {{ $pelicula['director'] }}</h5>
        <br>
        <p><strong>Resumen: </strong>{{ $pelicula['synopsis'] }}</p>
        <br>
        <p><strong>Estado: </strong>{{ ($rented) ? 'Pelicula actualmente disponible' : 'Pelicula actualmente alquilada' }}</p>
        <br>
        <button type="button" class="{{ ($rented) ? 'btn btn-danger' : 'btn btn-info' }}">{{ ($rented) ? 'Devolver pelicula' : 'Alquilar pelicula' }}</button>
        <button type="button" class="btn btn-warning">Editar pelicula</button>
        <a type="button" class="btn btn-secondary" href="/catalog/">Volver al catalogo</a>
    </div>
</div>

@stop