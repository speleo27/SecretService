@extends('layouts.app')
@section("content")
    <h1 class="text-center font-bold text-dark-600 uppercase">Liste des cibles </h1>
    <div class="container">
        <a href="{{route("target.create")}}" class="bg-blue-600 text-center text-white px-3 py-3 border-solid rounded">Ajouter agent</a>
    </div>
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full" id="agents">
                    <thead>
                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="text-center">Prénom</th>
                        <th class="text-center">Nom</th>
                        <th class="text-center">Date de naissance</th>
                        <th class="text-center">Nom de code</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach($targets as $target)
                        <tr class="text-gray-700">

                            <td class="px-4 py-3 border text-center"><a href="{{route("target.show",$target->id)}}">{{$target->target_firstname}}</a></td>
                            <td class="px-4 py-3 border text-center">{{$target->target_lastname}}</td>
                            <td class="px-4 py-3 border text-center">{{Carbon\Carbon::parse($target->target_birthday)->format('d m Y')}}</td>
                            <td class="px-4 py-3 border text-center">{{$target->target_pseudo}}</td>
                            <td class="px-4 py-3 border text-center"><a href="#" class="bg-green-600 text-center text-white px-3 py-3 border-solid rounded mr-3">Modifier</a><a href="#" class="bg-red-600 text-center text-white px-3 py-3 border-solid rounded">Supprimer</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                {{$targets-> links()}}
            </div>
        </div>
    </section>

@endsection

