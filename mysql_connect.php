<?php
$servername = "localhost";
$username = "user-smf";
$password = "SuMoFest";
$dbname = "sustainablemoments";

/* 

$servername = "localhost";
$username = "susmoments_usersmf";
$password = "SuMoFest";
$dbname = "susmoments_sustainablemoments";

*/

// Verbind met de server
$conn = new mysqli($servername, $username, $password, $dbname);

// Geef een melding als er geen verbinding is
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
