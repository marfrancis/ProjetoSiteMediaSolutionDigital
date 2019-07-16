<?php 

$root = 'http://localhost/projetositemediasolutiondigital/';
$foto = 'slider-inner-2.png';

$title = $facebook_title = "Media Solution";
$keywords = 'Desenvolvimento, personalizado, Sistemas, ux, Web, uma, empresa, atendimento, tenha, benefícios, website, únicos., Web4business., Desenvolva, seu, Criação, com, brusque, web designer, desenvolvimento web, php, sistemas, manutenção de sites, negócios internet, empresa de sites, solução web, soluções, webfor, site, webbusiness, web business, media solution business, criação de sites, webquatro, websao paulo, E-commerce, E-comerce, Ecommerce, Desenvolvedor de Sites, São Paulo, São Caetano do Sul, Sites, Web for, Media Solution, Media';
$description = $facebook_description = substr(strip_tags('<p>Desenvolvimento Web, uma empresa de Criação de Sites e Sistemas Web com atendimento personalizado. Criação de Sites é com a Media Solution. Desenvolva seu website com a Media Solution e tenha benefícios únicos.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);




include_once 'head.php'?>

<body>

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <!-- Header-area start -->
        <?php include_once 'header.php' ?>
        <!-- Header-area end -->

        <!-- Hero Slider start -->
        <div class="hero-slider hero-slider-1">
            <div class="single-slide">
                <!-- Hero Content One Start -->
                <div class="hero-content-one container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 order-md-1 order-2">
                            <!-- slider-text-info Start -->
                            <div class="slider-text-info">
                                <h4>Media Solution</h4>
                                <h1><span class="color-two">Digital</span> <span class="color-two">Agency</span> for
                                    Business</h1>
                                <p>
                                    Increasing sales and number of customers is therefore the primary goal of any
                                    business. One of the most cost-effective ways to reach this goal is through Digital
                                    Marketing that acts in various ways, among them, in creating the digital presence of
                                    your brand.</p>
                            </div>
                            <!--// slider-text-info End -->
                        </div>
                        <div class="col-lg-6 col-md-5 order-md-2 order-1">
                            <!-- slider-inner-image Start -->
                            <div class="slider-inner-image wow fadeInBottom" data-wow-duration="1s">
                                <img src="assets/images/slider/slider-inner-2.png" alt="">
                            </div>
                            <!--// slider-inner-image End -->
                        </div>
                    </div>
                </div>
                <!-- Hero Content One End -->
            </div>
        </div>
        <!-- Hero Slider end -->

        <!-- Service Area Start -->
        <div class="service-area bg-grey section-ptb">
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
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- single-service Start -->
                        <div class="single-service text-center">
                            <div class="service-icon">
                                <span class="fas fa-laptop-code"></span>
                            </div>
                            <!--// service-icon -->

                            <div class="serviace-info">
                                <h3>Web Solutions</h3>
                                <p>Need to create a project like a site or an application? Media Solution offers you complete services, from creation to hosting.</p>
                            </div>
                            <!--// serviace-info -->
                        </div>
                        <!-- single-service End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- single-service Start -->
                        <div class="single-service text-center">
                            <div class="service-icon">
                                <span class="fas fa-pencil-alt"></span>
                            </div>
                            <!--// service-icon -->

                            <div class="serviace-info">
                                <h3>Graphic Design</h3>
                                <p>Design is an important area in any business, thinking about it, Media Solution
                                    offers its clients quality arts and design pieces</p>
                            </div>
                            <!--// serviace-info -->
                        </div>
                        <!-- single-service End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- single-service Start -->
                        <div class="single-service text-center">
                            <div class="service-icon">
                                <span class="fas fa-bullseye"></span>
                            </div>
                            <!--// service-icon -->

                            <div class="serviace-info">
                                <h3>Digital Marketing</h3>
                                <p>Social media is very important when it comes to pumping your business,
                                    we bring effective strategies to any initiative.</p>
                            </div>
                            <!--// serviace-info -->
                        </div>
                        <!-- single-service End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Area End -->

        <!-- Our case Area Start -->
        <div class="our-case-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title Start -->
                        <div class="section-title">
                            <h4>Portfolio</h4>
                            <h3>Our <span>Portfolio</span></h3>
                        </div>
                        <!--// section-title End -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt--30">
                        <!-- single-case-item Start -->
                        <div class="single-case-item">
                            <div class="single-case-image">
                                <a class="case-image" href="case-studie.php" target="_blank"><img src="../assets/images/case/01.jpg" alt=""></a>
                            </div>
                            <div class="case-content">
                                <h3><a href="case-studie.php">Marcelo Ribeiro Patisserie</a></h3>
                                
                            </div>
                        </div>
                        <!--// single-case-item End -->
                    </div>
                    <div class="col-lg-4 col-md-6 mt--30">
                        <!-- single-case-item Start -->
                        <div class="single-case-item">
                            <div class="single-case-image">
                                <a class="case-image" href="case-studie.php"><img src="../assets/images/case/02.jpg" alt=""></a>
                            </div>
                            <div class="case-content">
                                <h3><a href="case-studie.php">Jacque Massini Boutique</a></h3>
                              
                            </div>
                        </div>
                        <!--// single-case-item End -->
                    </div>
                    <div class="col-lg-4 col-md-6 mt--30">
                        <!-- single-case-item Start -->
                        <div class="single-case-item">
                            <div class="single-case-image">
                                <a class="case-image" href="case-studie.php"><img src="../assets/images/case/03.jpg" alt=""></a>
                            </div>
                            <div class="case-content">
                                <h3><a href="case-studie.php">Reeduca Recicla</a></h3>
                                
                            </div>
                        </div>
                        <!--// single-case-item End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Our case Area End -->

        <!-- About Us Area Start -->
        <div class="about-us-area  bg-grey section-ptb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2">
                        <div class="about-us-wrap">
                            <!-- section-title Start -->
                            <div class="section-title text-left">
                                <h4>About Us</h4>
                                <h3>Who We <span>Are</span></h3>
                            </div>
                            <!--// section-title End -->

                            <!-- About us content Start -->
                            <div class="about-us-content">
                                <h2><b>Mission</b></h2>
                                <p> 
                                    Develop results-based web and mobile solutions for clients by proposing creative and innovative solutions that add value and exceed expectations</p>
                                <h2><b>Vision</b></h2>
                                <p>Being recognized by the market, customers and employees for the incessant search for excellence in its services and dedication to the client.</p>

                            </div>
                            <!--// About us content End -->
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 order-lg-2 order-1">
                        <!-- about-us-image Start -->
                        <div class="about-us-image">
                            <img src="assets/images/about/about-02.png" alt="">
                        </div>
                        <!--// about-us-image End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us Area End -->

        <!-- Perfect Area start -->

        <?php include_once "perfect.php" ?>

        <!-- Perfect Area End -->

        <!-- Latest News Area Start -->
        <div class="latest-news-area section-pt section-pb-80  bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title Start -->
                        <div class="section-title">
                            <h4>LAST NEWS</h4>
                            <h3>Our <span>Blog</span></h3>
                        </div>
                        <!--// section-title End -->
                    </div>
                </div>
                <div class="row latest-blog-active">
                <div class="col-lg-4">
                        <!-- single-latest-blog Start -->
                        <div class="single-latest-blog mb--30">
                            <div class="latest-blog-image">
                                <a href="blog-details-left-sidebar.php"><img src="../assets/images/blog/blog-01.jpg"
                                        alt="Por que as empresas de comércio eletrônico falham?"></a>
                            </div>
                            <div class="latest-blog-cont">
                                <h3><a href="blog-details-left-sidebar.php">Why do eCommerce Business Fail? Know How to Keep Yours!</a></h3>

                            </div>
                        </div>
                        <!--// single-latest-blog End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- single-latest-blog Start -->
                        <div class="single-latest-blog mb--30">
                            <div class="latest-blog-image">
                                <a href="blog-details-left-sidebar2.php"><img src="../assets/images/blog/blog-02.jpg"
                                        alt="25 perguntas comuns de SEO e suas respostas"></a>
                            </div>
                            <div class="latest-blog-cont">
                                <h3><a href="blog-details-left-sidebar2.php">25 Common SEO Questions and Theirs
                                        Answers</a></h3>

                            </div>
                        </div>
                        <!--// single-latest-blog End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- single-latest-blog Start -->
                        <div class="single-latest-blog mb--30">
                            <div class="latest-blog-image">
                                <a href="blog-details-left-sidebar3.php"><img src="../assets/images/blog/blog-03.jpg"
                                        alt="Por que a manutenção do site é importante para o seu negócio?"></a>
                            </div>
                            <div class="latest-blog-cont">
                                <h3><a href="blog-details-left-sidebar3.php">Why is website maintenance important to
                                        your business?</a></h3>

                            </div>
                        </div>
                        <!--// single-latest-blog End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- single-latest-blog Start -->
                        <div class="single-latest-blog mb--30 mt--30">
                            <div class="latest-blog-image">
                                <a href="#"><img src="assets/images/blog/blog-02.jpg" alt=""></a>
                            </div>
                            <div class="latest-blog-cont">
                                <h3><a href="#">Keywords need to unlimited</a></h3>
                                <p>Lorem Ipsum available, but the majority have suffered alteration in form.</p>
                            </div>
                        </div>
                        <!--// single-latest-blog End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest News Area End -->

        <!-- Footer Area Start -->
        <?php include_once 'footerIndex.php' ?>
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