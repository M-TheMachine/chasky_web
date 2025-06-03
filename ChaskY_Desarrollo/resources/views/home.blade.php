@extends('layouts.app')

@section('content')
    <div class="w-full overflow-hidden">
        <section class="relative min-h-screen flex items-center">
            <!-- Gradient overlay con efecto de cristal -->
            <div class="absolute inset-0 bg-gradient-to-br from-white to-[#701516]/20"></div>
            
            <!-- Patrón de fondo animado -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute w-full h-full" style="background-image: radial-gradient(#701516 1px, transparent 1px); background-size: 50px 50px;"></div>
            </div>

            <!-- Contenido principal -->
            <div class="container mx-auto px-4 relative pt-32 w-full max-w-[1280px]">
                <div class="grid md:grid-cols-2 gap-6 lg:gap-12 items-center">
                    <div class="text-left w-full" data-aos="fade-right">
                        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight text-[#701516]">
                            {{ __('home.hero.title') }}
                            <span class="typing-text text-[#f4bc21] block mt-2"></span>
                        </h1>
                        <p class="text-xl mb-8 text-gray-600">{{ __('home.hero.subtitle') }}</p>
                        <div class="flex flex-wrap gap-4">
                            <a href="/servicios" class="bg-[#701516] hover:bg-[#701516]/90 text-white font-bold py-3 px-8 rounded-full transition-all duration-500 transform hover:scale-105 hover:shadow-2xl">
                                {{ __('home.hero.cta_button') }}
                            </a>
                            <a href="#contact" class="border-2 border-[#701516] text-[#701516] hover:bg-[#701516] hover:text-white font-bold py-3 px-8 rounded-full transition-all duration-500 transform hover:scale-105 hover:shadow-2xl">
                                {{ __('home.hero.contact_button') }}
                            </a>
                        </div>
                    </div>
                    <div class="relative w-full hidden md:block" data-aos="fade-left">
                        <!-- Elementos decorativos flotantes -->
                        <div class="floating-container relative w-full aspect-square">
                            <!-- Círculo decorativo -->
                            <div class="absolute top-1/4 right-1/4 w-64 h-64 bg-gradient-to-br from-[#f4bc21]/20 to-[#701516]/20 rounded-full blur-xl transform animate-float-slow"></div>
                            
                            <!-- Iconos tecnológicos flotantes -->
                            <img src="{{ asset('icons/react.svg') }}" 
                                class="absolute top-0 right-0 w-16 h-16 text-blue-400 animate-float" 
                                style="animation-delay: 0.2s">
                            <img src="{{ asset('icons/javascript.svg') }}" 
                                class="absolute bottom-1/4 right-1/4 w-12 h-12 text-yellow-400 animate-float" 
                                style="animation-delay: 0.4s">
                            <img src="{{ asset('icons/python.svg') }}" 
                                class="absolute top-1/3 left-1/4 w-14 h-14 text-blue-500 animate-float" 
                                style="animation-delay: 0.6s">
                            
                            <!-- Formas geométricas decorativas -->
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-72 h-72 border-2 border-[#701516]/20 rounded-full animate-spin-slow"></div>
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-48 h-48 border-2 border-[#f4bc21]/20 rounded-full animate-spin-slow-reverse"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Ondas decorativas en la parte inferior -->
            <div class="absolute bottom-0 left-0 right-0 h-32 overflow-hidden">
                <svg class="absolute bottom-0 w-full h-full" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" 
                          class="fill-[#701516]/5"></path>
                </svg>
            </div>
        </section>

        <section class="w-full py-24" id="servicios">
            <div class="container mx-auto px-4 max-w-[1280px]">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 gradient-text">{{ __('home.services.title') }}</h2>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">{{ __('home.services.subtitle') }}</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-full">
                    <a href="/servicios/desarrollo-web" class="group bg-white rounded-xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up">
                        <div class="text-[#701516] mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-[#701516] mb-4">{{ __('home.services.web_dev.title') }}</h3>
                        <p class="text-gray-600">{{ __('home.services.web_dev.description') }}</p>
                    </a>
                    <a href="/marketing" class="group bg-white rounded-xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-[#c40606] mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-[#701516] mb-4">{{ __('home.services.marketing.title') }}</h3>
                        <p class="text-gray-600">{{ __('home.services.marketing.description') }}</p>
                    </a>
                    <a href="/services/mobile" class="group bg-white rounded-xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-[#701516] mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-[#701516] mb-4">{{ __('home.services.mobile.title') }}</h3>
                        <p class="text-gray-600">{{ __('home.services.mobile.description') }}</p>
                    </a>
                    <a href="/servicios/ux-ui" class="group bg-white rounded-xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                        <div class="text-[#f4bc21] mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">{{ __('home.services.ux.title') }}</h3>
                        <p class="text-gray-600">{{ __('home.services.ux.description') }}</p>
                    </a>
                    <a href="/servicios/offshoring" class="group bg-white rounded-xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="400">
                        <div class="text-[#701516] mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-[#701516] mb-4">{{ __('home.services.offshoring.title') }}</h3>
                        <p class="text-gray-600">{{ __('home.services.offshoring.description') }}</p>
                    </a>
                    <a href="/servicios/nearshoring" class="group bg-white rounded-xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="500">
                        <div class="text-[#c40606] mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-[#701516] mb-4">{{ __('home.services.nearshoring.title') }}</h3>
                        <p class="text-gray-600">{{ __('home.services.nearshoring.description') }}</p>
                    </a>
                </div>
                <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="400">
                    <a href="/servicios" class="bg-gradient-to-r from-[#701516] to-[#c40606] text-white font-semibold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105 hover:shadow-lg inline-flex items-center">
                        {{ __('home.services.view_all') }}
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Banner Pasantías -->
        <section class="relative bg-gradient-to-r from-[#701516] to-[#c40606] py-16 overflow-hidden">
            <!-- Patrón de fondo -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute w-full h-full" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px;"></div>
            </div>

            <!-- Overlay con gradiente -->
            <div class="absolute inset-0 bg-black/20"></div>

            <div class="container mx-auto px-4 relative z-10">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                    <!-- Contenido -->
                    <div class="text-white lg:w-2/3">
                        <div class="inline-flex items-center bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6" data-aos="fade-right">
                            <span class="animate-ping w-2 h-2 bg-[#f4bc21] rounded-full mr-2"></span>
                            <span class="text-[#f4bc21] text-sm font-medium">¡Convocatoria abierta! 5 plazas disponibles</span>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold mb-4" data-aos="fade-right" data-aos-delay="100">
                            Programa de Pasantías Chasky 2025
                        </h2>
                        <p class="text-lg text-white/90 mb-8" data-aos="fade-right" data-aos-delay="200">
                            Inicia tu carrera profesional en una empresa líder en tecnología. Desarrolla tu potencial en Desarrollo de Software o Marketing Digital junto a expertos del sector.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="/pasantias" class="inline-flex items-center bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold py-3 px-6 rounded-full transition-all duration-300 transform hover:scale-105 group" data-aos="fade-right" data-aos-delay="300">
                                <span>Conoce más</span>
                                <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                            <span class="text-white/80 flex items-center text-sm" data-aos="fade-right" data-aos-delay="400">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Postulaciones hasta el 15 de junio
                            </span>
                        </div>
                    </div>

                    <!-- Características -->
                    <div class="lg:w-1/3 grid grid-cols-2 gap-4" data-aos="fade-left">
                        <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg">
                            <div class="text-[#f4bc21] mb-2">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-semibold">Proyectos Reales</h3>
                            <p class="text-white/80 text-sm">Trabaja en proyectos activos con clientes</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg">
                            <div class="text-[#f4bc21] mb-2">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-semibold">Mentoría</h3>
                            <p class="text-white/80 text-sm">Guía de expertos del sector</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg">
                            <div class="text-[#f4bc21] mb-2">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-semibold">Certificación</h3>
                            <p class="text-white/80 text-sm">Certificado oficial al finalizar</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg">
                            <div class="text-[#f4bc21] mb-2">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <h3 class="text-white font-semibold">Oportunidad Laboral</h3>
                            <p class="text-white/80 text-sm">Posibilidad de contratación</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gray-50 py-24 px-4 overflow-hidden">
            <div class="container mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 gradient-text">{{ __('home.portfolio.title') }}</h2>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">{{ __('home.portfolio.subtitle') }}</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-4">
                    <div class="bg-[#701516] hover:bg-[#8a1a1b] rounded-xl shadow-lg overflow-hidden transition-all duration-300 transform hover:scale-105 hover:shadow-xl group" data-aos="fade-up">
                        <a href="/portafolio/mujeres-al-volante" class="block h-full">
                            <div class="p-8 text-white h-full flex flex-col justify-between">
                                <div>
                                    <div class="mb-4 flex justify-between items-center">
                                        <span class="bg-black/30 text-white text-xs px-3 py-1 rounded-full font-medium">App Móvil</span>
                                        <svg class="w-8 h-8 text-white group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2 text-white">{{ __('portfolio.projects.mujeres_al_volante.title') }}</h3>
                                    <p class="text-white text-sm mb-6">{{ __('portfolio.projects.mujeres_al_volante.subtitle') }}</p>
                                </div>
                                <div class="pt-4 border-t border-white/20 flex items-center text-xs text-white">
                                    <span class="mr-2">Tecnologías:</span>
                                    <span class="font-medium">Flutter, Firebase</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="bg-[#701516] hover:bg-[#8a1a1b] rounded-xl shadow-lg overflow-hidden transition-all duration-300 transform hover:scale-105 hover:shadow-xl group" data-aos="fade-up" data-aos-delay="100">
                        <a href="/portafolio/galeno" class="block h-full">
                            <div class="p-8 text-white h-full flex flex-col justify-between">
                                <div>
                                    <div class="mb-4 flex justify-between items-center">
                                        <span class="bg-black/30 text-white text-xs px-3 py-1 rounded-full font-medium">Plataforma Web</span>
                                        <svg class="w-8 h-8 text-white group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2 text-white">{{ __('portfolio.projects.galeno.title') }}</h3>
                                    <p class="text-white text-sm mb-6">{{ __('portfolio.projects.galeno.subtitle') }}</p>
                                </div>
                                <div class="pt-4 border-t border-white/20 flex items-center text-xs text-white">
                                    <span class="mr-2">Tecnologías:</span>
                                    <span class="font-medium">Laravel, Vue, MySQL</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="bg-[#701516] hover:bg-[#8a1a1b] rounded-xl shadow-lg overflow-hidden transition-all duration-300 transform hover:scale-105 hover:shadow-xl group" data-aos="fade-up" data-aos-delay="200">
                        <a href="/portafolio/memoria" class="block h-full">
                            <div class="p-8 text-white h-full flex flex-col justify-between">
                                <div>
                                    <div class="mb-4 flex justify-between items-center">
                                        <span class="bg-black/30 text-white text-xs px-3 py-1 rounded-full font-medium">App Móvil</span>
                                        <svg class="w-8 h-8 text-white group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2 text-white">{{ __('portfolio.projects.memoria.title') }}</h3>
                                    <p class="text-white text-sm mb-6">{{ __('portfolio.projects.memoria.subtitle') }}</p>
                                </div>
                                <div class="pt-4 border-t border-white/20 flex items-center text-xs text-white">
                                    <span class="mr-2">Tecnologías:</span>
                                    <span class="font-medium">React Native, MongoDB</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="bg-[#701516] hover:bg-[#8a1a1b] rounded-xl shadow-lg overflow-hidden transition-all duration-300 transform hover:scale-105 hover:shadow-xl group" data-aos="fade-up" data-aos-delay="300">
                        <a href="/portafolio/pick" class="block h-full">
                            <div class="p-8 text-white h-full flex flex-col justify-between">
                                <div>
                                    <div class="mb-4 flex justify-between items-center">
                                        <span class="bg-black/30 text-white text-xs px-3 py-1 rounded-full font-medium">Plataforma Web</span>
                                        <svg class="w-8 h-8 text-white group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2 text-white">{{ __('portfolio.projects.pick.title') }}</h3>
                                    <p class="text-white text-sm mb-6">{{ __('portfolio.projects.pick.subtitle') }}</p>
                                </div>
                                <div class="pt-4 border-t border-white/20 flex items-center text-xs text-white">
                                    <span class="mr-2">Tecnologías:</span>
                                    <span class="font-medium">React, Express, MongoDB</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a href="/portafolio" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold transition duration-300">
                        {{ __('home.portfolio.view_all') }}
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Sección de testimonios oculta 
        <section class="container mx-auto py-24 px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 gradient-text">{{ __('home.testimonials.title') }}</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">{{ __('home.testimonials.subtitle') }}</p>
            </div>
            
            <div class="swiper testimonialSwiper" data-aos="fade-up">
                <div class="swiper-wrapper pb-12">
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl shadow-xl p-8 mx-4 transform hover:scale-105 transition duration-300">
                            <div class="flex items-center mb-6">
                                <img src="{{ asset('images/avatars/man1.jpg') }}" alt="Cliente" class="w-16 h-16 rounded-full mr-4">
                                <div>
                                    <h3 class="font-semibold text-gray-800">{{ __('home.testimonials.client1.name') }}</h3>
                                    <p class="text-gray-600">{{ __('home.testimonials.client1.position') }}</p>
                                </div>
                            </div>
                            <div class="relative">
                                <svg class="absolute text-purple-200 w-16 h-16 -top-6 -left-6 opacity-20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                                <p class="text-gray-700 mb-6 relative z-10">{{ __('home.testimonials.client1.testimonial') }}</p>
                                <div class="flex text-yellow-400">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl shadow-xl p-8 mx-4 transform hover:scale-105 transition duration-300">
                            <div class="flex items-center mb-6">
                                <img src="{{ asset('images/avatars/woman1.jpg') }}" alt="Cliente" class="w-16 h-16 rounded-full mr-4">
                                <div>
                                    <h3 class="font-semibold text-gray-800">{{ __('home.testimonials.client2.name') }}</h3>
                                    <p class="text-gray-600">{{ __('home.testimonials.client2.position') }}</p>
                                </div>
                            </div>
                            <div class="relative">
                                <svg class="absolute text-purple-200 w-16 h-16 -top-6 -left-6 opacity-20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                            <p class="text-gray-700 mb-6 relative z-10">{{ __('home.testimonials.client2.testimonial') }}</p>
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="flex justify-center items-center space-x-4 mt-8" data-aos="fade-up" data-aos-delay="200">
                    <button class="testimonial-prev bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition duration-300">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button class="testimonial-next bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition duration-300">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </section>
        -->

        <section class="relative bg-gradient-to-br from-blue-500 to-purple-600 py-24 px-4" id="contact">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="container mx-auto relative">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="text-white" data-aos="fade-right">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">{{ __('home.contact.title') }}</h2>
                        <p class="text-xl mb-8 text-gray-200">{{ __('home.contact.subtitle') }}</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <h3 class="font-semibold text-xl mb-4">{{ __('home.contact.location_title') }}</h3>
                                <p class="text-gray-300">{{ __('home.contact.location_address') }}</p>
                            </div>
                            <div>
                                <h3 class="font-semibold text-xl mb-4">{{ __('home.contact.contact_title') }}</h3>
                                <p class="text-gray-300">
                                    {{ __('home.contact.contact_email') }}<br>
                                    {{ __('home.contact.contact_phone') }}
                                </p>
                            </div>
                        </div>
                        <div class="mt-8">
                            <h3 class="font-semibold text-xl mb-4">{{ __('home.contact.social_title') }}</h3>
                            <div class="flex space-x-4">
                                <!-- Facebook -->
                                <a href="https://www.facebook.com/chaskyMyD" target="_blank" rel="noopener noreferrer" class="text-white hover:text-yellow-400 transition duration-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                                <!-- Instagram -->
                                <a href="https://www.instagram.com/chasky_mkt_software/" target="_blank" rel="noopener noreferrer" class="text-white hover:text-yellow-400 transition duration-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                    </svg>
                                </a>
                                <!-- TikTok -->
                                <a href="https://www.tiktok.com/@chaskymkt?lang=es-419" target="_blank" rel="noopener noreferrer" class="text-white hover:text-yellow-400 transition duration-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1Z"/>
                                    </svg>
                                </a>
                                <!-- LinkedIn -->
                                <a href="https://www.linkedin.com/company/chasky-marketing-y-dise%C3%B1o/" target="_blank" rel="noopener noreferrer" class="text-white hover:text-yellow-400 transition duration-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V3.055z"></path>
                                        <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                                    </svg>
                                </a>

                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-2xl shadow-2xl p-8" data-aos="fade-left">
                        @if(session('success'))
                            <x-alert type="success" :message="session('success')" />
                        @endif
                        
                        @if(session('error'))
                            <x-alert type="error" :message="session('error')" />
                        @endif
                        
                        @if($errors->any())
                            <x-alert type="error" :message="'Por favor, corrija los errores en el formulario.'" />
                        @endif
                        
                        <form action="/contacto" method="post" class="space-y-6">
                            @csrf
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="nombre">{{ __('home.contact.form.name') }}</label>
                                <input type="text" id="nombre" name="nombre" required
                                    class="w-full px-4 py-3 rounded-lg bg-gray-50 border {{ $errors->has('nombre') ? 'border-red-500' : 'border-gray-300' }} focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition duration-300"
                                    placeholder="{{ __('home.contact.form.name') }}" value="{{ old('nombre') }}">
                                @error('nombre')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="email">{{ __('home.contact.form.email') }}</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 rounded-lg bg-gray-50 border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition duration-300"
                                    placeholder="tu@email.com" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="telefono">{{ __('home.contact.form.phone') }}</label>
                                <input type="tel" id="telefono" name="telefono" required
                                    class="w-full px-4 py-3 rounded-lg bg-gray-50 border {{ $errors->has('telefono') ? 'border-red-500' : 'border-gray-300' }} focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition duration-300"
                                    placeholder="+51 999 999 999" value="{{ old('telefono') }}">
                                @error('telefono')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="servicio">{{ __('home.contact.form.service') }}</label>
                                <select id="servicio" name="servicio" required
                                    class="w-full px-4 py-3 rounded-lg bg-gray-50 border {{ $errors->has('servicio') ? 'border-red-500' : 'border-gray-300' }} focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition duration-300">
                                    <option value="">{{ __('home.contact.form.select_service') }}</option>
                                    <option value="web" {{ old('servicio') == 'web' ? 'selected' : '' }}>{{ __('home.contact.form.web_dev') }}</option>
                                    <option value="marketing" {{ old('servicio') == 'marketing' ? 'selected' : '' }}>{{ __('home.contact.form.marketing') }}</option>
                                    <option value="app" {{ old('servicio') == 'app' ? 'selected' : '' }}>{{ __('home.contact.form.mobile') }}</option>
                                    <option value="design" {{ old('servicio') == 'design' ? 'selected' : '' }}>{{ __('home.contact.form.design') }}</option>
                                    <option value="otro" {{ old('servicio') == 'otro' ? 'selected' : '' }}>{{ __('home.contact.form.other') }}</option>
                                </select>
                                @error('servicio')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="mensaje">{{ __('home.contact.form.message') }}</label>
                                <textarea id="mensaje" name="mensaje" rows="4" required
                                    class="w-full px-4 py-3 rounded-lg bg-gray-50 border {{ $errors->has('mensaje') ? 'border-red-500' : 'border-gray-300' }} focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition duration-300"
                                    placeholder="{{ __('home.contact.form.message_placeholder') }}">{{ old('mensaje') }}</textarea>
                                @error('mensaje')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold py-4 px-8 rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-center space-x-2">
                                <span>{{ __('home.contact.form.submit') }}</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
<script>
    window.typingWords = @json(__('home.hero.typing_words'));
</script>
@endsection

@push('scripts')
<script>
    // Inicializar Swiper para los proyectos
    const projectsSwiper = new Swiper('.projectsSwiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1.5,
            },
            1024: {
                slidesPerView: 2.5,
            },
        },
    });

    /* Inicializar Swiper para los testimonios (comentado)
    const testimonialSwiper = new Swiper('.testimonialSwiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.testimonial-next',
            prevEl: '.testimonial-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
    */

    // Efecto de escritura para el hero
    const typingText = document.querySelector('.typing-text');
    const words = ['Soluciones Digitales', 'Experiencias Web', 'Apps Innovadoras', 'Éxito Digital'];
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let isWaiting = false;

    function type() {
        const currentWord = words[wordIndex];
        
        if (isDeleting) {
            typingText.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
        } else {
            typingText.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
        }

        if (!isDeleting && charIndex === currentWord.length) {
            isWaiting = true;
            setTimeout(() => {
                isDeleting = true;
                isWaiting = false;
            }, 2000);
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
        }

        const typeSpeed = isDeleting ? 100 : isWaiting ? 1000 : 200;
        setTimeout(type, typeSpeed);
    }

    // Iniciar efecto de escritura
    type();

    // Validación del formulario mejorada
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const fields = {
                nombre: form.querySelector('input[name="nombre"]'),
                email: form.querySelector('input[name="email"]'),
                servicio: form.querySelector('select[name="servicio"]'),
                mensaje: form.querySelector('textarea[name="mensaje"]')
            };
            
            // Remover clases de error previas
            Object.values(fields).forEach(field => {
                if (field) {
                    field.classList.remove('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
                }
            });
            
            let hasError = false;
            
            // Validar campos requeridos
            Object.entries(fields).forEach(([key, field]) => {
                if (field && field.hasAttribute('required') && !field.value.trim()) {
                    field.classList.add('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
                    hasError = true;
                }
            });
            
            // Validar email
            if (fields.email && !fields.email.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
                fields.email.classList.add('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
                hasError = true;
            }
            
            if (!hasError) {
                // Animación de envío
                const button = form.querySelector('button[type="submit"]');
                button.disabled = true;
                button.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Enviando...
                `;
                
                // Aquí normalmente enviarías el formulario
                setTimeout(() => {
                    form.submit();
                }, 1000);
            }
        });
    }

    // Efecto parallax mejorado
    const parallaxSections = document.querySelectorAll('.bg-gradient-to-br');
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        
        parallaxSections.forEach(section => {
            if (section.getBoundingClientRect().top < window.innerHeight && section.getBoundingClientRect().bottom > 0) {
                const speed = 0.5;
                const yPos = -(scrolled - section.offsetTop) * speed;
                section.style.backgroundPositionY = `${yPos}px`;
            }
        });
    });

    // Animación de números (contador)
    function animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerHTML = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    // Inicializar animaciones cuando los elementos son visibles
    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                if (entry.target.classList.contains('counter')) {
                    animateValue(entry.target, 0, parseInt(entry.target.dataset.value), 2000);
                    observer.unobserve(entry.target);
                }
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, {
        threshold: 0.1
    });

    document.querySelectorAll('.animate-on-scroll').forEach(element => {
        observer.observe(element);
    });
</script>
@endpush
