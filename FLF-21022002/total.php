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
        <h1>High Score</h1>
        <?php

        //läs in all text i filen highscore.txt
        // file_get_contents("highscore.txt");

        // läs in alla rader från highscore.txt
        $allText = file_get_contents("highscore.txt");
        echo "<h4>Full Score List</h4>";
        echo "<pre class=\"alert alert-info\">$allText</pre>";

        echo "<h4> Total score</h4>";
        $allaRader = file("highscore.txt");
        $total = 0;
        foreach ($allaRader as $rad) {
            echo "<p>$rad</p>";

            // dela upp raden
            $delar = explode(":", $rad);

            $total += $delar[1];
        }

        echo "<p>$total</p>"



        ?>
    </div>
</body>

</html>