@extends('layouts.app')
@section("content")
    <h1 class="text-center font-bold text-dark-600 uppercase">Créer une nouvelle mission</h1>
    <div class="container mx-auto mt-3">
        <form class="max-w-5xl mx-auto" method="post">
            @csrf
            <div class="grid grid-cols-2 gap-6">
                <div class="text-center">
                    <label class=" block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-title">
                        Titre
                    </label>
                    <input type="text" class="py-3 w-full bg-gray-200 border-solid rounded" name="title"/>
                </div>
                <div class="text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-description">
                        Description
                    </label>
                    <textarea  class="w-full bg-gray-200 border-solid rounded" name="description"></textarea>
                </div>
                <div class=" py-4 text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-target">
                        Cible de la mission
                    </label>
                    <select multiple name="target_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="target">
                        @foreach($targets as $target)
                            <option value="{{$target->id}}">{{$target->target_firstname}} {{$target->target_lastname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" py-4 text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-contact">
                        Contact de la mission
                    </label>
                    <select multiple name="contact_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="contact">
                        @foreach($contacts as $contact)
                            <option  value="{{$contact->id}}">{{$contact->contact_firstname}} {{$contact->contact_lastname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" py-4 text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-country">
                        Pays de la mission
                    </label>
                    <select name="country_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        @foreach($countries as $count)
                            <option  value="{{$count->id}}">{{$count->country_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center py-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-type">
                        Type de mission
                    </label>
                    <select name="type_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        @foreach($type as $type)
                            <option  value="{{$type->id}}">{{$type->type_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center py-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-status">
                        Statut de la mission
                    </label>
                    <select name="status_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        @foreach($statuses as $stat)
                            <option  value="{{$stat->id}}">{{$stat->status_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-speciality">
                        Spécialité nécessaire pour la mission
                    </label>
                    <select name="speciality_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        @foreach($specialities as $spe)
                            <option  value="{{$spe->id}}">{{$spe->speciality_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" py-4 text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-contact">
                        Agent de la mission
                    </label>
                    <select multiple name="agent_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="agent">
                        @foreach($agents as $agent)
                            <option  value="{{$agent->id}}">{{$agent->agent_firstname}} {{$agent->agent_lastname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" py-4 text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-contact">
                        Planque de la mission
                    </label>
                    <select  name="safeHouse_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="safeHouse">
                        @foreach($safeHouses as $safeHouse)
                            <option  value="{{$safeHouse->id}}">{{$safeHouse->safeHouse_address}} {{$safeHouse->safeHouse_city}} {{$safeHouse->country->country_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-date_de_debut">
                        Date de début de mission
                    </label>
                    <input type="date" class="py-3 w-full bg-gray-200 border-solid rounded" name="date_de_debut"/>
                </div>
                <div class="text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-date_de_fin">
                        Date de fin de mission
                    </label>
                    <input type="date" class="py-3 w-full bg-gray-200 border-solid rounded" name="date_de_fin"/>
                </div>
            </div>
            <div class="w-full text-center mt-3">
                <button type="submit" class="btn bg-blue-600 border-solid rounded px-3 py-2 text-white hover:bg-blue-700">Envoyer</button>
                <button class="bg-red-600 border-solid rounded px-3 py-2 text-white hover:bg-red-700" type="reset" id="delete">Annuler</button>
            </div>
        </form>
    </div>
@endsection






