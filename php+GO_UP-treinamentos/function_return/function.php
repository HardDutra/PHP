<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function e Return</title>
</head>
<body>
    <?php
     function novosalario($salario, $aumento){
        return $salario + $aumento;
     } 
     function novafunction($variavelfunction , $novavariavelfunctio){
        return $variavelfunction . $novavariavelfunctio;
     }
    ?>
    <h1><?php echo "novo salario é R$" . novosalario(1800 , 2500); ?></h1>
    <h2><?php echo novafunction("dados da primeira variavel " , "e dados da segunda variavel");?></h2>
    
</body>
</html>