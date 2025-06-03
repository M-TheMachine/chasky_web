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
                    Offshoring de TI
                </h1>
                <p class="text-xl text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
                    Expande tu equipo con talento tecnológico de primer nivel a costos competitivos
                </p>
            </div>
        </div>
    </section>

    <!-- Beneficios -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">¿Por qué elegir Offshoring?</h2>
                    <p class="text-gray-600 text-lg">Maximiza tu inversión en desarrollo de software</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Reducción de Costos -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Reducción de Costos</h3>
                        </div>
                        <p class="text-gray-600">Optimiza tus costos operativos manteniendo la calidad del desarrollo.</p>
                    </div>

                    <!-- Equipo Especializado -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Equipo Especializado</h3>
                        </div>
                        <p class="text-gray-600">Accede a profesionales altamente calificados en diversas tecnologías.</p>
                    </div>

                    <!-- Escalabilidad -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Escalabilidad</h3>
                        </div>
                        <p class="text-gray-600">Escala tu equipo rápidamente según las necesidades de tu proyecto.</p>
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
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">Especialidades</h2>
                    <p class="text-gray-600 text-lg">Talento especializado en diversas áreas</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <!-- Frontend -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <h4 class="font-bold text-[#701516] mb-4">Frontend</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>React</li>
                            <li>Vue.js</li>
                            <li>Angular</li>
                            <li>Next.js</li>
                        </ul>
                    </div>

                    <!-- Backend -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="font-bold text-[#701516] mb-4">Backend</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>Node.js</li>
                            <li>Python</li>
                            <li>Java</li>
                            <li>PHP</li>
                        </ul>
                    </div>

                    <!-- Mobile -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <h4 class="font-bold text-[#701516] mb-4">Mobile</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>Flutter</li>
                            <li>React Native</li>
                            <li>iOS (Swift)</li>
                            <li>Android (Kotlin)</li>
                        </ul>
                    </div>

                    <!-- DevOps -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="300">
                        <h4 class="font-bold text-[#701516] mb-4">DevOps</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>AWS</li>
                            <li>Docker</li>
                            <li>Kubernetes</li>
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
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">¿Listo para expandir tu equipo?</h2>
                    <p class="text-gray-600 text-lg">Cuéntanos sobre tus necesidades</p>
                </div>

                <form action="{{ route('offshoring.contact') }}" method="POST" class="space-y-8" data-aos="fade-up">
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
