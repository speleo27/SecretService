@extends('layouts.app')

@section('content')
    <h1 class="text-center">Carte d'identité de la planque {{$safeHouse->safeHouse_address}} {{$safeHouse->country->country_name}}</h1>

    <ul>
        <li>type:{{$safeHouse->type->safe_house_type_name}}</li>
        <li>digit: {{$safeHouse->digit}}</li>
    </ul>

@endsection
