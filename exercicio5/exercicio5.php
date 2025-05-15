<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    <input type="number" name="numero">
    <button type="submit">Resultado</button>
    </form>

    <?php
    if (!empty($_POST["numero"])) {
        $n = $_POST["numero"];
        for ($i = 1; $i <= 10; $i++) {
            echo "$n x $i = " . ($n * $i) . "<br>";
        }
    }
    ?>
</body>
</html>