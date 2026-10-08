<?php

include("../../vendor/autoload.php");
include("../includes/cabecalho.php");
include("../includes/menu.php");

?>

<main class="container">

    <h2 class="text-center">Cadastrar Servidor</h2>

    <br>

    <form
        action="/reserva/action/action_servidor.php?action=cadastrar"
        method="post"
    >

        <div class="mb-3">

            <label class="form-label">
                Nome:
            </label>

            <input
                type="text"
                name="nome"
                maxlength="50"
                required
                class="form-control"
            >

        </div>

        <div class="mb-3">

            <label class="form-label">
                Matrícula:
            </label>

            <input
                type="text"
                name="matricula"
                maxlength="20"
                required
                class="form-control"
            >

        </div>

        <div class="mb-3">

            <label class="form-label">
                CPF:
            </label>

            <input
                type="text"
                name="cpf"
                maxlength="14"
                required
                class="form-control"
            >

        </div>

        <div class="mb-3">

            <label class="form-label">
                Telefone:
            </label>

            <input
                type="text"
                name="telefone"
                maxlength="14"
                required
                class="form-control"
            >

        </div>

        <div class="mb-3">

            <label class="form-label">
                E-mail:
            </label>

            <input
                type="email"
                name="email"
                maxlength="50"
                required
                class="form-control"
            >

        </div>

        <div class="mb-3">

            <label class="form-label">
                Endereço:
            </label>

            <input
                type="text"
                name="endereco"
                maxlength="100"
                required
                class="form-control"
            >

        </div>

        <div class="mb-3">

            <label class="form-label">
                Data de Nascimento:
            </label>

            <input
                type="date"
                name="dtn"
                required
                class="form-control"
            >

        </div>

        <button
            type="submit"
            class="btn btn-primary"
        >
            Cadastrar
        </button>

        <a
            href="/reserva/view/servidor/listar.php"
            class="btn btn-secondary"
        >
            Voltar
        </a>

    </form>

</main>

<?php

include("../includes/rodape.php");

?>