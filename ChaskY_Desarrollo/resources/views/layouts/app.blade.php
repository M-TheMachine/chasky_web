<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('storage/login-logo.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-poppins antialiased h-full">
        @include('layouts.navigation')

        <div class="min-h-screen bg-gradient-to-br from-[#701516]/5 to-[#c40606]/5">
            <div class="flex flex-col min-h-screen">
                <!-- Page Heading -->
                @isset($header)
                    <header class="bg-white/70 backdrop-blur-md border-b border-[#701516]/10 mt-24 shadow-sm">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <!-- Page Content -->
                <main class="flex-grow">
                    @yield('content')
                </main>

                <!-- Footer -->
                <footer class="bg-white shadow mt-auto">
                    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                        <div class="text-center text-sm text-gray-500">
                            <p>&copy; {{ date('Y') }} Chasky. {{ __('Todos los derechos reservados.') }}</p>
                            <p class="mt-1">{{ __('Desarrollado con') }} ❤️ {{ __('por el equipo de Chasky') }}</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        @stack('scripts')
    </body>
</html>
