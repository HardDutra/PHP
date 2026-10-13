<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Positivo, negativo ou zero</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            width: 100%;
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            font-family: Arial, sans-serif;
            background-color: #f2f4f7;
        }

        .box-principal {
            width: 400px;
            padding: 35px;

            background-color: white;

            border: 1px solid #ddd;
            border-radius: 15px;

            text-align: center;

            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
        }

        h1 {
            margin-top: 0;
            margin-bottom: 25px;

            color: #333;
        }

        .descricao {
            color: #666;
            margin-bottom: 25px;
        }

        input {
            width: 100%;
            height: 55px;

            padding: 10px;

            font-size: 22px;
            text-align: center;

            border: 2px solid #ccc;
            border-radius: 8px;

            outline: none;
        }

        input:focus {
            border-color: #555;
        }

        button {
            width: 100%;
            height: 50px;

            margin-top: 15px;

            border: none;
            border-radius: 8px;

            background-color: #333;
            color: white;

            font-size: 17px;
            font-weight: bold;

            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        .resultado {
            margin-top: 25px;
            padding: 20px;

            border-radius: 8px;

            background-color: #f1f1f1;

            font-size: 20px;
            font-weight: bold;
        }

    </style>

</head>

<body>

    <div class="box-principal">

        <h1>Positivo, negativo ou zero</h1>

        <p class="descricao">
            Digite um número para descobrir sua classificação.
        </p>

        <form action="" method="post">

            <input 
                type="number" 
                name="numero_exe"
                placeholder="Digite um número"
            >

            <button type="submit">
                Verificar
            </button>

        </form>

        <?php

            if(isset($_POST['numero_exe'])) {

                $numero_exe = $_POST['numero_exe'];

                echo '<div class="resultado">';

                if($numero_exe < 0) {
                    echo 'Esse número é: NEGATIVO';
                }

                else if($numero_exe > 0) {
                    echo 'Esse número é: POSITIVO';
                }

                else {
                    echo 'Esse número é: ZERO';
                }

                echo '</div>';
            }

        ?>

    </div>

</body>

</html>