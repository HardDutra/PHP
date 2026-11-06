<?php
 $VariavelNome = $_POST['nomeuser'];
 $Variavelemail = $_POST['e-mail'];
 $VariavelTel = $_POST['phone'];

 echo "<ol>
         <li>User: $VariavelNome</li>
         <li>E-mail: $Variavelemail</li>
         <li>Telefone: $VariavelTel</li>
        </ol>";
?>