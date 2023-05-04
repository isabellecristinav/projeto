<?php
include "cabecalho.php";
include "menu.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar novo usuário</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="post" action="salvar-usuario.php">
                <input name="nome" required placeholder="Nome"><br>
                <input type="email" name="email" required placeholder="Email"><br>
                <input type="password" name="senha" required placeholder="Senha"><br>
                <button type="submit" class="btn btn-success">Salvar Usuário</button>
            </form>
        </div>
    </div>
</div>