<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Gästbok</h1>
        <?php

// finnns data?

if ($rubrik && $meddelande && $namn) {
    
}

// ta emot

        $ip = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
        $subnetmask = filter_input(INPUT_POST, 'rubrik', FILTER_SANITIZE_STRING);
        $gw = filter_input(INPUT_POST, 'meddelande', FILTER_SANITIZE_STRING);

        // filnamnet

if ($ip && $subnetmask && $gw) {


     $filnamn = "net.txt";

     // texten att spara

     $texten = "ip:$ip\n";
     $texten .= "subnetmask: $subnetmask\n";
     $texten .= "gw: $gw";

     // spara i textfil

     file_put_contents($filnamn, $texten);


     //bekräftelse

     echo "<p class=\"alert alert-success\"> sparats<\p>";

} else {
    echo "<p class=\"alert alert-warning\">Meddelandet har inte sparats<\p>!";

}
        
        ?>
    </div>
</body>
</html>