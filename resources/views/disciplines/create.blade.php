<x-jury-layout>
     <x-slot name="header">
        <div class="flex items-center justify-between p-4 dark:bg-gray-900 dark:text-gray-100 bg-gray-500 text-white">
            <h2 class="dark:bg-gray-900 dark:text-gray-100 bg-gray-500 text-white">
                Ajouter une Discipline
            </h2>
            
        </div>
        
    </x-slot>
    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 flex ">
            <div class="dark:bg-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                
                    <form class="flex" method="POST" action="{{ route('disciplines.store') }}">
                            @csrf
                        <div class="p-6 bg-gray-300 border-b border-gray-200 ">
                            <div class="flex items-center flex-wrap mt-4">
                                <label for="name" class="col-md-4 col-form-label dark:bg-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">Discipline</label>

                                <input type="text" class="block mt-1 w-full" id="name" value="{{ old('name') }}" name="name">
                                @if ($errors->has('name'))
                                    <span class="text-red-600 text-italic font-semibold">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="flex items-center flex-wrap mt-4">
                               <label for="coef" class="col-md-4 col-form-label dark:bg-gray-900 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">Coefficient</label>

                                <input type="text" class="block mt-1 w-full" id="coef" value="{{ old('coef') }}" name="coef">

                                @if ($errors->has('coef'))
                                    <span class="text-red-600 text-italic font-semibold">{{ $errors->first('coef') }}</span>
                                @endif
                            </div>
                            <div class="flex items-center justify-between mt-4">
	                            <a class="underline text-lg text-gray-600 hover:text-red-900" href="{{ route('disciplines.index') }}">
	                                Annuler
	                            </a>

	                            <button type="submit" class="bg-blue-500 hover:bg-blue-800 hover:text-white font-bold p-2 rounded-lg ml-4">
	                                Ajouter
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