<?php
  // Diretório de destino dos arquivos
  $folder = "uploads";
  
  $mensagem = "";
  $arquivoEnviado = false;

  
  if(isset($_FILES["objetoArquivo"]) && $_FILES["objetoArquivo"]["error"] == 0) {
     
      if(move_uploaded_file($_FILES["objetoArquivo"]["tmp_name"],$folder)){
        $folder = $folder . "/" . basename($_FILES["objetoArquivo"]["name"]);
        $mensagem = $folder;
        $arquivoEnviado = true;
      } else{
         echo "Ocorreu um erro ao enviar o arquivo.";
      }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #f3f4f6;
            color: #1f2937;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .upload-container {
            background: #ffffff;
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 440px;
            text-align: center;
        }

        h2 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 0.5rem;
        }

        p.subtitle {
            font-size: 0.875rem;
            color: #6b7280;
            margin-bottom: 1.5rem;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        input[type="file"] {
            border: 2px dashed #d1d5db;
            padding: 1.5rem 1rem;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;
            background-color: #f9fafb;
            color: #4b5563;
            transition: all 0.2s ease;
        }

        input[type="file"]:hover {
            border-color: #6366f1;
            background-color: #fdfdff;
        }

        input[type="submit"] {
            background-color: #6366f1;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.1s ease;
        }

        input[type="submit"]:hover {
            background-color: #4f46e5;
        }

        input[type="submit"]:active {
            transform: scale(0.98);
        }

        /* --- NOVO STYLE PARA O RESULTADO DA VARIÁVEL $FOLDER --- */
        .result-box {
            margin-top: 1.75rem;
            background-color: #ecfdf5; /* Fundo verde bem suave */
            border: 1px solid #a7f3d0; /* Borda verde clara */
            border-radius: 10px;
            padding: 1.25rem;
            text-align: left;
            animation: fadeIn 0.3s ease-in-out;
        }

        .result-title {
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #065f46; /* Tom de verde escuro */
            margin-bottom: 0.35rem;
            display: flex;
            align-items: center;
            gap: 0.35rem;
        }

        .result-path {
            font-family: monospace; /* Fonte monoespaciada destaca caminhos de diretórios */
            font-size: 0.875rem;
            color: #047857;
            background-color: #d1fae5;
            padding: 0.5rem 0.75rem;
            border-radius: 6px;
            word-break: break-all; /* Garante que caminhos longos não quebrem o layout */
            border: 1px solid #a7f3d0;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(6px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="upload-container">
        <h2>Upload de Arquivos</h2>
        <p class="subtitle">Selecione o arquivo para envio.</p>
        
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="objetoArquivo" id="upload" required>
            <input type="submit" value="Enviar Arquivo">
        </form>

       
        <?php if ($arquivoEnviado): ?>
            <div class="result-box">
                <div class="result-title">
                    ✓ Arquivo Lido com Sucesso ($folder)
                </div>
                <div class="result-path">
                    <?php echo htmlspecialchars($mensagem); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>