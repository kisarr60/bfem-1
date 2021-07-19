<x-jury-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Les notes des candidats
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <livewire:notes-table exportable hideable="select"/>
                </div>
            </div>
        </div>
    </div>
    <!--Modal -->
    <div 
        x-data="{ open: false }"
        x-show.transition.duration.900ms="open"
        x-init="() => {
            setTimeout(() => {
                open = true
            }, 6000);
        }"
        class="fixed inset-0 bg-white bg-opacity-75 flex items-center justify-center px-4 md:px-0">
        <div class="flex flex-col bg-white shadow-2xl rounded-lg border-3 border-gray-400 p-6" @click.away="open=false">
            <div class="flex justify-between mb-10">
                <h3 class="font-bold text-xl">Bienvenue &#x1f4cc;</h3>
                <button class="text-xl text-white p-2 bg-red-600" @click="open=false">X</button>
            </div>
            <div class="5">
                <p class="mb-8">Je fais des vidéos destinées aux élèves des collèges du Sénégal</p>
                <img width="100%" src="{{asset('images/men2.jpg')}}" alt="">
            </div>
        </div>
    </div>
</x-jury-layout>