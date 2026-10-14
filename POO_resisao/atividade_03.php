<?php
class Filme {
    private $titulo;
    private $genero;
    private $duracao;
    private $assistido;

    public function __construct($titulo, $genero, $duracao) {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracao = $duracao;
        $this->assistido = false;
    }

    public function marcarComoAssistido() {
        $this->assistido = true;
    }

    public function exibirInformacoes() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Gênero: " . $this->genero . "<br>";
        echo "Duração: " . $this->duracao . " minutos<br>";
        echo "Assistido: " . $this->foiAssistido() . "<br>";
    }

    public function foiAssistido() {
        if ($this->assistido == true) {
            return "O filme já foi assistido.";
        } else {
            return "O filme ainda não foi assistido.";
        }
    }
}

$filme1 = new Filme("Vingadores: Ultimato", "Ação", 181);

$filme2 = new Filme("Toy Story", "Animação", 81);

$filme1->marcarComoAssistido();

echo "Filme 1 <br>";
$filme1->exibirInformacoes();


echo "Filme 2 <br>";
$filme2->exibirInformacoes();

?>