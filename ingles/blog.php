<?php 
$root = 'http://localhost/projetositemediasolutiondigital/';
$foto = 'slider-inner-2.png';

$title = $facebook_title = "Blog";
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
                        <h2 class="breadcrumb-title">Blog</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <div class="blog-area bg-grey section-ptb">
            <div class="container">
                <div class="row">
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
                        <div class="single-latest-blog mb--30 ">
                            <div class="latest-blog-image">
                                <a href="blog-details-left-sidebar4.php"><img src="../assets/images/blog/blog-04.jpg"
                                        alt="Como usar vídeos para expandir sua empresa on-line"></a>
                            </div>
                            <div class="latest-blog-cont">
                                <h3><a href="blog-details-left-sidebar4.php">How to Use Videos to Grow your Business
                                        Online</a></h3>

                            </div>
                        </div>
                        <!--// single-latest-blog End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- single-latest-blog Start -->
                        <div class="single-latest-blog mb--30">
                            <div class="latest-blog-image">
                                <a href="blog-details-left-sidebar5.php"><img src="../assets/images/blog/blog-05.jpg"
                                        alt="Web Design responsivo - a necessidade de hoje"></a>
                            </div>
                            <div class="latest-blog-cont">
                                <h3><a href="blog-details-left-sidebar5.php">Responsive Web Design - The Need of Today
                                    </a></h3>

                            </div>
                        </div>
                        <!--// single-latest-blog End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- single-latest-blog Start -->
                        <div class="single-latest-blog mb--30 ">
                            <div class="latest-blog-image">
                                <a href="blog-details-left-sidebar6.php"><img src="../assets/images/blog/blog-06.jpg"
                                        alt="Qual plataforma de mídia social está certa para comercializar seu negócio?"></a>
                            </div>
                            <div class="latest-blog-cont">
                                <h3><a href="blog-details-left-sidebar6.php"> Which social media platform is right to market your business?</a></h3>

                            </div>
                        </div>
                        <!--// single-latest-blog End -->
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
                                    <a class="Next" href="#">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--// paginatoin-area End -->
            </div>
        </div>


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