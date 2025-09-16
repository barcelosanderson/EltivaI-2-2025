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
            <h1 style="color:white">Exercício 1</h1>
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
                    <div class="mb-3">
                        <label for="valor3" class="form-label" style="color:white">Insira o 3° número: </label>
                        <input type="number" id="valor3" name="valor3" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label for="valor4" class="form-label" style="color:white">Insira o 4° número: </label>
                        <input type="number" id="valor4" name="valor4" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label for="valor5" class="form-label" style="color:white">Insira o 5° número: </label>
                        <input type="number" id="valor5" name="valor5" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label for="valor6" class="form-label" style="color:white">Insira o 6° número: </label>
                        <input type="number" id="valor6" name="valor6" class="form-control" required="">
                    </div>
                    <div class="mb-3">
                        <label for="valor7" class="form-label" style="color:white">Insira o 7° número: </label>
                        <input type="number" id="valor7" name="valor7" class="form-control" required="">
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
                        $valor3 = $_POST["valor3"];
                        $valor4 = $_POST["valor4"];
                        $valor5 = $_POST["valor5"];
                        $valor6 = $_POST["valor6"];
                        $valor7 = $_POST["valor7"];
                        $valores = [$valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7];
                        $menor = $valores[0];
                        $posicao = 1;
                        for ($i = 1; $i < count($valores); $i++) {
                            if ($valores[$i] < $menor) {
                                $menor = $valores[$i];
                                $posicao = $i + 1;
                            }
                        }
                        echo "<p>O menor valor é: $menor</p>";
                        echo "<p>Ele está na $posicao ª posição</p>";
                    }

                    ?>
                </div>
            </div>
        </div>

        <?php include "rodape.php"; ?>
    </div>
</body>

</html>