<x-layout :title="$project->title . ' - Project Details'" :description="$project->description" :image="$project->image">
    <!-- Hero Section for Project -->
    <div class="relative pt-32 pb-20 overflow-hidden bg-gray-50 dark:bg-[#050B14] transition-colors duration-300">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl opacity-50"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl opacity-50"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Breadcrumb -->
            <nav class="flex mb-8 text-sm font-medium text-gray-500 dark:text-gray-400">
                <a href="{{ route('home') }}" class="hover:text-cyan-600 transition-colors">Home</a>
                <span class="mx-2">/</span>
                <a href="{{ route('home') }}#projects" class="hover:text-cyan-600 transition-colors">Projects</a>
                <span class="mx-2">/</span>
                <span class="text-cyan-600 dark:text-cyan-500 truncate max-w-[200px]">{{ $project->title }}</span>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Project Text -->
                <div class="animate-fade-in-up">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                        {{ $project->title }}
                    </h1>
                    <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed mb-8 text-justify">
                        {{ $project->description }}
                    </p>

                    <!-- Tech Stack -->
                    <div class="mb-8">
                        <h3 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-4">Technologies Used</h3>
                        <div class="flex flex-wrap gap-2">
                            @if(is_array($project->tech_stack))
                                @foreach($project->tech_stack as $tech)
                                    <span class="px-3 py-1 text-sm font-medium rounded-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-300 shadow-sm">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-4">
                        @if($project->live_link)
                            <a href="{{ $project->live_link }}" target="_blank" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold rounded-xl shadow-lg hover:shadow-cyan-500/30 transition-all transform hover:-translate-y-1">
                                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                Live Preview
                            </a>
                        @endif

                        @if($project->github_link)
                            <a href="{{ $project->github_link }}" target="_blank" class="inline-flex items-center px-6 py-3 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-900 dark:text-white font-bold rounded-xl hover:bg-gray-50 dark:hover:bg-gray-700 transition-all transform hover:-translate-y-1">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                View Source
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Project Image -->
                <div class="relative group animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="absolute -inset-1 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-2xl blur opacity-30 group-hover:opacity-75 transition duration-1000"></div>
                    <div class="relative bg-gray-900 rounded-xl overflow-hidden shadow-2xl aspect-video">
                        @if($project->image)
                            <img src="{{ Str::startsWith($project->image, 'images/') ? asset($project->image) : asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700">
                        @else
                            <div class="w-full h-full bg-gray-800 flex items-center justify-center">
                                <div class="text-center">
                                    <h4 class="text-4xl font-bold text-gray-700 bg-clip-text text-transparent bg-gradient-to-r from-gray-600 to-gray-500">{{ substr($project->title, 0, 1) }}</h4>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
