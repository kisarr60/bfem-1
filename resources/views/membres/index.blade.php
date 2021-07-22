<x-jury-layout>

    <x-slot name="header">
        <div class="text-2xl font-semibold leading-tight text-gray-800">Liste des membres du Jury</div>
    </x-slot>

    <div class="mx-auto mt-5 bg-gray-100 max-w-7xl sm:px-6 lg:px-8 shadow-3xl">
        
        <!--Grid Form-->

        <div class="flex flex-col flex-1 mx-2 md:flex-row lg:flex-row">
            <div class="w-full mb-2 border border-red-300 border-solid rounded shadow-sm">
                <div class="p-1 px-2 text-xl font-bold text-center text-white bg-blue-700 border-green-600 border-solid">
                    <livewire:membres.jury exportable/>
                </div>
            </div>
        </div>
    </div>
</x-jury-layout>