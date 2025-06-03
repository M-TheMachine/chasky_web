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
                        <div class="mt-8">
                            <a href="/servicios/desarrollo-web" class="inline-block bg-[#701516] text-white font-bold py-3 px-6 rounded-lg hover:bg-[#701516]/90 transition-colors">
                                Conoce más sobre desarrollo web
                                <svg class="w-5 h-5 ml-2 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
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
                                Estrategias de SEO y SEM
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Marketing de contenidos
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
                                Diseño responsive y accesible
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="/servicios/ux-ui" class="inline-block bg-[#701516] text-white font-bold py-3 px-6 rounded-lg hover:bg-[#701516]/90 transition-colors">
                                Conoce más sobre diseño UX/UI
                                <svg class="w-5 h-5 ml-2 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
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
            <div class="mb-32" data-aos="fade-up">                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
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
                                Soporte técnico 24/7
                            </li>
                        </ul>
                        <div class="mt-8 flex items-center space-x-4">
                            <button onclick="togglePlans('offshoring-plans')" class="inline-flex items-center px-6 py-3 bg-[#701516] text-white rounded-lg hover:bg-[#701516]/90 transition-colors">
                                <span>Ver planes de outsourcing</span>
                                <svg id="offshoring-arrow" class="w-5 h-5 ml-2 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <a href="/servicios/offshoring" class="inline-flex items-center px-6 py-3 border-2 border-[#701516] text-[#701516] rounded-lg hover:bg-[#701516] hover:text-white transition-colors">
                                Conoce más sobre offshoring
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Planes de Offshoring -->
                <div id="offshoring-plans" class="hidden mt-12">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Essential Plan -->
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                            <div class="bg-[#701516] px-6 py-12 text-white text-center">
                                <h3 class="text-2xl font-bold mb-4">{{ __('outsourcing.plans.essential.title') }}</h3>
                                <div class="flex justify-center items-baseline">
                                    <span class="text-3xl font-extrabold tracking-tight">{{ __('outsourcing.plans.essential.price') }}</span>
                                    <span class="ml-1 text-xl font-normal text-white/70">{{ __('outsourcing.plans.essential.currency') }}</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-4">
                                    @foreach(['developer', 'manager', 'meetings', 'hours', 'tools', 'whitelabel'] as $feature)
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">{{ __('outsourcing.plans.essential.features.' . $feature) }}</p>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="mt-8 mb-4 text-gray-600 text-center italic">
                                    {{ __('outsourcing.plans.essential.ideal') }}
                                </div>
                                <div class="mt-6">
                                    <a href="/contacto" class="block w-full bg-[#701516] hover:bg-[#701516]/90 text-white text-center font-bold py-3 px-4 rounded-lg transition duration-300">
                                        {{ __('outsourcing.plans.essential.button') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Growth Plan -->
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden transform scale-105 z-10 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                            <div class="bg-gradient-to-r from-[#701516] to-[#c40606] px-6 py-12 text-white text-center">
                                <span class="inline-block px-3 py-1 text-xs font-semibold bg-[#f4bc21] text-[#701516] rounded-full mb-4">{{ __('outsourcing.plans.growth.tag') }}</span>
                                <h3 class="text-2xl font-bold mb-4">{{ __('outsourcing.plans.growth.title') }}</h3>
                                <div class="flex justify-center items-baseline">
                                    <span class="text-3xl font-extrabold tracking-tight">{{ __('outsourcing.plans.growth.price') }}</span>
                                    <span class="ml-1 text-xl font-normal text-white/70">{{ __('outsourcing.plans.growth.currency') }}</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-4">
                                    @foreach(['developers', 'manager', 'designer', 'hours', 'scrum', 'whitelabel'] as $feature)
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">{{ __('outsourcing.plans.growth.features.' . $feature) }}</p>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="mt-8 mb-4 text-gray-600 text-center italic">
                                    {{ __('outsourcing.plans.growth.ideal') }}
                                </div>
                                <div class="mt-6">
                                    <a href="/contacto" class="block w-full bg-gradient-to-r from-[#701516] to-[#c40606] hover:opacity-90 text-white text-center font-bold py-3 px-4 rounded-lg transition duration-300">
                                        {{ __('outsourcing.plans.growth.button') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Custom Plan -->
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                            <div class="bg-[#701516] px-6 py-12 text-white text-center">
                                <h3 class="text-2xl font-bold mb-4">{{ __('outsourcing.plans.custom.title') }}</h3>
                                <div class="flex justify-center items-baseline">
                                    <span class="text-3xl font-extrabold tracking-tight">{{ __('outsourcing.plans.custom.price') }}</span>
                                    <span class="ml-1 text-xl font-normal text-white/70">{{ __('outsourcing.plans.custom.currency') }}</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-4">
                                    @foreach(['team', 'qa', 'design', 'devops', 'integration'] as $feature)
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">{{ __('outsourcing.plans.custom.features.' . $feature) }}</p>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="mt-8 mb-4 text-gray-600 text-center italic">
                                    {{ __('outsourcing.plans.custom.ideal') }}
                                </div>
                                <div class="mt-6">
                                    <a href="/contacto" class="block w-full bg-[#701516] hover:bg-[#701516]/90 text-white text-center font-bold py-3 px-4 rounded-lg transition duration-300">
                                        {{ __('outsourcing.plans.custom.button') }}
                                    </a>
                                </div>
                            </div>
                        </div>
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
                                {{ __('services.nearshoring.features.feature2') }}
                            </li>
                        </ul>
                        <div class="mt-8 flex items-center space-x-4">
                            <button onclick="togglePlans('nearshoring-plans')" class="inline-flex items-center px-6 py-3 bg-[#701516] text-white rounded-lg hover:bg-[#701516]/90 transition-colors">
                                <span>Ver planes de outsourcing</span>
                                <svg id="nearshoring-arrow" class="w-5 h-5 ml-2 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <a href="/servicios/nearshoring" class="inline-flex items-center px-6 py-3 border-2 border-[#701516] text-[#701516] rounded-lg hover:bg-[#701516] hover:text-white transition-colors">
                                Conoce más sobre nearshoring
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="order-1 md:order-2 flex justify-center items-center">
                        <div class="bg-gradient-to-br from-[#701516] to-[#c40606] p-12 rounded-full shadow-xl transform hover:scale-110 transition duration-500">
                            <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Planes de Nearshoring -->
                <div id="nearshoring-plans" class="hidden mt-12">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Essential Plan -->
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                            <div class="bg-[#701516] px-6 py-12 text-white text-center">
                                <h3 class="text-2xl font-bold mb-4">{{ __('outsourcing.plans.essential.title') }}</h3>
                                <div class="flex justify-center items-baseline">
                                    <span class="text-3xl font-extrabold tracking-tight">{{ __('outsourcing.plans.essential.price') }}</span>
                                    <span class="ml-1 text-xl font-normal text-white/70">{{ __('outsourcing.plans.essential.currency') }}</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-4">
                                    @foreach(['developer', 'manager', 'meetings', 'hours', 'tools', 'whitelabel'] as $feature)
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">{{ __('outsourcing.plans.essential.features.' . $feature) }}</p>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="mt-8 mb-4 text-gray-600 text-center italic">
                                    {{ __('outsourcing.plans.essential.ideal') }}
                                </div>
                                <div class="mt-6">
                                    <a href="/contacto" class="block w-full bg-[#701516] hover:bg-[#701516]/90 text-white text-center font-bold py-3 px-4 rounded-lg transition duration-300">
                                        {{ __('outsourcing.plans.essential.button') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Growth Plan -->
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden transform scale-105 z-10 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                            <div class="bg-gradient-to-r from-[#701516] to-[#c40606] px-6 py-12 text-white text-center">
                                <span class="inline-block px-3 py-1 text-xs font-semibold bg-[#f4bc21] text-[#701516] rounded-full mb-4">{{ __('outsourcing.plans.growth.tag') }}</span>
                                <h3 class="text-2xl font-bold mb-4">{{ __('outsourcing.plans.growth.title') }}</h3>
                                <div class="flex justify-center items-baseline">
                                    <span class="text-3xl font-extrabold tracking-tight">{{ __('outsourcing.plans.growth.price') }}</span>
                                    <span class="ml-1 text-xl font-normal text-white/70">{{ __('outsourcing.plans.growth.currency') }}</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-4">
                                    @foreach(['developers', 'manager', 'designer', 'hours', 'scrum', 'whitelabel'] as $feature)
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">{{ __('outsourcing.plans.growth.features.' . $feature) }}</p>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="mt-8 mb-4 text-gray-600 text-center italic">
                                    {{ __('outsourcing.plans.growth.ideal') }}
                                </div>
                                <div class="mt-6">
                                    <a href="/contacto" class="block w-full bg-gradient-to-r from-[#701516] to-[#c40606] hover:opacity-90 text-white text-center font-bold py-3 px-4 rounded-lg transition duration-300">
                                        {{ __('outsourcing.plans.growth.button') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Custom Plan -->
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                            <div class="bg-[#701516] px-6 py-12 text-white text-center">
                                <h3 class="text-2xl font-bold mb-4">{{ __('outsourcing.plans.custom.title') }}</h3>
                                <div class="flex justify-center items-baseline">
                                    <span class="text-3xl font-extrabold tracking-tight">{{ __('outsourcing.plans.custom.price') }}</span>
                                    <span class="ml-1 text-xl font-normal text-white/70">{{ __('outsourcing.plans.custom.currency') }}</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-4">
                                    @foreach(['team', 'qa', 'design', 'devops', 'integration'] as $feature)
                                    <li class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-base text-gray-700">{{ __('outsourcing.plans.custom.features.' . $feature) }}</p>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="mt-8 mb-4 text-gray-600 text-center italic">
                                    {{ __('outsourcing.plans.custom.ideal') }}
                                </div>
                                <div class="mt-6">
                                    <a href="/contacto" class="block w-full bg-[#701516] hover:bg-[#701516]/90 text-white text-center font-bold py-3 px-4 rounded-lg transition duration-300">
                                        {{ __('outsourcing.plans.custom.button') }}
                                    </a>
                                </div>
                            </div>
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

<script>
function togglePlans(sectionId) {
    const plansSection = document.getElementById(sectionId);
    const arrowIcon = document.getElementById(sectionId === 'offshoring-plans' ? 'offshoring-arrow' : 'nearshoring-arrow');
    
    if (plansSection.classList.contains('hidden')) {
        // Mostrar los planes con animación
        plansSection.classList.remove('hidden');
        plansSection.style.opacity = '0';
        plansSection.style.transform = 'translateY(-20px)';
        plansSection.style.transition = 'opacity 300ms ease, transform 300ms ease';
        
        // Trigger reflow
        void plansSection.offsetWidth;
        
        // Aplicar la animación
        plansSection.style.opacity = '1';
        plansSection.style.transform = 'translateY(0)';
        
        // Rotar la flecha
        arrowIcon.style.transform = 'rotate(180deg)';
    } else {
        // Ocultar los planes con animación
        plansSection.style.opacity = '0';
        plansSection.style.transform = 'translateY(-20px)';
        
        // Rotar la flecha de vuelta
        arrowIcon.style.transform = 'rotate(0)';
        
        // Esperar a que termine la animación antes de ocultar
        setTimeout(() => {
            plansSection.classList.add('hidden');
        }, 300);
    }
}
</script>
