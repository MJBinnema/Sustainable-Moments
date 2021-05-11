<?php require('partitials/header.php'); 

require('mysql_connect.php');

$sql_smfevenement = "SELECT * FROM evenement WHERE id = $_GET[id] ORDER BY id";
$sql_smfevenement_result = $conn->query($sql_smfevenement);
$row = $sql_smfevenement_result ->fetch_object();

?> 
<!-- meta titel en beschrijving -->
    <meta name="title" content="<?php echo $row->evenement_naam  ?>">
	<meta name="description" content="<?php echo $row->beschrijving_kort  ?>">
<!-- einde meta-->
<script>
    $('.banner').css('background-image', 'url(images/evenementen/evenement-<?php echo $row->id  ?>.png)');
    $(".card-title").html("<?php  echo $row->evenement_naam ?>");
    $('.card-sub').css('display', 'none');
    $('.tmf').css('display', 'none');
   
    
</script>
<?php
    $aIdcheck = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13); 
    if(isset($_GET['id']) && in_array($_GET['id'], $aIdcheck))
    {
        
    }
    else {
        echo "<script> location.href='programma.php'; </script>";
    }

    if($_GET['id'] == 13){

    }
?>

<div class="container py-5">
    <div class="row flex-column-reverse flex-lg-row py-2">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-8">
            <div>
                <?php echo $row->beschrijving ?>
            </div>
        </div>
        <div class="col col-12 col-sm-12 col-md-12 col-lg-4 py-2">
            <table class="table event-table" style="border: 1px solid #105c4c;">
                <tbody>
                    <tr>
                        <td class="font-weight-bold" style="border-top: none">Datum</td>
                        <td style="border-top: none;"><?php $myinput=$row->datum; $sqldate=date('d-m-Y',strtotime($myinput)); echo $sqldate; ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold" style="border-top: 1px solid #82c5a0;">Tijd</td>
                        <td style="border-top: 1px solid #82c5a0;"><?php echo $row->tijd ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold" style="border-top: 1px solid #82c5a0;">Locatie</td>
                        <td style="border-top: 1px solid #82c5a0;"><?php echo $row->plaats ?><br/><?php echo $row->adres ?></td>
                    </tr>
                    <tr>
                        <td class="kma font-weight-bold" style="border-top: 1px solid #82c5a0;">Kosten</td>
                        <td style="border-top: 1px solid #82c5a0;"><?php echo $row->kost ?></td>
                    </tr>
                </tbody>
            </table>
           <a href="<?php echo $row->facebook_link ?>" target="_blank"><button class="btn btn-primary w-100 my-3 mb-4" style="background-color: #3c5a99;"><i class="fab fa-facebook-f pr-3"></i>Bekijk dit event op Facebook</button></a>
        </div>
    </div>
</div>
<?php
   if($_GET['id'] == 12){
    echo "<script>$('.kma').html('Voor wie');</script>";
}
?>
<?php require('partitials/footer.php'); ?>