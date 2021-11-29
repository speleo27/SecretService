@extends('layouts.app')
@section("content")
    <h1 class="text-center font-bold text-dark-600 uppercase">Créer un nouvel agent</h1>
    <div class="container">
        <div class="items-center">
            <form class="w-full max-w-lg">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6 ">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                           adresse
                        </label>
                        <input type="text" class="bg-gray-200 border-solid rounded" name="safeHouse_address"/>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            Code d'accès
                        </label>
                        <input type="number" class="bg-gray-200 border-solid rounded" name="agent_lastname"/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">

                            @foreach($types as $type)
                                <option name="type" value="{{$type->id}}">{{$type->safe_house-type_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">

                            @foreach($country as $coun)
                                <option name="nationality" value="{{$coun->id}}">{{$coun->country_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn bg-blue-600 border-solid rounded px-3 py-2">Envoyer</button>
                <button class="bg-red-600 border-solid rounded px-3 py-2">Annuler</button>
            </form>
        </div>
    </div>


@endsection

