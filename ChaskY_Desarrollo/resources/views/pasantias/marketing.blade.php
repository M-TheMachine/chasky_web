@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-24 mt-16">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold text-[#701516] mb-8">Postulación para Pasantía en Marketing Digital</h1>
            
            <form action="{{ route('pasantias.marketing.submit') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre completo</label>
                        <input type="text" name="nombre" id="nombre" required
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#701516] focus:border-[#701516]">
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
                        <input type="email" name="email" id="email" required
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#701516] focus:border-[#701516]">
                    </div>
                    
                    <div>
                        <label for="telefono" class="block text-sm font-medium text-gray-700 mb-1">Teléfono</label>
                        <input type="tel" name="telefono" id="telefono" required
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#701516] focus:border-[#701516]">
                    </div>
                    
                    <div>
                        <label for="universidad" class="block text-sm font-medium text-gray-700 mb-1">Universidad</label>
                        <input type="text" name="universidad" id="universidad" required
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#701516] focus:border-[#701516]">
                    </div>
                    
                    <div>
                        <label for="carrera" class="block text-sm font-medium text-gray-700 mb-1">Carrera</label>
                        <input type="text" name="carrera" id="carrera" required
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#701516] focus:border-[#701516]">
                    </div>
                    
                    <div>
                        <label for="semestre" class="block text-sm font-medium text-gray-700 mb-1">Semestre actual</label>
                        <input type="text" name="semestre" id="semestre" required
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#701516] focus:border-[#701516]">
                    </div>
                </div>

                <div>
                    <label for="experiencia" class="block text-sm font-medium text-gray-700 mb-1">¿Tienes experiencia en redes sociales o marketing digital?</label>
                    <textarea name="experiencia" id="experiencia" rows="4" required
                              class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#701516] focus:border-[#701516]"></textarea>
                </div>

                <div>
                    <label for="mensaje" class="block text-sm font-medium text-gray-700 mb-1">¿Por qué te interesa esta pasantía?</label>
                    <textarea name="mensaje" id="mensaje" rows="4" required
                              class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#701516] focus:border-[#701516]"></textarea>
                </div>

                <div>
                    <label for="portafolio" class="block text-sm font-medium text-gray-700 mb-1">Portafolio o ejemplos de trabajo (opcional)</label>
                    <input type="text" name="portafolio" id="portafolio" placeholder="Enlaces a trabajos previos o redes sociales"
                           class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#701516] focus:border-[#701516]">
                </div>

                <div>
                    <label for="cv" class="block text-sm font-medium text-gray-700 mb-1">Adjunta tu CV (PDF)</label>
                    <input type="file" name="cv" id="cv" accept=".pdf" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#701516] focus:border-[#701516]">
                </div>

                <div>
                    <button type="submit" 
                            class="inline-flex items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-[#701516] hover:bg-[#701516]/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#701516]">
                        Enviar postulación
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
