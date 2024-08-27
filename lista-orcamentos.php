<?php

require_once 'vendor/autoload.php';

use Project\DesignPattern\Orcamento;

$orcamento1 = new Orcamento();
$orcamento1->$qtdItens = 7;
$orcamento1->aprovaOrcamento();
$orcamento1->$valor = 1500.75;

$orcamento2 = new Orcamento();
$orcamento2->$qtdItens = 3;
$orcamento2->reprovaOrcamento();
$orcamento2->$valor = 150;

$orcamento3 = new Orcamento();
$orcamento3->$qtdItens = 5;
$orcamento3->aprovaOrcamento();
$orcamento3->finalizaOrcamento();
$orcamento3->$valor = 1350;

$listaOrcamentos = new ListaOrcamentos();
$listaOrcamentos->addOrcamento($orcamento1);
$listaOrcamentos->addOrcamento($orcamento2);
$listaOrcamentos->addOrcamento($orcamento3);

foreach ($listaOrcamentos as $orcamento) {
    echo 'Valor => ' . $orcamento->valor . PHP_EOL;
    echo 'Status => ' . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo 'Quantidade de itens => ' . $orcamento->qtdItens . PHP_EOL;

    echo PHP_EOL;
}
