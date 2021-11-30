@extends('layouts.app')
@section("content")

    <h1 class="text-center font-bold text-dark-600 uppercase">Liste des Contacts </h1>
    <div class="container">
        <a href="{{route("contact.create")}}" class="bg-blue-600 text-center text-white px-3 py-3 border-solid rounded">Ajouter contact</a>
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
                        <th class="text-center" style="width:20%">Action</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach($contacts as $contact)

                        <tr class="text-gray-700">

                            <td class="px-4 py-3 border text-center"><a href="{{route("contact.show",$contact->id)}}">{{$contact->contact_firstname}}</a></td>
                            <td class="px-4 py-3 border text-center">{{$contact->contact_lastname}}</td>
                            <td class="px-4 py-3 border text-center">{{Carbon\Carbon::parse($contact->contact_birthday)->format('d m Y')}}</td>
                            <td class="px-4 py-3 border text-center flex flex-row gap-3 justify-center"><a href="{{route("contact.edit", $contact->id)}}" class="bg-green-600 text-center text-white px-3 py-3 border-solid rounded ">Modifier</a>
                                <form action="{{route("contact.destroy",$contact->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-center text-white px-3 py-3 border-solid rounded">Supprimer</button>
                                </form></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                {{$contacts-> links()}}
            </div>
        </div>
    </section>

@endsection

