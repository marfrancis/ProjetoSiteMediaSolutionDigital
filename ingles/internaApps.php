<?php 
$root = 'http://localhost/projetositemediasolutiondigital/';
$foto = 'slider-inner-2.png';

$title = $facebook_title = "Desenvolvimento App";
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
                        <h2 class="breadcrumb-title">Services</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Services</li>
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
                                    <h2>iOS and Android Apps Development</h2>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="project-details">
                                    <p>Thinking about the practicality and desires of customers, we make applications in
                                        both
                                        operating systems. </p>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="project-details-cont mt--30">
                                    <p>
                                        Knowing that mobile devices are the trend of the decade, and will continue to
                                        many years, many companies and initiatives want to create applications for
                                        somehow, to be closer to the user, since an application is very
                                        for a mobile phone or tablet. With that in mind, Media Solution offers
                                        customers to create Apps on any operating system. There is a dispute between
                                        iOS phones and Android phones on the market today, so nothing better to
                                        your application to be present on these two systems. We guarantee the
                                        creation of your apps following your preferences of design, usability,
                                        interface and more.
                                    </p>
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