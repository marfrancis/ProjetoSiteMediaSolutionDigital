<?php 
$root = 'http://localhost/projetositemediasolutiondigital/';
$foto = 'slider-inner-2.png';

$title = $facebook_title = "Sobre Nós";
$keywords = 'Desenvolvimento, personalizado., Sistemas, , Web, uma, empresa, atendimento, tenha, benefícios, website, únicos., Web4business., Desenvolva, seu, Criação, com, brusque, web designer, desenvolvimento web, php, sistemas, manutenção de sites, negócios internet, empresa de sites, solução web, soluções, webfor, site, webbusiness, web business, web4 business, criação de sites, webquatro, webbrusque, E-commerce, E-comerce, Ecommerce, Desenvolvedor de Sites, Brusque, Sites, Web for, Media Solution, Media';
$description = $facebook_description = substr(strip_tags('<p>Desenvolvimento Web, uma empresa de Criação de Sites e Sistemas Web com atendimento personalizado. Criação de Sites é com a Media Solution. Desenvolva seu website com a Media Solution e tenha benefícios únicos.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);


include_once 'head.php'?>

<body>

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <!-- Header-area start -->
    <?php include_once 'header.php' ?>
        <!-- Header-area end -->
    <!-- Header-area end -->
    
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="breadcrumb-title">Sobre</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Sobre</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    
    
    <!-- About Us Area Start -->
    <div class="about-us-area section-ptb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- about-us-image Start -->
                    <div class="about-us-image  wow fadeInBottom" data-wow-duration="1s">
                        <img src="assets/images/about/about-02.png" alt="">
                    </div><!--// about-us-image End -->
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-us-wrap">
                        <!-- section-title Start -->
                        <div class="section-title text-left">
                            <h4>Sobre Nós</h4>
                            <h3>Quem Somos <span>Nós</span></h3>
                        </div>
                        <!--// section-title End -->

                        <!-- About us content Start -->
                        <div class="about-us-content">
                            <p>
                            A Media Solution é uma empresa voltada à tecnologia, que tem como intenção tornar os seus projetos realidade. Somos apaixonados por inovação, e estamos sempre nos atualizando para oferecermos o melhor aos nossos clientes. Queremos tornar o seu sonho possível, e sabemos que, nos dias atuais, o digital é o melhor meio para fazer sua iniciativa deslanchar. Pensando nisso, criamos a Media Solution. Vamos facilitar a sua vida com um trabalho muito bem feito.
                            </p>
                            <p>Entre em contato conosco, peça um orçamento, e veja seu sonho tornando-se realidade! </p>
                            <ul>
                                <li>Com soluções web, podemos criar um site que transmita a imagem da sua empresa.</li>
                                <li>Com design gráfico, podemos criar uma identidade visual para seu projeto. </li>
                                <li>Com Marketing Digital, sua empresa irá fazer muito sucesso nas redes sociais e nos mecanismos de buscas.</li>
                            </ul>  
                        </div>
                        <!--// About us content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End -->
    
    
    <!-- Project-count-inner Start -->
    <div class="project-count-inner section-pb overlay-bg section-pt-80">
        <div class="container">
            <div class="row">
            
            <div class="col-lg-4 col-sm-6">
                <!-- counter start -->
                <div class="counter text-center mt--30">
                    <div class="count-icon">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <h3 class="counter-active">14</h3>
                    <p>Projetos Concluidos</p>
                </div>
                <!-- counter end -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- counter start --> 
                <div class="counter text-center mt--30">
                    <div class="count-icon">
                        <i class="fas fa-smile"></i>
                    </div>
                    <h3 class="counter-active">25</h3>
                    <p>Clientes Satisfeitos</p>
                </div>
                <!-- counter end -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- counter start -->
                <div class="counter text-center mt--30">
                    <div class="count-icon">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <h3 class="counter-active">12</h3>
                    <p>Projetos em Execução</p>
                </div>
                <!-- counter start -->
            </div>
        </div>
        </div>
    </div>
    <!-- Project-count-inner End -->
    
    
    <!-- Our Team Area Start -->
    
    <!-- Our Team Area End -->
    
    <!-- Perfect-start-area  Start -->
   <?php include_once 'perfect.php' ?>
    <!-- Perfect-start-area  End -->
    
    <!-- Footer Area Start -->
    <?php include_once 'footer.php' ?>
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