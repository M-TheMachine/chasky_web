@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[70vh] flex items-center mt-16">
        <!-- Gradient overlay con efecto de cristal -->
        <div class="absolute inset-0 bg-gradient-to-br from-white to-[#701516]/20"></div>
        
        <!-- Patrón de fondo animado -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute w-full h-full" style="background-image: radial-gradient(#701516 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>

        <div class="container mx-auto px-4 py-24 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-8 text-[#701516]" data-aos="fade-up">
                    {{ __('about.hero.title') }}
                </h1>
                <p class="text-xl text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ __('about.hero.subtitle') }}
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

    <!-- Nuestra Historia -->
    <section class="py-24 bg-white mb-24 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">{{ __('about.history.title') }}</h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        {{ __('about.history.description') }}
                    </p>
                </div>
                
                <!-- Timeline -->
                <div class="relative">
                    <!-- Línea central -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-[#701516] to-[#c40606] rounded-full md:block hidden"></div>
                    <!-- Línea móvil (izquierda) -->
                    <div class="absolute left-4 top-0 bottom-0 w-1 bg-gradient-to-b from-[#701516] to-[#c40606] rounded-full md:hidden block"></div>
                    
                    <!-- 2018 -->
                    <div class="relative mb-16 md:mb-24" data-aos="fade-right">
                        <div class="flex items-center">
                            <!-- Contenido para escritorio (derecha) -->
                            <div class="w-1/2 pr-12 text-right hidden md:block">
                                <div class="bg-white p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                                    <h3 class="text-2xl font-bold mb-3 gradient-text">{{ __('about.history.timeline.2018.title') }}</h3>
                                    <p class="text-gray-600">{{ __('about.history.timeline.2018.description') }}</p>
                                    <ul class="mt-4 space-y-2 text-gray-600 text-right">
                                        <li class="flex items-center justify-end">
                                            <span class="text-gray-600">{{ __('about.history.timeline.2018.achievements.achievement1') }}</span>
                                            <svg class="w-4 h-4 text-[#f4bc21] ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </li>
                                        <li class="flex items-center justify-end">
                                            <span class="text-gray-600">{{ __('about.history.timeline.2018.achievements.achievement2') }}</span>
                                            <svg class="w-4 h-4 text-[#f4bc21] ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Punto central escritorio -->
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-[#701516] bg-white shadow-xl hidden md:block"></div>
                            
                            <!-- Contenido para móvil (full width) -->
                            <div class="w-full px-4 pl-12 md:hidden block">
                                <div class="bg-white p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                                    <h3 class="text-2xl font-bold mb-3 gradient-text">{{ __('about.history.timeline.2018.title') }}</h3>
                                    <p class="text-gray-600">{{ __('about.history.timeline.2018.description') }}</p>
                                    <ul class="mt-4 space-y-2 text-gray-600">
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">{{ __('about.history.timeline.2018.achievements.achievement1') }}</span>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">{{ __('about.history.timeline.2018.achievements.achievement2') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Punto móvil (izquierda) -->
                            <div class="absolute left-4 transform -translate-x-1/2 w-8 h-8 rounded-full border-4 border-[#701516] bg-white shadow-xl md:hidden block"></div>
                            
                            <div class="w-1/2 pl-12 md:block hidden"></div>
                        </div>
                    </div>

                    <!-- 2020 -->
                    <div class="relative mb-16 md:mb-24" data-aos="fade-left">
                        <div class="flex items-center">
                            <div class="w-1/2 pr-12 md:block hidden"></div>
                            
                            <!-- Punto central escritorio -->
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-[#701516] bg-white shadow-xl hidden md:block"></div>
                            
                            <!-- Contenido para escritorio (izquierda) -->
                            <div class="w-1/2 pl-12 hidden md:block">
                                <div class="bg-white p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                                    <h3 class="text-2xl font-bold mb-3 gradient-text">{{ __('about.history.timeline.2020.title') }}</h3>
                                    <p class="text-gray-600">{{ __('about.history.timeline.2020.description') }}</p>
                                    <ul class="mt-4 space-y-2 text-gray-600">
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">{{ __('about.history.timeline.2020.achievements.achievement1') }}</span>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">{{ __('about.history.timeline.2020.achievements.achievement2') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Contenido para móvil (full width) -->
                            <div class="w-full px-4 pl-12 md:hidden block">
                                <div class="bg-white p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                                    <h3 class="text-2xl font-bold mb-3 gradient-text">{{ __('about.history.timeline.2020.title') }}</h3>
                                    <p class="text-gray-600">{{ __('about.history.timeline.2020.description') }}</p>
                                    <ul class="mt-4 space-y-2 text-gray-600">
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">{{ __('about.history.timeline.2020.achievements.achievement1') }}</span>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">{{ __('about.history.timeline.2020.achievements.achievement2') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Punto móvil (izquierda) -->
                            <div class="absolute left-4 transform -translate-x-1/2 w-8 h-8 rounded-full border-4 border-[#701516] bg-white shadow-xl md:hidden block"></div>
                        </div>
                    </div>

                    <!-- 2022 -->
                    <div class="relative mb-16 md:mb-24" data-aos="fade-right">
                        <div class="flex items-center">
                            <!-- Contenido para escritorio (derecha) -->
                            <div class="w-1/2 pr-12 text-right hidden md:block">
                                <div class="bg-white p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                                    <h3 class="text-2xl font-bold mb-3 gradient-text">{{ __('about.history.timeline.2022.title') }}</h3>
                                    <p class="text-gray-600">{{ __('about.history.timeline.2022.description') }}</p>
                                    <ul class="mt-4 space-y-2 text-gray-600 text-right">
                                        <li class="flex items-center justify-end">
                                            <span class="text-gray-600">{{ __('about.history.timeline.2022.achievements.achievement1') }}</span>
                                            <svg class="w-4 h-4 text-[#f4bc21] ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </li>
                                        <li class="flex items-center justify-end">
                                            <span class="text-gray-600">{{ __('about.history.timeline.2022.achievements.achievement2') }}</span>
                                            <svg class="w-4 h-4 text-[#f4bc21] ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Punto central escritorio -->
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-[#701516] bg-white shadow-xl hidden md:block"></div>
                            
                            <!-- Contenido para móvil (full width) -->
                            <div class="w-full px-4 pl-12 md:hidden block">
                                <div class="bg-white p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                                    <h3 class="text-2xl font-bold mb-3 gradient-text">{{ __('about.history.timeline.2022.title') }}</h3>
                                    <p class="text-gray-600">{{ __('about.history.timeline.2022.description') }}</p>
                                    <ul class="mt-4 space-y-2 text-gray-600">
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">{{ __('about.history.timeline.2022.achievements.achievement1') }}</span>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">{{ __('about.history.timeline.2022.achievements.achievement2') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Punto móvil (izquierda) -->
                            <div class="absolute left-4 transform -translate-x-1/2 w-8 h-8 rounded-full border-4 border-[#701516] bg-white shadow-xl md:hidden block"></div>
                            
                            <div class="w-1/2 pl-12 md:block hidden"></div>
                        </div>
                    </div>

                    <!-- 2025 -->
                    <div class="relative" data-aos="fade-left">
                        <div class="flex items-center">
                            <div class="w-1/2 pr-12 md:block hidden"></div>
                            
                            <!-- Punto central escritorio -->
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-[#701516] bg-white shadow-xl hidden md:block"></div>
                            
                            <!-- Contenido para escritorio (izquierda) -->
                            <div class="w-1/2 pl-12 hidden md:block">
                                <div class="bg-white p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                                    <h3 class="text-2xl font-bold mb-3 gradient-text">{{ __('about.history.timeline.2025.title') }}</h3>
                                    <p class="text-gray-600">{{ __('about.history.timeline.2025.description') }}</p>
                                    <ul class="mt-4 space-y-2 text-gray-600">
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">{{ __('about.history.timeline.2025.achievements.achievement1') }}</span>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">{{ __('about.history.timeline.2025.achievements.achievement2') }}</span>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">{{ __('about.history.timeline.2025.achievements.achievement3') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Contenido para móvil (full width) -->
                            <div class="w-full px-4 pl-12 md:hidden block">
                                <div class="bg-white p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                                    <h3 class="text-2xl font-bold mb-3 gradient-text">{{ __('about.history.timeline.2025.title') }}</h3>
                                    <p class="text-gray-600">{{ __('about.history.timeline.2025.description') }}</p>
                                    <ul class="mt-4 space-y-2 text-gray-600">
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">{{ __('about.history.timeline.2025.achievements.achievement1') }}</span>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">{{ __('about.history.timeline.2025.achievements.achievement2') }}</span>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">{{ __('about.history.timeline.2025.achievements.achievement3') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Punto móvil (izquierda) -->
                            <div class="absolute left-4 transform -translate-x-1/2 w-8 h-8 rounded-full border-4 border-[#701516] bg-white shadow-xl md:hidden block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nuestros Valores -->
    <section class="py-24 bg-gray-50 mb-24">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">{{ __('about.values.title') }}</h2>
                    <p class="text-gray-600 text-lg">{{ __('about.values.subtitle') }}</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Integridad -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">{{ __('about.values.integrity.title') }}</h3>
                        </div>
                        <p class="text-gray-600">{{ __('about.values.integrity.description') }}</p>
                    </div>

                    <!-- Innovación -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h3v7l9-11h-3z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">{{ __('about.values.innovation.title') }}</h3>
                        </div>
                        <p class="text-gray-600">{{ __('about.values.innovation.description') }}</p>
                    </div>

                    <!-- Colaboración -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">{{ __('about.values.collaboration.title') }}</h3>
                        </div>
                        <p class="text-gray-600">{{ __('about.values.collaboration.description') }}</p>
                    </div>

                    <!-- Excelencia -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">{{ __('about.values.excellence.title') }}</h3>
                        </div>
                        <p class="text-gray-600">{{ __('about.values.excellence.description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nuestro Equipo -->
    <section class="py-24 bg-white mb-24">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">{{ __('about.team.title') }}</h2>
                    <p class="text-gray-600 text-lg">{{ __('about.team.subtitle') }}</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Mario Reque -->
                    <div class="text-center" data-aos="fade-up">
                        <div class="relative mb-6 inline-block">
                            <img src="{{ asset('mario.png') }}" 
                                 alt="{{ __('about.team.members.mario.name') }}" 
                                 class="w-48 h-48 rounded-full object-cover mx-auto ring-4 ring-[#701516]">
                        </div>
                        <h3 class="text-xl font-bold mb-2">{{ __('about.team.members.mario.name') }}</h3>
                        <p class="text-[#701516] font-medium mb-4">{{ __('about.team.members.mario.position') }}</p>
                        <p class="text-gray-600">{{ __('about.team.members.mario.bio') }}</p>
                    </div>

                    <!-- Wilson Rodriguez -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative mb-6 inline-block">
                            <img src="{{ asset('wilson.png') }}" 
                                 alt="{{ __('about.team.members.wilson.name') }}" 
                                 class="w-48 h-48 rounded-full object-cover mx-auto ring-4 ring-[#701516]">
                        </div>
                        <h3 class="text-xl font-bold mb-2">{{ __('about.team.members.wilson.name') }}</h3>
                        <p class="text-[#701516] font-medium mb-4">{{ __('about.team.members.wilson.position') }}</p>
                        <p class="text-gray-600">{{ __('about.team.members.wilson.bio') }}</p>
                    </div>

                    <!-- Ana Belen Espinoza -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="relative mb-6 inline-block">
                            <img src="{{ asset('ana-belen.png') }}" 
                                 alt="{{ __('about.team.members.ana_belen.name') }}" 
                                 class="w-48 h-48 rounded-full object-cover mx-auto ring-4 ring-[#701516]">
                        </div>
                        <h3 class="text-xl font-bold mb-2">{{ __('about.team.members.ana_belen.name') }}</h3>
                        <p class="text-[#701516] font-medium mb-4">{{ __('about.team.members.ana_belen.position') }}</p>
                        <p class="text-gray-600">{{ __('about.team.members.ana_belen.bio') }}</p>
                    </div>
                    
                    <!-- Faby Fuentes -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative mb-6 inline-block">
                            <img src="{{ asset('faby.png') }}" 
                                 alt="{{ __('about.team.members.faby.name') }}" 
                                 class="w-48 h-48 rounded-full object-cover mx-auto ring-4 ring-[#701516]">
                        </div>
                        <h3 class="text-xl font-bold mb-2">{{ __('about.team.members.faby.name') }}</h3>
                        <p class="text-[#701516] font-medium mb-4">{{ __('about.team.members.faby.position') }}</p>
                        <p class="text-gray-600">{{ __('about.team.members.faby.bio') }}</p>
                    </div>
                    
                    <!-- Mike Flores -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative mb-6 inline-block">
                            <img src="{{ asset('mike.png') }}" 
                                 alt="{{ __('about.team.members.mike.name') }}" 
                                 class="w-48 h-48 rounded-full object-cover mx-auto ring-4 ring-[#701516]">
                        </div>
                        <h3 class="text-xl font-bold mb-2">{{ __('about.team.members.mike.name') }}</h3>
                        <p class="text-[#701516] font-medium mb-4">{{ __('about.team.members.mike.position') }}</p>
                        <p class="text-gray-600">{{ __('about.team.members.mike.bio') }}</p>
                    </div>
                    
                    <!-- Jason Choque -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="relative mb-6 inline-block">
                            <img src="{{ asset('jason.png') }}" 
                                 alt="{{ __('about.team.members.jason.name') }}" 
                                 class="w-48 h-48 rounded-full object-cover mx-auto ring-4 ring-[#701516]">
                        </div>
                        <h3 class="text-xl font-bold mb-2">{{ __('about.team.members.jason.name') }}</h3>
                        <p class="text-[#701516] font-medium mb-4">{{ __('about.team.members.jason.position') }}</p>
                        <p class="text-gray-600">{{ __('about.team.members.jason.bio') }}</p>
                    </div>
                    
                    <!-- Josue Flores -->
                    <div class="text-center" data-aos="fade-up">
                        <div class="relative mb-6 inline-block">
                            <img src="{{ asset('josue.png') }}" 
                                 alt="{{ __('about.team.members.josue.name') }}" 
                                 class="w-48 h-48 rounded-full object-cover mx-auto ring-4 ring-[#701516]">
                        </div>
                        <h3 class="text-xl font-bold mb-2">{{ __('about.team.members.josue.name') }}</h3>
                        <p class="text-[#701516] font-medium mb-4">{{ __('about.team.members.josue.position') }}</p>
                        <p class="text-gray-600">{{ __('about.team.members.josue.bio') }}</p>
                    </div>
                    
                    <!-- Americo Vespucio -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative mb-6 inline-block">
                            <img src="{{ asset('americo.png') }}" 
                                 alt="{{ __('about.team.members.americo.name') }}" 
                                 class="w-48 h-48 rounded-full object-cover mx-auto ring-4 ring-[#701516]">
                        </div>
                        <h3 class="text-xl font-bold mb-2">{{ __('about.team.members.americo.name') }}</h3>
                        <p class="text-[#701516] font-medium mb-4">{{ __('about.team.members.americo.position') }}</p>
                        <p class="text-gray-600">{{ __('about.team.members.americo.bio') }}</p>
                    </div>
                    
                    <!-- William Gaspar Ticona -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative mb-6 inline-block">
                            <img src="{{ asset('william.jpg') }}" 
                                 alt="{{ __('about.team.members.william.name') }}" 
                                 class="w-48 h-48 rounded-full object-cover mx-auto ring-4 ring-[#701516]">
                        </div>
                        <h3 class="text-xl font-bold mb-2">{{ __('about.team.members.william.name') }}</h3>
                        <p class="text-[#701516] font-medium mb-4">{{ __('about.team.members.william.position') }}</p>
                        <p class="text-gray-600">{{ __('about.team.members.william.bio') }}</p>
                    </div>

                    <!-- Fernando Reynaga Diaz -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="relative mb-6 inline-block">
                            <img src="{{ asset('fer.png') }}" 
                                 alt="{{ __('about.team.members.fernando.name') }}" 
                                 class="w-48 h-48 rounded-full object-cover mx-auto ring-4 ring-[#701516]">
                        </div>
                        <h3 class="text-xl font-bold mb-2">{{ __('about.team.members.fernando.name') }}</h3>
                        <p class="text-[#701516] font-medium mb-4">{{ __('about.team.members.fernando.position') }}</p>
                        <p class="text-gray-600">{{ __('about.team.members.fernando.bio') }}</p>
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
                    {{ __('about.cta.title') }}
                </h2>
                <p class="text-xl mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ __('about.cta.subtitle') }}
                </p>
                <a href="/contacto" class="inline-block bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold py-4 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    {{ __('about.cta.button') }}
                </a>
            </div>
        </div>
    </section>
@endsection
