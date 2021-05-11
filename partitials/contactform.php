<?php


$result = "";

$errors = ""; //use to count errors


//Error message variables
$errName    = "";
$errEmail   = "";
$errPhone   = "";
$errMessage = "";


//message variables
$name    = "";
$phone   = "";
$email   = "";
$message = "";
$to      = "floor@burobries.nl";


if (isset($_POST['submit'])) {


        //check if name has been entered

        if (empty($_POST['name'])) {

                $errName = "Vul jouw naam in";
                $errors++;
        } else {

                $name = UserInput($_POST['name']);
        }

        //check if email entered
        if (empty($_POST['email'])) {

                $errEmail = "Vul jouw e-mailadres in";
                $errors++;

        } else {

                $email = UserInput($_POST['email']);


                // check if email is valid

                if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {

                        $errEmail = "Vul jouw e-mailadres in";
                        $errors++;
                }
        }

        if (empty($_POST['phone'])) {

                $errPhone = "Vul jouw nummer in";
                $errors++;
        } else {

                $phone = UserInput($_POST['phone']);

                // check if email is numbers

                if (!is_numeric($phone)) {

                        $errPhone = "Voer alleen cijfers in";
                        $errors++;
                }
        }

        //check message

        if (empty($_POST['message'])) {


                $errMessage = "Vul een bericht in";
        } else {

                $message = UserInput($_POST['message']);
        }

        if ($errors > 0) {
                // we have errors do not send email

                $result = "<div class=\"alert alert-danger\">Het bericht kan niet worden verstuurd. Het formulier mist " . $errors . " velden.</div>";


        } else {
                //no errors set email headers and send email


                // Always set content-type when sending HTML email
                $headers .= "Bericht verstuurd van het formulier op de website Sustainable Moments" . "\r\n";
                $headers .= 'Bericht van: ' . $email . "\r\n";
                $headers .= "\r\n";
                // More headers
                $headers .= "\r\n";
                $headers .= 'Naam: ' . $name . "\r\n";
                $headers .= 'Email: ' . $email . "\r\n";
                $headers .= 'Telefoonnummer: ' . $phone . "\r\n";
                $headers .= 'Bericht: ' . "\r\n" .  $message . "\r\n";


                if (mail($to,$email, $headers)) {

                        $result = "<div class=\"alert alert-success\">Bedankt voor je bericht. We zullen zo spoedig mogelijk reageren.</div>";
                        $_POST  = array(); //clear the form after sending

                } else {

                        $result = "<div class=\"alert alert-danger\">Er is helaas een fout opgetreden bij het verzenden van het bericht. Probeer het later opnieuw</div>";
                }





                


        }


}



//sanitise use input
function UserInput($data)
{

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}


?>