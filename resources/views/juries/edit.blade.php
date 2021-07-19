<x-premiertour-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Jury : Editons les données
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form class="flex" method="POST" action="{{ route('juries.update', $jury->id) }}">
                        @csrf
                        @method('PUT')

                    <div class="p-6 bg-gray-300 w-1/2 border-b border-gray-200">
                    
                        <div>
                            <label for="academie">Académie </label>

                            <input id="academie" class="block mt-1 w-full" type="text" name="academie" value="{{ $jury->academie }}" required autofocus />
                        </div>

                        <div class="flex items-center flex-wrap mt-4">
                            <label for="ief">IEF</label>

                            <input id="ief" class="block mt-1 w-full" type="text" name="ief" value="{{ $jury->ief }}" required />
                        </div>

                        <div class="flex items-center flex-wrap mt-4">
                            <label for="centre">Centre</label>

                            <input id="centre" class="block mt-1 w-full"
                                            type="text"
                                            name="centre"
                                            value="{{ $jury->centre }}"/>
                        </div>

                        
                        <div class="flex items-center justify-end mt-4">
                            
                        </div>
                    </div>
                    <div class="p-6 bg-gray-300 w-1/2 border-b border-gray-200">
                    
                        <div>
                            <label for="section">Section </label>

                            <select id="section" class="block mt-1 w-full" type="text" name="section" value="{{ $jury->section }}" required>
                                <option value="Moderne" {{ $jury->section === 'Moderne' ? 'selected' : ''}}>Moderne</option>
                                <option value="Technique" {{ $jury->section === 'Technique' ? 'selected' : ''}}>Technique</option>
                                <option value="Classique" {{ $jury->section === 'Classique' ? 'selected' : ''}}>Classique</option>
                                <option value="Franco Arabe" {{ $jury->section === 'Franco Arabe' ? 'selected' : ''}}>Franco Arabe</option>
                            </select>
                        </div>

                        <div class="flex mt-4">
                            <div>
                                <label for="jury">Numéro du jury</label>

                                <input id="jury" class="block mt-1 w-full" type="text" name="jury" value="{{ $jury->jury }}" required />
                            </div>                                                       
                        </div>

                        <div class="mt-4">
                            <label for="session">Session</label>

                            <input id="session" class="block mt-1 w-full"
                                            type="text"
                                            name="session"
                                            value="{{ $jury->session }}"/>
                        </div>

                        
                        <div class="flex items-center justify-end mt-4">
                            
                        </div>
                    </div>
                    <div class="p-6 bg-gray-300 w-1/2 border-b border-gray-200">
                    
                        <div>
                            <label for="president">Prénoms et nom du président du Jury </label>

                            <input id="president" class="block mt-1 w-full" type="text" name="president" value="{{ $jury->president }}" required autofocus />
                        </div>

                        <div class="flex items-center flex-wrap mt-4">
                            <label for="matriculePresident">Numéro de matricule du président</label>

                            <input id="matriculePresident" class="block mt-1 w-full" type="text" name="matriculePresident" value="{{ $jury->matriculePresident }}" required />
                        </div>

                        <div class="flex items-center flex-wrap mt-4">
                            <label for="gradePresident">Corps et grade du président</label>

                            <input id="gradePresident" class="block mt-1 w-full"
                                            type="text"
                                            name="gradePresident"
                                            value="{{ $jury->gradePresident }}"/>
                        </div>

                        
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                Annuler
                            </a>

                            <button type="submit" class="ml-4">
                                Mettre à jour
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-premiertour-layout>