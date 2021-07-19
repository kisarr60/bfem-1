<x-jury-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Importer la liste des candidats
        </h2>
    </x-slot>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <form class="flex" method="POST" action="{{ route('form-candidats-excel') }}" enctype="multipart/form-data">
                                @csrf

                            <div class="p-6 bg-gray-100 w-full border-b border-gray-200">
                                
                                <label class="w-1/5 mr-20 p-3 bg-white rounded-lg" for="file">Choisir un fichier Excel</label>
                                <input type="file" name="file" class="w-2/5">

                                <x-button>
                                    <div>Envoyez</div>
                                </x-button>

                                <button type="submit" class="w-1/5 bg-blue-500 hover:bg-blue-800 hover:text-white font-bold p-2 rounded-lg ml-14">
                                    Ajouter 
                                </button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-jury-layout>