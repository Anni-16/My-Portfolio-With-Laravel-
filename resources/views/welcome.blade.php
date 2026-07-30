<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="aniket kumar maurya">
    <!-- ======== Page title ============ -->
    <title> It's Aniket Kumar Maurya A Freelance Website Developer In Delhi & Delhi NCR , India | Let’s Hire Me For Projects </title>
    <meta name="title" content="It's Aniket Kumar Maurya A Freelance Website Developer In Delhi & Delhi NCR , India | Let’s Hire Me For Projects">
    <meta name="keyword" content="">
    <meta name="description" content="It's Aniket Kumar Maurya A Freelance Website Developer In Delhi & Delhi NCR , India | Let’s Hire Me For Projects">
    <meta name="robots" content="noindex, nofollow">
    <!-- ========= Css Links ========== -->
    @include('layout.css')
</head>

<body class="bg-[#000000] text-[#dddddd]">

    <!-- Header Section Start -->
    @include('layout.header')
    <!-- Header Section End -->


    <!-- Hero Banner Section -->
    <section id="home" class="relative min-h-screen flex items-center pt-24 overflow-hidden">
        <!-- Background Glows (Subtle gray gradients) -->
        <div class="absolute inset-0 radial-glow-violet opacity-40"></div>
        <div class="absolute top-20 right-10 w-96 h-96 radial-glow-coral opacity-30"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-12 w-full relative z-10 py-16">
            <div class="grid lg:grid-cols-2 items-center gap-12">

                <!-- Left Content Block -->
                <div class="reveal">
                    <!-- Rotating Star Badge -->
                    <div class="flex items-center gap-3 sm:gap-4 mb-6">
                        <span class="text-3xl sm:text-5xl text-white animate-spin-slow">✱</span>
                        <span
                            class="text-[10px] sm:text-xs uppercase tracking-[0.2em] sm:tracking-[0.25em] font-semibold text-white bg-white/10 px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-full border border-white/20 font-sans-custom">
                            Creative Web Developer
                        </span>
                    </div>

                    <!-- Typography titles -->
                    <h1
                        class="text-white font-extrabold leading-none text-4xl sm:text-6xl md:text-7xl lg:text-8xl mb-4 tracking-tight font-sans-custom">
                        Innovative
                    </h1>

                    <div class="relative mb-6">
                        <h2
                            class="text-transparent bg-clip-text bg-gradient-to-r from-[#888888] via-[#dddddd] to-[#aaaaaa] text-4xl sm:text-6xl md:text-8xl lg:text-[100px] leading-none font-serif-custom italic font-light">
                            Development
                        </h2>
                        <!-- Creative Line Break -->
                        <div class="flex justify-between items-center mt-4 opacity-30">
                            <div class="h-[1.5px] bg-white w-[45%]"></div>
                            <span class="text-white text-xs tracking-widest font-bold font-sans-custom">CORE
                                VALUE</span>
                            <div class="h-[1.5px] bg-white w-[45%]"></div>
                        </div>
                    </div>

                    <h2
                        class="text-white font-extrabold leading-none text-4xl sm:text-6xl md:text-7xl lg:text-8xl mb-8 tracking-tight font-sans-custom">
                        Services
                    </h2>
                </div>

                <!-- Right Side Image/Illustration -->
                <div class="relative flex justify-center lg:justify-end reveal">
                    <div
                        class="relative w-full max-w-[500px] aspect-square rounded-2xl overflow-hidden border border-gray-900 shadow-2xl bg-[#0e0e12] group">
                        <!-- Grayscale Hero Graphics -->
                        <img id="heroImage"
                            src="{{ asset('front-end/assets/img/banner/home-banner.png') }}"
                            alt="Creative Design and Code Illustration"
                            class="w-full h-full object-cover grayscale opacity-90 group-hover:scale-105 transition-all duration-700">
                    </div>
                    <!-- Absolute Decorative Box -->
                    <div
                        class="absolute -bottom-6 -left-6 bg-white/5 backdrop-blur border border-white/10 px-6 py-4 rounded-xl hidden md:block">
                        <h4 class="text-white text-3xl font-extrabold font-sans-custom">150+</h4>
                        <p class="text-xs text-gray-500 font-sans-custom uppercase tracking-wider">Completed Projects
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Social Icons Left/Right Floating -->
        <div class="absolute right-8 top-1/2 -translate-y-1/2 flex flex-col gap-5 z-20 hidden md:flex">
            <a href="https://in.linkedin.com/in/aniket-kumar-maurya-314941271" target="_blank"
                class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-white hover:text-black hover:border-white hover:scale-110 transition-all duration-300">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://github.com/Anni-16" target="_blank"
                class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-white hover:text-black hover:border-white hover:scale-110 transition-all duration-300">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="https://www.instagram.com/__.xanni01/" target="_blank"
                class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-white hover:text-black hover:border-white hover:scale-110 transition-all duration-300">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.pinterest.com/xanni01/" target="_blank"
                class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-white hover:text-black hover:border-white hover:scale-110 transition-all duration-300">
                <i class="fa-brands fa-pinterest"></i>
            </a>
            <a href="https://www.youtube.com/@_.xanni01_edit" target="_blank"
                class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-white hover:text-black hover:border-white hover:scale-110 transition-all duration-300">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://x.com/aniketkuma35664" target="_blank"
                class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-white hover:text-black hover:border-white hover:scale-110 transition-all duration-300">
                <i class="fa-brands fa-x-twitter"></i>
            </a>
            <a href="https://dev.to/@anni16" target="_blank"
                class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-white hover:text-black hover:border-white hover:scale-110 transition-all duration-300">
                <i class="fa-brands fa-dev"></i>
            </a>
            <a href="https://www.behance.net/aniketkumar346" target="_blank"
                class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-white hover:text-black hover:border-white hover:scale-110 transition-all duration-300">
                <i class="fa-brands fa-behance"></i>
            </a>
        </div>
    </section>

    <!-- Skills Counter Progress Section -->
    <section class="bg-[#08080a] py-28 relative border-y border-gray-900 overflow-hidden">
        <!-- Glow background effect -->
        <div
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] radial-glow-violet opacity-5 pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-16 items-center">

                <!-- Left Column: Info Block (5 cols) -->
                <div class="lg:col-span-5 reveal-left">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-[1.5px] bg-white"></span>
                        <span class="text-white text-xs font-bold uppercase tracking-wider font-sans-custom">Core
                            Capabilities</span>
                    </div>
                    <h3 class="text-white text-4xl md:text-5xl font-black font-sans-custom leading-tight mb-6">
                        Performance & Clean Structure
                    </h3>
                    <p class="text-[#7f7f7f] text-base leading-relaxed mb-8 font-sans-custom">
                        Writing standards-compliant, modular, and optimized layout frameworks that achieve exceptional
                        speed ratings and flawless responsive alignments.
                    </p>
                    <a href="javascript:void(0)" onclick="openContactModal()"
                        class="inline-flex items-center gap-3 px-8 py-4 rounded-full border border-white/20 text-white text-sm font-bold tracking-wider hover:bg-white hover:text-black hover:border-white hover:scale-105 hover:shadow-lg hover:shadow-white/10 transition-all duration-300 font-sans-custom group">
                        Hire Me For Projects
                        <i
                            class="fas fa-arrow-right -rotate-45 group-hover:rotate-0 transition-transform duration-300"></i>
                    </a>
                </div>

                <!-- Right Column: Skills Progress Cards (7 cols) -->
                <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-3 gap-6 reveal-right">

                    <!-- Skill 1 -->
                    <div
                        class="skill-progress-card flex flex-col items-center p-6 md:p-4 lg:p-8 bg-[#0c0c0e]/50 border border-white/5 rounded-2xl hover:border-white/20 hover:bg-[#0c0c0e]/80 transition-all duration-300 group">
                        <div class="relative w-40 h-40">
                            <svg class="w-full h-full -rotate-90">
                                <circle cx="80" cy="80" r="68" stroke="rgba(255,255,255,0.03)" stroke-width="5"
                                    fill="none" />
                                <circle cx="80" cy="80" r="68" stroke="#ffffff" stroke-width="5" fill="none"
                                    class="skill-circle-progress skill-circle" stroke-linecap="round"
                                    stroke-dasharray="427" stroke-dashoffset="427"
                                    style="filter: drop-shadow(0 0 6px rgba(255, 255, 255, 0.3));" />
                            </svg>
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                                <i
                                    class="fa-brands fa-html5 text-4xl text-white mb-1 group-hover:scale-110 transition-transform duration-300"></i>
                                <span
                                    class="text-gray-500 text-[10px] font-semibold tracking-wider font-sans-custom">HTML5</span>
                            </div>
                        </div>
                        <h3 class="skill-percent text-white text-3xl font-black mt-4 font-sans-custom"
                            data-percent="90">0%</h3>
                    </div>

                    <!-- Skill 2 -->
                    <div
                        class="skill-progress-card flex flex-col items-center p-6 md:p-4 lg:p-8 bg-[#0c0c0e]/50 border border-white/5 rounded-2xl hover:border-white/20 hover:bg-[#0c0c0e]/80 transition-all duration-300 group">
                        <div class="relative w-40 h-40">
                            <svg class="w-full h-full -rotate-90">
                                <circle cx="80" cy="80" r="68" stroke="rgba(255,255,255,0.03)" stroke-width="5"
                                    fill="none" />
                                <circle cx="80" cy="80" r="68" stroke="#ffffff" stroke-width="5" fill="none"
                                    class="skill-circle-progress skill-circle" stroke-linecap="round"
                                    stroke-dasharray="427" stroke-dashoffset="427"
                                    style="filter: drop-shadow(0 0 6px rgba(255, 255, 255, 0.3));" />
                            </svg>
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                                <i
                                    class="fa-brands fa-css3-alt text-4xl text-white mb-1 group-hover:scale-110 transition-transform duration-300"></i>
                                <span
                                    class="text-gray-500 text-[10px] font-semibold tracking-wider font-sans-custom">CSS3
                                    & SASS</span>
                            </div>
                        </div>
                        <h3 class="skill-percent text-white text-3xl font-black mt-4 font-sans-custom"
                            data-percent="95">0%</h3>
                    </div>

                    <!-- Skill 3 -->
                    <div
                        class="skill-progress-card flex flex-col items-center p-6 md:p-4 lg:p-8 bg-[#0c0c0e]/50 border border-white/5 rounded-2xl hover:border-white/20 hover:bg-[#0c0c0e]/80 transition-all duration-300 group">
                        <div class="relative w-40 h-40">
                            <svg class="w-full h-full -rotate-90">
                                <circle cx="80" cy="80" r="68" stroke="rgba(255,255,255,0.03)" stroke-width="5"
                                    fill="none" />
                                <circle cx="80" cy="80" r="68" stroke="#ffffff" stroke-width="5" fill="none"
                                    class="skill-circle-progress skill-circle" stroke-linecap="round"
                                    stroke-dasharray="427" stroke-dashoffset="427"
                                    style="filter: drop-shadow(0 0 6px rgba(255, 255, 255, 0.3));" />
                            </svg>
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                                <i
                                    class="fa-brands fa-js text-4xl text-white mb-1 group-hover:scale-110 transition-transform duration-300"></i>
                                <span
                                    class="text-gray-500 text-[10px] font-semibold tracking-wider font-sans-custom">JAVASCRIPT</span>
                            </div>
                        </div>
                        <h3 class="skill-percent text-white text-3xl font-black mt-4 font-sans-custom"
                            data-percent="85">0%</h3>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- About Me & Interactive Stats Section -->
    <section id="about" class="py-32 relative overflow-hidden">
        <div class="absolute left-[-200px] top-1/4 w-[400px] h-[400px] radial-glow-violet opacity-20"></div>

        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- Left Details Box -->
                <div class="reveal-left">
                    <span class="text-white font-bold uppercase tracking-widest text-xs font-sans-custom">ABOUT
                        GEROZ</span>
                    <h2 class="text-white text-4xl md:text-5xl font-black tracking-tight mt-3 mb-6 font-sans-custom">
                        Crafting High-Performance Websites & Design
                    </h2>
                    <p class="text-gray-500 text-base leading-relaxed mb-6 font-sans-custom">
                        Hi, I'm Geroz, a passion-driven creative developer. With half a decade of engineering
                        experience, I specialize in constructing fluid web structures, developing responsive UI widgets,
                        and styling high-performance user journeys.
                    </p>
                    <p class="text-gray-500 text-base leading-relaxed mb-8 font-sans-custom">
                        My philosophy is simple: merging absolute aesthetic beauty with clean, responsive logic. I work
                        closely with agencies and brands to design websites that captivate immediately and perform
                        flawlessly under heavy loads.
                    </p>

                    <div class="flex items-center gap-6">
                        <img src="{{ asset('front-end/assets/img/author.avif') }}"
                            alt="Avatar" class="w-16 h-16 rounded-full border border-white/20 object-cover grayscale">
                        <div>
                            <h4 class="text-white font-bold text-lg font-sans-custom">Geroz Alexander</h4>
                            <p class="text-xs text-gray-500 uppercase tracking-widest">Founder / Lead Engineer</p>
                        </div>
                    </div>
                </div>

                <!-- Right Stats Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 reveal-right">

                    <!-- Stat Card 1 -->
                    <div class="glowing-card p-6 sm:p-8 rounded-2xl flex flex-col justify-between aspect-auto sm:aspect-[4/3] min-h-[160px] sm:min-h-0">
                        <span class="text-white text-4xl"><i class="fas fa-briefcase"></i></span>
                        <div>
                            <h3 class="text-white text-4xl font-black mb-1 font-sans-custom"><span class="stat-counter"
                                    data-target="5">0</span>+</h3>
                            <p class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Years Experience</p>
                        </div>
                    </div>

                    <!-- Stat Card 2 -->
                    <div class="glowing-card p-6 sm:p-8 rounded-2xl flex flex-col justify-between aspect-auto sm:aspect-[4/3] min-h-[160px] sm:min-h-0">
                        <span class="text-white text-4xl"><i class="fas fa-check-circle"></i></span>
                        <div>
                            <h3 class="text-white text-4xl font-black mb-1 font-sans-custom"><span class="stat-counter"
                                    data-target="150">0</span>+</h3>
                            <p class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Projects Completed
                            </p>
                        </div>
                    </div>

                    <!-- Stat Card 3 -->
                    <div class="glowing-card p-6 sm:p-8 rounded-2xl flex flex-col justify-between aspect-auto sm:aspect-[4/3] min-h-[160px] sm:min-h-0">
                        <span class="text-white text-4xl"><i class="fas fa-users"></i></span>
                        <div>
                            <h3 class="text-white text-4xl font-black mb-1 font-sans-custom"><span class="stat-counter"
                                    data-target="98">0</span>%</h3>
                            <p class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Happy Clients</p>
                        </div>
                    </div>

                    <!-- Stat Card 4 -->
                    <div class="glowing-card p-6 sm:p-8 rounded-2xl flex flex-col justify-between aspect-auto sm:aspect-[4/3] min-h-[160px] sm:min-h-0">
                        <span class="text-white text-4xl"><i class="fas fa-award"></i></span>
                        <div>
                            <h3 class="text-white text-4xl font-black mb-1 font-sans-custom"><span class="stat-counter"
                                    data-target="22">0</span>+</h3>
                            <p class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Industry Awards</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-[#08080a] py-32 border-y border-gray-900 relative">
        <div class="absolute right-[-150px] bottom-1/4 w-[350px] h-[350px] radial-glow-coral opacity-10"></div>

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-20 reveal">
                <span class="text-white font-bold uppercase tracking-widest text-xs font-sans-custom">WHAT I CAN
                    DO</span>
                <h2 class="text-white text-4xl md:text-5xl font-black tracking-tight mt-3 font-sans-custom">
                    Specialized Digital Services
                </h2>
                <div class="w-16 h-[1.5px] bg-white mx-auto mt-6 rounded-full"></div>
            </div>

            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Service 1 -->
                <div class="glowing-card p-8 rounded-2xl reveal relative group">
                    <div
                        class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-white text-2xl mb-8 group-hover:bg-white group-hover:text-black transition-all duration-300">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-white text-xl font-bold mb-4 font-sans-custom">Frontend Dev</h3>
                    <p class="text-gray-500 text-sm leading-relaxed font-sans-custom">
                        Developing standard-compliant semantic markup using CSS, JS, and Tailwind utilities. Fast
                        loading, secure coding structures.
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="glowing-card p-8 rounded-2xl reveal relative group" style="transition-delay: 100ms;">
                    <div
                        class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-white text-2xl mb-8 group-hover:bg-white group-hover:text-black transition-all duration-300">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="text-white text-xl font-bold mb-4 font-sans-custom">UI/UX Design</h3>
                    <p class="text-gray-500 text-sm leading-relaxed font-sans-custom">
                        Designing visual interfaces and client wireframes using typography hierarchies, visual layouts,
                        and dark mode themes.
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="glowing-card p-8 rounded-2xl reveal relative group" style="transition-delay: 200ms;">
                    <div
                        class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-white text-2xl mb-8 group-hover:bg-white group-hover:text-black transition-all duration-300">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <h3 class="text-white text-xl font-bold mb-4 font-sans-custom">E-Commerce</h3>
                    <p class="text-gray-500 text-sm leading-relaxed font-sans-custom">
                        Constructing custom online shops, digital carts, product filters, payment modules, and dashboard
                        control structures.
                    </p>
                </div>

                <!-- Service 4 -->
                <div class="glowing-card p-8 rounded-2xl reveal relative group" style="transition-delay: 300ms;">
                    <div
                        class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-white text-2xl mb-8 group-hover:bg-white group-hover:text-black transition-all duration-300">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-white text-xl font-bold mb-4 font-sans-custom">Performance SEO</h3>
                    <p class="text-gray-500 text-sm leading-relaxed font-sans-custom">
                        Speed testing, setting semantic tag priorities, optimizing layout weights, and writing clean
                        headers for search engine visibility.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- Portfolio Projects Grid Section -->
    <section id="projects" class="py-32 relative">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col lg:flex-row lg:items-end justify-between mb-16 reveal gap-8">
                <div>
                    <span class="text-white font-bold uppercase tracking-widest text-xs font-sans-custom">SELECTED
                        WORKS</span>
                    <h2 class="text-white text-4xl md:text-5xl font-black tracking-tight mt-3 font-sans-custom">
                        Explore Creative Projects
                    </h2>
                </div>
                <!-- View All -->
                <div class="flex flex-wrap items-center gap-6 font-sans-custom">
                    <a href="{{ route('my-work-gallary') }}">
                        <button
                            class="px-5 py-2 rounded-full text-black text-xs font-bold bg-white shadow-md transition-all duration-300">
                            All Works
                        </button>
                    </a>
                    <!-- Divider line -->
                    <div class="hidden sm:block w-px h-6 bg-white/10"></div>
                    <!-- Slider Arrows -->
                    <div class="flex gap-3">
                        <button id="prevProject" class="slider-btn w-10 h-10 text-xs interactive-hover"
                            aria-label="Previous Projects">
                            <i class="fas fa-arrow-left"></i>
                        </button>
                        <button id="nextProject" class="slider-btn w-10 h-10 text-xs interactive-hover"
                            aria-label="Next Projects">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Portfolio Carousel Wrapper -->
            <div class="overflow-hidden relative w-full py-4">
                <div class="project-container flex gap-8 transition-transform duration-500 ease-out"
                    style="width: max-content;">

                    <!-- Project 1 -->
                    <div class="portfolio-item project-card group reveal flex-shrink-0">
                        <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=600&q=80"
                            alt="Creative Interface Design" class="w-full aspect-[4/3] object-cover project-image">
                        <div class="project-overlay absolute inset-0 flex flex-col justify-end p-8">
                            <span
                                class="text-white text-xs font-bold uppercase tracking-widest mb-2 font-sans-custom">Category | Industry</span>
                            <h3 class="text-white text-2xl font-bold font-sans-custom mb-4"><a href="http://google.com" target="_blank" rel="noopener noreferrer">Vespera App UI</a></h3>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-black hover:text-white hover:border-white border border-transparent transition-all duration-300">
                                <i class="fas fa-arrow-right -rotate-45"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="portfolio-item project-card group reveal flex-shrink-0"
                        style="transition-delay: 100ms;">
                        <img src="https://images.unsplash.com/photo-1634017839464-5c339ebe3cb4?auto=format&fit=crop&w=600&q=80"
                            alt="Ecommerce Web Platform" class="w-full aspect-[4/3] object-cover project-image">
                        <div class="project-overlay absolute inset-0 flex flex-col justify-end p-8">
                            <span
                                class="text-white text-xs font-bold uppercase tracking-widest mb-2 font-sans-custom">Category | Industry</span>
                            <h3 class="text-white text-2xl font-bold font-sans-custom mb-4"><a href="http://google.com" target="_blank" rel="noopener noreferrer">Vespera App UI</a></h3>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-black hover:text-white hover:border-white border border-transparent transition-all duration-300">
                                <i class="fas fa-arrow-right -rotate-45"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="portfolio-item project-card group reveal flex-shrink-0"
                        style="transition-delay: 200ms;">
                        <img src="https://images.unsplash.com/photo-1620641788421-7a1c342ea42e?auto=format&fit=crop&w=600&q=80"
                            alt="Branding Campaign" class="w-full aspect-[4/3] object-cover project-image">
                        <div class="project-overlay absolute inset-0 flex flex-col justify-end p-8">
                            <span
                                class="text-white text-xs font-bold uppercase tracking-widest mb-2 font-sans-custom">Category | Industry</span>
                            <h3 class="text-white text-2xl font-bold font-sans-custom mb-4"><a href="http://google.com" target="_blank" rel="noopener noreferrer">Vespera App UI</a></h3>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-black hover:text-white hover:border-white border border-transparent transition-all duration-300">
                                <i class="fas fa-arrow-right -rotate-45"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 4 -->
                    <div class="portfolio-item project-card group reveal flex-shrink-0">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80"
                            alt="Dashboard Development" class="w-full aspect-[4/3] object-cover project-image">
                        <div class="project-overlay absolute inset-0 flex flex-col justify-end p-8">
                            <span
                                class="text-white text-xs font-bold uppercase tracking-widest mb-2 font-sans-custom">Category | Industry</span>
                            <h3 class="text-white text-2xl font-bold font-sans-custom mb-4"><a href="http://google.com" target="_blank" rel="noopener noreferrer">Vespera App UI</a></h3>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-black hover:text-white hover:border-white border border-transparent transition-all duration-300">
                                <i class="fas fa-arrow-right -rotate-45"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 5 -->
                    <div class="portfolio-item project-card group reveal flex-shrink-0"
                        style="transition-delay: 100ms;">
                        <img src="https://images.unsplash.com/photo-1581291518655-9523c932ded7?auto=format&fit=crop&w=600&q=80"
                            alt="Dashboard Design" class="w-full aspect-[4/3] object-cover project-image">
                        <div class="project-overlay absolute inset-0 flex flex-col justify-end p-8">
                            <span
                                class="text-white text-xs font-bold uppercase tracking-widest mb-2 font-sans-custom">Category | Industry</span>
                            <h3 class="text-white text-2xl font-bold font-sans-custom mb-4"><a href="http://google.com" target="_blank" rel="noopener noreferrer">Vespera App UI</a></h3>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-black hover:text-white hover:border-white border border-transparent transition-all duration-300">
                                <i class="fas fa-arrow-right -rotate-45"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Project 6 -->
                    <div class="portfolio-item project-card group reveal flex-shrink-0"
                        style="transition-delay: 200ms;">
                        <img src="https://images.unsplash.com/photo-1618005198143-d8664b0d00f6?auto=format&fit=crop&w=600&q=80"
                            alt="Branding & Corporate Design" class="w-full aspect-[4/3] object-cover project-image">
                        <div class="project-overlay absolute inset-0 flex flex-col justify-end p-8">
                            <span
                                class="text-white text-xs font-bold uppercase tracking-widest mb-2 font-sans-custom">Category | Industry</span>
                            <h3 class="text-white text-2xl font-bold font-sans-custom mb-4"><a href="http://google.com" target="_blank" rel="noopener noreferrer">Vespera App UI</a></h3>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-black hover:text-white hover:border-white border border-transparent transition-all duration-300">
                                <i class="fas fa-arrow-right -rotate-45"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resume Career Timeline Section -->
    <section id="experience" class="bg-[#08080a] py-32 border-y border-gray-900 relative">
        <div class="absolute left-[-200px] top-1/4 w-[400px] h-[400px] radial-glow-violet opacity-10"></div>

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-20 reveal">
                <span
                    class="text-white font-bold uppercase tracking-widest text-xs font-sans-custom">IMPLEMENTATION</span>
                <h2 class="text-white text-4xl md:text-5xl font-black tracking-tight mt-3 font-sans-custom">
                    Process & Execution
                </h2>
                <div class="w-16 h-[1.5px] bg-white mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                <!-- Step 1 -->
                <div class="glowing-card p-8 rounded-2xl reveal relative group">
                    <div
                        class="text-[#00e5ff] text-5xl font-black mb-6 opacity-30 font-sans-custom group-hover:opacity-100 group-hover:-translate-y-2 transition-all duration-300">
                        01</div>
                    <h3 class="text-white text-2xl font-bold mb-4 font-sans-custom">Discovery</h3>
                    <p class="text-gray-500 text-sm leading-relaxed font-sans-custom">
                        Understanding your business goals, target audience, and project requirements to create a solid
                        architectural foundation.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="glowing-card p-8 rounded-2xl reveal relative group" style="transition-delay: 100ms;">
                    <div
                        class="text-[#00e5ff] text-5xl font-black mb-6 opacity-30 font-sans-custom group-hover:opacity-100 group-hover:-translate-y-2 transition-all duration-300">
                        02</div>
                    <h3 class="text-white text-2xl font-bold mb-4 font-sans-custom">Prototyping</h3>
                    <p class="text-gray-500 text-sm leading-relaxed font-sans-custom">
                        Crafting wireframes and visual UI/UX designs that reflect your brand identity and ensure an
                        engaging user experience.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="glowing-card p-8 rounded-2xl reveal relative group" style="transition-delay: 200ms;">
                    <div
                        class="text-[#00e5ff] text-5xl font-black mb-6 opacity-30 font-sans-custom group-hover:opacity-100 group-hover:-translate-y-2 transition-all duration-300">
                        03</div>
                    <h3 class="text-white text-2xl font-bold mb-4 font-sans-custom">Development</h3>
                    <p class="text-gray-500 text-sm leading-relaxed font-sans-custom">
                        Writing clean, optimized, and responsive code to bring the designs to life using modern
                        high-performance technologies.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="glowing-card p-8 rounded-2xl reveal relative group" style="transition-delay: 300ms;">
                    <div
                        class="text-[#00e5ff] text-5xl font-black mb-6 opacity-30 font-sans-custom group-hover:opacity-100 group-hover:-translate-y-2 transition-all duration-300">
                        04</div>
                    <h3 class="text-white text-2xl font-bold mb-4 font-sans-custom">Launch</h3>
                    <p class="text-gray-500 text-sm leading-relaxed font-sans-custom">
                        Testing across devices, optimizing for speed and SEO, and finally deploying your digital product
                        to the world.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- Testimonials Slider Section -->
    <section class="py-32 relative overflow-hidden">
        <div class="absolute right-[-150px] top-1/4 w-[350px] h-[350px] radial-glow-coral opacity-10"></div>

        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 reveal">
                <div>
                    <span class="text-white font-bold uppercase tracking-widest text-xs font-sans-custom">CLIENT
                        REVIEWS</span>
                    <h2 class="text-white text-4xl md:text-5xl font-black tracking-tight mt-3 font-sans-custom">
                        What Partners Say
                    </h2>
                </div>
                <!-- Navigation Buttons -->
                <div class="flex gap-4 mt-8 md:mt-0 font-sans-custom items-center">
                    <button onclick="openAddReviewModal()"
                        class="px-5 py-2 rounded-full text-black text-xs font-bold bg-white shadow-md hover:bg-[#00e5ff] hover:text-black transition-all duration-300 mr-2">
                        Add Review
                    </button>
                    <button id="prevTestimonial" class="slider-btn interactive-hover" aria-label="Previous Testimonial">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                    <button id="nextTestimonial" class="slider-btn interactive-hover" aria-label="Next Testimonial">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Slider Wrapper -->
            <div class="overflow-hidden relative w-full reveal py-4">
                <div class="testimonial-container flex gap-6 transition-transform duration-500 ease-out"
                    style="width: max-content;">

                    <!-- Testimonial 1 -->
                    <div
                        class="testimonial-card glowing-card p-6 sm:p-10 rounded-2xl flex flex-col justify-between select-none flex-shrink-0">
                        <div>
                            <!-- Grayscale Rating Stars -->
                            <div class="flex gap-1 text-white text-sm mb-6">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-300 text-base md:text-lg leading-relaxed italic mb-8 font-sans-custom">
                                "Geroz completely overhauled our agency layout. The structural speed increases were
                                immediate, and our user metrics increased. Absolutely recommended developer."
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-gray-900 pt-6">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80"
                                alt="Client User" class="w-12 h-12 rounded-full object-cover grayscale">
                            <div>
                                <h4 class="text-white font-bold font-sans-custom text-sm">Marcus Vance</h4>
                                <p class="text-xs text-gray-500 uppercase tracking-widest">Director, Pixellence</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div
                        class="testimonial-card glowing-card p-6 sm:p-10 rounded-2xl flex flex-col justify-between select-none flex-shrink-0">
                        <div>
                            <!-- Grayscale Rating Stars -->
                            <div class="flex gap-1 text-white text-sm mb-6">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-300 text-base md:text-lg leading-relaxed italic mb-8 font-sans-custom">
                                "The design systems Geroz structured are exceptionally clean. Dynamic hover transitions
                                worked perfectly across iOS, mobile, and web dashboards. Five stars."
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-gray-900 pt-6">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=100&q=80"
                                alt="Client User" class="w-12 h-12 rounded-full object-cover grayscale">
                            <div>
                                <h4 class="text-white font-bold font-sans-custom text-sm">Amara Sterling</h4>
                                <p class="text-xs text-gray-500 uppercase tracking-widest">VP Innovation, Sterling
                                    Retail</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div
                        class="testimonial-card glowing-card p-6 sm:p-10 rounded-2xl flex flex-col justify-between select-none flex-shrink-0">
                        <div>
                            <!-- Grayscale Rating Stars -->
                            <div class="flex gap-1 text-white text-sm mb-6">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-300 text-base md:text-lg leading-relaxed italic mb-8 font-sans-custom">
                                "Fast communication, exceptional CSS animations, and optimized SEO structure. I could
                                not be happier with the e-commerce platforms we launched."
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-gray-900 pt-6">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43?auto=format&fit=crop&w=100&q=80"
                                alt="Client User" class="w-12 h-12 rounded-full object-cover grayscale">
                            <div>
                                <h4 class="text-white font-bold font-sans-custom text-sm">Kaelen Ross</h4>
                                <p class="text-xs text-gray-500 uppercase tracking-widest">CTO, Vertex Commerce</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Latest Blog Feed Section -->
    <section id="blog" class="bg-[#08080a] py-32 border-y border-gray-900 relative">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-20 reveal">
                <span class="text-white font-bold uppercase tracking-widest text-xs font-sans-custom">CREATIVE
                    INSIGHTS</span>
                <h2 class="text-white text-4xl md:text-5xl font-black tracking-tight mt-3 font-sans-custom">
                    Latest Publications
                </h2>
                <div class="w-16 h-[1.5px] bg-white mx-auto mt-6 rounded-full"></div>
            </div>

            <!-- Blog Grid -->
            <div class="grid md:grid-cols-3 gap-8">

                <!-- Blog post 1 -->
                <div class="glowing-card rounded-2xl overflow-hidden group reveal">
                    <div class="relative overflow-hidden aspect-[16/10]">
                        <img src="https://images.unsplash.com/photo-1541462608141-2f682d859cc9?auto=format&fit=crop&w=500&q=80"
                            alt="UI Design trends"
                            class="w-full h-full object-cover grayscale group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <span class="text-xs font-bold text-white uppercase tracking-widest font-sans-custom">UI/UX
                            Design</span>
                        <h4
                            class="text-white text-xl font-bold mt-3 mb-4 group-hover:text-gray-400 transition-colors font-sans-custom">
                            Modernizing Dark Mode Aesthetics in 2026</h4>
                        <p class="text-gray-500 text-sm leading-relaxed mb-6 font-sans-custom">Discover the principles
                            of high-contrast editorial typography paired with low-glow neon color systems...</p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-white font-bold text-sm hover:text-gray-400 transition-colors font-sans-custom">
                            Read Article <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Blog post 2 -->
                <div class="glowing-card rounded-2xl overflow-hidden group reveal" style="transition-delay: 100ms;">
                    <div class="relative overflow-hidden aspect-[16/10]">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=500&q=80"
                            alt="Code structure"
                            class="w-full h-full object-cover grayscale group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <span
                            class="text-xs font-bold text-white uppercase tracking-widest font-sans-custom">Development</span>
                        <h4
                            class="text-white text-xl font-bold mt-3 mb-4 group-hover:text-gray-400 transition-colors font-sans-custom">
                            Optimizing Layout performance standards</h4>
                        <p class="text-gray-500 text-sm leading-relaxed mb-6 font-sans-custom">Why structured semantic
                            HTML paired with custom CSS variables outperforms complex libraries in load time tests...
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-white font-bold text-sm hover:text-gray-400 transition-colors font-sans-custom">
                            Read Article <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Blog post 3 -->
                <div class="glowing-card rounded-2xl overflow-hidden group reveal" style="transition-delay: 200ms;">
                    <div class="relative overflow-hidden aspect-[16/10]">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=500&q=80"
                            alt="Developer agency"
                            class="w-full h-full object-cover grayscale group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <span
                            class="text-xs font-bold text-white uppercase tracking-widest font-sans-custom">Branding</span>
                        <h4
                            class="text-white text-xl font-bold mt-3 mb-4 group-hover:text-gray-400 transition-colors font-sans-custom">
                            Setting Core Values For Digital Rebranding</h4>
                        <p class="text-gray-500 text-sm leading-relaxed mb-6 font-sans-custom">A guide on structuring
                            brand storytelling visual timelines to increase client engagement and sales rates...</p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-white font-bold text-sm hover:text-gray-400 transition-colors font-sans-custom">
                            Read Article <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Contact & Connect Form Section -->
    <section id="contact" class="py-32 relative overflow-hidden">
        <div class="absolute left-[-200px] bottom-[-200px] w-[500px] h-[500px] radial-glow-violet opacity-20"></div>
        <div class="absolute right-[-200px] top-1/4 w-[400px] h-[400px] radial-glow-coral opacity-15"></div>

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-2 gap-16 items-start">

                <!-- Left Details Info -->
                <div class="reveal-left">
                    <span class="text-white font-bold uppercase tracking-widest text-xs font-sans-custom">GET IN
                        TOUCH</span>
                    <h2 class="text-white text-5xl md:text-6xl font-black tracking-tight mt-3 mb-8 font-sans-custom">
                        Let's Make Something Great.
                    </h2>

                    <p class="text-gray-505 text-lg leading-relaxed mb-12 font-sans-custom">
                        Have a design mockup or project in mind? Contact me today. I respond within 24 hours to review
                        structures, project timelines, and custom coding rates.
                    </p>

                    <div class="space-y-6 font-sans-custom">

                        <!-- Contact Detail 1 -->
                        <div class="flex items-center gap-6">
                            <div
                                class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center text-white text-xl border border-white/10">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="text-xs text-gray-500 uppercase tracking-widest">Email Address</h4>
                                <a href="mailto:hello@gerozportfolio.com"
                                    class="text-white text-lg font-semibold hover:text-gray-400 transition-colors">hello@gerozportfolio.com</a>
                            </div>
                        </div>

                        <!-- Contact Detail 2 -->
                        <div class="flex items-center gap-6">
                            <div
                                class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center text-white text-xl border border-white/10">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h4 class="text-xs text-gray-500 uppercase tracking-widest">Phone Number</h4>
                                <a href="tel:+15551234567"
                                    class="text-white text-lg font-semibold hover:text-gray-400 transition-colors">+1
                                    (555) 123-4567</a>
                            </div>
                        </div>

                        <!-- Contact Detail 3 -->
                        <div class="flex items-center gap-6">
                            <div
                                class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center text-white text-xl border border-white/10">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="text-xs text-gray-500 uppercase tracking-widest">Office Location</h4>
                                <p class="text-white text-lg font-semibold">New York City, NY, USA</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Form Input Box -->
                <div class="glowing-card p-6 sm:p-10 md:p-12 rounded-3xl reveal-right">
                    <form action="#" class="space-y-8 font-sans-custom">

                        <!-- Name Input -->
                        <div class="flex flex-col">
                            <label for="name"
                                class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Your Full
                                Name</label>
                            <input type="text" id="name" required placeholder="Geroz Alexander"
                                class="floating-input py-3 text-white focus:border-white transition-colors placeholder:text-gray-800">
                        </div>

                        <!-- Email Input -->
                        <div class="flex flex-col">
                            <label for="email"
                                class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Your Email
                                Address</label>
                            <input type="email" id="email" required placeholder="name@domain.com"
                                class="floating-input py-3 text-white focus:border-white transition-colors placeholder:text-gray-800">
                        </div>

                        <!-- Phone No. Input -->
                        <div class="flex flex-col">
                            <label for="phone"
                                class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Your Phone No.</label>
                            <input type="phone" id="phone" required placeholder="8855992233"
                                class="floating-input py-3 text-white focus:border-white transition-colors placeholder:text-gray-800">
                        </div>

                        <!-- Subject Input -->
                        <div class="flex flex-col">
                            <label for="subject" class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Inquiry Type</label>
                            <select id="subject" class="bg-black border-b-2 border-white/8 py-3 text-gray-400 focus:text-white focus:border-white focus:outline-none transition-colors">
                                <option value="design">UI/UX Design Mockups</option>
                                <option value="development">Frontend Development Package</option>
                                <option value="branding">Digital Rebranding Package</option>
                                <option value="general">General Collaboration / Saying Hi</option>
                            </select>
                        </div>
                        
                        <!-- Message Input -->
                        <div class="flex flex-col">
                            <label for="message"
                                class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Your Project
                                Details</label>
                            <textarea id="message" rows="4" required placeholder="Tell me about your website goals..."
                                class="floating-input py-3 text-white focus:border-white transition-colors placeholder:text-gray-800 resize-none"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full py-4 rounded-xl bg-white text-black font-bold shadow-lg hover:scale-[1.02] active:scale-[0.98] border border-white hover:bg-black hover:text-white transition-all duration-300">
                            Send Message <i class="fas fa-paper-plane ml-2 text-xs"></i>
                        </button>

                    </form>
                </div>

            </div>

        </div>
    </section>

    <!-- ===== Model Section Start ====== -->
    @include('layout.model')
    <!-- ===== Model Section End ====== -->

    <!-- ====== Footer Section Start ======= -->
    @include('layout.footer')
    <!-- ====== Footer Section End ======= -->

    <!-- ======== Js Links ======== -->
    @include('layout.js')

</body>


</html>