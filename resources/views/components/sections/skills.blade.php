<section id="skills" class="py-16 bg-gray-50 dark:bg-gray-950 transition-colors duration-300">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center scroll-animate text-gray-900 dark:text-white">My Technical Skills</h2>
        <div class="w-20 h-1.5 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full mx-auto mb-16 scroll-animate"></div>

        <div class="space-y-12">
            <!-- Frontend Development -->
            <div class="scroll-animate" style="animation-delay: 0.1s;">
                <div class="flex items-center gap-4 mb-8">
                    <div class="h-10 w-1.5 bg-gradient-to-b from-cyan-400 to-blue-600 rounded-full"></div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white tracking-wide">
                        Frontend Development
                    </h3>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach($skills->where('category', 'frontend') as $skill)
                    <div class="bg-white dark:bg-gray-900 rounded-xl p-6 border border-gray-200 dark:border-gray-800 hover:border-cyan-500/50 hover:shadow-lg hover:shadow-cyan-500/10 transition-all duration-300 group shadow-sm dark:shadow-none">
                        <div class="flex justify-between items-end mb-3">
                            <div class="flex items-center gap-4">
                                <!-- Original SVG Icons -->
                                @if(str_contains(strtolower($skill->name), 'html'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" class="w-10 h-10" alt="HTML5">
                                @elseif(str_contains(strtolower($skill->name), 'css'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" class="w-10 h-10" alt="CSS3">
                                @elseif(str_contains(strtolower($skill->name), 'javascript'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="w-10 h-10" alt="JavaScript">
                                @elseif(str_contains(strtolower($skill->name), 'react'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-10 h-10 animate-spin-slow" alt="React">
                                @elseif(str_contains(strtolower($skill->name), 'tailwind'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg" class="w-10 h-10" alt="Tailwind">
                                @elseif(str_contains(strtolower($skill->name), 'bootstrap'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" class="w-10 h-10" alt="Bootstrap">
                                @else
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/chrome/chrome-original.svg" class="w-10 h-10" alt="Web">
                                @endif
                                <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-200 group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-colors">{{ $skill->name }}</h4>
                            </div>
                            <span class="text-cyan-600 dark:text-cyan-500 font-bold font-mono">{{ $skill->proficiency }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-gray-700/50 rounded-full h-2.5 overflow-hidden" x-data="{ width: '0%' }" x-intersect.once="width = '{{ $skill->proficiency }}%'">
                            <div class="bg-gradient-to-r from-cyan-400 to-blue-600 h-full rounded-full group-hover:shadow-[0_0_10px_rgba(34,211,238,0.5)] transition-all duration-1000 ease-out" :style="'width: ' + width"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Backend Development -->
            <div class="scroll-animate" style="animation-delay: 0.2s;">
                 <div class="flex items-center gap-4 mb-8 mt-12">
                    <div class="h-10 w-1.5 bg-gradient-to-b from-cyan-400 to-blue-600 rounded-full"></div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white tracking-wide">
                        Backend Development
                    </h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach($skills->where('category', 'backend') as $skill)
                    <div class="bg-white dark:bg-gray-900 rounded-xl p-6 border border-gray-200 dark:border-gray-800 hover:border-cyan-500/50 hover:shadow-lg hover:shadow-cyan-500/10 transition-all duration-300 group shadow-sm dark:shadow-none">
                        <div class="flex justify-between items-end mb-3">
                            <div class="flex items-center gap-4">
                                <!-- Original SVG Icons -->
                                @if(str_contains(strtolower($skill->name), 'laravel'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" class="w-10 h-10" alt="Laravel">
                                @elseif(str_contains(strtolower($skill->name), 'php'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" class="w-10 h-10" alt="PHP">
                                @elseif(str_contains(strtolower($skill->name), 'node'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" class="w-10 h-10" alt="NodeJS">
                                @elseif(str_contains(strtolower($skill->name), 'express'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/express/express-original.svg" class="w-10 h-10 bg-white rounded-full p-1" alt="Express">
                                @elseif(str_contains(strtolower($skill->name), 'mysql'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" class="w-10 h-10" alt="MySQL">
                                @elseif(str_contains(strtolower($skill->name), 'firebase'))
                                    <img src="https://www.vectorlogo.zone/logos/firebase/firebase-icon.svg" class="w-10 h-10" alt="Firebase">
                                @else
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg" class="w-10 h-10" alt="Linux">
                                @endif
                                <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-200 group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-colors">{{ $skill->name }}</h4>
                            </div>
                            <span class="text-cyan-600 dark:text-cyan-500 font-bold font-mono">{{ $skill->proficiency }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-gray-700/50 rounded-full h-2.5 overflow-hidden" x-data="{ width: '0%' }" x-intersect.once="width = '{{ $skill->proficiency }}%'">
                            <div class="bg-gradient-to-r from-cyan-400 to-blue-600 h-full rounded-full group-hover:shadow-[0_0_10px_rgba(34,211,238,0.5)] transition-all duration-1000 ease-out" :style="'width: ' + width"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

             <!-- Programming Languages -->
            <div class="scroll-animate" style="animation-delay: 0.3s;">
                 <div class="flex items-center gap-4 mb-8 mt-12">
                    <div class="h-10 w-1.5 bg-gradient-to-b from-cyan-400 to-blue-600 rounded-full"></div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white tracking-wide">
                        Programming Languages
                    </h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach($skills->where('category', 'programming') as $skill)
                    <div class="bg-white dark:bg-gray-900 rounded-xl p-6 border border-gray-200 dark:border-gray-800 hover:border-cyan-500/50 hover:shadow-lg hover:shadow-cyan-500/10 transition-all duration-300 group shadow-sm dark:shadow-none">
                        <div class="flex justify-between items-end mb-3">
                            <div class="flex items-center gap-4">
                                <!-- Original SVG Icons -->
                                @if($skill->name === 'C')
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/c/c-original.svg" class="w-10 h-10" alt="C">
                                @elseif(str_contains(strtolower($skill->name), 'c++'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg" class="w-10 h-10" alt="C++">
                                @elseif(str_contains(strtolower($skill->name), 'python'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" class="w-10 h-10" alt="Python">
                                @elseif(str_contains(strtolower($skill->name), 'java'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" class="w-10 h-10" alt="Java">
                                @else
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bash/bash-original.svg" class="w-10 h-10" alt="Code">
                                @endif
                                <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-200 group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-colors">{{ $skill->name }}</h4>
                            </div>
                            <span class="text-cyan-600 dark:text-cyan-500 font-bold font-mono">{{ $skill->proficiency }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-gray-700/50 rounded-full h-2.5 overflow-hidden" x-data="{ width: '0%' }" x-intersect.once="width = '{{ $skill->proficiency }}%'">
                            <div class="bg-gradient-to-r from-cyan-400 to-blue-600 h-full rounded-full group-hover:shadow-[0_0_10px_rgba(34,211,238,0.5)] transition-all duration-1000 ease-out" :style="'width: ' + width"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Mobile App Development -->
            <div class="scroll-animate" style="animation-delay: 0.4s;">
                 <div class="flex items-center gap-4 mb-8 mt-12">
                    <div class="h-10 w-1.5 bg-gradient-to-b from-cyan-400 to-blue-600 rounded-full"></div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white tracking-wide">
                        Mobile App Development
                    </h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach($skills->where('category', 'mobile') as $skill)
                    <div class="bg-white dark:bg-gray-900 rounded-xl p-6 border border-gray-200 dark:border-gray-800 hover:border-cyan-500/50 hover:shadow-lg hover:shadow-cyan-500/10 transition-all duration-300 group shadow-sm dark:shadow-none">
                        <div class="flex justify-between items-end mb-3">
                            <div class="flex items-center gap-4">
                                <!-- Original SVG Icons -->
                                @if(str_contains(strtolower($skill->name), 'flutter'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" class="w-10 h-10" alt="Flutter">
                                @elseif(str_contains(strtolower($skill->name), 'dart'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dart/dart-original.svg" class="w-10 h-10" alt="Dart">
                                @elseif(str_contains(strtolower($skill->name), 'react native'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-10 h-10" alt="React Native">
                                @else
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/android/android-original.svg" class="w-10 h-10" alt="Android">
                                @endif
                                <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-200 group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-colors">{{ $skill->name }}</h4>
                            </div>
                            <span class="text-cyan-600 dark:text-cyan-500 font-bold font-mono">{{ $skill->proficiency }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-gray-700/50 rounded-full h-2.5 overflow-hidden" x-data="{ width: '0%' }" x-intersect.once="width = '{{ $skill->proficiency }}%'">
                            <div class="bg-gradient-to-r from-cyan-400 to-blue-600 h-full rounded-full group-hover:shadow-[0_0_10px_rgba(34,211,238,0.5)] transition-all duration-1000 ease-out" :style="'width: ' + width"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Tools & Skills -->
            <div class="scroll-animate" style="animation-delay: 0.5s;">
                 <div class="flex items-center gap-4 mb-8 mt-12">
                    <div class="h-10 w-1.5 bg-gradient-to-b from-cyan-400 to-blue-600 rounded-full"></div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white tracking-wide">
                        Tools & Soft Skills
                    </h3>
                </div>

                <div class="flex flex-wrap gap-4">
                    @foreach($skills->whereIn('category', ['tools', 'soft']) as $skill)
                        {{-- Special Case: Split Git & GitHub into two separate buttons --}}
                        @if(str_contains(strtolower($skill->name), 'git') && str_contains(strtolower($skill->name), 'hub'))
                            <!-- Git Button -->
                            <div class="bg-white dark:bg-gray-900/50 px-6 py-3 rounded-lg border border-gray-200 dark:border-gray-800 hover:border-cyan-500/50 hover:bg-gray-50 dark:hover:bg-gray-800 transition-all duration-300 group cursor-default flex items-center gap-3 shadow-sm dark:shadow-none">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" class="w-8 h-8" alt="Git">
                                <span class="text-gray-700 dark:text-gray-300 font-medium group-hover:text-cyan-600 dark:group-hover:text-cyan-400 tracking-wide">Git</span>
                            </div>
                            <!-- GitHub Button -->
                            <div class="bg-white dark:bg-gray-900/50 px-6 py-3 rounded-lg border border-gray-200 dark:border-gray-800 hover:border-cyan-500/50 hover:bg-gray-50 dark:hover:bg-gray-800 transition-all duration-300 group cursor-default flex items-center gap-3 shadow-sm dark:shadow-none">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" class="w-8 h-8 bg-white rounded-full p-0.5" alt="GitHub">
                                <span class="text-gray-700 dark:text-gray-300 font-medium group-hover:text-cyan-600 dark:group-hover:text-cyan-400 tracking-wide">GitHub</span>
                            </div>
                        @else
                            {{-- Normal handling for other skills --}}
                            <div class="bg-white dark:bg-gray-900/50 px-6 py-3 rounded-lg border border-gray-200 dark:border-gray-800 hover:border-cyan-500/50 hover:bg-gray-50 dark:hover:bg-gray-800 transition-all duration-300 group cursor-default flex items-center gap-3 shadow-sm dark:shadow-none">
                                @if(str_contains(strtolower($skill->name), 'git'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" class="w-8 h-8" alt="Git">
                                
                                {{-- MS Office --}}
                                @elseif(str_contains(strtolower($skill->name), 'office') || str_contains(strtolower($skill->name), 'word') || str_contains(strtolower($skill->name), 'excel'))
                                     <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5 11.5H1.5V1.5H11.5V11.5Z" fill="#F25022"/>
                                        <path d="M22.5 11.5H12.5V1.5H22.5V11.5Z" fill="#7FBA00"/>
                                        <path d="M11.5 22.5H1.5V12.5H11.5V22.5Z" fill="#00A4EF"/>
                                        <path d="M22.5 22.5H12.5V12.5H22.5V22.5Z" fill="#FFB900"/>
                                    </svg>

                                {{-- VS Code --}}
                                @elseif(str_contains(strtolower($skill->name), 'code'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" class="w-8 h-8" alt="VS Code">
                                
                                {{-- Figma --}}
                                @elseif(str_contains(strtolower($skill->name), 'figma'))
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" class="w-8 h-8" alt="Figma">

                                {{-- Communication --}}
                                @elseif(str_contains(strtolower($skill->name), 'communicat'))
                                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="10" fill="#22d3ee" fill-opacity="0.2"/>
                                        <path d="M7 12H17M7 8H13M7 16H15" stroke="#22d3ee" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                
                                {{-- Teamwork --}}
                                @elseif(str_contains(strtolower($skill->name), 'team'))
                                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none">
                                        <circle cx="9" cy="7" r="4" fill="#3B82F6"/>
                                        <path d="M2 21V19C2 16.7909 3.79086 15 6 15H12C14.2091 15 16 16.7909 16 19V21" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"/>
                                        <circle cx="19" cy="9" r="3" fill="#10B981"/>
                                    </svg>

                                {{-- Problem Solving --}}
                                @elseif(str_contains(strtolower($skill->name), 'problem') || str_contains(strtolower($skill->name), 'solv'))
                                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none">
                                        <path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" stroke="#F59E0B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                {{-- Fallback --}}
                                @else
                                    <svg class="w-8 h-8 text-cyan-600 dark:text-cyan-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                @endif
                                
                                <span class="text-gray-700 dark:text-gray-300 font-medium group-hover:text-cyan-600 dark:group-hover:text-cyan-400 tracking-wide">{{ $skill->name }}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
