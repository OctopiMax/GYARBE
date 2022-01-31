<?php
include "konfigdb.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="kontainer">
    <h1>Lista på alla bog</h1>
    

    
    <?php
    $sql = "SELECT titel, datum FROM movies";
    
    $result = $conn->query($sql);

    if (!$result) {
        die("något gick åt bogen med sql satsen");
    } else {
        echo "<p>SQL satsen funkade bog</p>";

        while ($rad = $result->fetch_assoc()) {
echo "<p>$rad[datum] $rad[titel]</p>";
        }
    }
    
    ?>
</div>

</body>

</html>