<x-premiertour-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Enregistrer un membre du jury
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <form class="flex" method="POST" action="{{ route('store-membre') }}" enctype="multipart/form-data">
                                @csrf

                            <div class="p-6 bg-gray-300 w-1/3 border-b border-gray-200">
                                <div class="">
                                    <div class="flex items-center flex-wrap">
                                        <label for="prenoms">Prénoms</label>
                                        <input id="prenoms" class="block mt-1 w-full" type="text" value="{{ old('prenoms') }}" name="prenoms" />
                                        @if ($errors->has('prenoms'))
                                            <span class="text-red-600 text-italic font-semibold">{{ $errors->first('prenoms') }}</span>
                                        @endif
                                    </div>
                                    <div class="flex items-center flex-wrap mt-4">
                                        <label for="name">Nom</label>
                                        <input id="name" class="block mt-1 w-full" type="text" value="{{ old('name') }}" name="name" />
                                        @if ($errors->has('name'))
                                            <span class="text-red-600 text-italic font-semibold">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>  
                                    <div class="flex items-center flex-wrap mt-4">
                                        <label for="email">Email</label>
                                        <input id="email" class="block mt-1 w-full" type="text" value="{{ old('email') }}" name="email" />
                                        @if ($errors->has('email'))
                                            <span class="text-red-600 text-italic font-semibold">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>                                                         
                                </div>
                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="password">Mot de passe </label>

                                    <input id="password" class="block mt-1 w-full" type="text" value="{{ old('password') }}" name="password" />
                                    @if ($errors->has('password'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="p-6 bg-gray-300 w-1/3 border-b border-gray-200">
                                <div>
                                    <div>
                                        <label for="status">Fonction</label>

                                        <select id="fonction" class="block mt-1 w-full" type="text" value="{{ old('fonction') }}" name="status">
                                            <option value="">Choisir la fonction</option>
                                            <option value="correcteur">Correcteur</option>
                                            <option value="surveillant">Surveillant</option>
                                            <option value="secretaire">Secrétaire</option>
                                            <option value="president">Président</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="text-red-600 text-italic font-semibold">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>                                                       
                                </div> 
                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="matricule">Matricule</label>

                                    <input id="matricule" class="block mt-1 w-full" type="text" value="{{ old('matricule') }}" name="matricule" />
                                    @if ($errors->has('matricule'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('matricule') }}</span>
                                    @endif
                                </div>
                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="grade">Corps et Grade</label>

                                    <input id="grade" class="block mt-1 w-full" type="text" value="{{ old('grade') }}" name="grade" />
                                    @if ($errors->has('grade'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('grade') }}</span>
                                    @endif
                                </div>   

                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="arrived_at"> Date d'arrivée</label>

                                    <input id="arrived_at" class="block mt-1 w-full"
                                                    type="date"
                                                    value="{{ old('arrived_at') }}" name="arrived_at"/>
                                    @if ($errors->has('arrived_at'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('arrived_at') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="p-6 bg-gray-300 w-1/3 border-b border-gray-200">
                                
                                <div>
                                    
                                </div>
                                <div class="flex items-center flex-wrap mt-4">
                                    
                                </div>

                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="admin">Est Administrateur ?</label>

                                    <select id="admin" class="block mt-1 w-full" type="text" value="{{ old('') }}" name="admin">
                                        <option value="0" default>Non</option>
                                        <option value="1">Oui</option>
                                    </select>
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
</x-premiertour-layout>