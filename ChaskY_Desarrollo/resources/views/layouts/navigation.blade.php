<nav class="nav-container fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md shadow-sm h-16">
    <div class="nav-background">
        <div class="nav-backdrop"></div>
        <!-- Primary Navigation Menu -->
        <div class="nav-content max-w-7xl mx-auto">
            <div class="nav-wrapper flex items-center justify-between w-full h-16 px-4">
                <!-- Logo -->
                <div class="shrink-0">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-12 w-auto" />
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
                        <x-nav-link href="/carreras" :active="request()->is('carreras')" class="bg-[#701516] hover:bg-[#701516]/90 text-[#ffffff] text-sm font-bold px-3 py-1.5 rounded-full transition duration-300 shadow-sm hover:shadow-md">
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
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
