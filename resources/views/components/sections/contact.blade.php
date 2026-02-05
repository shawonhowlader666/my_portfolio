<!-- Contact Section (Top Half of Reference Image) -->
<section id="contact" class="py-16 bg-gray-50 dark:bg-[#0B1120] text-gray-900 dark:text-white relative overflow-hidden transition-colors duration-300">
    <!-- Green Dot Decoration -->
    <div class="absolute top-12 left-8 md:left-20 flex items-center gap-2">
        <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
        <span class="text-sm font-medium tracking-wide text-gray-400 uppercase">Build Everything</span>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 scroll-trigger-group">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            
            <!-- Left Side: Text & Info -->
            <div class="space-y-12 scroll-animate-left" style="animation-delay: 0ms !important;">
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold leading-tight mb-6 text-gray-900 dark:text-white">
                        Let's discuss about your project and take it the next level.
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-400">
                    <div>
                        <p class="text-sm font-semibold text-gray-500 uppercase mb-1">Phone</p>
                        <p class="text-gray-900 dark:text-white hover:text-cyan-600 dark:hover:text-cyan-400 transition-colors cursor-pointer">+880 1606-352642</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-500 uppercase mb-1">Email</p>
                        <p class="text-gray-900 dark:text-white hover:text-cyan-600 dark:hover:text-cyan-400 transition-colors cursor-pointer">shawonhawlader1044@gmail.com</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-500 uppercase mb-1">Location</p>
                        <p class="text-gray-900 dark:text-white">Khulna, Bangladesh</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-500 uppercase mb-1">Availability</p>
                        <p class="text-gray-900 dark:text-white">Sat - Thu, 9AM - 10PM</p>
                    </div>
                </div>

                <!-- Trusted By -->
                <div class="pt-4">
                    <p class="text-sm font-semibold text-gray-500 uppercase mb-4">Trusted by</p>
                    <div class="flex items-center gap-5">
                        <a href="mailto:shawonhawlader1044@gmail.com" class="hover:scale-110 transition-transform"><i class="devicon-google-plain text-2xl text-gray-400 hover:text-blue-500 transition-colors duration-300 cursor-pointer"></i></a>
                        <a href="https://www.linkedin.com/in/md-shaown-a72124306/" target="_blank" class="hover:scale-110 transition-transform"><i class="devicon-linkedin-plain text-2xl text-gray-400 hover:text-blue-600 transition-colors duration-300 cursor-pointer"></i></a>
                        <a href="#" class="hover:scale-110 transition-transform"><i class="devicon-twitter-original text-2xl text-gray-400 hover:text-sky-500 transition-colors duration-300 cursor-pointer"></i></a>
                        <a href="https://www.facebook.com/Shawon104491" target="_blank" class="hover:scale-110 transition-transform"><i class="devicon-facebook-plain text-2xl text-gray-400 hover:text-blue-600 transition-colors duration-300 cursor-pointer"></i></a>
                    </div>
                </div>
            </div>

            <!-- Right Side: White Form Card -->
            <div class="bg-white dark:bg-gray-800 text-gray-900 dark:text-white p-8 rounded-lg shadow-2xl relative z-10 transition-colors duration-300 scroll-animate-right" style="animation-delay: 0ms !important;">
                <h3 class="text-2xl font-bold mb-6">Start the project</h3>
                
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                    @csrf
                    
                    <!-- 🍯 Honeypot Field (Bot Trap - Hidden from humans) -->
                    <div style="position: absolute; left: -9999px; top: -9999px;" aria-hidden="true">
                        <input type="text" name="website" tabindex="-1" autocomplete="off" placeholder="Leave empty">
                    </div>
                    
                    @if(session('success'))
                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                // Trigger Confetti Celebration
                                const duration = 3000;
                                const animationEnd = Date.now() + duration;
                                const defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 9999 };

                                function randomInRange(min, max) {
                                  return Math.random() * (max - min) + min;
                                }

                                const interval = setInterval(function() {
                                  const timeLeft = animationEnd - Date.now();

                                  if (timeLeft <= 0) {
                                    return clearInterval(interval);
                                  }

                                  const particleCount = 50 * (timeLeft / duration);
                                  confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 } }));
                                  confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 } }));
                                }, 250);

                                Swal.fire({
                                    title: 'Success!',
                                    text: "{{ session('success') }}",
                                    icon: 'success',
                                    confirmButtonText: 'Great!',
                                    confirmButtonColor: '#2563eb',
                                    padding: '2em',
                                    background: document.documentElement.classList.contains('dark') ? '#1f2937' : '#fff',
                                    color: document.documentElement.classList.contains('dark') ? '#fff' : '#1f2937',
                                });
                            });
                        </script>
                    @endif
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-1 group">
                                <label for="name" class="text-xs font-semibold text-gray-500 uppercase transition-all duration-300 group-focus-within:text-gray-300 group-focus-within:scale-110 origin-left block">Name</label>
                                <input type="text" id="name" name="name" placeholder="Your Name" required autocomplete="name" class="w-full px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 text-gray-900 dark:text-white focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all">
                            </div>
                            <div class="space-y-1 group">
                                <label for="phone" class="text-xs font-semibold text-gray-500 uppercase transition-all duration-300 group-focus-within:text-gray-300 group-focus-within:scale-110 origin-left block">Phone</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-medium group-focus-within:text-gray-300 transition-colors">+880</span>
                                    <input type="text" id="phone" name="phone" placeholder="" autocomplete="tel" class="w-full pl-16 pr-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 text-gray-900 dark:text-white focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all">
                                </div>
                            </div>
                        </div>

                        <div class="space-y-1 group">
                            <label for="email" class="text-xs font-semibold text-gray-500 uppercase transition-all duration-300 group-focus-within:text-gray-300 group-focus-within:scale-110 origin-left block">Email</label>
                            <input type="email" id="email" name="email" placeholder="shawon@example.com" required autocomplete="email" class="w-full px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 text-gray-900 dark:text-white focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all">
                        </div>

                        <div class="space-y-1 group">
                            <label for="message" class="text-xs font-semibold text-gray-500 uppercase transition-all duration-300 group-focus-within:text-gray-300 group-focus-within:scale-110 origin-left block">Project Details</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tell me about your project..." required class="w-full px-4 py-2 rounded-md bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 text-gray-900 dark:text-white focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all resize-none"></textarea>
                        </div>

                        <div class="flex items-start gap-2 pt-2">
                            <input type="checkbox" name="terms" id="terms" required class="mt-1 w-4 h-4 rounded border-gray-300 text-cyan-600 focus:ring-cyan-500 transition-all">
                            <label for="terms" class="text-sm text-gray-500 dark:text-gray-400">
                                I agree to the <a href="{{ route('terms') }}" target="_blank" class="text-cyan-600 dark:text-cyan-400 hover:underline">Terms and Conditions</a> and <a href="{{ route('privacy') }}" target="_blank" class="text-cyan-600 dark:text-cyan-400 hover:underline">Privacy Policy</a>.
                            </label>
                        </div>
                        <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-md shadow-lg shadow-blue-500/30 transition-all transform hover:-translate-y-1">
                            Submit Inquiry
                        </button>
                    </form>
            </div>

        </div>
    </div>
</section>
