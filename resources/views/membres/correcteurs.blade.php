<x-premiertour-layout>

    <x-slot name="header">
        <div class="text-2xl font-bold">Liste des correcteurs</div>
    </x-slot>

    <div class="w-9/12 p-1 mx-auto mt-5 bg-gray-100 shadow-3xl">
        
        <!--Grid Form-->

        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-red-300 rounded border shadow-sm w-full">
                <div class="border-red-900 bg-blue-700 text-white font-bold px-2 p-1 border-solid border-gray-300 border-green-600 text-xl text-center">
                    <livewire:membres.correcteurs exportable/>
                </div>
            </div>
        </div>
    </div>
</x-premiertour-layout>