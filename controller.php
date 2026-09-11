<?php

require_once 'model.php';

$aluno = new Aluno();

$aluno->setNome($_POST['nome']);
$aluno->setnota1($_POST['nota1']);
$aluno->setnota2($_POST['nota2']);
$aluno->setnota3($_POST['nota3']);
$aluno->setfaltas($_POST['faltas']);
$aluno->calcularMedia();

echo "Aluno cadastrado com sucesso!<br>";
echo "Nome: " . $aluno->getNome() . "<br>";
echo "Nota 1: " . $aluno->getnota1() . "<br>";
echo "Nota 2: " . $aluno->getnota2() . "<br>";
echo "Nota 3: " . $aluno->getnota3() . "<br>";
echo "Média: " . $aluno->getmedia() . "<br>";
echo "Presença: " . $aluno->calcularPresenca() . "%<br>";
echo "Resultado: " . $aluno->mostrarResultado();

require_once 'view.php';
