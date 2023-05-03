<?php
$email = $_POST["email"];
$senha = $_POST["senha"];

$servidor_bd = "127.0.0.1";
$usuario_bd = "root";
$senha_bd = "";
$banco_de_dados = "delivery_jogos_novo";

$conexao = mysqli_connect($servidor_bd, $usuario_bd, $senha_bd, $banco_de_dados);

$sql_buscar_usuario = "select * from usuario where email = '$email' and senha = '$senha'";

$um_usuario = mysqli_query($conexao, $sql_buscar_usuario);

if ($um_usuario->num_rows > 0){
    header("location:painel.php");
}else{
    header("location:index.php?msg=erro");
}

mysqli_close($conexao);
?>