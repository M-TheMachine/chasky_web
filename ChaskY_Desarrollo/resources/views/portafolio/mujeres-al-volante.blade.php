@php
    $title = __('portfolio.projects.mujeres_al_volante.title');
    $subtitle = __('portfolio.projects.mujeres_al_volante.subtitle');
    $featured_image = asset('mav.png');
    $category = __('portfolio.projects.mujeres_al_volante.category');
    $description = __('portfolio.projects.mujeres_al_volante.description');
    $client = __('portfolio.projects.mujeres_al_volante.client');
    $date = __('portfolio.projects.mujeres_al_volante.date');
    $services = __('portfolio.projects.mujeres_al_volante.services');
    $tech = "Flutter, Dart, Firebase, Google Maps API";
    $website_url = "https://play.google.com/store/apps/details?id=com.mujerv.pasajero";
    
    $challenge = __('portfolio.projects.mujeres_al_volante.challenge');
    $solution = __('portfolio.projects.mujeres_al_volante.solution');
    $results = __('portfolio.projects.mujeres_al_volante.results');
    
    $features = [
        [
            'icon' => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z',
            'title' => __('portfolio.projects.mujeres_al_volante.features.0.title'),
            'description' => __('portfolio.projects.mujeres_al_volante.features.0.description')
        ],
        [
            'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z',
            'title' => __('portfolio.projects.mujeres_al_volante.features.1.title'),
            'description' => __('portfolio.projects.mujeres_al_volante.features.1.description')
        ],
        [
            'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
            'title' => __('portfolio.projects.mujeres_al_volante.features.2.title'),
            'description' => __('portfolio.projects.mujeres_al_volante.features.2.description')
        ],
    ];
    
    $gallery = [
        asset('mav.png'),
        asset('mav1.png'),
    ];
    
    $testimonial = [
        'text' => __('portfolio.projects.mujeres_al_volante.testimonial.text'),
        'name' => __('portfolio.projects.mujeres_al_volante.testimonial.name'),
        'position' => __('portfolio.projects.mujeres_al_volante.testimonial.position'),
        'company' => __('portfolio.projects.mujeres_al_volante.testimonial.company'),
        'avatar' => asset('images/avatars/woman2.jpg')
    ];
    
    $other_projects = [
        [
            'title' => __('portfolio.projects.memoria.title'),
            'image' => asset('memoria.png'),
            'url' => '/portafolio/memoria'
        ],
        [
            'title' => __('portfolio.projects.pick.title'),
            'image' => asset('pick.png'),
            'url' => '/portafolio/pick'
        ],
    ];
@endphp
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
                        
                        <div class="flex gap-4 mt-6">
                            <a href="{{ $website_url }}" target="_blank" class="px-8 py-4 bg-[#f4bc21] text-[#701516] font-semibold rounded-full hover:bg-[#f4bc21]/90 transition-colors flex items-center shadow-lg">
                                <span>Descarga la app</span>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Featured Image -->
                <div class="order-1 lg:order-2" data-aos="fade-left">
                    <div class="w-1/2 mx-auto overflow-hidden rounded-xl shadow-xl">
                        <img src="{{ $featured_image }}" alt="{{ $title }}" class="w-full h-auto">
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
                    <div class="w-1/2 mx-auto overflow-hidden rounded-xl shadow-xl">
                        <img src="{{ asset('mav1.png') }}" alt="{{ $title }} Screenshot" class="w-full h-auto">
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
