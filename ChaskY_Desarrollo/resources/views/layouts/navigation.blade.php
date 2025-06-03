<nav class="bg-white/95 backdrop-blur-md shadow-sm fixed top-0 left-0 right-0 z-50" style="box-shadow: 0 2px 10px rgba(0,0,0,0.08);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}">
                    <x-application-logo class="block h-10 w-auto" />
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex md:items-center md:justify-end md:flex-1">
                <div class="flex items-center space-x-4 mr-4">
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
                    <!-- Language Switcher Desktop -->
                    <div class="relative">
                        <button id="language-dropdown-button" class="flex items-center justify-center text-gray-700 hover:text-[#701516] focus:outline-none transition-colors duration-200">
                            <span class="text-sm font-medium">{{ session('locale', app()->getLocale()) === 'es' ? 'ES' : 'EN' }}</span>
                            <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="language-dropdown-menu" class="absolute right-0 mt-2 py-2 w-24 bg-white rounded-md shadow-lg z-10 hidden">
                            <a href="#" onclick="changeLanguage('es'); return false;" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ session('locale', app()->getLocale()) === 'es' ? 'font-bold text-[#701516]' : '' }}">Español</a>
                            <a href="#" onclick="changeLanguage('en'); return false;" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ session('locale', app()->getLocale()) === 'en' ? 'font-bold text-[#701516]' : '' }}">English</a>
                        </div>
                    </div>
                </div>
                
                <a href="/carreras" class="inline-flex items-center bg-[#701516] hover:bg-[#701516]/90 text-white text-sm font-semibold px-4 py-2 rounded-full transition duration-300 shadow-sm hover:shadow-md">
                    {{ __('home.nav.join_team') }}
                </a>

                <!-- User Menu (Desktop) -->
                @auth
                <div class="ml-4 flex items-center">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-700 hover:text-[#701516] focus:outline-none transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('auth.profile') }}
                            </x-dropdown-link>

                            @if(auth()->user()->seller)
                                <x-dropdown-link :href="route('sellers.edit', auth()->user()->seller->slug)">
                                    {{ __('auth.edit_business_card') }}
                                </x-dropdown-link>
                            @endif

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('auth.log_out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @endauth
            </div>

            <!-- Hamburger Button (Mobile) -->
            <div class="flex items-center md:hidden">
                <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-800 hover:text-[#701516] hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#701516] transition duration-150 ease-in-out" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Abrir menú principal</span>
                    <!-- Icon when menu is closed -->
                    <svg id="menu-open-icon" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open -->
                    <svg id="menu-close-icon" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white/95 backdrop-blur-md shadow-xl border-t border-gray-200 absolute left-0 right-0 rounded-b-xl z-50 max-h-[85vh] overflow-y-auto" style="box-shadow: 0 4px 20px rgba(0,0,0,0.15);">
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
            
            <!-- Language Switcher Mobile -->
            <div class="border-t border-gray-200 pt-2 pb-1">
                <div class="px-4 py-2 text-sm text-gray-600 font-medium">{{ __('auth.language') }}</div>
                <x-responsive-nav-link href="#" onclick="changeLanguage('es'); return false;" :active="session('locale', app()->getLocale()) === 'es'">
                    Español
                </x-responsive-nav-link>
                <x-responsive-nav-link href="#" onclick="changeLanguage('en'); return false;" :active="session('locale', app()->getLocale()) === 'en'">
                    English
                </x-responsive-nav-link>
            </div>
            
            <div class="px-3 py-2">
                <a href="/carreras" class="w-full flex items-center justify-center px-4 py-3 bg-[#701516] border border-transparent rounded-md font-semibold text-sm text-white hover:bg-[#701516]/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#701516] transition shadow-md">
                    {{ __('home.nav.join_team') }}
                </a>
            </div>
        </div>

        @auth
        <!-- User Menu (Mobile) -->
        <div class="pt-4 pb-3 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <div class="h-10 w-10 rounded-full bg-[#701516] flex items-center justify-center text-white font-semibold">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('auth.profile') }}
                </x-responsive-nav-link>
                
                @if(auth()->user()->seller)
                    <x-responsive-nav-link :href="route('sellers.edit', auth()->user()->seller->slug)">
                        {{ __('auth.edit_business_card') }}
                    </x-responsive-nav-link>
                @endif
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('auth.log_out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @endauth
    </div>
</nav>

<script>
    // Función para manejar el menú móvil con animación mejorada
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuOpenIcon = document.getElementById('menu-open-icon');
        const menuCloseIcon = document.getElementById('menu-close-icon');
        
        // Manejo del dropdown de idiomas (desktop)
        const languageDropdownButton = document.getElementById('language-dropdown-button');
        const languageDropdownMenu = document.getElementById('language-dropdown-menu');
        
        if (languageDropdownButton && languageDropdownMenu) {
            languageDropdownButton.addEventListener('click', function(e) {
                e.stopPropagation();
                languageDropdownMenu.classList.toggle('hidden');
            });
            
            // Cerrar el menú al hacer clic fuera
            document.addEventListener('click', function() {
                if (!languageDropdownMenu.classList.contains('hidden')) {
                    languageDropdownMenu.classList.add('hidden');
                }
            });
            
            // Evitar que se cierre al hacer clic dentro del menú
            languageDropdownMenu.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        }
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                // Toggle menu visibility con animación
                if (mobileMenu.classList.contains('hidden')) {
                    // Mostrar menú
                    mobileMenu.classList.remove('hidden');
                    mobileMenu.style.opacity = '0';
                    mobileMenu.style.transform = 'translateY(-10px)';
                    mobileMenu.style.transition = 'opacity 200ms ease, transform 200ms ease';
                    
                    // Trigger reflow para activar la transición
                    void mobileMenu.offsetWidth;
                    
                    mobileMenu.style.opacity = '1';
                    mobileMenu.style.transform = 'translateY(0)';
                } else {
                    // Ocultar menú con animación
                    mobileMenu.style.opacity = '0';
                    mobileMenu.style.transform = 'translateY(-10px)';
                    
                    // Esperar a que termine la animación antes de ocultar
                    setTimeout(function() {
                        mobileMenu.classList.add('hidden');
                    }, 200);
                }
                
                // Toggle icons
                menuOpenIcon.classList.toggle('hidden');
                menuOpenIcon.classList.toggle('block');
                menuCloseIcon.classList.toggle('hidden');
                menuCloseIcon.classList.toggle('block');
                
                // Update aria-expanded attribute
                const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
                mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
            });
            
            // Close menu when clicking on links with animación
            const mobileMenuLinks = mobileMenu.querySelectorAll('a');
            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    // Ocultar menú con animación
                    mobileMenu.style.opacity = '0';
                    mobileMenu.style.transform = 'translateY(-10px)';
                    
                    // Esperar a que termine la animación antes de ocultar
                    setTimeout(function() {
                        mobileMenu.classList.add('hidden');
                        menuOpenIcon.classList.remove('hidden');
                        menuOpenIcon.classList.add('block');
                        menuCloseIcon.classList.add('hidden');
                        menuCloseIcon.classList.remove('block');
                        mobileMenuButton.setAttribute('aria-expanded', 'false');
                    }, 200);
                });
            });
        }
    });
</script>
