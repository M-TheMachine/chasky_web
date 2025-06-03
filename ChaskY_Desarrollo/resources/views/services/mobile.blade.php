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
                    Desarrollo de Aplicaciones Móviles
                </h1>
                <p class="text-xl text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
                    Creamos aplicaciones móviles innovadoras que transforman tu visión en realidad
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
                    <p class="text-gray-600 text-lg">Desarrollo móvil integral para todas las plataformas</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Apps iOS -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Apps iOS</h3>
                        </div>
                        <p class="text-gray-600">Desarrollo de aplicaciones nativas para iPhone y iPad con las últimas tecnologías de Apple.</p>
                    </div>

                    <!-- Apps Android -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Apps Android</h3>
                        </div>
                        <p class="text-gray-600">Aplicaciones Android optimizadas para la amplia gama de dispositivos del mercado.</p>
                    </div>

                    <!-- Apps Multiplataforma -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#701516] rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold">Apps Multiplataforma</h3>
                        </div>
                        <p class="text-gray-600">Desarrollo híbrido con Flutter y React Native para maximizar tu alcance.</p>
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
                    <p class="text-gray-600 text-lg">Utilizamos las mejores tecnologías móviles</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <!-- iOS -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up">
                        <h4 class="font-bold text-[#701516] mb-4">iOS</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>Swift</li>
                            <li>SwiftUI</li>
                            <li>UIKit</li>
                            <li>Xcode</li>
                        </ul>
                    </div>

                    <!-- Android -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="font-bold text-[#701516] mb-4">Android</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>Kotlin</li>
                            <li>Java</li>
                            <li>Android Studio</li>
                            <li>Jetpack</li>
                        </ul>
                    </div>

                    <!-- Multiplataforma -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <h4 class="font-bold text-[#701516] mb-4">Multiplataforma</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>Flutter</li>
                            <li>React Native</li>
                            <li>Dart</li>
                            <li>JavaScript</li>
                        </ul>
                    </div>

                    <!-- Backend -->
                    <div class="bg-white rounded-xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="300">
                        <h4 class="font-bold text-[#701516] mb-4">Backend</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li>Firebase</li>
                            <li>REST APIs</li>
                            <li>GraphQL</li>
                            <li>Node.js</li>
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
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">¿Listo para crear tu app?</h2>
                    <p class="text-gray-600 text-lg">Cuéntanos sobre tu proyecto móvil</p>
                </div>

                <form action="{{ route('mobile.contact') }}" method="POST" class="space-y-8" data-aos="fade-up">
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
                                <label for="platform" class="block text-sm font-medium text-gray-700 mb-1">Plataforma</label>
                                <select name="platform" id="platform" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                                    <option value="">Selecciona una opción</option>
                                    <option value="ios">iOS</option>
                                    <option value="android">Android</option>
                                    <option value="both">Ambas plataformas</option>
                                    <option value="not_sure">No estoy seguro</option>
                                </select>
                            </div>

                            <div>
                                <label for="app_type" class="block text-sm font-medium text-gray-700 mb-1">Tipo de App</label>
                                <select name="app_type" id="app_type" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                                    <option value="">Selecciona una opción</option>
                                    <option value="business">App de Negocios</option>
                                    <option value="ecommerce">E-commerce</option>
                                    <option value="social">Red Social</option>
                                    <option value="game">Juego</option>
                                    <option value="other">Otro</option>
                                </select>
                            </div>

                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Describe tu app</label>
                                <textarea name="description" id="description" rows="4" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]"></textarea>
                            </div>

                            <div>
                                <label for="budget" class="block text-sm font-medium text-gray-700 mb-1">Presupuesto Estimado</label>
                                <select name="budget" id="budget" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#701516] focus:border-[#701516]">
                                    <option value="">Selecciona una opción</option>
                                    <option value="less_10k">Menos de $10,000</option>
                                    <option value="10k_20k">$10,000 - $20,000</option>
                                    <option value="20k_50k">$20,000 - $50,000</option>
                                    <option value="more_50k">Más de $50,000</option>
                                </select>
                            </div>

                            <div>
                                <label for="timeline" class="block text-sm font-medium text-gray-700 mb-1">¿Cuándo te gustaría comenzar?</label>
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
