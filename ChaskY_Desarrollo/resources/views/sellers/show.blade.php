<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $seller->name }} - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-900">
                    {{ config('app.name', 'Laravel') }}
                </h1>
                @auth
                    <a href="{{ route('sellers.index') }}" class="text-blue-500 hover:text-blue-700">
                        {{ __('Volver al Panel') }}
                    </a>
                @endauth
            </div>
        </header>

        <main class="flex-grow bg-gradient-to-br from-purple-700 to-pink-500 py-12 px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                    <!-- Información del vendedor -->
                    <div class="relative p-8">
                        <!-- Foto de perfil -->
                        <div class="relative -mt-24 mb-6">
                            <div class="w-28 h-28 mx-auto overflow-hidden rounded-full border-4 border-white shadow-lg">
                                <img class="w-full h-full object-cover" 
                                     src="{{ $seller->photo_url }}" 
                                     alt="{{ $seller->name }}">
            
            <!-- Detalles -->
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-800">{{ $seller->name }}</h1>
                <p class="text-lg text-gray-600 font-medium mt-2">{{ $seller->position }}</p>
                @if($seller->bio)
                    <p class="mt-4 text-gray-500 max-w-2xl mx-auto">{{ $seller->bio }}</p>
                @endif
            </div>

            <!-- Botones de contacto -->
            <div class="mt-8 space-y-4 max-w-md mx-auto">
                <!-- Email -->
                <a href="mailto:{{ $seller->email }}" 
                   class="flex items-center justify-center space-x-2 bg-blue-50 text-blue-600 py-3 rounded-lg hover:bg-blue-100 transition duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>{{ $seller->email }}</span>
                </a>

                <!-- Teléfono -->
                <a href="tel:{{ $seller->phone }}" 
                   class="flex items-center justify-center space-x-2 bg-green-50 text-green-600 py-3 rounded-lg hover:bg-green-100 transition duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>{{ $seller->phone }}</span>
                </a>

                @if($seller->whatsapp)
                <!-- WhatsApp -->
                <a href="{{ $seller->whatsapp_link }}" 
                   target="_blank"
                   class="flex items-center justify-center space-x-2 bg-green-500 text-white py-3 rounded-lg hover:bg-green-600 transition duration-300">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.04 14.69 2 12.04 2ZM12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.8 7.37 7.5 3.67 12.05 3.67ZM8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z"/>
                    </svg>
                    <span>WhatsApp</span>
                </a>
                @endif

                @if($seller->linkedin)
                <!-- LinkedIn -->
                <a href="{{ $seller->linkedin }}" 
                   target="_blank"
                   class="flex items-center justify-center space-x-2 bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                    <span>LinkedIn</span>
                </a>
                @endif
            </div>

            <!-- Guardar contacto -->
            <div class="mt-8">
                <a href="#" 
                   class="block w-full bg-gradient-to-r from-purple-600 to-pink-500 text-white text-center py-3 rounded-lg font-semibold hover:opacity-90 transition duration-300"
                   onclick="saveContact('{{ $seller->name }}', '{{ $seller->phone }}', '{{ $seller->email }}')">
                    Guardar Contacto
                </a>
            </div>
                </div>
            </div>
        </main>

        <footer class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                <p class="text-center text-gray-500 text-sm">
                    &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. {{ __('Todos los derechos reservados.') }}
                </p>
            </div>
        </footer>
    </div>

    <script>
    function saveContact(name, phone, email, whatsapp = '', linkedin = '', position = '', bio = '') {
        // Crear el contacto vCard con información adicional
        const vcard = `BEGIN:VCARD
VERSION:3.0
FN:${name}
${position ? `TITLE:${position}\n` : ''}
TEL;TYPE=WORK:${phone}
${whatsapp ? `TEL;TYPE=CELL:${whatsapp}\n` : ''}
EMAIL;TYPE=WORK:${email}
${linkedin ? `URL:${linkedin}\n` : ''}
${bio ? `NOTE:${bio}\n` : ''}
END:VCARD`;

        // Crear el blob y descargar
        const blob = new Blob([vcard], { type: 'text/vcard' });
        const url = window.URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.href = url;
        link.setAttribute('download', `${name}.vcf`);
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        window.URL.revokeObjectURL(url);
    }
    </script>
</body>
</html>
