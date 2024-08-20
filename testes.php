<?php

use Project\DesignPattern\Orcamento;
use Project\DesignPattern\Impostos\Icms;
use Project\DesignPattern\CalculadoraImpostos;
use Project\DesignPattern\Impostos\Iss;

require 'vendor/autoload.php';

$calculadora = new CalculadoraImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Iss());