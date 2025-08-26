<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Calculando juros simples com o Anderson</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
<style>

.banner video {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: -1;
}
</style>
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class="banner">
        <video autoplay muted loop>
            <source src="testando.mp4" type="video/mp4">
        </video>
    </div>
    <div class="p-5 d-flex flex-column align-items-center vh-100">  
        <div class="p-5 rounded shadow" style="background: #0000009c">
            <h1 style="color: white">Exercício 17 - Cálculo de juros simples </h1>
            <form method="post">
                <div class="mb-3">
                    <label for="valor1" class="form-label" style="color:white ">Insira o capital: </label>
                    <input type="number" id="valor1" name="valor1" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="valor2" class="form-label" style="color:white ">Insira a taxa de juros: </label>
                    <input type="number" id="valor2" name="valor2" class="form-control" required="" step="any">
                </div>
                <div class="mb-3">
                    <label for="valor3" class="form-label" style="color:white ">Insira o período (meses): </label>
                    <input type="number" id="valor3" name="valor3" class="form-control" required="" step="any">
                </div>
                 <div class="d-flex justify-content-center align-center">
                    <button type="submit" class="btn btn-dark">Calcular</button>
                </div>
            </form>

            <div class="mt-5 d-flex flex-column align-items-center gap-2">
        
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                    $valor1 = $_POST["valor1"];
                    $valor2 = $_POST["valor2"];
                    $valor3 = $_POST["valor3"];
                    $jurossimples = $valor1 * ($valor2 / 100) * $valor3;
                    $montante = $jurossimples + $valor1;
                    $simples_formatado = number_format($jurossimples, 2, ',', '.');
                    $montante_formatado = number_format($montante, 2, ',', '.');
                    echo "<h1 style=color:white>Juros : R$ $simples_formatado</h1>";
                    echo "<h1 style=color:white>Montante: R$ $montante_formatado</h1>";
                    //- * --> multiplicação | ** --> potenciação | / --> divisão | % --> divisão sem resto
                }
            ?>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>
</html>