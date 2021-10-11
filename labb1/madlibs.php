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
        <h1 class="display-4">Inloggning</h1>
        <?php

        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
        $bostad = filter_input(INPUT_POST, 'bostad', FILTER_SANITIZE_STRING);
        $mår = filter_input(INPUT_POST, 'mår', FILTER_SANITIZE_STRING);
        $adjektiv = filter_input(INPUT_POST, 'adjektiv', FILTER_SANITIZE_STRING);

        echo "Odenplan tanten var ute och raidade burkar, hon hette $namn, var så $adjektiv.
        hon bor i $bostad och just nu så känner hon sig $mår";
        
        

        

        ?>
    </div>
</body>
</html>