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

    <!-- Blog Hero Section -->
    <section class="relative sm:py-6 min-h-[40vh] flex items-center pt-20 overflow-hidden">
        <div class="absolute inset-0 radial-glow-violet opacity-40"></div>
        <div class="absolute top-20 right-10 w-96 h-96 radial-glow-coral opacity-20"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-12 w-full relative z-10 py-3">
            <div class="reveal">
                <!-- Rotating Star Badge -->
                <div class="flex items-center gap-3 sm:gap-4 mb-6">
                    <span class="text-3xl sm:text-5xl text-white animate-spin-slow">✱</span>
                    <span class="text-[10px] sm:text-xs uppercase tracking-[0.2em] sm:tracking-[0.25em] font-semibold text-white bg-white/10 px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-full border border-white/20 font-sans-custom">
                        Insights & Writings
                    </span>
                </div>

                <!-- Titles -->
                <h1 class="text-white font-extrabold leading-none text-4xl sm:text-6xl md:text-7xl lg:text-8xl mb-4 tracking-tight font-sans-custom">
                    Publications
                </h1>

                <div class="relative mb-6">
                    <h2 class="text-transparent bg-clip-text bg-gradient-to-r from-[#888888] via-[#dddddd] to-[#aaaaaa] text-4xl sm:text-6xl md:text-8xl lg:text-[100px] leading-none font-serif-custom italic font-light">
                        Tech Insights & Ideas
                    </h2>
                    <!-- Creative Line Break -->
                    <div class="flex justify-between items-center mt-4 opacity-30">
                        <div class="h-[1.5px] bg-white w-[45%]"></div>
                        <span class="text-white text-xs tracking-widest font-bold font-sans-custom">ARTICLES</span>
                        <div class="h-[1.5px] bg-white w-[45%]"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Grid Section -->
    <section class="mb-20 relative overflow-hidden" id="insights">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Category Filters -->
            <div class="flex justify-center mb-16 reveal">
                <div class="flex flex-wrap justify-center gap-3 font-sans-custom">
                    <button class="filter-btn px-6 py-2.5 rounded-full text-black text-xs font-bold bg-white shadow-md transition-all duration-300" data-filter="all">
                        All Articles
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

            <!-- Blog Grid (3 cols on desktop) -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="blogGrid">

                <!-- Article 1 -->
                <div class="glowing-card rounded-2xl overflow-hidden group reveal flex flex-col justify-between h-full" data-category="design">
                    <div class="relative overflow-hidden aspect-[16/10]">
                        <img src="https://images.unsplash.com/photo-1541462608141-2f682d859cc9?auto=format&fit=crop&w=500&q=80"
                            alt="UI Design trends article illustration" class="w-full h-full object-cover grayscale group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8 flex flex-col justify-between flex-grow">
                        <div>
                            <div class="flex items-center justify-between text-xs text-gray-500 font-semibold font-sans-custom mb-3">
                                <span>UI/UX DESIGN | Admin</span>
                                <span>5 MIN READ</span>
                            </div>
                            <h4 class="text-white text-xl font-bold mb-4 group-hover:text-[#00e5ff] transition-colors font-sans-custom">
                                Modernizing Dark Mode Aesthetics in 2026
                            </h4>
                            <p class="text-gray-500 text-sm leading-relaxed mb-6 font-sans-custom">
                                Discover the principles of high-contrast editorial typography paired with low-glow neutral color grids for premium interface aesthetics.
                            </p>
                        </div>
                        <a href="{{ route('blogs-details') }}" class="inline-flex items-center gap-2 text-white font-bold text-sm hover:text-[#00e5ff] transition-colors font-sans-custom mt-auto">
                            Read Article <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="glowing-card rounded-2xl overflow-hidden group reveal flex flex-col justify-between h-full" data-category="development" style="transition-delay: 50ms;">
                    <div class="relative overflow-hidden aspect-[16/10]">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=500&q=80"
                            alt="Code structure optimization" class="w-full h-full object-cover grayscale group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8 flex flex-col justify-between flex-grow">
                        <div>
                            <div class="flex items-center justify-between text-xs text-gray-500 font-semibold font-sans-custom mb-3">
                                <span>DEVELOPMENT</span>
                                <span>8 MIN READ</span>
                            </div>
                            <h4 class="text-white text-xl font-bold mb-4 group-hover:text-[#00e5ff] transition-colors font-sans-custom">
                                Optimizing Layout Performance Standards
                            </h4>
                            <p class="text-gray-500 text-sm leading-relaxed mb-6 font-sans-custom">
                                Why structured semantic HTML paired with custom CSS variables outperforms heavy libraries in page speed diagnostics and Lighthouse ratings.
                            </p>
                        </div>
                        <a href="contact.html" class="inline-flex items-center gap-2 text-white font-bold text-sm hover:text-[#00e5ff] transition-colors font-sans-custom mt-auto">
                            Read Article <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="glowing-card rounded-2xl overflow-hidden group reveal flex flex-col justify-between h-full" data-category="branding" style="transition-delay: 100ms;">
                    <div class="relative overflow-hidden aspect-[16/10]">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=500&q=80"
                            alt="Digital rebranding guidelines" class="w-full h-full object-cover grayscale group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8 flex flex-col justify-between flex-grow">
                        <div>
                            <div class="flex items-center justify-between text-xs text-gray-500 font-semibold font-sans-custom mb-3">
                                <span>BRANDING</span>
                                <span>6 MIN READ</span>
                            </div>
                            <h4 class="text-white text-xl font-bold mb-4 group-hover:text-[#00e5ff] transition-colors font-sans-custom">
                                Core Values For Digital Rebranding
                            </h4>
                            <p class="text-gray-500 text-sm leading-relaxed mb-6 font-sans-custom">
                                A checklist on structuring brand storytelling visual timelines to increase organic user engagement and convert visitors.
                            </p>
                        </div>
                        <a href="contact.html" class="inline-flex items-center gap-2 text-white font-bold text-sm hover:text-[#00e5ff] transition-colors font-sans-custom mt-auto">
                            Read Article <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Article 4 -->
                <div class="glowing-card rounded-2xl overflow-hidden group reveal flex flex-col justify-between h-full" data-category="development" style="transition-delay: 150ms;">
                    <div class="relative overflow-hidden aspect-[16/10]">
                        <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=500&q=80"
                            alt="CSS grid systems" class="w-full h-full object-cover grayscale group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8 flex flex-col justify-between flex-grow">
                        <div>
                            <div class="flex items-center justify-between text-xs text-gray-500 font-semibold font-sans-custom mb-3">
                                <span>DEVELOPMENT</span>
                                <span>4 MIN READ</span>
                            </div>
                            <h4 class="text-white text-xl font-bold mb-4 group-hover:text-[#00e5ff] transition-colors font-sans-custom">
                                The Evolution of Responsive CSS Grids
                            </h4>
                            <p class="text-gray-500 text-sm leading-relaxed mb-6 font-sans-custom">
                                Exploring structural upgrades in browser CSS layouts, modern fraction allocations, and building fluid layouts without media queries.
                            </p>
                        </div>
                        <a href="contact.html" class="inline-flex items-center gap-2 text-white font-bold text-sm hover:text-[#00e5ff] transition-colors font-sans-custom mt-auto">
                            Read Article <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Article 5 -->
                <div class="glowing-card rounded-2xl overflow-hidden group reveal flex flex-col justify-between h-full" data-category="design" style="transition-delay: 200ms;">
                    <div class="relative overflow-hidden aspect-[16/10]">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=500&q=80"
                            alt="Minimalist design" class="w-full h-full object-cover grayscale group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8 flex flex-col justify-between flex-grow">
                        <div>
                            <div class="flex items-center justify-between text-xs text-gray-500 font-semibold font-sans-custom mb-3">
                                <span>UI/UX DESIGN</span>
                                <span>7 MIN READ</span>
                            </div>
                            <h4 class="text-white text-xl font-bold mb-4 group-hover:text-[#00e5ff] transition-colors font-sans-custom">
                                Psychology of Minimalism in Interfaces
                            </h4>
                            <p class="text-gray-500 text-sm leading-relaxed mb-6 font-sans-custom">
                                How strategic whitespace increases user reading comprehension, reduces fatigue, and focuses interaction on key conversion components.
                            </p>
                        </div>
                        <a href="contact.html" class="inline-flex items-center gap-2 text-white font-bold text-sm hover:text-[#00e5ff] transition-colors font-sans-custom mt-auto">
                            Read Article <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Article 6 -->
                <div class="glowing-card rounded-2xl overflow-hidden group reveal flex flex-col justify-between h-full" data-category="design" style="transition-delay: 250ms;">
                    <div class="relative overflow-hidden aspect-[16/10]">
                        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=500&q=80"
                            alt="Visual motions design" class="w-full h-full object-cover grayscale group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8 flex flex-col justify-between flex-grow">
                        <div>
                            <div class="flex items-center justify-between text-xs text-gray-500 font-semibold font-sans-custom mb-3">
                                <span>UI/UX DESIGN</span>
                                <span>6 MIN READ</span>
                            </div>
                            <h4 class="text-white text-xl font-bold mb-4 group-hover:text-[#00e5ff] transition-colors font-sans-custom">
                                Bespoke Animations: When to Use Motion
                            </h4>
                            <p class="text-gray-500 text-sm leading-relaxed mb-6 font-sans-custom">
                                Guidelines on using micro-animations, trailing effects, and page-scroll reveals without compromising web performance budgets.
                            </p>
                        </div>
                        <a href="contact.html" class="inline-flex items-center gap-2 text-white font-bold text-sm hover:text-[#00e5ff] transition-colors font-sans-custom mt-auto">
                            Read Article <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                    </div>
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