<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label>Idade:</label>
        <input type="number" name="idade" required><br><br>

        <label>Altura (em metros):</label>
        <input type="number" name="altura" step="0.01" required><br><br>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if (!empty($_POST["idade"]) && !empty($_POST["altura"])) {
        $idade = $_POST["idade"];
        $altura = $_POST["altura"];

       
        if ($idade > 0 && $altura > 0) {
            echo "<p>Você tem $idade anos e mede $altura metros.</p>";
        } else {
            echo "<p style='color:red;'>Por favor, informe valores válidos (maiores que zero).</p>";
        }
    }
    ?>
    
</body>
</html>