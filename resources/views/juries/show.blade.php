<x-jury-layout>

    <x-slot name="header">
        <h2 class="flex items-center w-full p-2 text-2xl font-semibold font-bold leading-tight text-left text-gray-300 bg-green-700 rounded-lg">
            <div class="w-3/5">
                 Settings du jury 
            </div>
            
            <div class="w-1/5 text-white"><a href=" {{route('dashboard')}} ">Retour</a></div>
        </h2>
    </x-slot>

    <div class="w-9/12 p-1 mx-auto mt-5 bg-gray-100 shadow-3xl">
        <div class="flex flex-col flex-1 mx-2 md:flex-row lg:flex-row">
            <div class="w-full mb-2 border border-red-300 border-solid rounded shadow-sm">
                <div class="p-1 px-2 text-3xl font-bold text-center text-white bg-blue-700 border-gray-300 border-red-900 border-green-600 border-solid">
                    <div class="px-6 py-1">
                        <div class="mb-2 md:flex md:items-center">
                        
                        </div>
                    </div>                    
                </div>
                <div class="flex flex-col justify-between flex-1 p-1 border-blue-900 md:flex-row lg:flex-row md:mx-2 lg:mx-2">
                    <div class="w-1/2 mt-5 overflow-hidden rounded shadow-lg">
                        <div class="px-6 py-1">
                            
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-bold"><b>Session du BFEM</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-xl text-bold"><b>{{ $jury->session}}</b></p>
                                </div>
                            </div>
                            
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Académie</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $jury->academie}}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>I.E.F.</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $jury->ief}}</b></p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Centre</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $jury->centre}}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Numéro</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $jury->jury }}</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 mt-5 overflow-hidden rounded shadow-lg">
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Président</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $jury->president }}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Grade</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $jury->gradePresident }}</b></p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Matricule</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $jury->matriculePresident }}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b></b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b></b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- horizontal card -->
                    

                    <!-- /horizontal card -->
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-1 mx-2 md:flex-row lg:flex-row">
            <div class="w-full mb-2 border border-red-300 border-solid rounded shadow-sm">
                <div class="flex flex-col justify-between flex-1 p-1 border-blue-900 md:flex-row lg:flex-row md:mx-2 lg:mx-2">
                    
                </div>
            </div>
        </div>
    </div>

</x-jury-layout>