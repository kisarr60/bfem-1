<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigationpremiertour')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="px-4 py-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                    <div class="bg-green-500 min-h-5">
                        @if ($message = Session::get('message'))
                            <div class="flex items-center justify-between w-full p-2 my-2 bg-green-500 rounded-lg">
                                
                                <span class="text-xl font-bold text-center text-gray-100">{!! $message !!}</span>

                                <button onclick="this.parentElement.style.display='none';">X</button>

                            </div>
                        @endif
                    </div>
                </div>                
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @livewireScripts
    </body>
</html>
