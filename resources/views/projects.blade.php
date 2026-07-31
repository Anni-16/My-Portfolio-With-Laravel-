<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

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


    <!-- Projects Hero Section -->
    <section class="relative sm:py-6 min-h-[40vh] flex items-center pt-20 overflow-hidden">
        <div class="absolute inset-0 radial-glow-violet opacity-40"></div>
        <div class="absolute top-20 right-10 w-96 h-96 radial-glow-coral opacity-20"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-12 w-full relative z-10 py-3 sm:py-8">
            <div class="reveal">
                <!-- Rotating Star Badge -->
                <div class="flex items-center gap-3 sm:gap-4 mb-6">
                    <span class="text-3xl sm:text-5xl text-white animate-spin-slow">✱</span>
                    <span class="text-[10px] sm:text-xs uppercase tracking-[0.2em] sm:tracking-[0.25em] font-semibold text-white bg-white/10 px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-full border border-white/20 font-sans-custom">
                        Work Portfolio
                    </span>
                </div>

                <!-- Titles -->
                <h1 class="text-white font-extrabold leading-none text-4xl sm:text-6xl md:text-7xl lg:text-8xl mb-4 tracking-tight font-sans-custom">
                    Selected
                </h1>

                <div class="relative mb-6">
                    <h2 class="text-transparent bg-clip-text bg-gradient-to-r from-[#888888] via-[#dddddd] to-[#aaaaaa] text-4xl sm:text-6xl md:text-8xl lg:text-[100px] leading-none font-serif-custom italic font-light">
                        Works & Layouts
                    </h2>
                    <!-- Creative Line Break -->
                    <div class="flex justify-between items-center mt-4 opacity-30">
                        <div class="h-[1.5px] bg-white w-[45%]"></div>
                        <span class="text-white text-xs tracking-widest font-bold font-sans-custom">GALLERY</span>
                        <div class="h-[1.5px] bg-white w-[45%]"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Grid Section -->
     <section class="mb-10 sm:mb-20 relative overflow-hidden" id="works">
        <div class="max-w-7xl mx-auto px-6">
            
            <!-- Filters Controls -->
            <div class="flex justify-center mb-16 reveal">
                <div class="flex flex-wrap justify-center gap-3 font-sans-custom">
                    <button class="filter-btn px-6 py-2.5 rounded-full text-black text-xs font-bold bg-white shadow-md transition-all duration-300" data-filter="all">
                        All Works
                    </button>
                    <button class="filter-btn px-6 py-2.5 rounded-full text-gray-500 hover:text-white text-xs font-bold transition-all duration-300" data-filter="design">
                        Design
                    </button>
                    <button class="filter-btn px-6 py-2.5 rounded-full text-gray-500 hover:text-white text-xs font-bold transition-all duration-300" data-filter="development">
                        Development
                    </button>
                    <button class="filter-btn px-6 py-2.5 rounded-full text-gray-500 hover:text-white text-xs font-bold transition-all duration-300" data-filter="branding">
                        Branding
                    </button>
                </div>
            </div>

            <!-- Portfolio Grid (3 cols on desktop) -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 transition-all duration-500" id="projectsGrid">

                <!-- Project 1 -->
                <div class="portfolio-item project-card group reveal relative aspect-[4/3] rounded-2xl overflow-hidden border border-white/5 cursor-pointer" data-category="design">
                    <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=600&q=80"
                        alt="Vespera App UI Design" class="w-full h-full object-cover project-image">
                    <div class="project-overlay absolute inset-0 flex flex-col justify-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest mb-2 font-sans-custom">Category | Industry</span>
                        <h3 class="text-white text-2xl font-bold font-sans-custom mb-4"><a href="http://google.com" target="_blank" rel="noopener noreferrer">Vespera App UI</a></h3>
                        <a href="javascript:void(0)" class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-black hover:text-white hover:border-white border border-transparent transition-all duration-300">
                            <i class="fas fa-arrow-right -rotate-45"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="portfolio-item project-card group reveal relative aspect-[4/3] rounded-2xl overflow-hidden border border-white/5 cursor-pointer" data-category="development" style="transition-delay: 50ms;">
                    <img src="https://images.unsplash.com/photo-1634017839464-5c339ebe3cb4?auto=format&fit=crop&w=600&q=80"
                        alt="Cosmos E-Commerce Shop Platform" class="w-full h-full object-cover project-image">
                    <div class="project-overlay absolute inset-0 flex flex-col justify-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest mb-2 font-sans-custom">Category | Industry</span>
                        <h3 class="text-white text-2xl font-bold font-sans-custom mb-4"><a href="http://google.com" target="_blank" rel="noopener noreferrer">Vespera App UI</a></h3>
                        <a href="javascript:void(0)" class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-black hover:text-white hover:border-white border border-transparent transition-all duration-300">
                            <i class="fas fa-arrow-right -rotate-45"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="portfolio-item project-card group reveal relative aspect-[4/3] rounded-2xl overflow-hidden border border-white/5 cursor-pointer" data-category="branding" style="transition-delay: 100ms;">
                    <img src="https://images.unsplash.com/photo-1620641788421-7a1c342ea42e?auto=format&fit=crop&w=600&q=80"
                        alt="Aura Identity Brand Kit" class="w-full h-full object-cover project-image">
                    <div class="project-overlay absolute inset-0 flex flex-col justify-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest mb-2 font-sans-custom">Category | Industry</span>
                        <h3 class="text-white text-2xl font-bold font-sans-custom mb-4"><a href="http://google.com" target="_blank" rel="noopener noreferrer">Vespera App UI</a></h3>
                        <a href="javascript:void(0)" class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-black hover:text-white hover:border-white border border-transparent transition-all duration-300">
                            <i class="fas fa-arrow-right -rotate-45"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="portfolio-item project-card group reveal relative aspect-[4/3] rounded-2xl overflow-hidden border border-white/5 cursor-pointer" data-category="development" style="transition-delay: 150ms;">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80"
                        alt="Vertex Admin Dashboard Panel" class="w-full h-full object-cover project-image">
                    <div class="project-overlay absolute inset-0 flex flex-col justify-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest mb-2 font-sans-custom">Category | Industry</span>
                        <h3 class="text-white text-2xl font-bold font-sans-custom mb-4"><a href="http://google.com" target="_blank" rel="noopener noreferrer">Vespera App UI</a></h3>
                        <a href="javascript:void(0)" class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-black hover:text-white hover:border-white border border-transparent transition-all duration-300">
                            <i class="fas fa-arrow-right -rotate-45"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="portfolio-item project-card group reveal relative aspect-[4/3] rounded-2xl overflow-hidden border border-white/5 cursor-pointer" data-category="design" style="transition-delay: 200ms;">
                    <img src="https://images.unsplash.com/photo-1581291518655-9523c932ded7?auto=format&fit=crop&w=600&q=80"
                        alt="Lumina Interface Design Layout" class="w-full h-full object-cover project-image">
                    <div class="project-overlay absolute inset-0 flex flex-col justify-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest mb-2 font-sans-custom">Category | Industry</span>
                        <h3 class="text-white text-2xl font-bold font-sans-custom mb-4"><a href="http://google.com" target="_blank" rel="noopener noreferrer">Vespera App UI</a></h3>
                        <a href="javascript:void(0)" class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-black hover:text-white hover:border-white border border-transparent transition-all duration-300">
                            <i class="fas fa-arrow-right -rotate-45"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="portfolio-item project-card group reveal relative aspect-[4/3] rounded-2xl overflow-hidden border border-white/5 cursor-pointer" data-category="branding" style="transition-delay: 250ms;">
                    <img src="https://images.unsplash.com/photo-1618005198143-d8664b0d00f6?auto=format&fit=crop&w=600&q=80"
                        alt="Nova Brand System Visual" class="w-full h-full object-cover project-image">
                    <div class="project-overlay absolute inset-0 flex flex-col justify-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest mb-2 font-sans-custom">Category | Industry</span>
                        <h3 class="text-white text-2xl font-bold font-sans-custom mb-4"><a href="http://google.com" target="_blank" rel="noopener noreferrer">Vespera App UI</a></h3>
                        <a href="javascript:void(0)" class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-black hover:text-white hover:border-white border border-transparent transition-all duration-300">
                            <i class="fas fa-arrow-right -rotate-45"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 7 -->
                <div class="portfolio-item project-card group reveal relative aspect-[4/3] rounded-2xl overflow-hidden border border-white/5 cursor-pointer" data-category="development" style="transition-delay: 300ms;">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=600&q=80"
                        alt="Nebula Cloud Dashboard Platform" class="w-full h-full object-cover project-image">
                    <div class="project-overlay absolute inset-0 flex flex-col justify-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest mb-2 font-sans-custom">Category | Industry</span>
                        <h3 class="text-white text-2xl font-bold font-sans-custom mb-4"><a href="http://google.com" target="_blank" rel="noopener noreferrer">Vespera App UI</a></h3>
                        <a href="javascript:void(0)" class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-black hover:text-white hover:border-white border border-transparent transition-all duration-300">
                            <i class="fas fa-arrow-right -rotate-45"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 8 -->
                <div class="portfolio-item project-card group reveal relative aspect-[4/3] rounded-2xl overflow-hidden border border-white/5 cursor-pointer" data-category="branding" style="transition-delay: 350ms;">
                    <img src="https://images.unsplash.com/photo-1547891654-e66ed7edd96c?auto=format&fit=crop&w=600&q=80"
                        alt="Stellar Corporate Branding Kit" class="w-full h-full object-cover project-image">
                    <div class="project-overlay absolute inset-0 flex flex-col justify-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest mb-2 font-sans-custom">Category | Industry</span>
                        <h3 class="text-white text-2xl font-bold font-sans-custom mb-4"><a href="http://google.com" target="_blank" rel="noopener noreferrer">Vespera App UI</a></h3>
                        <a href="javascript:void(0)" class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-black hover:text-white hover:border-white border border-transparent transition-all duration-300">
                            <i class="fas fa-arrow-right -rotate-45"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 9 -->
                <div class="portfolio-item project-card group reveal relative aspect-[4/3] rounded-2xl overflow-hidden border border-white/5 cursor-pointer" data-category="design" style="transition-delay: 400ms;">
                    <img src="https://images.unsplash.com/photo-1600132806370-bf17e65e942f?auto=format&fit=crop&w=600&q=80"
                        alt="Echo Prototyping Platform Design" class="w-full h-full object-cover project-image">
                    <div class="project-overlay absolute inset-0 flex flex-col justify-end p-8">
                        <span class="text-white text-xs font-bold uppercase tracking-widest mb-2 font-sans-custom">Category | Industry</span>
                        <h3 class="text-white text-2xl font-bold font-sans-custom mb-4"><a href="http://google.com" target="_blank" rel="noopener noreferrer">Vespera App UI</a></h3>
                        <a href="javascript:void(0)" class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-black hover:text-white hover:border-white border border-transparent transition-all duration-300">
                            <i class="fas fa-arrow-right -rotate-45"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Call To Action Connect Section -->
    <section class="bg-[#08080a] py-16 sm:py-32 border-t border-gray-900 relative overflow-hidden" id="cta">
        <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] radial-glow-violet opacity-5 pointer-events-none"></div>
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <div class="reveal">
                <span class="text-xs uppercase tracking-widest text-[#00e5ff] font-bold font-sans-custom">WANT CUSTOM WORK?</span>
                <h2 class="text-white text-4xl sm:text-5xl md:text-6xl font-black font-sans-custom leading-tight mt-4 mb-8">
                    Let's Build Something Exceptional Together
                </h2>
                <p class="text-gray-500 text-base max-w-xl mx-auto mb-10 leading-relaxed font-sans-custom">
                    Inquire today about specific page scopes, layout designs, performance audits, and custom coding rates. I respond within 24 hours.
                </p>
                <a href="javascript:void(0)" onclick="openContactModal()" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-black rounded-full font-bold shadow-lg hover:scale-105 border border-white hover:bg-black hover:text-white transition-all duration-300 font-sans-custom">
                    Start Project Inquiries
                    <i class="fas fa-arrow-right -rotate-45 hover:rotate-0 transition-transform duration-300"></i>
                </a>
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