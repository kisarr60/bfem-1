<x-jury-layout>
     <x-slot name="header">
        <div class="flex items-center justify-between p-4">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Disciplines
            </h2>
            <a href=" {{route('disciplines.create')}} " class="mr-30 p-2 bg-blue-400 rounded-lg hover:bg-blue-900 hover:text-white">Ajouter une discipline</a>
        </div>
        
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-3 gap-4">
                        @foreach($disciplines as $discipline)
                            <div class="p-4 bg-gray-100 shadow-md rounded-xl">
                                <div class="text-left font-semibold text-xl"><b><span> {{ $discipline->name }}</span></b></div>
                                    
                                    <div class="grid grid-cols-2 gap-1">
                                        <span class="text-right mr-3">SLUG</span>
                                        <span> {{ $discipline->slug }} </span>
                                    </div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <span class="text-right mr-3">Coefficient</span>
                                        <span> {{ $discipline->coef }} </span>
                                    </div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <span class="text-right mr-3">Ajoutée le</span>
                                        <span> {{ $discipline->created_at->format('d/m/Y') }} </span>
                                    </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-jury-layout>