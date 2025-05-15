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
                    {{ __('Sobre Nosotros') }}
                </h1>
                <p class="text-xl text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ __('Conoce nuestra historia y el equipo detrás de Chasky') }}
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
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">Nuestra Historia</h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Desde nuestros inicios en 2018, nos hemos dedicado a transformar ideas en soluciones digitales innovadoras. 
                        Nuestro compromiso con la excelencia y la innovación nos ha permitido crecer y evolucionar junto a 
                        nuestros clientes, ayudándoles a alcanzar sus objetivos en el mundo digital.
                    </p>
                </div>
                
                <!-- Timeline -->
                <div class="relative">
                    <!-- Línea central -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-[#701516] to-[#c40606] rounded-full"></div>
                    
                    <!-- 2018 -->
                    <div class="relative mb-24" data-aos="fade-right">
                        <div class="flex items-center">
                            <div class="w-1/2 pr-12 text-right">
                                <div class="bg-white p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                                    <h3 class="text-2xl font-bold mb-3 gradient-text">2018</h3>
                                    <p class="text-gray-600">Fundación de Chasky con la visión de transformar el panorama digital</p>
                                    <ul class="mt-4 space-y-2 text-gray-600 text-left">
                                        <li class="flex items-center justify-end">
                                            <span class="text-gray-600">Inicio de operaciones</span>
                                            <svg class="w-4 h-4 text-[#f4bc21] ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </li>
                                        <li class="flex items-center justify-end">
                                            <span class="text-gray-600">Primeros proyectos exitosos</span>
                                            <svg class="w-4 h-4 text-[#f4bc21] ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-[#701516] bg-white shadow-xl"></div>
                            <div class="w-1/2 pl-12"></div>
                        </div>
                    </div>

                    <!-- 2020 -->
                    <div class="relative mb-24" data-aos="fade-left">
                        <div class="flex items-center">
                            <div class="w-1/2 pr-12"></div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-[#701516] bg-white shadow-xl"></div>
                            <div class="w-1/2 pl-12">
                                <div class="bg-white p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                                    <h3 class="text-2xl font-bold mb-3 gradient-text">2020</h3>
                                    <p class="text-gray-600">Superación de desafíos y crecimiento durante la pandemia</p>
                                    <ul class="mt-4 space-y-2 text-gray-600">
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">Adaptación a servicios remotos</span>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">Expansión de servicios digitales</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2022 -->
                    <div class="relative mb-24" data-aos="fade-right">
                        <div class="flex items-center">
                            <div class="w-1/2 pr-12 text-right">
                                <div class="bg-white p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                                    <h3 class="text-2xl font-bold mb-3 gradient-text">2022</h3>
                                    <p class="text-gray-600">Expansión de servicios y crecimiento del equipo</p>
                                    <ul class="mt-4 space-y-2 text-gray-600 text-left">
                                        <li class="flex items-center justify-end">
                                            <span class="text-gray-600">Ampliación de la cartera de servicios</span>
                                            <svg class="w-4 h-4 text-[#f4bc21] ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </li>
                                        <li class="flex items-center justify-end">
                                            <span class="text-gray-600">Incorporación de nuevos talentos</span>
                                            <svg class="w-4 h-4 text-[#f4bc21] ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-[#701516] bg-white shadow-xl"></div>
                            <div class="w-1/2 pl-12"></div>
                        </div>
                    </div>

                    <!-- 2025 -->
                    <div class="relative" data-aos="fade-left">
                        <div class="flex items-center">
                            <div class="w-1/2 pr-12"></div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full border-4 border-[#701516] bg-white shadow-xl"></div>
                            <div class="w-1/2 pl-12">
                                <div class="bg-white p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                                    <h3 class="text-2xl font-bold mb-3 gradient-text">2025</h3>
                                    <p class="text-gray-600">Consolidación como referente en soluciones digitales</p>
                                    <ul class="mt-4 space-y-2 text-gray-600">
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">Expansión internacional</span>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 text-[#f4bc21] mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-gray-600">Innovación continua</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">Nuestros Valores</h2>
                    <p class="text-gray-600 text-lg">Los principios que guían nuestro trabajo y relaciones</p>
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
                            <h3 class="text-xl font-bold">Integridad</h3>
                        </div>
                        <p class="text-gray-600">Actuamos con honestidad y transparencia en cada proyecto y relación profesional.</p>
                    </div>

                    <!-- Innovación -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h3v7l9-11h-3z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Innovación</h3>
                        </div>
                        <p class="text-gray-600">Buscamos constantemente nuevas formas de resolver desafíos y mejorar soluciones.</p>
                    </div>

                    <!-- Colaboración -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Colaboración</h3>
                        </div>
                        <p class="text-gray-600">Trabajamos en estrecha colaboración con nuestros clientes para alcanzar objetivos comunes.</p>
                    </div>

                    <!-- Excelencia -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Excelencia</h3>
                        </div>
                        <p class="text-gray-600">Nos esforzamos por alcanzar los más altos estándares en cada proyecto.</p>
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
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">Nuestro Equipo</h2>
                    <p class="text-gray-600 text-lg">Profesionales apasionados por la innovación digital</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center" data-aos="fade-up">
                        <div class="relative mb-6 inline-block">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3" 
                                 alt="CEO" 
                                 class="w-48 h-48 rounded-full object-cover mx-auto ring-4 ring-[#701516]">
                        </div>
                        <h3 class="text-xl font-bold mb-2">Carlos Rodriguez</h3>
                        <p class="text-[#701516] font-medium mb-4">CEO & Fundador</p>
                        <p class="text-gray-600">Visionario digital con más de 15 años de experiencia</p>
                    </div>

                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative mb-6 inline-block">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3" 
                                 alt="CTO" 
                                 class="w-48 h-48 rounded-full object-cover mx-auto ring-4 ring-[#701516]">
                        </div>
                        <h3 class="text-xl font-bold mb-2">Ana Martínez</h3>
                        <p class="text-[#701516] font-medium mb-4">Directora de Tecnología</p>
                        <p class="text-gray-600">Experta en desarrollo de soluciones innovadoras</p>
                    </div>

                    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="relative mb-6 inline-block">
                            <img src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-4.0.3" 
                                 alt="CCO" 
                                 class="w-48 h-48 rounded-full object-cover mx-auto ring-4 ring-[#701516]">
                        </div>
                        <h3 class="text-xl font-bold mb-2">Miguel Torres</h3>
                        <p class="text-[#701516] font-medium mb-4">Director Creativo</p>
                        <p class="text-gray-600">Creativo apasionado por el diseño digital</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-32 bg-gradient-to-br from-[#701516] to-[#c40606] text-white relative">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-8" data-aos="fade-up">
                    ¿Quieres ser parte de nuestra historia?
                </h2>
                <p class="text-xl mb-12" data-aos="fade-up" data-aos-delay="100">
                    Únete a nosotros y ayúdanos a crear el futuro digital
                </p>
                <a href="/contacto" class="inline-block bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold py-4 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    Contáctanos
                </a>
            </div>
        </div>
    </section>
@endsection
