<?php 
$root = 'http://localhost/projetositemediasolutiondigital/';
$foto = 'slider-inner-2.png';

$title = $facebook_title = "Contato";
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
    <div class="breadcrumb-area-contato section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="breadcrumb-title">Contact</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    
    <!-- contact Area Start -->
    <div class="contact-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title Start -->
                    <div class="section-title">
                        <h4>CONTACT</h4>
                        <h3>Get in <span>Touch</span></h3>
                    </div>
                    <!--// section-title End -->
                </div>
            </div>
            <div class="contact-info-wrap">
                <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <!-- single-contact Start -->
                                <div class="single-contact-info text-center mt--30">
                                    <div class="contact-info-icon">
                                        <span class="fas fa-map-marker-alt"></span>
                                    </div> <!--// contact-icon -->

                                    <div class="contact-info">
                                        <p>São Caetano do Sul</p>
                                    </div><!--// contact-info -->
                                </div>
                                <!-- single-contact End -->
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <!-- single-contact Start -->
                                <div class="single-contact-info text-center mt--30">
                                    <div class="contact-info-icon">
                                        <span class="fas fa-envelope"></span>
                                    </div> <!--// contact-icon -->

                                    <div class="contact-info">
                                        <a href="#">contato@mediasolutiondigital.com.br</a>
                                    </div><!--// contact-info -->
                                </div>
                                <!-- single-contact End -->
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <!-- single-contact Start -->
                                <div class="single-contact-info text-center mt--30">
                                    <div class="contact-info-icon">
                                        <span class="fas fa-phone"></span>
                                    </div> <!--// contact-icon -->

                                    <div class="contact-info">
                                        <a href="#">+55 (11)98312-2283</a>
                                        <a href="#">+55 (11)93264-6565</a>
                                    </div><!--// contact-info -->
                                </div>
                                <!-- single-contact End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8  ml-auto mr-auto">
                    <!-- contact-form-warp Start -->
                    <div class="contact-form-warp pt--60 section-pb">
                        <form id="contact-form" action="mail.php" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input name="name" placeholder="Your name*" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input name="email" placeholder="E-mail Adress*" type="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input name="phone" placeholder="Phone*" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input name="subject" placeholder="Subject*" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-box">
                                        <textarea name="message" placeholder="Your message*" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-submit-btn text-center">
                                <button type="submit" class="submit-btn border-radius  default-btn">Send e-mail</button>
                                <p class="form-messege"></p>
                            </div>
                        </form>
                    </div>
                    <!-- contact-form-warp End -->
                </div>
            </div>
            
        </div>
    </div>
    <!-- contact Area End -->
   
    
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

<!-- google map js -->


<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>


</body>

</html>