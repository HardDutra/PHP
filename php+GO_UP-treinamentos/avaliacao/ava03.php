<?php
$IDADE = 17;
if($IDADE < 18){
    echo "Você é menor de idade!";
}
elseif($IDADE >= 18 && $IDADE <= 59){
    echo "Você é adulto!";
}
else{
   echo "Você já é um idoso!";
}
?>