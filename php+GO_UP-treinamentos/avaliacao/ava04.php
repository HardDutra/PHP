<?php
$ValorInicial = 100;
$ValorAlvo = 300;
$Incremento = 50;
$Iteracoes = 0;

while ($ValorInicial < $ValorAlvo) {
    $ValorInicial += $Incremento;
    $Iteracoes++;
}

echo "Número de iterações necessárias: $Iteracoes."; echo"</br>";
echo "Valor Final: $ValorInicial.";