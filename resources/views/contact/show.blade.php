@extends('layouts.app')

@section('content')
    <h1 class="text-center">Carte d'identit√© du contact {{$contact->contact_firstname}} {{$contact->contact_lastname}}</h1>

    <ul>
        <li>Date de naissance : {{Carbon\Carbon::parse($contact->agent_birthday)->format('d m Y')}}</li>
        <li>Nationalit√© : {{$contact->nationality->nationality_name}}</li>
        <li>Nom de code : {{$contact->contact_pseudo}}</li>
        <ul><li>mission affecter:</li>
        @foreach($contact->missions as $mission)
            <li>{{$mission-> title}}</li>
        @endforeach
    </ul>

@endsection
