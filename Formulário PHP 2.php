<!DOCTYPE html>
<html>
<head>
    <title>Formulário 2</title>
</head>
<body>   
    <form method="POST" action="">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

<?php
        
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $soma = $num1 + $num2;

        echo "A soma de $num1 e $num2 é: $soma";
?>