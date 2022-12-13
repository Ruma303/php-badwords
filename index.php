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
        $newArray = str_ireplace($search, '***', $oldArray);
    ?>
    <h1>Testo di riferimento</h1>
    <?php echo "<p>${oldArray}</p>";?>
    <form action="" method="GET">
        <label for="word">Parola da censurare</label>
        <input type="text" id="word" name="word">
        <button>Cenzura!</button>
    </form>
    Parola censurata:
    <?= $search; ?>
    <h1>Nuovo testo censurato</h1>
    <p><?php echo $newArray; ?></p>
</body>
</html>