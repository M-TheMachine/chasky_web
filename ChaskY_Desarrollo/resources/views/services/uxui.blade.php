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
                    Diseño UX/UI
                </h1>
                <p class="text-xl text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
                    Creamos experiencias digitales intuitivas y atractivas que conectan con tus usuarios
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
                    <p class="text-gray-600 text-lg">Soluciones completas de diseño de experiencia de usuario</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Investigación UX -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Investigación UX</h3>
                        </div>
                        <p class="text-gray-600">Análisis profundo de usuarios, competencia y tendencias para crear productos centrados en el usuario.</p>
                    </div>

                    <!-- Diseño UI -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Diseño UI</h3>
                        </div>
                        <p class="text-gray-600">Interfaces atractivas y modernas que reflejan la identidad de tu marca y mejoran la experiencia del usuario.</p>
                    </div>

                    <!-- Prototipado -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Prototipado</h3>
                        </div>
                        <p class="text-gray-600">Prototipos interactivos que permiten validar ideas y mejorar la experiencia antes del desarrollo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tecnologías -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">Herramientas</h2>
                    <p class="text-gray-600 text-lg">Utilizamos las mejores herramientas de diseño</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <!-- Design -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <h4 class="font-bold text-[#701516] mb-4">Design</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>Figma</li>
                            <li>Adobe XD</li>
                            <li>Sketch</li>
                            <li>Illustrator</li>
                        </ul>
                    </div>

                    <!-- Prototyping -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="font-bold text-[#701516] mb-4">Prototyping</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>InVision</li>
                            <li>Principle</li>
                            <li>ProtoPie</li>
                            <li>Marvel</li>
                        </ul>
                    </div>

                    <!-- Research -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <h4 class="font-bold text-[#701516] mb-4">Research</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>Hotjar</li>
                            <li>UserTesting</li>
                            <li>Maze</li>
                            <li>Optimal Workshop</li>
                        </ul>
                    </div>

                    <!-- Collaboration -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="300">
                        <h4 class="font-bold text-[#701516] mb-4">Collaboration</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>Zeplin</li>
                            <li>Abstract</li>
                            <li>Miro</li>
                            <li>Notion</li>
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
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">¿Listo para mejorar tu producto?</h2>
                    <p class="text-gray-600 text-lg">Cuéntanos sobre tu proyecto de diseño</p>
                </div>

                <form action="{{ route('uxui.contact') }}" method="POST" class="space-y-8" data-aos="fade-up">
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
                                <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Empresa (opcional)</label>
                                <input type="text" name="company" id="company"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                            </div>

                            <div>
                                <label for="project_type" class="block text-sm font-medium text-gray-700 mb-1">Tipo de Proyecto</label>
                                <select name="project_type" id="project_type" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                                    <option value="">Selecciona una opción</option>
                                    <option value="web">Sitio Web</option>
                                    <option value="app">Aplicación Móvil</option>
                                    <option value="saas">Producto SaaS</option>
                                    <option value="ecommerce">E-commerce</option>
                                    <option value="other">Otro</option>
                                </select>
                            </div>

                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Describe tu proyecto</label>
                                <textarea name="description" id="description" rows="4" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]"></textarea>
                            </div>

                            <div>
                                <label for="timeline" class="block text-sm font-medium text-gray-700 mb-1">¿Cuándo necesitas comenzar?</label>
                                <input type="text" name="timeline" id="timeline" required
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]"
                                       placeholder="Ej: En 2 semanas, el próximo mes, etc.">
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
