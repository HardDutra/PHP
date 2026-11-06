<?php $idade = 18; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>_</title>
</head>
<body>
      <h1>Condicional em PHP:</h1>
    <?php
      if($idade >= 18){
        echo "<p> Maior de idade </p>";
      }
    
      else{
       echo "<p>Menor de idade</p>";
      }
     
      
    ?>
</body>
</html>