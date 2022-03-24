<?php 
//slå på felrapportering
ini_set("display_errors", 1);
error_reporting(E_ALL);




// Uppgifter för databasen, användare, lösenord...

$användare = "bloggen";
$lösenord = "!922H2_h*Z0QGa3a";
$databas = "bloggen_db";
$host = "localhost";

// Logga in

$conn = new mysqli($host, $användare, $lösenord, $databas);

// gick det att ansluta?
if ($conn->connect_error) {
    die("Någonting blev fel!" . $conn->connect_error);
} else {
}

?>