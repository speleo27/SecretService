@extends('layouts.app')
@section("content")
    <h1 class="text-center font-bold text-dark-600 uppercase">Créer un nouvel agent</h1>
    <div class="container">
        <form class="max-w-5xl mx-auto" method="post">
            @csrf
            <div class="grid grid-cols-2 gap-6 ">
                <div class="text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Prénom
                    </label>
                    <input type="text" class="w-full bg-gray-200 border-solid rounded" name="agent_firstname"/>
                </div>
                <div class="text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Noms
                    </label>
                    <input type="text" class="w-full bg-gray-200 border-solid rounded" name="agent_lastname"/>
                </div>
            </div>
            <div class="text-center">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-birthday">
                   Date de naissance
                </label>
                <input type="date" class="w-full bg-gray-200 border-solid rounded" name="agent_birthday"/>
            </div>
            <div class="py-4">
                <select name="nationality_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-nationality">
                   @foreach($nationality as $nat)
                    <option value="{{$nat->id}}">{{$nat->nationality_name}}</option>
                   @endforeach
                </select>
            </div>
            <div class="block">
                <span class="text-gray-700">Specialitées:</span>
                <div class="mt-2">
                    <div >
                        <label class="inline-flex items-center">
                            @foreach($specialities as $spec)
                            <input type="checkbox" class="form-checkbox " name="speciality[]" />
                            <span class="ml-2 mr-2" value="{{$spec->id}}">{{$spec->speciality_name}}</span>
                            @endforeach
                        </label>
                    </div>
                </div>
            </div>
            <div class="w-full text-center">
                <button type="submit" class="btn bg-blue-600 border-solid rounded px-3 py-2">Envoyer</button>
                <button class="bg-red-600 border-solid rounded px-3 py-2">Annuler</button>
            </div>
        </form>
    </div>


@endsection
