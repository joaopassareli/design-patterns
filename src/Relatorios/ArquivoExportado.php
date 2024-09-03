<?php

namespace Project\DesignPattern\Relatorios;

interface ArquivoExportado
{
    public function salvar(ConteudoExportado $conteudo): string;
}
