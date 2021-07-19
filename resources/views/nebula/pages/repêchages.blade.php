<div class="py-6">
    <div class="w-11/12 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                Les condidtion de repêchage
            </div>
            	<div class="flex items-center w-4/5">
            		@foreach($sections as $section)
            		<div class="p-4 w-1/2 mx-auto text-left font-bold">
            			<div class="text-center p-6 text-2xl bg-blue-200">
            				{{ $section->title }}
            				<hr>
            			</div>
            			<div>
            				<table>
            					<tbody>
	            					<tr>
	            						<th class="mr-20 bg-gray-200">Admis premier tour -> </th>
	            						<td class="ml-10 bg-gray-200">{{ $section->admisPremierTour }}</td>
	            					</tr>
	            					<tr>
	            						<th class="mr-20">Repêchable au premier tour -> </th>
	            						<td class="ml-10">{{ $section->repechagePremierTour }}</td>
	            					</tr>
	            					<tr>
	            						<th class="mr-20">Second tour -> </th>
	            						<td class="ml-10">{{ $section->secondTour }}</td>
	            					</tr>
	            					
	            					<tr>
	            						<th class="mr-20">Admis au Second tour -> </th>
	            						<td class="ml-10">{{ $section->admisSecondTour }}</td>
	            					</tr>

	            				</tbody>
            				</table>
            			</div>    
            		</div>
            		@endforeach
            	</div>

           
        </div>
    </div>
</div>