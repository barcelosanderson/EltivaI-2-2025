<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="banner">
        <video autoplay muted loop>
            <source src="noite.mp4" type="video/mp4">
        </video>
    </div>
    <div class="p-5 d-flex flex-column align-items-center vh-100">
        <div class="caixa">
            <h1 style="color:white">Exercício 2</h1>
            <div class="m-5 flex-column align-items-center">
                <form method="post">
                    <div class="mb-3">
                        <label for="valor1" class="form-label" style="color:white">Insira o 1° número: </label>
                        <input type="number" id="valor1" name="valor1" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label for="valor2" class="form-label" style="color:white">Insira o 2° número: </label>
                        <input type="number" id="valor2" name="valor2" class="form-control" required="">
                    </div>
                    <div class="d-flex justify-content-center align-center">
                        <button type="submit" class="btn btn-dark">Enviar</button>
                    </div>
                </form>
                <div class="mt-5 d-flex flex-column align-items-center gap-2" style="color:white">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $valor1 = $_POST["valor1"];
                        $valor2 = $_POST["valor2"];
                        $soma = $valor1 + $valor2;

                        if ($valor1 == $valor2) {
                            $resultado = $soma * 3;
                            echo "<p>Valores iguais. O triplo da soma é: $resultado.</p>";
                        } else {
                            echo "<p>Soma dos valores é: $soma.</p>";
                        }
                    }

                    ?>
                </div>
            </div>
        </div>

        <?php include "rodape.php"; ?>
    </div>
</body>

</html>