@php
    $title = __('portfolio.projects.galeno.title');
    $subtitle = __('portfolio.projects.galeno.subtitle');
    $featured_image = asset('galeno.jpeg');
    $category = __('portfolio.projects.galeno.category');
    $description = __('portfolio.projects.galeno.description');
    $client = __('portfolio.projects.galeno.client');
    $date = __('portfolio.projects.galeno.date');
    $services = __('portfolio.projects.galeno.services');
    $tech = "Flutter, Dart, Firebase, Cloud Functions";
    $website_url = "#";
    
    $challenge = __('portfolio.projects.galeno.challenge');
    $solution = __('portfolio.projects.galeno.solution');
    $results = __('portfolio.projects.galeno.results');
    
    $features = [
        [
            'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
            'title' => __('portfolio.projects.galeno.features.0.title'),
            'description' => __('portfolio.projects.galeno.features.0.description')
        ],
        [
            'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
            'title' => __('portfolio.projects.galeno.features.1.title'),
            'description' => __('portfolio.projects.galeno.features.1.description')
        ],
        [
            'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
            'title' => __('portfolio.projects.galeno.features.2.title'),
            'description' => __('portfolio.projects.galeno.features.2.description')
        ],
    ];
    
    $gallery = [
        asset('galeno.jpeg'),
        asset('galeno1.jpeg'),
        asset('galeno2.jpeg'),
    ];
    
    $testimonial = [
        'text' => __('portfolio.projects.galeno.testimonial.text'),
        'name' => __('portfolio.projects.galeno.testimonial.name'),
        'position' => __('portfolio.projects.galeno.testimonial.position'),
        'company' => __('portfolio.projects.galeno.testimonial.company'),
        'avatar' => asset('images/avatars/man5.jpg')
    ];
    
    $other_projects = [
        [
            'title' => __('portfolio.projects.memoria.title'),
            'image' => asset('memoria.png'),
            'url' => '/portafolio/memoria'
        ],
        [
            'title' => __('portfolio.projects.mujeres_al_volante.title'),
            'image' => asset('mav.png'),
            'url' => '/portafolio/mujeres-al-volante'
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
                                <span>{{ __('portfolio.detail.download_app') }}</span>
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

    <!-- Detalles del Proyecto -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Columna de metadatos -->
                <div data-aos="fade-up" class="bg-white rounded-xl p-8 shadow-lg mb-16">
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
    
    <!-- Galería de Imágenes en 3 columnas -->
    <section class="py-20 bg-gray-50 mb-16">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-bold mb-10 text-center text-[#701516]" data-aos="fade-up">{{ __('portfolio.detail.gallery') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($gallery as $image)
                    <div class="overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <img src="{{ $image }}" alt="{{ $title }} Screenshot {{ $loop->index + 1 }}" class="w-full h-auto object-cover aspect-[3/4]">
                    </div>
                @endforeach
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
