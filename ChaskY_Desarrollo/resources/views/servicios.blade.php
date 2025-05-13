@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-[#701516] to-[#c40606] text-white min-h-[70vh] flex items-center mb-24 mt-16">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="container mx-auto px-4 py-24 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-8" data-aos="fade-up">
                    {{ __('Nuestros Servicios') }}
                </h1>
                <p class="text-xl text-gray-200 mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ __('Soluciones digitales adaptadas a tus necesidades') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Servicios Principales -->
    <section class="py-24 bg-gray-50 mb-24">
        <div class="container mx-auto px-4">
            <!-- Desarrollo Web -->
            <div class="mb-32" data-aos="fade-up">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="order-2 md:order-1">
                        <h2 class="text-3xl font-bold mb-6 gradient-text">Desarrollo Web</h2>
                        <p class="text-gray-600 mb-6">Creamos sitios web modernos, responsivos y optimizados para brindar la mejor experiencia a tus usuarios. Utilizamos las últimas tecnologías para garantizar un rendimiento óptimo.</p>
                        <ul class="space-y-4">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Diseño personalizado y único
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
                    <div class="order-1 md:order-2">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2015&q=80" 
                             alt="Desarrollo Web" 
                             class="rounded-xl shadow-2xl transform hover:scale-105 transition duration-500">
                    </div>
                </div>
            </div>

            <!-- Marketing Digital -->
            <div class="mb-32" data-aos="fade-up">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1774&q=80" 
                             alt="Marketing Digital" 
                             class="rounded-xl shadow-2xl transform hover:scale-105 transition duration-500">
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold mb-6 gradient-text">Marketing Digital</h2>
                        <p class="text-gray-600 mb-6">Impulsamos tu presencia en línea con estrategias efectivas de marketing digital que generan resultados medibles y aumentan tu visibilidad en el mercado.</p>
                        <ul class="space-y-4">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Gestión de redes sociales
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
                        <h2 class="text-3xl font-bold mb-6 gradient-text">Diseño UX/UI</h2>
                        <p class="text-gray-600 mb-6">Creamos interfaces intuitivas y atractivas que mejoran la experiencia del usuario y aumentan la conversión de tu sitio web o aplicación.</p>
                        <ul class="space-y-4">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Investigación de usuarios
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
                    <div class="order-1 md:order-2">
                        <img src="https://images.unsplash.com/photo-1616400619175-5beda3a17896?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1548&q=80" 
                             alt="Diseño UX/UI" 
                             class="rounded-xl shadow-2xl transform hover:scale-105 transition duration-500">
                    </div>
                </div>
            </div>

            <!-- Offshoring -->
            <div class="mb-32" data-aos="fade-up">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3" 
                             alt="Offshoring" 
                             class="rounded-xl shadow-2xl transform hover:scale-105 transition duration-500">
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold mb-6 gradient-text">Offshoring</h2>
                        <p class="text-gray-600 mb-6">Optimiza tus costos operativos y accede a talento especializado con nuestros servicios de offshoring. Mantenemos los más altos estándares de calidad mientras reduces significativamente tus gastos.</p>
                        <ul class="space-y-4">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Equipos dedicados de desarrollo
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
                        <h2 class="text-3xl font-bold mb-6 gradient-text">Nearshoring</h2>
                        <p class="text-gray-600 mb-6">Aprovecha las ventajas de la proximidad geográfica y cultural con nuestros servicios de nearshoring. Obtén la mejor combinación de calidad, costo y facilidad de comunicación.</p>
                        <ul class="space-y-4">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Zona horaria compatible
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
                    <div class="order-1 md:order-2">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3" 
                             alt="Nearshoring" 
                             class="rounded-xl shadow-2xl transform hover:scale-105 transition duration-500">
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
                    ¿Listo para impulsar tu negocio?
                </h2>
                <p class="text-xl mb-12" data-aos="fade-up" data-aos-delay="100">
                    Contáctanos hoy mismo y descubre cómo podemos ayudarte a alcanzar tus objetivos
                </p>
                <a href="/contacto" class="inline-block bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold py-4 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    Solicitar Cotización
                </a>
            </div>
        </div>
    </section>
@endsection
