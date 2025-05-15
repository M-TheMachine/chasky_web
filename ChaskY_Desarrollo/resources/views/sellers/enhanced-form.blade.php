@csrf
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Formulario -->
    <div class="space-y-6">
        <!-- Información Personal -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
            <h3 class="text-lg font-medium text-[#701516] mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                {{ __('Información Personal') }}
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <x-input-label for="name" :value="__('Nombre')" />
                    <x-text-input id="name" name="name" type="text" 
                        class="mt-1 block w-full" 
                        :value="old('name', $seller->name ?? '')" 
                        required 
                        autofocus 
                        x-model="formData.name"
                        @input="updatePreview" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div>
                    <x-input-label for="position" :value="__('Cargo')" />
                    <x-text-input id="position" name="position" type="text" 
                        class="mt-1 block w-full" 
                        :value="old('position', $seller->position ?? '')" 
                        required 
                        x-model="formData.position"
                        @input="updatePreview" />
                    <x-input-error class="mt-2" :messages="$errors->get('position')" />
                </div>
            </div>
        </div>

        <!-- Información de Contacto -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
            <h3 class="text-lg font-medium text-[#701516] mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                {{ __('Información de Contacto') }}
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" name="email" type="email" 
                        class="mt-1 block w-full" 
                        :value="old('email', $seller->email ?? '')" 
                        required 
                        x-model="formData.email"
                        @input="updatePreview" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>

                <div>
                    <x-input-label for="phone" :value="__('Teléfono')" />
                    <x-text-input id="phone" name="phone" type="tel" 
                        class="mt-1 block w-full" 
                        :value="old('phone', $seller->phone ?? '')" 
                        required 
                        placeholder="+51 999 999 999"
                        x-model="formData.phone"
                        @input="updatePreview" />
                    <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                </div>

                <div>
                    <x-input-label for="whatsapp" :value="__('WhatsApp')" />
                    <x-text-input id="whatsapp" name="whatsapp" type="tel" 
                        class="mt-1 block w-full" 
                        :value="old('whatsapp', $seller->whatsapp ?? '')" 
                        placeholder="+51 999 999 999"
                        x-model="formData.whatsapp"
                        @input="updatePreview" />
                    <x-input-error class="mt-2" :messages="$errors->get('whatsapp')" />
                </div>

                <div>
                    <x-input-label for="linkedin" :value="__('LinkedIn URL')" />
                    <x-text-input id="linkedin" name="linkedin" type="url" 
                        class="mt-1 block w-full" 
                        :value="old('linkedin', $seller->linkedin ?? '')" 
                        placeholder="https://linkedin.com/in/tu-perfil"
                        x-model="formData.linkedin"
                        @input="updatePreview" />
                    <x-input-error class="mt-2" :messages="$errors->get('linkedin')" />
                </div>
            </div>
        </div>

        <!-- Información de la Empresa -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
            <h3 class="text-lg font-medium text-[#701516] mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                {{ __('Información de la Empresa') }}
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <x-input-label for="company" :value="__('Empresa')" />
                    <x-text-input id="company" name="company" type="text" 
                        class="mt-1 block w-full" 
                        :value="old('company', $seller->company ?? '')"
                        x-model="formData.company"
                        @input="updatePreview" />
                    <x-input-error class="mt-2" :messages="$errors->get('company')" />
                </div>

                <div>
                    <x-input-label for="website" :value="__('Sitio Web')" />
                    <x-text-input id="website" name="website" type="url" 
                        class="mt-1 block w-full" 
                        :value="old('website', $seller->website ?? '')"
                        placeholder="https://www.tusitio.com"
                        x-model="formData.website"
                        @input="updatePreview" />
                    <x-input-error class="mt-2" :messages="$errors->get('website')" />
                </div>

                <div class="col-span-2">
                    <x-input-label for="address" :value="__('Dirección')" />
                    <x-text-input id="address" name="address" type="text" 
                        class="mt-1 block w-full" 
                        :value="old('address', $seller->address ?? '')"
                        x-model="formData.address"
                        @input="updatePreview" />
                    <x-input-error class="mt-2" :messages="$errors->get('address')" />
                </div>
            </div>
        </div>

        <!-- Biografía y Foto -->
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
            <h3 class="text-lg font-medium text-[#701516] mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
                {{ __('Biografía y Foto') }}
            </h3>
            <div class="space-y-4">
                <div>
                    <x-input-label for="bio" :value="__('Biografía')" />
                    <textarea id="bio" name="bio" rows="4" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#701516] focus:ring-[#701516]"
                        x-model="formData.bio"
                        @input="updatePreview">{{ old('bio', $seller->bio ?? '') }}</textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('bio')" />
                </div>

                <div x-data="imageHandler()">
                    <x-input-label for="photo" :value="__('Foto de Perfil')" />
                    <div class="mt-2 flex items-center gap-4">
                        <div class="relative">
                            <template x-if="imageUrl">
                                <img :src="imageUrl" class="w-32 h-32 object-cover rounded-lg border-2 border-[#701516]" />
                            </template>
                            <template x-if="!imageUrl">
                                <div class="w-32 h-32 rounded-lg border-2 border-dashed border-gray-300 flex items-center justify-center bg-gray-50">
                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                              d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </template>
                        </div>
                        <div class="flex-1">
                            <input type="file" 
                                id="photo" 
                                name="photo" 
                                class="hidden"
                                accept="image/*"
                                @change="handleImageUpload" />
                            <label for="photo" 
                                class="inline-flex items-center px-4 py-2 bg-[#701516] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#c40606] active:bg-[#701516] focus:outline-none focus:border-[#c40606] focus:ring ring-[#c40606] disabled:opacity-25 transition ease-in-out duration-150 cursor-pointer">
                                {{ __('Seleccionar Imagen') }}
                            </label>
                            <p class="mt-2 text-sm text-gray-500">
                                {{ __('PNG, JPG o JPEG hasta 2MB') }}
                            </p>
                        </div>
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('photo')" />
                </div>
            </div>
        </div>
    </div>

    <!-- Vista Previa -->
    <div class="lg:sticky lg:top-24 h-fit">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="relative p-6">
                <div class="absolute top-0 right-0 w-20 h-20 bg-[#f4bc21]/10 rounded-bl-full"></div>
                <div class="absolute bottom-0 left-0 w-20 h-20 bg-[#701516]/10 rounded-tr-full"></div>
                
                <h3 class="text-lg font-medium text-[#701516] mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    {{ __('Vista Previa') }}
                </h3>

                <div class="relative mt-8">
                    <!-- Foto de Perfil -->
                    <div class="absolute -top-16 w-full flex justify-center">
                        <div class="w-32 h-32 rounded-full border-4 border-[#f4bc21] shadow-xl overflow-hidden">
                            <template x-if="imageUrl">
                                <img :src="imageUrl" class="w-full h-full object-cover" />
                            </template>
                            <template x-if="!imageUrl">
                                <div class="w-full h-full bg-gray-100 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Información -->
                    <div class="mt-20 text-center">
                        <h4 class="text-2xl font-bold text-[#701516]" x-text="formData.name || '{{ __('Tu Nombre') }}'"></h4>
                        <p class="text-lg text-[#c40606]" x-text="formData.position || '{{ __('Tu Cargo') }}'"></p>
                        <p class="text-gray-600 mt-2" x-text="formData.company || ''"></p>
                    </div>

                    <div class="mt-6 space-y-3">
                        <template x-if="formData.email">
                            <div class="flex items-center justify-center space-x-2 p-3 bg-gray-50 rounded-lg">
                                <svg class="w-5 h-5 text-[#701516]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="text-gray-600" x-text="formData.email"></span>
                            </div>
                        </template>

                        <template x-if="formData.phone">
                            <div class="flex items-center justify-center space-x-2 p-3 bg-gray-50 rounded-lg">
                                <svg class="w-5 h-5 text-[#701516]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="text-gray-600" x-text="formData.phone"></span>
                            </div>
                        </template>

                        <template x-if="formData.bio">
                            <div class="p-3 bg-gray-50 rounded-lg">
                                <p class="text-gray-600 text-sm text-center" x-text="formData.bio"></p>
                            </div>
                        </template>
                    </div>

                    <div class="mt-6 flex justify-center gap-4">
                        <template x-if="formData.whatsapp">
                            <div class="w-10 h-10 flex items-center justify-center bg-[#f4bc21] text-[#701516] rounded-lg">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.04 14.69 2 12.04 2ZM12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.8 7.37 7.5 3.67 12.05 3.67ZM8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
                                </svg>
                            </div>
                        </template>

                        <template x-if="formData.linkedin">
                            <div class="w-10 h-10 flex items-center justify-center bg-[#701516] text-white rounded-lg">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('imageHandler', () => ({
        imageUrl: "{{ $seller->photo ? Storage::url($seller->photo) : '' }}",
        handleImageUpload(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    this.imageUrl = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    }));

    Alpine.data('formData', () => ({
        name: "{{ old('name', $seller->name ?? '') }}",
        position: "{{ old('position', $seller->position ?? '') }}",
        email: "{{ old('email', $seller->email ?? '') }}",
        phone: "{{ old('phone', $seller->phone ?? '') }}",
        whatsapp: "{{ old('whatsapp', $seller->whatsapp ?? '') }}",
        linkedin: "{{ old('linkedin', $seller->linkedin ?? '') }}",
        company: "{{ old('company', $seller->company ?? '') }}",
        website: "{{ old('website', $seller->website ?? '') }}",
        address: "{{ old('address', $seller->address ?? '') }}",
        bio: "{{ old('bio', $seller->bio ?? '') }}"
    }));
});
</script>
@endpush
