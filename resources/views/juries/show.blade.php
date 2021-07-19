<x-premiertour-layout>

    <x-slot name="header">
        <h2 class="flex items-center w-full rounded-lg font-semibold text-2xl text-gray-300 p-2 font-bold leading-tight text-left bg-green-700">
            <div class="w-3/5">
                 Settings du jury 
            </div>
            
            <div class="w-1/5 text-white"><a href=" {{route('dashboard')}} ">Retour</a></div>
        </h2>
    </x-slot>

    <div class="w-9/12 p-1 mx-auto mt-5 bg-gray-100 shadow-3xl">
        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-red-300 rounded border shadow-sm w-full">
                <div class="border-red-900 bg-blue-700 text-white font-bold px-2 p-1 border-solid border-gray-300 border-green-600 text-3xl text-center">
                    <div class="px-6 py-1">
                        <div class="md:flex md:items-center mb-2">
                        
                        </div>
                    </div>                    
                </div>
                <div class="border-blue-900 p-1 flex flex-1 flex-col md:flex-row lg:flex-row justify-between md:mx-2 lg:mx-2">
                    <div class="mt-5 w-1/2 rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-1">
                            
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold pb-2"><b>Session du BFEM</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl"><b>{{ $jury->session}}</b></p>
                                </div>
                            </div>
                            
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Académie</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $jury->academie}}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>I.E.F.</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $jury->ief}}</b></p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Centre</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $jury->centre}}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Numéro</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $jury->jury }}</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 w-1/2 rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Président</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $jury->president }}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Grade</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $jury->gradePresident }}</b></p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Matricule</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $jury->matriculePresident }}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b></b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b></b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- horizontal card -->
                    

                    <!-- /horizontal card -->
                </div>
            </div>
        </div>
        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-red-300 rounded border shadow-sm w-full">
                <div class="border-blue-900 p-1 flex flex-1 flex-col md:flex-row lg:flex-row justify-between md:mx-2 lg:mx-2">
                    
                </div>
            </div>
        </div>
    </div>

</x-premiertour-layout>