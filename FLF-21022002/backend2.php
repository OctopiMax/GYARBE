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
        <h1>Spara textmassa resultat</h1>
        <?php
        
    $namn = filter_input(INPUT_POST, "namn");
    $text = filter_input(INPUT_POST, "text");

    // testar
    // var_dump($namnet,$mobilen,$hscoren);


        
        echo "<p class=\"alert alert-success\"> Din text är sparad i '$namn.txt'</p>";
   
          // spara ned all i en textfil

    file_put_contents("$namn.txt", "$namn:$text\n", FILE_APPEND);

    

  

    ?>
    </div>
</body>
</html>