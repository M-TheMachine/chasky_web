@csrf
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
        <x-input-label for="name" :value="__('Nombre')" />
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $seller->name ?? '')" required autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>

    <div>
        <x-input-label for="position" :value="__('Cargo')" />
        <x-text-input id="position" name="position" type="text" class="mt-1 block w-full" :value="old('position', $seller->position ?? '')" required />
        <x-input-error class="mt-2" :messages="$errors->get('position')" />
    </div>

    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $seller->email ?? '')" required />
        <x-input-error class="mt-2" :messages="$errors->get('email')" />
    </div>

    <div>
        <x-input-label for="phone" :value="__('Teléfono')" />
        <x-text-input id="phone" name="phone" type="tel" class="mt-1 block w-full" :value="old('phone', $seller->phone ?? '')" required />
        <x-input-error class="mt-2" :messages="$errors->get('phone')" />
    </div>

    <div>
        <x-input-label for="whatsapp" :value="__('WhatsApp')" />
        <x-text-input id="whatsapp" name="whatsapp" type="tel" class="mt-1 block w-full" :value="old('whatsapp', $seller->whatsapp ?? '')" />
        <x-input-error class="mt-2" :messages="$errors->get('whatsapp')" />
    </div>

    <div>
        <x-input-label for="linkedin" :value="__('LinkedIn URL')" />
        <x-text-input id="linkedin" name="linkedin" type="url" class="mt-1 block w-full" :value="old('linkedin', $seller->linkedin ?? '')" />
        <x-input-error class="mt-2" :messages="$errors->get('linkedin')" />
    </div>

    <div>
        <x-input-label for="company" :value="__('Empresa')" />
        <x-text-input id="company" name="company" type="text" class="mt-1 block w-full" :value="old('company', $seller->company ?? '')" />
        <x-input-error class="mt-2" :messages="$errors->get('company')" />
    </div>

    <div>
        <x-input-label for="address" :value="__('Dirección')" />
        <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $seller->address ?? '')" />
        <x-input-error class="mt-2" :messages="$errors->get('address')" />
    </div>

    <div>
        <x-input-label for="website" :value="__('Sitio Web')" />
        <x-text-input id="website" name="website" type="url" class="mt-1 block w-full" :value="old('website', $seller->website ?? '')" />
        <x-input-error class="mt-2" :messages="$errors->get('website')" />
    </div>

    <div class="col-span-2">
        <x-input-label for="bio" :value="__('Biografía')" />
        <textarea id="bio" name="bio" rows="4" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('bio', $seller->bio ?? '') }}</textarea>
        <x-input-error class="mt-2" :messages="$errors->get('bio')" />
    </div>

    <div class="col-span-2">
        <x-input-label for="photo" :value="__('Foto')" />
        <input id="photo" name="photo" type="file" accept="image/*" class="mt-1 block w-full" />
        <x-input-error class="mt-2" :messages="$errors->get('photo')" />
        @if(isset($seller) && $seller->photo)
            <div class="mt-2">
                <img src="{{ Storage::url($seller->photo) }}" alt="{{ $seller->name }}" class="w-32 h-32 object-cover rounded-lg">
            </div>
        @endif
    </div>
</div>
