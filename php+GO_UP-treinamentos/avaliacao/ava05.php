<?php
$ALUNOS = array(
    array(
      "nome" => "Carlos Eduardo",
      "codigo" => "030974",
      "curso" => "Informática Básica",
    ),
    array(
        "nome" => "Thalita Bianchi",
        "codigo" => "040809",
        "curso" => "Photoshop Avançado",
    ),
    array(
        "nome" => "Felipe Souza",
        "codigo" => "050632",
        "curso" => "PHP Básico",
    ),
);
echo "Nome: {$ALUNOS['0']['nome']}" . " - codigo: {$ALUNOS['0']['codigo']}" . " - curso: {$ALUNOS['0']['curso']}.";echo'</br>';
echo "Nome: {$ALUNOS['1']['nome']}" . " -  codigo: {$ALUNOS['1']['codigo']}" . " - curso:  {$ALUNOS['1']['curso']}.";echo'</br>';
echo "Nome: {$ALUNOS['2']['nome']}" . " -  codigo: {$ALUNOS['2']['codigo']}" . " - curso:  {$ALUNOS['2']['curso']}.";
