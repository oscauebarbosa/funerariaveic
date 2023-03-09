<?php
class Carro {
    public $placa;
    public $marca;
    public $ipva;
    public $ano;

    public function __construct($placa, $marca, $ipva, $ano) {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->ipva = $ipva;
        $this->ano = $ano;
    }

    public function exibirInformacoes() {
        echo "Placa: " . $this->placa . "<br>";
        echo "Marca: " . $this->marca . "<br>";
        echo "IPVA: R$ " . number_format($this->ipva, 2, ",", ".") . "<br>";
        echo "Ano: " . $this->ano . "<br>";
    }
}

$carro = new Carro("YAG4321", "Saveiro CS", 600.00, 2012);
$carro->exibirInformacoes();

?>
