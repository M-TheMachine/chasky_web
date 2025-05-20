@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-[#701516] to-[#c40606] text-white min-h-[60vh] flex items-center mt-16">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="container mx-auto px-4 py-24 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-8 tracking-tight" data-aos="fade-up">
                    {{ __('contact.hero.title') }}
                </h1>
                <p class="text-xl md:text-2xl text-gray-100 mb-12 leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                    {{ __('contact.hero.subtitle') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Información de Contacto y Formulario -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Información de Contacto -->
                <div class="space-y-8" data-aos="fade-right">
                    <div>
                        <h2 class="text-3xl font-bold mb-6 gradient-text">{{ __('contact.info.title') }}</h2>
                        <p class="text-gray-600 mb-8">
                            {{ __('contact.info.description') }}</p>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="bg-[#701516] rounded-full p-3">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg text-gray-800">{{ __('contact.info.contact.phone_title') }}</h3>
                                <p class="text-gray-600">{{ __('contact.info.contact.phone') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-[#701516] rounded-full p-3">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg text-gray-800">{{ __('contact.info.contact.email_title') }}</h3>
                                <p class="text-gray-600">{{ __('contact.info.contact.email') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-[#701516] rounded-full p-3">
                                <svg class="w-6 h-6 text-[#f4bc21]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg text-gray-800">{{ __('contact.info.location.title') }}</h3>
                                <p class="text-gray-600">{!! __('contact.info.location.address') !!}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Redes Sociales -->
                    <div class="pt-8">
                        <h3 class="font-semibold text-lg text-gray-800 mb-4">{{ __('contact.info.social.title') }}</h3>
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/chaskyMyD" target="_blank" rel="noopener noreferrer" class="bg-[#701516] text-[#f4bc21] p-3 rounded-full hover:bg-[#c40606] transition duration-300">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="https://www.tiktok.com/@chaskymkt?lang=es-419" target="_blank" rel="noopener noreferrer" class="bg-[#701516] text-[#f4bc21] p-3 rounded-full hover:bg-[#c40606] transition duration-300">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1Z"/>
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/company/chasky-marketing-y-dise%C3%B1o/" target="_blank" rel="noopener noreferrer" class="bg-[#701516] text-[#f4bc21] p-3 rounded-full hover:bg-[#c40606] transition duration-300">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Formulario de Contacto -->
                <div class="bg-white rounded-2xl shadow-2xl p-8" data-aos="fade-left">
                    @if(session('success'))
                        <x-alert type="success" :message="session('success')" />
                    @endif
                    
                    @if(session('error'))
                        <x-alert type="error" :message="session('error')" />
                    @endif
                    
                    @if($errors->any())
                        <x-alert type="error" :message="'Por favor, corrija los errores en el formulario.'" />
                    @endif
                    
                    <form action="/contacto" method="post" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="nombre">{{ __('contact.form.name') }}</label>
                            <input type="text" id="nombre" name="nombre" required
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 border @error('nombre') border-red-500 @else border-gray-300 @enderror focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition duration-300"
                                placeholder="{{ __('contact.form.name') }}" value="{{ old('nombre') }}">
                            @error('nombre')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="email">{{ __('contact.form.email') }}</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 border @error('email') border-red-500 @else border-gray-300 @enderror focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition duration-300"
                                placeholder="tu@email.com" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="telefono">{{ __('contact.form.phone') }}</label>
                            <input type="tel" id="telefono" name="telefono" required
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 border {{ $errors->has('telefono') ? 'border-red-500' : 'border-gray-300' }} focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition duration-300"
                                placeholder="+591 " value="{{ old('telefono') }}">
                            @error('telefono')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="servicio">{{ __('contact.form.service') }}</label>
                            <select id="servicio" name="servicio" required
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 border {{ $errors->has('servicio') ? 'border-red-500' : 'border-gray-300' }} focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition duration-300">
                                <option value="">{{ __('contact.form.select_service') }}</option>
                                <option value="web" {{ old('servicio') == 'web' ? 'selected' : '' }}>{{ __('contact.form.web') }}</option>
                                <option value="marketing" {{ old('servicio') == 'marketing' ? 'selected' : '' }}>{{ __('contact.form.marketing') }}</option>
                                <option value="ux" {{ old('servicio') == 'ux' ? 'selected' : '' }}>{{ __('contact.form.ux') }}</option>
                                <option value="offshoring" {{ old('servicio') == 'offshoring' ? 'selected' : '' }}>{{ __('contact.form.offshoring') }}</option>
                                <option value="nearshoring" {{ old('servicio') == 'nearshoring' ? 'selected' : '' }}>{{ __('contact.form.nearshoring') }}</option>
                                <option value="otro" {{ old('servicio') == 'otro' ? 'selected' : '' }}>{{ __('contact.form.other') }}</option>
                            </select>
                            @error('servicio')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2" for="mensaje">{{ __('contact.form.message') }}</label>
                            <textarea id="mensaje" name="mensaje" rows="4" required
                                class="w-full px-4 py-3 rounded-lg bg-gray-50 border {{ $errors->has('mensaje') ? 'border-red-500' : 'border-gray-300' }} focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition duration-300"
                                placeholder="{{ __('contact.form.message_placeholder') }}">{{ old('mensaje') }}</textarea>
                            @error('mensaje')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>                            <button type="submit"
                                class="w-full bg-[#701516] hover:bg-[#c40606] text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-105">
                                {{ __('contact.form.submit') }}
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Mapa -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 gradient-text">{{ __('contact.map.title') }}</h2>
                <p class="text-gray-600 text-lg">{{ __('contact.map.subtitle') }}</p>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-2xl" data-aos="zoom-in">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.5386570032453!2d-66.15801492487083!3d-17.38389106831447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e3740f0c7c1e67%3A0x4c3a7b5e23b6c7d9!2sCalle%20Salamanca%20%26%20Antezana%2C%20Cochabamba!5e0!3m2!1ses!2sbo!4v1709847989727!5m2!1ses!2sbo" 
                    width="100%" 
                    height="500" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section>
@endsection
