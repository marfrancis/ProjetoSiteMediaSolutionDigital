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
                                <a class="case-image" href="#"><img src="assets/images/case/01.jpg" alt=""></a>
                            </div>
                            <div class="case-content">
                                <h3><a href="#">Marcelo Ribeiro Patisserie</a></h3>
                                <p>Randomised words which don't look n slightly believable. If you are going to use a
                                    passayou need to be sure kew ki..</p>
                            </div>
                        </div>
                        <!--// single-case-item End -->
                    </div>
                    <div class="col-lg-4 col-md-6 mt--30">
                        <!-- single-case-item Start -->
                        <div class="single-case-item">
                            <div class="single-case-image">
                                <a class="case-image" href="#"><img src="assets/images/case/02.jpg" alt=""></a>
                            </div>
                            <div class="case-content">
                                <h3><a href="#">CLIENTE 2</a></h3>
                                <p>Randomised words which don't look n slightly believable. If you are going to use a
                                    passayou need to be sure kew ki..</p>
                            </div>
                        </div>
                        <!--// single-case-item End -->
                    </div>
                    <div class="col-lg-4 col-md-6 mt--30">
                        <!-- single-case-item Start -->
                        <div class="single-case-item">
                            <div class="single-case-image">
                                <a class="case-image" href="#"><img src="assets/images/case/03.jpg" alt=""></a>
                            </div>
                            <div class="case-content">
                                <h3><a href="#">CLIENTE 3</a></h3>
                                <p>Randomised words which don't look n slightly believable. If you are going to use a
                                    passayou need to be sure kew ki..</p>
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

        <!-- Testimonial Area Start -->
        <div class="testimonial-area section-pb">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12 mr-auto ml-auto testimonial-active">
                        <!-- testimonial-wrap Start -->
                        <div class="testimonial-wrap text-center">
                            <div class="testimonial-image ">
                                <img src="assets/images/review/comment-3.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <ul>
                                    <li><a href="#"><img src="assets/images/icon/start.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/icon/start.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/icon/start.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/icon/start.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/icon/start-o.png" alt=""></a></li>
                                </ul>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout.
                                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                    letters,page when looking at its layout. The point</p>

                            </div>
                            <div class="author-info">
                                <h4>Anna Rose</h4>
                                <p>Fassion Designer</p>
                            </div>
                        </div>
                        <!--// testimonial-wrap End -->

                        <!-- testimonial-wrap Start -->
                        <div class="testimonial-wrap text-center">
                            <div class="testimonial-image ">
                                <img src="assets/images/review/comment-2.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <ul>
                                    <li><a href="#"><img src="assets/images/icon/start.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/icon/start.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/icon/start.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/icon/start.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/icon/start-o.png" alt=""></a></li>
                                </ul>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout.
                                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                    letters,page when looking at its layout. The point</p>

                            </div>
                            <div class="author-info">
                                <h4>Rose Jorina</h4>
                                <p>Fassion Designer</p>
                            </div>
                        </div>
                        <!--// testimonial-wrap End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->

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
                                <a href="#"><img src="assets/images/blog/blog-01.jpg" alt=""></a>
                            </div>
                            <div class="latest-blog-cont">
                                <h3><a href="#">Digatal marketing is one of the</a></h3>
                                <p>Lorem Ipsum available, but the majority have suffered alteration in form.</p>
                            </div>
                        </div>
                        <!--// single-latest-blog End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- single-latest-blog Start -->
                        <div class="single-latest-blog mb--30 mt--30">
                            <div class="latest-blog-image">
                                <a href="#"><img src="assets/images/blog/blog-04.jpg" alt=""></a>
                            </div>
                            <div class="latest-blog-cont">
                                <h3><a href="#">Keywords research is more then</a></h3>
                                <p>Lorem Ipsum available, but the majority have suffered alteration in form.</p>
                            </div>
                        </div>
                        <!--// single-latest-blog End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- single-latest-blog Start -->
                        <div class="single-latest-blog mb--30 mt--30">
                            <div class="latest-blog-image">
                                <a href="#"><img src="assets/images/blog/blog-06.jpg" alt=""></a>
                            </div>
                            <div class="latest-blog-cont">
                                <h3><a href="#">For SEO marketing you have to</a></h3>
                                <p>Lorem Ipsum available, but the majority have suffered alteration in form.</p>
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