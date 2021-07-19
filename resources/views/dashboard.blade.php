<x-jury-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-5">
            Examen du premier Tour 
        </h2>
    </x-slot>
    <div></div>
    <div class="py-10 mb-20">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-4 gap-2 bg-yellow-300 rounded-lg p-2 mb-4 text-center font-semibold text-2xl">
                <p class="bg-green-300 rounded-lg p-1">Nombre de correcteurs : <span>{{ nbMembres('correcteur')->count() }}</span></p>
                <p class="bg-blue-300 rounded-lg p-1">Nombre de surveillants : <span>{{ nbMembres('surveillant')->count() }}</span></p>
                <p class="bg-red-300 rounded-lg p-1">Nombre de secrétaires : <span>{{ nbMembres('secretaire')->count() }}</span></p>
                <p class="bg-red-300 rounded-lg p-1">Nombre de secrétaires : <span>{{ nbMembres('secretaire')->count() }}</span></p>
            </div>

            <div class="grid grid-cols-3 gap-2">
                @foreach($users as $user)
                    <div class="p-4 bg-white shadow-md rounded-xl {{ $user->statusClass() }} ">
                        <div class="text-left font-semibold text-xl"><b><span> {{ $user->prenoms }} {{ $user->name }}</span></b></div>
                            
                            <div class="grid grid-cols-2 gap-1">
                                <span class="text-right mr-3">Corps-Grade</span>
                                <span> {{ $user->grade }} </span>
                            </div>
                            <div class="grid grid-cols-2 gap-1">
                                <span class="text-right mr-3">Contact</span>
                                <span> {{ $user->contact }} </span>
                            </div>
                            <div class="grid grid-cols-2 gap-1">
                                <span class="text-right mr-3">Provenance</span>
                                <span> {{ $user->provenance }} </span>
                            </div>
                    </div>
                @endforeach
            </div>
            <div class="grid grid-cols-2 gap-2 rounded-lg ext-center text-xl bg-gray-100 my-2">
                <span class=" bg-yellow-300 p-3 rounded-lg font-bold">Les statistiques par section, par établissement et par sexe</span>
                <span></span>
            </div>
            <div class="grid grid-cols-2 gap-2 overflow-hidden rounded-xl shadow-sm mt-4">                
                 @foreach($sections as $section)
                <div class="p-0 border-b border-gray-200 rounded-lg">
                    <div class="w-full  mx-auto bg-blue-400 p-4 text-center">
                        <p class="text-3xl font-bold py-4">{{ $section->title }}</p>
                        <div class="flex justify-center">
                             @foreach($etablissements as $etablissement)
                               <p class="w-1/2 text-center p-4 mx-2 bg-green-300">
                                    {{$etablissement->name }}<br>{{get_NombreCandidatsGarcon($section->id, $etablissement->id)}}<br>{{get_CandidatsFille($section->id, $etablissement->id)}}
                                    <ol>
                                        <li></li>
                                    </ol>
                               </p>
                            @endforeach
                        </div>
                       
                    </div>    
                    
                </div>
                 @endforeach
            </div>
            <table style="width:100%;">
            <tr>
              <td style="padding:5px;"><b>@lang('Signature')</b></td>
              <td style="padding:5px;">@lang('Parents/Guardian')</td>
              <td style="padding:5px;">@lang('Principal')</td>
              <td style="padding:5px;"></td>
            </tr>
          </table>
        </div>
    </div>
</x-jury-layout>
