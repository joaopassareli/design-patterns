<?php

use Project\DesignPattern\Orcamento;
use Project\DesignPattern\Impostos\Iss;
use Project\DesignPattern\Impostos\Icms;
use Project\DesignPattern\CalculadoraDescontos;

require 'vendor/autoload.php';

// $calculadora = new CalculadoraImpostos();

// $orcamento = new Orcamento();
// $orcamento->valor = 100;

// echo 'Imposto = ' . $calculadora->calcula($orcamento, new Iss()) . PHP_EOL;

$calculadoraDesconto = new CalculadoraDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->qtdItens = 5;

echo $calculadoraDesconto->calculaDescontos($orcamento, new Icms(new Iss()));