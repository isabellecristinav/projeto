<?php
include "cabecalho.php";
include "menu-sistema.php";

$id = $_GET["id"];
$id = $nome = $email = "";
include "conexao.php";

$sql_buscar = "select * from usuario where id = id";
$todos_os_usuarios = mysqli_query($conexao, $sql_buscar);
while ($um_usuario = mysqli_fetch_assoc($todos_os_usuarios)) :
    $id = $um_usuario["id"];
    $nome = $um_usuario["nome"];
    $email = $um_usuario["email"];
endwhile;
mysqli_close($conexao);
?>

<div class="container">
    <div class="row">

        <div class="col-12">
            <h3>ID: <?php echo $id; ?> </h3>
            <p>Nome: <?php echo $nome; ?></p>
            <p>E-mail: <?php echo $email; ?></p>
        </div>
    </div>