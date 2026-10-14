<?php
class Paciente {
    private $nome;
    private $idade;
    private $peso;
    private $altura;

    public function __construct($nome, $idade, $peso, $altura){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function calcularIMC(){
        return $this->peso / ($this->altura * $this->altura);
    }

    public function classificarIMC() {
        $imc = $this->calcularIMC();

        if ($imc < 18.5) {
            return "Baixo peso";
        } elseif ($imc < 25) {
            return "Normal";
        } elseif ($imc < 30) {
            return "Sobrepeso";
        } else {
            return "Obesidade";
        }
    }

    public function exibirFicha() {
        echo "Ficha do Paciente <br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Peso: " . $this->peso . "<br>";
        echo "Altura: " . $this->altura . "<br>";
        echo "IMC: " .  $this->calcularIMC() . "<br>";
        echo "Classificação: " . $this->classificarIMC() . "<br>";
    }
}

$paciente = new Paciente("Maria", 17, 70, 1.70);
$paciente->exibirFicha();

?>
