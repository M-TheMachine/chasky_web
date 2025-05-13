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
                    {{ __('Bienvenido de nuevo') }}
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    {{ __('¿No tienes una cuenta?') }}
                    <a href="{{ route('register') }}" class="font-medium text-[#701516] hover:text-[#c40606] transition-colors duration-200">
                        {{ __('Regístrate aquí') }}
                    </a>
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        {{ __('Email') }}
                    </label>
                    <div class="mt-1">
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
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
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                            class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-xl shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#701516] focus:border-[#701516] sm:text-sm transition duration-200" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="h-4 w-4 text-[#701516] focus:ring-[#701516] border-gray-300 rounded transition duration-200">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                            {{ __('Recordarme') }}
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                        <a class="text-sm font-medium text-[#701516] hover:text-[#c40606] transition-colors duration-200" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                </div>

                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-xl text-white bg-gradient-to-r from-[#701516] to-[#c40606] hover:from-[#c40606] hover:to-[#701516] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#701516] transform transition-all duration-200 hover:scale-[1.02]">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-white/70 group-hover:text-white/90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        {{ __('Iniciar sesión') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
