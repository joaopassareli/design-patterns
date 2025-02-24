<?php

use Project\DesignPattern\ItemOrcamento;
use Project\DesignPattern\NotaFiscal\ConstrutorNotaFiscalServico;

require 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscalServico();

$item1 = new ItemOrcamento();
$item1->valor = 100;

$item2 = new ItemOrcamento();
$item2->valor = 200;

$item3 = new ItemOrcamento();
$item3->valor = 400;

$item4 = new ItemOrcamento();
$item4->valor = 500;

$notaFiscal = $builder->paraEmpresa('44.477.404/0001-00', 'João Passareli')
                      ->comItem($item1)
                      ->comItem($item2)
                      ->comItem($item3)
                      ->comItem($item4)
                      ->comObservacoes('Observações da nota fiscal')
                      ->constroi();

$notaFiscal2 = clone $notaFiscal; //Método mágico do PHP, utilizando o padrão Prototype
$notaFiscal2->itens[] = new ItemOrcamento();

echo '<pre>';
print_r($notaFiscal);
print_r($notaFiscal2);
echo '</pre>';
