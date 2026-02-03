@props(['projects'])

<!-- Projects Section -->
<section id="projects" class="py-24 bg-white dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 scroll-animate text-gray-900 dark:text-white">Featured Projects</h2>
            <div class="w-20 h-1.5 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full mx-auto mb-6 scroll-animate"></div>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto scroll-animate">
                Here are some of the projects I've worked on. Each one was an opportunity to learn and implement new technologies.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects as $project)
            <div class="group bg-white dark:bg-gray-800 rounded-xl overflow-hidden border border-gray-300 dark:border-gray-700 transition-all duration-200 transform hover:-translate-y-1 hover:-translate-x-1 flex flex-col h-full scroll-animate hover:shadow-[6px_6px_0px_0px_#06b6d4] dark:hover:shadow-[6px_6px_0px_0px_#22d3ee]" style="animation-delay: {{ $loop->index * 100 }}ms;">
                
                <!-- Project Image / Placeholder -->
                <div class="relative aspect-video w-full overflow-hidden bg-gray-900 group border-b border-gray-100 dark:border-gray-700">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    @else
                        <!-- Stylish Placeholder Pattern -->
                        <div class="w-full h-full bg-gray-50 dark:bg-[#111827] relative flex items-center justify-center overflow-hidden transition-colors duration-300">
                            <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#06b6d4_1px,transparent_1px)] [background-size:16px_16px]"></div>
                            <div class="w-16 h-16 rounded-xl bg-gradient-to-tr from-cyan-500 to-blue-600 flex items-center justify-center text-white text-2xl font-bold shadow-lg z-10">
                                {{ substr($project->title, 0, 1) }}
                            </div>
                        </div>
                    @endif
                    
                    <!-- Overlay with Links -->
                    <div class="absolute inset-0 bg-gray-900/90 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4 backdrop-blur-sm z-20">
                        @if($project->github_link)
                        <a href="{{ $project->github_link }}" target="_blank" class="p-3 bg-gray-800 rounded-full hover:bg-white hover:text-gray-900 transition-colors transform hover:scale-110 border border-gray-700" title="View Code">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                        </a>
                        @endif
                        
                        <!-- View Details Button -->
                        <a href="{{ route('projects.show', $project->slug) }}" class="p-3 bg-white text-gray-900 rounded-full hover:bg-gray-100 transition-colors transform hover:scale-110 shadow-lg" title="View Details">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                        </a>

                        @if($project->live_link)
                        <a href="{{ $project->live_link }}" target="_blank" class="p-3 bg-cyan-600 rounded-full hover:bg-cyan-500 text-white transition-colors transform hover:scale-110 shadow-lg shadow-cyan-500/30" title="Live Preview">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                        </a>
                        @endif
                    </div>
                </div>

                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-colors">{{ $project->title }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-6 line-clamp-3 leading-relaxed flex-grow">
                        {{ $project->description }}
                    </p>

                    <!-- Tech Stack Badges -->
                    <div class="flex flex-wrap gap-2 mt-auto">
                        @if(is_array($project->tech_stack))
                            @foreach($project->tech_stack as $tech)
                            <span class="px-3 py-1 text-xs font-medium rounded-full bg-cyan-50/50 dark:bg-gray-700/50 text-cyan-600 dark:text-cyan-300 border border-cyan-100 dark:border-cyan-500/20 hover:bg-cyan-100 dark:hover:bg-cyan-900/30 transition-colors">
                                {{ $tech }}
                            </span>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500">No projects found. Please add some projects to your portfolio.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
