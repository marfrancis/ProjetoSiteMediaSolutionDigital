<?php 
$root = 'http://localhost/projetositemediasolutiondigital/';
$foto = 'slider-inner-2.png';

$title = $facebook_title = "Serviços";
$keywords = 'Desenvolvimento, personalizado, Sistemas, ux, Web, uma, empresa, atendimento, tenha, benefícios, website, únicos., business., Desenvolva, seu, Criação, com, São Paulo, web designer, desenvolvimento web, php, sistemas, manutenção de sites, negócios internet, empresa de sites, solução web, soluções, webfor, site, webbusiness, web business, media solution business, criação de sites, webquatro, websao paulo, E-commerce, E-comerce, Ecommerce, Desenvolvedor de Sites, São Paulo, São Caetano do Sul, Sites, Web for, Media Solution, Media, video, edição de video, design, design grafico';
$description = $facebook_description = substr(strip_tags('<p>Desenvolvimento Web, uma empresa de Criação de Sites e Sistemas Web com atendimento personalizado. Criação de Sites é com a Media Solution. Desenvolva seu website com a Media Solution e tenha benefícios únicos.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);

include_once 'head.php' ?>

<body>

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <!-- Header-area start -->
        <?php include_once 'header.php' ?>
        <!-- Header-area end -->

        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="breadcrumb-title">Serviços</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Serviços</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->

        <!-- Service Area Start -->
        <div class="service-area section-ptb">
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
                <div class="feature-area-inner-four">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaSites.php">
                                <div class="single-feature mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-laptop-code"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Criação de Sites</h3>
                                        <p>A Media Solution trabalha com a criação de sites totalmente responsivos e
                                            feitos exatamente de acordo com os gostos do cliente. </p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaApps.php">
                                <div class="single-feature active mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-mobile-alt"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Desenvolvimento de Apps iOS e Android.</h3>
                                        <p>Pensando na praticidade e nos desejos dos clientes, fazemos aplicativos em
                                            ambos
                                            os sistemas operacionais.</p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaRegistroHosp.php">
                                <div class="single-feature mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-server"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Registro e Hospedagem de domínios</h3>
                                        <p>A Media Solution Digital torna sua iniciativa e seu sonho em realidade com o
                                            registro e a hospedagem de novos domínios, para que sua marca seja única.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaIdentVisual.php">
                                <div class="single-feature mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-palette"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Identidade Visual</h3>
                                        <p>Com designers criativos, pensando em fazer sua marca única, oferecemos a
                                            criação
                                            da identidade visual da sua empresa ou iniciativa. </p>
                                    </div>
                                </div>
                            </a>

                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaLogos.php">
                                <div class="single-feature active mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-pen-fancy"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Criação de Logos</h3>
                                        <p>Pensando também na identidade da sua marca, o Logo é muito importante. Nossos
                                            designers garantem um logo conceitual e bem trabalhado.</p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaArtesProjetos.php">
                                <div class="single-feature mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-project-diagram"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Criação da arte de projetos e apresentações</h3>
                                        <p>Apostilas, livros e apresentações. A Media Solution faz toda a arte de seus
                                            projetos, tornando-o um sucesso.</p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaCampDigital.php">
                                <div class="single-feature mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-bullseye"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Campanha digital</h3>
                                        <p>Fazemos toda a campanha das suas mídias sociais. Artes, postagens,
                                            divulgação.
                                            Tudo para crescer a sua marca e tornar sua empresa um símbolo nos negócios
                                            digitais.</p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaSEO.php">
                                <div class="single-feature mt--30">
                                    <div class="feature-icon">
                                        <span class="fab fa-google"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>SEO - Otimização de Sites</h3>
                                        <p>Pensando nos mecanismos de buscas como Google, faremos seu site ficar entre
                                            os 10
                                            primeiros resultados em pesquisas relacionadas.</p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single-feature Start -->
                            <a href="internaVideos.php">
                                <div class="single-feature mt--30">
                                    <div class="feature-icon">
                                        <span class="fas fa-film"></span>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Edição de Vídeos</h3>
                                        <p>Quer um vídeo bem editado para seu canal de YouTube, apresentação de trabalho
                                            ou
                                            outras situações? A Media Solution te oferece isso.</p>
                                    </div>
                                </div>
                            </a>
                            <!--// single-feature End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Area End -->



        <!-- Perfect-start-area  Start -->
        <?php include_once 'perfect.php' ?>
        <!-- Perfect-start-area  End -->

        <!-- Footer Area Start -->
        <?php include_once'footer.php' ?>

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