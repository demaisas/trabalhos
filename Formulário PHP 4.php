<!DOCTYPE html>
<html>
<head>
    <title>Formulário PHP 4</title>
</head>
<body>

<form method="POST" action="">
        <label for="checkbox">Marcar/desmarcar:</label>
        <input type="checkbox" id="checkbox" name="checkbox">
        <br>
        <input type="submit" value="Verificar">
    </form>
</body>
</html>

<?php
        if (isset($_POST["checkbox"])) {
            echo "A caixa de seleção está marcada.";
        } else {
            echo "A caixa de seleção está desmarcada.";
        }
    ?>