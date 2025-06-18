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
                    Marketing Digital que Genera Resultados
                </h1>
                <p class="text-xl text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
                    Transformamos tu presencia digital en resultados medibles con estrategias personalizadas para Facebook, Instagram y TikTok.
                </p>
            </div>
        </div>
    </section>

    <!-- Servicios -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">Nuestros Servicios</h2>
                    <p class="text-gray-600 text-lg">Soluciones integrales de marketing digital para impulsar tu negocio</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Facebook -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Facebook</h3>
                        </div>
                        <p class="text-gray-600">Campañas publicitarias orientadas a resultados, gestión de comunidad y estrategias de contenido que conectan con tu audiencia.</p>
                    </div>

                    <!-- Instagram -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Instagram</h3>
                        </div>
                        <p class="text-gray-600">Creación de contenido visual atractivo, estrategias de Instagram Shopping y campañas de influencers que impulsan tu marca.</p>
                    </div>

                    <!-- TikTok -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">TikTok</h3>
                        </div>
                        <p class="text-gray-600">Contenido viral, tendencias y estrategias de marketing que conectan con la Generación Z y millennials.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Por qué elegirnos -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">¿Por qué elegirnos?</h2>
                    <p class="text-gray-600 text-lg">Resultados comprobados en marketing digital</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Resultados Medibles</h3>
                        </div>
                        <p class="text-gray-600">Seguimiento detallado de métricas y ROI para cada campaña.</p>
                    </div>

                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Respuesta Rápida</h3>
                        </div>
                        <p class="text-gray-600">Atención inmediata y gestión proactiva de tus campañas.</p>
                    </div>

                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Estrategias Personalizadas</h3>
                        </div>
                        <p class="text-gray-600">Soluciones adaptadas a tus objetivos específicos.</p>
                    </div>

                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="300">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f4bc21]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h3v7l9-11h-3z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Innovación Constante</h3>
                        </div>
                        <p class="text-gray-600">Siempre al día con las últimas tendencias y tecnologías.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paquetes de TikTok + Redes Sociales 2025 -->
    <section class="py-24 bg-gradient-to-br from-white to-gray-100">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">Paquetes de TikTok + Redes Sociales</h2>
                    <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                        En Chasky, sabemos que el mundo digital se mueve rápido, y los videos cortos en TikTok son la clave para captar la atención de tu audiencia. Nuestros paquetes combinan la creación de videos virales con una gestión estratégica de Facebook e Instagram.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Paquete Básico -->
                    <div class="bg-white rounded-xl p-8 shadow-lg transform transition-all duration-300 hover:scale-105" data-aos="fade-up">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-[#701516] mb-4">Paquete Emprendedor</h3>
                            <div class="text-4xl font-bold mb-2">Bs 2.400</div>
                            <p class="text-gray-600">por mes</p>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#701516] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-600">12 videos profesionales para TikTok (3 por semana)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#701516] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-600">2 publicaciones semanales en Facebook e Instagram*</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#701516] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-600">Respuestas a mensajes y comentarios</span>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="/contacto" class="inline-block bg-[#701516] text-white font-bold py-3 px-8 rounded-full hover:bg-[#701516]/90 transition duration-300">
                                Impulsar mi Emprendimiento
                            </a>
                        </div>
                    </div>

                    <!-- Paquete Pro -->
                    <div class="bg-white rounded-xl p-8 shadow-xl transform transition-all duration-300 hover:scale-105 relative" data-aos="fade-up" data-aos-delay="100">
                        <div class="absolute top-0 right-0 bg-[#701516] text-white text-sm font-bold py-1 px-4 rounded-tr-xl rounded-bl-xl">
                            Más Popular
                        </div>
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-[#701516] mb-4">Paquete Crecimiento</h3>
                            <div class="text-4xl font-bold mb-2">Bs 4.000</div>
                            <p class="text-gray-600">por mes</p>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#701516] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-600">20 videos para TikTok (5 por semana)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#701516] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-600">3 publicaciones semanales en Facebook e Instagram*</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#701516] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-600">Adaptación a reels y stories</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#701516] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-600">Interacción activa con seguidores</span>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="/contacto" class="inline-block bg-[#701516] text-white font-bold py-3 px-8 rounded-full hover:bg-[#701516]/90 transition duration-300">
                                Potenciar mi Negocio
                            </a>
                        </div>
                    </div>

                    <!-- Paquete Premium -->
                    <div class="bg-white rounded-xl p-8 shadow-lg transform transition-all duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-[#701516] mb-4">Paquete Empresarial</h3>
                            <div class="text-4xl font-bold mb-2">Bs 5.600</div>
                            <p class="text-gray-600">por mes</p>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#701516] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-600">28 videos para TikTok (7 por semana)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#701516] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-600">Publicaciones diarias en Facebook e Instagram*</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#701516] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-600">Branding visual completo</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#701516] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-600">Asesoría creativa mensual</span>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="/contacto" class="inline-block bg-[#701516] text-white font-bold py-3 px-8 rounded-full hover:bg-[#701516]/90 transition duration-300">
                                Escalar mi Empresa
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-12 bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                    <h3 class="text-xl font-bold text-[#701516] mb-6">Notas Adicionales</h3>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#701516] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Videos individuales disponibles bajo cotización (sin gestión de redes incluida)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#701516] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>*La gestión de Facebook e Instagram está incluida sin costo adicional al firmar un contrato mensual o trimestral</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#701516] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>¡10% de descuento en tu primer mes como cliente nuevo al firmar un contrato mensual o trimestral!</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">¿Listo para impulsar tu negocio?</h2>
                    <p class="text-gray-600 text-lg">Completa el siguiente formulario y nos pondremos en contacto contigo</p>
                </div>

                <form action="{{ route('marketing.contact') }}" method="POST" class="space-y-8" data-aos="fade-up">
                    @csrf
                    <!-- Información Básica -->
                    <div class="bg-white rounded-xl p-8 shadow-lg">
                        <h3 class="text-xl font-bold mb-6 text-[#701516]">Información Básica</h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Nombre de la empresa o marca</label>
                                <input type="text" name="company" id="company" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                            </div>
                            
                            <div>
                                <label for="industry" class="block text-sm font-medium text-gray-700 mb-1">Sector o industria</label>
                                <input type="text" name="industry" id="industry" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                            </div>
                            
                            <div>
                                <label for="company_size" class="block text-sm font-medium text-gray-700 mb-1">Tamaño de la empresa</label>
                                <input type="text" name="company_size" id="company_size" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                            </div>
                        </div>
                    </div>

                    <!-- Objetivos de Marketing -->
                    <div class="bg-white rounded-xl p-8 shadow-lg">
                        <h3 class="text-xl font-bold mb-6 text-[#701516]">Objetivos de Marketing</h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="objectives" class="block text-sm font-medium text-gray-700 mb-1">¿Cuáles son tus principales objetivos de marketing?</label>
                                <textarea name="objectives" id="objectives" rows="3" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]"></textarea>
                            </div>
                            
                            <div>
                                <label for="target_audience" class="block text-sm font-medium text-gray-700 mb-1">¿Tienes una audiencia objetivo definida?</label>
                                <textarea name="target_audience" id="target_audience" rows="3" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Estrategias Actuales -->
                    <div class="bg-white rounded-xl p-8 shadow-lg">
                        <h3 class="text-xl font-bold mb-6 text-[#701516]">Estrategias Actuales</h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="current_strategies" class="block text-sm font-medium text-gray-700 mb-1">¿Qué estrategias de marketing estás utilizando actualmente?</label>
                                <textarea name="current_strategies" id="current_strategies" rows="3" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]"></textarea>
                            </div>
                            
                            <div>
                                <label for="current_results" class="block text-sm font-medium text-gray-700 mb-1">¿Qué resultados has obtenido con estas estrategias?</label>
                                <textarea name="current_results" id="current_results" rows="3" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Canales Preferidos -->
                    <div class="bg-white rounded-xl p-8 shadow-lg">
                        <h3 class="text-xl font-bold mb-6 text-[#701516]">Canales Preferidos</h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="preferred_channels" class="block text-sm font-medium text-gray-700 mb-1">¿En qué canales te gustaría enfocarte?</label>
                                <div class="space-y-2">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="channels[]" value="facebook" class="form-checkbox text-[#701516]">
                                        <span class="ml-2">Facebook</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="channels[]" value="instagram" class="form-checkbox text-[#701516]">
                                        <span class="ml-2">Instagram</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="channels[]" value="tiktok" class="form-checkbox text-[#701516]">
                                        <span class="ml-2">TikTok</span>
                                    </label>
                                </div>
                            </div>
                            
                            <div>
                                <label for="specific_project" class="block text-sm font-medium text-gray-700 mb-1">¿Tienes algún proyecto o campaña específica en mente?</label>
                                <textarea name="specific_project" id="specific_project" rows="3"
                                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Información Adicional -->
                    <div class="bg-white rounded-xl p-8 shadow-lg">
                        <h3 class="text-xl font-bold mb-6 text-[#701516]">Información Adicional</h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="additional_info" class="block text-sm font-medium text-gray-700 mb-1">¿Hay algo más que deberíamos saber sobre tu negocio?</label>
                                <textarea name="additional_info" id="additional_info" rows="3"
                                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]"></textarea>
                            </div>
                            
                            <div>
                                <label for="start_date" class="block text-sm font-medium text-gray-700 mb-1">¿En cuántos días esperas comenzar a trabajar con una agencia?</label>
                                <input type="text" name="start_date" id="start_date" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="inline-block bg-[#701516] text-white font-bold py-3 px-8 rounded-full hover:bg-[#701516]/90 transition duration-300">
                            Enviar Solicitud
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
