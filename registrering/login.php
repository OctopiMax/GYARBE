<?php
include "konfigdb.php";
session_start();
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bloggen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Kentucky Fried Chicken</h1>
        <nav>
            <h3>Logga In</h3>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="regi.php">Registra</a>
                </li>

                <?php
                 if ($_SESSION['inloggad'] == false) {
                    
                ?>
             <li class="nav-item">
                    <a class="nav-link active" href="login.php">Logga in</a>
                </li>
                
                <?php } ?>
                <?php if ($_SESSION['inloggad'] == true) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logga Ut</a>
                </li>
                <?php } ?>
            </ul>
        </nav>
        <main>
            <form action="login.php" method="POST">
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" type="email" class="form-control" id="inputEmail">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputLösen" class="col-sm-2 col-form-label">Lösenord</label>
                    <div class="col-sm-10">
                        <input name="lösen" type="password" class="form-control" id="inputLösen">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Logga In</button>
            </form>

            <?php

            // Ta emot data från formuläret
            $email = filter_input(INPUT_POST, "email");
            $lösen = filter_input(INPUT_POST, "lösen");

            // Testa att det fungerar
            //var_dump($namn, $email, $lösen);

            // Kolla så att det INTE är "null"
            if ($email && $lösen) {


                // Kolla at användarnamnet eller email inte redan använts
                $sql = "SELECT * FROM register WHERE epost='$email'";

                // 2. Kör SQL kommandot
                $resultat = $conn->query($sql);

                // 3. Fungerar det?
                if (!$resultat) {
                    die("<p class=\"alert-warning\">Någonting blev fel med sql satsen!</p>");
                } else {
                    //plocka ut svaret
                    $rad = $resultat->fetch_assoc();

                    // kolla om lösenord och hash matchar
                    if (password_verify($lösenord, $rad['hash'])) {
                        echo "<p class=\"alert-success\">Du är inloggad</p>";

                        // Kom ihåg att vi är inloggad
                        $_SESSION['inloggad'] = true;
                    } else {
                        echo "<p class=\"alert-warning\">Epost eller lösenord stämmer inte!</p>";
                    }
                }
            }


            ?>
        </main>
    </div>
</body>

</html>