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
                    Nearshoring de TI
                </h1>
                <p class="text-xl text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
                    Amplía tu capacidad de desarrollo con talento de América Latina
                </p>
            </div>
        </div>
    </section>

    <!-- Beneficios -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">Ventajas del Nearshoring</h2>
                    <p class="text-gray-600 text-lg">Optimiza tu desarrollo con las ventajas de la proximidad geográfica</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Zona Horaria -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Zona Horaria Similar</h3>
                        </div>
                        <p class="text-gray-600">Colaboración en tiempo real y mejor comunicación con tu equipo.</p>
                    </div>

                    <!-- Proximidad Cultural -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Proximidad Cultural</h3>
                        </div>
                        <p class="text-gray-600">Mayor afinidad cultural y métodos de trabajo similares.</p>
                    </div>

                    <!-- Talento Calificado -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Talento Calificado</h3>
                        </div>
                        <p class="text-gray-600">Profesionales altamente capacitados con experiencia internacional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">Nuestros Servicios</h2>
                    <p class="text-gray-600 text-lg">Soluciones completas de nearshoring</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Desarrollo de Software -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <h4 class="font-bold text-[#701516] text-xl mb-4">Desarrollo de Software</h4>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Desarrollo web full-stack
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Desarrollo de aplicaciones móviles
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Arquitectura de software
                            </li>
                        </ul>
                    </div>

                    <!-- Servicios Cloud -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="font-bold text-[#701516] text-xl mb-4">Servicios Cloud</h4>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                DevOps y CI/CD
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Infraestructura como código
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Monitoreo y optimización
                            </li>
                        </ul>
                    </div>

                    <!-- Gestión de Datos -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <h4 class="font-bold text-[#701516] text-xl mb-4">Gestión de Datos</h4>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Arquitectura de bases de datos
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Business Intelligence
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Data Analytics
                            </li>
                        </ul>
                    </div>

                    <!-- Seguridad -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="300">
                        <h4 class="font-bold text-[#701516] text-xl mb-4">Seguridad</h4>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Auditorías de seguridad
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Implementación de protocolos
                            </li>
                            <li class="flex items-center text-gray-600">
                                <svg class="w-5 h-5 text-[#701516] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Pruebas de penetración
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario de Contacto -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">¿Listo para comenzar?</h2>
                    <p class="text-gray-600 text-lg">Cuéntanos sobre tus necesidades de nearshoring</p>
                </div>

                <form action="{{ route('nearshoring.contact') }}" method="POST" class="space-y-8" data-aos="fade-up">
                    @csrf
                    <div class="bg-white rounded-xl p-8 shadow-lg">
                        <div class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                                <input type="text" name="name" id="name" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" name="email" id="email" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                            </div>

                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Empresa</label>
                                <input type="text" name="company" id="company" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                            </div>

                            <div>
                                <label for="team_size" class="block text-sm font-medium text-gray-700 mb-1">Tamaño del Equipo Necesario</label>
                                <select name="team_size" id="team_size" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                                    <option value="">Selecciona una opción</option>
                                    <option value="1-2">1-2 desarrolladores</option>
                                    <option value="3-5">3-5 desarrolladores</option>
                                    <option value="6-10">6-10 desarrolladores</option>
                                    <option value="10+">Más de 10 desarrolladores</option>
                                </select>
                            </div>

                            <div>
                                <label for="skills_needed" class="block text-sm font-medium text-gray-700 mb-1">Habilidades Requeridas</label>
                                <textarea name="skills_needed" id="skills_needed" rows="4" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]"
                                          placeholder="Describe las tecnologías y habilidades que necesitas"></textarea>
                            </div>

                            <div>
                                <label for="project_duration" class="block text-sm font-medium text-gray-700 mb-1">Duración Estimada del Proyecto</label>
                                <select name="project_duration" id="project_duration" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                                    <option value="">Selecciona una opción</option>
                                    <option value="3-6">3-6 meses</option>
                                    <option value="6-12">6-12 meses</option>
                                    <option value="12+">Más de 12 meses</option>
                                    <option value="ongoing">Proyecto continuo</option>
                                </select>
                            </div>

                            <div>
                                <label for="start_date" class="block text-sm font-medium text-gray-700 mb-1">Fecha de Inicio Deseada</label>
                                <input type="text" name="start_date" id="start_date" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]"
                                       placeholder="Ej: Lo antes posible, en 2 meses, etc.">
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
