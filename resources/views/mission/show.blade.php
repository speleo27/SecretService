@extends('layouts.app')

@section('content')
    <h1 class="text-center">Mission : {{$mission->title}}</h1>

    <ul>
        <li>description : {{$mission->description}}</li>
        <li> Pays : {{$mission->countries->country_name}}</li>
        <li>Type de mission : {{$mission->mission_types->type_name}}</li>
        <li>Agent affecter:</li>
    </ul>

@endsection
