<?php

class Aluno {

 private $nome;
    private $nota1;
private $nota2;
private $nota3;
private $faltas;
    private $media;

public function setNome($nome) {
    $this ->nome = $nome;
}

public function getNome() {
    return $this-> nome;
}

public function setnota1($nota1) {
    $this-> nota1 = $nota1;
}

public function getnota1() {
    return $this-> nota1;
}

public function setnota2($nota2) {
    $this-> nota2 = $nota2;

}

public function getnota2() {
    return $this->nota2;
}

public function setnota3($nota3){
    $this-> nota3 = $nota3;
}

public function getnota3(){
    return $this-> nota3;
}

public function setfaltas($faltas){
    $this-> faltas = $faltas;
}

public function getfaltas(){
    return $this-> faltas;
}

    public function setmedia($media){
    $this-> media = $media;
    }

public function getmedia(){
    return $this-> media;
}

public function calcularMedia(){
    $this->media = ($this->nota1 + $this->nota2 + $this->nota3) / 3;
}

public function mostrarResultado() {
    if ($this->calcularPresenca() < 75) {
        return "Reprovado";
    } elseif ($this->media < 5) {
        return "Reprovado";
    } elseif ($this->media <= 7) {
        return "Recuperação";
    } else {
        return "Aprovado";
    }
}
