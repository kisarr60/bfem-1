<x-jury-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Corrections
        </h2>
    </x-slot>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <form class="flex" method="POST" action="{{ route('corrections.store') }}">
                                @csrf

                            <div class="p-6 bg-gray-300 w-1/3 border-b border-gray-200">
                                <div class="flex gap-1 mt-4">
                                    <div>
                                        <label for="num_debut">Début</label>
                                        <input id="num_debut" class="block mt-1 w-full" type="text" value="{{ old('num_debut') }}" name="num_debut"/>
                                        @if ($errors->has('num_debut'))
                                            <span class="text-red-600 text-italic font-semibold">{{ $errors->first('num_debut') }}</span>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="num_fin">Fin</label>
                                        <input id="num_fin" class="block mt-1 w-full" type="text" value="{{ old('num_fin') }}" name="num_fin" />
                                        @if ($errors->has('num_fin'))
                                            <span class="text-red-600 text-italic font-semibold">{{ $errors->first('num_fin') }}</span>
                                        @endif
                                    </div>  
                                                                                            
                                </div>
                            </div>
                            <div class="p-6 bg-gray-300 w-1/3 border-b border-gray-200">
                                
                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="discipline_id">Le correcteur</label>

                                    <select id="user_id" class="block mt-1 w-full" type="text" name="user_id">
                                        <option value="">Choisir l'origine</option>
                                        @foreach($correcteurs as $correcteur)
                                            <option value="{{$correcteur->id}}">({{$correcteur->role}}) {{$correcteur->prenoms}} {{$correcteur->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('user_id'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('user_id') }}</span>
                                    @endif
                                </div>

                                
                                
                            </div>
                            <div class="p-6 bg-gray-300 w-1/3 border-b border-gray-200">
                                
                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="discipline_id">Discipline</label>

                                    <select id="discipline_id" class="block mt-1 w-full" type="text" value="{{ old('') }}" name="discipline_id">
                                        <option value="">Choisir la discipline</option>
                                        @foreach($disciplines as $discipline)
                                            <option value="{{$discipline->id}}">{{$discipline->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('discipline_id'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('discipline_id') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center flex-wrap mt-4">
                                    
                                </div>

                                <div class="flex items-center justify-center mt-4">
                                    <a class="underline text-lg text-gray-600 hover:text-red-900" href="{{ route('candidats.index') }}">
                                        Annuler
                                    </a>

                                    <button type="submit" class="bg-blue-500 hover:bg-blue-800 hover:text-white font-bold p-2 rounded-lg ml-4">
                                        Ajouter
                                    </button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-jury-layout>