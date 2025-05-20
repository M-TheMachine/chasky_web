@php
    $title = "En Memoria Bolivia";
    $subtitle = "Un Tributo Digital a la Vida";
    $category = "Desarrollo Web";
    $description = "En Memoria Bolivia (enmemoriabolivia.com) es una innovadora plataforma web diseñada para preservar y honrar la memoria de seres queridos fallecidos. Este proyecto ofrece a los usuarios un espacio digital donde pueden crear tributos personalizados con fotografías, videos, historias, música y logros que celebran la vida de quienes ya no están.";
    $client = "En Memoria Bolivia";
    $date = "Mayo 2025";
    $services = "Desarrollo Web, Diseño UX/UI, Integración de Códigos QR";
    $tech = "Laravel, Node.js, Tailwind CSS";
    $website_url = "https://enmemoriabolivia.com";
    
    $challenge = "Nuestro cliente buscaba crear una plataforma que combinara tecnología moderna con la sensibilidad necesaria para manejar un tema tan delicado como el recuerdo de seres queridos fallecidos. El desafío consistía en desarrollar una solución que fuera técnicamente robusta pero emocionalmente significativa, integrando además tecnología física (medallones QR) con una experiencia digital impecable.";
    
    $solution = "Para dar vida a esta plataforma, implementamos un stack tecnológico moderno y eficiente que incluye Laravel para construir un backend sólido, Node.js para manejar funcionalidades en tiempo real y optimizar la carga de contenido multimedia, y Tailwind CSS para diseñar una interfaz elegante y responsive. Desarrollamos un sistema para generar y vincular códigos QR personalizados a los perfiles conmemorativos, conectando el mundo físico con el digital. Nuestro equipo priorizó la escalabilidad, la seguridad y la usabilidad, asegurando que los usuarios puedan cargar contenido multimedia sin complicaciones y que los datos sensibles estén protegidos.";
    
    $results = "En Memoria Bolivia se ha convertido en un puente entre generaciones, un lugar donde las historias y legados perduran. La plataforma ha permitido a familias de Bolivia y más allá crear espacios significativos para honrar a sus seres queridos, mientras que los medallones con QR han añadido una dimensión innovadora al duelo y la conmemoración. El diseño centrado en el usuario y la robustez técnica han recibido elogios por su facilidad de uso y su capacidad para manejar contenido emocional con respeto y dignidad.";
    
    $features = [
        [
            'icon' => 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z',
            'title' => 'Galería Multimedia',
            'description' => 'Los usuarios pueden cargar y organizar fotos, videos y música que tengan significado especial, creando una colección multimedia completa.'
        ],
        [
            'icon' => 'M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4',
            'title' => 'Medallones QR',
            'description' => 'Integración de códigos QR personalizados para medallones físicos que pueden colocarse en lápidas, urnas o espacios conmemorativos.'
        ],
        [
            'icon' => 'M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z',
            'title' => 'Historias de Vida',
            'description' => 'Espacio para compartir relatos, anécdotas y logros que celebran la vida de la persona, creando un legado digital accesible.'
        ],
    ];
    
    $testimonial = [
        'text' => "En Memoria Bolivia ha transformado la manera en que honramos a nuestros seres queridos. Esta plataforma nos ha permitido preservar recuerdos que antes se perdían con el tiempo, y los medallones QR han traído una dimensión completamente nueva a nuestro cementerio familiar. Es una solución tecnológica con alma.",
        'name' => 'Luis Fernández',
        'position' => 'Director',
        'company' => 'En Memoria Bolivia',
        'avatar' => asset('images/avatars/man2.jpg')
    ];
    
    $other_projects = [
        [
            'title' => 'Pick n Truck',
            'image' => asset('pick.png'),
            'url' => '/portafolio/pick'
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
                        <div class="flex flex-wrap gap-4 mb-6">
                            <span class="px-4 py-1 bg-[#701516] text-white rounded-full text-sm">{{ $category }}</span>
                            <span class="px-4 py-1 bg-gray-200 text-gray-700 rounded-full text-sm">{{ $client }}</span>
                            <span class="px-4 py-1 bg-gray-200 text-gray-700 rounded-full text-sm">{{ $date }}</span>
                        </div>
                        
                        <h1 class="text-4xl md:text-5xl font-bold mb-6 text-[#701516]">{{ $title }}</h1>
                        <p class="text-xl text-gray-600 mb-8">{{ $subtitle }}</p>
                        
                        <p class="text-gray-700 mb-10 leading-relaxed">
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
                        <img src="{{ asset('memoria.png') }}" alt="{{ $title }}" class="w-full h-auto">
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
                        <img src="{{ asset('memoria2.png') }}" alt="{{ $title }} Screenshot" class="w-full h-auto">
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
