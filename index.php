<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php
        $search = $_GET['word'];
        $oldArray = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, incidunt id maiores et at quibusdam deserunt alias sequi delectus itaque porro, minima ipsam! Mollitia similique dolore dolorem. Suscipit, voluptates optio.';
        $newArray = '';
    ?>
    <?php echo "<p>${oldArray}</p>";?>
    <form action="" method="GET">
        <label for="word">Parola da censurare</label>
        <input type="text" id="word" name="search">
        <button>Cenzura!</button>
    </form>
    <h1>Nuovo testo censurato</h1>
    <?= "<p>${newArray}</p>"; ?>
</body>
</html>