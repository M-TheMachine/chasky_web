<nav x-data="{ open: false }" class="fixed w-full z-50">
    <div class="relative bg-gradient-to-br from-[#701516] to-[#c40606] text-white border-b border-[#701516]/20 shadow-md">
        <div class="absolute inset-0 bg-black bg-opacity-40 backdrop-blur-md"></div>
        <!-- Primary Navigation Menu -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-24">
                <div class="flex items-center">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}">
                            <x-application-logo class="block h-16 w-auto" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:ms-10 sm:flex items-center">
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
                    </div>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    @auth
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white hover:text-[#f4bc21] focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
                    @else
                        <div class="flex items-center space-x-4">
                            <a href="{{ route('login') }}" class="text-white hover:text-[#f4bc21] text-sm">{{ __('Iniciar sesión') }}</a>
                            <a href="{{ route('register') }}" class="text-sm bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold py-2 px-4 rounded-full transition duration-300">{{ __('Registrarse') }}</a>
                        </div>
                    @endauth

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
                </div>

                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-[#f4bc21] hover:bg-[#701516] focus:outline-none focus:bg-[#701516] focus:text-[#f4bc21] transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link href="/servicios" :active="request()->is('servicios')">
                    {{ __('home.nav.services') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="/portafolio" :active="request()->is('portafolio')">
                    {{ __('home.nav.portfolio') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="/nosotros" :active="request()->is('nosotros')">
                    {{ __('home.nav.about') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link href="/contacto" :active="request()->is('contacto')">
                    {{ __('home.nav.contact') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-[#701516]/20">
                @auth
                    <div class="px-4">
                        <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-white/70">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        @if(auth()->user()->seller)
                            <x-responsive-nav-link :href="route('sellers.edit', auth()->user()->seller->slug)">
                                {{ __('Editar Tarjeta de Negocio') }}
                            </x-responsive-nav-link>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                @else
                    <div class="px-4 py-2 space-y-2">
                        <x-responsive-nav-link :href="route('login')">
                            {{ __('Iniciar sesión') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('register')" class="bg-[#f4bc21] hover:bg-[#f4bc21]/90 text-[#701516] font-bold rounded-full">
                            {{ __('Registrarse') }}
                        </x-responsive-nav-link>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
