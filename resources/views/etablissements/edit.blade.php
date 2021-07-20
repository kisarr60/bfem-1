<x-jury-layout>
     <x-slot name="header">
        <div class="flex items-center justify-between p-4 bg-gray-500 text-white">
            <h2 class="bg-gray-600 text-white">
                Modification
            </h2>
            
        </div>
        
    </x-slot>
    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 flex ">
            <div class="dark:bg-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                
                    <form class="flex" method="POST" action="{{ route('etablissements.update', $etablissement->id) }}">
                            @csrf
                            @method('PUT')
                        <div class="p-6 bg-gray-300 border-b border-gray-200 ">
                            <div class="flex items-center flex-wrap mt-4">
                                <label for="name" class="col-md-4 col-form-label dark:bg-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">Nom de l'Etablissement</label>

                                <input type="text" class="block mt-1 w-full" id="name" value="{{ old('name') ?? $etablissement->name }}" name="name">
                                @if ($errors->has('name'))
                                    <span class="text-red-600 text-italic font-semibold">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="flex items-center flex-wrap mt-4">
                               <label for="statut" class="col-md-4 col-form-label dark:bg-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">Statut de l'établissement</label>

                                <select type="text" class="block mt-1 w-full" id="statut" name="statut">
                                    <option value="PU" {{ $etablissement->statut === 'PU' ? 'selected' : ''}}>Public</option>
                                    <option value="PR" {{ $etablissement->statut === 'PR' ? 'selected' : ''}}>Privé</option>
                                    <option value="CL" {{ $etablissement->statut === 'CL' ? 'selected' : ''}}>Candidat Libre</option>
                                </select>
                                @if ($errors->has('statut'))
                                    <span class="text-red-600 text-italic font-semibold">{{ $errors->first('statut') }}</span>
                                @endif
                            </div>
                            <div class="flex items-center flex-wrap mt-4">
                                <label for="contact" class="col-md-4 col-form-label dark:bg-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">Contact de l'Etablissement</label>

                                <input type="text" class="block mt-1 w-full" id="contact" value="{{ old('contact') ?? $etablissement->contact }}" name="contact">
                                @if ($errors->has('contact'))
                                    <span class="text-red-600 text-italic font-semibold">{{ $errors->first('contact') }}</span>
                                @endif
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <a class="underline text-lg text-gray-600 hover:text-red-900" href="{{ route('etablissements.index') }}">
                                    Annuler
                                </a>

                                <button type="submit" class="bg-blue-500 hover:bg-blue-800 hover:text-white font-bold p-2 rounded-lg ml-4">
                                    Mettre à jour
                                </button>
                            </div>
                            
                        </div>
                        
                    </form>
            </div>
            <div class="dark:bg-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
            </div>
        </div>
    </div>
    
</x-jury-layout>