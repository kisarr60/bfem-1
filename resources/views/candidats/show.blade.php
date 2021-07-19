<x-jury-layout>

    <x-slot name="header">
        <h2 class="flex items-center w-full rounded-lg font-semibold text-2xl text-gray-300 p-2 font-bold leading-tight text-left {{ $candidat->sexe === 'M' ? 'bg-green-700' : 'bg-red-800'}}">
            <div class="w-3/5">
                 {{$candidat->NomComplet()}} ( {{$candidat->sexe === 'M' ? 'Candidat' : 'Candidate'}} {{$candidat->presence()}} )
            </div>
            @if($candidat->path)
            <div class="w-1/5 text-white"><img src="{{ Storage::url($candidat->photoCandidat->path) }}" width="50 px" height="50 px" alt="{{$candidat->numero}}"></div>
            @endif
            <div class="w-1/5 text-white">
                <a href=" {{route('candidats.index')}} ">
                    <svg class="lg:block absolute right-0 inset-y-0 h-full w-112 text-white transform translate-x-1/2" fill="red" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                        <polygon points="50,0 100,0 50,100 0,100" />
                    </svg>
                    Retour
                    
                    </svg>
                </a>
            </div>
            
           
        </h2>
    </x-slot>

    <div class="w-9/12 p-1 mx-auto mt-5 bg-gray-100 shadow-3xl">
        
        <!--Grid Form-->

        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-red-300 rounded border shadow-sm w-full">
                <div class="border-red-900 bg-blue-700 text-white font-bold px-2 p-1 border-solid border-gray-300 border-green-600 text-3xl text-center">
                    
                </div>
                <div class="border-blue-900 p-1 flex flex-1 flex-col md:flex-row lg:flex-row justify-between md:mx-2 lg:mx-2">
                    <div class="mt-5 w-1/2 rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Numéro</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $candidat->numero }}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Fictif 1</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $candidat->fictif1 }}</b></p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Fictif 2</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $candidat->fictif2 }}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                
                            </div>
                        </div>
                    </div>
                    <!-- horizontal card -->
                    <div class="mt-5 w-1/2 rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Date de naissance</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $candidat->datenais->format('d/m/Y')}}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Lieu de naissance</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $candidat->lieunais}}</b></p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Sexe</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $candidat->lesexe()}}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>EPS</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $candidat->aptitude }}</b></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /horizontal card -->
                </div>
            </div>
        </div>
        <div class="mt-5 flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-red-300 rounded border shadow-sm w-full">
                <div class="border-blue-900 p-1 flex flex-1 flex-col md:flex-row lg:flex-row justify-between md:mx-2 lg:mx-2">
                    <div class="mt-5 w-1/2 rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Etablissement d'origine</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $candidat->etablissement->name }}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Section</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $candidat->section->title }}</b></p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Epreuve Optionnelle</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $candidat->epOption }}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Epreuve facultative</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $candidat->facultative }}</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- horizontal card -->
                    <div class="mt-5 w-1/2 rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Langue vivante 1</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $candidat->lv1}}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Langue vivante 2</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $candidat->lv2}}</b></p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Nombre de points</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $candidat->totalPointsPremTour}}</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-1">
                            <div class="md:flex md:items-center mb-2">
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>Résultat</b></p>
                                </div>
                                <div class="md:w-1/2">
                                    <p class="text-bold text-xl pb-2"><b>{{ $candidat->resultat }}</b></p>
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