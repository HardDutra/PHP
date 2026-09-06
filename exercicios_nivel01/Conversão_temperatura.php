<?php
   $conversao = '';

   if(isset($_POST['temperatura'])){
        $conversao = $_POST['temperatura'] * 1.8 + 32;
   }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Temperatura</title>
</head>
<body>
        <form method = "post">
            <input type="number" name = "temperatura" placeholder = "temperatura em ºC">
            <button type = "submit">Converter</button>
        </form>
        <?php
          echo "Conversão: $conversao ºF";
        ?>
</body>
</html>