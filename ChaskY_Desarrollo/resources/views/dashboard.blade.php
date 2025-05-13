@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            @if($seller)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        @if(isset($error))
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                                <strong class="font-bold">Error:</strong>
                                <span class="block sm:inline">{{ $error }}</span>
                            </div>
                        @endif
                        
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-lg font-semibold">{{ __('Tu Tarjeta de Negocio') }}</h2>
                            <a href="{{ route('sellers.edit', $seller->slug) }}" 
                               class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600">
                                {{ __('Editar Tarjeta') }}
                            </a>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-3">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">{{ __('Nombre') }}</label>
                                    <p class="mt-1">{{ $seller->name }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">{{ __('Cargo') }}</label>
                                    <p class="mt-1">{{ $seller->position }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                                    <p class="mt-1">{{ $seller->email }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">{{ __('Teléfono') }}</label>
                                    <p class="mt-1">{{ $seller->phone ?: 'No especificado' }}</p>
                                </div>
                            </div>
                            
                            <div class="space-y-3">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">{{ __('Empresa') }}</label>
                                    <p class="mt-1">{{ $seller->company ?: 'No especificada' }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">{{ __('Dirección') }}</label>
                                    <p class="mt-1">{{ $seller->address ?: 'No especificada' }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">{{ __('Sitio Web') }}</label>
                                    <p class="mt-1">{{ $seller->website ?: 'No especificado' }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">{{ __('WhatsApp') }}</label>
                                    <p class="mt-1">{{ $seller->whatsapp ?: 'No especificado' }}</p>
                                </div>
                            </div>
                        </div>

                        @if($seller->bio)
                            <div class="mt-6">
                                <label class="block text-sm font-medium text-gray-700">{{ __('Biografía') }}</label>
                                <p class="mt-1">{{ $seller->bio }}</p>
                            </div>
                        @endif

                        <div class="mt-6">
                            <a href="{{ route('sellers.show', $seller->slug) }}" 
                               class="text-blue-600 hover:text-blue-800" 
                               target="_blank">
                                {{ __('Ver Tarjeta Pública') }} →
                            </a>
                        </div>
                    </div>
                </div>
            @else
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <p>{{ __('No se encontró tu tarjeta de negocio. Por favor, contacta al administrador.') }}</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
