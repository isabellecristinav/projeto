<?php
$id = $_GET["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];


include "conexao.php";

$sql_editar_usuario = "update usuario set nome= '$nome', email='$email' where id = $id ";

    $um_usuario = mysqli_query($conexao, $sql_editar_usuario);
    mysqli_close($conexao);

    header("location:listar-usuarios.php?msg=sucesso");
?>