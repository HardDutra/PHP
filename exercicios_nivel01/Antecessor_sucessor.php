<?php
  $numero = $_POST['numero'];
   $antecessor = $numero - 1;
   $sucessor = $numero + 1;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e sucessor</title>
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
            background: #f1f5f9;
        }

        form {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        input {
            padding: 10px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 16px;
            outline: none;
        }

        input:focus {
            border-color: #2563eb;
        }

        button {
            padding: 10px 18px;
            margin-left: 5px;
            border: none;
            border-radius: 6px;
            background: #2563eb;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        span {
            display: block;
            margin-top: 20px;
            padding: 15px;
            background: white;
            border-radius: 8px;
            color: #334155;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
    </style>
<body>
    <div class="container">
        <form method="post"> 
        <input type="number" name= "numero">
        <button type = "submit">Enviar</button>
        </form>
        <?php
            echo "<span> O antecessor de $numero é $antecessor e o sucessor é $sucessor</span>";
        ?>
     </div>
</body>
</html>