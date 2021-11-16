@extends('layouts.app')

@section('content')
    <h1 class="text-center">Carte d'identité de l'agent {{$agent->agent_firstname}} {{$agent->agent_lastname}}</h1>

    <ul>
        <li>Date de naissance : {{Carbon\Carbon::parse($agent->agent_birthday)->format('d m Y')}}</li>
        <li>Nationalité : {{$agent->nationality->nationality_name}}</li>
        <ul>Spécialitées : @foreach($agent->specialities as $spec)
                               <li>{{$spec->speciality_name}}</li>
                               @endforeach
        </ul>
    </ul>

@endsection
