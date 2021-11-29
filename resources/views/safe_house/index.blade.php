@extends('layouts.app')
@section("content")
    <h1 class="text-center font-bold text-dark-600 uppercase">Liste des planques</h1>
    <div class="container">
        <a href="{{route("safe_house.create")}}" class="bg-blue-600 text-center text-white px-3 py-3 border-solid rounded">Ajouter agent</a>
    </div>
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full" id="agents">
                    <thead>
                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="text-center">adresse</th>
                        <th class="text-center">pays</th>
                        <th class="text-center">type</th>
                        <th class="text-center">code</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach($safeHouse as $safe)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border text-center"><a href="{{route("safe_house.show",$safe->id)}}">{{$safe->safeHouse_address}}</a></td>
                            <td class="px-4 py-3 border text-center">{{$safe->country->country_name}}</td>
                            <td class="px-4 py-3 border text-center">{{$safe->safe_house_type->safe_house_type_name}}</td>
                            <td class="px-4 py-3 border text-center">{{$safe->digit}}</td>
                            <td class="px-4 py-3 border text-center"><a href="#" class="bg-green-600 text-center text-white px-3 py-3 border-solid rounded mr-3">Modifier</a><a href="#" class="bg-red-600 text-center text-white px-3 py-3 border-solid rounded">Supprimer</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                {{$safeHouse-> links()}}
            </div>
        </div>
    </section>


@endsection

