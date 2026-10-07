<?php
class ContaBancaria {
    public $titular;
    public $numero;
    public $saldo;
    public $tipo;

    function depositar($valor){
        $this->saldo = $this->saldo + $valor;
        echo "Deposito concluído <br>";
        echo "O saldo aumentou para $this->saldo";
    }

    function sacar($valor){
        $this->saldo = $this->saldo - $valor;
        echo "O saldo resultou em $this->saldo <";
    }

    function consultarSaldo(){
        echo "Saldo de $this->saldo <br>";
    }
}

$conta1 = new ContaBancaria();

$conta1->titular = "Maria Fernanda";
$conta1->numero = 161114;
$conta1->salto = 10000;
$conta1->tipo = "Conjunta";

echo "Titular:" . $conta1->titular . "<br>";
echo "número:" . $conta1->numero . "<br>";
echo "saldo:" . $conta1->saldo . "<br>";
echo "tipo:" . $conta1->tipo . "<br>";

$conta1->depositar(100);
$conta1->sacar(1000);
$conta1->consultarSaldo();

$conta2 = new ContaBancaria();

$conta2->titular = "Nicoli";
$conta2->numero = 161854;
$conta2->salto = 100000;
$conta2->tipo = "Conta Corrente";

echo "Titular:" . $conta2->titular . "<br>";
echo "número:" . $conta2->numero . "<br>";
echo "saldo:" . $conta2->saldo . "<br>";
echo "tipo:" . $conta2->tipo . "<br>";

$conta1->depositar(100);
$conta1->sacar(1000);
$conta1->consultarSaldo();
?>