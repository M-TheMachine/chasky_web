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
                <div class="inline-flex items-center bg-[#701516]/10 px-4 py-2 rounded-full mb-6" data-aos="fade-up">
                    <span class="animate-pulse w-3 h-3 bg-green-500 rounded-full mr-2"></span>
                    <span class="text-[#701516] font-medium">¡Convocatoria abierta! 5 plazas disponibles</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-8 text-[#701516]" data-aos="fade-up">
                    Programa de Pasantías Chasky 2025
                </h1>
                <p class="text-xl text-gray-600 mb-8" data-aos="fade-up" data-aos-delay="100">
                    Una oportunidad única para desarrollar tu potencial en tecnología y marketing digital junto a un equipo de expertos en proyectos internacionales.
                </p>
                <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Inicio: Junio 2025
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Duración flexible
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Modalidad presencial
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre el Programa -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold mb-6 gradient-text" data-aos="fade-up">💡 ¿Qué es el Programa de Pasantías Chasky?</h2>
                    <p class="text-gray-600 text-lg leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                        El Programa de Pasantías Chasky 2025 está diseñado para atraer a estudiantes talentosos y motivados en las áreas de Desarrollo de Software y Marketing Digital. Es una oportunidad única para que futuros profesionales trabajen codo a codo con un equipo de expertos en un entorno ágil, creativo y tecnológicamente avanzado.
                    </p>
                </div>

                <!-- Objetivos -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold mb-8 text-[#701516]" data-aos="fade-up">🎯 Objetivos del Programa</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold">Experiencia Real</h3>
                            </div>
                            <p class="text-gray-600">Brindar a los pasantes una experiencia real de trabajo en proyectos reales.</p>
                        </div>

                        <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold">Crecimiento Profesional</h3>
                            </div>
                            <p class="text-gray-600">Fomentar el crecimiento profesional y personal mediante el aprendizaje práctico.</p>
                        </div>

                        <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold">Identificar Talentos</h3>
                            </div>
                            <p class="text-gray-600">Identificar talentos que puedan formar parte de nuestro equipo a futuro.</p>
                        </div>

                        <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="300">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold">Desarrollo Local</h3>
                            </div>
                            <p class="text-gray-600">Contribuir al desarrollo del ecosistema tecnológico y digital en Bolivia.</p>
                        </div>
                    </div>
                </div>

                <!-- Áreas de Participación -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold mb-8 text-[#701516]" data-aos="fade-up">🛠️ Áreas de Participación</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Desarrollo de Software -->
                        <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold">👩‍💻 Desarrollo de Software</h3>
                            </div>
                            <ul class="space-y-4">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Frontend y Backend Web
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Aplicaciones móviles
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Uso de metodologías ágiles (Scrum, Kanban)
                                </li>
                            </ul>
                        </div>

                        <!-- Marketing Digital -->
                        <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold">📢 Marketing Digital</h3>
                            </div>
                            <ul class="space-y-4">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Estrategias en redes sociales
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Producción audiovisual
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Creación de contenido y copywriting
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Lo que ofrecemos -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold mb-8 text-[#701516]" data-aos="fade-up">👨‍🏫 ¿Qué ofrecemos?</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white rounded-xl p-6 shadow-lg" data-aos="fade-up">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold mb-2">Supervisión y mentoría</h3>
                            <p class="text-gray-600">Aprende directamente de profesionales con experiencia en proyectos internacionales.</p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold mb-2">Proyectos reales</h3>
                            <p class="text-gray-600">Trabaja en proyectos activos con clientes nacionales e internacionales.</p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold mb-2">Stack tecnológico</h3>
                            <p class="text-gray-600">Acceso a herramientas modernas como Laravel, React, AWS y metodologías ágiles.</p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg" data-aos="fade-up">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold mb-2">Certificación oficial</h3>
                            <p class="text-gray-600">Recibe una certificación validada por tu desempeño en el programa.</p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold mb-2">Oportunidad laboral</h3>
                            <p class="text-gray-600">Posibilidad de unirte al equipo Chasky al finalizar tu pasantía.</p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold mb-2">Networking</h3>
                            <p class="text-gray-600">Conéctate con profesionales y otros pasantes del sector tecnológico.</p>
                        </div>
                    </div>
                </div>

                <!-- Requisitos -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold mb-8 text-[#701516]" data-aos="fade-up">📋 Perfil del Pasante</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Desarrollo de Software -->
                        <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                            <h3 class="text-xl font-bold mb-6 text-[#701516]">Para Desarrollo de Software</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-[#f4bc21] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-semibold">Conocimientos básicos en:</p>
                                        <p class="text-gray-600">HTML, CSS, JavaScript, PHP o algún lenguaje de programación web</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-[#f4bc21] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-semibold">Estar cursando últimos semestres de:</p>
                                        <p class="text-gray-600">Ing. de Sistemas, Informática o carreras afines</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-[#f4bc21] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-semibold">Habilidades deseables:</p>
                                        <p class="text-gray-600">Resolución de problemas, trabajo en equipo, autoaprendizaje</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Marketing Digital -->
                        <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-xl font-bold mb-6 text-[#701516]">Para Marketing Digital</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-[#f4bc21] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-semibold">Conocimientos básicos en:</p>
                                        <p class="text-gray-600">Redes sociales, estrategias digitales y herramientas de diseño</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-[#f4bc21] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-semibold">Estar cursando últimos semestres de:</p>
                                        <p class="text-gray-600">Marketing, Comunicación Social o carreras afines</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-[#f4bc21] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-semibold">Habilidades deseables:</p>
                                        <p class="text-gray-600">Creatividad, redacción, gestión de comunidades digitales</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Duración y Modalidad -->
                <div class="text-center" data-aos="fade-up">
                    <h2 class="text-3xl font-bold mb-8 text-[#701516]">📅 Modalidad</h2>
                    <p class="text-xl text-gray-600 mb-4">Presencial / Híbrida (según área)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline del Proceso -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center text-[#701516]" data-aos="fade-up">🎯 Proceso de Selección</h2>
            <div class="max-w-4xl mx-auto">
                <div class="relative">
                    <!-- Línea vertical -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-[#701516]"></div>

                    <!-- Pasos -->
                    <div class="space-y-12">
                        <!-- Paso 1 -->
                        <div class="relative" data-aos="fade-right">
                            <div class="flex items-center">
                                <div class="w-1/2 pr-8 text-right">
                                    <h3 class="text-xl font-bold mb-2">Postulación Online</h3>
                                    <p class="text-gray-600">Completa el formulario y adjunta tu CV</p>
                                </div>
                                <div class="w-10 h-10 bg-[#701516] rounded-full flex items-center justify-center z-10">
                                    <span class="text-[#f4bc21] font-bold">1</span>
                                </div>
                                <div class="w-1/2 pl-8">
                                    <p class="text-sm text-gray-500"></p>
                                </div>
                            </div>
                        </div>

                        <!-- Paso 2 -->
                        <div class="relative" data-aos="fade-left">
                            <div class="flex items-center">
                                <div class="w-1/2 pr-8 text-right">
                                    <p class="text-sm text-gray-500"></p>
                                </div>
                                <div class="w-10 h-10 bg-[#701516] rounded-full flex items-center justify-center z-10">
                                    <span class="text-[#f4bc21] font-bold">2</span>
                                </div>
                                <div class="w-1/2 pl-8">
                                    <h3 class="text-xl font-bold mb-2">Entrevista Inicial</h3>
                                    <p class="text-gray-600">Conoceremos tus intereses y experiencia</p>
                                </div>
                            </div>
                        </div>

                        <!-- Paso 3 -->
                        <div class="relative" data-aos="fade-right">
                            <div class="flex items-center">
                                <div class="w-1/2 pr-8 text-right">
                                    <h3 class="text-xl font-bold mb-2">Prueba Técnica</h3>
                                    <p class="text-gray-600">Evaluación de habilidades específicas</p>
                                </div>
                                <div class="w-10 h-10 bg-[#701516] rounded-full flex items-center justify-center z-10">
                                    <span class="text-[#f4bc21] font-bold">3</span>
                                </div>
                                <div class="w-1/2 pl-8">
                                    <p class="text-sm text-gray-500">   </p>
                                </div>
                            </div>
                        </div>

                        <!-- Paso 4 -->
                        <div class="relative" data-aos="fade-left">
                            <div class="flex items-center">
                                <div class="w-1/2 pr-8 text-right">
                                    <p class="text-sm text-gray-500"></p>
                                </div>
                                <div class="w-10 h-10 bg-[#701516] rounded-full flex items-center justify-center z-10">
                                    <span class="text-[#f4bc21] font-bold">4</span>
                                </div>
                                <div class="w-1/2 pl-8">
                                    <h3 class="text-xl font-bold mb-2">¡Bienvenida al equipo!</h3>
                                    <p class="text-gray-600">Inicio del programa de pasantías</p>
                                </div>
                            </div>
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
                <span class="inline-block px-4 py-2 bg-[#f4bc21]/20 rounded-full text-[#f4bc21] text-sm font-medium mb-6" data-aos="fade-up">
                    ¡Postulaciones abiertas hasta el 15 de junio!
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-8" data-aos="fade-up">
                    Da el primer paso hacia tu carrera profesional
                </h2>
                <p class="text-xl mb-12" data-aos="fade-up" data-aos-delay="100">
                    Únete a un equipo innovador y sé parte de proyectos que transforman la tecnología en Bolivia.
                </p>
                <div class="flex flex-col md:flex-row justify-center gap-6">
                    <a href="/pasantias/software" class="group inline-flex items-center justify-center bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold py-4 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <span>Postular a Desarrollo</span>
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="/pasantias/marketing" class="group inline-flex items-center justify-center bg-white hover:bg-gray-100 text-[#701516] font-bold py-4 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-lg" data-aos="fade-up" data-aos-delay="300">
                        <span>Postular a Marketing</span>
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
                <p class="mt-8 text-sm text-white/80" data-aos="fade-up" data-aos-delay="400">
                    ¿Tienes preguntas? Escríbenos a <a href="mailto:dreambig@chaskydev.com" class="underline hover:text-white">dreambig@chaskydev.com</a>
                </p>
            </div>
        </div>
    </section>
@endsection
