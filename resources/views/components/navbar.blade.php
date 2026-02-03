<nav x-show="loaded" 
     x-transition:enter="transition ease-out duration-1000"
     x-transition:enter-start="opacity-0 -translate-y-full"
     x-transition:enter-end="opacity-100 translate-y-0"
     class="fixed w-full z-50 transition-all duration-300 bg-white/80 dark:bg-gray-900/70 backdrop-blur-md border-b border-gray-200 dark:border-white/10 shadow-sm dark:shadow-none">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-18 items-center">
            <div class="flex-shrink-0 flex items-center animate-fade-in-down">
                <a href="{{ route('home') }}" class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-cyan-500 to-blue-600 dark:from-cyan-400 dark:to-blue-500 hover:opacity-80 transition">
                    Shawon.
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-10 items-center">
                <a href="#home" 
                   style="animation-delay: 0.1s;"
                   :class="activeSection === 'home' ? 'text-cyan-600 dark:text-cyan-400 after:w-full scale-110 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-cyan-600 dark:hover:text-cyan-400 after:w-0 hover:after:w-1/2 hover:scale-105'"
                   class="animate-fade-in-down relative font-medium transition-all duration-300 text-sm tracking-wide transform origin-center after:content-[''] after:absolute after:-bottom-1.5 after:left-0 after:h-[2px] after:bg-cyan-500 dark:after:bg-cyan-400 after:transition-all after:duration-300">
                    Home
                </a>
                <a href="#about" 
                   style="animation-delay: 0.2s;"
                   :class="activeSection === 'about' ? 'text-cyan-600 dark:text-cyan-400 after:w-full scale-110 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-cyan-600 dark:hover:text-cyan-400 after:w-0 hover:after:w-1/2 hover:scale-105'"
                   class="animate-fade-in-down relative font-medium transition-all duration-300 text-sm tracking-wide transform origin-center after:content-[''] after:absolute after:-bottom-1.5 after:left-0 after:h-[2px] after:bg-cyan-500 dark:after:bg-cyan-400 after:transition-all after:duration-300">
                    About
                </a>
                <a href="#skills" 
                   style="animation-delay: 0.3s;"
                   :class="activeSection === 'skills' ? 'text-cyan-600 dark:text-cyan-400 after:w-full scale-110 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-cyan-600 dark:hover:text-cyan-400 after:w-0 hover:after:w-1/2 hover:scale-105'"
                   class="animate-fade-in-down relative font-medium transition-all duration-300 text-sm tracking-wide transform origin-center after:content-[''] after:absolute after:-bottom-1.5 after:left-0 after:h-[2px] after:bg-cyan-500 dark:after:bg-cyan-400 after:transition-all after:duration-300">
                    Skills
                </a>
                <a href="#projects" 
                   style="animation-delay: 0.4s;"
                   :class="activeSection === 'projects' ? 'text-cyan-600 dark:text-cyan-400 after:w-full scale-110 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-cyan-600 dark:hover:text-cyan-400 after:w-0 hover:after:w-1/2 hover:scale-105'"
                   class="animate-fade-in-down relative font-medium transition-all duration-300 text-sm tracking-wide transform origin-center after:content-[''] after:absolute after:-bottom-1.5 after:left-0 after:h-[2px] after:bg-cyan-500 dark:after:bg-cyan-400 after:transition-all after:duration-300">
                    Projects
                </a>
                <a href="#contact" 
                   style="animation-delay: 0.5s;"
                   class="animate-fade-in-down px-6 py-2.5 rounded-full bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-medium hover:shadow-lg hover:shadow-cyan-500/25 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 text-sm shadow-md flex items-center gap-2 group">
                    <span>Contact</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                    </svg>
                </a>

                <!-- Theme Toggle -->
                <button @click="toggleTheme()" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors duration-200 focus:outline-none">
                    <!-- Sun Icon (Show in Dark Mode) -->
                    <svg x-show="theme === 'dark'" class="w-6 h-6 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <!-- Moon Icon (Show in Light Mode) -->
                    <svg x-show="theme === 'light'" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center gap-4">
                    <!-- Theme Toggle Mobile -->
                    <button @click="toggleTheme()" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors duration-200 focus:outline-none">
                    <svg x-show="theme === 'dark'" class="w-5 h-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg x-show="theme === 'light'" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>

                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" x-show="!mobileMenuOpen" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" x-show="mobileMenuOpen" style="display: none;" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" 
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            style="display: none;" 
            class="md:hidden bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800 absolute w-full shadow-lg">
        <div class="px-4 pt-2 pb-6 space-y-2">
            <a href="#home" @click="mobileMenuOpen = false" :class="activeSection === 'home' ? 'text-cyan-600 dark:text-cyan-400 bg-gray-50 dark:bg-gray-800' : 'text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800'" class="block px-3 py-2 text-base font-medium rounded-md">Home</a>
            <a href="#about" @click="mobileMenuOpen = false" :class="activeSection === 'about' ? 'text-cyan-600 dark:text-cyan-400 bg-gray-50 dark:bg-gray-800' : 'text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800'" class="block px-3 py-2 text-base font-medium rounded-md">About</a>
            <a href="#skills" @click="mobileMenuOpen = false" :class="activeSection === 'skills' ? 'text-cyan-600 dark:text-cyan-400 bg-gray-50 dark:bg-gray-800' : 'text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800'" class="block px-3 py-2 text-base font-medium rounded-md">Skills</a>
            <a href="#projects" @click="mobileMenuOpen = false" :class="activeSection === 'projects' ? 'text-cyan-600 dark:text-cyan-400 bg-gray-50 dark:bg-gray-800' : 'text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800'" class="block px-3 py-2 text-base font-medium rounded-md">Projects</a>
            <a href="#contact" @click="mobileMenuOpen = false" class="block px-3 py-2 text-base font-medium text-cyan-600 dark:text-cyan-400 hover:text-cyan-500 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-md">Contact Me</a>
        </div>
    </div>
    
    <!-- Scroll Progress Bar -->
    <div class="absolute bottom-0 left-0 h-[3px] bg-gradient-to-r from-cyan-500 to-blue-600 dark:from-cyan-400 dark:to-blue-500 shadow-[0_0_10px_rgba(34,211,238,0.5)] transition-all duration-75 ease-out z-50"
            :style="'width: ' + scrollProgress + '%'">
    </div>
</nav>
