<?php


require_once 'Aluno.php';


$aluno = new Aluno("Augusto", 9.0, 7.0);


$media = $aluno->calcularMedia();
$situacao = $aluno->verificarSituacao();


echo "Aluno: {$aluno->nome}<br>";
echo "Média: {$media}<br>";
echo "Situação: {$situacao}<br>";

?>