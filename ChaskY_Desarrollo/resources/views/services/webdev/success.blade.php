@extends('layouts.app')

@section('content')
    <!-- Success Section -->
    <section class="relative min-h-screen flex items-center mt-16">
        <!-- Gradient overlay con efecto de cristal -->
        <div class="absolute inset-0 bg-gradient-to-br from-white to-[#701516]/20"></div>
        
        <!-- Patrón de fondo animado -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute w-full h-full" style="background-image: radial-gradient(#701516 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>

        <div class="container mx-auto px-4 py-24 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="bg-white rounded-xl p-12 shadow-lg" data-aos="fade-up">
                    <div class="w-20 h-20 mx-auto bg-green-100 rounded-full flex items-center justify-center mb-8">
                        <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>

                    <h1 class="text-4xl font-bold mb-6 text-[#701516]">¡Gracias por tu interés!</h1>
                    
                    <p class="text-xl text-gray-600 mb-8">
                        Hemos recibido tu solicitud exitosamente. Nuestro equipo de desarrollo la revisará y se pondrá en contacto contigo dentro de las próximas 24 horas hábiles para discutir los detalles de tu proyecto.
                    </p>

                    <div class="space-y-4">
                        <a href="{{ route('home') }}" 
                           class="inline-block bg-[#701516] text-white font-bold py-3 px-8 rounded-full hover:bg-[#701516]/90 transition duration-300">
                            Volver al Inicio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
