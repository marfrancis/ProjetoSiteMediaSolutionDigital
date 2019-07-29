<?php 

$root = 'http://localhost/projetositemediasolutiondigital/';
$foto = 'slider-inner-2.png';

$title = $facebook_title = "Portfólio";
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
        <div class="breadcrumb-area-portfolio section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="breadcrumb-title">Portfolio</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Portfolio</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <!-- Our case Area Start -->
        <div class="our-case-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb--30">
                        <!-- single-case-item Start -->
                        <div class="single-case-item">
                            <div class="single-case-image">
                                <a class="case-image" href="project-patisserie-en.php"><img src="../assets/images/case/01.jpg"
                                        alt=""></a>
                            </div>
                            <div class="case-content">
                                <h3><a href="project-patisserie-en.php">Marcelo Ribeiro Patisserie</a></h3>

                            </div>
                        </div>
                        <!--// single-case-item End -->
                    </div>
                    <div class="col-lg-4 col-md-6 mb--30">
                        <!-- single-case-item Start -->
                        <div class="single-case-item">
                            <div class="single-case-image">
                                <a class="case-image" href="project-boutique-en.php"><img src="../assets/images/case/02.jpg"
                                        alt=""></a>
                            </div>
                            <div class="case-content">
                                <h3><a href="project-boutique-en.php">Jacque Massini Boutique</a></h3>

                            </div>
                        </div>
                        <!--// single-case-item End -->
                    </div>
                    <div class="col-lg-4 col-md-6 mb--30">
                        <!-- single-case-item Start -->
                        <div class="single-case-item">
                            <div class="single-case-image">
                                <a class="case-image" href="project-reeduca-en.php"><img src="../assets/images/case/03.jpg"
                                        alt=""></a>
                            </div>
                            <div class="case-content">
                                <h3><a href="project-reeduca-en.php">Reeduca Recicla</a></h3>

                            </div>
                        </div>
                        <!--// single-case-item End -->
                    </div>
                    <div class="col-lg-4 col-md-6 mb--30">
                        <!-- single-case-item Start -->
                        <div class="single-case-item">
                            <div class="single-case-image">
                                <a class="case-image" href="project-details.html"><img src="../assets/images/case/04.jpg"
                                        alt=""></a>
                            </div>
                            <div class="case-content">
                                <h3><a href="project-details.html">Strings & Music</a></h3>

                            </div>
                        </div>
                        <!--// single-case-item End -->
                    </div>
                    <div class="col-lg-4 col-md-6 mb--30">
                        <!-- single-case-item Start -->
                        <div class="single-case-item">
                            <div class="single-case-image">
                                <a class="case-image" href="project-details.html"><img src="assets/images/case/05.jpg"
                                        alt=""></a>
                            </div>
                            <div class="case-content">
                            <h3><a href="project-details.html">Jam Produtora</a></h3>
                                
                            </div>
                        </div>
                        <!--// single-case-item End -->
                    </div>
                    <div class="col-lg-4 col-md-6 mb--30">
                        <!-- single-case-item Start -->
                        <div class="single-case-item">
                            <div class="single-case-image">
                                <a class="case-image" href="project-details.html"><img src="assets/images/case/06.jpg"
                                        alt=""></a>
                            </div>
                            <div class="case-content">
                                <h3><a href="project-details.html">Twice profit than before</a></h3>
                                
                            </div>
                        </div>
                        <!--// single-case-item End -->
                    </div>
                </div>
                <!-- paginatoin-area Start -->
                <div class="paginatoin-area">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pagination-box">
                                <li><a class="Previous" href="#">Previous</a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                
                                <li>
                                    <a class="Next" href="#">Next </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--// paginatoin-area End -->
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