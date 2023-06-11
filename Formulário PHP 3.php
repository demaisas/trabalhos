<!DOCTYPE html>
<html>
<head>
    <title>Formulário 3</title>
</head>
<body>
    <form method="POST" action="">
        <label for="fruta">Escolha uma fruta:</label>
        <select id="fruta" name="fruta">
            <option value="maca">Maçã</option>
            <option value="banana">Banana</option>
            <option value="laranja">Laranja</option>
        </select>
        <br>
        <input type="submit" value="Exibir opção selecionada">
    </form>
</body>
</html>

<?php
     $opcao = $_POST["fruta"];
      echo "A opção selecionada é: $opcao";
?>