<?php
include "cabecalho.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
?>
<div class="container">
<h2>Olá <?php echo $nome?>, sua mensagem abaixo foi enviada com sucesso!<br>
Em breve retornaremos com uma resposta para o email <em><?php echo $email?></em></h2>
<p><strong>Mensagem enviada:</strong><br><?php echo $mensagem ?></p>
</div>
<?php include "rodape.php"; ?>