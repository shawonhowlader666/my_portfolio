@props([
    'title' => 'Shawon - Professional Portfolio', 
    'description' => 'Professional Full Stack Developer Portfolio',
    'image' => '/images/og-image.jpg'
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark" 
      x-data="{
          theme: localStorage.getItem('theme') || 'dark',
          mobileMenuOpen: false,
          scrolldown: false,
          scrollProgress: 0,
          activeSection: 'home',
          loaded: false,
          
          toggleTheme() {
              this.theme = this.theme === 'dark' ? 'light' : 'dark';
              localStorage.setItem('theme', this.theme);
              if (this.theme === 'dark') {
                  document.documentElement.classList.add('dark');
              } else {
                  document.documentElement.classList.remove('dark');
              }
              // Dispatch event for other scripts (like particles)
              window.dispatchEvent(new CustomEvent('theme-changed', { detail: this.theme }));
          },
          
          init() {
              if (this.theme === 'dark') {
                  document.documentElement.classList.add('dark');
              } else {
                  document.documentElement.classList.remove('dark');
              }
              this.updateActive();
          },

          updateActive() {
              const sections = ['home', 'about', 'skills', 'projects', 'contact'];
              const scrollPosition = window.scrollY + 100;

              for (const section of sections) {
                  const element = document.getElementById(section);
                  if (element) {
                      const top = element.offsetTop;
                      const height = element.offsetHeight;
                      if (scrollPosition >= top && scrollPosition < top + height) {
                          this.activeSection = section;
                      }
                  }
              }
          }
      }"
      x-init="init()"
      @scroll.window="
          scrolldown = (window.pageYOffset > 20);
          scrollProgress = (window.pageYOffset / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
          updateActive();
      ">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#06b6d4">

    <!-- Dynamic SEO Meta Tags -->
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="Portfolio, Web Developer, Laravel, PHP, Tailwind CSS, Full Stack">
    <meta name="author" content="Shawon">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:image" content="{{ $image }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $title }}">
    <meta property="twitter:description" content="{{ $description }}">
    <meta property="twitter:image" content="{{ $image }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- DevIcons for Technology Icons -->
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
        @keyframes loading {
            0% { transform: translateX(-100%); }
            50% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
    </style>
    <!-- SweetAlert2 for Beautiful Alerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Canvas Confetti for Celebration Animation -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100 antialiased selection:bg-cyan-500 selection:text-white relative transition-colors duration-300">
    
    <!-- Preloader -->
    <div x-init="window.addEventListener('load', () => { setTimeout(() => loaded = true, 500) })" 
         x-show="!loaded"
         x-transition:leave="transition transform ease-in-out duration-700"
         x-transition:leave-start="translate-y-0"
         x-transition:leave-end="-translate-y-full"
         class="fixed inset-0 z-[100] flex items-center justify-center bg-white dark:bg-[#050B14]">
        <div class="relative flex flex-col items-center">
            <!-- Pulsing Logo -->
            <div class="text-4xl md:text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-600 animate-pulse pb-2">
                Shawon.
            </div>
            <!-- Loading Bar -->
            <div class="w-32 h-1 bg-gray-200 dark:bg-gray-800 rounded-full mt-4 overflow-hidden">
                <div class="h-full bg-cyan-500 animate-[loading_1.5s_ease-in-out_infinite]"></div>
            </div>
        </div>
    </div>

    <!-- Particle Background -->
    <div id="tsparticles" class="fixed inset-0 z-0 pointer-events-none"></div>
    
    <!-- Navigation -->
    <x-navbar />

    <main class="relative z-10">
        {{ $slot }}
    </main>

    <x-sections.footer />
    
    <!-- Particles.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2.12.0/tsparticles.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', async () => {
            const loadParticles = async (isDark) => {
                await tsParticles.load("tsparticles", {
                    fullScreen: { enable: false },
                    background: { color: { value: "transparent" } },
                    fpsLimit: 60,
                    interactivity: {
                        events: {
                            onHover: { enable: true, mode: "grab" },
                            resize: true,
                        },
                        modes: {
                            grab: {
                                distance: 200,
                                links: {
                                    opacity: isDark ? 1 : 0.5,
                                    color: isDark ? "#06b6d4" : "#0284c7"
                                }
                            },
                        },
                    },
                    particles: {
                        color: { value: isDark ? "#22d3ee" : "#0284c7" },
                        links: {
                            color: isDark ? "#0e7490" : "#cbd5e1",
                            distance: 150,
                            enable: true,
                            opacity: isDark ? 0.5 : 0.3,
                            width: 1,
                        },
                        move: {
                            enable: true,
                            speed: 1,
                            direction: "none",
                            random: false,
                            straight: false,
                            outModes: "bounce",
                        },
                        number: {
                            density: { enable: true, area: 800 },
                            value: 80,
                        },
                        opacity: { value: isDark ? 0.5 : 0.3 },
                        shape: { type: "circle" },
                        size: { value: { min: 1, max: 4 } },
                    },
                    detectRetina: true,
                });
            };

            const theme = localStorage.getItem('theme') || 'dark';
            await loadParticles(theme === 'dark');

            // Listen for theme changes to reload particles
            window.addEventListener('theme-changed', async (e) => {
                const isDark = e.detail === 'dark';
                await loadParticles(isDark);
            });
        });
    </script>
    <x-chatbot />
</body>
</html>
