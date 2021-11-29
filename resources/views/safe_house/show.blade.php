@extends('layouts.app')

@section('content')
    <h1 class="text-center">Carte d'identité de la planque {{$safeHouse->safeHouse_address}} {{$safeHouse->safeHouse_city}}</h1>

    <ul>
        <li>ville: {{$safeHouse->country->country_name}}</li>
        <li>type:{{$safeHouse->type->safe_house_type_name}}</li>
        <li>digit: {{$safeHouse->digit}}</li>
    </ul>
    <div class="container flex">
        <a href="#" class="bg-blue-600 border-solid rounded text-white px-3 py-2">Mettre à jour</a>
        <a href="#" class="bg-red-600 border-solid rounded text-white px-3 py-2">Supprimer</a>

    </div>
@endsection
