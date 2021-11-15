@extends('layouts.app')
@section("content")
    <h1>Liste des agents </h1>

        @foreach($agents as $agent)
            <x-callout
            $agent_immat="{{$agent->agent_immat}}"
            $agent_firstname="{{$agent->agent_firstname}}"
            $agent_lastname="{{$agent->agent_lastname}}"
            $agent_birthday="{{$agent->agent_birthday}}"
            />
        @endforeach
@endsection
