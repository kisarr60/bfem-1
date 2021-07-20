<x-jury-layout>
     <x-slot name="header">
        <div class="flex items-center justify-between p-4 bg-blue-400 text-white rounded-lg w-full">
            <h2 class="bg-gray-700 text-white py-1 px-3 rounded-full uppercase">
               Modifier la section {{$section->title}}
            </h2>
            
        </div>
        
    </x-slot>
    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 flex ">
            <div class="dark:bg-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                
                    <form class="flex" method="POST" action="{{ route('sections.update', $section->id) }}">
                            @csrf
                            @method('PUT')
                        <div class="p-6 bg-gray-300 border-b border-gray-200 ">
                            <div class="flex items-center flex-wrap mt-4">
                                <label for="title" class="col-md-4 col-form-label dark:bg-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">Section</label>

                                <input type="text" class="block mt-1 w-full" id="title" value="{{ old('title') ?? $section->title }}" name="title">
                                @if ($errors->has('title'))
                                    <span class="text-red-600 text-italic font-semibold">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="flex items-center flex-wrap mt-4">
                               <label for="admisPremierTour" class="col-md-4 col-form-label dark:bg-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">Nb de pts requis pour admission au 1er tour</label>

                                <input type="text" class="block mt-1 w-full" id="admisPremierTour" value="{{ old('admisPremierTour') ?? $section->admisPremierTour }}" name="admisPremierTour">

                                @if ($errors->has('admisPremierTour'))
                                    <span class="text-red-600 text-italic font-semibold">{{ $errors->first('admisPremierTour') }}</span>
                                @endif
                            </div>
                            <div class="flex items-center flex-wrap mt-4">
                               <label for="repechagePremierTour" class="col-md-4 col-form-label dark:bg-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">Nb de pts requis pour être repêchable au premier tour</label>

                                <input type="text" class="block mt-1 w-full" id="repechagePremierTour" value="{{ old('repechagePremierTour') ?? $section->repechagePremierTour }}" name="repechagePremierTour">

                                @if ($errors->has('repechagePremierTour'))
                                    <span class="text-red-600 text-italic font-semibold">{{ $errors->first('repechagePremierTour') }}</span>
                                @endif
                            </div>
                            <div class="flex items-center flex-wrap mt-4">
                               <label for="secondTour" class="col-md-4 col-form-label dark:bg-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">Nb de pts requis pour aller au sd tour</label>

                                <input type="text" class="block mt-1 w-full" id="secondTour" value="{{ old('secondTour') ?? $section->secondTour }}" name="secondTour">

                                @if ($errors->has('secondTour'))
                                    <span class="text-red-600 text-italic font-semibold">{{ $errors->first('secondTour') }}</span>
                                @endif
                            </div>
                            <div class="flex items-center flex-wrap mt-4">
                               <label for="admisSecondTour" class="col-md-4 col-form-label dark:bg-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">Nb de pts requis pour admission après sd tour</label>

                                <input type="text" class="block mt-1 w-full" id="admisSecondTour" value="{{ old('admisSecondTour') ?? $section->admisSecondTour }}" name="admisSecondTour">

                                @if ($errors->has('admisSecondTour'))
                                    <span class="text-red-600 text-italic font-semibold">{{ $errors->first('admisSecondTour') }}</span>
                                @endif
                            </div>

                            <div class="flex items-center flex-wrap mt-4">
                               <label for="repechageSecondTour" class="col-md-4 col-form-label dark:bg-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">Nb de pts requis pour repêchage au sd tour</label>

                                <input type="text" class="block mt-1 w-full" id="repechageSecondTour" value="{{ old('repechageSecondTour') ?? $section->repechageSecondTour }}" name="repechageSecondTour">

                                @if ($errors->has('repechageSecondTour'))
                                    <span class="text-red-600 text-italic font-semibold">{{ $errors->first('repechageSecondTour') }}</span>
                                @endif
                            </div>

                            <div class="flex items-center justify-between mt-4">
	                            <a class="underline text-lg text-gray-600 hover:text-red-900" href="{{ route('sections.index') }}">
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