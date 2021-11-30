
@extends('layouts.app')
@section("content")
    <h1 class="text-center font-bold text-dark-600 uppercase">Mettre à jour le contact {{$contact->contact_firstname}} {{$contact->contact_lastname}}</h1>
    <div class="container mx-auto ">

        <form class="max-w-5xl mx-auto" method="post">
            @csrf
            @method('PATCH')
            <div class="grid grid-cols-2 gap-6">

                <div class="text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-first-name">
                        Prénom
                    </label>
                    <input type="text" class="w-full bg-gray-200 border-solid rounded" disabled name="contact_firstname" value="{{$contact->contact_firstname}}"/>
                </div>
                <div class=" text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-last-name">
                        Noms
                    </label>
                    <input type="text" class="w-full bg-gray-200 border-solid rounded" name="contact_lastname" disabled value="{{$contact->contact_lastname}}"/>
                </div>

                <div class=" text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-password">
                        Date de naissance
                    </label>
                    <input type="date" class="w-full bg-gray-200 border-solid rounded" name="contact_birthday" value="{{date('Y-m-d',strtotime($contact->contact_birthday))}}" disabled/>
                </div>
                <div class=" text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Pseudo
                    </label>
                    <input type="text" class="w-full bg-gray-200 border-solid rounded" name="contact_pseudo" value="{{$contact->contact_pseudo}}"/>
                </div>

            </div>
            <div class="  py-4">
                <select name="nationality" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option value="{{$contact->nationality->nationality_id}}">{{$contact->nationality->nationality_name}}</option>
                    @foreach($nationality as $nat)
                        <option  value="{{$nat->id}}">{{$nat->nationality_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-full text-center">
                <button type="submit" class="btn bg-blue-600 border-solid rounded px-3 py-2 text-white hover:bg-blue-700">Envoyer</button>
                <button class="bg-red-600 border-solid rounded px-3 py-2 text-white hover:bg-red-700" type="reset" id="delete">Annuler</button>
            </div>
        </form>
    </div>
    </div>


@endsection




