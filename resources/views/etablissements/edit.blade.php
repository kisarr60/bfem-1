<x-jury-layout>
     <x-slot name="header">
        <div class="flex items-center justify-between p-4 text-white bg-gray-500">
            <h2 class="text-white bg-gray-600">
                Modification
            </h2>
            
        </div>
        
    </x-slot>
    <div class="py-6">
        <div class="flex max-w-4xl mx-auto sm:px-6 lg:px-8 ">
            <div class="overflow-hidden shadow-sm dark:bg-gray-900 dark:text-gray-100 sm:rounded-lg">
                
                    <form class="flex" method="POST" action="{{ route('etablissements.update', $etablissement->id) }}">
                            @csrf
                            @method('PUT')
                        <div class="p-6 bg-gray-300 border-b border-gray-200 ">
                            <div class="flex flex-wrap items-center mt-4">
                                <label for="name" class="overflow-hidden shadow-sm col-md-4 col-form-label dark:bg-gray-900 dark:text-gray-100 sm:rounded-lg">Nom de l'Etablissement</label>

                                <input type="text" class="block w-full mt-1" id="name" value="{{ old('name') ?? $etablissement->name }}" name="name">
                                @if ($errors->has('name'))
                                    <span class="font-semibold text-red-600 text-italic">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="flex flex-wrap items-center mt-4">
                               <label for="statut" class="overflow-hidden shadow-sm col-md-4 col-form-label dark:bg-gray-900 dark:text-gray-100 sm:rounded-lg">Statut de l'établissement</label>

                                <select type="text" class="block w-full mt-1" id="statut" name="statut">
                                    <option value="PU" {{ $etablissement->statut === 'PU' ? 'selected' : ''}}>Public</option>
                                    <option value="PR" {{ $etablissement->statut === 'PR' ? 'selected' : ''}}>Privé</option>
                                    <option value="CL" {{ $etablissement->statut === 'CL' ? 'selected' : ''}}>Candidat Libre</option>
                                </select>
                                @if ($errors->has('statut'))
                                    <span class="font-semibold text-red-600 text-italic">{{ $errors->first('statut') }}</span>
                                @endif
                            </div>
                            <div class="flex flex-wrap items-center mt-4">
                                <label for="contact" class="overflow-hidden shadow-sm col-md-4 col-form-label dark:bg-gray-900 dark:text-gray-100 sm:rounded-lg">Contact de l'Etablissement</label>

                                <input type="text" class="block w-full mt-1" id="contact" value="{{ old('contact') ?? $etablissement->contact }}" name="contact">
                                @if ($errors->has('contact'))
                                    <span class="font-semibold text-red-600 text-italic">{{ $errors->first('contact') }}</span>
                                @endif
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <a class="text-lg text-gray-600 underline hover:text-red-900" href="{{ route('etablissements.index') }}">
                                    Annuler
                                </a>

                                <button type="submit" class="p-2 ml-4 font-bold bg-blue-500 rounded-lg hover:bg-blue-800 hover:text-white">
                                    Mettre à jour
                                </button>
                            </div>
                            
                        </div>
                        
                    </form>
            </div>
            <div class="p-2 overflow-hidden text-gray-100 bg-green-900 shadow-sm sm:rounded-lg">
            </div>
        </div>
    </div>
    
</x-jury-layout>