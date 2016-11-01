<?php
$optionsField = array(
'div'   => false,
'class'   => 'form-control',

);  
?>
<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Contato</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Contato</h1>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps - Go to the bottom of the page to change settings and map location. 
<div id="googlemaps" class="google-map"></div> -->

<div class="container">

    <div class="row">
        <div class="col-md-6">

            <h2 class="short"><strong>Contato</strong></h2>
            <?php echo $this->Form->create('Contato',array('role' => 'form','inputDefaults' => $optionsField));?>    
            <form id="contactForm" action="php/contact-form.php" method="POST">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <?php echo $this->Form->input('nome',array('label' => 'Seu nome *')); ?>
                        </div>
                        <div class="col-md-6">
                            <?php echo $this->Form->input('email',array('label' => 'Seu E-mail *')); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <?php echo $this->Form->input('assunto',array('label' => 'Seu Assunto *')); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <?php echo $this->Form->input('texto',array('label' => 'Mensagem *','type' => 'textarea')); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="Enviar mensagem" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">

            <h4 class="push-top">Entre em <strong>contato</strong></h4>
            <p>Para solicitar e ou agendar visitas, eliminar duvidas, solicitações e correções, ligue para:XX-xxxxx-xxxx ou envie email através do. formulario a seguir</p>

            <hr />
            <!--
            <h4>O <strong>Escritório</strong></h4>
            <ul class="list-unstyled">
                <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
                <li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-7890</li>
                <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
            </ul>

            <hr />
            -->
            <h4><strong>Horário</strong></h4>
            <ul class="list-unstyled">
                <li><i class="fa fa-time"></i> Monday - Friday 9am to 5pm</li>
                <li><i class="fa fa-time"></i> Saturday - 9am to 2pm</li>
                <li><i class="fa fa-time"></i> Sunday - Closed</li>
            </ul>

        </div>

    </div>

</div>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>

    /*
    Map Settings

        Find the Latitude and Longitude of your address:
            - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
            - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

    */

    // Map Markers
    var mapMarkers = [{
        address: "New York, NY 10017",
        html: "<strong>New York Office</strong><br>New York, NY 10017",
        icon: {
            image: "img/pin.png",
            iconsize: [26, 46],
            iconanchor: [12, 46]
        },
        popup: true
    }];

    // Map Initial Location
    var initLatitude = 40.75198;
    var initLongitude = -73.96978;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            draggable: true,
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 16
    };

    var map = $("#googlemaps").gMap(mapSettings);

    // Map Center At
    var mapCenterAt = function(options, e) {
        e.preventDefault();
        $("#googlemaps").gMap("centerAt", options);
    }

</script>
