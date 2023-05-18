<?php
include "cabecalho.php";
include "menu-sistema.php";
?>
<div class="container">
    <div class="row">
        <div class="col text-center mt-3 mb-3">
            <h1>Lista de Jogos</h1>
            <table class="table table-striped table-hover">
                <tr>
                    <td>Código</td>
                    <td>Título</td>
                    <td>Categoria</td>
                    <td>Ações</td>
                </tr>
                <?php
                include "conexao.php";
                $sql_buscar = "select * from jogo";
                $todos_os_jogos = mysqli_query($conexao, $sql_buscar);
                while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
                ?>
                    <tr>
                        <td><?php echo $um_jogo["id"]; ?></td>
                        <td><?php echo $um_jogo["titulo"]; ?></td>
                        <td><?php echo $um_jogo["categoria"]; ?></td>
                        <td>
                            <a href="excluir-jogos.php?id=<?php echo $um_jogo["id"]; ?>">
                                <img src=" img/lixo.png" width="25">
                            </a>
                            <a href="ver-jogo.php?id=<?php echo $um_jogo["id"]; ?>">
                                <img src=" img/ver.png" width="25">
                            </a>
                            <a href="editar-jogo.php?id=<?php echo $um_jogo["id"]; ?>">
                                <img src=" img/editar.png" width="20">
                            </a>
                        </td>
                    </tr>
                <?php
                endwhile;
                mysqli_close($conexao);
                ?>
            </table>
        </div>
    </div>
</div>