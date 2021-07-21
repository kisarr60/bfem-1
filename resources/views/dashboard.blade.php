<x-jury-layout>
    <x-slot name="header">
        <h2 class="py-5 text-xl font-semibold leading-tight text-gray-800">
            Examen du premier Tour 
        </h2>
    </x-slot>
    <div></div>
    <div class="py-10 mb-20">
        
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="grid grid-cols-3 gap-2 p-2 mb-4 text-2xl font-semibold text-center bg-yellow-300 rounded-lg">
                <p class="p-1 bg-green-300 rounded-lg">Nombre de correcteurs : <span>{{ nbMembres('correcteur')->count() }}</span></p>
                <p class="p-1 bg-blue-300 rounded-lg">Nombre de surveillants : <span>{{ nbMembres('surveillant')->count() }}</span></p>
                <p class="p-1 bg-red-300 rounded-lg">Nombre de secrétaires : <span>{{ nbMembres('secretaire')->count() }}</span></p>
            </div>

            <div class="grid grid-cols-3 gap-2">
                @foreach($users as $user)
                    <div class="p-4 shadow-md rounded-xl {{ $user->statusClass() }} ">
                        <div class="text-xl font-semibold text-left"><b><span> {{ $user->prenoms }} {{ $user->name }}</span></b></div>
                            
                            <div class="grid grid-cols-2 gap-1">
                                <span class="mr-3 text-right">Corps-Grade</span>
                                <span> {{ $user->grade }} </span>
                            </div>
                            <div class="grid grid-cols-2 gap-1">
                                <span class="mr-3 text-right">Contact</span>
                                <span> {{ $user->contact }} </span>
                            </div>
                            <div class="grid grid-cols-2 gap-1">
                                <span class="mr-3 text-right">Provenance</span>
                                <span> {{ $user->provenance }} </span>
                            </div>
                    </div>
                @endforeach
            </div>
            <div class="grid grid-cols-2 gap-2 my-2 text-xl bg-gray-100 rounded-lg ext-center">
                <span class="p-3 font-bold bg-yellow-300 rounded-lg ">Les statistiques par section, par établissement et par sexe</span>
                <span></span>
            </div>
            <div class="grid grid-cols-2 gap-2 mt-4 overflow-hidden shadow-sm rounded-xl">                
                 @foreach($sections as $section)
                <div class="p-0 border-b border-gray-200 rounded-lg">
                    <div class="w-full p-4 mx-auto text-center bg-blue-400">
                        <p class="py-4 text-3xl font-bold">{{ $section->title }}</p>
                        <div class="flex justify-center">
                             @foreach($etablissements as $etablissement)
                               <p class="w-1/2 p-4 mx-2 text-center bg-green-300">
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
