
<!DOCTYPE html>
<html>
<head>
    <title>Formulário 1</title>
</head>
<body>

<form method="POST" action="">
    <input type="text" name="texto">
    <input type="submit" value="Enviar">
</form>
</body>
</html>

<?php

    function exibirConteudo() {
        if (isset($_POST['texto'])) {
            $conteudo = $_POST['texto'];
            echo "Conteúdo inserido: " . $conteudo;
        }
    }

    exibirConteudo();

?>
