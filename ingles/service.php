<?php 
$root = 'http://localhost/projetositemediasolutiondigital/';
$foto = 'slider-inner-2.png';

$title = $facebook_title = "Serviços";
$keywords = 'Desenvolvimento, personalizado., Sistemas, , Web, uma, empresa, atendimento, tenha, benefícios, website, únicos., Web4business., Desenvolva, seu, Criação, com, brusque, web designer, desenvolvimento web, php, sistemas, manutenção de sites, negócios internet, empresa de sites, solução web, soluções, webfor, site, webbusiness, web business, web4 business, criação de sites, webquatro, webbrusque, E-commerce, E-comerce, Ecommerce, Desenvolvedor de Sites, Brusque, Sites, Web for, Media Solution, Media';
$description = $facebook_description = substr(strip_tags('<p>Desenvolvimento Web, uma empresa de Criação de Sites e Sistemas Web com atendimento personalizado. Criação de Sites é com a Media Solution. Desenvolva seu website com a Media Solution e tenha benefícios únicos.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);

include_once 'head.php' ?>

<body>

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <!-- Header-area start -->
        <?php include_once 'header.php' ?>
        <!-- Header-area end -->

        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="breadcrumb-title">Services</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Services</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->

        <!-- Service Area Start -->
        <div class="service-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title Start -->
                        <div class="section-title">
                            <h4>SERVICES</h4>
                            <h3>What We <span>Do</span></h3>
                        </div>
                        <!--// section-title End -->
                    </div>
                </div>
                <div class="feature-area-inner-four">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaSites.php">
                                <div class="single-feature mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-laptop-code"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>WebSite Development</h3>
                                        <p>
                                            Media Solution works with the creation of fully responsive webistes and
                                            made exactly according to the tastes of the customer. </p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaApps.php">
                                <div class="single-feature active mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-mobile-alt"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>iOS and Android Apps Development</h3>
                                        <p>Thinking about the practicality and desires of customers, we make applications in
                                        both
                                        operating systems.</p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaRegistroHosp.php">
                                <div class="single-feature mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-server"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Domain registration and Hosting</h3>
                                        <p>Media Solution Digital makes your initiative and your dream come true with
                                        registration and hosting of new domains, so that your brand is unique.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaIdentVisual.php">
                                <div class="single-feature mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-palette"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Visual Identity</h3>
                                        <p>With creative designers, thinking of making their unique brand, we offer the
                                        creation
                                        of the visual identity of your company or initiative. </p>
                                    </div>
                                </div>
                            </a>

                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaLogos.php">
                                <div class="single-feature active mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-pen-fancy"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Logo Creation</h3>
                                        <p>Thinking about the identity of your brand, Logo is very important. Our
                                        designers ensure a conceptual and well crafted logo.</p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaArtesProjetos.php">
                                <div class="single-feature mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-project-diagram"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Art creation for projects and presentations</h3>
                                        <p>Handouts, books and presentations. Media Solution makes all the art of your
                                        projects, making it a success.</p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaCampDigital.php">
                                <div class="single-feature mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-bullseye"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Digital Campaign</h3>
                                        <p>We make the whole campaign of your social media. Arts, post,
                                        disclosure.
                                        Everything to grow your brand and make your company a symbol in digital
                                        business.</p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaSEO.php">
                                <div class="single-feature mt--30">
                                    <div class="feature-icon">
                                        <span class="fab fa-google"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>SEO - Webiste Optimization</h3>
                                        <p>Thinking about search engines like Google, we'll make your site between
                                        the 10
                                        first results in related searches.</p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaVideos.php">
                                <div class="single-feature mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-film"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Video Editing</h3>
                                        <p> Want a well-edited video for your YouTube channel, work submission
                                        or
                                        other situations? Media Solution offers you this.</p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Area End -->



        <!-- Perfect-start-area  Start -->
        <?php include_once 'perfect.php' ?>
        <!-- Perfect-start-area  End -->

        <!-- Footer Area Start -->
        <?php include_once'footer.php' ?>

        <!-- Footer Area End -->



    </div>
    <!-- Main Wrapper End -->

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>
    <!-- Ajax Mail -->
    <script src="assets/js/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>



</body>

</html>