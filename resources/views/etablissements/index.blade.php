<x-jury-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between p-4">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Liste des Etablissements
            </h2>
            <a href=" {{ route('etablissements.create')}} " class="mr-30 p-2 bg-blue-400 rounded-lg hover:bg-blue-900 hover:text-white">Ajouter un établissement</a>
        </div>
        
    </x-slot>
        
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 shadow">
                    <div class="grid grid-cols-2 gap-4">
                        @forelse($etablissements as $etablissement)
                            <div class="p-4 bg-gray-100 shadow-md rounded-xl">
                                <div class="flex items-center justify-between text-left font-semibold text-xl">
                                    <span><b> {{ $etablissement->name }} </b></span>
                                    <span>
                                        <a class="bg-blue-500 py-1 px-2 rounded-lg" href="{{route('etablissements.edit', $etablissement->id) }}">
                                            Editer
                                        </a>
                                        <a class="bg-red-500 py-1 px-2 rounded-lg" href="{{route('etablissements.delete', $etablissement->id) }}">
                                            supprimer
                                        </a>
                                    </span>
                                    
                                </div>
                                    
                                <div class="grid grid-cols-2 gap-1">
                                    <span class="text-right mr-3">Statut de l'établissement</span>
                                    <span> {{ $etablissement->statut }} </span>
                                </div>
                                <div class="grid grid-cols-2 gap-1">
                                    <span class="text-right mr-3">Contact</span>
                                    <span> {{ $etablissement->contact }} </span>
                                </div>
                                <div class="grid grid-cols-2 gap-1">
                                    <span class="text-right mr-3">Ajoutée le</span>
                                    <span> {{ $etablissement->created_at->format('d/m/Y') }} </span>
                                </div>
                                <div class="grid grid-cols-2 gap-1 mt-2">
                                    <span class="text-right mr-3">Nombre de candidats inscrits</span>
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