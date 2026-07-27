    <!-- Modals Container -->
    <!-- Contact Modal -->
    <div id="contactModal" class="fixed inset-0 z-[100] hidden items-center justify-center px-4">
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="closeModals()"></div>
        <div class="bg-[#0c0c0e] border border-gray-800 rounded-3xl p-8 max-w-md w-full relative z-10 transform scale-95 opacity-0 transition-all duration-300"
            id="contactModalContent">
            <button onclick="closeModals()" class="absolute top-6 right-6 text-gray-500 hover:text-white transition-colors">
                <i class="fas fa-times text-xl"></i>
            </button>
            <h3 class="text-white text-2xl font-bold mb-6 font-sans-custom">Hire Me For Projects</h3>
            <form id="modalContactForm" class="space-y-5 font-sans-custom">
                <div class="flex flex-col">
                    <label class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Name</label>
                    <input type="text" required placeholder="John Doe"
                        class="bg-black border border-gray-800 rounded-xl px-4 py-3 text-white focus:border-[#00e5ff] focus:outline-none transition-colors">
                </div>
                <div class="flex flex-col">
                    <label class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Email</label>
                    <input type="email" required placeholder="name@domain.com"
                        class="bg-black border border-gray-800 rounded-xl px-4 py-3 text-white focus:border-[#00e5ff] focus:outline-none transition-colors">
                </div>
                <div class="flex flex-col">
                    <label class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Project Description</label>
                    <textarea required rows="4" placeholder="Tell me about your project goals..."
                        class="bg-black border border-gray-800 rounded-xl px-4 py-3 text-white focus:border-[#00e5ff] focus:outline-none transition-colors resize-none"></textarea>
                </div>
                <button type="submit" class="w-full py-4 rounded-xl bg-[#00e5ff] text-black font-bold shadow-lg hover:scale-[1.02] active:scale-[0.98] transition-all duration-300">
                    Send Request
                </button>
            </form>
            <div id="modalContactSuccess" class="hidden text-center py-8">
                <div class="w-16 h-16 rounded-full bg-[#00e5ff]/20 text-[#00e5ff] flex items-center justify-center text-3xl mx-auto mb-4">
                    <i class="fas fa-check"></i>
                </div>
                <h3 class="text-white text-xl font-bold mb-2 font-sans-custom">Request Sent!</h3>
                <p class="text-gray-400 text-sm">Geroz will contact you within 24 hours.</p>
            </div>
        </div>
    </div>

    <!-- Service Model -->
    <div id="serviceModal" class="fixed inset-0 z-[100] hidden items-center justify-center px-4">
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="closeModals()"></div>
        <div class="bg-[#0c0c0e] border border-gray-800 rounded-3xl p-8 max-w-lg w-full relative z-10 transform scale-95 opacity-0 transition-all duration-300"
            id="serviceModalContent">
            <button onclick="closeModals()"
                class="absolute top-6 right-6 text-gray-500 hover:text-white transition-colors">
                <i class="fas fa-times text-xl"></i>
            </button>
            <div id="serviceModalIcon"
                class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-[#00e5ff] text-3xl mb-6">
                <i class="fas fa-laptop-code"></i>
            </div>
            <h3 id="serviceModalTitle" class="text-white text-2xl font-bold mb-4 font-sans-custom">Service</h3>
            <p id="serviceModalDesc" class="text-gray-400 text-base leading-relaxed font-sans-custom">Desc</p>
        </div>
    </div>

    <!-- Review Model -->
    <div id="reviewModal" class="fixed inset-0 z-[100] hidden items-center justify-center px-4">
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="closeModals()"></div>
        <div class="bg-[#0c0c0e] border border-gray-800 rounded-3xl p-8 max-w-xl w-full relative z-10 transform scale-95 opacity-0 transition-all duration-300"
            id="reviewModalContent">
            <button onclick="closeModals()"
                class="absolute top-6 right-6 text-gray-500 hover:text-white transition-colors">
                <i class="fas fa-times text-xl"></i>
            </button>
            <div class="flex gap-1 text-[#00e5ff] text-lg mb-6">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                    class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <p id="reviewModalText"
                class="text-gray-300 text-lg md:text-xl leading-relaxed italic mb-8 font-sans-custom">"..."</p>
            <div class="flex items-center gap-4 border-t border-gray-900 pt-6">
                <img id="reviewModalImage" src="" alt="Client User"
                    class="w-14 h-14 rounded-full object-cover grayscale">
                <div>
                    <h4 id="reviewModalName" class="text-white font-bold font-sans-custom text-base">Name</h4>
                    <p id="reviewModalRole" class="text-xs text-gray-500 uppercase tracking-widest">Role</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Review Model -->
    <div id="addReviewModal" class="fixed inset-0 z-[100] hidden items-center justify-center px-4">
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="closeModals()"></div>
        <div class="bg-[#0c0c0e] border border-gray-800 rounded-3xl p-8 max-w-md w-full relative z-10 transform scale-95 opacity-0 transition-all duration-300"
            id="addReviewModalContent">
            <button onclick="closeModals()"
                class="absolute top-6 right-6 text-gray-500 hover:text-white transition-colors">
                <i class="fas fa-times text-xl"></i>
            </button>
            <h3 class="text-white text-2xl font-bold mb-6 font-sans-custom">Add Your Review</h3>
            <form id="addReviewForm" class="space-y-5 font-sans-custom">
                <div class="flex flex-col">
                    <label class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Name</label>
                    <input type="text" required placeholder="John Doe"
                        class="bg-black border border-gray-800 rounded-xl px-4 py-3 text-white focus:border-[#00e5ff] focus:outline-none transition-colors">
                </div>
                <div class="flex flex-col">
                    <label class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Position /
                        Company</label>
                    <input type="text" required placeholder="CEO, TechCorp"
                        class="bg-black border border-gray-800 rounded-xl px-4 py-3 text-white focus:border-[#00e5ff] focus:outline-none transition-colors">
                </div>
                <div class="flex flex-col">
                    <label class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Rating</label>
                    <div class="flex gap-2 text-2xl text-gray-600 mb-2" id="addReviewStarRating">
                        <i class="fas fa-star cursor-pointer hover:text-[#00e5ff] transition-colors"
                            data-rating="1"></i>
                        <i class="fas fa-star cursor-pointer hover:text-[#00e5ff] transition-colors"
                            data-rating="2"></i>
                        <i class="fas fa-star cursor-pointer hover:text-[#00e5ff] transition-colors"
                            data-rating="3"></i>
                        <i class="fas fa-star cursor-pointer hover:text-[#00e5ff] transition-colors"
                            data-rating="4"></i>
                        <i class="fas fa-star cursor-pointer hover:text-[#00e5ff] transition-colors"
                            data-rating="5"></i>
                    </div>
                    <input type="hidden" id="addReviewRatingInput" required value="5">
                </div>
                <div class="flex flex-col">
                    <label class="text-xs text-gray-400 uppercase tracking-widest font-bold mb-2">Review</label>
                    <textarea required rows="4" placeholder="Your experience..."
                        class="bg-black border border-gray-800 rounded-xl px-4 py-3 text-white focus:border-[#00e5ff] focus:outline-none transition-colors resize-none"></textarea>
                </div>
                <button type="submit"
                    class="w-full py-4 rounded-xl bg-[#00e5ff] text-black font-bold shadow-lg hover:scale-[1.02] active:scale-[0.98] transition-all duration-300">
                    Submit Review
                </button>
            </form>
            <div id="addReviewSuccess" class="hidden text-center py-8">
                <div
                    class="w-16 h-16 rounded-full bg-[#00e5ff]/20 text-[#00e5ff] flex items-center justify-center text-3xl mx-auto mb-4">
                    <i class="fas fa-check"></i>
                </div>
                <h3 class="text-white text-xl font-bold mb-2 font-sans-custom">Thank You!</h3>
                <p class="text-gray-400 text-sm">Your review has been submitted successfully.</p>
            </div>
        </div>
    </div>