@extends('layouts.app')
@section("content")
    <h1 class="text-center font-bold text-dark-600 uppercase">Liste des agents </h1>
    <div class="container">
        <a href="{{route("agent.create")}}" class="bg-blue-600 text-center text-white px-3 py-3 border-solid rounded">Ajouter agent</a>
    </div>
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full" id="agents">
                    <thead>
                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="text-center">Matricule</th>
                        <th class="text-center">Prénom</th>
                        <th class="text-center">Nom</th>
                        <th class="text-center">Date de naissance</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach($agents as $agent)
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 border text-center"><a href="{{route("agent.show",$agent->id)}}">{{$agent->agent_immat}}</a></td>
                        <td class="px-4 py-3 border text-center">{{$agent->agent_firstname}}</td>
                        <td class="px-4 py-3 border text-center">{{$agent->agent_lastname}}</td>
                        <td class="px-4 py-3 border text-center">{{Carbon\Carbon::parse($agent->agent_birthday)->format('d m Y')}}</td>
                        <td class="px-4 py-3 border text-center"><a href="{{route("agent.edit", $agent->id)}}" class="bg-green-600 text-center text-white px-3 py-3 border-solid rounded mr-3">Modifier</a><a href="{{route("agent.destroy",$agent->id)}}" class="bg-red-600 text-center text-white px-3 py-3 border-solid rounded">Supprimer</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                {{$agents-> links()}}
            </div>
        </div>
    </section>

@endsection
