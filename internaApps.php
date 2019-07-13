<?php 
$root = 'http://localhost/projetositemediasolutiondigital/';
$foto = 'slider-inner-2.png';

$title = $facebook_title = "Desenvolvimento App";
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
        <!-- Header-area end -->

        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="breadcrumb-title">Serviços</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Serviços</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <!-- Our case Area Start -->
        <div class="our-case-details section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-thumbnail mb--30 text-center">
                            <div class="cars-image">
                                <img src="assets/images/case/project-details.jpg" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="project-title">
                                    <h2>Desenvolvimento de Aplicativos iOS e Android</h2>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="project-details">
                                    <p>Pensando na praticidade e nos desejos dos clientes, fazemos aplicativos em
                                            ambos
                                            os sistemas operacionais. </p>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="project-details-cont mt--30">
                                    <p>Sabendo que os dispositivos móveis são a tendência da década, e continuarão por muitos anos, muitas empresas e iniciativas desejam criar aplicativos para, de alguma forma, ficarem mais próximos ao usuário, já que um aplicativo é muito prático para um celular ou tablet. Pensando nisso, a Media Solution oferece aos clientes a criação de Apps em qualquer sistema operacional. Há uma disputa entre celulares iOS e celulares Android no mercado atualmente, então, nada melhor para o seu aplicativo que estar presente nesses dois sistemas. Nós garantimos a criação dos seus apps seguindo as suas preferências de design, usabilidade, interface e muito mais.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our case Area End -->


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