<?php
  $numero01 = 8;
  $numero02 = 3;

  $soma_resul =  $numero01 + $numero02;
  $subtracao_resul = $numero01 - $numero02;
  $multiplicacao_resul = $numero01 * $numero02;
  $divisao_resul = $numero01 / $numero02;
  $resto_resul = $numero01 % $numero02;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Básica</title>
</head>
  <style>
     li{
        margin:10px  0px;
     }
  </style>
<body>
      <h1> Calculadora Básica</h1>
       <?php
           echo "<ol>
                    <li> A soma de $numero01 e $numero02 é $soma_resul</li>
                    <li> A subtração de $numero01 e $numero02 é $subtracao_resul</li>
                    <li> A multiplicação de $numero01 e $numero02 é $multiplicacao_resul</li>
                    <li> A divisão de $numero01 e $numero02 é $divisao_resul</li>
                    <li> O resto da divisão de $numero01 e $numero02 é $resto_resul</li>
                 </ol>";
       ?>
</body>
</html>