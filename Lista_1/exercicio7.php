<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Convertendo com o Anderson</title>
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
    <div class="p-5 d-flex justify-content-center vh-100">
        <div class="p-5 rounded shadow" style="background: #0000009c">
            <h1 style="color: white">Exercício 6 - Conversão °F para °C</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="valor1" class="form-label" style="color:white ">Informe a temperatura em °F: </label>
                    <input type="number" id="valor1" name="valor1" class="form-control" required="">
                </div>
                 <div class="d-flex justify-content-center align-center">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
            </form>

            <div class="mt-5 d-flex justify-content-center align-center">
        
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                    $valor1 = $_POST["valor1"];
                    $conversao = ($valor1 -32) * 5/9;
                    echo "<h1>°F: $conversao </h1>";
                    //- * --> multiplicação | ** --> potenciação | / --> divisão | % --> divisão sem resto
                }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
    </div>
</body>
</html>