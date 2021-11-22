@extends('layouts.app')

@section('content')
    <h1 class="text-center">Mission : {{$mission->title}}</h1>

    <ul>
        <li>Description : {{$mission->description}}</li>
        <li>Pays : {{$mission->country->country_name}}</li>
        <li>Type de mission : {{$mission->type->type_name}}</li>
        <li>Agent affecter:{{$mission->agent_mission->agent_immat}}</li>
        <li>Contact de la mission : {{$mission->contact_mission->contact_pseudo}}</li>
        <li>Cibles de la mission : {{$mission->mission_target->target_pseudo}}</li>
        <li>Status de la mission : {{$mission->status->status_name}}</li>
    </ul>

@endsection
