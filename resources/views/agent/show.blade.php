@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Carte d'identité de l'agent {{$agent->agent_firstname}} {{$agent->agent_lastname}}</h1>

        <ul>
            <li>Date de naissance : {{Carbon\Carbon::parse($agent->agent_birthday)->format('d m Y')}}</li>
            <li>Nationalité : {{$agent->nationality->nationality_name}}</li>
            <ul>Spécialitées : @foreach($agent->specialities as $spec)
                                   <li class="text-center">{{$spec->speciality_name}}</li>
                                   @endforeach
            </ul>
        </ul>
        <div class="container flex">
            <a href="{{route("agent.edit",$agent->id)}}" class="bg-blue-600 border-solid rounded text-white px-3 py-2">Mettre à jour</a>

        </div>
    </div>
@endsection
