@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[60vh] flex items-center mb-16 mt-16">
        <!-- Gradient overlay con efecto de cristal -->
        <div class="absolute inset-0 bg-gradient-to-br from-white to-[#701516]/20"></div>
        
        <!-- Patrón de fondo animado -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute w-full h-full" style="background-image: radial-gradient(#701516 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>

        <div class="container mx-auto px-4 py-24 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-8 text-[#701516]" data-aos="fade-up">
                    {{ $title }}
                </h1>
                <p class="text-xl text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ $subtitle }}
                </p>
            </div>
        </div>
        
        <!-- Decorative wave -->
        <div class="absolute bottom-0 left-0 right-0 h-32 overflow-hidden">
            <svg class="absolute bottom-0 w-full h-full" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" 
                      class="fill-[#701516]/5"></path>
            </svg>
        </div>
    </section>

    <!-- Resumen del Proyecto -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <img src="{{ $featured_image }}" alt="{{ $title }}" class="rounded-xl shadow-xl w-full">
                </div>
                <div data-aos="fade-left">
                    <div class="mb-6">
                        <span class="inline-block px-4 py-2 bg-[#701516]/10 text-[#701516] rounded-full font-semibold mb-2">{{ $category }}</span>
                        <h2 class="text-3xl font-bold mb-4">Acerca del proyecto</h2>
                        <p class="text-gray-600">{{ $description }}</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <div>
                            <h3 class="font-semibold text-[#701516] mb-2">Cliente</h3>
                            <p class="text-gray-700">{{ $client }}</p>
                        </div>
                        <div>
                            <h3 class="font-semibold text-[#701516] mb-2">Fecha</h3>
                            <p class="text-gray-700">{{ $date }}</p>
                        </div>
                        <div>
                            <h3 class="font-semibold text-[#701516] mb-2">Servicios</h3>
                            <p class="text-gray-700">{{ $services }}</p>
                        </div>
                        <div>
                            <h3 class="font-semibold text-[#701516] mb-2">Tecnologías</h3>
                            <p class="text-gray-700">{{ $tech }}</p>
                        </div>
                    </div>
                    
                    @if(isset($website_url))
                    <a href="{{ $website_url }}" target="_blank" class="inline-flex items-center bg-[#701516] hover:bg-[#c40606] text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                        Visitar proyecto
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Detalles del Proyecto -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold mb-8 text-center" data-aos="fade-up">Objetivos y soluciones</h2>
                
                <div class="mb-16" data-aos="fade-up">
                    <h3 class="text-xl font-semibold mb-4 text-[#701516]">El desafío</h3>
                    <p class="text-gray-600 mb-4">{{ $challenge }}</p>
                </div>
                
                <div class="mb-16" data-aos="fade-up">
                    <h3 class="text-xl font-semibold mb-4 text-[#701516]">Nuestra solución</h3>
                    <p class="text-gray-600 mb-4">{{ $solution }}</p>
                </div>
                
                <div data-aos="fade-up">
                    <h3 class="text-xl font-semibold mb-4 text-[#701516]">Resultados</h3>
                    <p class="text-gray-600 mb-4">{{ $results }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Características del Proyecto -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center" data-aos="fade-up">Características principales</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($features as $feature)
                <div class="bg-gray-50 p-8 rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center text-white mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">{{ $feature['title'] }}</h3>
                    <p class="text-gray-600">{{ $feature['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Imágenes del Proyecto -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center" data-aos="fade-up">Galería del proyecto</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($gallery as $image)
                <div class="overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <img src="{{ $image }}" alt="{{ $title }} - Imagen {{ $loop->index + 1 }}" class="w-full h-64 object-cover transform hover:scale-110 transition duration-500">
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonios del Cliente -->
    @if(isset($testimonial))
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto bg-[#701516]/5 p-8 rounded-2xl relative" data-aos="fade-up">
                <div class="absolute -top-5 -left-5 text-[#701516] opacity-50">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                </div>
                
                <div class="text-center">
                    <p class="text-lg italic text-gray-700 mb-6">{{ $testimonial['text'] }}</p>
                    <div class="flex items-center justify-center">
                        <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] }}" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div class="text-left">
                            <p class="font-semibold text-[#701516]">{{ $testimonial['name'] }}</p>
                            <p class="text-sm text-gray-600">{{ $testimonial['position'] }}, {{ $testimonial['company'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Otros Proyectos -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center" data-aos="fade-up">Otros proyectos</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($related_projects as $project)
                <div class="group relative overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <img src="{{ $project['image'] }}" 
                         alt="{{ $project['title'] }}" 
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white mb-2">{{ $project['title'] }}</h3>
                            <p class="text-gray-200 mb-4">{{ $project['description'] }}</p>
                            <a href="{{ $project['url'] }}" class="inline-block px-6 py-2 bg-[#f4bc21] text-[#701516] rounded-full font-semibold hover:bg-[#f4bc21]/90 transition-colors">
                                Ver Proyecto
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-32 bg-gradient-to-br from-[#701516] to-[#c40606] text-white relative">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6" data-aos="fade-up">¿Listo para crear tu próximo proyecto?</h2>
                <p class="text-xl mb-10" data-aos="fade-up" data-aos-delay="100">Contáctanos hoy mismo y hagamos realidad tu visión.</p>
                <a href="/contacto" class="inline-block px-8 py-4 bg-white text-[#701516] font-bold rounded-full hover:bg-[#f4bc21] transition-colors" data-aos="fade-up" data-aos-delay="200">
                    ¡Conversemos!
                </a>
            </div>
        </div>
    </section>
@endsection
