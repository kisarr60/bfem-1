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
                        <form class="flex" method="POST" action="{{ route('candidats.update', $candidat->id) }}">

                                @csrf
                                @method('PUT')

                            <div class="p-6 bg-gray-300 w-1/3 border-b border-gray-200">
                                <div class="flex gap-1">
                                    <div>
                                        <label class="dark:bg-gray-900 dark:text-gray-100 w-full" for="numero">Numéro</label>
                                        <input id="numero" class="block mt-1 w-full" type="text" name="numero" value="{{ (old('numero')) ?? $candidat->numero}}"  required />
                                         @if ($errors->has('numero'))
                                            <span class="text-red-600 text-italic font-semibold">{{ $errors->first('numero') }}</span>
                                        @endif
                                    </div>
                                    <div>
                                        <label class="dark:bg-gray-900 dark:text-gray-100 w-full" for="fictif1">Fictif 1</label>
                                        <input id="fictif1" class="block mt-1 w-full" type="text" name="fictif1" value="{{ (old('fictif1')) ?? $candidat->fictif1}}" />
                                         @if ($errors->has('fictif1'))
                                            <span class="text-red-600 text-italic font-semibold">{{ $errors->first('fictif1') }}</span>
                                        @endif
                                    </div>  
                                    <div>
                                        <label class="dark:bg-gray-900 dark:text-gray-100 w-full" for="fictif2">Fictif 2</label>
                                        <input id="fictif2" class="block mt-1 w-full" type="text" name="fictif2" value="{{ (old('fictif2')) ?? $candidat->fictif2}}" />
                                         @if ($errors->has('fictif2'))
                                            <span class="text-red-600 text-italic font-semibold">{{ $errors->first('fictif2') }}</span>
                                        @endif
                                    </div>                                                         
                                </div>
                                <div class="flex items-center flex-wrap mt-4">
                                    <label class="dark:bg-gray-900 dark:text-gray-100 w-full" for="prenoms">Prénoms </label>
                                    <input id="prenoms" class="block mt-1 w-full" type="text" name="prenoms" value="{{ (old('prenoms')) ?? $candidat->prenoms}}" />
                                     @if ($errors->has('prenoms'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('prenoms') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center flex-wrap mt-4">
                                    <label class="dark:bg-gray-900 dark:text-gray-100 w-full" for="nom">Nom</label>

                                    <input id="nom" class="block mt-1 w-full" type="text" name="nom" value="{{ (old('nom')) ?? $candidat->nom}}"  />
                                    @if ($errors->has('nom'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('nom') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center flex-wrap mt-4">
                                    <label class="dark:bg-gray-900 dark:text-gray-100 w-full" for="datenais"> Date de naissance</label>
                                    <input id="datenais" class="block mt-1 w-full"
                                                    type="date"
                                                    name="datenais"
                                                    value="{{ (old('datenais')) ?? ($candidat->datenais == '' ? '' : \Carbon\Carbon::createFromDate($candidat->datenais->year,$candidat->datenais->month,$candidat->datenais->day)->format('Y-m-d'))}}"  size="10"  />
                                     @if ($errors->has('datenais'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('datenais') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center flex-wrap mt-4">
                                    <label class="dark:bg-gray-900 dark:text-gray-100 w-full" for="lieunais">Lieu de naissance</label>

                                    <input id="lieunais" class="block mt-1 w-full" type="text" name="lieunais" value="{{ (old('lieunais')) ?? $candidat->lieunais}}"  />
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
                                        <label class="dark:bg-gray-900 dark:text-gray-100 w-full" for="numero">Sexe</label>

                                        <select id="sexe" class="block mt-1 w-full" type="text" name="sexe" value="{{ (old('sexe')) ?? $candidat->sexe}}" >
                                            <option value="M" {{ $candidat->sexe === 'M' ? 'selected' : ''}}>Masculin</option>
                                            <option value="F" {{ $candidat->sexe === 'F' ? 'selected' : ''}}>Féminin</option>
                                        </select>
                                        @if ($errors->has('sexe'))
                                            <span class="text-red-600 text-italic font-semibold">{{ $errors->first('sexe') }}</span>
                                        @endif
                                    </div>                                                       
                                </div>
                                <div class="flex items-center flex-wrap mt-4">
                                    <label class="dark:bg-gray-900 dark:text-gray-100 w-full" for="aptitude">Aptitude </label>

                                    <select id="aptitude" class="block mt-1 w-full" type="text" name="aptitude" value="{{ (old('aptitude')) ?? $candidat->aptitude}}" >
                                        <option value="Apte" {{ $candidat->aptitude === 'Apte' ? 'selected' : ''}}>Apte</option>
                                        <option value="Inapte" {{ $candidat->aptitude === 'Inapte' ? 'selected' : ''}}>Inapte</option>
                                    </select>
                                    @if ($errors->has('aptitude'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('aptitude') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center flex-wrap mt-4">
                                    <label class="dark:bg-gray-900 dark:text-gray-100 w-full" for="section_id">Etablissement d'origine</label>

                                    <select id="etablissement_id" class="block mt-1 w-full" type="text" name="etablissement_id" value="{{ (old('etablissement_id')) ?? $candidat->etablissement_id}}" >
                                        @foreach($etablissements as $etablissement)
                                            <option value="{{$etablissement->id}}" {{ $candidat->etablissement_id == $etablissement->id ? 'selected' : ''}}>{{$etablissement->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('etablissement'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('etablissement') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center flex-wrap mt-4">
                                    <label class="dark:bg-gray-900 dark:text-gray-100 w-full" for="section_id">Section de BFEM</label>

                                    <select id="section_id" class="block mt-1 w-full" type="text" name="section_id" value="{{ (old('section_id')) ?? $candidat->section_id}}" >
                                        @foreach($sections as $section)
                                            <option value="{{$section->id}}" {{ $candidat->section_id == $section->id ? 'selected' : ''}}>{{$section->title}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('section_id'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('section_id') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center flex-wrap mt-4">
                                    <label class="dark:bg-gray-900 dark:text-gray-100 w-full" for="epOption">Epreuve optionnelle </label>

                                    <select id="epOption" class="block mt-1 w-full" type="text" name="epOption" value="{{ (old('epOption')) ?? $candidat->epOption}}" >
                                        <option value="Espagnol" {{ $candidat->epOption === 'Espagnol' ? 'selected' : ''}}>Espagnol</option>
                                        <option value="Portugais" {{ $candidat->epOption === 'Portugais' ? 'selected' : ''}}>Portugais</option>
                                        <option value="Arabe" {{ $candidat->epOption === 'Arabe' ? 'selected' : ''}}>Arabe</option>
                                        <option value="Allemand" {{ $candidat->epOption === 'Allemand' ? 'selected' : ''}}>Allemand</option>
                                        <option value="Italien" {{ $candidat->epOption === 'Italien' ? 'selected' : ''}}>Italien</option>
                                        <option value="Russe" {{ $candidat->epOption === 'Russe' ? 'selected' : ''}}>Russe</option>
                                        <option value="Latin" {{ $candidat->epOption === 'Latin' ? 'selected' : ''}}>Latin</option>
                                        <option value="Technologie" {{ $candidat->epOption === 'Technologie' ? 'selected' : ''}}>Technologie</option>
                                        <option value="Economie familiale" {{ $candidat->epOption === 'Economie familiale' ? 'selected' : ''}}>Economie familiale</option>
                                        <option value="STE" {{ $candidat->epOption === 'STE' ? 'selected' : ''}}>STE</option>
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
                                    <label class="dark:bg-gray-900 dark:text-gray-100 w-full" for="lv1">Langue vivante 1</label>

                                    <select id="lv1" class="block mt-1 w-full" type="text" name="lv1" value="{{ (old('lv1')) ?? $candidat->lv1}}" >
                                        <option value="Anglais" {{ $candidat->lv1 === 'Anglais' ? 'selected' : ''}}>Anglais</option>
                                        <option value="Français" {{ $candidat->lv1 === 'Français' ? 'selected' : ''}}>Français</option>
                                    </select>
                                    @if ($errors->has('lv1'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('lv1') }}</span>
                                    @endif
                                </div>
                                <div class="flex items-center flex-wrap mt-4">
                                    <label class="dark:bg-gray-900 dark:text-gray-100 w-full" for="facultative">Epreuve facultative</label>

                                    <select id="facultative" class="block mt-1 w-full" type="text" name="facultative" value="{{ (old('facultative')) ?? $candidat->facultative}}" >
                                        <option value="Dessin" {{ $candidat->facultative === 'Dessin' ? 'selected' : ''}}>Dessin</option>
                                        <option value="Musique" {{ $candidat->facultative === 'Musique' ? 'selected' : ''}}>Musique</option>
                                        <option value="LV2" {{ $candidat->facultative === 'LV2' ? 'selected' : ''}}>LV2</option>
                                        <option value="EC" {{ $candidat->facultative === 'EC' ? 'selected' : ''}}>EC</option>
                                        <option value="Anglais" {{ $candidat->facultative === 'Anglais' ? 'selected' : ''}}>Anglais</option>
                                        <option value="Eco fam" {{ $candidat->facultative === 'Eco fam' ? 'selected' : ''}}>Eco fam</option>
                                        <option value="Néant" {{ $candidat->facultative === 'Néant' ? 'selected' : ''}}>Néant</option>      
                                    </select>
                                    @if ($errors->has('facultative'))
                                        <span class="text-red-600 text-italic font-semibold">{{ $errors->first('facultative') }}</span>
                                    @endif
                                </div>

                                <div class="flex items-center flex-wrap mt-4">
                                    <label class="dark:bg-gray-900 dark:text-gray-100 w-full" for="absent">Présence à la session du BFEM</label>

                                    <select id="absent" class="block mt-1 w-full" type="text" name="absent" value="{{ (old('absent')) ?? $candidat->absent}}" >
                                        <option value="0" {{ $candidat->absent == 0 ? 'selected' : ''}}>Candidat présent</option>
                                        <option value="1" {{ $candidat->absent == 1 ? 'selected' : ''}}>Candidat absent</option>
                                    </select>
                                </div>

                                

                                <div class="flex items-center justify-center mt-24">
                                    <a class="underline text-lg text-gray-600 hover:text-red-900" href="{{ route('candidats.index') }}">
                                        Annuler
                                    </a>

                                    <button type="submit" class="bg-blue-500 outline hover:bg-blue-800 hover:text-white font-bold p-2 rounded-lg ml-4">
                                        Mettre à jour
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