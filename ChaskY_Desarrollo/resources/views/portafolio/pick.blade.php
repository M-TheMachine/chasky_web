@php
    $title = "Pick n Truck";
    $subtitle = "Conectando el Futuro del Transporte";
    $category = "Desarrollo Web";
    $description = "Pick n Truck (pickntruck.com) es una plataforma B2B revolucionaria que transforma la logística al conectar empresas de transporte con importadores y exportadores de manera eficiente. Este proyecto permite a las empresas de transporte publicar las rutas disponibles, mientras que los importadores y exportadores pueden ofertar cargas, participar en pujas y cerrar tratos directamente en la plataforma.";
    $client = "Pick n Truck";
    $date = "Mayo 2025";
    $services = "Desarrollo Web, Diseño UX/UI, Sistemas de Puja";
    $tech = "Laravel, Node.js, Tailwind CSS";
    $website_url = "https://pickntruck.com";
    
    $challenge = "El objetivo fue crear un ecosistema digital que facilite la colaboración entre negocios, reduzca costos y acelere los procesos de envío, estableciendo un nuevo estándar en la industria del transporte. Con un diseño intuitivo y herramientas avanzadas, Pick n Truck resuelve los desafíos logísticos mediante tecnología inteligente, ofreciendo una solución transparente y dinámica que optimiza las operaciones de carga a nivel global.";
    
    $solution = "La plataforma fue desarrollada con un stack tecnológico robusto y escalable: Laravel para construir un backend seguro y eficiente, gestionando la base de datos de rutas, ofertas y transacciones con alto rendimiento. Integramos Node.js para habilitar funcionalidades en tiempo real, como notificaciones de pujas y actualizaciones de estado, asegurando una experiencia fluida. Diseñamos una interfaz moderna y responsive con Tailwind CSS, garantizando una navegación clara y atractiva en dispositivos de escritorio y móviles. Implementamos un mecanismo de bidding que permite a los usuarios competir por cargas, con estadísticas en tiempo real y opciones para cerrar acuerdos directamente. El enfoque se centró en la escalabilidad, la seguridad de los datos y una interfaz que simplifique la interacción entre empresas, incluso en mercados internacionales.";
    
    $results = "Pick n Truck ha redefinido la forma en que las empresas de transporte e importación/exportación colaboran, conectando a miles de usuarios en un mercado competitivo. La plataforma ha facilitado acuerdos comerciales más rápidos y eficientes, con un sistema de pujas que maximiza el valor para ambas partes. Su diseño visual, que incluye representaciones de rutas y estadísticas claras, ha sido elogiado por su usabilidad y capacidad para gestionar operaciones complejas con facilidad. Pick n Truck demuestra nuestra habilidad para desarrollar soluciones tecnológicas que impulsan la innovación en sectores clave como la logística. Este proyecto refleja nuestro compromiso con la excelencia técnica y la creación de plataformas que generan impacto real en los negocios.";
    
    $features = [
        [
            'icon' => 'M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0',
            'title' => 'Gestión de Rutas',
            'description' => 'Sistema avanzado para que transportistas publiquen rutas disponibles con programación, capacidad y detalles de equipamiento.'
        ],
        [
            'icon' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z',
            'title' => 'Sistema de Pujas',
            'description' => 'Mecanismo de bidding en tiempo real que permite a importadores y exportadores competir por cargas con transparencia y eficiencia.'
        ],
        [
            'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01',
            'title' => 'Panel de Control',
            'description' => 'Interfaz completa para gestionar operaciones, seguimiento de transacciones y análisis de rendimiento con estadísticas en tiempo real.'
        ],
    ];
    
    $testimonial = [
        'text' => "Pick n Truck ha transformado completamente nuestra operación logística. La plataforma nos permite encontrar transportistas confiables para nuestras cargas y negociar precios justos en tiempo real. La interfaz es intuitiva y el sistema de pujas ha reducido nuestros costos de transporte en un 22% en los primeros seis meses.",
        'name' => 'Carlos Rodríguez',
        'position' => 'Director de Logística',
        'company' => 'ImportEx Global',
        'avatar' => asset('images/avatars/man3.jpg')
    ];
    
    $other_projects = [
        [
            'title' => 'En Memoria Bolivia',
            'image' => asset('memoria.png'),
            'url' => '/portafolio/memoria'
        ],
        [
            'title' => 'Mujeres al Volante Bolivia',
            'image' => asset('mav.png'),
            'url' => '/portafolio/mujeres-al-volante'
        ],
        [
            'title' => 'Galeno Quiz Médico',
            'image' => asset('galeno.jpeg'),
            'url' => '/portafolio/galeno'
        ],
    ];
@endphp

@extends('layouts.app')

@section('content')
    <!-- Hero Section with Side-by-Side Layout -->
    <section class="py-32 mt-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="order-2 lg:order-1" data-aos="fade-right">
                    <div class="max-w-xl">
                        <div class="flex flex-wrap gap-4 mb-10">
                            <span class="px-4 py-1 bg-[#701516] text-white rounded-full text-sm">{{ $category }}</span>
                            <span class="px-4 py-1 bg-gray-200 text-gray-700 rounded-full text-sm">{{ $client }}</span>
                            <span class="px-4 py-1 bg-gray-200 text-gray-700 rounded-full text-sm">{{ $date }}</span>
                        </div>
                        
                        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-[#701516]">{{ $title }}</h1>
                        <p class="text-xl text-gray-600 mb-12">{{ $subtitle }}</p>
                        
                        <p class="text-gray-700 mb-16 leading-relaxed">
                            {{ $description }}
                        </p>
                        
                        <div class="flex gap-4">
                            <a href="{{ $website_url }}" target="_blank" class="px-8 py-3 bg-[#f4bc21] text-[#701516] font-semibold rounded-full hover:bg-[#f4bc21]/90 transition-colors flex items-center shadow-lg">
                                <span>{{ __('portfolio.detail.visit_site') }}</span>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Featured Image -->
                <div class="order-1 lg:order-2" data-aos="fade-left">
                    <div class="overflow-hidden rounded-xl shadow-xl">
                        <img src="{{ asset('pick.png') }}" alt="{{ $title }}" class="w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detalles del Proyecto con Screenshot -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <!-- Screenshot de la plataforma -->
                <div data-aos="fade-right">
                    <div class="overflow-hidden rounded-xl shadow-xl">
                        <img src="{{ asset('pick2.png') }}" alt="{{ $title }} Screenshot" class="w-full h-auto">
                    </div>
                </div>
                
                <!-- Columna de metadatos -->
                <div data-aos="fade-left">
                    <div class="bg-white rounded-xl p-8 shadow-lg">
                        <h2 class="text-2xl md:text-3xl font-bold mb-8 text-[#701516]">{{ __('portfolio.detail.challenge') }}</h2>
                        <p class="text-gray-700 leading-relaxed mb-8">{{ $challenge }}</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                            <div>
                                <h3 class="text-lg font-semibold mb-3 text-[#701516]">{{ __('portfolio.detail.services') }}</h3>
                                <p class="text-gray-700">{{ $services }}</p>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-3 text-[#701516]">{{ __('portfolio.detail.client') }}</h3>
                                <p class="text-gray-700">{{ $client }}</p>
                            </div>
                        </div>
                        
                        <h3 class="text-lg font-semibold mb-3 text-[#701516]">{{ __('portfolio.detail.tech') }}</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach(explode(', ', $tech) as $technology)
                                <span class="px-3 py-1 bg-gray-200 text-gray-800 rounded-full text-sm">{{ $technology }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Nuestra Solución -->
            <div class="max-w-4xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold mb-6 text-[#701516]" data-aos="fade-up">{{ __('portfolio.detail.solution') }}</h2>
                <p class="text-gray-700 leading-relaxed mb-12" data-aos="fade-up">{{ $solution }}</p>
                
                <!-- Características -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    @foreach($features as $feature)
                        <div class="bg-white p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#701516]/10 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#701516]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold">{{ $feature['title'] }}</h3>
                            </div>
                            <p class="text-gray-600">{{ $feature['description'] }}</p>
                        </div>
                    @endforeach
                </div>
                
                <!-- Resultados -->
                <h2 class="text-2xl md:text-3xl font-bold mb-6 text-[#701516]" data-aos="fade-up">{{ __('portfolio.detail.results') }}</h2>
                <p class="text-gray-700 leading-relaxed mb-16" data-aos="fade-up">{{ $results }}</p>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="py-20 bg-white mt-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-gradient-to-br from-[#701516] to-[#c40606] rounded-2xl p-8 md:p-12 text-white shadow-xl" data-aos="fade-up">
                <svg class="w-16 h-16 text-white/20 mb-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                </svg>
                
                <p class="text-xl leading-relaxed mb-8">{{ $testimonial['text'] }}</p>
                
                <div class="flex items-center">
                    <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] }}" class="w-16 h-16 rounded-full mr-4 border-2 border-white/30">
                    <div>
                        <h4 class="text-lg font-semibold">{{ $testimonial['name'] }}</h4>
                        <p class="text-white/80">{{ $testimonial['position'] }} - {{ $testimonial['company'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-24 bg-gradient-to-br from-[#701516] to-[#c40606] text-white relative mt-16">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-8" data-aos="fade-up">
                    {{ __('portfolio.cta.title') }}
                </h2>
                <p class="text-xl mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ __('portfolio.cta.subtitle') }}
                </p>
                <a href="/contacto" class="inline-block bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold py-4 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    {{ __('portfolio.cta.button') }}
                </a>
            </div>
        </div>
    </section>
@endsection
