@extends('layouts.app')

@section('content')
    <h1 class="text-center">Mission : {{$mission->title}}</h1>

    <ul>
        <li class="list-disc">Description : {{$mission->description}}</li>
        <li class="list-disc">Pays : {{$mission->country->country_name}}</li>
        <li class="list-disc">Type de mission : {{$mission->type->type_name}}</li>

        <li class="list-disc">Agents affectés
            <ul>
                @foreach($mission->agents->unique("id") as $agent)

                        <li><a href="{{route("agent.show",$agent->id)}}">{{$agent->agent_immat}}</a></li>
                @endforeach
            </ul>
        </li>
        <li class="list-disc">Contact de la mission :<ul>
        @foreach($mission->contacts->unique("id") as $contact)
                    <li><a href="{{route("contact.show",$contact->id)}}"> {{$contact->contact_pseudo}}</a></li>
        @endforeach
            </ul>
        </li>
        <li class="list-disc">Cibles de la mission :<ul>
        @foreach($mission->targets->unique("id") as $target)
                    <li><a href="{{route("target.show",$target->id)}}"> {{$target->target_pseudo}}</a></li>
        @endforeach
        </ul></li>
            <li class="list-disc">Status de la mission : {{$mission->status->status_name}}</li>
        <li class="list-disc">Planques:<ul>
                @forelse($mission->safehouses as $safeHouse)
                    <li><a href="{{route("safe_house.show",$safeHouse->id)}}">{{ $safeHouse->safeHouse_address}} {{$safeHouse->country->country_name}}</a></li>
       @empty
                    <li> Il n'y a pas de planques pour cette mission</li>
        @endforelse
            </ul></li>
    </ul>

@endsection
