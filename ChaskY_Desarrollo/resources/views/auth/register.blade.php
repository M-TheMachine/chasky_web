<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#701516] to-[#c40606] py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full bg-white rounded-2xl shadow-2xl p-8 space-y-8 relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="absolute top-0 right-0 w-20 h-20 bg-[#f4bc21]/10 rounded-bl-full"></div>
            <div class="absolute bottom-0 left-0 w-20 h-20 bg-[#701516]/10 rounded-tr-full"></div>
            
            <div class="text-center relative">
                <a href="/" class="inline-block w-full">
                    <img src="{{ asset('storage/login-logo.png') }}" alt="Logo" style="width: 250px; height: auto; display: block; margin: 0 auto;">
                </a>
                <h2 class="mt-6 text-3xl font-bold text-gray-900">
                    {{ __('Crea tu cuenta') }}
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    {{ __('¿Ya tienes una cuenta?') }}
                    <a href="{{ route('login') }}" class="font-medium text-[#701516] hover:text-[#c40606] transition-colors duration-200">
                        {{ __('Inicia sesión aquí') }}
                    </a>
                </p>
            </div>

            <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">
                        {{ __('Nombre') }}
                    </label>
                    <div class="mt-1">
                        <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                            class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-xl shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#701516] focus:border-[#701516] sm:text-sm transition duration-200" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        {{ __('Email') }}
                    </label>
                    <div class="mt-1">
                        <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"
                            class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-xl shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#701516] focus:border-[#701516] sm:text-sm transition duration-200" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        {{ __('Contraseña') }}
                    </label>
                    <div class="mt-1">
                        <input id="password" type="password" name="password" required autocomplete="new-password"
                            class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-xl shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#701516] focus:border-[#701516] sm:text-sm transition duration-200" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                        {{ __('Confirmar Contraseña') }}
                    </label>
                    <div class="mt-1">
                        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                            class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-xl shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#701516] focus:border-[#701516] sm:text-sm transition duration-200" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-xl text-white bg-gradient-to-r from-[#701516] to-[#c40606] hover:from-[#c40606] hover:to-[#701516] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#701516] transform transition-all duration-200 hover:scale-[1.02]">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-white/70 group-hover:text-white/90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"/>
                            </svg>
                        </span>
                        {{ __('Registrarse') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
