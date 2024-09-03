<?php

use Project\DesignPattern\Orcamento;
use Project\DesignPattern\Relatorios\ArquivoXml;
use Project\DesignPattern\Relatorios\OrcamentoExportado;

require_once 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->valor = 700.75;
$orcamento->qtdItens = 5;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoXml = new ArquivoXml('orcamento');

echo $orcamentoXml->salvar($orcamentoExportado);
