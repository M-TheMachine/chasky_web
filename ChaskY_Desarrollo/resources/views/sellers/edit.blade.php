@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Editar Tarjeta de Negocio') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('sellers.update', $seller->slug) }}" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- Información Personal -->
                        <div class="border-b border-gray-200 pb-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('Información Personal') }}</h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Nombre -->
                                <div>
                                    <x-input-label for="name" :value="__('Nombre')" />
                                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $seller->name)" required autofocus />
                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                </div>

                                <!-- Cargo -->
                                <div>
                                    <x-input-label for="position" :value="__('Cargo')" />
                                    <x-text-input id="position" name="position" type="text" class="mt-1 block w-full" :value="old('position', $seller->position)" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('position')" />
                                </div>

                                <!-- Email -->
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $seller->email)" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                </div>

                                <!-- Teléfono -->
                                <div>
                                    <x-input-label for="phone" :value="__('Teléfono')" />
                                    <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $seller->phone)" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                                </div>
                            </div>
                        </div>

                        <!-- Información de Contacto -->
                        <div class="border-b border-gray-200 pb-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('Información de Contacto') }}</h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- WhatsApp -->
                                <div>
                                    <x-input-label for="whatsapp" :value="__('WhatsApp')" />
                                    <x-text-input id="whatsapp" name="whatsapp" type="text" class="mt-1 block w-full" :value="old('whatsapp', $seller->whatsapp)" />
                                    <x-input-error class="mt-2" :messages="$errors->get('whatsapp')" />
                                </div>

                                <!-- LinkedIn -->
                                <div>
                                    <x-input-label for="linkedin" :value="__('LinkedIn')" />
                                    <x-text-input id="linkedin" name="linkedin" type="url" class="mt-1 block w-full" :value="old('linkedin', $seller->linkedin)" />
                                    <x-input-error class="mt-2" :messages="$errors->get('linkedin')" />
                                </div>
                            </div>
                        </div>

                        <!-- Información de la Empresa -->
                        <div class="border-b border-gray-200 pb-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('Información de la Empresa') }}</h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Empresa -->
                                <div>
                                    <x-input-label for="company" :value="__('Empresa')" />
                                    <x-text-input id="company" name="company" type="text" class="mt-1 block w-full" :value="old('company', $seller->company)" />
                                    <x-input-error class="mt-2" :messages="$errors->get('company')" />
                                </div>

                                <!-- Dirección -->
                                <div>
                                    <x-input-label for="address" :value="__('Dirección')" />
                                    <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $seller->address)" />
                                    <x-input-error class="mt-2" :messages="$errors->get('address')" />
                                </div>

                                <!-- Sitio Web -->
                                <div>
                                    <x-input-label for="website" :value="__('Sitio Web')" />
                                    <x-text-input id="website" name="website" type="url" class="mt-1 block w-full" :value="old('website', $seller->website)" />
                                    <x-input-error class="mt-2" :messages="$errors->get('website')" />
                                </div>
                            </div>
                        </div>

                        <!-- Biografía -->
                        <div class="border-b border-gray-200 pb-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('Biografía') }}</h3>
                            
                            <div>
                                <x-input-label for="bio" :value="__('Biografía')" />
                                <textarea id="bio" name="bio" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('bio', $seller->bio) }}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('bio')" />
                            </div>
                        </div>

                        <!-- Foto -->
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4">{{ __('Foto de Perfil') }}</h3>
                            
                            @if($seller->photo)
                                <div class="mb-4">
                                    <img src="{{ Storage::url($seller->photo) }}" alt="{{ $seller->name }}" class="w-32 h-32 object-cover rounded-lg">
                                </div>
                            @endif

                            <div>
                                <x-input-label for="photo" :value="__('Nueva Foto')" />
                                <input type="file" id="photo" name="photo" class="mt-1 block w-full" accept="image/*">
                                <x-input-error class="mt-2" :messages="$errors->get('photo')" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <x-primary-button>{{ __('Guardar Cambios') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
