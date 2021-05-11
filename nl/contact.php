<?php require('partitials/header.php'); ?> 
<script>
    $(".card-title ").html("Contact");
    $('.card-sub').css('display', 'none');
</script>
    <!-- meta titel en beschrijving -->
    <meta name="title" content="Contact">
	<meta name="description" content="Neem contact op">
    <!-- einde meta-->
    <div class="container py-5">
        <div class="py-5">
        </div>
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-8 col-lg-8">
                <h5 class="pb-2">Neem contact op</h5>

                <?php require('partitials/contactform.php'); ?>
                <form class="form-horizontal pb-5" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <div class="text-center">
                            <div class="form-group">
                                <div class="">
                                    <?php echo $result; ?>  
                                </div>
                            </div>
                        </div>
                    </div>                     
                    <div>
                        <div class="offset-top-10">
                            <form role="form" id="feedbackForm">
                                <div class="form-group">    
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Naam" <?php if(!empty($_POST['name'])){echo "value=\"".$_POST['name']."\"";}?>>
                                    <?php echo "<p class=\"text-danger\">".$errName."</p>";?>
                                </div>
                                <div class="row">
                                    <div class="col col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefoonnummer" <?php if(!empty($_POST['phone'])){echo "value=\"".$_POST['phone']."\"";}?>>
                                            <?php echo "<p class=\"text-danger\">".$errPhone."</p>";?>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mailadres">
                                            <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group offset-top-45">
                                    <textarea rows="11" cols="100" class="form-control" id="message" name="message" placeholder="Bericht"></textarea><?php if(!empty($_POST['message'])){echo $_POST['message'];}?></textarea>
                                    <?php echo "<p class=\"text-danger\">".$errMessage."</p>";?>
                                </div>
                            </form>
                            <input id="submit" name="submit" type="submit" value="Verzenden" class="btn btn-groenrood w-100">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col col-12 col-sm-12 col-md-4 col-lg-4">
                <h5 class="pb-2">Contact informatie</h5>
                <p>Boterdiep 63</p>
				<p>9721 LK Groningen </p>
                <p><i class="fas fa-phone-alt mr-3" style="color: #105c4c;"></i><a href="tel:06 23145237" target="_blank" class="a-groenrood">06 - 23 14 52 37</a></li></p>
                <p><i class="fas fa-envelope mr-3" style="color: #105c4c;"></i><a href="mailto:floor@burobries.nl" class="a-groenrood" target="_blank">floor@burobries.nl</a></p>
                <h6 class="pt-3">Volg ons op social media</h6>
				<div>
					<a class="facebook mr-2" href="https://www.facebook.com/Sustainable-Moments-315174912492460/" target="_blank"><i class="fab fa-facebook-f fa-2x a-roodgroen"></i></a>
					<a class="instagram mx-2" href="https://www.instagram.com/sustainablemoments050/" target="_blank"><i class="fab fa-instagram fa-2x a-roodgroen"></i></a>  
				</div>
            </div>
        </div>   
    </div>
<?php require('partitials/footer.php'); ?>
