<x-jury-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between p-4">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Liste des candidats
            </h2>
            <a href=" {{route('candidats.create')}} " class="mr-30 p-2 bg-blue-400 rounded-lg hover:bg-blue-900 hover:text-white">Ajouter un candidat</a>
        </div>
        
    </x-slot>
    
    <div class="flex items-center p-3 justify-between max-w-7xl mx-auto mt-4 bg-gray-200 border-b border-blue-800 rounded-lg shadow">
        <div class="flex">
            <a href=" {{route('form-candidats-excel')}} " class="mr-10 p-2 w-3xl bg-blue-500 rounded-lg hover:bg-blue-900 hover:text-white">Importer la liste Excel</a>
            <a href=" {{route('candidats-to-excel')}} " class="mr-10 p-2 w-3xl bg-blue-500 rounded-lg hover:bg-blue-900 hover:text-white">Exporter vers Excel</a>
        </div>
    </div>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <livewire:candidats-table />
                </div>
            </div>
        </div>
    </div>

</x-jury-layout>