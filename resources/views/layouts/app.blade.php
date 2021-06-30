<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Tecnológico de Tuxtla Gutierrez</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/modulo.css') }}"> 
        <link rel="stylesheet" href="{{ asset('css/c.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100" style="background-color: #05143B;">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8" style="background-color: #082162;">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
            {{ $slot }}

            </main>
        </div>

        
            
    </body>
</html>
