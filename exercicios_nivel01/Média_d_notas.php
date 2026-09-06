<?php
  $media_notas = ($_POST['nota1'] + $_POST['nota2'] + $_POST['nota3']) / 3;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de notas</title>
</head>
<body>
      <div class = "container">
        <form method = "post">
             <input type = "number" name = "nota1">  
             <input type = "number" name = "nota2">
             <input type = "number" name = "nota3">
             <button type = "submit"> Calcular</button>
        </form>
           <?php
              echo "<span> A média do aluno é : $media_notas</span>";
           ?>

      </div>
</body>
</html>