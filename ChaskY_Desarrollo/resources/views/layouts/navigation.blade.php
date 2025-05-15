<nav class="nav-container">
    <div class="nav-background">
        <div class="nav-backdrop"></div>
        <!-- Primary Navigation Menu -->
        <div class="nav-content">
            <div class="nav-wrapper flex items-center justify-between w-full px-4">
                <!-- Logo -->
                <div class="shrink-0">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-24 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links and Auth Buttons -->
                <div class="flex items-center space-x-8">
                    <!-- Navigation Links -->
                    <div class="flex items-center space-x-4">
                        <x-nav-link href="/servicios" :active="request()->is('servicios')">
                            {{ __('home.nav.services') }}
                        </x-nav-link>
                        <x-nav-link href="/portafolio" :active="request()->is('portafolio')">
                            {{ __('home.nav.portfolio') }}
                        </x-nav-link>
                        <x-nav-link href="/nosotros" :active="request()->is('nosotros')">
                            {{ __('home.nav.about') }}
                        </x-nav-link>
                        <x-nav-link href="/contacto" :active="request()->is('contacto')">
                            {{ __('home.nav.contact') }}
                        </x-nav-link>
                        <x-nav-link href="/carreras" :active="request()->is('carreras')" class="bg-[#701516] hover:bg-[#701516]/90 text-[#ffffff] font-bold px-4 py-2 rounded-full transition duration-300 shadow-sm hover:shadow-md">
                            {{ __('Únete al equipo') }}
                        </x-nav-link>
                    </div>

                    <!-- Settings Dropdown -->
                    <div class="flex items-center">
                        <div class="user-dropdown">
                        @auth
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="user-dropdown-button">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    @if(auth()->user()->seller)
                                        <x-dropdown-link :href="route('sellers.edit', auth()->user()->seller->slug)">
                                            {{ __('Editar Tarjeta de Negocio') }}
                                        </x-dropdown-link>
                                    @endif

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        @else
                            <div class="flex space-x-4">
                                <a href="{{ route('login') }}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-[#701516] bg-transparent border-2 border-[#701516] rounded-full hover:bg-[#701516] hover:text-white transition-all duration-200">{{ __('Iniciar sesión') }}</a>
                                <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-white bg-[#701516] border-2 border-[#701516] rounded-full hover:bg-[#c40606] hover:border-[#c40606] transition-all duration-200">{{ __('Registrarse') }}</a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
