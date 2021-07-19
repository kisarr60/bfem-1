<x-premiertour-layout>

    <x-slot name="header">
        <div class="text-2xl font-semibold text-gray-800 leading-tight">Liste des membres du Jury</div>
    </x-slot>

    <div class="max-w-7xl sm:px-6 lg:px-8 mx-auto mt-5 bg-gray-100 shadow-3xl">
        
        <!--Grid Form-->

        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-red-300 rounded border shadow-sm w-full">
                <div class="border-red-900 bg-blue-700 text-white font-bold px-2 p-1 border-solid border-gray-300 border-green-600 text-xl text-center">
                    <livewire:membres.jury exportable/>
                </div>
            </div>
        </div>
    </div>
</x-premiertour-layout>