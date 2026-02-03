<!-- Footer Section (Bottom Half of Reference Image) -->
<footer class="bg-white dark:bg-[#050B14] text-gray-900 dark:text-white border-t border-gray-200 dark:border-gray-800 transition-colors duration-300">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 divide-y lg:divide-y-0 lg:divide-x divide-gray-200 dark:divide-gray-800 scroll-trigger-group">
            
            <!-- Column 1: Map -->
            <div class="pt-16 h-full w-full">
                <div class="space-y-4 scroll-animate">
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white pl-4">Find Me</h4>
                    <div class="overflow-hidden transition-all duration-700 w-full h-[320px] rounded-r-xl shadow-lg">
                    <iframe src="https://maps.google.com/maps?q=Shiv+bari+Shri+shri+Kali+Temple+Khulna&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-full block">
                    </iframe>
                    </div>
                </div>
            </div>

            <!-- Column 2: Support & Contact -->
            <div class="py-16 px-4 sm:px-6 lg:px-12">
                <div class="space-y-10 scroll-animate">
                <div>
                    <h4 class="text-lg font-bold mb-6">Contact Info</h4>
                    <div class="space-y-4">
                        <div>
                            <p class="text-xs font-semibold text-gray-500 uppercase mb-1">Phone</p>
                            <a href="tel:+8801606352642" class="text-lg hover:text-blue-600 transition-colors">+880 1606-352642</a>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-500 uppercase mb-1">Email</p>
                            <a href="mailto:shawonhawlader1044@gmail.com" class="text-lg text-gray-700 dark:text-gray-300 hover:text-blue-600 transition-colors">shawonhawlader1044@gmail.com</a>
                        </div>
                    </div>
                </div>

                <div class="flex gap-4">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/Shawon104491" target="_blank" class="w-10 h-10 bg-gray-100 dark:bg-gray-800 flex items-center justify-center rounded transition hover:bg-blue-600 text-gray-600 dark:text-gray-400 hover:text-white">
                        <i class="devicon-facebook-plain"></i>
                    </a>
                    <!-- GitHub (Replaced Twitter) -->
                    <a href="https://github.com/Error000000000" target="_blank" class="w-10 h-10 bg-gray-100 dark:bg-gray-800 flex items-center justify-center rounded transition hover:bg-black text-gray-600 dark:text-gray-400 hover:text-white">
                        <i class="devicon-github-original"></i>
                    </a>
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/md-shaown-a72124306/" target="_blank" class="w-10 h-10 bg-gray-100 dark:bg-gray-800 flex items-center justify-center rounded transition hover:bg-blue-700 text-gray-600 dark:text-gray-400 hover:text-white">
                        <i class="devicon-linkedin-plain"></i>
                    </a>
                </div>
                </div>
            </div>

            <!-- Column 3: Newsletter -->
            <div class="py-16 px-4 sm:px-6 lg:px-12">
                <div class="space-y-8 scroll-animate">
                <div>
                    <h4 class="text-lg font-bold mb-2">Detailed Updates</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Subscribe to get the latest updates on my projects, skills, and new technologies I'm working with.
                    </p>
                </div>

                <form action="{{ route('subscribe') }}" method="POST" class="flex gap-0">
                    @csrf
                    <div class="relative flex-grow">
                        <input type="email" name="email" required placeholder="Email Address*" class="w-full px-4 py-3 bg-gray-50 dark:bg-white text-gray-900 placeholder-gray-500 rounded-l-md focus:outline-none border border-gray-200 dark:border-transparent">
                    </div>
                    <button type="submit" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-r-md transition-colors">
                        Subscribe
                    </button>
                </form>
                
                @if(session('success'))
                    <p class="text-green-500 text-sm mt-2">{{ session('success') }}</p>
                @endif
                @if(session('error'))
                    <p class="text-red-500 text-sm mt-2">{{ session('error') }}</p>
                @endif
                @if ($errors->any())
                    <div class="text-red-500 text-sm mt-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                </div>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-200 dark:border-gray-800 py-8 px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-medium text-gray-500 uppercase tracking-wider scroll-animate" style="animation-delay: 300ms;">
            <div class="flex gap-6">
                <a href="#about" class="hover:text-blue-600 dark:hover:text-white transition-colors">About</a>
                <a href="#skills" class="hover:text-blue-600 dark:hover:text-white transition-colors">Skills</a>
                <a href="#portfolio" class="hover:text-blue-600 dark:hover:text-white transition-colors">Portfolio</a>
                <a href="#projects" class="hover:text-blue-600 dark:hover:text-white transition-colors">projects</a>
                <a href="#contact" class="hover:text-blue-600 dark:hover:text-white transition-colors">Contact</a>
            </div>
            <p>© {{ date('Y') }} Shawon. All rights reserved.</p>
        </div>
    </div>
</footer>
