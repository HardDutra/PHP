<?php    // Array Indexado
    $produtos = array("MP3 Player","notebook","câmera");  

          // array associativos
    $carros = array(
       "modelo" => "Onix",
       "marca" => "Chevrolet", 
       "modelo0" => "fuca",
       "marca0" => "Volkswagen",      
    ); 

      // array multidimensinais
     $tecnologia = array(
      array( 
        "front01" => "Html5",
        "front02" => "CSS3",
        "front03" => "JavaScript",
        ),

       array(
         "back-end1" => "JAVA",
         "back-end2" => "PHP",
         "back-end3" =>  "RUBY",
       ),
     );
                //foreach
                    foreach($tecnologia as $listaTec){
                        echo $listaTec["front01"] . "<br>" . $listaTec["front02"] . "<br>" . $listaTec["front03"];
                        echo $listaTec["back-end1"]. "<br>" . $listaTec["back-end2"]. "<br>" .$listaTec["back-end3"];
                    };
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY PHP</title>
</head>
 <style>
     .cont-box{
        width: 100%;
        display:flex;
        justify-content:space-evenly;
     }
     .box-multidimensionais,.box-associativo,.box-indexado{
        border: 1px solid black;
        padding: 5px;
       
     }
     .box-foreach{
        width: auto;
        border: 1px solid black;
        padding: 5px;
        margin: 10px 0px;
     }
 </style>
    <body>
        <div class = "cont-box">
            <div class = "box-indexado">
                <h1>Array Indexado</h1>
            <?php 
                echo "<p> O conteudo do array: $produtos[0] </p>";
                echo "<p> O conteudo do array: $produtos[1] </p>";
                echo "<p> O conteudo do array: $produtos[2] </p>";
                ?>
            </div>

            <div class = "box-associativo">
                <h1>Array Associativos</h1>
                <?php
                echo "<p> O conteudo do array associativo nomeado: ". $carros["modelo"] ." </p>";
                echo "<p> O conteudo do array associativo nomeado: ". $carros["marca"] ." </p>";
                echo "<p> O conteudo do array associativo nomeado: ". $carros["modelo0"] ." </p>";
                echo "<p> O conteudo do array associativo nomeado: ". $carros["marca0"] ." </p>";
                    ?>
            </div>

            <div class = "box-multidimensionais">
                <h1>Array Multidimensionais</h1>
                <?php
                echo "<p>O conteudo do array multidimensionais no primeiro ARRAY: {$tecnologia["0"]["front01"]}</p>";
                echo "<p>O conteudo do array multidimensionais no primeiro ARRAY: {$tecnologia["0"]["front02"]}</p>";
                echo "<p>O conteudo do array multidimensionais no primeiro ARRAY: {$tecnologia["0"]["front03"]}</p>";
                echo "<p>O conteudo do array multidimensionais no segundo ARRAY: {$tecnologia["1"]["back-end1"]}</p>";
                echo "<p>O conteudo do array multidimensionais no segundo ARRAY: {$tecnologia["1"]["back-end2"]}</p>";
                echo "<p>O conteudo do array multidimensionais no segundo ARRAY: {$tecnologia["1"]["back-end3"]}</p>";
                ?>
            </div>
        </div>

        <div class = "box-foreach">
           
        </div>
    </body>
</html>