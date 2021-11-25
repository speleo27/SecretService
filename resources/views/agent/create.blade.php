@extends('layouts.app')
@section("content")
    <div class="container">
        <form class="w-full max-w-lg">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Prénom
                    </label>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Noms
                    </label>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                       Date de naissance
                    </label>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="relative">
                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                       @foreach($nationality as $nat)
                        <option>{{$nat->nationality_name}}</option>
                       @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn bg-blue-600">Envoyer</button>
            <button class="bg-red-600">Annuler</button>
        </form>
    </div>


@endsection
