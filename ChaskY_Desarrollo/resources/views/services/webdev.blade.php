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
                    Desarrollo Web Profesional
                </h1>
                <p class="text-xl text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
                    Soluciones web personalizadas que impulsan tu negocio al siguiente nivel
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
                    <p class="text-gray-600 text-lg">Desarrollo web integral para todas tus necesidades</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Sitios Web -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Sitios Web</h3>
                        </div>
                        <p class="text-gray-600">Diseñamos y desarrollamos sitios web modernos, responsivos y optimizados para buscadores.</p>
                    </div>

                    <!-- E-commerce -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">E-commerce</h3>
                        </div>
                        <p class="text-gray-600">Plataformas de comercio electrónico escalables con gestión de inventario y pagos en línea.</p>
                    </div>

                    <!-- Aplicaciones Web -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Aplicaciones Web</h3>
                        </div>
                        <p class="text-gray-600">Desarrollo de aplicaciones web personalizadas con las últimas tecnologías.</p>
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
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">Tecnologías</h2>
                    <p class="text-gray-600 text-lg">Utilizamos las mejores tecnologías para crear soluciones robustas</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <!-- Frontend -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <h4 class="font-bold text-[#701516] mb-4">Frontend</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>React</li>
                            <li>Vue.js</li>
                            <li>Angular</li>
                            <li>TailwindCSS</li>
                        </ul>
                    </div>

                    <!-- Backend -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="font-bold text-[#701516] mb-4">Backend</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>Laravel</li>
                            <li>Node.js</li>
                            <li>Python</li>
                            <li>PHP</li>
                        </ul>
                    </div>

                    <!-- Bases de Datos -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <h4 class="font-bold text-[#701516] mb-4">Bases de Datos</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>MySQL</li>
                            <li>PostgreSQL</li>
                            <li>MongoDB</li>
                            <li>Redis</li>
                        </ul>
                    </div>

                    <!-- DevOps -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="300">
                        <h4 class="font-bold text-[#701516] mb-4">DevOps</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>Docker</li>
                            <li>AWS</li>
                            <li>GitHub</li>
                            <li>CI/CD</li>
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
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">¿Listo para empezar tu proyecto?</h2>
                    <p class="text-gray-600 text-lg">Cuéntanos sobre tu proyecto y te ayudaremos a hacerlo realidad</p>
                </div>

                <form action="{{ route('webdev.contact') }}" method="POST" class="space-y-8" data-aos="fade-up">
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
                                <label for="project_type" class="block text-sm font-medium text-gray-700 mb-1">Tipo de Proyecto</label>
                                <select name="project_type" id="project_type" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                                    <option value="">Selecciona una opción</option>
                                    <option value="website">Sitio Web</option>
                                    <option value="ecommerce">E-commerce</option>
                                    <option value="webapp">Aplicación Web</option>
                                    <option value="other">Otro</option>
                                </select>
                            </div>

                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Describe tu proyecto</label>
                                <textarea name="description" id="description" rows="4" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]"></textarea>
                            </div>

                            <div>
                                <label for="budget" class="block text-sm font-medium text-gray-700 mb-1">Presupuesto Estimado</label>
                                <select name="budget" id="budget" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                                    <option value="">Selecciona una opción</option>
                                    <option value="less_5k">Menos de $5,000</option>
                                    <option value="5k_10k">$5,000 - $10,000</option>
                                    <option value="10k_20k">$10,000 - $20,000</option>
                                    <option value="more_20k">Más de $20,000</option>
                                </select>
                            </div>

                            <div>
                                <label for="timeline" class="block text-sm font-medium text-gray-700 mb-1">Fecha estimada de inicio</label>
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
