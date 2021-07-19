<x-jury-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nouveau candidat
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <form class="flex" method="POST" action="{{ route('candidats.store') }}" enctype="multipart/form-data">
                                @csrf

                            <div class="p-6 bg-gray-300 w-1/3 border-b border-gray-200">
                                <div class="flex gap-1">
                                    <div>
                                        <label for="numero">Numéro</label>
                                        <input id="numero" class="block mt-1 w-full" type="text" value="{{ old('numero') }}" name="numero" placeholder="{{ App\Models\Candidat::max('numero') + 1 }}" />
                                        @if ($errors->has('numero'))
                                            <span class="text-red-600 text-italic font-semibold">{{ $errors->first('numero') }}</span>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="fictif1">Fictif 1</label>
                                        <input id="fictif1" class="block mt-1 w-full" type="text" value="{{ old('fictif1') }}" name="fictif1" />
                                        @if ($errors->has('fictif1'))
                                            <span class="text-red-600 text-italic font-semibold">{{ $errors->first('fictif1') }}</span>
                                        @endif
                                    </div>  
                                    <div>
                                        <label for="fictif2">Fictif 2</label>
                                        <input id="fictif2" class="block mt-1 w-full" type="text" value="{{ old('fictif2') }}" name="fictif2" />
                                        @if ($errors->has('fictif2'))
                                            <span class="text-red-600 text-italic font-semibold">{{ $errors->first('fictif2') }}</span>
                                        @endif
                                    </div>                                                         
                                </div>
                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="prenoms">Prénoms </label>

                                    <input id="prenoms" class="block mt-1 w-full" type="text" value="{{ old('prenoms') }}" name="prenoms" />
                                    @if ($errors->has('prenoms'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('prenoms') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="nom">Nom</label>

                                    <input id="nom" class="block mt-1 w-full" type="text" value="{{ old('nom') }}" name="nom" />
                                    @if ($errors->has('nom'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('nom') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="datenais"> Date de naissance</label>

                                    <input id="datenais" class="block mt-1 w-full"
                                                    type="date"
                                                    value="{{ old('datenais') }}" name="datenais"/>
                                    @if ($errors->has('datenais'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('datenais') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="lieunais">Lieu de naissance</label>

                                    <input id="lieunais" class="block mt-1 w-full" type="text" value="{{ old('lieunais') }}" name="lieunais" />
                                    @if ($errors->has('lieunais'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('lieunais') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    
                                </div>
                            </div>
                            <div class="p-6 bg-gray-300 w-1/3 border-b border-gray-200">
                                <div>
                                    <div>
                                        <label for="numero">Sexe</label>

                                        <select id="sexe" class="block mt-1 w-full" type="text" value="{{ old('sexe') }}" name="sexe">
                                            <option value="">Choisir le sexe</option>
                                            <option value="M">Masculin</option>
                                            <option value="F">Féminin</option>
                                        </select>
                                        @if ($errors->has('sexe'))
                                            <span class="text-red-600 text-italic font-semibold">{{ $errors->first('sexe') }}</span>
                                        @endif
                                    </div>                                                       
                                </div>
                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="aptitude">Aptitude </label>

                                    <select id="aptitude" class="block mt-1 w-full" type="text" value="{{ old('aptitude') }}" name="aptitude">
                                        <option value="">Aptitude</option>
                                        <option value="Apte">Apte</option>
                                        <option value="Inapte">Inapte</option>
                                    </select>
                                    @if ($errors->has('aptitude'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('aptitude') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="section_id">Etablissement d'origine</label>

                                    <select id="etablissement_id" class="block mt-1 w-full" type="text" value="{{ old('etablissement_id') }}" name="etablissement_id">
                                        <option value="">Choisir l'origine</option>
                                        @foreach($etablissements as $etablissement)
                                            <option value="{{$etablissement->id}}">{{$etablissement->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('etablissement_id'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('etablissement_id') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="section_id">Section de BFEM</label>

                                    <select id="section_id" class="block mt-1 w-full" type="text" value="{{ old('') }}" name="section_id">
                                        <option value="">Choisir la section</option>
                                        @foreach($sections as $section)
                                            <option value="{{$section->id}}">{{$section->title}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('section_id'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('section_id') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="epOption">Epreuve optionnelle </label>

                                    <select id="epOption" class="block mt-1 w-full" type="text" value="{{ old('epOption') }}" name="epOption">
                                        <option value="Espagnol">Choisir l'épreuve de section</option>
                                        <option value="Espagnol">Espagnol</option>
                                        <option value="Portugais">Portugais</option>
                                        <option value="Arabe">Arabe</option>
                                        <option value="Allemand">Allemand</option>
                                        <option value="Italien">Italien</option>
                                        <option value="Russe">Russe</option>
                                        <option value="Latin">Latin</option>
                                        <option value="Technologie">Technologie</option>
                                        <option value="Economie familiale">Economie familiale</option>
                                        <option value="STE">STE</option>
                                    </select>
                                    @if ($errors->has('epOption'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('epOption') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    
                                </div>
                            </div>
                            <div class="p-6 bg-gray-300 w-1/3 border-b border-gray-200">
                                <div>
                                    <label for="lv1">Langue vivante 1</label>

                                    <select id="lv1" class="block mt-1 w-full" type="text" value="{{ old('lv1') }}" name="lv1">
                                        <option value="Anglais">Anglais</option>
                                        <option value="Français">Français</option>
                                    </select>
                                    @if ($errors->has('lv1'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('lv1') }}</span>
                                    @endif
                                </div>
                                <div>
                                    <label for="lv2">Langue vivante 2</label>

                                    <select id="lv2" class="block mt-1 w-full" type="text" value="{{ old('lv2') }}" name="lv2">
                                        <option value="Néant">Pas de LV2</option>
                                        <option value="Espagnol">Espagnol</option>
                                        <option value="Portugais">Portugais</option>
                                        <option value="Arabe">Arabe</option>
                                        <option value="Allemand">Allemand</option>
                                        <option value="Russe">Russe</option>
                                        <option value="Grec">Grec</option>
                                        <option value="Italien">Italien</option>
                                    </select>
                                    @if ($errors->has('lv2'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('lv2') }}</span>
                                    @endif
                                </div>
                                <div class="flex items-center flex-wrap mt-4">
                                    <label for="facultative">Epreuve facultative</label>

                                    <select id="facultative" class="block mt-1 w-full" type="text" value="{{ old('facultative') }}" name="facultative">
                                        <option value="Néant">Pas d'épreuve facultative</option>
                                        <option value="Dessin">Dessin</option>
                                        <option value="Musique">Musique</option>
                                        <option value="LV2">LV2</option>
                                        <option value="EC">EC</option>
                                        <option value="Anglais">Anglais</option>
                                        <option value="Eco fam">Eco fam</option>
                                    </select>
                                    @if ($errors->has('facultative'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('facultative') }}</span>
                                    @endif
                                </div>

                                <!-- <div class="flex items-center flex-wrap mt-4">
                                    <label for="absent">Présence à la session du BFEM</label>

                                    <select id="absent" class="block mt-1 w-full" type="text" value="{{ old('') }}" name="absent">
                                        <option value="0">Candidat présent</option>
                                        <option value="1">Candidat absent</option>
                                    </select>
                                    @if ($errors->has('image'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('image') }}</span>
                                    @endif
                                </div> -->

                                <div class="flex items-center flex-wrap mt-4">
                                   <label for="image" class="col-md-4 col-form-label">Photo du Candidat</label>

                                    <input type="file" class="block mt-1 w-full" id="image" value="{{ old('image') }}" name="image">

                                    @if ($errors->has('image'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('image') }}</span>
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

