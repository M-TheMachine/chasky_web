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
                    {{ __('portfolio.hero.title') }}
                </h1>
                <p class="text-xl text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ __('portfolio.hero.subtitle') }}
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
                    {{ __('portfolio.project_types.all') }}
                </button>
                <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-[#701516] hover:text-white transition-colors">
                    {{ __('portfolio.project_types.web') }}
                </button>
                <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-[#701516] hover:text-white transition-colors">
                    {{ __('portfolio.project_types.marketing') }}
                </button>
                <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-[#701516] hover:text-white transition-colors">
                    {{ __('portfolio.project_types.design') }}
                </button>
            </div>
        </div>
    </section>

    <!-- Proyectos Grid -->
    <section class="py-24 bg-gray-50 mb-24">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Proyecto 1: KOKO E-commerce -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1615719413546-198b25453f85?ixlib=rb-4.0.3" 
                         alt="{{ __('portfolio.projects.ecommerce.title') }}" 
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white mb-2">{{ __('portfolio.projects.ecommerce.title') }}</h3>
                            <p class="text-gray-200 mb-4">{{ __('portfolio.projects.ecommerce.description') }}</p>
                            <a href="/portafolio/koko" class="inline-block px-6 py-2 bg-[#f4bc21] text-[#701516] rounded-full font-semibold hover:bg-[#f4bc21]/90 transition-colors">
                                {{ __('portfolio.detail.view_project') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 2: Mujeres al Volante -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1593526421301-b909ba2a1979?ixlib=rb-4.0.3" 
                         alt="{{ __('portfolio.projects.mujeres_al_volante.title') }}" 
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white mb-2">{{ __('portfolio.projects.mujeres_al_volante.title') }}</h3>
                            <p class="text-gray-200 mb-4">{{ __('portfolio.projects.mujeres_al_volante.description') }}</p>
                            <a href="/portafolio/mujeres-al-volante" class="inline-block px-6 py-2 bg-[#f4bc21] text-[#701516] rounded-full font-semibold hover:bg-[#f4bc21]/90 transition-colors">
                                {{ __('portfolio.detail.view_project') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 3: Galeno Quiz Médico -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-4.0.3" 
                         alt="{{ __('portfolio.projects.galeno.title') }}" 
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white mb-2">{{ __('portfolio.projects.galeno.title') }}</h3>
                            <p class="text-gray-200 mb-4">{{ __('portfolio.projects.galeno.description') }}</p>
                            <a href="/portafolio/galeno" class="inline-block px-6 py-2 bg-[#f4bc21] text-[#701516] rounded-full font-semibold hover:bg-[#f4bc21]/90 transition-colors">
                                {{ __('portfolio.detail.view_project') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 4: E-commerce Innovation (proyecto existente) -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3" 
                         alt="E-commerce Innovation" 
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white mb-2">E-commerce Innovation</h3>
                            <p class="text-gray-200 mb-4">{{ __('Transformamos la experiencia de compra online con tecnología de punta.') }}</p>
                            <a href="#" class="inline-block px-6 py-2 bg-[#f4bc21] text-[#701516] rounded-full font-semibold hover:bg-[#f4bc21]/90 transition-colors">
                                {{ __('portfolio.detail.view_project') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 5: HealthTech App (proyecto existente) -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3" 
                         alt="{{ __('portfolio.projects.health.title') }}" 
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white mb-2">{{ __('portfolio.projects.health.title') }}</h3>
                            <p class="text-gray-200 mb-4">{{ __('portfolio.projects.health.description') }}</p>
                            <a href="#" class="inline-block px-6 py-2 bg-[#f4bc21] text-[#701516] rounded-full font-semibold hover:bg-[#f4bc21]/90 transition-colors">
                                {{ __('portfolio.detail.view_project') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 6: Business Intelligence (proyecto existente) -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3" 
                         alt="{{ __('portfolio.projects.analytics.title') }}" 
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white mb-2">{{ __('portfolio.projects.analytics.title') }}</h3>
                            <p class="text-gray-200 mb-4">{{ __('portfolio.projects.analytics.description') }}</p>
                            <a href="#" class="inline-block px-6 py-2 bg-[#f4bc21] text-[#701516] rounded-full font-semibold hover:bg-[#f4bc21]/90 transition-colors">
                                {{ __('portfolio.detail.view_project') }}
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
                    {{ __('portfolio.cta.title') }}
                </h2>
                <p class="text-xl mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ __('portfolio.cta.subtitle') }}
                </p>
                <a href="/contacto" class="inline-block bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold py-4 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    {{ __('portfolio.cta.button') }}
                </a>
            </div>
        </div>
    </section>
@endsection
