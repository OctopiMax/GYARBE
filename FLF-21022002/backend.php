<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="kontainer">
        <h1>Resultatet</h1>
        <?php
        
    $namnet = filter_input(INPUT_POST, "namn");
    $mobilen = filter_input(INPUT_POST, "mobil");
    $hscoren = filter_input(INPUT_POST, "hscore");

    // testar
    // var_dump($namnet,$mobilen,$hscoren);

    //kontroll att highscoren är korrekt
    if ($hscoren <= 0 || $hscoren > 1000) {
        //Skriv ut ett error
        echo "<p class=\"alert alert-danger\"> Fel! Fuska inte, highscore måste vara större än 0 och mindre än 1000</p>";
    } else {
        // Skriv ut ett fint svar
        echo "<p class=\"alert alert-success\">$namnet din highscore är $hscoren.</p>";
        echo "<p class=\"alert alert-success\">$namnet din mobil är $mobilen</p>";

          // spara ned all i en textfil

    file_put_contents("highscore.txt", "$namnet:$hscoren\n", FILE_APPEND);

    //bekräfta att highscoren sparas
    echo "<p class=\"alert alert-success\"> Din highscore har sparats</p>";
    }
    

  

    ?>
    </div>
</body>
</html>