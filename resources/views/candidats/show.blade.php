<x-jury-layout>

    <x-slot name="header">
        <h2 class="flex items-center w-full rounded-lg text-2xl text-gray-300 p-2 font-bold leading-tight text-left {{ $candidat->sexe === 'M' ? 'bg-green-700' : 'bg-red-800'}}">
            <div class="w-3/5">
                 {{$candidat->NomComplet()}} ( {{$candidat->sexe === 'M' ? 'Candidat' : 'Candidate'}} {{$candidat->presence()}} )
            </div>
            @if($candidat->path)
            <div class="w-1/5 text-white"><img src="{{ Storage::url($candidat->photoCandidat->path) }}" width="50 px" height="50 px" alt="{{$candidat->numero}}"></div>
            @endif
            <div class="w-1/5 text-white">
                <a href=" {{route('candidats.index')}} ">
                    Retour
                </a>
            </div>       
        </h2>
    </x-slot>

    <div class="w-9/12 p-1 mx-auto mt-5 bg-gray-100 shadow-3xl">
        
        <!--Grid Form-->

        <div class="flex flex-col flex-1 mx-2 md:flex-row lg:flex-row">
            <div class="w-full mb-2 border border-red-300 border-solid rounded shadow-sm">
                <div class="p-1 px-2 text-3xl font-bold text-center text-white bg-blue-700 border-red-900 border-solid">
                    
                </div>
                <div class="flex flex-col justify-between flex-1 p-1 border-blue-900 md:flex-row lg:flex-row md:mx-2 lg:mx-2">
                    <div class="w-1/2 mt-5 overflow-hidden rounded shadow-lg">
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Numéro</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $candidat->numero }}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Fictif 1</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $candidat->fictif1 }}</b></p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Fictif 2</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $candidat->fictif2 }}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                
                            </div>
                        </div>
                    </div>
                    <!-- horizontal card -->
                    <div class="w-1/2 mt-5 overflow-hidden rounded shadow-lg">
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Date de naissance</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $candidat->datenais->format('d/m/Y')}}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Lieu de naissance</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $candidat->lieunais}}</b></p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Sexe</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $candidat->lesexe()}}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>EPS</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $candidat->aptitude }}</b></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /horizontal card -->
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-1 mx-2 mt-5 md:flex-row lg:flex-row">
            <div class="w-full mb-2 border border-red-300 border-solid rounded shadow-sm">
                <div class="flex flex-col justify-between flex-1 p-1 border-blue-900 md:flex-row lg:flex-row md:mx-2 lg:mx-2">
                    <div class="w-1/2 mt-5 overflow-hidden rounded shadow-lg">
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Etablissement d'origine</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $candidat->etablissement->name }}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Section</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $candidat->section->title }}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Epreuve Optionnelle</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $candidat->epOption }}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Epreuve facultative</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $candidat->facultative }}</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- horizontal card -->
                    <div class="w-1/2 mt-5 overflow-hidden rounded shadow-lg">
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Langue vivante 1</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $candidat->lv1}}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Langue vivante 2</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $candidat->lv2}}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Nombre de points</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $candidat->totalPointsPremTour}}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="mb-2 md:flex md:items-center">
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>Résultat</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="pb-2 text-xl text-bold"><b>{{ $candidat->resultat }}</b></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /horizontal card -->
                </div>
            </div>
        </div>
        <!--/Grid Form-->

    </div>

</x-jury-layout>