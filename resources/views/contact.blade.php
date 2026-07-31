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


    <!-- Contact Hero Section -->
    <section class="relative sm:py-6 min-h-[40vh] flex items-center pt-20 overflow-hidden">
        <div class="absolute inset-0 radial-glow-violet opacity-40"></div>
        <div class="absolute top-20 right-10 w-96 h-96 radial-glow-coral opacity-20"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-12 w-full relative z-10 py-3">
            <div class="reveal">
                <!-- Rotating Star Badge -->
                <div class="flex items-center gap-3 sm:gap-4 mb-6">
                    <span class="text-3xl sm:text-5xl text-white animate-spin-slow">✱</span>
                    <span class="text-[10px] sm:text-xs uppercase tracking-[0.2em] sm:tracking-[0.25em] font-semibold text-white bg-white/10 px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-full border border-white/20 font-sans-custom">
                        Get In Touch
                    </span>
                </div>

                <!-- Titles -->
                <h1 class="text-white font-extrabold leading-none text-4xl sm:text-6xl md:text-7xl lg:text-8xl mb-4 tracking-tight font-sans-custom">
                    Start A
                </h1>

                <div class="relative mb-6">
                    <h2 class="text-transparent bg-clip-text bg-gradient-to-r from-[#888888] via-[#dddddd] to-[#aaaaaa] text-4xl sm:text-6xl md:text-8xl lg:text-[100px] leading-none font-serif-custom italic font-light">
                        Conversation
                    </h2>
                    <!-- Creative Line Break -->
                    <div class="flex justify-between items-center mt-4 opacity-30">
                        <div class="h-[1.5px] bg-white w-[45%]"></div>
                        <span class="text-white text-xs tracking-widest font-bold font-sans-custom">CONNECT</span>
                        <div class="h-[1.5px] bg-white w-[45%]"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Connect Details & Form Grid Section -->
    <section class="mb-20 relative overflow-hidden" id="contactSection">
        <div class="absolute left-[-200px] bottom-[-200px] w-[500px] h-[500px] radial-glow-violet opacity-10"></div>
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-16 items-start">

                <!-- Left Connect Details (5 cols) -->
                <div class="lg:col-span-5 reveal-left space-y-12">
                    <div>
                        <h3 class="text-white text-3xl font-black mb-6 font-sans-custom">Let's Create Together</h3>
                        <p class="text-gray-500 text-base leading-relaxed font-sans-custom">
                            Have an active interface mockup or development package inquiry? Use the form to reach out. I typically analyze scopes and provide estimates within one business day.
                        </p>
                    </div>

                    <div class="space-y-6 font-sans-custom">
                        <!-- Detail 1 -->
                        <div class="flex items-center gap-6">
                            <div class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center text-white text-xl border border-white/10">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="text-xs text-gray-500 uppercase tracking-widest">Email Address</h4>
                                <a href="mailto:hello@gerozportfolio.com" class="text-white text-lg font-semibold hover:text-[#00e5ff] transition-colors">hello@gerozportfolio.com</a>
                            </div>
                        </div>

                        <!-- Detail 2 -->
                        <div class="flex items-center gap-6">
                            <div class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center text-white text-xl border border-white/10">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h4 class="text-xs text-gray-500 uppercase tracking-widest">Phone Number</h4>
                                <a href="tel:+15551234567" class="text-white text-lg font-semibold hover:text-[#00e5ff] transition-colors">+1 (555) 123-4567</a>
                            </div>
                        </div>

                        <!-- Detail 3 -->
                        <div class="flex items-center gap-6">
                            <div class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center text-white text-xl border border-white/10">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="text-xs text-gray-500 uppercase tracking-widest">Studio Location</h4>
                                <p class="text-white text-lg font-semibold">New York City, NY, USA</p>
                            </div>
                        </div>
                    </div>

                    <!-- Large Social icons block -->
                    <div class="pt-6 border-t border-white/5">
                        <h4 class="text-xs text-gray-500 uppercase tracking-widest font-semibold font-sans-custom mb-4">Follow My Works</h4>
                        <div class="flex gap-4">
                            <a href="#" class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-white hover:text-black hover:border-white hover:scale-115 transition-all duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-white hover:text-black hover:border-white hover:scale-115 transition-all duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-white hover:text-black hover:border-white hover:scale-115 transition-all duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:bg-white hover:text-black hover:border-white hover:scale-115 transition-all duration-300">
                                <i class="fab fa-x-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Form Input Box (7 cols) -->
                <div class="lg:col-span-7 glowing-card p-8 sm:p-12 rounded-3xl reveal-right">

                    <form id="contactForm" class="space-y-8 font-sans-custom">

                        <!-- Name Input -->
                        <div class="flex flex-col">
                            <label for="name" class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Your Full Name</label>
                            <input type="text" id="name" required placeholder="Aniket Kumar"
                                class="floating-input py-3 text-white focus:border-white transition-colors placeholder:text-gray-800">
                        </div>

                        <!-- Email Input -->
                        <div class="flex flex-col">
                            <label for="email" class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Your Email Address</label>
                            <input type="email" id="email" required placeholder="exam@gmail.com"
                                class="floating-input py-3 text-white focus:border-white transition-colors placeholder:text-gray-800">
                        </div>

                        <!-- Phone Input -->
                        <div class="flex flex-col">
                            <label for="phone" class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Your Phone No.</label>
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
                            <label for="message" class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Project Specifications</label>
                            <textarea id="message" rows="4" required placeholder="Tell me about your website goals..."
                                class="floating-input py-3 text-white focus:border-white transition-colors placeholder:text-gray-800 resize-none"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full py-4 rounded-xl bg-white text-black font-bold shadow-lg hover:scale-[1.02] active:scale-[0.98] border border-white hover:bg-black hover:text-white transition-all duration-300">
                            Send Inquiry <i class="fas fa-paper-plane ml-2 text-xs"></i>
                        </button>
                    </form>

                    <!-- Success Feedback Block -->
                    <div id="formSuccess" class="hidden text-center py-16 font-sans-custom">
                        <div class="w-20 h-20 rounded-full bg-[#00e5ff]/20 text-[#00e5ff] flex items-center justify-center text-4xl mx-auto mb-6">
                            <i class="fas fa-check"></i>
                        </div>
                        <h3 class="text-white text-2xl font-bold mb-3">Message Sent!</h3>
                        <p class="text-gray-400 text-sm max-w-sm mx-auto leading-relaxed">
                            Thank you for reaching out. Your project specifications have been submitted successfully. Geroz will review and respond within 24 hours.
                        </p>
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