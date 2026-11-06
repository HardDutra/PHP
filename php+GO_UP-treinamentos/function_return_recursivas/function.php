<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function e Return</title>
</head>
<body>
     <?php
        function calculofatorial($numero){
             
             if( $numero <= 1 ){ // se o numero for menor que 1 ;
                 return 1;      // irá retorna  1;
             }  else{   // se não, vai retorna o numero e multiplicar pelo os seus antecessores;
                  return $numero * calculofatorial($numero - 1);  // N * (N - 1);
             } 
        }
       ?>
       <h1>Resultado do Fatorial \/</h1>
        <h2>
             <?php  // é o numero multiplicado por os numeros antecessores.
                echo calculofatorial(5)
             ?>
        </h2>
</body>
</html>