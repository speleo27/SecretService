@extends('layouts.app')
@section("content")
    <h1 class="text-center font-bold text-dark-600 uppercase">Créer un nouveau contact</h1>
    <div class="container">
        <div class="items-center">
            <form class="w-full max-w-lg">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6 ">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Prénom
                        </label>
                        <input type="text" class="bg-gray-200 border-solid rounded" name="contact_firstname"/>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            Noms
                        </label>
                        <input type="text" class="bg-gray-200 border-solid rounded" name="contact_lastname"/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Date de naissance
                        </label>
                        <input type="date" class="bg-gray-200 border-solid rounded" name="contact-birthday"/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Pseudo
                        </label>
                        <input type="texte" class="bg-gray-200 border-solid rounded" name="contact_pseudo"/>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            @foreach($nationality as $nat)
                                <option name="nationality" value="{{$nat->nationality->id}}">{{$nat->nationality_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn bg-blue-600 border-solid rounded px-3 py-2">Envoyer</button>
                <button class="bg-red-600 border-solid rounded px-3 py-2" id="delete">Annuler</button>
            </form>
        </div>
    </div>


@endsection

