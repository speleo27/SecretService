@extends('layouts.app')
@section("content")

    <h1 class="text-center font-bold text-dark-600 uppercase">Liste des agents </h1>
    <div class="container">
        <x-Button color= blue,
                  textColor=white,
                  title="Ajouter un agent "/>=
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
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach($contacts as $contact)

                        <tr class="text-gray-700">

                            <td class="px-4 py-3 border"><a href="{{route("contact.show",$contact->id)}}">{{$contact->contact_firstname}}</a></td>
                            <td class="px-4 py-3 border">{{$contact->contact_lastname}}</td>
                            <td class="px-4 py-3 border">{{Carbon\Carbon::parse($contact->contact_birthday)->format('d m Y')}}</td>
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

