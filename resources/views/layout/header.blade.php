    <header class="fixed top-0 left-0 right-0 z-50 flex items-center h-16 md:h-24">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-10 w-full">
            <div class="flex items-center justify-between h-full">

                <!-- Logo -->
                <a href="{{ url('/') }}" class="flex items-center gap-3 group" id="my-logo">
                    <img src="{{ asset('front-end/assets/img/logo/anni.webp') }}" alt="Aniket Kumar Maurya">
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex items-center gap-10 font-sans-custom">
                    <a href="{{ url('/') }}"
                        class="text-white hover:text-gray-400 text-sm font-medium tracking-wider uppercase transition">
                        Home
                    </a>
                    <a href="{{ route('about-us') }}"
                        class="text-gray-500 hover:text-white text-sm font-medium tracking-wider uppercase transition">
                        About
                    </a>
                    <a href="{{ route('services') }}"
                        class="text-gray-500 hover:text-white text-sm font-medium tracking-wider uppercase transition">
                        Services
                    </a>
                    <a href="{{ route('my-work-gallary') }}"
                        class="text-gray-500 hover:text-white text-sm font-medium tracking-wider uppercase transition">
                        Projects
                    </a>
                    <a href="{{ route('blogs') }}"
                        class="text-gray-500 hover:text-white text-sm font-medium tracking-wider uppercase transition">
                        Blog
                    </a>
                    <a href="{{ route('contact-us') }}"
                        class="text-gray-500 hover:text-white text-sm font-medium tracking-wider uppercase transition">
                        Contact
                    </a>
                </nav>

                <!-- Right Side Button -->
                <div class="hidden lg:flex items-center gap-6 font-sans-custom">
                    <a href="javascript:void(0)" onclick="openContactModal()"
                        class="uppercase text-white text-sm font-bold tracking-widest hover:text-gray-400 transition">
                        Hire Me Now
                     </a>
                    <a href="javascript:void(0)" onclick="openContactModal()"
                        class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-black shadow-lg hover:scale-110 duration-300 border border-white hover:bg-black hover:text-white">
                        <i class="fas fa-arrow-right -rotate-45"></i>
                    </a>
                </div>

                <!-- Mobile Button -->
                <button id="menuBtn" class="lg:hidden text-2xl text-white hover:text-gray-400 transition">
                    <i class="fas fa-bars"></i>
                </button>

            </div>
        </div>

        <!-- Mobile Menu Navigation -->
        <div id="mobileMenu"
            class="hidden lg:hidden fixed left-0 w-full bg-[#08080a] border-t border-gray-900 shadow-2xl z-40">
            <div class="flex flex-col p-6 sm:p-8 space-y-5 font-sans-custom">
                <a href="{{ url('/') }}" class="text-white hover:text-gray-400 text-lg font-medium">Home</a>
                <a href="{{ route('about-us') }}" class="text-gray-400 hover:text-white text-lg font-medium">About</a>
                <a href="{{ route('services') }}" class="text-gray-400 hover:text-white text-lg font-medium">Services</a>
                <a href="{{ route('my-work-gallary') }}" class="text-gray-400 hover:text-white text-lg font-medium">Projects</a>
                <a href="about.html#experience" class="text-gray-400 hover:text-white text-lg font-medium">Resume</a>
                <a href="{{ route('blogs') }}" class="text-gray-400 hover:text-white text-lg font-medium">Blog</a>
                <a href="{{ route('contact-us') }}" class="text-gray-400 hover:text-white text-lg font-medium">Contact</a>

                <div class="flex gap-5 pt-4 text-gray-500">
                    <a href="https://in.linkedin.com/in/aniket-kumar-maurya-314941271" target="_blank" class="hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/Anni-16" target="_blank" class="hover:text-white"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.instagram.com/__.xanni01/" target="_blank" class="hover:text-white"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.pinterest.com/xanni01/" target="_blank" class="hover:text-white"><i class="fa-brands fa-pinterest"></i></a>
                    <a href="https://www.youtube.com/@_.xanni01_edit" target="_blank" class="hover:text-white"><i class="fab fa-youtube"></i></a>
                    <a href="https://x.com/aniketkuma35664" target="_blank" class="hover:text-white"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://dev.to/@anni16" target="_blank" class="hover:text-white"><i class="fa-brands fa-dev"></i></a>
                    <a href="https://www.behance.net/aniketkumar346" target="_blank" class="hover:text-white"><i class="fa-brands fa-behance"></i></a>

                </div>

                <a href="{{ route('contact-us') }} }}"
                    class="inline-block text-center mt-4 bg-white text-black border border-white px-6 py-3 rounded-full font-bold hover:bg-black hover:text-white transition-all duration-300">
                    Hire Me Now
                </a>
            </div>
        </div>
    </header>