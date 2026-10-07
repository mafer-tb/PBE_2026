<?php
class Aula{
    public $disciplina;
    public $professor;
    public $duracao;
    public $numeroSala;
    public $bloco;

    function exibirInformacoes()
    {
        echo "Disciplina: " . $this->disciplina . "<br>";
        echo "Professor: " . $this->professor . "<br>";
        echo "Duração: " . $this->duracao . "<br>";
        echo "Número da sala: " . $this->numeroSala . "<br>";
        echo "Bloco: " . $this->bloco . "<br>";
    }

    function trocarProfessor($nomeProfessor)
    {
        $this->professor = $nomeProfessor;
        echo "O novo professor é $this->professor <br>";
    }

    function alterarLocal($numeroSala, $bloco)
    {
        $this->numeroSala = $numeroSala;
        $this->bloco = $bloco;
        echo "O novo local é  $this->bloco $this->numeroSala <br>";
    }
}

$aula1 = new Aula();

$aula1->disciplina = "Programação";
$aula1->professor = "Leonardo";
$aula1->duracao = "2 horas";
$aula1->numeroSala = 5;
$aula1->bloco = "A";

$aula1->exibirInformacoes();
$aula1->trocarProfessor("Gabriel");
$aula1->alterarLocal("B", 10);
$aula1->exibirInformacoes();

$aula2 = new Aula();

$aula2->disciplina = "Programação";
$aula2->professor = "Gabriel";
$aula2->duracao = "2 horas";
$aula2->numeroSala = 10;
$aula2->bloco = "B";

$aula2->exibirInformacoes();
$aula2->trocarProfessor("Leonardo");
$aula2->alterarLocal("A", 5);
$aula2->exibirInformacoes();

?>