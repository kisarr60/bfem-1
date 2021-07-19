<h1 class="w-4xl text-gray-600 text-center text-4xl my-8">{{ 'Erreur-' . $number }}</h1>
	@if ($message = Session::get('message'))
        <div class="w-1/2 mx-auto mt-12 p-2 bg-red-500 p-3 my-2 flex items-center justify-between rounded-lg">
            
            <span class="text-2xl text-center text-gray-100 font-bold">{!! $message !!}</span>

            <button onclick="this.parentElement.style.display='none';">X</button>

        </div>
    @endif
</p>
@if($number != '503')
    <p class="text-red-300 p-6 mt-24">
        <a href="{{ route('dashboard') }}" class="btn btn-default">{{ __('Home') }}</a>
    </p>
@endif