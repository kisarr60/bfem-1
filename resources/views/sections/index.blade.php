<x-jury-layout>
     <x-slot name="header">
        <div class="flex items-center justify-between p-4">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Les sections
            </h2>
            <a href=" {{route('sections.create')}} " class="mr-30 p-2 bg-blue-400 rounded-lg hover:bg-blue-900 hover:text-white">Ajouter une section</a>
        </div>
        
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-2 gap-4">
                        @foreach($sections as $section)
                            <div class="p-4 bg-gray-100 shadow-md rounded-xl">
                                <div class="text-left font-semibold text-xl"><b><span> {{ $section->title }}</span></b></div>
                                    
                                    <div class="grid grid-cols-2 gap-1">
                                        <span class="text-right mr-3">Premier tour</span>
                                        <span> {{ $section->admisPremierTour }} </span>
                                    </div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <span class="text-right mr-3">Repêchage</span>
                                        <span> {{ $section->repechagePremierTour }} </span>
                                    </div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <span class="text-right mr-3">Second Tour</span>
                                        <span> {{ $section->secondTour }} </span>
                                    </div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <span class="text-right mr-3">Admission au Second Tour</span>
                                        <span> {{ $section->admisSecondTour }} </span>
                                    </div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <span class="text-right mr-3">Repêchage au Second Tour</span>
                                        <span> {{ $section->repechageSecondTour }} </span>
                                    </div>
                                    <div class="grid grid-cols-2 gap-1">
                                        <span class="text-right mr-3">Ajoutée le</span>
                                        <span> {{ $section->created_at->format('d/m/Y') }} </span>
                                    </div>
                                    <a href="{{route('sections.edit', $section->id) }}">Editer</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-jury-layout>