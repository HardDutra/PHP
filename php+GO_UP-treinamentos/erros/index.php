<?php
 
  // função para dividir dois números:
  function dividir($numerador, $denominador){
   if($denominador == 0 ){
     //lançando uma exceção se o denominador for zero
     throw new Exception("Divisão por zero não é permitida.");
   }
   //se o denominador for válido (diferente de zero), realiza a divisão 
   return $numerador / $denominador;
  }


  try{
     // tentando dividir 10 por 0, o que causará uma exceção 
     echo dividir (10, 0);
  }catch (Exception $erro){
    echo "Erro: " .  $erro->getMessage();
  }
 
?>
