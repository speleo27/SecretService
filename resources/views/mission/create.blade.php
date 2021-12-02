@extends('layouts.app')
@section("content")
    <h1 class="text-center font-bold text-dark-600 uppercase">Créer un nouveau contact</h1>
    <div class="container mx-auto ">
        <form class="max-w-5xl mx-auto" method="post">
            @csrf
            <div class="grid grid-cols-2 gap-6">
                <div class="text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-title">
                        Titre
                    </label>
                    <input type="text" class="w-full bg-gray-200 border-solid rounded" name="title"/>
                </div>
                <div class=" text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-description">
                        Description
                    </label>
                    <textarea  class="w-full bg-gray-200 border-solid rounded" name="description"/>
                </div>
                <div class="  py-4">
                    <select name="country_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        @foreach($country as $count)
                            <option  value="{{$count->id}}">{{$count->country_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="  py-4">
                    <select name="type_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        @foreach($type as $type)
                            <option  value="{{$type->id}}">{{$type->type_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="  py-4">
                    <select name="status_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        @foreach($status as $stat)
                            <option  value="{{$stat->id}}">{{$stat->status_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="  py-4">
                    <select name="speciality_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        @foreach($speciality as $spe)
                            <option  value="{{$spe->id}}">{{$spe->speciality_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-date_de_debut">
                        Date de début de mission
                    </label>
                    <input type="date" class="w-full bg-gray-200 border-solid rounded" name="date_de_debut"/>
                </div>
                <div class=" text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-date_de_fin">
                        Date de fin de mission
                    </label>
                    <input type="date" class="w-full bg-gray-200 border-solid rounded" name="date_de_fin"/>
                </div>
            <div class="w-full text-center">
                <button type="submit" class="btn bg-blue-600 border-solid rounded px-3 py-2 text-white hover:bg-blue-700">Envoyer</button>
                <button class="bg-red-600 border-solid rounded px-3 py-2 text-white hover:bg-red-700" type="reset" id="delete">Annuler</button>
            </div>
        </form>
    </div>
    </div>


@endsection





