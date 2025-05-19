@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-[#701516] to-[#c40606] text-white min-h-[60vh] flex items-center mt-16">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="container mx-auto px-4 py-24 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-8 tracking-tight" data-aos="fade-up">
                    {{ __('careers.hero.title') }}
                </h1>
                <p class="text-xl md:text-2xl text-gray-100 mb-12 leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                    {{ __('careers.hero.subtitle') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Por qué Chasky -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">{{ __('careers.intro.title') }}</h2>
                    <p class="text-gray-600 text-lg">{{ __('careers.intro.description') }}</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Crecimiento Profesional -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">{{ __('careers.benefits.growth.title') }}</h3>
                        </div>
                        <p class="text-gray-600">{{ __('careers.benefits.growth.description') }}</p>
                    </div>

                    <!-- Ambiente Innovador -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">{{ __('careers.benefits.technology.title') }}</h3>
                        </div>
                        <p class="text-gray-600">{{ __('careers.benefits.technology.description') }}</p>
                    </div>

                    <!-- Cultura Inclusiva -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">{{ __('careers.benefits.environment.title') }}</h3>
                        </div>
                        <p class="text-gray-600">{{ __('careers.benefits.environment.description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vacantes Actuales -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">{{ __('careers.positions.title') }}</h2>
                    <p class="text-gray-600 text-lg">{{ __('Explora nuestras oportunidades laborales') }}</p>
                </div>

                <!-- Flutter Developer Junior -->
                <div class="bg-white rounded-xl p-8 shadow-lg mb-8" data-aos="fade-up">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                        <div>
                            <h3 class="text-2xl font-bold text-[#701516] mb-2">Desarrollador Flutter Junior</h3>
                            <p class="text-gray-600 mb-4">Cochabamba, Bolivia · Híbrido</p>
                        </div>
                        <a href="/contacto" class="bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold py-2 px-6 rounded-full transition duration-300">
                            Aplicar
                        </a>
                    </div>
                    <div class="space-y-4">
                        <p class="text-gray-700">Buscamos un desarrollador Flutter Junior apasionado por crear aplicaciones móviles excepcionales.</p>
                        <div>
                            <h4 class="font-semibold mb-2">Requisitos:</h4>
                            <ul class="list-disc list-inside text-gray-600 space-y-2">
                                <li>Experiencia básica con Flutter y Dart</li>
                                <li>Conocimientos de Git</li>
                                <li>Capacidad de trabajo en equipo</li>
                                <li>Deseos de aprender y crecer profesionalmente</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold mb-2">Ofrecemos:</h4>
                            <ul class="list-disc list-inside text-gray-600 space-y-2">
                                <li>Mentoría personalizada</li>
                                <li>Capacitación continua</li>
                                <li>Proyectos desafiantes</li>
                                <li>Horario flexible</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Fullstack Developer -->
                <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                        <div>
                            <h3 class="text-2xl font-bold text-[#701516] mb-2">Desarrollador Fullstack</h3>
                            <p class="text-gray-600 mb-4">Cochabamba, Bolivia · Híbrido</p>
                        </div>
                        <a href="/contacto" class="bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold py-2 px-6 rounded-full transition duration-300">
                            Aplicar
                        </a>
                    </div>
                    <div class="space-y-4">
                        <p class="text-gray-700">Estamos en busca de un desarrollador Fullstack con experiencia en tecnologías modernas.</p>
                        <div>
                            <h4 class="font-semibold mb-2">Requisitos:</h4>
                            <ul class="list-disc list-inside text-gray-600 space-y-2">
                                <li>Experiencia con Laravel y Vue.js/React</li>
                                <li>Conocimientos de bases de datos SQL</li>
                                <li>Experiencia con API RESTful</li>
                                <li>Familiaridad con metodologías ágiles</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold mb-2">Ofrecemos:</h4>
                            <ul class="list-disc list-inside text-gray-600 space-y-2">
                                <li>Proyectos internacionales</li>
                                <li>Stack tecnológico moderno</li>
                                <li>Desarrollo profesional continuo</li>
                                <li>Excelente ambiente laboral</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-gradient-to-br from-[#701516] to-[#c40606] text-white relative">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-8" data-aos="fade-up">
                    {{ __('careers.cta.title') }}
                </h2>
                <p class="text-xl mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ __('careers.cta.subtitle') }}
                </p>
                <a href="/contacto" class="inline-block bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold py-4 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    {{ __('careers.cta.button') }}
                </a>
            </div>
        </div>
    </section>
@endsection
