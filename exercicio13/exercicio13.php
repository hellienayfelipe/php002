<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada em PHP</title>
</head>
<body>
    <h2>Informe um número para ver a tabuada:</h2>

    <form method="post">
        <label>Número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Gerar Tabuada</button>
    </form>

    <?php
    if (!empty($_POST["numero"])) {
        $numero = $_POST["numero"];
        echo "<h3>Tabuada do $numero:</h3>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
    }
    ?>
</body>
</html>