@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen py-24">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <svg class="mx-auto h-24 w-24 text-[#701516] mb-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            
            <h1 class="text-4xl font-bold text-gray-900 mb-4">¡Gracias por contactarnos!</h1>
            <p class="text-xl text-gray-600 mb-8">Hemos recibido tu solicitud de nearshoring. Nuestro equipo revisará los detalles y te contactará pronto para discutir los siguientes pasos.</p>
            
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/servicios/nearshoring" class="bg-[#701516] text-white px-8 py-3 rounded-full font-bold hover:bg-[#701516]/90 transition duration-300">
                    Volver a Nearshoring
                </a>
                <a href="/" class="bg-gray-500 text-white px-8 py-3 rounded-full font-bold hover:bg-gray-600 transition duration-300">
                    Ir al Inicio
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
