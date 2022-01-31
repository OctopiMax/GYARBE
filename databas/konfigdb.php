<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
?>
<?php 

//uppgifter för att logga in
$user = "movies_db";
$pass = "!I/KV3!D-gyh(HOM";
$host = "localhost";
$databas = "movies_db";
// 1 att logga in
$conn = new mysqli($host, $user, $pass, $databas);

//testar att anslutningen funkar
if ($conn->connect_error) {
    die ("Fel! Något gick åt bogen" . $conn->connect_error);
} else {
    echo "Yes! Vi är inbog i mysql";
}

?>