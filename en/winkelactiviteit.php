<?php require('partitials/header.php'); ?> 
<?php
    require('../mysql_connect.php');

    $sql_smfwinkelevenement27 = "SELECT * FROM winkel_evenement WHERE dag = '27' ORDER BY id";
    $sql_smfwinkelevenement27_result = $conn->query($sql_smfwinkelevenement27);

    $sql_smfwinkelevenement28 = "SELECT * FROM winkel_evenement WHERE dag = '28' ORDER BY tijd";
    $sql_smfwinkelevenement28_result = $conn->query($sql_smfwinkelevenement28);

    $sql_smfwinkelevenement29 = "SELECT * FROM winkel_evenement WHERE dag = '29' ORDER BY id";
    $sql_smfwinkelevenement29_result = $conn->query($sql_smfwinkelevenement29);

    $sql_smfwinkelevenement30 = "SELECT * FROM winkel_evenement WHERE dag = '30' ORDER BY id";
    $sql_smfwinkelevenement30_result = $conn->query($sql_smfwinkelevenement30);

    $sql_smfwinkelevenement01 = "SELECT * FROM winkel_evenement WHERE dag = '1' ORDER BY id";
    $sql_smfwinkelevenement01_result = $conn->query($sql_smfwinkelevenement01);

    $sql_smfwinkelevenement02 = "SELECT * FROM winkel_evenement WHERE dag = '2' ORDER BY id";
    $sql_smfwinkelevenement02_result = $conn->query($sql_smfwinkelevenement02);

    $sql_smfwinkelevenement03 = "SELECT * FROM winkel_evenement WHERE dag = '3' ORDER BY id";
    $sql_smfwinkelevenement03_result = $conn->query($sql_smfwinkelevenement03);

    $sql_smfwinkelevenement04 = "SELECT * FROM winkel_evenement WHERE dag = '4' ORDER BY id";
    $sql_smfwinkelevenement04_result = $conn->query($sql_smfwinkelevenement04);

    $sql_smfwinkelevenement05 = "SELECT * FROM winkel_evenement WHERE dag = '5' ORDER BY id";
    $sql_smfwinkelevenement05_result = $conn->query($sql_smfwinkelevenement05);

?>
<script>
    $(".card-title ").html("Activities in shops <br/>Sustainable Moments");
    $('.card-sub').css('display', 'none');
    $(".winkel-link").addClass('active');
</script>
<script>
    // smooth scroll
(function( $ ) {      "use strict";   
  $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
        });
  });   
}(jQuery));
</script>
    <!-- meta titel en beschrijving -->
    <meta name="title" content="Activities in shops">
	<meta name="description" content="Join us for the first edition of the Sustainable Moments Festival (SuMoFest), from 29 September to 6 October, 2019. At various places in Groningen, we will provide valuable lectures, fun events and cool workshops about fashion and lifestyle, for example.">
    <!-- einde meta-->
    <div class="bg-lichtgroen text-white"> 
        <div class="container py-5 text-md-center">
            <div class="mx-sm-auto small-div" style="width: 50%;">
                <p>
                    Join us for the first edition of the Sustainable Moments Festival (SuMoFest), 
                    from 29 September to 6 October, 2019. At various places in Groningen, 
                    we will provide valuable lectures, fun events and cool workshops 
                    about fashion and lifestyle, for example.
                </p>
            </div> 
        </div>
    </div>
    <div class="container py-5 text-center">
        <p>Do you want to quickly view the program on a specific day? Then click on the desired day below.</p>
        <div class="row text-center">
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="winkelactiviteit.php#27" style="text-decoration: none;">
                        <div class="card-body text-white">
                            fri 27 sep
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="winkelactiviteit.php#28" style="text-decoration: none;">
                        <div class="card-body text-white">
                            sat 28 sep
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="winkelactiviteit.php#29" style="text-decoration: none;">
                        <div class="card-body text-white">
                            sun 29 sep
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="winkelactiviteit.php#30" style="text-decoration: none;">
                        <div class="card-body text-white">
                            mon 30 sep
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="winkelactiviteit.php#01" style="text-decoration: none;">
                        <div class="card-body text-white">
                            tue 01 oct
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="winkelactiviteit.php#02" style="text-decoration: none;">
                        <div class="card-body text-white">
                            wed 02 oct
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="winkelactiviteit.php#03" style="text-decoration: none;">
                        <div class="card-body text-white">
                            thu 03 oct
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="winkelactiviteit.php#04" style="text-decoration: none;">
                        <div class="card-body text-white">
                            fri 04 oct
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="winkelactiviteit.php#05" style="text-decoration: none;">
                        <div class="card-body text-white">
                            sat 05 oct
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-3 text-center">
        <div>
            <div class="card w-100">
                <a class="programma-anchor" id="27"></a>
                <div class="card-body text-left bg-lichtgroen text-white">
                    Friday 27 September
                </div>
            </div>
                <div class="row">
                    <div class="col col-1 col-sm-1 col-md-1 col-lg-2">
                    </div>
                    <div class="col col-11 col-sm-11 col-md-11 col-lg-10 py-1">
                        <?php
                            if($sql_smfwinkelevenement27_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfwinkelevenement27_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/activiteit-panel.php');
                                }
                            }
                        ?>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <div class="container pt-3 text-center">
        <div>
            <div class="card w-100">
                <a class="programma-anchor" id="28"></a>
                <div class="card-body text-left bg-lichtgroen text-white">
                    Saturday 28 September
                </div>
            </div>
                <div class="row">
                    <div class="col col-1 col-sm-1 col-md-1 col-lg-2">
                    </div>
                    <div class="col col-11 col-sm-11 col-md-11 col-lg-10 py-1">
                        <?php
                            if($sql_smfwinkelevenement28_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfwinkelevenement28_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/activiteit-panel.php');
                                }
                            } 
                        ?>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <div class="container pt-3 text-center">
        <div>
            <div class="card w-100">
                <a class="programma-anchor" id="29"></a>
                <div class="card-body text-left bg-lichtgroen text-white">
                    Sunday 29 September
                </div>
            </div>
                <div class="row">
                    <div class="col col-1 col-sm-1 col-md-1 col-lg-2">
                    </div>
                    <div class="col col-11 col-sm-11 col-md-11 col-lg-10 py-1">
                        <?php
                            if($sql_smfwinkelevenement29_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfwinkelevenement29_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/activiteit-panel.php');
                                }
                            } 
                        ?>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <div class="container pt-3 text-center">
        <div>
            <div class="card w-100">
                <a class="programma-anchor" id="30"></a>
                <div class="card-body text-left bg-lichtgroen text-white">
                    Monday 30 September
                </div>
            </div>
                <div class="row">
                    <div class="col col-1 col-sm-1 col-md-1 col-lg-2">
                    </div>
                    <div class="col col-11 col-sm-11 col-md-11 col-lg-10 py-1">
                        <?php
                            if($sql_smfwinkelevenement30_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfwinkelevenement30_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/activiteit-panel.php');
                                }
                            }
                        ?>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <div class="container pt-3 text-center">
        <div>
            <div class="card w-100">
                <a class="programma-anchor" id="01"></a>
                <div class="card-body text-left bg-lichtgroen text-white">
                    Tuesday 01 October
                </div>
            </div>
                <div class="row">
                    <div class="col col-1 col-sm-1 col-md-1 col-lg-2">
                    </div>
                    <div class="col col-11 col-sm-11 col-md-11 col-lg-10 py-1">
                        <?php
                           if($sql_smfwinkelevenement01_result ->num_rows != 0){//kijkt of de query niet leeg is
                            while($row = $sql_smfwinkelevenement01_result ->fetch_object()){ // haalt resultaten op
                            require('partitials/activiteit-panel.php');
                                }
                            }
                        ?>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <div class="container pt-3 text-center">
        <div>
            <div class="card w-100">
                <a class="programma-anchor" id="02"></a>
                <div class="card-body text-left bg-lichtgroen text-white">
                    Wednesday 02 October
                </div>
            </div>
                <div class="row">
                    <div class="col col-1 col-sm-1 col-md-1 col-lg-2">
                    </div>
                    <div class="col col-11 col-sm-11 col-md-11 col-lg-10 py-1">
                        <?php
                            if($sql_smfwinkelevenement02_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfwinkelevenement02_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/activiteit-panel.php');
                                }
                            }
                        ?>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <div class="container pt-3 text-center">
        <div>
            <div class="card w-100">
                <a class="programma-anchor" id="03"></a>
                <div class="card-body text-left bg-lichtgroen text-white">
                    Thursday 03 October
                </div>
            </div>
                <div class="row">
                    <div class="col col-1 col-sm-1 col-md-1 col-lg-2">
                    </div>
                    <div class="col col-11 col-sm-11 col-md-11 col-lg-10 py-1">
                        <?php
                            if($sql_smfwinkelevenement03_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfwinkelevenement03_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/activiteit-panel.php');
                                }
                            }
                        ?>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <div class="container pt-3 text-center">
        <div>
            <div class="card w-100">
                <a class="programma-anchor" id="04"></a>
                <div class="card-body text-left bg-lichtgroen text-white">
                    Friday 04 October
                </div>
            </div>
                <div class="row">
                    <div class="col col-1 col-sm-1 col-md-1 col-lg-2">
                    </div>
                    <div class="col col-11 col-sm-11 col-md-11 col-lg-10 py-1">
                        <?php
                            if($sql_smfwinkelevenement04_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfwinkelevenement04_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/activiteit-panel.php');
                                }
                            }
                        ?>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <div class="container pt-3 pb-5 text-center">
        <div> 
            <div class="card w-100">
                <a class="programma-anchor" id="05"></a>
                <div class="card-body text-left bg-lichtgroen text-white">
                    Saturday 05 October
                </div>
            </div>
                <div class="row">
                    <div class="col col-1 col-sm-1 col-md-1 col-lg-2">
                    </div>
                    <div class="col col-11 col-sm-11 col-md-11 col-lg-10 py-1">
                        <?php
                            if($sql_smfwinkelevenement05_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfwinkelevenement05_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/activiteit-panel.php');
                                }
                            }
                        ?>
                    </div>
                </div>   
            </div>
        </div>
    </div>
<?php require('partitials/footer.php'); ?>
