<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
    <!-- Background Glows -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl opacity-30 animate-pulse"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl opacity-30 animate-pulse" style="animation-delay: 2s;"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
        <span :class="loaded ? 'animate-fade-in-down' : 'opacity-0'" class="inline-block py-1 px-3 rounded-full bg-cyan-100 dark:bg-cyan-500/10 border border-cyan-200 dark:border-cyan-500/20 text-cyan-700 dark:text-cyan-400 text-sm font-medium mb-6">
            Available for Freelance & Remote Work
        </span>
        <h1 :class="loaded ? 'animate-fade-in-up' : 'opacity-0'" class="text-5xl md:text-7xl font-bold tracking-tight mb-8 leading-tight text-gray-900 dark:text-gray-100" style="animation-delay: 0.1s;">
            Hi! I'm <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-500 to-blue-600 dark:from-cyan-400 dark:to-blue-500">Shawon Howlader</span><br>
            Software Engineer.
        </h1>
        <p :class="loaded ? 'animate-fade-in-up' : 'opacity-0'" class="mt-4 text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto mb-10" style="animation-delay: 0.2s;">
            Full Stack Web Developer specializing in PHP, Laravel, and Modern UI/UX. I build scalable software solutions and high-performance web applications.
        </p>
        <div :class="loaded ? 'animate-fade-in-up' : 'opacity-0'" class="flex flex-col items-center gap-8" style="animation-delay: 0.3s;">
            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-5">
                <!-- Download Resume (Solid Gradient) -->
                <a href="/images/resume.pdf" download class="group relative inline-flex items-center justify-center px-8 py-3.5 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-semibold hover:shadow-lg hover:shadow-cyan-500/25 transition-all duration-300 hover:-translate-y-1 gap-2">
                    <span>My Resume</span>
                    <svg class="w-5 h-5 group-hover:animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                </a>

                <!-- Contact Me (Transparent with Gradient Border) -->
                <a href="#contact" class="group relative inline-flex items-center justify-center px-8 py-3.5 rounded-xl border border-gray-300 dark:border-white/20 bg-white dark:bg-transparent text-gray-700 dark:text-gray-300 font-medium hover:text-gray-900 dark:hover:text-white hover:border-gray-400 dark:hover:border-white/50 transition-all duration-300 hover:-translate-y-1 overflow-hidden gap-2 shadow-sm dark:shadow-none">
                    <!-- Top Highlight -->
                    <div class="absolute inset-x-0 top-0 h-[1px] bg-gradient-to-r from-transparent via-gray-400/50 dark:via-white/50 to-transparent group-hover:via-gray-900 dark:group-hover:via-white transition-all"></div>
                    <span>Hire Me</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                    </svg>
                </a>
            </div>

            <!-- Social Links (Hero Style) -->
            <div class="flex items-center justify-center sm:justify-start gap-6 mt-8 flex-wrap">
                
                <!-- GitHub (Gray) -->
                <a href="https://github.com/shawonhowlader666" target="_blank" class="group relative w-16 h-16 rounded-xl p-[1px] bg-gradient-to-b from-gray-500 to-transparent hover:from-white transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-black/50" title="GitHub">
                    <div class="h-full w-full bg-white dark:bg-gray-900 rounded-[11px] flex items-center justify-center group-hover:bg-gray-50 dark:group-hover:bg-gray-800/80 transition-colors">
                        <svg class="w-8 h-8 text-gray-700 dark:text-white transition-transform duration-300 group-hover:scale-110" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </div>
                </a>
                
                <!-- LinkedIn (Blue) -->
                <a href="https://www.linkedin.com/in/md-shaown-a72124306/" target="_blank" class="group relative w-16 h-16 rounded-xl p-[1px] bg-gradient-to-b from-[#0077b5]/60 to-transparent hover:from-[#0077b5] transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-black/50" title="LinkedIn">
                    <div class="h-full w-full bg-white dark:bg-gray-900 rounded-[11px] flex items-center justify-center group-hover:bg-blue-50 dark:group-hover:bg-gray-800/80 transition-colors">
                        <svg class="w-8 h-8 text-[#0077b5] transition-transform duration-300 group-hover:scale-110" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </div>
                </a>

                <!-- Facebook (Blue) -->
                <a href="https://www.facebook.com/Shawon104491" target="_blank" class="group relative w-16 h-16 rounded-xl p-[1px] bg-gradient-to-b from-[#1877F2]/60 to-transparent hover:from-[#1877F2] transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-black/50" title="Facebook">
                    <div class="h-full w-full bg-white dark:bg-gray-900 rounded-[11px] flex items-center justify-center group-hover:bg-blue-50 dark:group-hover:bg-gray-800/80 transition-colors">
                        <svg class="w-8 h-8 text-[#1877F2] transition-transform duration-300 group-hover:scale-110" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </div>
                </a>

                <!-- Fiverr (Green) -->
                <a href="https://www.fiverr.com/xoxo60?public_mode=true" target="_blank" class="group relative w-16 h-16 rounded-xl p-[1px] bg-gradient-to-b from-[#1DBF73]/60 to-transparent hover:from-[#1DBF73] transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-black/50" title="Fiverr">
                    <div class="h-full w-full bg-white dark:bg-gray-900 rounded-[11px] flex items-center justify-center group-hover:bg-green-50 dark:group-hover:bg-gray-800/80 transition-colors">
                        <svg class="w-10 h-10 text-[#1DBF73] transition-transform duration-300 group-hover:scale-110" viewBox="0 0 24 24" fill="currentColor">
                            <!-- Fiverr Wordmark -->
                            <path d="M23.004 15.588a.995.995 0 1 0 .002-1.99.995.995 0 0 0-.002 1.99zm-.996-3.705h-.85c-.546 0-.84.41-.84 1.092v2.466h-1.61v-3.558h-.684c-.547 0-.84.41-.84 1.092v2.466h-1.61v-4.874h1.61v.74c.264-.574.626-.74 1.163-.74h1.972v.74c.264-.574.625-.74 1.162-.74h.527v1.316zm-6.786 1.501h-3.359c.088.546.43.858 1.006.858.43 0 .732-.175.83-.487l1.425.4c-.351.848-1.22 1.364-2.255 1.364-1.748 0-2.549-1.355-2.549-2.515 0-1.14.703-2.505 2.45-2.505 1.856 0 2.471 1.384 2.471 2.408 0 .224-.01.37-.02.477zm-1.562-.945c-.04-.42-.342-.81-.889-.81-.508 0-.81.225-.908.81h1.797zM7.508 15.44h1.416l1.767-4.874h-1.62l-.86 2.837-.878-2.837H5.72l1.787 4.874zm-6.6 0H2.51v-3.558h1.524v3.558h1.591v-4.874H2.51v-.302c0-.332.235-.536.606-.536h.918V8.412H2.85c-1.162 0-1.943.712-1.943 1.755v.4H0v1.316h.908v3.558z"/>
                        </svg>
                    </div>
                </a>

                <!-- Upwork (Green) -->
                <a href="https://www.upwork.com/freelancers/~015b5d3298328573ad?viewMode=1" target="_blank" class="group relative w-16 h-16 rounded-xl p-[1px] bg-gradient-to-b from-[#14A800]/60 to-transparent hover:from-[#14A800] transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-black/50" title="Upwork">
                    <div class="h-full w-full bg-white dark:bg-gray-900 rounded-[11px] flex items-center justify-center group-hover:bg-green-50 dark:group-hover:bg-gray-800/80 transition-colors">
                        <svg class="w-8 h-8 text-[#14A800] transition-transform duration-300 group-hover:scale-110" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.561 13.158c-1.102 0-2.135-.467-3.074-1.227l.228-1.076.008-.042c.207-1.143.849-3.06 2.839-3.06 1.492 0 2.703 1.212 2.703 2.703-.001 1.489-1.212 2.702-2.704 2.702zm0-8.14c-2.539 0-4.51 1.649-5.31 4.366-1.22-1.834-2.148-4.036-2.687-5.892H7.828v7.112c-.002 1.406-1.141 2.546-2.547 2.548-1.405-.002-2.543-1.143-2.545-2.548V3.492H0v7.112c0 2.914 2.37 5.303 5.281 5.303 2.913 0 5.283-2.389 5.283-5.303v-1.19c.529 1.107 1.182 2.229 1.974 3.221l-1.673 7.873h2.797l1.213-5.71c1.063.679 2.285 1.109 3.686 1.109 3 0 5.439-2.452 5.439-5.45 0-3-2.439-5.439-5.439-5.439z"/>
                        </svg>
                    </div>
                </a>

                <!-- WhatsApp (Green) -->
                <a href="https://wa.me/8801606352642" target="_blank" class="group relative w-16 h-16 rounded-xl p-[1px] bg-gradient-to-b from-[#25D366]/60 to-transparent hover:from-[#25D366] transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-black/50" title="WhatsApp">
                    <div class="h-full w-full bg-white dark:bg-gray-900 rounded-[11px] flex items-center justify-center group-hover:bg-green-50 dark:group-hover:bg-gray-800/80 transition-colors">
                        <svg class="w-8 h-8 text-[#25D366] transition-transform duration-300 group-hover:scale-110" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
