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
                    {{ __('Nuestro Portafolio') }}
                </h1>
                <p class="text-xl text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ __('Descubre cómo hemos ayudado a nuestros clientes a alcanzar el éxito digital') }}
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

    <!-- Filtros -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up">
                <button class="px-6 py-2 rounded-full bg-[#701516] text-white hover:bg-[#c40606] transition-colors">
                    Todos
                </button>
                <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-[#701516] hover:text-white transition-colors">
                    Desarrollo Web
                </button>
                <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-[#701516] hover:text-white transition-colors">
                    Marketing Digital
                </button>
                <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-[#701516] hover:text-white transition-colors">
                    Diseño UX/UI
                </button>
            </div>
        </div>
    </section>

    <!-- Proyectos Grid -->
    <section class="py-24 bg-gray-50 mb-24">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Proyecto 1 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3" 
                         alt="E-commerce Website" 
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white mb-2">E-commerce Premium</h3>
                            <p class="text-gray-200 mb-4">Plataforma de comercio electrónico con integración de pagos y gestión de inventario</p>
                            <a href="#" class="inline-block px-6 py-2 bg-[#f4bc21] text-[#701516] rounded-full font-semibold hover:bg-[#f4bc21]/90 transition-colors">
                                Ver Proyecto
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 2 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3" 
                         alt="Marketing Campaign" 
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white mb-2">Campaña Digital Exitosa</h3>
                            <p class="text-gray-200 mb-4">Estrategia integral de marketing digital que aumentó las ventas en un 200%</p>
                            <a href="#" class="inline-block px-6 py-2 bg-[#f4bc21] text-[#701516] rounded-full font-semibold hover:bg-[#f4bc21]/90 transition-colors">
                                Ver Proyecto
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 3 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1616400619175-5beda3a17896?ixlib=rb-4.0.3" 
                         alt="App Design" 
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white mb-2">Diseño UX/UI Innovador</h3>
                            <p class="text-gray-200 mb-4">Rediseño completo de la interfaz que mejoró la retención de usuarios en un 150%</p>
                            <a href="#" class="inline-block px-6 py-2 bg-[#f4bc21] text-[#701516] rounded-full font-semibold hover:bg-[#f4bc21]/90 transition-colors">
                                Ver Proyecto
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 4 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?ixlib=rb-4.0.3" 
                         alt="Mobile App" 
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white mb-2">App Móvil Fitness</h3>
                            <p class="text-gray-200 mb-4">Aplicación móvil para seguimiento de rutinas de ejercicio y nutrición</p>
                            <a href="#" class="inline-block px-6 py-2 bg-[#f4bc21] text-[#701516] rounded-full font-semibold hover:bg-[#f4bc21]/90 transition-colors">
                                Ver Proyecto
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 5 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3" 
                         alt="Corporate Website" 
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white mb-2">Portal Corporativo</h3>
                            <p class="text-gray-200 mb-4">Sitio web corporativo con integración de intranet y sistema de gestión</p>
                            <a href="#" class="inline-block px-6 py-2 bg-[#f4bc21] text-[#701516] rounded-full font-semibold hover:bg-[#f4bc21]/90 transition-colors">
                                Ver Proyecto
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 6 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?ixlib=rb-4.0.3" 
                         alt="SEO Campaign" 
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white mb-2">Optimización SEO</h3>
                            <p class="text-gray-200 mb-4">Estrategia SEO que incrementó el tráfico orgánico en un 300%</p>
                            <a href="#" class="inline-block px-6 py-2 bg-[#f4bc21] text-[#701516] rounded-full font-semibold hover:bg-[#f4bc21]/90 transition-colors">
                                Ver Proyecto
                            </a>
                        </div>
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
                    ¿Listo para crear tu próximo proyecto?
                </h2>
                <p class="text-xl mb-12" data-aos="fade-up" data-aos-delay="100">
                    Permítenos ayudarte a llevar tu visión al siguiente nivel
                </p>
                <a href="/contacto" class="inline-block bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold py-4 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    Iniciar Proyecto
                </a>
            </div>
        </div>
    </section>
@endsection
