<?php
include "cabecalho.php";
include "menu-sistema.php";
?>
<div class="container">
    <div class="row">
        <div class="col text-center mt-3 mb-3">
            <h1>Lista de Usuário</h1>
            <table class="table table-striped table-hover">
                <tr>
                    <td>Código</td>
                    <td>Nome</td>
                    <td>E-mail</td>
                    <td>Ações</td>
                </tr>
                <?php
                include "conexao.php";
                $sql_buscar = "select * from usuario";
                $todos_os_usuarios = mysqli_query($conexao, $sql_buscar);
                while ($um_usuario = mysqli_fetch_assoc($todos_os_usuarios)) :
                ?>
                    <tr>
                        <td><?php echo $um_usuario["id"]; ?></td>
                        <td><?php echo $um_usuario["nome"]; ?></td>
                        <td><?php echo $um_usuario["email"]; ?></td>
                        <td><img src="img/lixo.png" width="25"></td>
                    </tr>
                <?php
                endwhile;
                mysqli_close($conexao);
                ?>
            </table>
        </div>
    </div>
</div>