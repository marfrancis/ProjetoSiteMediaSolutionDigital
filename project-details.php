<?php 
$root = 'http://localhost/projetositemediasolutiondigital/';
$foto = 'slider-inner-2.png';

$title = $facebook_title = "Serviços detalhe";
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
                        <h2 class="breadcrumb-title">Project Details</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Project Details</li>
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
                                    <h2>SEO marketing do a unlimited</h2>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="project-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia odio temporibus
                                        distinctio repudiandae eum nostrum amet quam consequatur incidunt reprehenderit
                                        unde
                                        facilis ea corporis eos voluptatibus delectus minima eius veritatis, officiis
                                        eaque!
                                        Corrupti quos quia beatae obcaecati vero quisquam at iste rem quam ab
                                        necessitatibus
                                        tempora natus.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-1">
                                <div class="project-info">
                                    <ul>
                                        <li>Client: <span>John Marke</span></li>
                                        <li>Project type: <span>SEO And Marketing</span></li>
                                        <li>Website: <a href="#"><span>http://www.info.com</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="project-details-cont mt--30">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid molestias in
                                        eligendi omnis, amet ipsum, consequatur autem illo dolorum fugit doloremque.
                                        Ipsam sapiente itaque illum sunt eius cupiditate nihil, rerum vero corrupti,
                                        animi iure quis atque expedita. Tenetur corporis fugit non, eius error
                                        voluptatem quae cum quisquam necessitatibus! Debitis eos id hic, repellendus,
                                        nihil alias rem earum dolores voluptatibus enim, fuga reprehenderit numquam
                                        commodi minima maiores harum dignissimos magni tempore. Expedita consectetur
                                        consequatur officiis suscipit inventore nam culpa aliquam quaerat, perferendis
                                        nulla consequuntur et libero ipsam sit, esse id veritatis alias iusto unde, sed
                                        repellat earum placeat perspiciatis! Eum, illo!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our case Area End -->


        <!-- Perfect-start-area  Start -->
        <div class="perfect-start-aera bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="perfect-start-inner">
                            <p>Make Your Perfect Business Right Now!</p>
                            <div class="get-started-button">
                                <a href="#" class="start-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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