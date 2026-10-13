<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ímpar ou Par</title>
</head>
  <style>
    * {
    box-sizing: border-box;
}
body {
    margin: 0;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
    background: #f2f4f7;
}
.container {
    width: 400px;
    padding: 35px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
    text-align: center;
}
h1 {
    margin-top: 0;
    color: #222;
}
p {
    color: #666;
    margin-bottom: 25px;
}
form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}
input {
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 16px;
    outline: none;
}
input:focus {
    border-color: #555;
}
button {
    padding: 12px;
    border: none;
    border-radius: 8px;
    background: #222;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: 0.2s;
}
button:hover {
    background: #444;
}
.resultado {
    margin-top: 10px;
    padding: 12px;
    border-radius: 8px;
    font-weight: bold;
}
.par {
    background: #e8f5e9;
    color: #2e7d32;
}
.impar {
    background: #fff3e0;
    color: #ef6c00;
}
  </style>
<body>

    <div class="container">
        <h1>Ímpar ou Par</h1>
        <p>Digite um número para verificar:</p>
        <form method="post">
            <input type="number" name="numero">
            <button type="submit">Verificar</button>

            <?php
                        //verifica se foi enviado algo à POST   //is_numeric verifica se o poste é numero
                if(isset($_POST['numero']) && is_numeric($_POST['numero'])){
                    $numero = (int)$_POST["numero"];
                    $verificacao = $numero % 2;

                    if($verificacao === 0){   //=== verifica o TIPO e o RESULTADO
                        echo "<div class='resultado par'>O número $numero é par</div>";
                    } 
                    else {
                        echo "<div class='resultado impar'>O número $numero é ímpar</div>";
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>