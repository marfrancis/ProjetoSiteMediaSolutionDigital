<?php include_once 'head.php'?>

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
                    <h2 class="breadcrumb-title">Contato</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                        <h4>CONTATO</h4>
                        <h3>Entre em <span>Contato</span></h3>
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
                                        <span class="bi bi-location-pointer"></span>
                                    </div> <!--// contact-icon -->

                                    <div class="contact-info">
                                        <p>Avenida Paulista, 543 - São Paulo</p>
                                    </div><!--// contact-info -->
                                </div>
                                <!-- single-contact End -->
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <!-- single-contact Start -->
                                <div class="single-contact-info text-center mt--30">
                                    <div class="contact-info-icon">
                                        <span class="bi bi-envelop"></span>
                                    </div> <!--// contact-icon -->

                                    <div class="contact-info">
                                        <a href="#">contato@mediasolutionproducoes.com.br</a>
                                    </div><!--// contact-info -->
                                </div>
                                <!-- single-contact End -->
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <!-- single-contact Start -->
                                <div class="single-contact-info text-center mt--30">
                                    <div class="contact-info-icon">
                                        <span class="bi bi-phone"></span>
                                    </div> <!--// contact-icon -->

                                    <div class="contact-info">
                                        <a href="#">+55 (11)98312-2283</a>
                                        <a href="#">+1 (259) 235-3898</a>
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
                                        <input name="name" placeholder="Seu nome*" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input name="email" placeholder="Endereço de e-mail*" type="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input name="phone" placeholder="Telefone*" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input name="subject" placeholder="Assunto*" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-box">
                                        <textarea name="message" placeholder="Sua mensagem*" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-submit-btn text-center">
                                <button type="submit" class="submit-btn border-radius  default-btn">Enviar e-mail</button>
                                <p class="form-messege"></p>
                            </div>
                        </form>
                    </div>
                    <!-- contact-form-warp End -->
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="map-area">
                        <div id="map"></div>
                    </div>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
<script>
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 10,

            scrollwheel: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(23.761226, 90.40766), // New York

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#444444"
                    }]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{
                        "color": "#f2f2f2"
                    }]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{
                            "color": "#314453"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [{
                            "lightness": "-12"
                        },
                        {
                            "saturation": "0"
                        },
                        {
                            "color": "#FFC200"
                        }
                    ]
                }
            ]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(23.761226, 90.420766),
            map: map,
            title: 'Snazzy!'
        });
    }
</script>


<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>


</body>

</html>