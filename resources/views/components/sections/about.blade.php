<!-- About Section -->
<section id="about" class="py-16 bg-white dark:bg-gray-900/50 relative transition-colors duration-300">
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="relative group flex justify-center md:justify-start items-start scroll-animate">
                <!-- Large Image Container -->
                <div class="relative w-full max-w-[350px] md:max-w-[450px]">
                    <!-- Soft Glow Effect -->
                    <div class="absolute -inset-2 bg-gradient-to-r from-cyan-500/80 to-blue-600/80 rounded-[2rem] blur-xl opacity-60 group-hover:opacity-90 transition duration-1000 group-hover:duration-200"></div>
                    
                    <!-- Main Image (Borderless) -->
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/profile.png') }}" 
                             alt="Shawon" 
                             class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out block">
                         
                         <!-- Soft Bottom Overlay -->
                         <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 via-transparent to-transparent opacity-50"></div>
                </div>
                    
                    <!-- Circular Rotating Text Badge -->
                    <div class="absolute -bottom-10 -right-10 md:-bottom-12 md:-right-12 z-20 w-32 h-32 md:w-40 md:h-40 flex items-center justify-center animate-fade-in-up" 
                         style="animation-delay: 0.5s;">
                        <div class="relative w-full h-full bg-white dark:bg-gray-950 rounded-full shadow-xl border border-gray-100 dark:border-gray-800 flex items-center justify-center">
                            <!-- Spinning Text SVG -->
                            <div class="absolute inset-0 animate-spin-slow w-full h-full p-2">
                                <svg viewBox="0 0 100 100" width="100%" height="100%" class="overflow-visible">
                                    <defs>
                                        <path id="circlePath" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" />
                                    </defs>
                                    <text font-size="11.5" font-weight="bold" letter-spacing="1.2">
                                        <textPath xlink:href="#circlePath" class="fill-gray-900 dark:fill-white uppercase" startOffset="0%">
                                            Full Stack Developer • Shawon •
                                        </textPath>
                                    </text>
                                </svg>
                            </div>
                            
                            <!-- Static Center Icon (Code Symbol) -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-12 h-12 rounded-full flex items-center justify-center shadow-lg z-10 overflow-hidden bg-gradient-to-tr from-cyan-500 to-blue-600">
                                    <img src="{{ asset('images/boy_laptop.png') }}" alt="Coding" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="scroll-animate">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900 dark:text-white">About Me</h2>
                    <div class="w-20 h-1.5 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full mb-8"></div>
                </div>
                
                <div class="scroll-animate">
                    <h3 class="text-xl font-bold text-cyan-600 dark:text-cyan-400 mb-4">Professional Summary</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-8 text-justify">
                        Recent graduate with a Bachelor of Science in Computer Science and Engineering, offering hands-on experience in full stack web development and database management. Skilled in <span class="text-gray-900 dark:text-white font-medium">PHP, Laravel, MySQL, HTML, CSS, Bootstrap, Tailwind, and Firebase</span> with a demonstrated ability to manage projects and enhance user experiences through responsive design and streamlined processes. Gained practical experience as a Customer Service Representative, improving service efficiency and client engagement. Eager to leverage technical skills and problem-solving abilities in a full-time position within a technology-driven environment.
                    </p>
                </div>

                <div class="mb-8 scroll-animate">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6">Education</h3>
                    <div class="space-y-8 border-l-2 border-cyan-500/30 pl-4">
                        <div class="relative">
                            <div class="absolute -left-[25px] top-1 w-4 h-4 bg-cyan-500 rounded-full"></div>
                            <h4 class="text-lg font-semibold text-cyan-600 dark:text-cyan-400">B.Sc. in Computer Science and Engineering</h4>
                            <p class="text-gray-700 dark:text-gray-300 font-medium">Northern University of Business and Technology, Khulna</p>
                            <span class="text-sm text-gray-500 block mb-1">Dec 2021 — Jan 2026</span>
                        </div>
                        <div class="relative">
                            <div class="absolute -left-[25px] top-1 w-4 h-4 bg-cyan-500 rounded-full"></div>
                            <h4 class="text-lg font-semibold text-cyan-600 dark:text-cyan-400">Higher Secondary Certificate (HSC) — Science</h4>
                            <p class="text-gray-700 dark:text-gray-300 font-medium">Khulna Model School & College, Khulna</p>
                            <span class="text-sm text-gray-500 block mb-1">June 2017 — June 2019</span>
                        </div>
                        <div class="relative">
                            <div class="absolute -left-[25px] top-1 w-4 h-4 bg-cyan-500 rounded-full"></div>
                            <h4 class="text-lg font-semibold text-cyan-600 dark:text-cyan-400">Secondary School Certificate (SSC) — Science</h4>
                            <p class="text-gray-700 dark:text-gray-300 font-medium">Mulghar Govt. High School, Khulna</p>
                            <span class="text-sm text-gray-500 block mb-1">Jan 2015 — Jan 2017</span>
                        </div>
                    </div>
                </div>

                <div class="mb-8 scroll-animate">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Additional Skills & Languages</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-50 dark:bg-gray-800/50 p-4 rounded-lg border border-gray-200 dark:border-white/5 shadow-sm dark:shadow-none">
                            <h5 class="text-cyan-600 dark:text-cyan-400 font-medium mb-2">Languages</h5>
                            <p class="text-gray-600 dark:text-gray-400">Fluent in English, Bengali, Hindi</p>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-800/50 p-4 rounded-lg border border-gray-200 dark:border-white/5 shadow-sm dark:shadow-none">
                            <h5 class="text-cyan-600 dark:text-cyan-400 font-medium mb-2">Personal Attributes</h5>
                            <p class="text-gray-600 dark:text-gray-400">Presentation Skills, Hardworking, Quick Learner, Adaptable, Team Player</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 3D Particle Sphere Source -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <!-- Sphere Container -->
    <div id="about-sphere" class="absolute left-0 top-[-180px] w-[600px] h-[600px] opacity-100 pointer-events-none z-0 hidden md:block"></div>

    <!-- Floating Experience Card (Levitating) -->
    <!-- Floating Experience Card (Levitating) -->
    <div class="hidden md:block absolute left-[5%] bottom-[10%] z-10 scroll-animate">
        <div class="flex bg-white/90 dark:bg-[#0B1120]/80 backdrop-blur-md p-4 pr-8 rounded-2xl border border-cyan-200 dark:border-cyan-500/30 shadow-lg dark:shadow-[0_0_30px_rgba(6,182,212,0.15)] items-center gap-4" 
             style="animation: float 6s ease-in-out infinite;">
            <div class="h-12 w-12 rounded-full bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center shadow-lg">
                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div>
                <h4 class="text-3xl font-bold text-gray-900 dark:text-white leading-none">3+</h4>
                <p class="text-cyan-600 dark:text-cyan-200 text-sm font-medium tracking-wide">Years Experience</p>
            </div>
        </div>
    </div>

    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('about-sphere');
            if (!container) return;

            // Scene setup
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, 1, 0.1, 1000);
            const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
            
            renderer.setSize(600, 600);
            container.appendChild(renderer.domElement);

            // Create Dashed Sphere Geometry
            const geometry = new THREE.BufferGeometry();
            const positions = [];
            const colors = [];

            const colorBase = new THREE.Color("#06b6d4"); // Cyan
            const colorHighlight = new THREE.Color("#f97316"); // Orange (from reference)
            const colorWhite = new THREE.Color("#ffffff"); 

            const r = 2.8;
            const rows = 40; // Latitude lines
            
            for (let i = 1; i < rows; i++) {
                const phi = Math.PI * (i / rows); // 0 to PI
                // Calculate number of dashes for this ring
                const steps = 60; 
                
                for (let j = 0; j < steps; j++) {
                    // Start of dash
                    const theta = (j / steps) * 2 * Math.PI;
                    // End of dash (dash length)
                    const thetaNext = theta + ((2 * Math.PI) / steps) * 0.5; // 50% dash, 50% gap

                    // Vertices
                    const x1 = r * Math.sin(phi) * Math.cos(theta);
                    const y1 = r * Math.cos(phi);
                    const z1 = r * Math.sin(phi) * Math.sin(theta);

                    const x2 = r * Math.sin(phi) * Math.cos(thetaNext);
                    const y2 = r * Math.cos(phi);
                    const z2 = r * Math.sin(phi) * Math.sin(thetaNext);

                    positions.push(x1, y1, z1);
                    positions.push(x2, y2, z2);
                    
                    // Colors
                    const rand = Math.random();
                    let c = colorBase;
                    
                    if (rand > 0.95) {
                        c = colorHighlight; // 5% Orange highlights
                    } else if (rand > 0.90) {
                        c = colorWhite; // 5% White highlights
                    }

                    colors.push(c.r, c.g, c.b);
                    colors.push(c.r, c.g, c.b);
                }
            }

            geometry.setAttribute('position', new THREE.Float32BufferAttribute(positions, 3));
            geometry.setAttribute('color', new THREE.Float32BufferAttribute(colors, 3));

            const material = new THREE.LineBasicMaterial({
                vertexColors: true,
                transparent: true,
                opacity: 0.5,
            });

            const sphere = new THREE.LineSegments(geometry, material);
            scene.add(sphere);

            camera.position.z = 5;

            // Rotation Logic
            function animate() {
                requestAnimationFrame(animate);
                
                sphere.rotation.y += 0.002;
                sphere.rotation.z += 0.001; 
                sphere.rotation.x = 0.2; 

                renderer.render(scene, camera);
            }
            animate();
        });
    </script>
</section>
