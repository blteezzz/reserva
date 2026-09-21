<?php
include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");
include("../includes/rodape.php");
?>
<main class="container">
    <form method="POST" action="/reserva/action/action_item.php?action=cadastrar">
        Nome * : <input name="nome" type="text" class="form-control" required >
        Descrição  : <input name="descricao" type="text" class="form-control">
        Patrimônio * : <input name="patrimonio" type="text" class="form-control" required>
        <input type="submit" value="Cadastrar" class="bnt bnt-primary">
    </form>
</main>