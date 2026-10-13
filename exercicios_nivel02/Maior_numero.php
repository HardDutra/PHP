<?php
   if(isset($_POST['numero_var1']) && isset($_POST['numero_var2'])){
     $numero_var1 = $_POST['numero_var1'];
     $numero_var2 = $_POST['numero_var2'];
   }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior Número</title>
</head>
<style>
     body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }
     .container {
        background-color: white;
        padding: 30px;
        border-radius: 12px;
        width: 500px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }
       input {
        width: 100%;
        box-sizing: border-box;
        padding: 18px;
        font-size: 24px;
        text-align: center;
        border: 2px solid #ccc;
        border-radius: 8px;
    }

    input:focus {
        border-color: #333;
        outline: none;
    }

    button {
        margin-top: 20px;
        padding: 14px 30px;
        font-size: 18px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        background-color: #333;
        color: white;
    }

    button:hover {
        background-color: #555;
    }

    .resultado {
        margin-top: 25px;
        padding: 20px;
        min-height: 60px;
        border: 2px solid #ccc;
        border-radius: 8px;
        background-color: #f8f8f8;
        font-size: 18px;
    }
</style>
</style>
<body>

    <div class="container">

        <h1>Maior Número</h1>

        <form method="post">

            <div class="numeros">
                <input type="number" name="numero_var1" placeholder="Número 1">
                <input type="number" name="numero_var2" placeholder="Número 2">
            </div>

            <button type="submit">Comparar</button>

        </form>

        <div class="resultado">

            <?php
            

                    if($numero_var1 > $numero_var2){
                        echo "O maior número é: $numero_var1";
                        echo"</br>";
                        echo "O menor número é: $numero_var2";
                    }
                    else if($numero_var1 < $numero_var2){
                        echo "O maior número é: $numero_var2"; 
                        echo"</br>";
                        echo "O menor número é: $numero_var1";
                    }
                    else {
                        echo "Os números são iguais.";
                    }
                
            ?>

        </div>

    </div>

</body>
</html>