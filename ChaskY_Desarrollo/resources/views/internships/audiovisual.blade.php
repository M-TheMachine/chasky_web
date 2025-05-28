@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-[#701516] to-[#c40606] text-white min-h-[60vh] flex items-center mt-16">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="container mx-auto px-4 py-24 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-8 tracking-tight" data-aos="fade-up">
                    {{ __('careers.positions.internship.audiovisual.title') }}
                </h1>
                <p class="text-xl md:text-2xl text-gray-100 mb-6 leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                    {{ __('careers.positions.internship.audiovisual.location') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Descripción del Programa -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <h2 class="text-3xl font-bold text-[#701516] mb-6">{{ __('internships.about_program') }}</h2>
                    <p class="text-gray-700 mb-8 text-lg">{{ __('careers.positions.internship.audiovisual.description') }}</p>
                    
                    <div class="space-y-8">
                        <div>
                            <h3 class="text-xl font-semibold mb-4">{{ __('careers.positions.requirements') }}</h3>
                            <ul class="list-disc list-inside text-gray-600 space-y-3">
                                @foreach(trans('careers.positions.internship.audiovisual.requirements') as $requirement)
                                    <li class="flex items-start">
                                        <span class="text-[#701516] mr-2">•</span>
                                        <span>{{ $requirement }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-xl font-semibold mb-4">{{ __('careers.positions.offer') }}</h3>
                            <ul class="list-disc list-inside text-gray-600 space-y-3">
                                @foreach(trans('careers.positions.internship.audiovisual.offer') as $offer)
                                    <li class="flex items-start">
                                        <span class="text-[#701516] mr-2">•</span>
                                        <span>{{ $offer }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario de Postulación -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <h2 class="text-3xl font-bold text-[#701516] mb-6">{{ __('internships.apply_now') }}</h2>
                    <p class="text-gray-600 mb-8">{{ __('internships.audiovisual.form_description') }}</p>

                    <form action="{{ route('internships.audiovisual.apply') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="name">{{ __('internships.form.name') }}</label>
                                <input type="text" name="name" id="name" required
                                    class="w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#701516] focus:ring-[#701516]">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="email">{{ __('internships.form.email') }}</label>
                                <input type="email" name="email" id="email" required
                                    class="w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#701516] focus:ring-[#701516]">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="phone">{{ __('internships.form.phone') }}</label>
                                <input type="tel" name="phone" id="phone" required
                                    class="w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#701516] focus:ring-[#701516]">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="university">{{ __('internships.form.university') }}</label>
                                <input type="text" name="university" id="university" required
                                    class="w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#701516] focus:ring-[#701516]">
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="why_apply">{{ __('internships.form.why_apply') }}</label>
                            <textarea name="why_apply" id="why_apply" rows="4" required
                                class="w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#701516] focus:ring-[#701516]"></textarea>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="portfolio">{{ __('internships.form.portfolio_url') }}</label>
                            <input type="url" name="portfolio" id="portfolio"
                                class="w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#701516] focus:ring-[#701516]"
                                placeholder="{{ __('internships.form.portfolio_url_placeholder') }}">
                            <p class="text-sm text-gray-500 mt-1 italic">Sabemos que estás empezando tu carrera. El portafolio no es un requisito para postular.</p>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="demo_reel">{{ __('internships.form.demo_reel') }}</label>
                            <input type="url" name="demo_reel" id="demo_reel"
                                class="w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#701516] focus:ring-[#701516]"
                                placeholder="{{ __('internships.form.demo_reel_placeholder') }}">
                            <p class="text-sm text-gray-500 mt-1 italic">Entendemos que estás en proceso de aprendizaje. El demo reel no es un requisito para postular.</p>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="cv">{{ __('internships.form.cv') }}</label>
                            <input type="file" name="cv" id="cv" required accept=".pdf,.doc,.docx"
                                class="w-full px-4 py-3 rounded-lg border-gray-300 focus:border-[#701516] focus:ring-[#701516]">
                            <p class="text-sm text-gray-500 mt-1">{{ __('internships.form.cv_requirements') }}</p>
                        </div>

                        <div class="mt-8">
                            <button type="submit" 
                                class="w-full bg-[#701516] hover:bg-[#701516]/90 text-white font-bold py-4 px-8 rounded-full transition duration-300">
                                {{ __('internships.form.submit') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
