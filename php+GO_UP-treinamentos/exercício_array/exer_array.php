<?php
        $ano_carros = array(
             array(
                 "modelo" => "Onix",
                 "marca" => "Chevrolet",
                 "ano" => 2019,
             ),
             array(
                 "modelo" => "Argo",
                 "marca" => "Fiat",
                 "ano" => 2020,
             ),
             array(
                 "modelo" => "Cruze",
                 "marca" => "Chevrolet",
                 "ano" => 2023,
             ),
             array(
                "modelo" => "Cronos",
                "marca" =>  "Chevrolet",
                 "ano" =>   2024,
             )
        );
        
      ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Array</title>
</head>
<body>
      <?php
          $ano_carros = [
             array(
                 "modelo" => "Onix",
                 "marca" => "Chevrolet",
                 "ano" => 2019,
             ),
             array(
                 "modelo" => "Argo",
                 "marca" => "Fiat",
                 "ano" => 2020,
             ),
             array(
                 "modelo" => "Cruze",
                 "marca" => "Chevrolet",
                 "ano" => 2023,
             ),
             array(
                "modelo" => "Cronos",
                "marca" =>  "Chevrolet",
                 "ano" =>   2024,
             )
        ];
        foreach($ano_carros as $new_listCar){
            echo $new_listCar["modelo"] . " - (" .$new_listCar["ano"] . ") - " . $new_listCar["marca"]; echo"</br>";
        }
        echo"</br>";
        echo $ano_carros[0]["modelo"] . " - (" . $ano_carros[0]["ano"] . ") - " . $ano_carros[0]["marca"]; echo"</br>";
        echo $ano_carros[1]["modelo"] . " - (" . $ano_carros[1]["ano"] . ")  - " .  $ano_carros[1]["marca"];    echo"</br>"; 
        echo $ano_carros[2]["modelo"] . " - (" . $ano_carros[2]["ano"] . ") -  ". $ano_carros[2]["marca"];   echo"</br>";
        echo $ano_carros[3]["modelo"] . " - (" . $ano_carros[3]["ano"] . ") -  ". $ano_carros[3]["marca"];   echo"</br>";
      ?>
</body>
</html>