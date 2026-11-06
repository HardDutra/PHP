
<?php
  $VariavelString = "Quantos caracteres dentro dos parametros";
  
  //strtoupper
  $VariavelStringMinuscula = "texto minusculo para uso de strtoupper";
  $VariavelStringMinuscula = strtoupper($VariavelStringMinuscula);
  
  //strtolower
  $VariavelStringMaiuscula = "TEXTO MAIUSCULO PARA USO DE STRTOLOWER";
  $VariavelStringMaiuscula = strtolower($VariavelStringMaiuscula);
   
  //trim
  $VariavelEspaco = "         DIGITE       ";
  $VariavelEspaco = trim($VariavelEspaco);
  
  //Substr
  $VariavelParaSubstr = "12345-A função Subtr permite extrair 3 parâmentros.";
  $VariavelParaSubstr = substr($VariavelParaSubstr , 6 ,  48);

  //str_replace
  $VariavelParaReplace = "A função é útil para substituir uma parte específica de uma String."
?>


<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
  <body>
        <h1><?= $VariavelStringMinuscula?></h1>
        <h2><?= $VariavelStringMaiuscula?></h2>
        <p> <?= $VariavelParaSubstr?> </p>
        <p> <?= str_replace("String", "TEXTO",$VariavelParaReplace)?> </p>

      <?php
          echo strlen($VariavelParaSubstr);
          echo "</br>";
          echo strlen($VariavelEspaco );
          echo "</br>";
          echo strlen($VariavelString);
          echo "</br>";
          echo strlen($VariavelStringMinuscula);
          echo "</br>";
      ?>

      <input type="text"  value = "<?= $VariavelEspaco?>"></br>
      <button type ="submit">Enviar</button>
  </body>

</html>