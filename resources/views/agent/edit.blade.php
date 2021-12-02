
@extends('layouts.app')
@section("content")
    <h1 class="text-center font-bold text-dark-600 uppercase">Mettre à jour l'agent {{$agent->agent_firstname}} {{$agent->agent_lastname}}</h1>
    <div class="container mx-auto ">
        <form class="max-w-5xl mx-auto" method="post">
            @csrf
            @method('PATCH')
            <div class="grid grid-cols-2 gap-6">
                <div class="text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-first-name">
                        Prénom
                    </label>
                    <input type="text" class="w-full bg-gray-200 border-solid rounded" disabled name="agent_firstname" value="{{$agent->agent_firstname}}"/>
                </div>
                <div class=" text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-last-name">
                        Noms
                    </label>
                    <input type="text" class="w-full bg-gray-200 border-solid rounded" name="agent_lastname" disabled value="{{$agent->agent_lastname}}"/>
                </div>
                <div class=" text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-password">
                        Date de naissance
                    </label>
                    <input type="date" class="w-full bg-gray-200 border-solid rounded" name="agent_birthday" value="{{date('Y-m-d',strtotime($agent->agent_birthday))}}" disabled/>
                </div>
                <div class=" text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Matricule
                    </label>
                    <input type="text" class="w-full bg-gray-200 border-solid rounded" name="agent_immat" value="{{$agent->agent_immat}}" disabled/>
                </div>
            </div>
            <div class="  py-4">
                <select name="nationality_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option value="{{$agent->nationality_id}}">{{$agent->nationality->nationality_name}}</option>
                    @foreach($nationality as $nat)
                        <option  value="{{$nat->id}}">{{$nat->nationality_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="block">
                <span class="text-gray-700">Specialitées:</span>
                <div class="mt-2">
                    <div >
                        <label class="inline-flex items-center">
                            @foreach($specialities as $spec)
                                <input type="checkbox" class="form-checkbox " name="speciality[]" value="{{$spec->id}}"
                                       @if($agent->specialities->contains("id",$spec->id))
                                       checked
                                    @endif
                                />
                                <span class="ml-2 mr-2" >{{$spec->speciality_name}}</span>
                            @endforeach
                        </label>
                    </div>
                </div>
            </div>
            <div class="w-full text-center">
                <button type="submit" class="btn bg-blue-600 border-solid rounded px-3 py-2 text-white hover:bg-blue-700">Envoyer</button>
                <button class="bg-red-600 border-solid rounded px-3 py-2 text-white hover:bg-red-700" type="reset" id="delete">Annuler</button>
            </div>
        </form>
    </div>


@endsection





