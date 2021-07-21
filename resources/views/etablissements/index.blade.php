<x-jury-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between p-4">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Liste des Etablissements
            </h2>
            <a href=" {{ route('etablissements.create')}} " class="p-2 bg-blue-400 rounded-lg mr-30 hover:bg-blue-900 hover:text-white">Ajouter un établissement</a>
        </div>
        
    </x-slot>
        
    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 shadow">
                    <div class="grid grid-cols-2 gap-4">
                        @forelse($etablissements as $etablissement)
                            <div class="p-4 bg-gray-100 shadow-md rounded-xl">
                                <div class="flex items-center justify-between text-xl font-semibold text-left">
                                    <span><b> {{ $etablissement->name }} </b></span>
                                    <span>
                                        <a class="px-2 py-1 m-1 text-sm bg-blue-500 rounded-lg" href="{{route('etablissements.edit', $etablissement->id) }}">
                                            Editer
                                        </a>
                                        <a class="px-2 py-1 m-1 text-sm bg-red-500 rounded-lg" href="{{route('etablissements.destroy', $etablissement->id) }}">
                                            supprimer
                                        </a>
                                    </span>
                                    
                                </div>
                                    
                                <div class="grid grid-cols-2 gap-1">
                                    <span class="mr-3 text-right">Statut de l'établissement</span>
                                    <span> {{ $etablissement->statut }} </span>
                                </div>
                                <div class="grid grid-cols-2 gap-1">
                                    <span class="mr-3 text-right">Contact</span>
                                    <span> {{ $etablissement->contact }} </span>
                                </div>
                                <div class="grid grid-cols-2 gap-1">
                                    <span class="mr-3 text-right">Ajoutée le</span>
                                    <span> {{ $etablissement->created_at->format('d/m/Y') }} </span>
                                </div>
                                <div class="grid grid-cols-2 gap-1 mt-2">
                                    <span class="mr-3 text-right">Nombre de candidats inscrits</span>
                                    <span> <b>{{ $etablissement->candidats->count() }}</b> </span>
                                </div>
                                
                            </div>
                        @empty
                            <div class="w-full p-4 mx auto">Il n'a pas encore d'établissement saisi.</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-jury-layout>