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
    <style>
        /* Hide default details marker */
        details summary::-webkit-details-marker {
            display: none;
        }

        details summary {
            list-style: none;
        }
    </style>
</head>

<body class="bg-[#000000] text-[#dddddd]">

    <!-- Header Section Start -->
    @include('layout.header')
    <!-- Header Section End -->


    <!-- Services Hero Section -->
    <section class="relative sm:py-6 min-h-[40vh] flex items-center pt-20 overflow-hidden">
        <div class="absolute inset-0 radial-glow-violet opacity-40"></div>
        <div class="absolute top-20 right-10 w-96 h-96 radial-glow-coral opacity-20"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-12 w-full relative z-10 py-3 sm:py-8">
            <div class="reveal">
                <!-- Rotating Star Badge -->
                <div class="flex items-center gap-3 sm:gap-4 mb-6">
                    <span class="text-3xl sm:text-5xl text-white animate-spin-slow">✱</span>
                    <span class="text-[10px] sm:text-xs uppercase tracking-[0.2em] sm:tracking-[0.25em] font-semibold text-white bg-white/10 px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-full border border-white/20 font-sans-custom">
                        What I Deliver
                    </span>
                </div>

                <!-- Titles -->
                <h1 class="text-white font-extrabold leading-none text-4xl sm:text-6xl md:text-7xl lg:text-8xl mb-4 tracking-tight font-sans-custom">
                    Specialized
                </h1>

                <div class="relative mb-6">
                    <h2 class="text-transparent bg-clip-text bg-gradient-to-r from-[#888888] via-[#dddddd] to-[#aaaaaa] text-4xl sm:text-6xl md:text-8xl lg:text-[100px] leading-none font-serif-custom italic font-light">
                        Digital Solutions
                    </h2>
                    <!-- Creative Line Break -->
                    <div class="flex justify-between items-center mt-4 opacity-30">
                        <div class="h-[1.5px] bg-white w-[45%]"></div>
                        <span class="text-white text-xs tracking-widest font-bold font-sans-custom">SERVICES</span>
                        <div class="h-[1.5px] bg-white w-[45%]"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Services Grid -->
    <section class="py-12 sm:py-10 relative overflow-hidden" id="services">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8">

                <!-- Service Card 1 -->
                <div class="glowing-card p-10 rounded-3xl reveal relative group flex flex-col justify-between min-h-[350px]">
                    <div>
                        <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-white text-3xl mb-8 group-hover:bg-white group-hover:text-black transition-all duration-300">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="text-white text-2xl font-bold mb-4 font-sans-custom">Frontend Development</h3>
                        <p class="text-gray-500 text-sm leading-relaxed font-sans-custom">
                            Constructing pixel-perfect, interactive frontend applications. Writing modular, responsive CSS and optimized script bundles for instant rendering and smooth page scrolling states.
                        </p>
                    </div>
                    <ul class="text-xs text-gray-500 space-y-2 mt-6 border-t border-white/5 pt-6 font-sans-custom">
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Semantic Markup (HTML5)</li>
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Custom CSS & SASS Variables</li>
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Tailwind Layout Auditing</li>
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Dynamic Vanilla JavaScript Modules</li>
                    </ul>
                </div>

                <!-- Service Card 2 -->
                <div class="glowing-card p-10 rounded-3xl reveal relative group flex flex-col justify-between min-h-[350px]" style="transition-delay: 100ms;">
                    <div>
                        <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-white text-3xl mb-8 group-hover:bg-white group-hover:text-black transition-all duration-300">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3 class="text-white text-2xl font-bold mb-4 font-sans-custom">UI/UX Interface Design</h3>
                        <p class="text-gray-500 text-sm leading-relaxed font-sans-custom">
                            Designing custom digital layouts with high visual impact. Setting typographic hierarchies, designing modular Figma wireframes, and customizing dark-mode theme color palettes.
                        </p>
                    </div>
                    <ul class="text-xs text-gray-500 space-y-2 mt-6 border-t border-white/5 pt-6 font-sans-custom">
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Typographic Hierarchies & Layouts</li>
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Figma Prototyping & Templates</li>
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Neon Contrast & Dark Theme Systems</li>
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Micro-Animations & Hover Effects</li>
                    </ul>
                </div>

                <!-- Service Card 3 -->
                <div class="glowing-card p-10 rounded-3xl reveal relative group flex flex-col justify-between min-h-[350px]">
                    <div>
                        <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-white text-3xl mb-8 group-hover:bg-white group-hover:text-black transition-all duration-300">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <h3 class="text-white text-2xl font-bold mb-4 font-sans-custom">Custom E-Commerce</h3>
                        <p class="text-gray-500 text-sm leading-relaxed font-sans-custom">
                            Structuring custom shopping systems, interactive filters, inventory controls, secure digital carts, client-side checkout modules, and control panels.
                        </p>
                    </div>
                    <ul class="text-xs text-gray-500 space-y-2 mt-6 border-t border-white/5 pt-6 font-sans-custom">
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Custom Digital Product Carts</li>
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Payment Gateway Configurations</li>
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Fast Dynamic Inventory Filtering</li>
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Admin Control Panel Interfaces</li>
                    </ul>
                </div>

                <!-- Service Card 4 -->
                <div class="glowing-card p-10 rounded-3xl reveal relative group flex flex-col justify-between min-h-[350px]" style="transition-delay: 100ms;">
                    <div>
                        <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-white text-3xl mb-8 group-hover:bg-white group-hover:text-black transition-all duration-300">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3 class="text-white text-2xl font-bold mb-4 font-sans-custom">Performance SEO Audit</h3>
                        <p class="text-gray-500 text-sm leading-relaxed font-sans-custom">
                            Analyzing code layout, running page-speed diagnostics, configuring metadata structures, structuring heading Hierarchies, and reducing scripts for fast indexation.
                        </p>
                    </div>
                    <ul class="text-xs text-gray-500 space-y-2 mt-6 border-t border-white/5 pt-6 font-sans-custom">
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Lighthouse Diagnostics & Fixes</li>
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Custom Meta Headers Configuration</li>
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Asset & CSS Size Reduction</li>
                        <li><i class="fas fa-check text-white mr-2 text-[10px]"></i>Structured Semantic Hierarchy</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Packages / Pricing Grid Section -->
    <section class="bg-[#08080a] py-16 sm:py-32 border-y border-gray-900 relative overflow-hidden" id="packages">
        <div class="absolute left-[-200px] bottom-1/4 w-[400px] h-[400px] radial-glow-violet opacity-10"></div>
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20 reveal">
                <span class="text-white font-bold uppercase tracking-widest text-xs font-sans-custom">TRANSPARENCY</span>
                <h2 class="text-white text-4xl md:text-5xl font-black tracking-tight mt-3 font-sans-custom">
                    Development Packages
                </h2>
                <div class="w-16 h-[1.5px] bg-white mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">

                <!-- Package 1 -->
                <div class="glowing-card p-8 sm:p-10 rounded-3xl reveal flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold text-gray-500 uppercase tracking-widest font-sans-custom">Starter Tier</span>
                        <h4 class="text-white text-2xl font-bold mt-2 mb-4 font-sans-custom">Style System</h4>
                        <div class="flex items-baseline gap-2 mb-8">
                            <span class="text-white text-5xl font-black font-sans-custom">$1,200</span>
                            <span class="text-gray-500 text-sm font-sans-custom">/ One-off</span>
                        </div>
                        <p class="text-gray-500 text-sm leading-relaxed mb-8 font-sans-custom">
                            Perfect for establishing a visual identity. Includes custom CSS styles, Figma layouts, typography structures, and simple style templates.
                        </p>
                        <div class="h-px bg-white/5 mb-8"></div>
                        <ul class="text-sm text-gray-400 space-y-4 font-sans-custom">
                            <li><i class="fas fa-check text-[#00e5ff] mr-3"></i>3 Custom Figma Page Mockups</li>
                            <li><i class="fas fa-check text-[#00e5ff] mr-3"></i>Typography Grid Setup</li>
                            <li><i class="fas fa-check text-[#00e5ff] mr-3"></i>Modular CSS Variable Tokens</li>
                            <li><i class="fas fa-check text-[#00e5ff] mr-3"></i>1-Round Design Revision</li>
                        </ul>
                    </div>
                    <a href="javascript:void(0)" onclick="openContactModal()" class="block text-center mt-12 py-4 bg-white/5 border border-white/10 hover:bg-white hover:text-black hover:border-white rounded-xl text-white font-bold tracking-wider text-xs uppercase transition-all duration-300">
                        Inquire Package
                    </a>
                </div>

                <!-- Package 2 - Highlighted -->
                <div class="glowing-card p-8 sm:p-10 rounded-3xl reveal border-white/20 bg-[#0c0c0e]/80 shadow-2xl relative flex flex-col justify-between group" style="transition-delay: 100ms;">
                    <div class="absolute top-6 right-6 bg-[#00e5ff]/10 border border-[#00e5ff]/20 text-[#00e5ff] text-[9px] font-bold uppercase tracking-widest px-3 py-1 rounded-full font-sans-custom">
                        Recommended
                    </div>
                    <div>
                        <span class="text-xs font-bold text-[#00e5ff] uppercase tracking-widest font-sans-custom">Interactive Tier</span>
                        <h4 class="text-white text-2xl font-bold mt-2 mb-4 font-sans-custom">Core Custom Website</h4>
                        <div class="flex items-baseline gap-2 mb-8">
                            <span class="text-white text-5xl font-black font-sans-custom">$3,500</span>
                            <span class="text-gray-500 text-sm font-sans-custom">/ One-off</span>
                        </div>
                        <p class="text-gray-500 text-sm leading-relaxed mb-8 font-sans-custom">
                            A complete performant multi-page website build. Equipped with standard SEO markup, custom cursor logic, scroll animations, and contact form.
                        </p>
                        <div class="h-px bg-white/5 mb-8"></div>
                        <ul class="text-sm text-gray-400 space-y-4 font-sans-custom">
                            <li><i class="fas fa-check text-[#00e5ff] mr-3"></i>Up to 5 Fully Responsive Pages</li>
                            <li><i class="fas fa-check text-[#00e5ff] mr-3"></i>Bespoke Cursor & Scroll Reveal</li>
                            <li><i class="fas fa-check text-[#00e5ff] mr-3"></i>Lighthouse Performance Score 90+</li>
                            <li><i class="fas fa-check text-[#00e5ff] mr-3"></i>Active Floating Contact Form</li>
                            <li><i class="fas fa-check text-[#00e5ff] mr-3"></i>3 Weeks Delivery Timeline</li>
                        </ul>
                    </div>
                    <a href="javascript:void(0)" onclick="openContactModal()" class="block text-center mt-12 py-4 bg-white text-black hover:bg-black hover:text-white border border-transparent hover:border-white rounded-xl font-bold tracking-wider text-xs uppercase transition-all duration-300">
                        Inquire Package
                    </a>
                </div>

                <!-- Package 3 -->
                <div class="glowing-card p-8 sm:p-10 rounded-3xl reveal flex flex-col justify-between" style="transition-delay: 200ms;">
                    <div>
                        <span class="text-xs font-bold text-gray-500 uppercase tracking-widest font-sans-custom">Custom Tier</span>
                        <h4 class="text-white text-2xl font-bold mt-2 mb-4 font-sans-custom">Bespoke Platform</h4>
                        <div class="flex items-baseline gap-2 mb-8">
                            <span class="text-white text-5xl font-black font-sans-custom">$6,800</span>
                            <span class="text-gray-500 text-sm font-sans-custom">/ Starting</span>
                        </div>
                        <p class="text-gray-500 text-sm leading-relaxed mb-8 font-sans-custom">
                            For complex digital platforms. Features custom e-commerce structures, client dashboard consoles, payment systems, and administrative control panels.
                        </p>
                        <div class="h-px bg-white/5 mb-8"></div>
                        <ul class="text-sm text-gray-400 space-y-4 font-sans-custom">
                            <li><i class="fas fa-check text-[#00e5ff] mr-3"></i>Unlimited Custom Layout Pages</li>
                            <li><i class="fas fa-check text-[#00e5ff] mr-3"></i>Full Custom E-Commerce Cart & Filtering</li>
                            <li><i class="fas fa-check text-[#00e5ff] mr-3"></i>API Endpoint Connections</li>
                            <li><i class="fas fa-check text-[#00e5ff] mr-3"></i>Administrative Dashboard Interface</li>
                            <li><i class="fas fa-check text-[#00e5ff] mr-3"></i>4 Weeks Support Post-Launch</li>
                        </ul>
                    </div>
                    <a href="javascript:void(0)" onclick="openContactModal()" class="block text-center mt-12 py-4 bg-white/5 border border-white/10 hover:bg-white hover:text-black hover:border-white rounded-xl text-white font-bold tracking-wider text-xs uppercase transition-all duration-300">
                        Inquire Package
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Accordion Section -->
    <section class="py-16 sm:py-32 relative overflow-hidden" id="faq">
        <div class="absolute right-[-150px] top-1/4 w-[350px] h-[350px] radial-glow-coral opacity-10"></div>
        <div class="max-w-4xl mx-auto px-6">

            <div class="text-center mb-20 reveal">
                <span class="text-white font-bold uppercase tracking-widest text-xs font-sans-custom">COMMON INQUIRIES</span>
                <h2 class="text-white text-4xl md:text-5xl font-black tracking-tight mt-3 font-sans-custom">
                    Frequently Asked Questions
                </h2>
                <div class="w-16 h-[1.5px] bg-white mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="space-y-4 reveal">

                <!-- FAQ item 1 -->
                <details class="group border-b border-white/10 py-6 text-left cursor-pointer">
                    <summary class="flex justify-between items-center text-white text-lg font-bold font-sans-custom list-none">
                        How long does a standard website build take?
                        <span class="text-xl font-light text-gray-500 transition-transform duration-300 group-open:rotate-45">+</span>
                    </summary>
                    <div class="mt-4 text-gray-500 text-sm leading-relaxed font-sans-custom">
                        A standard creative landing page or multi-page layout is typically completed in 2 to 4 weeks. This timeline includes the initial discovery session, interactive wireframes, custom styling, responsive optimization, and SEO audit.
                    </div>
                </details>

                <!-- FAQ item 2 -->
                <details class="group border-b border-white/10 py-6 text-left cursor-pointer">
                    <summary class="flex justify-between items-center text-white text-lg font-bold font-sans-custom list-none">
                        What technologies do you use for development?
                        <span class="text-xl font-light text-gray-500 transition-transform duration-300 group-open:rotate-45">+</span>
                    </summary>
                    <div class="mt-4 text-gray-500 text-sm leading-relaxed font-sans-custom">
                        I specialize in core frontend standards: semantic HTML5, vanilla CSS/SASS, Tailwind CSS frameworking, and pure JavaScript. For larger web apps requiring complex state and routing, I utilize modern frameworks like Next.js or Vite.
                    </div>
                </details>

                <!-- FAQ item 3 -->
                <details class="group border-b border-white/10 py-6 text-left cursor-pointer">
                    <summary class="flex justify-between items-center text-white text-lg font-bold font-sans-custom list-none">
                        Do you offer monthly maintenance support?
                        <span class="text-xl font-light text-gray-500 transition-transform duration-300 group-open:rotate-45">+</span>
                    </summary>
                    <div class="mt-4 text-gray-500 text-sm leading-relaxed font-sans-custom">
                        Yes, I provide optional monthly maintenance plans. These plans cover server deployment monitoring, security patching, Lighthouse performance auditing, content adjustments, and styling modifications.
                    </div>
                </details>

                <!-- FAQ item 4 -->
                <details class="group border-b border-white/10 py-6 text-left cursor-pointer">
                    <summary class="flex justify-between items-center text-white text-lg font-bold font-sans-custom list-none">
                        Will my website be optimized for mobile devices?
                        <span class="text-xl font-light text-gray-500 transition-transform duration-300 group-open:rotate-45">+</span>
                    </summary>
                    <div class="mt-4 text-gray-500 text-sm leading-relaxed font-sans-custom">
                        Absolutely. Every website I construct is engineered with fluid layouts from the ground up, ensuring seamless formatting and responsive navigation across iOS, Android, tablets, and desktop resolutions.
                    </div>
                </details>

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