@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[70vh] flex items-center mb-24 mt-16">
        <!-- Gradient overlay con efecto de cristal -->
        <div class="absolute inset-0 bg-gradient-to-br from-white to-[#701516]/20"></div>
        
        <!-- Patrón de fondo animado -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute w-full h-full" style="background-image: radial-gradient(#701516 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>

        <div class="container mx-auto px-4 py-24 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-8 text-[#701516]" data-aos="fade-up">
                    {{ __('services.hero.title') }}
                </h1>
                <p class="text-xl text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ __('services.hero.subtitle') }}
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

    <!-- Servicios Principales -->
    <section class="py-24 bg-gray-50 mb-24">
        <div class="container mx-auto px-4">
            <!-- Desarrollo Web -->
            <div class="mb-32" data-aos="fade-up">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="order-2 md:order-1">
                        <h2 class="text-3xl font-bold mb-6 gradient-text">{{ __('services.web_dev.title') }}</h2>
                        <p class="text-gray-600 mb-6">{{ __('services.web_dev.description') }}</p>
                        <ul class="space-y-4">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                {{ __('services.web_dev.features.feature1') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Optimización para motores de búsqueda (SEO)
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Integración con sistemas de gestión de contenido
                            </li>
                        </ul>
                    </div>
                    <div class="order-1 md:order-2 flex justify-center items-center">
                        <div class="bg-gradient-to-br from-[#701516] to-[#c40606] p-12 rounded-full shadow-xl transform hover:scale-110 transition duration-500">
                            <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Marketing Digital -->
            <div class="mb-32" data-aos="fade-up">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="flex justify-center items-center">
                        <div class="bg-gradient-to-br from-[#701516] to-[#c40606] p-12 rounded-full shadow-xl transform hover:scale-110 transition duration-500">
                            <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold mb-6 gradient-text">{{ __('services.marketing.title') }}</h2>
                        <p class="text-gray-600 mb-6">{{ __('services.marketing.description') }}</p>
                        <ul class="space-y-4">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                {{ __('services.marketing.features.feature1') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Campañas de email marketing
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Publicidad en redes sociales y Google Ads
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Diseño UX/UI -->
            <div class="mb-32" data-aos="fade-up">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="order-2 md:order-1">
                        <h2 class="text-3xl font-bold mb-6 gradient-text">{{ __('services.uxui.title') }}</h2>
                        <p class="text-gray-600 mb-6">{{ __('services.uxui.description') }}</p>
                        <ul class="space-y-4">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                {{ __('services.uxui.features.feature1') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Prototipado y wireframes
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Diseño de interfaces modernas
                            </li>
                        </ul>
                    </div>
                    <div class="order-1 md:order-2 flex justify-center items-center">
                        <div class="bg-gradient-to-br from-[#701516] to-[#c40606] p-12 rounded-full shadow-xl transform hover:scale-110 transition duration-500">
                            <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offshoring -->
            <div class="mb-32" data-aos="fade-up">                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="flex justify-center items-center">
                        <div class="bg-gradient-to-br from-[#701516] to-[#c40606] p-12 rounded-full shadow-xl transform hover:scale-110 transition duration-500">
                            <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold mb-6 gradient-text">{{ __('services.offshoring.title') }}</h2>
                        <p class="text-gray-600 mb-6">{{ __('services.offshoring.description') }}</p>
                        <ul class="space-y-4">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                {{ __('services.offshoring.features.feature1') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Gestión de proyectos completos
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Soporte técnico 24/7
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Nearshoring -->
            <div class="mb-32" data-aos="fade-up">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="order-2 md:order-1">
                        <h2 class="text-3xl font-bold mb-6 gradient-text">{{ __('services.nearshoring.title') }}</h2>
                        <p class="text-gray-600 mb-6">{{ __('services.nearshoring.description') }}</p>
                        <ul class="space-y-4">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                {{ __('services.nearshoring.features.feature1') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Comunicación fluida y sin barreras
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Equipo altamente calificado
                            </li>
                        </ul>
                    </div>
                    <div class="order-1 md:order-2 flex justify-center items-center">
                        <div class="bg-gradient-to-br from-[#701516] to-[#c40606] p-12 rounded-full shadow-xl transform hover:scale-110 transition duration-500">
                            <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-32 bg-gradient-to-br from-[#701516] to-[#c40606] text-white relative mt-16">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-8" data-aos="fade-up">
                    {{ __('services.cta.title') }}
                </h2>
                <p class="text-xl mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ __('services.cta.subtitle') }}
                </p>
                <a href="/contacto" class="inline-block bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold py-4 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    {{ __('services.cta.button') }}
                </a>
            </div>
        </div>
    </section>
@endsection
