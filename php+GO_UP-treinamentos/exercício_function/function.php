<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function e Return</title>
</head>
<body>
     <?php  //criei uma função             atribuir os valores no parâmetros.
        function calcularMedia($nota01, $nota02, $nota03, $nota04){//parâmetros.

               //criei uma variavel para fazer os calculos   
           $mediacalculo = ($nota01 + $nota02 + $nota03 + $nota04) /4;  
           return $mediacalculo;  // retorno a variavel do calculo
        }

         $alunoNota1 = 8; //atribuo  valores
         $alunoNota2 = 7; 
         $alunoNota3 = 10; 
         $alunoNota4 = 6;

                 //criei uma nova variavel para puxar a função já com os dados para calcular.
         $resultadoMedia = calcularMedia($alunoNota1, $alunoNota2, $alunoNota3, $alunoNota4);

         $aluno2Nota1 = 8; //atribuo  valores
         $aluno2Nota2 = 10; 
         $aluno2Nota3 = 10; 
         $aluno2Nota4 = 6;
         
         $resultadoMedia2 = calcularMedia($aluno2Nota1, $aluno2Nota2, $aluno2Nota3, $aluno2Nota4);

     ?>
     <p>
           <?php
             echo " A média do aluno foi: $resultadoMedia";
             echo "</br>";
              echo " A média do aluno foi: $resultadoMedia2";

           ?>
     </p>
</body>
</html>