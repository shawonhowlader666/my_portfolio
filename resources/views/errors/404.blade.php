<x-layout title="Page Not Found | Shawon" description="The page you are looking for does not exist.">
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-50 dark:bg-[#050B14] relative overflow-hidden transition-colors duration-300">
        
        <!-- Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="z-10 text-center px-4">
            <!-- Glitch 404 Text -->
            <h1 class="text-9xl font-black text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-600 dark:from-cyan-400 dark:to-blue-500 animate-pulse relative inline-block">
                404
            </h1>
            
            <h2 class="text-2xl md:text-4xl font-bold text-gray-900 dark:text-white mt-8 mb-4">
                Lost in Space?
            </h2>
            
            <p class="text-gray-600 dark:text-gray-400 max-w-lg mx-auto mb-10 text-lg">
                The page you are looking for seems to have drifted into a black hole or never existed in this timeline.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('home') }}" class="px-8 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold hover:shadow-lg hover:shadow-cyan-500/25 transition-all transform hover:-translate-y-1">
                    Return to Earth (Home)
                </a>
            </div>
        </div>

        <!-- Floating Astronaut (Optional, using simple shapes if image not available or just code) -->
        <div class="absolute bottom-20 opacity-20 dark:opacity-40 animate-bounce" style="animation-duration: 4s;">
            <svg class="w-24 h-24 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/>
            </svg>
        </div>

    </div>
</x-layout>
