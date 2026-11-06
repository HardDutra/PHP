<?php
// numeros que será usado no HTML
 $numero01 = 30;
 $numero02 = 7;
 //atribuição cada operação a uma variável própria 
 $soma = $numero01 + $numero02;
 $subtracao = $numero01 - $numero02;
 $multiplicacao = $numero01 * $numero02;
 $divisao = $numero01 / $numero02;
 $resto = $numero01 % $numero02;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exemplo de Operadores em PHP</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Exemplo de Operadores em PHP</h1>
            </div>
            <div class="card-body">
                    <h3>Operadores Aritméticos:</h3>

                            <p>Soma: <?php echo "<span> $numero01 + $numero02 </span>" ?> 
                                <span class='resultado'>Resultado da soma: 
                                    <?php echo $soma?>
                            </span>
                        </p>

                        <p>Subtração: <?php echo "<span> $numero01 - $numero02 </span>" ?> 
                            <span class='resultado'>Resultado da subtração:
                                <?php echo $subtracao ?>
                            </span>
                        </p>

                                <p><?php echo "<span> $numero01 * $numero02 </span>" ?> 
                                    <span class='resultado'>Resultado da multiplicação:
                                        <?php echo $multiplicacao?>
                                    </span>
                                </p>

                        <p>
                            <?php echo "<span> $numero01 / $numero02 </span>" ?> 
                            <span class='resultado'>Resultado da divisão:
                                <?php echo $divisao ?>     
                         </span>
                      </p>

                <p>Resto da Divisão: 
                        <?php echo "<span> $numero01 % $numero02 </span>" ?> 
                    <span class='resultado'>Resto da divisão:
                         <?php echo $resto ?>
                    </span>
                </p>
            </div>
            <div class="card-footer text-muted text-center">
                Exemplo desenvolvido por: 
            </div>
        </div>
    </div>
</body>
</html>