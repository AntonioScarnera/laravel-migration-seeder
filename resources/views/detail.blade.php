@extends('layout.default')


@section('pageTitle', 'Dettagli Viaggio')

@section('mainContent')
<main>
    <h1 class="text-center">
        {{$destination->locality}}
    </h1>
    <h2>
        Informazioni di base:
    </h2>
    <ul>
        <li>Nazione località: {{$destination->country}}</li>
        <li>Prezzo viaggio: {{$destination->price}}</li>
    </ul>
    <img src="{{$destination->image}}">
</main>
    
@endsection
<style>
    main{
        height: 90vh;
    }
</style>