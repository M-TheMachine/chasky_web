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
                    {{ __('outsourcing.hero.title') }}
                </h1>
                <p class="text-xl text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ __('outsourcing.hero.subtitle') }}
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

    <!-- Planes de Outsourcing -->
    <section class="py-24 bg-white mb-24">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">{{ __('outsourcing.plans.title') }}</h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        {{ __('outsourcing.plans.description') }}
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Essential Plan -->
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2" data-aos="fade-up">
                        <div class="bg-[#701516] px-6 py-12 text-white text-center">
                            <h3 class="text-2xl font-bold mb-4">🚀 Essential Plan</h3>
                            <div class="flex justify-center items-baseline">
                                <span class="text-3xl font-extrabold tracking-tight">$2,500</span>
                                <span class="ml-1 text-xl font-normal text-white/70">USD</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">1 desarrollador full-stack dedicado (web o móvil).</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">1 project manager bilingüe para comunicación directa.</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">Reuniones semanales con metodología Scrum y seguimiento ágil.</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">Hasta 160 horas mensuales de desarrollo.</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">Acceso a herramientas de gestión profesional (Jira, Slack, Trello, etc.).</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">Entrega white-label: todo el crédito es para tu agencia.</p>
                                </li>
                            </ul>
                            <div class="mt-8 mb-4 text-gray-600 text-center italic">
                                Ideal para agencias que necesitan aumentar su capacidad de producción sin aumentar su nómina.
                            </div>
                            <div class="mt-6">
                                <a href="/contacto" class="block w-full bg-[#701516] hover:bg-[#701516]/90 text-white text-center font-bold py-3 px-4 rounded-lg transition duration-300">
                                    Contáctanos
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Growth Plan -->
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden transform scale-105 z-10 transition-all duration-300 hover:shadow-2xl hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                        <div class="bg-gradient-to-r from-[#701516] to-[#c40606] px-6 py-12 text-white text-center">
                            <span class="inline-block px-3 py-1 text-xs font-semibold bg-[#f4bc21] text-[#701516] rounded-full mb-4">RECOMENDADO</span>
                            <h3 class="text-2xl font-bold mb-4">🌱 Growth Plan</h3>
                            <div class="flex justify-center items-baseline">
                                <span class="text-3xl font-extrabold tracking-tight">$4,300</span>
                                <span class="ml-1 text-xl font-normal text-white/70">USD</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">2 desarrolladores full-stack dedicados.</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">1 project manager bilingüe.</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">1 diseñador UI/UX compartido.</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">Hasta 320 horas mensuales de trabajo.</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">Scrum diario, QA básico y seguimiento continuo.</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">Entrega white-label con NDA incluida.</p>
                                </li>
                            </ul>
                            <div class="mt-8 mb-4 text-gray-600 text-center italic">
                                Ideal para agencias con múltiples proyectos en simultáneo y necesidad de agilidad y control de calidad.
                            </div>
                            <div class="mt-6">
                                <a href="/contacto" class="block w-full bg-gradient-to-r from-[#701516] to-[#c40606] hover:opacity-90 text-white text-center font-bold py-3 px-4 rounded-lg transition duration-300">
                                    Contáctanos
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Custom Plan -->
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                        <div class="bg-[#701516] px-6 py-12 text-white text-center">
                            <h3 class="text-2xl font-bold mb-4">🛠️ Custom Plan</h3>
                            <div class="flex justify-center items-baseline">
                                <span class="text-3xl font-extrabold tracking-tight">$5,000</span>
                                <span class="ml-1 text-xl font-normal text-white/70">USD+</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">Equipo personalizado según el tipo de proyecto.</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">QA manual o automatizado según requerimiento.</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">Diseño UI/UX completo y soporte de marketing opcional.</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">DevOps y arquitectura escalable disponibles.</p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-[#f4bc21]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-base text-gray-700">Integración directa con los equipos internos del cliente.</p>
                                </li>
                            </ul>
                            <div class="mt-8 mb-4 text-gray-600 text-center italic">
                                Ideal para agencias que buscan escalar rápidamente, manejar productos complejos o reforzar su equipo interno con talento especializado.
                            </div>
                            <div class="mt-6">
                                <a href="/contacto" class="block w-full bg-[#701516] hover:bg-[#701516]/90 text-white text-center font-bold py-3 px-4 rounded-lg transition duration-300">
                                    Contáctanos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ventajas Section -->
    <section class="py-24 bg-gray-50 mb-24">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">{{ __('outsourcing.benefits.title') }}</h2>
                    <p class="text-gray-600 text-lg">{{ __('outsourcing.benefits.subtitle') }}</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Talento Especializado -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Talento Especializado</h3>
                        </div>
                        <p class="text-gray-600">Accede a desarrolladores altamente cualificados con experiencia en las últimas tecnologías y frameworks.</p>
                    </div>

                    <!-- Flexibilidad -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Flexibilidad</h3>
                        </div>
                        <p class="text-gray-600">Escala tu equipo según tus necesidades, sin los riesgos y costos asociados a contratar empleados de tiempo completo.</p>
                    </div>

                    <!-- Ahorro de Costos -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Ahorro de Costos</h3>
                        </div>
                        <p class="text-gray-600">Reduce gastos operativos significativamente al eliminar costos de reclutamiento, capacitación, beneficios y espacio de oficina.</p>
                    </div>

                    <!-- Entrega Rápida -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h3v7l9-11h-3z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Entrega Rápida</h3>
                        </div>
                        <p class="text-gray-600">Acelera el desarrollo de tus proyectos con equipos preconfigurados y metodologías ágiles implementadas desde el día uno.</p>
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
                    {{ __('outsourcing.cta.title') }}
                </h2>
                <p class="text-xl mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ __('outsourcing.cta.subtitle') }}
                </p>
                <a href="/contacto" class="inline-block bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold py-4 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    {{ __('outsourcing.cta.button') }}
                </a>
            </div>
        </div>
    </section>
@endsection
