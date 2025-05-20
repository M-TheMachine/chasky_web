<!DOCTYPE html>
<html lang="{{ request()->cookie('locale') ?? session('locale', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="locale" content="{{ request()->cookie('locale') ?? session('locale', app()->getLocale()) }}">
        <meta name="app-locale" content="{{ app()->getLocale() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">

        <!-- AOS -->
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
        <script src="{{ asset('js/aos.js') }}"></script>
        
        <!-- Language Switcher -->
        <script src="{{ asset('js/language-switcher.js') }}"></script>

        <!-- Scripts -->
        @php
            $manifestPath = public_path('build/manifest.json');
            $manifest = json_decode(file_get_contents($manifestPath), true);
        @endphp

        @if (app()->environment('production'))
            <link rel="stylesheet" href="{{ config('app.url') }}/build/assets/{{ basename($manifest['resources/css/app.css']['file']) }}">
            <link rel="stylesheet" href="{{ config('app.url') }}/build/assets/{{ basename($manifest['resources/css/home.css']['file']) }}">
            <script type="module" src="{{ config('app.url') }}/build/assets/{{ basename($manifest['resources/js/app.js']['file']) }}"></script>
            @if(request()->is('/'))
                <script type="module" src="{{ config('app.url') }}/build/assets/{{ basename($manifest['resources/js/home.js']['file']) }}"></script>
            @endif
            <script>
                // Inicializar AOS después de que todos los assets estén cargados
                window.addEventListener('load', function() {
                    AOS.init({
                        duration: 800,
                        easing: 'ease-in-out',
                        once: true,
                        offset: 100,
                        disable: false,
                    });
                    // Refrescar AOS después de cualquier cambio dinámico en el DOM
                    setTimeout(function() {
                        AOS.refresh();
                    }, 100);
                });
                
                // Observador de mutaciones para refrescar AOS cuando haya cambios en el DOM
                const observer = new MutationObserver(function() {
                    AOS.refresh();
                });
                
                observer.observe(document.body, {
                    childList: true,
                    subtree: true
                });
            </script>
        @else
            @vite(['resources/css/app.css', 'resources/css/home.css', 'resources/js/app.js', 'resources/js/home.js'])
        @endif
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
                            <p>&copy; {{ date('Y') }} Chasky. {{ __('home.footer.rights') }}</p>
                            <p class="mt-1">{{ __('home.footer.developed') }} ❤️ {{ __('home.footer.by_team') }}</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        @stack('scripts')
    </body>
</html>
