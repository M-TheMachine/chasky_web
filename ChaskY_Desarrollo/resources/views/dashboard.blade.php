@extends('layouts.app')

@section('header')
    <h2 class="font-bold text-2xl text-[#701516]">
        {{ __('Mi Panel') }}
    </h2>
@endsection

@section('content')
<div class="relative min-h-[calc(100vh-16rem)] bg-gradient-to-br from-[#701516] to-[#c40606] text-white">
    <div class="absolute inset-0 bg-black bg-opacity-30"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        @if(isset($error))
            <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-xl relative mb-6">
                <strong class="font-bold">Error:</strong>
                <span class="block sm:inline ml-2">{{ $error }}</span>
            </div>
        @endif

        @if($sellers->isNotEmpty())
            <div class="grid grid-cols-1 gap-8">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/20 overflow-hidden">
                    <div class="p-8">
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6 mb-8">
                            <div>
                                <h2 class="text-2xl font-bold text-[#701516]">{{ __('Tus Tarjetas de Negocio') }}</h2>
                                <p class="text-gray-600 mt-1">{{ $sellers->count() }} {{ $sellers->count() == 1 ? 'tarjeta creada' : 'tarjetas creadas' }}</p>
                            </div>
                            <a href="{{ route('sellers.create') }}" 
                               class="inline-flex items-center px-6 py-3 bg-[#f4bc21] border border-transparent rounded-xl font-bold text-base text-[#701516] hover:bg-[#f4bc21]/90 transition-all duration-200 transform hover:scale-[1.02] shadow-lg">
                                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                                {{ __('Crear Nueva Tarjeta') }}
                            </a>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($sellers as $seller)
                                <div class="bg-white/50 rounded-xl border border-[#701516]/10 overflow-hidden shadow-md hover:shadow-xl transition-all duration-300">
                                    <div class="relative h-48">
                                        @if($seller->photo)
                                            <img src="{{ Storage::url($seller->photo) }}" 
                                                 alt="{{ $seller->name }}" 
                                                 class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-[#701516]/5 to-[#c40606]/5 flex items-center justify-center">
                                                <svg class="w-16 h-16 text-[#701516]/20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="p-6">
                                        <div class="flex flex-col space-y-1 mb-4">
                                            <h3 class="text-lg font-semibold text-[#701516] line-clamp-1">{{ $seller->name }}</h3>
                                            <p class="text-sm text-gray-600 line-clamp-1">{{ $seller->position }}</p>
                                            @if($seller->company)
                                                <p class="text-sm text-gray-500 line-clamp-1">{{ $seller->company }}</p>
                                            @endif
                                        </div>

                                        <div class="space-y-2 mb-4">
                                            <div class="flex items-center gap-2 min-w-0">
                                                <svg class="w-4 h-4 flex-shrink-0 text-[#701516]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                                </svg>
                                                <span class="text-sm text-gray-600 truncate">{{ $seller->email }}</span>
                                            </div>
                                            @if($seller->phone)
                                                <div class="flex items-center gap-2 min-w-0">
                                                    <svg class="w-4 h-4 flex-shrink-0 text-[#701516]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                              d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                                    </svg>
                                                    <span class="text-sm text-gray-600 truncate">{{ $seller->phone }}</span>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="flex gap-2">
                                            <a href="{{ route('sellers.show', $seller->slug) }}" 
                                               target="_blank"
                                               class="flex-1 inline-flex items-center justify-center px-3 py-2 bg-white border border-[#701516] rounded-lg text-sm text-[#701516] hover:bg-[#701516] hover:text-white transition-colors duration-200">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                </svg>
                                                Ver
                                            </a>
                                            <a href="{{ route('sellers.edit', $seller->slug) }}" 
                                               class="flex-1 inline-flex items-center justify-center px-3 py-2 bg-gradient-to-r from-[#701516] to-[#c40606] border border-transparent rounded-lg text-sm text-white hover:from-[#c40606] hover:to-[#701516] transition-all duration-200">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                </svg>
                                                Editar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-12">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/20 p-8">
                    <h2 class="text-2xl font-bold text-[#701516] mb-4">{{ __('¡Bienvenido a tu Panel!') }}</h2>
                    <p class="text-gray-600 mb-6">{{ __('Crea tu primera tarjeta de negocio digital y comienza a compartir tu información profesional.') }}</p>
                    <p class="text-gray-500 mb-8">{{ __('Puedes crear múltiples tarjetas para diferentes roles o negocios.') }}</p>
                    <a href="{{ route('sellers.create') }}" 
                        class="inline-flex items-center px-6 py-3 bg-[#f4bc21] border border-transparent rounded-xl font-bold text-base text-[#701516] hover:bg-[#f4bc21]/90 transition-all duration-200 transform hover:scale-[1.02] shadow-lg">
                        <svg class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        {{ __('Crear Mi Primera Tarjeta') }}
                    </a>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
