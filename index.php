<?php
include('includes/params.php');
include('includes/head.php');
include('includes/header.php');
?>

<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="p-0">
        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <picture>
                        <source srcset="./assets/img/sliders/slider1-mobile.webp" media="(max-width: 767.98px)">
                        <img src="./assets/img/sliders/slider1.webp" class="d-block w-100">
                    </picture>
                    <div class="carousel-caption d-flex justify-content-center align-items-center h-25">
                        <div>
                            <h5 class="caption-title">Soluciones en SAP Business One</h5>
                            <p class="caption-subtitle">Implementación, soporte y desarrollo de AddOns.</p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <picture>
                        <source srcset="./assets/img/sliders/slider2-mobile.webp" media="(max-width: 767.98px)">
                        <img src="./assets/img/sliders/slider2.webp" class="d-block w-100">
                    </picture>
                    <div class="carousel-caption d-flex justify-content-center align-items-center h-25">
                        <div>
                            <h5 class="caption-title">Automatiza tus procesos</h5>
                            <p class="caption-subtitle">Integra tu ERP con eCommerce, CRM y más.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <picture>
                        <source srcset="./assets/img/sliders/slider3-mobile.webp" media="(max-width: 767.98px)">
                        <img src="./assets/img/sliders/slider3.webp" class="d-block w-100">
                    </picture>
                    <div class="carousel-caption d-flex justify-content-center align-items-center h-25">
                        <div>
                            <h5 class="caption-title">Soporte Especializado</h5>
                            <p class="caption-subtitle">Atención inmediata y personalizada.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controles -->
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h1>
                ON HAND Tech Solutions. <br>
                Implementación y Consultoría de SAP Business One en México.<br>
            </h1>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gy-4">
                <div class="col-12 content" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Somos una empresa mexicana especializada en la implementación y consultoría de SAP Business One, el ERP líder para pequeñas y medianas empresas. Con más de 15 años en el mercado, hemos ayudado a decenas de negocios a optimizar sus procesos y tomar decisiones más inteligentes con tecnología SAP.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> <span>Expertos certificados en SAP Business One.</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>100% de nuestros proyectos han sido llevados con éxito a fase productiva.</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Soporte personalizado y continuo.</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Soluciones a la medida de tu empresa.</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Implementación ágil y sin complicaciones.</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Consultores con experiencia en múltiples industrias.</span></li>
                    </ul>
                </div>
                <!-- <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div> -->
            </div>
        </div>
    </section><!-- /About Section -->
    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Clientes Satisfechos</p>
                    </div>
                </div><!-- End Stats Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Proyectos</p>
                    </div>
                </div><!-- End Stats Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Horas de soporte</p>
                    </div>
                </div><!-- End Stats Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Colaboradores</p>
                    </div>
                </div><!-- End Stats Item -->
            </div>
        </div>
    </section><!-- /Stats Section -->
    <!-- About Alt Section -->
    <section id="about-alt" class="about-alt section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/about.webp" class="img-fluid" alt="">
                    <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> -->
                </div>
                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-warning">Transforma la gestión de tu empresa en México con SAP Business One</h3>
                    <p class="fst-italic mt-5 text-white">
                        En el dinámico mercado mexicano, la eficiencia y el control son clave para el crecimiento. En ON HAND Tech Solutions, somos expertos en la implementación de SAP Business One, la solución integral de gestión empresarial diseñada para impulsar a las pequeñas y medianas empresas hacia el éxito. Olvídate de los procesos manuales y de la información fragmentada; con nosotros, obtendrás una visión unificada y en tiempo real de toda tu operación.
                    </p>
                    <ul class="text-white">
                        <li><i class="bi bi-check2-all"></i> <span>Control Total de tu Negocio:.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Impulsa la Productividad.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Crecimiento Sostenido.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- /About Alt Section -->
    

    <!-- Testimonials Section -->
    <!-- <section id="testimonials" class="testimonials section">
        <!-- Section Title ->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title ->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
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
                                "slidesPerView": 1,
                                "spaceBetween": 40
                            },
                            "1200": {
                                "slidesPerView": 3,
                                "spaceBetween": 20
                            }
                        }
                    }
                </script>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item" "="">
            <p>
              <i class=" bi bi-quote quote-icon-left"></i>
                            <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                        </div>
                    </div><!-- End testimonial item ->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div><!-- End testimonial item ->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                        </div>
                    </div><!-- End testimonial item ->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                        </div>
                    </div><!-- End testimonial item ->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div><!-- End testimonial item ->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section> -->
    <!-- /Testimonials Section -->
    
    <!-- Services Section -->
    <section id="services" class="services section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Servicios Especializados en SAP Business One</h2>
            <p>
                En <b>ON HAND Tech Solutions</b>, no solo implementamos <b>SAP Business One</b>: creamos soluciones inteligentes que responden a los retos reales de tu negocio.
                A través de una metodología comprobada y consultores con experiencia en diversos sectores, entregamos más que software: <b>entregamos resultados medibles</b>.
            </p>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <h3>Diagnóstico empresarial</h3>
                        <p>
                            Analizamos tus procesos actuales para identificar áreas de mejora y adaptaciones necesarias en SAP Business One.
                        </p>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h3>Planeación estratégica</h3>
                        <p>
                            Diseñamos un plan detallado con entregables, cronograma, riesgos y responsables. Así garantizamos transparencia, control y alineación con tus objetivos de negocio.
                        </p>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <h3>Diseño funcional y técnico</h3>
                        <p>Configuramos SAP Business One de forma específica para tu empresa. Personalizamos módulos, flujos de trabajo, reportes y autorizaciones, asegurando una solución a medida.</p>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-code-square"></i>
                        </div>
                        <h3>Desarrollo y extensiones</h3>
                        <p>Conectamos SAP Business One con otros sistemas internos o externos (CRM, tiendas en línea, plataformas contables, etc.). También desarrollamos AddOns si tu operación lo requiere.</p>
                        
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h3>Capacitación práctica por roles</h3>
                        <p>Formamos a tus usuarios finales y administradores del sistema según sus funciones. Lo hacemos de forma práctica, con ejemplos reales y documentación clara.</p>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-database"></i>
                        </div>
                        <h3>Diseño de Bases de Datos y Soluciones EDI</h3>
                        <p>Podemos modelar soluciones a tu medida tanto en bases de datos como en intercambio electrónico de información.</p>
                        
                    </div>
                </div><!-- End Service Item -->
            </div>
        </div>
    </section>
    <!-- /Services Section -->

    <!-- Clients Section -->
    <!-- <section id="clients" class="clients section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Empresas que confían en ON HAND Tech Solutions</h2>
            <p>
                Cada empresa con la que trabajamos representa un nuevo reto y una oportunidad para generar valor real. Desde empresas manufactureras hasta distribuidores, retailers y servicios profesionales, hemos adaptado SAP Business One a distintos modelos de negocio.
            </p>
        </div><!-- End Section Title --
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                </div><!-- End Client Item --
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                </div><!-- End Client Item ->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div><!-- End Client Item ->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                </div><!-- End Client Item ->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                </div><!-- End Client Item ->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                </div><!-- End Client Item ->
            </div>
        </div>
    </section> -->
    <!-- /Clients Section -->
    
    <!-- Call To Action Section -->
    <!-- <section id="call-to-action" class="call-to-action section accent-background">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Call To Action</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a class="cta-btn" href="#">Call To Action</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- /Call To Action Section -->
    
    
    <!-- Portfolio Section -->
    <!-- <section id="portfolio" class="portfolio section">
        <!-- Section Title ->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title ->
        <div class="container">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-product">Card</li>
                    <li data-filter=".filter-branding">Web</li>
                </ul><!-- End Portfolio Filters ->
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item ->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item ->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 1</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item ->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item ->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 2</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item ->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 2</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item ->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item ->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item ->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 3</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item ->
                </div><!-- End Portfolio Container ->
            </div>
        </div>
    </section> -->
    <!-- /Portfolio Section -->

    <!-- Team Section -->
    <!-- section id="team" class="team section light-background">
        <!-- Section Title ->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title ->
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div><!-- End Team Member ->
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div><!-- End Team Member >
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div><!-- End Team Member ->
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                        </div>
                    </div>
                </div><!-- End Team Member ->
            </div>
        </div>
    </section> -->
    <!-- /Team Section -->
    
    <!-- Pricing Section -->
    <!-- section id="pricing" class="pricing section">
        <!-- Section Title ->
        <div class="container section-title" data-aos="fade-up">
            <h2>Pricing</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title ->
        <div class="container">
            <div class="row g-4 g-lg-0">
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pricing-item">
                        <h3>Free Plan</h3>
                        <h4><sup>$</sup>0<span> / month</span></h4>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                        </ul>
                        <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                    </div>
                </div><!-- End Pricing Item ->
                <div class="col-lg-4 featured" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pricing-item">
                        <h3>Business Plan</h3>
                        <h4><sup>$</sup>29<span> / month</span></h4>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                            <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                            <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                        </ul>
                        <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                    </div>
                </div><!-- End Pricing Item ->
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pricing-item">
                        <h3>Developer Plan</h3>
                        <h4><sup>$</sup>49<span> / month</span></h4>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                            <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                            <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                        </ul>
                        <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                    </div>
                </div><!-- End Pricing Item ->
            </div>
        </div>
    </section> -->
    <!-- /Pricing Section -->
    
    <!-- Faq Section -->
    <!-- <section id="faq" class="faq section light-background">
        <!-- Section Title ->
        <div class="container section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title ->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-container">
                        <div class="faq-item faq-active">
                            <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                            <div class="faq-content">
                                <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item->
                        <div class="faq-item">
                            <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                            <div class="faq-content">
                                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item->
                        <div class="faq-item">
                            <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                            <div class="faq-content">
                                <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item->
                        <div class="faq-item">
                            <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                            <div class="faq-content">
                                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item->
                        <div class="faq-item">
                            <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                            <div class="faq-content">
                                <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item->
                        <div class="faq-item">
                            <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                            <div class="faq-content">
                                <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item->
                    </div>
                </div><!-- End Faq Column->
            </div>
        </div>
    </section> -->
    <!-- /Faq Section -->
    
    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h3>Contáctanos | ON HAND Tech Solutions</h3>
            <p>
                ¿Buscas una consultoría confiable en SAP Business One en México? Estás en el lugar correcto.
                En ON HAND Tech Solutions, ayudamos a pequeñas y medianas empresas a implementar, optimizar y mantener SAP Business One de forma eficiente y segura.
                Ya sea que estés evaluando cambiar tu ERP, mejorar tu sistema actual o simplemente resolver dudas sobre SAP, estamos listos para escucharte.
            </p>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <!-- <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div> -->
            <!-- End Google Maps -->
            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Dirección</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div><!-- End Info Item -->
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Teléfono</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div><!-- End Info Item -->
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Correo electrónico</h3>
                            <p>info@example.com</p>
                        </div>
                    </div><!-- End Info Item -->
                </div>
                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo" required="">
                            </div>
                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Correo electrónico" required="">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="asunto" placeholder="Asunto" required="">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="comentarios" rows="6" placeholder="comentarios" required=""></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Tu información ha sido enviada, nos comunicaremos contigo a la brevedad posible. Gracias!</div>
                                <button type="submit"><i class="bi bi-send"></i> Enviar Información</button>
                            </div>
                        </div>
                    </form>
                </div><!-- End Contact Form -->
            </div>
        </div>
    </section><!-- /Contact Section -->
</main>

<?php
include('includes/footer.php');
?>