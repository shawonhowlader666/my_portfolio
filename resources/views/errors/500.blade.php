<x-layout title="500 - Server Error" description="Something went wrong on our end.">
    <div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-[#050B14] transition-colors duration-300">
        <div class="text-center px-4">
            <h1 class="text-9xl font-bold text-gray-200 dark:text-gray-800 animate-pulse">500</h1>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Server Error</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-8 max-w-md mx-auto">
                        Oops! Something went wrong on our servers. We are working to fix this immediately.
                    </p>
                    <a href="{{ route('home') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-full font-semibold hover:shadow-lg hover:scale-105 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
