<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($senha == 123){
    echo "Senha correta, pode entrar";
    header("Location: liberado.php");
}else{
    echo "Acesso bloqueado";
    header("Location: negado.php");
}

?>