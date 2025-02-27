@extends('web.layout.main')
@section('website-page-title', 'Welcome')
@section('website-active-welcome', 'active')
@section('website-main-section')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        {{-- <img src="{{ asset('../web/img/hero-bg.jpg') }}" alt="" data-aos="fade-in"> --}}
        <video data-aos="fade-in" class="hero-video" autoplay loop muted>
            <source src="{{ asset('../web/img/hero-bg.mp4') }}" type="video/mp4">
        </video>

        <div class="container">

            <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-6 col-lg-8">
                    <h2>CLONE<span>.</span> PASTE<span>.</span> LAUNCH<span>.</span></h2>
                    <p>Watch the magic happen with AssetSphere</p>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <i class="fas fa-copy"></i>
                        <h3><a href="">Copy</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-box">
                        <i class="fas fa-clipboard"></i>
                        <h3><a href="">Paste</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon-box">
                        <i class="fas fa-flask"></i>
                        <h3><a href="">Test</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box">
                        <i class="fas fa-server"></i>
                        <h3><a href="">Launch</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="icon-box">
                        <i class="fas fa-smile"></i>
                        <h3><a href="">Enjoy</a></h3>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('../web/img/about.jpg') }}" class="img-fluid" alt=""
                        style="border-radius: 10px;">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content">
                    <h3>Voluptatem dignissimos provident</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate
                                velit.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu
                                fugiat nulla pariatur.</span></li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                    </p>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 2,
                      "spaceBetween": 40
                    },
                    "480": {
                      "slidesPerView": 3,
                      "spaceBetween": 60
                    },
                    "640": {
                      "slidesPerView": 4,
                      "spaceBetween": 80
                    },
                    "992": {
                      "slidesPerView": 6,
                      "spaceBetween": 120
                    }
                  }
                }
                </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-2.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <div class="container">

            <div class="row gy-4">
                <div class="features-video col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <video class="img-fluid" autoplay loop muted style="border-radius: 10px;">
                        <source src="{{ asset('../web/img/AssetSphere.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-lg-6">

                    <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-archive flex-shrink-0"></i>
                        <div>
                            <h4>Est labore ad</h4>
                            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-basket flex-shrink-0"></i>
                        <div>
                            <h4>Harum esse qui</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-broadcast flex-shrink-0"></i>
                        <div>
                            <h4>Aut occaecati</h4>
                            <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-camera-reels flex-shrink-0"></i>
                        <div>
                            <h4>Beatae veritatis</h4>
                            <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                        </div>
                    </div><!-- End Features Item-->

                </div>
            </div>

        </div>

    </section><!-- /Features Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Check our Services</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3 class="white-text">Nesciunt Mete</h3>
                        </a>
                        <p class="white-text">Provident nihil minus qui consequatur non omnis maiores. Eos accusantium
                            minus dolores iure
                            perferendis tempore et consequatur.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3 class="white-text">Eosle Commodi</h3>
                        </a>
                        <p class="white-text">Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero
                            corrupti neque eum hic non
                            ut nesciunt dolorem.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3 class="white-text">Ledo Markt</h3>
                        </a>
                        <p class="white-text">Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel
                            qui id voluptas
                            adipisci eos earum corrupti.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-bounding-box-circles"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3 class="white-text">Asperiores Commodit</h3>
                        </a>
                        <p class="white-text">Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed
                            error ea fuga sit
                            provident adipisci neque.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3 class="white-text">Velit Doloremque</h3>
                        </a>
                        <p class="white-text">Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam
                            corporis aut. Sed animi at
                            autem alias eius labore.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-chat-square-text"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3 class="white-text">Dolori Architecto</h3>
                        </a>
                        <p class="white-text">Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et
                            debitis iure. Corrupti
                            recusandae ducimus enim.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="{{ asset('../web/img/cta-bg.jpg') }}" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Call To Action</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <a class="cta-btn" href="#">Call To Action</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Check our Portfolio</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-product">Card</li>
                    <li data-filter=".filter-branding">Web</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-1.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-1.jpg') }}" title="App 1"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-2.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Product 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                title="Product 1" data-gallery="portfolio-gallery-product"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-3.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Branding 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-3.jpg') }}"
                                title="Branding 1" data-gallery="portfolio-gallery-branding"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-4.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-4.jpg') }}" title="App 2"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-5.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Product 2</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-5.jpg') }}"
                                title="Product 2" data-gallery="portfolio-gallery-product"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-6.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Branding 2</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-6.jpg') }}"
                                title="Branding 2" data-gallery="portfolio-gallery-branding"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-7.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-7.jpg') }}" title="App 3"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-8.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Product 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-8.jpg') }}"
                                title="Product 3" data-gallery="portfolio-gallery-product"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-9.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Branding 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('../web/img/masonry-portfolio/masonry-portfolio-9.jpg') }}"
                                title="Branding 2" data-gallery="portfolio-gallery-branding"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 align-items-center justify-content-between">

                <div class="col-lg-5">
                    <img src="{{ asset('../web/img/stats-img.jpg') }}" alt="" class="img-fluid">
                </div>

                <div class="col-lg-6">

                    <h3 class="fw-bold fs-2 mb-3">Voluptatem dignissimos provident quasi</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    </p>

                    <div class="row gy-4">

                        <div class="col-lg-6">
                            <div class="stats-item d-flex">
                                <i class="bi bi-emoji-smile flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="232"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-6">
                            <div class="stats-item d-flex">
                                <i class="bi bi-journal-richtext flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="521"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-6">
                            <div class="stats-item d-flex">
                                <i class="bi bi-headset flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="1453"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-6">
                            <div class="stats-item d-flex">
                                <i class="bi bi-people flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="32"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Designs</h2>
            <p>Loaders</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach ($loaders as $loader)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <!-- Video player with autoplay and loop -->
                                {{-- <video class="img-fluid" autoplay loop muted>
                                    <source src="{{ $loader->image_link }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video> --}}
                                {{-- <iframe src="https://player.vimeo.com/video/{{ $loader->image_link }}" width="261" height="135" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe> --}}

                                <iframe width="261" height="300" src="{{ $loader->image_link }}"></iframe>


                                <div class="social">
                                    <a href=""
                                        onclick=" event.preventDefault(); copyCode('{{ $loader->html }}')"><i
                                            class="fab fa-html5"></i></a>
                                    <a href=""
                                        onclick="event.preventDefault(); copyCode('{{ $loader->css }}')"><i
                                            class="fab fa-css3"></i></a>
                                    {{-- <a href=""><i class="fab fa-js"></i></a> --}}
                                </div>
                            </div>


                            <div class="member-info text-center">
                                <h4>{{ $loader->name }}</h4>
                                <span>Designed by - AssetSphere</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                @endforeach
            </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113894.27701087948!2d80.84757896874582!3d26.865508255436968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd90c397ea09%3A0x80c85549ec7713f3!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1735894841184!5m2!1sen!2sin"
                    frameborder="0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>Lucknow, Uttar Pradesh, India</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+91 9161224477 | 7269084505</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>info@example.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
