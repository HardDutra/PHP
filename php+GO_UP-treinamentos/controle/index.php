<?php
   //informação do pedido 
  $NomeProduto = "Camisa básica";
  $ValorUnitario = 59.99;
  $QuantidadePedido = 5;
  $ValorRetirada = $ValorUnitario * $QuantidadePedido;
  
  //informações do frete 
  $EstadoFrete = "SP";
   
  if($EstadoFrete == "SP"){
     $TaxaEstado = 0.13;
  }

  else{
    $TaxaEstado = 0.16;
  }
  $ValorEntrega = $TaxaEstado + $ValorRetirada;
   $PrecoFrete = $ValorRetirada * $TaxaEstado;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detalhes do Produto</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center text-white">CONFIRMAÇÃO E INFORMAÇÕES DO PEDIDO</h1>
            </div>
            <div class="card-body">
                <?php
                 echo "<p>Nome do Produto: $NomeProduto</p>";

                echo "<p>Valor unitário: R$$ValorUnitario</p>";

                    if($QuantidadePedido > 1 ){
                       echo "<p>Quantidade do pedido: $QuantidadePedido unidades.</p>"; 
                    }
                    else{
                        echo "<p>Quantidade do pedido: $QuantidadePedido unidades.</p>";
                    }
                
                echo "<hr>";
                echo "<p class='font-semibold'>Valor do pedido para retirada: R$$ValorRetirada</p>";
                echo "<hr>";
                echo "<p>Valor do frete: R$$PrecoFrete";
                echo "<hr>";
                echo "<p class='font-semibold'>Valor do pedido com frete: R$$ValorEntrega</p>";
                ?>
                
            </div>

            <div class="card-footer text-center text-sm text-slate-500">
                <small>Sistema e Pedido Fictício</small>
            </div>
        </div>
    </div>
</body>
</html>