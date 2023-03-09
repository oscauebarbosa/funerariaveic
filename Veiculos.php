<?php

$placa = "YAG4321";
$marca = "Saveiro CS";
$ipva = 600.00;
$ano = 2012;

echo "Placa: " . $placa . "<br>";
echo "Marca: " . $marca . "<br>";
echo "IPVA: R$ " . number_format($ipva, 2, ",", ".") . "<br>";
echo "Ano: " . $ano . "<br>";

?>