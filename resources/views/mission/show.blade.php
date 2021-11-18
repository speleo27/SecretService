@extends('layouts.app')

@section('content')
    <h1 class="text-center">Mission : {{$mission->title}}</h1>

    <ul>
        <li>Description : {{$mission->description}}</li>
        <li>Pays : {{$mission->country->country_name}}</li>
        <li>Type de mission : {{$mission_infos->type_name}}</li>
        <li>Agent affecter:{{$mission_infos->agent_immat}}</li>
        <li>Contact de la mission : {{$mission_infos->contact_pseudo}}</li>
        <li>Cibles de la mission : {{$mission_infos->target_pseudo}}</li>
        <li>Status de la mission : {{$mission->status->status_name}}</li>
    </ul>

@endsection
