<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="banner">
        <video autoplay muted loop>
            <source src="cidade.mp4" type="video/mp4">
        </video>
    </div>
    <div class="p-5">
        <div class="caixa">
            <h1 style="color:white">Exercício 1</h1>
            <div class="m-5 flex-column align-items-center">
                <form method="post">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <div class="mb-3">
                            <label for="nome<?= $i ?>" class="form-label" style="color:white">Nome do Contato: <?= $i ?>:</label>
                            <input type="text" id="nome<?= $i ?>" name="nomes[]" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefone<?= $i ?>" class="form-label" style="color:white">Telefone do Contato: <?= $i ?>:</label>
                            <input type="text" id="telefone<?= $i ?>" name="telefones[]" class="form-control" required>
                        </div>
                        <hr style="border-color: white;">
                    <?php endfor; ?>
                    <div class="d-flex justify-content-center align-center">
                        <button type="submit" class="btn btn-dark">Cadastrar Contatos</button>
                    </div>
                </form>
                <div class="mt-5 d-flex flex-column align-items-center gap-2" style="color:white">

                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $nomes = $_POST['nomes'];
                        $telefones = $_POST['telefones'];

                        $contatos = [];
                        $erros = [];

                        for ($i = 0; $i < 5; $i++) {
                            $nome = trim($nomes[$i]);
                            $telefone = trim($telefones[$i]);

                            if (array_key_exists($nome, $contatos)) {
                                $erros[] = "Nome '$nome' já existe! Contato não adicionado.";
                                continue;
                            }

                            if (in_array($telefone, $contatos)) {
                                $erros[] = "Telefone '$telefone' já existe! Contato não adicionado.";
                                continue;
                            }

                            $contatos[$nome] = $telefone;
                        }

                        ksort($contatos);

                        if (!empty($erros)) {
                            echo "<div class='alert alert-danger w-100'>";
                            echo "<h5>Erros encontrados:</h5>";
                            foreach ($erros as $erro) {
                                echo "<p class='mb-1'>• $erro</p>";
                            }
                            echo "</div>";
                        }

                        if (!empty($contatos)) {
                            echo "<h4 class='text-center' style='color:white'>Contatos Cadastrados (Ordenados por Nome):</h4>";
                            echo "<table class='table table-dark table-striped w-100' style='color:white'>";
                            echo "<thead><tr><th style='color:white'>Nome</th><th style='color:white'>Telefone</th></tr></thead>";
                            echo "<tbody>";

                            foreach ($contatos as $nome => $telefone) {
                                echo "<tr><td style='color:white'>$nome</td><td style='color:white'>$telefone</td></tr>";
                            }

                            echo "</tbody></table>";
                        } else {
                            echo "<p>Nenhum contato foi cadastrado devido a conflitos.</p>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include "rodape.php"; ?>

</html>