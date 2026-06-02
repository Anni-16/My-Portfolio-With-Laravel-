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
    <!-- ========= Css Links ========== -->
    @include('layout.css')
</head>

<body>

    <!-- Header Section Start -->
    @include('layout.header')
    <!-- Header Section End -->


    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!-- banner Section Start -->
            <section class="hero-wrapper hero-3 section-bg-4">
                <div class="shape">
                    <div class="shape-1"></div>
                    <img class="shape-2 wow fadeInRight" data-wow-delay="600ms" src="{{ asset('front-end/assets/img/shape/shape-5.png') }}"
                        alt="full stack developer">
                    <img class="shape-3" src="{{ asset('front-end/assets/img/shape/shape-6.png') }}" alt="full stack developer">
                </div>
                <div class="social">
                    <a href="https://in.linkedin.com/in/aniket-kumar-maurya-314941271" target="_blank" class="wow fadeInRight" data-wow-delay="200ms"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/Anni-16" target="_blank" class="wow fadeInRight" data-wow-delay="200ms"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.instagram.com/__.xanni01/" target="_blank" class="wow fadeInRight" data-wow-delay="200ms"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.pinterest.com/xanni01/" target="_blank" class="wow fadeInRight" data-wow-delay="200ms"><i class="fa-brands fa-pinterest"></i></a>
                    <a href="https://dev.to/@anni16" target="_blank" class="wow fadeInRight" data-wow-delay="200ms"><i class="fa-brands fa-dev"></i></a>
                    <a href="https://www.behance.net/aniketkumar346" target="_blank" class="wow fadeInRight" data-wow-delay="200ms"><i class="fa-brands fa-behance"></i></a>
                </div>
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-5">
                            <div class="hero-content d-flex">
                                <h1 class="hero-title has_text_move_anim">
                                    <span class="text-1">
                                        <img src="{{ asset('front-end/assets/img/shape/shape-1-white.png') }}" alt="full stack dev">
                                        Full-Stack
                                    </span>
                                    <br>
                                    <span class="line-text">Web & App</span>
                                    <br>
                                    <span class="text-3">Development | Aniket </span>
                                    <br>
                                    <span class="line-text">Kumar Maurya</span>
                                </h1>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="hero-image d-flex align-items-center has_fade_anim">
                                <img src="{{ asset('front-end/assets/img/hero/hero-05.png') }}" alt="Aniket Kumar Maurya">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner Section End -->

            <!-- Counter Section Start -->
            <div class="skill-wrapper skill-2 section-padding ">
                <div class="container">
                    <div class="skill-grid">
                        <div class="circle-progress wow fadeInUp" data-wow-delay="200ms" data-percent="250">
                            <svg class="ring" width="220" height="220">
                                <circle class="bg" cx="110" cy="110" r="100" />
                                <circle class="progress" cx="110" cy="110" r="100" />
                            </svg>
                            <div class="text">
                                <span style="color: #fff;">Projects Delivered</span>
                                <div class="count-num percent">250+</div>
                            </div>
                        </div>
                        <div class="circle-progress wow fadeInUp" data-wow-delay="300ms" data-percent="3">
                            <svg class="ring" width="220" height="220">
                                <circle class="bg" cx="110" cy="110" r="100" />
                                <circle class="progress" cx="110" cy="110" r="100" />
                            </svg>
                            <div class="text">
                                <span style="color: #fff;">Years Of Experience</span>
                                <div class="count-num percent">3+</div>
                            </div>
                        </div>
                        <div class="circle-progress wow fadeInUp" data-wow-delay="400ms" data-percent="198">
                            <svg class="ring" width="220" height="220">
                                <circle class="bg" cx="110" cy="110" r="100" />
                                <circle class="progress" cx="110" cy="110" r="100" />
                            </svg>
                            <div class="text">
                                <span style="color: #fff;">Client Satisfactions</span>
                                <div class="count-num percent">198+</div>
                            </div>
                        </div>
                        <div class="content has_fade_anim">
                            <p>
                                Strategy, design, and development<br>
                                delivered as a seamless<br>
                                end-to-end solution.
                            </p>
                            <a href="contact.html" class="theme-btn trasparent-btn">Hire Me For Your Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Section End -->

            <!-- About Section Start -->
            <section class="about-wrapper about-3 section-padding pt-0">
                <div class="shape">
                    <img class="shape-1" src="{{ asset('front-end/assets/img/shape/shape-6.png') }}" alt="freelance full stack developer">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-12 ms-xl-4 me-xl-5">
                            <div class="section-title">
                                <div class="sub-title">
                                    <div class="dot"></div> <span>About Me</span>
                                </div>
                                <h2 class="has_text_reveal_anim">
                                    <span>Full Stack </span> Developer in Delhi,
                                    <span>India – Aniket</span>
                                </h2>
                            </div>
                        </div>

                    </div>
                    <div class="content">
                        <div class="arrow wow fadeInLeft" data-wow-delay="400ms">
                            <svg width="224" height="224" viewBox="0 0 224 224" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="arrow-path"
                                    d="M224 9.53969V154.441C224 159.709 219.729 163.98 214.46 163.98C209.192 163.98 204.921 159.709 204.921 154.441V32.5723L16.2859 221.207C14.4226 223.069 11.9818 224 9.54012 224C7.09844 224 4.65763 223.069 2.79431 221.207C-0.931437 217.481 -0.931437 211.44 2.79431 207.715L191.429 19.0794H69.5594C64.2911 19.0794 60.0198 14.8081 60.0198 9.53969C60.0198 4.27131 64.2911 3.36026e-08 69.5594 3.36026e-08H214.46C219.729 -0.000437466 224 4.27131 224 9.53969Z"
                                    fill="white" fill-opacity="0.08" />
                            </svg>
                        </div>
                        <div class="text has_text_move_anim">
                            <p style="font-size: 18px;">I'm Aniket, a full stack developer that provides companies looking for scalable, responsive, and performance-driven digital solutions with custom website development and web development services. If you've been looking for a web developer in Delhi, India, I create websites that are both technically sound and aesthetically pleasing.
                            </p>
                            <h2 style="color: #fff; font-size:26px;">Web Development Built for Business Growth</h2>
                            <p>As a full stack developer, I create end-to-end solutions that are suited for actual business use cases by working across frontend and backend. In order to guarantee speed, usability, and long-term scalability, the way I work focuses on mobile-first, responsive, and clean development using modern technology.</p>
                            <p>From <b>HTML CSS JavaScript development</b> to backend systems powered by <b>PHP, MySQL, Laravel, CodeIgniter, and MERN Stack,</b> every project is structured to support growth and future expansion.</p>
                            <a href="contact.html">Get in Touch <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                        <div class="image tp_img_reveal">
                            <img src="{{ asset('front-end/assets/img/about/about1.jpeg') }}" alt="aniket kumar maurya">
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Section End -->

            <!-- Work Section Start -->
            <section class="work-wrapper work-2 section-padding section-bg-4">
                <div class="container-fluid">
                    <div class="section-title-area mx-xxl-5 px-xxl-3">
                        <div class="section-title-2">
                            <h2 class="has_text_reveal_anim" data-stagger="0.10">
                                Featured Projects
                            </h2>
                        </div>
                        <div class="section-text has_text_move_anim">
                            <p> Our work is best experienced in action. For the full experience, we recommend watching closely. </p>
                            <a href="project-grid.html">View All <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="not-hide-cursor2" data-cursor2="Drag">
                    <div class="swiper work2-slider-active ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-work-card bg-cover"
                                   style="background-image: url('{{ asset('front-end/assets/img/work/jaipurawindow.webp') }}'); height: 450px;">
                                    <div class="content">
                                        <h4><a href="https://jaipurwindow.com/" target="_blank">Jaipur Window</a></h4>
                                        <p>E-commerce Website, Full Responsive</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-work-card bg-cover"
                                    style="background-image: url('{{ asset('front-end/assets/img/work/ruralmitra.webp') }}'); height: 450px;">
                                    <div class="content">
                                        <h4><a href="https://ruralmitra.com/" target="_blank">Rural Mitra</a></h4>
                                        <p>Firm House, Organic Veg's, Dynamic</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-work-card bg-cover"
                                    style="background-image: url('{{ asset('front-end/assets/img/work/indihippy.webp') }}'); height: 450px;">
                                    <div class="content">
                                        <h4><a href="http://indihippy.au/" target="_blank">Indihippy</a></h4>
                                        <p>B2B Port, E-commerce, WholeSaler Website</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Work Section End -->

            <!-- Provide Section Start -->
            <section class="provide-us section-padding section-bg-4">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 pe-0">
                            <div class="section-title">
                                <div class="sub-title">
                                    <div class="dot"></div> <span>Services I Offer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="section-title has_text_reveal_anim">
                                <h2 class="mt-xl-0">
                                    <span>Collaborating</span> with global brands,<br> I specialize in <span>web development</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="content-inner mt-4 pt-4">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-12 has_fade_anim" data-delay="0.7">
                                <div class="single-provide-card">
                                    <div class="head d-flex justify-content-between align-items-center">
                                        <h4> Full Stack <br> Web Development</h4>
                                        <img src="{{ asset('front-end/assets/img/why-choose/provide-01.png') }}" alt="dymanic">
                                    </div>
                                    <p>I provide complete <b>full stack web development services</b> covering both frontend and backend. From <b>UI frontend design</b> to robust server-side logic, I develop systems that are fast, secure, and scalable.Ideal for businesses looking to <b>hire a full stack developer in Delhi, India.</b></p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 has_fade_anim" data-delay="0.7">
                                <div class="single-provide-card">
                                    <div class="head d-flex justify-content-between align-items-center">
                                        <h4>Custom Website <br> Development for Businesses</h4>
                                         <img src="{{ asset('front-end/assets/img/why-choose/provide-01.png') }}" alt="dymanic">
                                    </div>
                                    <p>Every business is unique, and so is the website it needs. My custom website development service focuses on acclimatized results rather than templates. This ensures better performance, inflexibility, and imprinting alignment. </p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 has_fade_anim" data-delay="0.9">
                                <div class="single-provide-card">
                                    <div class="head d-flex justify-content-between align-items-center">
                                        <h4> Responsive & Mobile-First Web Design</h4>
                                         <img src="{{ asset('front-end/assets/img/why-choose/provide-02.png') }}" alt="dymanic">
                                    </div>
                                    <p>I create responsive websites that work flawlessly on desktop, tablet, and mobile devices. A mobile-first strategy enhances long-term performance, usability, and engagement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="section-text has_text_move_anim" style="display: flex; justify-content: flex-end; padding-top: 20px;">
                            <a href="services.html" style="color: #fff;">
                                View All <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Provide Section End -->

            <!-- Text Slider Start -->
            <section class="text-slider-wrapper text-slider-1 section-padding pt-0 section-bg-4">
                <div class="swiper text-slider2" dir="rtl">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <h2 class="text d-flex">
                                ?Have Any Project
                                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                            </h2>
                        </div>
                        <div class="swiper-slide">
                            <h2 class="text d-flex">
                                ?Have Any Project
                                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                            </h2>
                        </div>
                        <div class="swiper-slide">
                            <h2 class="text d-flex">
                                ?Have Any Project
                                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                            </h2>
                        </div>
                        <div class="swiper-slide">
                            <h2 class="text d-flex">
                                ?Have Any Project
                                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                            </h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Text Slider End -->

            <!-- Testimonial Section Start -->
            <section class="testimonial-wrapper testimonial-2 section-padding pt-0 section-bg-4">
                <div class="container">
                    <div class="not-hide-cursor2" data-cursor2="Drag">
                        <div class="swiper testimonial-slide2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="signle-testimonial-item">
                                        <div class="icon">
                                            <i class="fas fa-quote-left"></i>
                                        </div>
                                        <ul class="d-flex">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p>”Working with Geroz was an absolute pleasure. Their attention to detail and
                                            creative flair truly set them apart. They took our vision and turned it into
                                            something beyond our expectations.</p>
                                        <div class="author d-flex align-items-center">
                                            <img src="{{ asset('front-end/assets/img/testimonial/author-01.jpg') }}" alt="">
                                            <div class="infu">
                                                <h4>Michel John</h4>
                                                <span style="color: #fff;">Digital Marketer</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="signle-testimonial-item">
                                        <div class="icon">
                                            <i class="fas fa-quote-left"></i>
                                        </div>
                                        <ul class="d-flex">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p>”Working with Geroz was an absolute pleasure. Their attention to detail and
                                            creative flair truly set them apart. They took our vision and turned it into
                                            something beyond our expectations.</p>
                                        <div class="author d-flex align-items-center">
                                            <img src="{{ asset('front-end/assets/img/testimonial/author-01.jpg') }}" alt="">
                                            <div class="infu">
                                                <h4>Michel John</h4>
                                                <span style="color: #fff;">Digital Marketer</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="signle-testimonial-item">
                                        <div class="icon">
                                            <i class="fas fa-quote-left"></i>
                                        </div>
                                        <ul class="d-flex">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p>”Working with Geroz was an absolute pleasure. Their attention to detail and
                                            creative flair truly set them apart. They took our vision and turned it into
                                            something beyond our expectations.</p>
                                        <div class="author d-flex align-items-center">
                                            <img src="{{ asset('front-end/assets/img/testimonial/author-01.jpg') }}" alt="">
                                            <div class="infu">
                                                <h4>Michel John</h4>
                                                <span style="color: #fff;">Digital Marketer</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom pt-4 text-center">
                            <a href="pop" class="theme-btn"><span>Give Your Feedback</span></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial Section End -->

            <!-- News Section Start -->
            <section class="news-wrapper news-3 section-padding section-bg-4">
                <div class="container container-1520">
                    <div class="section-title text-center">
                        <div class="sub-title">
                            <div class="dot"></div> <span>My Articles</span>
                        </div>
                        <h2 class="text-white has_text_reveal_anim">View My Recent <br> Blog & News</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 ">
                            <div class="single-news-item has_fade_anim" data-delay="0.5">
                                <div class="image">
                                    <img src="{{ asset('front-end/assets/img/news/news-05.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <ul class="d-flex align-items-center">
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            12 JAN, 2026
                                        </li>
                                        <li>
                                            <i class="far fa-user"></i>
                                            Admin
                                        </li>
                                    </ul>
                                    <h3 class="title">
                                        <a href="blog-details.html">Each one showcases my approach and
                                            dedication
                                            man</a>
                                    </h3>

                                    <p>
                                        Over the past three years, marketers have faced an arduous journey due to the
                                        rapid shifts in consumer sentiment and the rising costs associated…
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="single-news-item has_fade_anim" data-delay="0.7">
                                <div class="image">
                                    <img src="{{ asset(('front-end/assets/img/news/news-05.jpg')) }}" alt="">
                                </div>
                                <div class="content">
                                    <ul class="d-flex align-items-center">
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            12 JAN, 2026
                                        </li>
                                        <li>
                                            <i class="far fa-user"></i>
                                            Admin
                                        </li>
                                    </ul>
                                    <h3 class="title">
                                        <a href="blog-details.html">5 Effective Ways to Manage & Motivate Your
                                            Team</a>
                                    </h3>

                                    <p>
                                        Over the past three years, marketers have faced an arduous journey due to the
                                        rapid shifts in consumer sentiment and the rising costs associated…
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="single-news-item border-0 has_fade_anim" data-delay="0.9">
                                <div class="image">
                                    <img src="{{ asset('front-end/assets/img/news/news-05.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <ul class="d-flex align-items-center">
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            12 JAN, 2026
                                        </li>
                                        <li>
                                            <i class="far fa-user"></i>
                                            Admin
                                        </li>
                                    </ul>
                                    <h3 class="title">
                                        <a href="blog-details.html">7 Proven Strategies to Secure Funding for
                                            Your
                                            Startup</a>
                                    </h3>

                                    <p>
                                        Over the past three years, marketers have faced an arduous journey due to the
                                        rapid shifts in consumer sentiment and the rising costs associated…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom pt-4 text-center">
                        <a href="blogs.html" class="theme-btn"><span>View All</span></a>
                    </div>
                </div>
            </section>
            <!-- News Section End -->

            <!-- Contact-us Section Start -->
            <section class="contact-us-wrapper contact-us-1 style-2 section-padding">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-12">
                            <div class="content">
                                <div class="section-title pb-5 mb-5">
                                    <h2 class="text-white has_text_reveal_anim">Contact Me</h2>
                                </div>
                                <div class="contact-right pe-5 mt-4 mt-md-0">
                                    <form action="#" id="contact-form" method="POST">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <input type="text" name="name" placeholder="Name *">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <input type="text" name="email" placeholder="Email *">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 ">
                                                <div class="form-clt">
                                                    <input type="text" name="phone" placeholder="Phone *">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <input type="text" name="subject" placeholder="Subject *">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt-big form-clt">
                                                    <textarea name="message" id="message"
                                                        placeholder="Your message here..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit" class="theme-btn">
                                                    Send Message
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-12">
                            <div class="contact-infu">
                                <div class="image-2 tp_img_reveal">
                                    <img src="{{ asset('front-end/assets/img/contact-02.jpg') }}" alt="">
                                    <p>B- 138/B Tigri Extension, Tigri Colony, <br> Khanpur, Near SBI Bank, <br> New Delhi, Delhi 110080</p>
                                </div>
                                <div class="infu-inner d-flex align-items-center justify-content-between">
                                    <div class="infu">
                                        <h4>Let’s talk</h4>
                                        <p><a style="color: #fff;" href="tel:+918595308953">+91-8595308953</a></p>
                                        <p><a style="color: #fff;" href="mailto:exam@gmail.com">exam@gmail.com</a></p>
                                    </div>
                                    <a href="contact.html" class="circle">
                                        <div class="dot"></div>
                                        <div class="circle-icon"><i class="fa-solid fa-arrow-right-long"></i></div>
                                        <div class="circle-text">
                                            <p class="text-white">
                                                Explore My Work & Hire Me For Project
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact-us Section End -->

            <!-- Cta Section Start -->
            <section class="cta-wrapper cta-2 section-bg-4 ">
                <div class="container">
                    <div class="cta-inner bg-cover has_fade_anim">
                        <div class="shape">
                            <img class="shape-1" src="{{ asset('front-end/assets/img/cta/cta-shape-1.png') }}" alt="">
                        </div>
                        <div class="row align-items-center g-5">
                            <div class="col-xl-3 col-lg-3 col-12 d-lg-block d-md-none d-none">
                                <div class="images">
                                    <img src="{{ asset('front-end/assets/img/cta/cta-1.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12">
                                <div class="content text-center">
                                    <div class="section-title text-center">
                                        <h2 class="text-white has_text_reveal_anim">Lat’s make something <br> great
                                            together</h2>
                                    </div>
                                    <a href="about.html" class="theme-btn mt-4">Hire Me for Project</a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-12 d-lg-none d-md-block">
                                <div class="images">
                                    <img src="{{ asset('front-end/assets/img/cta/cta-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Cta Section End -->

            <!-- Footer Section Start -->
           @include('layout.footer')
            <!-- Footer Section End -->

        </div>
    </div>

    <!-- ======== Js Links ======== -->
    @include('layout.js')

</body>


</html>