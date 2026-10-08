```php
<?php

use App\Servidor;

include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");
include("../includes/rodape.php");

$servidores = Servidor::listar();

?>

<main class="container">

    <h2 class="text-center">Lista de Servidores</h2>

    <br>

    <a href="/reserva/view/servidor/cadastrar.php" class="btn btn-success btn-sm">
        Cadastrar
    </a>

    <br><br>

    <table class="table table-hover table-sm">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Matrícula</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Data Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($servidores as $servidor): ?>

                <tr>

                    <td><?= $servidor->id ?></td>
                    <td><?= $servidor->nome ?></td>
                    <td><?= $servidor->matricula ?></td>
                    <td><?= $servidor->cpf ?></td>
                    <td><?= $servidor->telefone ?></td>
                    <td><?= $servidor->email ?></td>
                    <td><?= $servidor->endereco ?></td>
                    <td><?= $servidor->dtn ?></td>

                    <td class="text-nowrap">

                        <a
                            href="/reserva/view/servidor/editar.php?id=<?= $servidor->id ?>"
                            class="btn btn-primary btn-sm"
                        >
                            Editar
                        </a>

                        <a
                            href="/reserva/action/action_servidor.php?action=excluir&id=<?= $servidor->id ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Deseja realmente excluir este servidor?');"
                        >
                            Excluir
                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</main>
```
