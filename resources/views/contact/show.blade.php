@extends('layouts.app')

@section('content')
    <h1 class="text-center">Carte d'identité de l'agent {{$contact->agent_firstname}} {{$contact->agent_lastname}}</h1>

    <ul>
        <li>Date de naissance : {{Carbon\Carbon::parse($contact->agent_birthday)->format('d m Y')}}</li>
        <li>Nationalité : {{$contact->nationality->nationality_name}}</li>
        <li>Nom de code : {{$contact->contact_pseudo}}</li>
        </ul>
    </ul>

@endsection
