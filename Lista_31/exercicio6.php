<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="banner">
        <video autoplay muted loop>
            <source src="oceano1.mp4" type="video/mp4">
        </video>
    </div>
    <div class="p-5">
        <div class="caixa">
            <h1 style="color:white">Exercício 6</h1>
            <div class="m-5 flex-column align-items-center">
                <form method="post">
                    <div class="mb-3">
                        <label for="valor" class="form-label" style="color:white">Digite um número: </label>
                        <input type="number" step="0.01" id="valor" name="valor" class="form-control" required="">
                    </div>
                    <div class="d-flex justify-content-center align-center">
                        <button type="submit" class="btn btn-dark">Enviar</button>
                    </div>
                </form>
                <div class="mt-5 d-flex flex-column align-items-center gap-2" style="color:white">

                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $valor = $_POST['valor'];
                        $arredondado = round($valor);
                        echo "<p>Número arredondado: $arredondado</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include "rodape.php"; ?>

</html>