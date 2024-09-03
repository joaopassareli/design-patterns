<?php

use Project\DesignPattern\Http\CurlHttpAdapter;
use Project\DesignPattern\Orcamento;
use Project\DesignPattern\RegistroOrcamento;

require 'vendor/autoload.php';

$registroOrcamento = new RegistroOrcamento(new CurlHttpAdapter());
$registroOrcamento->registrar(new Orcamento());
