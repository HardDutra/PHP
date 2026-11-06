      
    <?php
        $user = "Carlos"; //variável do tipo string
        $curso = "PHP BASICO"; //variável do tipo string

        $idade = 25;  //variável do tipo inteiro
        $valor = 10;
        $mensalidade = 200.50; //variável do tipo float ou double
        $mensalidade_paga = true;  
         
        ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     li{
        margin:10px 0px;
     }
</style>
<body>
    
      <h1>Olá <?php echo $user ?>.</h1>
        <h2>Você está matriculado no curso <?php echo $curso ?>, sua mensalidade é de R$ <?php echo $mensalidade ?></h2>
          <h3> Sua mensalidade é de : R$ <?php echo $mensalidade?> e você ainda tem <?php echo $valor?> restantes.</h3>

            <ol>
                <li>Usuario: <?php echo $user ?> </li>
                <li>Idade: <?php echo $idade ?> </li>
                <li>Valor: <?php echo $mensalidade ?></li> 
            </ol>
        
</body>
</html>