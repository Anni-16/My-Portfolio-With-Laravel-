    <!--Custom Cursor Wrapper -->
    <div id="custom-cursor-wrapper" class="tp-cursor">
        <div id="cursor-outer">
            <div id="cursorDot"></div>
        </div>
    </div>

    <!-- Back To Top Start -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back To Top End -->

    <!-- Preloader Start -->
    <!-- <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="N" class="letters-loading">
                    N
                </span>
                <span data-text-preloader="N" class="letters-loading">
                    N
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                <span data-text-preloader="❤" class="letters-loading">
                    ❤
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader End -->

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('front-end/assets/img/logo/black-logo.png') }}" alt="Aniket Kumar Maurya">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a
                        feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                    </p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">B- 138/B Tigri Extension, Tigri Colony, Khanpur, Near SBI Bank, New Delhi, Delhi 110080</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:exam@gmail.com">exam@gmail.com</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+918595308953">24/7 Support</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+918595308953">+91-8595308953</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="contact.html" class="theme-btn w-100">
                                Contact Us
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="https://in.linkedin.com/in/aniket-kumar-maurya-314941271" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://github.com/Anni-16" target="_blank"><i class="fa-brands fa-github"></i></a>
                            <a href="https://www.instagram.com/__.xanni01/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.pinterest.com/xanni01/" target="_blank"><i class="fa-brands fa-pinterest"></i></a>
                            <a href="https://www.youtube.com/@_.xanni01_edit" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="https://x.com/aniketkuma35664" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="https://dev.to/@anni16" target="_blank"><i class="fa-brands fa-dev"></i></a>
                            <a href="https://www.behance.net/aniketkumar346" target="_blank"><i class="fa-brands fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <!-- Offcanvas Area End -->

    <!-- Header Section Start -->
    <header>
        <div id="header-sticky" class="header-1 style-3">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main ">
                        <div class="header-left">
                            <div class="logo">
                                <a href="{{ url('/') }}" class="header-logo">
                                    <img src="{{ asset('front-end/assets/img/logo/white-logo.png') }}" alt="Aniket Kumar Maurya">
                                </a>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active d-xl-none">
                                                <a href="{{ url('/') }}" class="border-none">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a href="about.html">
                                                    About Me
                                                </a>
                                            </li>
                                            <li>
                                                <a href="services.html">
                                                    Services
                                                </a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="projects.html">
                                                    Projects
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blogs.html">
                                                    BLogs
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <a href="#" class="theme-btn white-btn  me-4">Download CV</a>
                            <div class="header__hamburger  my-auto">
                                <div class="sidebar__toggle">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->