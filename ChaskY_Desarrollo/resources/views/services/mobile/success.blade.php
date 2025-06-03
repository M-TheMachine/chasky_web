@extends('layouts.app')

@section('content')
    <section class="relative min-h-screen flex items-center">
        <!-- Gradient overlay con efecto de cristal -->
        <div class="absolute inset-0 bg-gradient-to-br from-white to-[#701516]/20"></div>
        
        <!-- Patrón de fondo animado -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute w-full h-full" style="background-image: radial-gradient(#701516 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>

        <div class="container mx-auto px-4 py-24 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="bg-white rounded-2xl shadow-xl p-12 mb-8">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-8">
                        <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>

                    <h1 class="text-3xl md:text-4xl font-bold mb-4 text-[#701516]">¡Gracias por contactarnos!</h1>
                    <p class="text-gray-600 text-lg mb-8">
                        Hemos recibido tu solicitud y nos pondremos en contacto contigo pronto para discutir tu proyecto de aplicación móvil.
                    </p>
                    
                    <div class="flex justify-center space-x-4">
                        <a href="/services/mobile" class="inline-block bg-[#701516] text-white font-bold py-3 px-8 rounded-full hover:bg-[#701516]/90 transition duration-300">
                            Volver a Desarrollo Móvil
                        </a>
                        <a href="/" class="inline-block border-2 border-[#701516] text-[#701516] font-bold py-3 px-8 rounded-full hover:bg-[#701516] hover:text-white transition duration-300">
                            Ir al Inicio
                        </a>
                    </div>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
