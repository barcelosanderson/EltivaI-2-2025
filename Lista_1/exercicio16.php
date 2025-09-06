<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculando desconto com o Anderson</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include "navbar.php"; ?>

    <div class="banner">
        <video autoplay muted loop>
            <source src="testando.mp4" type="video/mp4">
        </video>
    </div>
    <div class="p-5 d-flex flex-column align-items-center vh-100">
        <div class="caixa">
            <h1 style="color: white">Exercício 16 - Cálculo de desconto </h1>
            <form method="post">
                <div class="mb-3">
                    <label for="valor1" class="form-label" style="color:white ">Insira o preço: </label>
                    <input type="number" id="valor1" name="valor1" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="valor2" class="form-label" style="color:white ">Insira o percentual de desconto: </label>
                    <input type="number" id="valor2" name="valor2" class="form-control" required="" step="any">
                </div>
                <div class="d-flex justify-content-center align-center">
                    <button type="submit" class="btn btn-dark">Calcular</button>
                </div>
            </form>

            <div class="mt-5 d-flex flex-column align-items-center gap-2" style="color:white">


                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $valor1 = $_POST["valor1"];
                    $valor2 = $_POST["valor2"];
                    $percent = $valor1 - ($valor1 * $valor2 / 100);
                    $percent_formatado = number_format($percent, 2, ',', '.');
                    echo "<h1 style=color:white>Valor com desconto: R$ $percent_formatado </h1>";
                    //- * --> multiplicação | ** --> potenciação | / --> divisão | % --> divisão sem resto
                }
                ?>
            </div>
        </div>
    </div>

    <?php include "rodape.php"; ?>

</body>

</html>