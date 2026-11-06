<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") { 
   $VariavelName = trim($_POST['VariavelName']);
   $VariavelTel = trim($_POST['VariavelTel']);
   $VariavelEmail = trim($_POST['VariavelEmail']);
   $VariavelTexto = trim($_POST['VariavelTexto']);

   //Validação dos dados para evitar campos em branco
 
 if (empty($VariavelName) || empty($VariavelTel) ||  empty($VariavelEmail) || empty($VariavelTexto)){
      header("Location: contato-feito.php");
      exit();
   }

 }
?>