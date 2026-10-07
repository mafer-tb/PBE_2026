<?php
class Aluno{
    public $nome;
    public $nota1;
    public $nota2;
    public $media;

    public function __construct($nome,$nota1, $nota2){
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->media = $this->calcularMedia();
    }

    private function calcularMedia(){
        return ($this->nota1 + $this->nota2)/2;
    }
}

$aluno = new Aluno("mafer", 5, 10);
print_r($aluno);