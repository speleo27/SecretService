@extends('layouts.app')

@section("content")
    <h1 class="text-center font-bold text-dark-600 uppercase">Liste des Missions </h1>
    <div class="container">
        <a href="#" class="bg-blue-600 text-center text-white px-3 py-3 border-solid rounded">Ajouter une mission</a>
    </div>
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full" id="agents">
                    <thead>
                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">

                        <th class="text-center">Titre de la mission</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Status de la mission</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach($missions as $mission)

                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border text-center"><a href="{{route("mission.show",$mission->id)}}">{{$mission->title}}</a></td>
                            <td class="px-4 py-3 border text-center">{{$mission->description}}</td>
                            <td class="px-4 py-3 border text-center">{{$mission->status->status_name}}</td>
                            <td class="px-4 py-3 border text-center"><a href="#" class="bg-red-600 text-center text-white px-3 py-3 border-solid rounded">Supprimer</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                {{$missions-> links()}}
            </div>
        </div>
    </section>

@endsection

