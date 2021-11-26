@extends('layouts.app')

@section('content')
    <h1 class="text-center">Carte d'identité de la cible {{$target->target_firstname}} {{$target->target_lastname}}</h1>
<div class="container">
    <ul>
        <li>Date de naissance : {{Carbon\Carbon::parse($target->target_birthday)->format('d m Y')}}</li>
        <li>Nationalité : {{$target->nationality->nationality_name}}</li>
        <li>Nom de code : {{$target->target_pseudo}}</li>
    </ul>
</div>
<div class="container mt-2">
    <a href="#" class="btn bg-blue-600 text-center text-white border-solid rounded px-3 py-2">Mettre à jour</a>
</div>
@endsection
