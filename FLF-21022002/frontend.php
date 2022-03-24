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

<div class="container">
    <h1>Spara Highscore</h1>
    <form action="backend.php" method="POST">
        <label for="tal1">Namn</label>
        <input id="tal1" class="form-control" type="text" name="namn">
        <label for="tal2">Mobil</label>
        <input id="tal2" class="form-control" type="text" name="mobil">
        <label for="tal2">Highscore</label>
        <input id="tal2" class="form-control" type="text" name="hscore">
        <button type="submit" class="btn btn-primary">Skicka</button>
    </form>
</div>
    
</body>
</html>