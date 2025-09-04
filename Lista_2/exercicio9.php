<?php

    include("navbar.php");
    
?>

<form method="post">
    <div class="mb-3">
    <label for="numero" class="form-label">Insira o número: </label>
    <input type="number" id="numero" name="numero" class="form-control" required="">
</div>
<div class="d-flex justify-content-center align-center">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $numero = $_POST['numero'];
        $fatorial = $numero;
        for($i=$numero-1;$i>1;$i--){
            $fatorial = $fatorial * $i;
        }
        echo "O fatorial de $numero é: $fatorial";
    }
?>
<?php

    include("rodape.php");

?>