<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label>Digite seu nome:</label>
        <input type="text" name="nome" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (!empty($_POST["nome"])) {
        $nome = htmlspecialchars($_POST["nome"]);
        echo "<h3>Olá, $nome!</h3>";
    }
    ?>
    
</body>
</html>