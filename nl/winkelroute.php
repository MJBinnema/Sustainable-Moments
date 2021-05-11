<?php require('partitials/header.php'); ?> 
<?php
    require('../mysql_connect.php');


    $record_per_page = 6;
    $page = '';
    if(isset($_GET["page"])){
        $page = $_GET["page"];
    }
    else{
        $page = 1;
    }

    $start_from = ($page-1)*$record_per_page;

    $sql_smfwinkels = "SELECT * FROM winkels ORDER BY id LIMIT $start_from, $record_per_page";
    $sql_smfwinkels_result = $conn->query($sql_smfwinkels);
?>
<script>
    $(".card-title ").html("Winkelroute<br/> Sustainable Moments");
    $('.card-sub').css('display', 'none');
</script>
    <!-- meta titel en beschrijving -->
    <meta name="title" content="Winkelroute">
	<meta name="description" content="Ontdek mogelijkheden voor een meer bewust leven op onze Sustainable winkelroute met alle duurzame hotspots van Groningen. Kom langs en laat je inspireren door alles wat Groningen al te bieden heeft: van lokale designers die duurzame projecten doen tot restaurants die alleen met lokale producten werken.">
    <!-- einde meta-->
    <div class="bg-lichtgroen text-white"> 
        <div class="container py-5 text-md-center">
            <div class="mx-sm-auto small-div" style="width: 50%;">
                <p>
                    Ontdek mogelijkheden voor een meer bewust leven op onze Sustainable 
                    winkelroute met alle duurzame hotspots van Groningen. Kom langs en 
                    laat je inspireren door alles wat Groningen al te bieden heeft: 
                    van lokale designers die duurzame projecten doen tot restaurants 
                    die alleen met lokale producten werken.
                </p>
                <a href="images/city-2112225_1920.jpg" style="display:none;" class="btn btn-roodgroen px-3 mt-4" download>Download de winkel route</a>
            </div>   
        </div>
    </div>
    <a class="anchor" id="evenement"></a>
    <div class="container py-5 text-center">
        <div class="row">
            <?php
                if($sql_smfwinkels_result ->num_rows != 0){//kijkt of de query niet leeg is
                    while($row = $sql_smfwinkels_result ->fetch_object()){ // haalt resultaten op
                        require('partitials/winkel-panel.php');
                    }
                }
            ?>
        </div>
    </div>
    <div class="container pt-3 pb-5">
        <div>  
            <?php
                $page_query = "SELECT * FROM winkels ORDER BY id";
                $page_result = mysqli_query($conn, $page_query);
                $total_records = mysqli_num_rows($page_result);
                $total_pages = ceil($total_records/$record_per_page);
                $start_loop = $page;
                $difference = $total_pages - $page;
                
                if($difference <= 6){
                    $start_loop = $total_pages - 6;
                }
                $end_loop = $start_loop + 6;
                echo "<div class='pagination text-center justify-content-center'>";
                if($page > 1){ 
                    echo "<a href='winkelroute.php?page=1#evenement'>Eerste</a>";
                    echo "<a href='winkelroute.php?page=".($page - 1)."#evenement'><</a>";
                }
                for($i=$start_loop; $i<=$end_loop; $i++){
                    $pg_no = empty($_GET['page'])? '1' : $_GET['page'] ;
                    $class = ($i==$pg_no)? 'current' : '';
                    echo "<a href='winkelroute.php?page=".$i."#evenement' class=". $class.">".$i."</a>";
                }
                if($page < $end_loop){
                    echo "<a href='winkelroute.php?page=".($page + 1)."#evenement'>></a>";
                    echo "<a href='winkelroute.php?page=".$total_pages."#evenement'>Laatste</a>";
                }
                echo '</div>'
            ?>
        </div>
    </div>
<?php require('partitials/footer.php'); ?>
