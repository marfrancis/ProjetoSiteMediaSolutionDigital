<?php 

$root = 'http://localhost/projetositemediasolutiondigital/';
$foto = 'slider-inner-2.png';

$title = $facebook_title = "Media Solution";
$keywords = 'Desenvolvimento, personalizado, Sistemas, ux, Web, uma, empresa, atendimento, tenha, benefícios, website, únicos., business., Desenvolva, seu, Criação, com, São Paulo, web designer, desenvolvimento web, php, sistemas, manutenção de sites, negócios internet, empresa de sites, solução web, soluções, webfor, site, webbusiness, web business, media solution business, criação de sites, webquatro, websao paulo, E-commerce, E-comerce, Ecommerce, Desenvolvedor de Sites, São Paulo, São Caetano do Sul, Sites, Web for, Media Solution, Media, video, edição de video, design, design grafico';
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
                                <h1><span class="color-two">Agência</span> <span class="color-two">Digital</span> para
                                    Empresas</h1>
                                <p>Aumentar as vendas e o número de clientes é, consequentemente, o principal objetivo
                                    de qualquer negócio. Um dos caminhos de maior custo-benefício para se atingir essa
                                    meta é através do Marketing Digital que atua de diversas maneiras, dentre elas, na
                                    criação da presença digital da sua marca.</p>
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
                            <h4>SERVIÇOS</h4>
                            <h3>O Que <span>Fazemos</span></h3>
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
                                <h3>Soluções Web</h3>
                                <p>Precisa criar um projeto como um site ou um aplicativo? A Media Solution te oferece serviços completos de criação à hospedagem.</p>
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
                                <h3>Design Gráfico</h3>
                                <p>O design é uma área importante em qualquer negócio, pensando nisso, a Media Solution oferece à seus clientes artes e peças conceituais de qualidade.</p>
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
                                <h3>Marketing Digital</h3>
                                <p>As mídias sociais são muito importantes na hora de bombar o seu negócio, por isso, trazemos estratégias eficientes para qualquer iniciativa.</p>
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
                            <h4>Portfólio</h4>
                            <h3>Nosso <span>Portfólio</span></h3>
                        </div>
                        <!--// section-title End -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt--30">
                        <!-- single-case-item Start -->
                        <div class="single-case-item">
                            <div class="single-case-image">
                                <a class="case-image" href="case-studie.php" target="_blank"><img src="assets/images/case/01.jpg" alt=""></a>
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
                                <a class="case-image" href="case-studie.php"><img src="assets/images/case/02.jpg" alt=""></a>
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
                                <a class="case-image" href="case-studie.php"><img src="assets/images/case/03.jpg" alt=""></a>
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
                                <h4>Sobre nós</h4>
                                <h3>Quem <span>Somos</span></h3>
                            </div>
                            <!--// section-title End -->

                            <!-- About us content Start -->
                            <div class="about-us-content">
                                <h2><b>Missão</b></h2>
                                <p> Desenvolver soluções web e mobile focadas em resultados para os clientes, propondo
                                    soluções criativas e inovadoras que agreguem valor e superem as expectativas</p>
                                <h2><b>Visão</b></h2>
                                <p>Ser reconhecida pelo mercado, clientes e colaboradores pela incessante busca da
                                    excelência em seus serviços e dedicação ao cliente.</p>

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

        <?php include_once 'perfect.php' ?>

        <!-- Latest News Area Start -->
        <div class="latest-news-area section-pt section-pb-80  bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title Start -->
                        <div class="section-title">
                            <h4>ULTIMAS NOTÍCIAS</h4>
                            <h3>Nosso <span>Blog</span></h3>
                        </div>
                        <!--// section-title End -->
                    </div>
                </div>
                <div class="row latest-blog-active">
                    <div class="col-lg-4">
                        <!-- single-latest-blog Start -->
                        <div class="single-latest-blog mb--30 mt--30">
                            <div class="latest-blog-image">
                                <a href="blog-details-left-sidebar.php"><img src="assets/images/blog/blog-01.jpg" alt=""></a>
                            </div>
                            <div class="latest-blog-cont">
                                <h3><a href="blog-details-left-sidebar.php">Por que as empresas de comércio eletrônico falham?</a></h3>
                                
                            </div>
                        </div>
                        <!--// single-latest-blog End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- single-latest-blog Start -->
                        <div class="single-latest-blog mb--30 mt--30">
                            <div class="latest-blog-image">
                                <a href="blog-details-left-sidebar2.php"><img src="assets/images/blog/blog-02.jpg" alt=""></a>
                            </div>
                            <div class="latest-blog-cont">
                                <h3><a href="blog-details-left-sidebar2.php">25 perguntas comuns de SEO e suas respostas</a></h3>
                                
                            </div>
                        </div>
                        <!--// single-latest-blog End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- single-latest-blog Start -->
                        <div class="single-latest-blog mb--30 mt--30">
                            <div class="latest-blog-image">
                                <a href="blog-details-left-sidebar3.php"><img src="assets/images/blog/blog-03.jpg" alt=""></a>
                            </div>
                            <div class="latest-blog-cont">
                                <h3><a href="blog-details-left-sidebar3.php">Por que a manutenção do site é importante para o seu negócio?</a></h3>
                               
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