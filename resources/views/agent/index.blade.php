@extends('layouts.app')
@section("content")
    <h1 class="text-center font-bold text-dark-600 uppercase">Liste des agents </h1>

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

                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach($agents as $agent)
                    <tr class="text-gray-700">

                        <td class="px-4 py-3 border"><a href="{{route('agent.show', $agent}}">{{$agent->agent_immat}}</a></td>
                        <td class="px-4 py-3 border">{{$agent->agent_firstname}}</td>
                        <td class="px-4 py-3 border">{{$agent->agent_lastname}}</td>
                        <td class="px-4 py-3 border">{{$agent->agent_birthday}}</td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script>
        $('#agents').DataTable({
            language: {
                processing: "Traitement en cours...",
                search: "Rechercher&nbsp;:",
                lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
                info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                infoPostFix: "",
                loadingRecords: "Chargement en cours...",
                zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
                emptyTable: "Aucune donnée disponible dans le tableau",
                paginate: {
                    first: "Premier",
                    previous: "Pr&eacute;c&eacute;dent",
                    next: "Suivant",
                    last: "Dernier"
                },
                aria: {
                    sortAscending: ": activer pour trier la colonne par ordre croissant",
                    sortDescending: ": activer pour trier la colonne par ordre décroissant"
                }
            }
        });



    </script>

@endsection
