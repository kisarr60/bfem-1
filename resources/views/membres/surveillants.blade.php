<x-premiertour-layout>

    <x-slot name="header">
        <div class="text-2xl font-bold">Liste des surveillants</div>
    </x-slot>

    <div class="w-9/12 p-1 mx-auto mt-5 bg-gray-100 shadow-3xl">
        
        <!--Grid Form-->

        <div class="flex flex-col flex-1 mx-2 md:flex-row lg:flex-row">
            <div class="w-full mb-2 border border-red-300 border-solid rounded shadow-sm">
                <div class="p-1 px-2 text-3xl font-bold text-center text-white border-red-900 border-solid">
                    <livewire:membres.surveillants />
                </div>
            </div>
        </div>
    </div>
</x-premiertour-layout>