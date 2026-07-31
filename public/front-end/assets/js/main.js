document.addEventListener("DOMContentLoaded", () => {
    // 1. Sticky Header Animation
    const header = document.querySelector("header");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 40) {
            header.classList.add("sticky-header");
        } else {
            header.classList.remove("sticky-header");
        }
    });

    // 2. Custom Trailing Cursor for Desktop
    if (window.innerWidth >= 1024) {
        const dot = document.createElement("div");
        dot.className = "custom-cursor-dot";
        const ring = document.createElement("div");
        ring.className = "custom-cursor-ring";
        document.body.appendChild(dot);
        document.body.appendChild(ring);

        let mouseX = 0,
            mouseY = 0;
        let ringX = 0,
            ringY = 0;
        let isMoving = false;

        document.addEventListener("mousemove", (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;

            // Dot follows mouse immediately
            dot.style.left = `${mouseX}px`;
            dot.style.top = `${mouseY}px`;

            if (!isMoving) {
                dot.style.opacity = "1";
                ring.style.opacity = "1";
                isMoving = true;
            }
        });

        // Smooth trailing animation for ring using interpolation
        function animateRing() {
            let dX = mouseX - ringX;
            let dY = mouseY - ringY;
            ringX += dX * 0.12;
            ringY += dY * 0.12;

            ring.style.left = `${ringX}px`;
            ring.style.top = `${ringY}px`;

            requestAnimationFrame(animateRing);
        }
        animateRing();

        // Mouse leaves browser window
        document.addEventListener("mouseleave", () => {
            dot.style.opacity = "0";
            ring.style.opacity = "0";
            isMoving = false;
        });

        // Hover scale states - Global Delegation
        document.addEventListener("mouseover", (e) => {
            const hoverable = e.target.closest(
                'a, button, [role="button"], input, textarea, select, .project-card, .interactive-hover, .slider-btn',
            );
            if (hoverable) {
                document.body.classList.add("custom-cursor-hover");
            } else {
                document.body.classList.remove("custom-cursor-hover");
            }
        });
    }

    // 3. Mobile Menu Toggle
    const menuBtn = document.getElementById("menuBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener("click", () => {
            const isHidden = mobileMenu.classList.toggle("hidden");
            const icon = menuBtn.querySelector("i");
            if (icon) {
                if (isHidden) {
                    icon.className = "fas fa-bars";
                    document.body.style.overflow = "";
                } else {
                    icon.className = "fas fa-times";
                    document.body.style.overflow = "hidden";
                }
            }
        });

        // Close menu on link clicks
        const mobileLinks = mobileMenu.querySelectorAll("a");
        mobileLinks.forEach((link) => {
            link.addEventListener("click", () => {
                mobileMenu.classList.add("hidden");
                document.body.style.overflow = "";
                const icon = menuBtn.querySelector("i");
                if (icon) {
                    icon.className = "fas fa-bars";
                }
            });
        });
    }

    // 4. Scroll Reveal System (Fade, Slide, Scale)
    const revealElements = document.querySelectorAll(
        ".reveal, .reveal-left, .reveal-right",
    );
    const revealObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("reveal-visible");
                    observer.unobserve(entry.target); // Animate once
                }
            });
        },
        { threshold: 0.12, rootMargin: "0px 0px -50px 0px" },
    );

    revealElements.forEach((el) => revealObserver.observe(el));

    // 5. Circular Skills Progress Animation
    const skillCards = document.querySelectorAll(".skill-progress-card");
    const skillObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const circle = el.querySelector(".skill-circle-progress");
                    const percentText = el.querySelector(".skill-percent");

                    if (circle && percentText) {
                        const targetPercent = parseInt(
                            percentText.getAttribute("data-percent"),
                        );

                        // Set stroke transition dynamically based on SVG attributes
                        const circumference =
                            parseFloat(
                                circle.getAttribute("stroke-dasharray"),
                            ) || 427;
                        const offset =
                            circumference -
                            (targetPercent / 100) * circumference;
                        circle.style.strokeDashoffset = offset;

                        // Number counter animation
                        let current = 0;
                        const duration = 1800; // ms
                        const stepTime = Math.max(
                            Math.floor(duration / targetPercent),
                            15,
                        );
                        const timer = setInterval(() => {
                            current++;
                            percentText.textContent = `${current}%`;
                            if (current >= targetPercent) {
                                clearInterval(timer);
                            }
                        }, stepTime);
                    }
                    observer.unobserve(el);
                }
            });
        },
        { threshold: 0.25 },
    );

    skillCards.forEach((card) => skillObserver.observe(card));

    // 6. Number Statistics Counter Animation
    const counters = document.querySelectorAll(".stat-counter");
    const counterObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseInt(el.getAttribute("data-target"));
                    let current = 0;
                    const duration = 2000; // 2 seconds
                    const frames = 60;
                    const step = Math.ceil(
                        target / (duration / (1000 / frames)),
                    );

                    const timer = setInterval(() => {
                        current += step;
                        if (current >= target) {
                            el.textContent = target;
                            clearInterval(timer);
                        } else {
                            el.textContent = current;
                        }
                    }, 1000 / frames);
                    observer.unobserve(el);
                }
            });
        },
        { threshold: 0.25 },
    );

    counters.forEach((counter) => counterObserver.observe(counter));

    // 8. Testimonials Carousel Slider
    const testimonialContainer = document.querySelector(
        ".testimonial-container",
    );
    const prevBtn = document.getElementById("prevTestimonial");
    const nextBtn = document.getElementById("nextTestimonial");

    if (testimonialContainer && prevBtn && nextBtn) {
        let currentIndex = 0;
        const cards =
            testimonialContainer.querySelectorAll(".testimonial-card");
        const totalCards = cards.length;

        function updateSlider() {
            // Determine sizing dynamically
            const containerWidth =
                testimonialContainer.parentElement.getBoundingClientRect()
                    .width;
            const style = window.getComputedStyle(testimonialContainer);
            const gap = parseFloat(style.columnGap || style.gap || "24px");
            const visibleCards = window.innerWidth >= 1024 ? 2 : 1;

            const cardWidth =
                (containerWidth - (visibleCards - 1) * gap) / visibleCards;
            cards.forEach((card) => {
                card.style.width = `${cardWidth}px`;
            });

            const offsetWidth = cardWidth + gap;
            testimonialContainer.style.transform = `translateX(-${currentIndex * offsetWidth}px)`;
        }

        // Initial setup on load
        updateSlider();

        nextBtn.addEventListener("click", () => {
            // On desktop, check if we're showing multiple cards
            const visibleCount = window.innerWidth >= 1024 ? 2 : 1;
            if (currentIndex < totalCards - visibleCount) {
                currentIndex++;
            } else {
                currentIndex = 0; // Return to beginning
            }
            updateSlider();
        });

        prevBtn.addEventListener("click", () => {
            const visibleCount = window.innerWidth >= 1024 ? 2 : 1;
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = totalCards - visibleCount; // Loop to end
            }
            updateSlider();
        });

        window.addEventListener("resize", () => {
            // Reset to prevent layout misalignment on resizing
            currentIndex = 0;
            updateSlider();
        });
    }

    // 9. Back To Top Button (Grayscale styling)
    const backToTopBtn = document.createElement("button");
    backToTopBtn.className =
        "fixed bottom-8 right-8 w-12 h-12 rounded-full bg-white text-black shadow-lg flex items-center justify-center transition-all duration-300 opacity-0 invisible translate-y-4 hover:scale-110 z-40 border border-white hover:bg-black hover:text-white";
    backToTopBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
    document.body.appendChild(backToTopBtn);

    window.addEventListener("scroll", () => {
        if (window.scrollY > 500) {
            backToTopBtn.classList.remove(
                "opacity-0",
                "invisible",
                "translate-y-4",
            );
            backToTopBtn.classList.add(
                "opacity-100",
                "visible",
                "translate-y-0",
            );
        } else {
            backToTopBtn.classList.remove(
                "opacity-100",
                "visible",
                "translate-y-0",
            );
            backToTopBtn.classList.add(
                "opacity-0",
                "invisible",
                "translate-y-4",
            );
        }
    });

    backToTopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
});

// 9. Projects Carousel Slider
const projectContainer = document.querySelector(".project-container");
const prevProjectBtn = document.getElementById("prevProject");
const nextProjectBtn = document.getElementById("nextProject");

if (projectContainer && prevProjectBtn && nextProjectBtn) {
    let currentProject = 0;
    const allProjectCards = document.querySelectorAll(".project-card");
    let visibleProjectCards = Array.from(allProjectCards);
    let totalProjects = visibleProjectCards.length;

    function updateProjectSlider() {
        if (totalProjects === 0) return;

        const containerWidth =
            projectContainer.parentElement.getBoundingClientRect().width;
        const gap = 32; // gap-8 = 2rem = 32px

        const visibleCards =
            window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;

        const cardWidth =
            (containerWidth - (visibleCards - 1) * gap) / visibleCards;

        // Dynamic sizing for visible cards
        visibleProjectCards.forEach((card) => {
            card.style.width = `${cardWidth}px`;
        });

        projectContainer.style.transform = `translateX(-${currentProject * (cardWidth + gap)}px)`;

        let maxIndex = totalProjects - visibleCards;
        if (maxIndex < 0) maxIndex = 0;

        if (currentProject > maxIndex) {
            currentProject = maxIndex;
            projectContainer.style.transform = `translateX(-${currentProject * (cardWidth + gap)}px)`;
        }
    }

    nextProjectBtn.addEventListener("click", () => {
        const visibleCards =
            window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
        let maxIndex = totalProjects - visibleCards;
        if (maxIndex < 0) maxIndex = 0;

        if (currentProject < maxIndex) {
            currentProject++;
        } else {
            currentProject = 0;
        }
        updateProjectSlider();
    });

    prevProjectBtn.addEventListener("click", () => {
        const visibleCards =
            window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
        let maxIndex = totalProjects - visibleCards;
        if (maxIndex < 0) maxIndex = 0;

        if (currentProject > 0) {
            currentProject--;
        } else {
            currentProject = maxIndex;
        }
        updateProjectSlider();
    });

    window.addEventListener("resize", updateProjectSlider);

    // Filters Logic
    const filterBtns = document.querySelectorAll(".filter-btn");
    filterBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            // Update active state of buttons
            filterBtns.forEach((b) => {
                b.classList.remove("text-black", "bg-white", "shadow-md");
                b.classList.add("text-gray-500", "hover:text-white");
            });
            btn.classList.add("text-black", "bg-white", "shadow-md");
            btn.classList.remove("text-gray-500", "hover:text-white");

            const filterValue = btn.getAttribute("data-filter");

            // Filter cards
            visibleProjectCards = [];
            allProjectCards.forEach((card) => {
                const category = card.getAttribute("data-category");
                if (filterValue === "all" || category === filterValue) {
                    card.style.display = "";
                    visibleProjectCards.push(card);
                } else {
                    card.style.display = "none";
                }
            });

            totalProjects = visibleProjectCards.length;
            currentProject = 0;
            projectContainer.style.transform = "translateX(0)";
            updateProjectSlider();
        });
    });

    updateProjectSlider();
}

// 8. Modals Logic
window.openServiceModal = function (title, desc, iconClass) {
    document.getElementById("serviceModalTitle").innerText = title;
    document.getElementById("serviceModalDesc").innerText = desc;
    document.getElementById("serviceModalIcon").innerHTML =
        `<i class="fas ${iconClass}"></i>`;

    const modal = document.getElementById("serviceModal");
    const content = document.getElementById("serviceModalContent");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
    setTimeout(() => {
        content.classList.remove("scale-95", "opacity-0");
        content.classList.add("scale-100", "opacity-100");
    }, 10);
    document.body.style.overflow = "hidden";
};

window.openReviewModal = function (name, role, text, imgSrc) {
    document.getElementById("reviewModalName").innerText = name;
    document.getElementById("reviewModalRole").innerText = role;
    document.getElementById("reviewModalText").innerText = text;
    document.getElementById("reviewModalImage").src = imgSrc;

    const modal = document.getElementById("reviewModal");
    const content = document.getElementById("reviewModalContent");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
    setTimeout(() => {
        content.classList.remove("scale-95", "opacity-0");
        content.classList.add("scale-100", "opacity-100");
    }, 10);
    document.body.style.overflow = "hidden";
};

window.openAddReviewModal = function () {
    document.getElementById("addReviewForm").classList.remove("hidden");
    document.getElementById("addReviewSuccess").classList.add("hidden");
    document.getElementById("addReviewForm").reset();

    const modal = document.getElementById("addReviewModal");
    const content = document.getElementById("addReviewModalContent");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
    setTimeout(() => {
        content.classList.remove("scale-95", "opacity-0");
        content.classList.add("scale-100", "opacity-100");
    }, 10);
    document.body.style.overflow = "hidden";
};

window.openContactModal = function () {
    const form = document.getElementById("modalContactForm");
    const success = document.getElementById("modalContactSuccess");
    if (form && success) {
        form.classList.remove("hidden");
        form.reset();
        success.classList.add("hidden");
    }

    const modal = document.getElementById("contactModal");
    const content = document.getElementById("contactModalContent");
    if (modal && content) {
        modal.classList.remove("hidden");
        modal.classList.add("flex");
        setTimeout(() => {
            content.classList.remove("scale-95", "opacity-0");
            content.classList.add("scale-100", "opacity-100");
        }, 10);
        document.body.style.overflow = "hidden";
    }
};

window.openProjectModal = function (imageSrc, title, category) {
    const modal = document.getElementById("projectModal");
    const content = document.getElementById("projectModalContent");
    const imgEl = document.getElementById("projectModalImage");
    const titleEl = document.getElementById("projectModalTitle");
    const categoryEl = document.getElementById("projectModalCategory");

    if (!modal || !content) return;

    if (imgEl) imgEl.src = imageSrc;
    if (titleEl) titleEl.innerText = title || "Project Preview";
    if (categoryEl) categoryEl.innerText = category || "Portfolio";

    modal.classList.remove("hidden");
    modal.classList.add("flex");
    setTimeout(() => {
        content.classList.remove("scale-95", "opacity-0");
        content.classList.add("scale-100", "opacity-100");
    }, 10);
    document.body.style.overflow = "hidden";
};

window.closeModals = function () {
    const modals = [
        "serviceModal",
        "reviewModal",
        "addReviewModal",
        "contactModal",
        "projectModal",
    ];
    modals.forEach((id) => {
        const modal = document.getElementById(id);
        if (modal) {
            const content = document.getElementById(id + "Content");
            if (!modal.classList.contains("hidden")) {
                content.classList.remove("scale-100", "opacity-100");
                content.classList.add("scale-95", "opacity-0");
                setTimeout(() => {
                    modal.classList.remove("flex");
                    modal.classList.add("hidden");
                    document.body.style.overflow = "";
                }, 300);
            }
        }
    });
};

// Global listener to open project modal when clicking any project card
document.addEventListener("click", (e) => {
    const card = e.target.closest(".project-card");
    if (card) {
        const link = e.target.closest("a");
        // If user clicks a link with a real page destination (like contact.html), allow navigation.
        // Otherwise, or if clicking card body/image/button, open modal!
        if (
            link &&
            link.getAttribute("href") &&
            link.getAttribute("href") !== "#" &&
            !link.getAttribute("href").startsWith("javascript:")
        ) {
            return;
        }
        e.preventDefault();
        const img = card.querySelector("img");
        const title = card.querySelector("h3");
        const category = card.querySelector("span");

        if (img) {
            let highResSrc = img.src
                .replace("w=600&q=80", "w=1600&q=90")
                .replace("w=600", "w=1600");
            const titleText = title
                ? title.innerText
                : img.alt || "Project Preview";
            const categoryText = category ? category.innerText : "Portfolio";

            openProjectModal(highResSrc, titleText, categoryText);
        }
    }
});

// Modal Contact Form Submit Listener
const modalContactForm = document.getElementById("modalContactForm");
if (modalContactForm) {
    modalContactForm.addEventListener("submit", (e) => {
        e.preventDefault();
        modalContactForm.classList.add("hidden");
        const success = document.getElementById("modalContactSuccess");
        if (success) {
            success.classList.remove("hidden");
        }
        setTimeout(() => {
            closeModals();
        }, 2500);
    });
}

// Star Rating Logic for Add Review Modal
const starRatingContainer = document.getElementById("addReviewStarRating");
const ratingInput = document.getElementById("addReviewRatingInput");
if (starRatingContainer && ratingInput) {
    const stars = starRatingContainer.querySelectorAll("i");

    function updateStars(rating) {
        stars.forEach((star) => {
            const starRating = parseInt(star.getAttribute("data-rating"));
            if (starRating <= rating) {
                star.classList.remove("text-gray-600");
                star.classList.add("text-[#00e5ff]");
            } else {
                star.classList.remove("text-[#00e5ff]");
                star.classList.add("text-gray-600");
            }
        });
    }

    updateStars(5); // Default

    stars.forEach((star) => {
        star.addEventListener("click", () => {
            const rating = parseInt(star.getAttribute("data-rating"));
            ratingInput.value = rating;
            updateStars(rating);
        });

        star.addEventListener("mouseover", () => {
            const hoverRating = parseInt(star.getAttribute("data-rating"));
            updateStars(hoverRating);
        });
    });

    starRatingContainer.addEventListener("mouseleave", () => {
        updateStars(parseInt(ratingInput.value));
    });
}

const addReviewForm = document.getElementById("addReviewForm");
if (addReviewForm) {
    addReviewForm.addEventListener("submit", (e) => {
        e.preventDefault();
        addReviewForm.classList.add("hidden");
        document.getElementById("addReviewSuccess").classList.remove("hidden");
        setTimeout(() => {
            closeModals();
        }, 2500);
    });
}

// Attach click listeners to services
document.querySelectorAll("#services .glowing-card").forEach((card) => {
    card.classList.add("cursor-pointer");
    card.addEventListener("click", () => {
        const title = card.querySelector("h3").innerText;
        const desc = card.querySelector("p").innerText;
        const iconClass = card.querySelector("i").className.replace("fas ", "");
        openServiceModal(title, desc, iconClass);
    });
});

// Attach click listeners to testimonials
document.querySelectorAll(".testimonial-card").forEach((card) => {
    card.classList.add("cursor-pointer");
    card.addEventListener("click", () => {
        const text = card.querySelector("p.italic").innerText;
        const name = card.querySelector("h4").innerText;
        const role = card.querySelector(".uppercase.tracking-widest").innerText;
        const imgSrc = card.querySelector("img").src;
        openReviewModal(name, role, text, imgSrc);
    });
});

// Skill Filteration Function
const filterBtns = document.querySelectorAll(".filter-btn");
const cards = document.querySelectorAll(".skill-progress-card");

filterBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        // Active button style
        filterBtns.forEach((b) => {
            b.classList.remove("bg-white", "text-black");
            b.classList.add("text-gray-500");
        });

        btn.classList.add("bg-white", "text-black");
        btn.classList.remove("text-gray-500");

        const filter = btn.dataset.filter;

        cards.forEach((card) => {
            if (filter === "all" || card.dataset.category === filter) {
                card.style.display = "flex";
            } else {
                card.style.display = "none";
            }
        });
    });
});

// Project Filteration Function
document.addEventListener("DOMContentLoaded", () => {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const projectCards = document.querySelectorAll(
        "#projectsGrid .portfolio-item",
    );

    filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            // Update active button state
            filterButtons.forEach((btn) => {
                btn.classList.remove("text-black", "bg-white", "shadow-md");
                btn.classList.add("text-gray-500", "hover:text-white");
            });
            button.classList.add("text-black", "bg-white", "shadow-md");
            button.classList.remove("text-gray-500", "hover:text-white");

            const filterValue = button.getAttribute("data-filter");

            projectCards.forEach((card) => {
                const category = card.getAttribute("data-category");

                if (filterValue === "all" || category === filterValue) {
                    card.style.display = "block";
                    // Small delay for clean fade-in
                    setTimeout(() => {
                        card.classList.remove("opacity-0", "scale-95");
                        card.classList.add(
                            "opacity-100",
                            "scale-100",
                            "reveal-visible",
                        );
                    }, 50);
                } else {
                    card.classList.remove("opacity-100", "scale-100");
                    card.classList.add("opacity-0", "scale-95");
                    setTimeout(() => {
                        card.style.display = "none";
                    }, 300); // match transition speed
                }
            });
        });
    });
});

// Blogs Filteration Function
document.addEventListener("DOMContentLoaded", () => {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const blogCards = document.querySelectorAll("#blogGrid .glowing-card");

    filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            // Update active button state
            filterButtons.forEach((btn) => {
                btn.classList.remove("text-black", "bg-white", "shadow-md");
                btn.classList.add("text-gray-500", "hover:text-white");
            });
            button.classList.add("text-black", "bg-white", "shadow-md");
            button.classList.remove("text-gray-500", "hover:text-white");

            const filterValue = button.getAttribute("data-filter");

            blogCards.forEach((card) => {
                const category = card.getAttribute("data-category");

                if (filterValue === "all" || category === filterValue) {
                    card.style.display = "flex";
                    // Small delay for clean fade-in
                    setTimeout(() => {
                        card.classList.remove("opacity-0", "scale-95");
                        card.classList.add(
                            "opacity-100",
                            "scale-100",
                            "reveal-visible",
                        );
                    }, 50);
                } else {
                    card.classList.remove("opacity-100", "scale-100");
                    card.classList.add("opacity-0", "scale-95");
                    setTimeout(() => {
                        card.style.display = "none";
                    }, 300); // match transition speed
                }
            });
        });
    });
});

// Contact Us  form Success Message Function
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("contactForm");
    const successBlock = document.getElementById("formSuccess");

    if (form && successBlock) {
        form.addEventListener("submit", (e) => {
            e.preventDefault();

            // Fade out form
            form.classList.add(
                "transition-opacity",
                "duration-300",
                "opacity-0",
            );

            setTimeout(() => {
                form.classList.add("hidden");
                successBlock.classList.remove("hidden");
                // Fade in success block
                successBlock.classList.add(
                    "transition-opacity",
                    "duration-500",
                    "opacity-0",
                );
                setTimeout(() => {
                    successBlock.classList.remove("opacity-0");
                    successBlock.classList.add("opacity-100");
                }, 50);
            }, 300);
        });
    }
});
