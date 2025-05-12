@extends('layouts.app')

@section('content')
    <section class="relative min-h-screen bg-gradient-to-br from-purple-700 to-pink-500 text-white flex items-center overflow-hidden">
        <div class="absolute inset-0 bg-pattern opacity-10"></div>
        <div class="container mx-auto px-4 py-32 relative">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-left" data-aos="fade-right">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                        {{ __('home.hero.title') }}
                        <span class="typing-text"></span>
                    </h1>
                    <p class="text-xl mb-8 text-gray-200">{{ __('home.hero.subtitle') }}</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="/servicios" class="bg-yellow-500 hover:bg-yellow-600 text-gray-800 font-semibold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105">
                            {{ __('home.hero.cta_button') }}
                        </a>
                        <a href="#contact" class="border-2 border-white text-white hover:bg-white hover:text-purple-600 font-semibold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105">
                            {{ __('home.hero.contact_button') }}
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="floating">
                        <img src="https://raw.githubusercontent.com/simple-icons/simple-icons/develop/icons/react.svg" class="absolute top-0 right-0 w-16 h-16 text-blue-400" style="animation-delay: 0.2s">
                        <img src="https://raw.githubusercontent.com/simple-icons/simple-icons/develop/icons/laravel.svg" class="absolute bottom-0 left-0 w-16 h-16 text-red-500" style="animation-delay: 0.4s">
                        <img src="https://raw.githubusercontent.com/simple-icons/simple-icons/develop/icons/typescript.svg" class="absolute top-1/2 left-1/4 w-16 h-16 text-blue-600" style="animation-delay: 0.6s">
                        <div class="rounded-2xl overflow-hidden shadow-2xl transform rotate-3 hover:rotate-0 transition duration-500">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2426&q=80" alt="Development" class="w-full">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </section>

    <section class="container mx-auto py-24 px-4" id="servicios">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 gradient-text">{{ __('home.services.title') }}</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">{{ __('home.services.subtitle') }}</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="group bg-white rounded-xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up">
                <div class="text-blue-600 mb-6 group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">{{ __('home.services.web_dev.title') }}</h3>
                <p class="text-gray-600">{{ __('home.services.web_dev.description') }}</p>
            </div>
            <div class="group bg-white rounded-xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="text-green-600 mb-6 group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">{{ __('home.services.marketing.title') }}</h3>
                <p class="text-gray-600">{{ __('home.services.marketing.description') }}</p>
            </div>
            <div class="group bg-white rounded-xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="text-purple-600 mb-6 group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">{{ __('home.services.mobile.title') }}</h3>
                <p class="text-gray-600">{{ __('home.services.mobile.description') }}</p>
            </div>
            <div class="group bg-white rounded-xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="text-yellow-500 mb-6 group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">{{ __('home.services.ux.title') }}</h3>
                <p class="text-gray-600">{{ __('home.services.ux.description') }}</p>
            </div>
        </div>
        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="400">
            <a href="/servicios" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105 hover:shadow-lg inline-flex items-center">
                {{ __('home.services.view_all') }}
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </section>

    <section class="bg-gray-50 py-24 px-4 overflow-hidden">
        <div class="container mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 gradient-text">{{ __('home.portfolio.title') }}</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">{{ __('home.portfolio.subtitle') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 transform hover:-translate-y-2" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80" 
                         alt="{{ __('home.portfolio.projects.ecommerce.title') }}" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ __('home.portfolio.projects.ecommerce.title') }}</h3>
                        <p class="text-gray-600 mb-4">{{ __('home.portfolio.projects.ecommerce.description') }}</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                            {{ __('home.portfolio.projects.ecommerce.tech') }}
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                         alt="{{ __('home.portfolio.projects.health.title') }}" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ __('home.portfolio.projects.health.title') }}</h3>
                        <p class="text-gray-600 mb-4">{{ __('home.portfolio.projects.health.description') }}</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                            {{ __('home.portfolio.projects.health.tech') }}
                        </div>
                    </div>
                </div>
                <!-- Add more portfolio items here -->
            </div>
            <div class="text-center mt-12">
                <a href="/portfolio" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold transition duration-300">
                    {{ __('home.portfolio.view_all') }}
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="container mx-auto py-24 px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 gradient-text">Lo que dicen nuestros clientes</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Descubre por qué las empresas confían en nosotros para sus proyectos digitales</p>
        </div>
        
        <div class="swiper testimonialSwiper" data-aos="fade-up">
            <div class="swiper-wrapper pb-12">
                <div class="swiper-slide">
                    <div class="bg-white rounded-2xl shadow-xl p-8 mx-4 transform hover:scale-105 transition duration-300">
                        <div class="flex items-center mb-6">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Cliente" class="w-16 h-16 rounded-full mr-4">
                            <div>
                                <h3 class="font-semibold text-gray-800">Juan Pérez</h3>
                                <p class="text-gray-600">CEO, TechCorp</p>
                            </div>
                        </div>
                        <div class="relative">
                            <svg class="absolute text-purple-200 w-16 h-16 -top-6 -left-6 opacity-20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                            <p class="text-gray-700 mb-6 relative z-10">"El trabajo de Chasky superó nuestras expectativas. Su profesionalismo y dedicación se reflejaron en los resultados obtenidos. La implementación fue impecable."</p>
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
                            <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Cliente" class="w-16 h-16 rounded-full mr-4">
                            <div>
                                <h3 class="font-semibold text-gray-800">María García</h3>
                                <p class="text-gray-600">Directora de Marketing, InnovateMKT</p>
                            </div>
                        </div>
                        <div class="relative">
                            <svg class="absolute text-purple-200 w-16 h-16 -top-6 -left-6 opacity-20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                            <p class="text-gray-700 mb-6 relative z-10">"Gracias a Chasky, nuestra presencia en línea se fortaleció y logramos aumentar nuestras ventas significativamente. Un equipo verdaderamente profesional."</p>
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
                            <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Cliente" class="w-16 h-16 rounded-full mr-4">
                            <div>
                                <h3 class="font-semibold text-gray-800">Carlos Rodríguez</h3>
                                <p class="text-gray-600">CTO, StartupNext</p>
                            </div>
                        </div>
                        <div class="relative">
                            <svg class="absolute text-purple-200 w-16 h-16 -top-6 -left-6 opacity-20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                            <p class="text-gray-700 mb-6 relative z-10">"La capacidad técnica y creatividad del equipo de Chasky nos ayudó a transformar nuestra visión en realidad. Increíble experiencia."</p>
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
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="container mx-auto py-24 px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 gradient-text">Lo que dicen nuestros clientes</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Descubre por qué las empresas confían en nosotros para sus proyectos digitales</p>
        </div>
        
        <div class="swiper testimonialSwiper" data-aos="fade-up">
            <div class="swiper-wrapper pb-12">
                <div class="swiper-slide">
                    <div class="bg-white rounded-2xl shadow-xl p-8 mx-4 transform hover:scale-105 transition duration-300">
                        <div class="flex items-center mb-6">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Cliente" class="w-16 h-16 rounded-full mr-4">
                            <div>
                                <h3 class="font-semibold text-gray-800">Juan Pérez</h3>
                                <p class="text-gray-600">CEO, TechCorp</p>
                            </div>
                        </div>
                        <div class="relative">
                            <svg class="absolute text-purple-200 w-16 h-16 -top-6 -left-6 opacity-20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                            <p class="text-gray-700 mb-6 relative z-10">"El trabajo de Chasky superó nuestras expectativas. Su profesionalismo y dedicación se reflejaron en los resultados obtenidos. La implementación fue impecable."</p>
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
                            <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Cliente" class="w-16 h-16 rounded-full mr-4">
                            <div>
                                <h3 class="font-semibold text-gray-800">Ana Torres</h3>
                                <p class="text-gray-600">Gerente de Proyectos, Creativa</p>
                            </div>
                        </div>
                        <div class="relative">
                            <svg class="absolute text-purple-200 w-16 h-16 -top-6 -left-6 opacity-20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                            <p class="text-gray-700 mb-6 relative z-10">"Trabajar con Chasky fue una experiencia transformadora. Su equipo no solo entiende de tecnología, sino también de negocios."</p>
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
        </div>
        
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
    </section>

    <section class="relative bg-gradient-to-br from-blue-500 to-purple-600 py-24 px-4" id="contact">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto relative">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white" data-aos="fade-right">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">¿Listo para transformar tu negocio?</h2>
                    <p class="text-xl mb-8 text-gray-200">Ponte en contacto con nosotros y descubre cómo podemos ayudarte a alcanzar tus objetivos digitales</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="font-semibold text-xl mb-4">Ubicación</h3>
                            <p class="text-gray-300">Lima, Perú<br>San Isidro</p>
                        </div>
                        <div>
                            <h3 class="font-semibold text-xl mb-4">Contacto</h3>
                            <p class="text-gray-300">
                                info@chasky.pe<br>
                                +51 999 999 999
                            </p>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h3 class="font-semibold text-xl mb-4">Síguenos</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-white hover:text-yellow-400 transition duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.77,7.46H14.5v-1.9c0-.9.6-1.1,1-1.1h3V.5h-4.33C10.24.5,9.5,3.44,9.5,5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4Z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-white hover:text-yellow-400 transition duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-white hover:text-yellow-400 transition duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-2xl p-8" data-aos="fade-left">
                    <form action="/contacto" method="post" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="nombre">Nombre completo</label>
                            <input type="text" id="nombre" name="nombre" required
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition duration-300"
                                placeholder="Tu nombre">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="email">Correo electrónico</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition duration-300"
                                placeholder="tu@email.com">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="telefono">Teléfono (opcional)</label>
                            <input type="tel" id="telefono" name="telefono"
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition duration-300"
                                placeholder="+51 999 999 999">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="servicio">Servicio de interés</label>
                            <select id="servicio" name="servicio" required
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition duration-300">
                                <option value="">Selecciona un servicio</option>
                                <option value="web">Desarrollo Web</option>
                                <option value="marketing">Marketing Digital</option>
                                <option value="app">Aplicaciones Móviles</option>
                                <option value="design">Diseño UX/UI</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="mensaje">Mensaje</label>
                            <textarea id="mensaje" name="mensaje" rows="4" required
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition duration-300"
                                placeholder="Cuéntanos sobre tu proyecto"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold py-4 px-8 rounded-lg transition duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-center space-x-2">
                            <span>Inicia tu viaje al éxito</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
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

    // Inicializar Swiper para los testimonios
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
