<?php require('partitials/header.php'); ?> 
<?php
    require('../mysql_connect.php');

    $sql_smfevenement27 = "SELECT * FROM evenement_engels WHERE dag = '27' ORDER BY id";
    $sql_smfevenement27_result = $conn->query($sql_smfevenement27);

    $sql_smfevenement28 = "SELECT * FROM evenement_engels WHERE dag = '28' ORDER BY tijd";
    $sql_smfevenement28_result = $conn->query($sql_smfevenement28);

    $sql_smfevenement29 = "SELECT * FROM evenement_engels WHERE dag = '29' ORDER BY id";
    $sql_smfevenement29_result = $conn->query($sql_smfevenement29);

    $sql_smfevenement30 = "SELECT * FROM evenement_engels WHERE dag = '30' ORDER BY tijd";
    $sql_smfevenement30_result = $conn->query($sql_smfevenement30);

    $sql_smfevenement01 = "SELECT * FROM evenement_engels WHERE dag = '1' ORDER BY id";
    $sql_smfevenement01_result = $conn->query($sql_smfevenement01);

    $sql_smfevenement02 = "SELECT * FROM evenement_engels WHERE dag = '2' ORDER BY id";
    $sql_smfevenement02_result = $conn->query($sql_smfevenement02);

    $sql_smfevenement03 = "SELECT * FROM evenement_engels WHERE dag = '3' ORDER BY id";
    $sql_smfevenement03_result = $conn->query($sql_smfevenement03);

    $sql_smfevenement04 = "SELECT * FROM evenement_engels WHERE dag = '4' ORDER BY id";
    $sql_smfevenement04_result = $conn->query($sql_smfevenement04);

    $sql_smfevenement05 = "SELECT * FROM evenement_engels WHERE dag = '5' ORDER BY id";
    $sql_smfevenement05_result = $conn->query($sql_smfevenement05);

    $sql_smfevenement22 = "SELECT * FROM evenement_engels WHERE dag = '22' ORDER BY id";
    $sql_smfevenement22_result = $conn->query($sql_smfevenement22);

?>
<script>
    $(".card-title ").html("Program <br/>Sustainable Moments");
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
    <meta name="title" content="Program">
	<meta name="description" content="Join us for the first edition of the Sustainable Moments Festival (SuMoFest), from 29 September to 6 October, 2019. At various places in Groningen, we will provide valuable lectures, fun events and cool workshops about fashion and lifestyle, for example.">
    <!-- einde meta-->
    <div class="bg-lichtgroen text-white"> 
        <div class="container py-5 text-md-center">
            <div class="mx-sm-auto small-div" style="width: 50%;">
                <p>
                    Join us for the first edition of the 
                    Sustainable Moments Festival (SuMoFest), 
                    from 29 September to 6 October, 2019. 
                    At various places in Groningen, we will 
                    provide valuable lectures, fun events and 
                    cool workshops about fashion and lifestyle, for example.
                </p>
            </div> 
        </div>
    </div>
    <div class="container py-5 text-center">
        <p>Do you want to quickly view the program on a specific day? Then click on the desired day below.</p>
        <div class="row text-center">
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="programma.php#27" style="text-decoration: none;">
                        <div class="card-body text-white">
                            fri 27 sep
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="programma.php#28" style="text-decoration: none;">
                        <div class="card-body text-white">
                            sat 28 sep
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="programma.php#29" style="text-decoration: none;">
                        <div class="card-body text-white">
                            sun 29 sep
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="programma.php#30" style="text-decoration: none;">
                        <div class="card-body text-white">
                            mon 30 sep
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="programma.php#01" style="text-decoration: none;">
                        <div class="card-body text-white">
                            tue 01 oct
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="programma.php#02" style="text-decoration: none;">
                        <div class="card-body text-white">
                            wed 02 oct
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="programma.php#03" style="text-decoration: none;">
                        <div class="card-body text-white">
                            thu 03 oct
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="programma.php#04" style="text-decoration: none;">
                        <div class="card-body text-white">
                            fri 04 oct
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="programma.php#05" style="text-decoration: none;">
                        <div class="card-body text-white">
                            sat 05 oct
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-2">
                <div class="card my-2 programm-card">    
                    <a href="programma.php#05" style="text-decoration: none;">
                        <div class="card-body text-white">
                            sun 22 dec
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
                            if($sql_smfevenement27_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfevenement27_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/evenement-panel.php');
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
                            if($sql_smfevenement28_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfevenement28_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/evenement-panel.php');
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
                            if($sql_smfevenement29_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfevenement29_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/evenement-panel.php');
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
                            if($sql_smfevenement30_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfevenement30_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/evenement-panel.php');
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
                            if($sql_smfevenement01_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfevenement01_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/evenement-panel.php');
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
                            if($sql_smfevenement02_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfevenement02_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/evenement-panel.php');
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
                            if($sql_smfevenement03_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfevenement03_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/evenement-panel.php');
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
                            if($sql_smfevenement04_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfevenement04_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/evenement-panel.php');
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
                            if($sql_smfevenement05_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfevenement05_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/evenement-panel.php');
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
                <a class="programma-anchor" id="22"></a>
                <div class="card-body text-left bg-lichtgroen text-white">
                 Sunday 22 December
                </div>
            </div>
                <div class="row">
                    <div class="col col-1 col-sm-1 col-md-1 col-lg-2">
                    </div>
                    <div class="col col-11 col-sm-11 col-md-11 col-lg-10 py-1">
                        <?php
                            if($sql_smfevenement22_result ->num_rows != 0){//kijkt of de query niet leeg is
                                while($row = $sql_smfevenement22_result ->fetch_object()){ // haalt resultaten op
                                require('partitials/evenement-panel.php');
                                }
                            }
                        ?>
                    </div>
                </div>   
            </div>
        </div>
    </div>
<?php require('partitials/footer.php'); ?>
