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
        <div class="breadcrumb-area-sobre section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="breadcrumb-title">About</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">About</li>
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
                        </div>
                        <!--// about-us-image End -->
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="about-us-wrap">
                            <!-- section-title Start -->
                            <div class="section-title text-left">
                                <h4>About Us</h4>
                                <h3>Who We <span>Are</span></h3>
                            </div>
                            <!--// section-title End -->

                            <!-- About us content Start -->
                            <div class="about-us-content">
                                <p>
                                    Media Solution is a technology-driven company that intends to make your projects
                                    reality. We are passionate about innovation, and we are always updating ourselves to
                                    offer the best to our customers. We want to make your dream possible, and we know
                                    that today, digital is the best way to get your initiative started. Thinking about
                                    it, we created Media Solution. We`ll make your life easier with a well done work.
                                </p>
                                <p>
                                    Contact us, ask for a budget, and see your dream come true!
                                </p>
                                <ul>
                                    <li>With web solutions, we can create a website that conveys the image of your company.
                                    </li>
                                    <li>With graphic design, we can create a visual identity to your project. </li>
                                    <li>With Digital Marketing, your business will make a lot of success in social media and search engines.</li>
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
                            <p>Completed Projects</p>
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
                            <p>Satisfied Costumers</p>
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
                            <p>Projects in progress</p>
                        </div>
                        <!-- counter start -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Project-count-inner End -->


       

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