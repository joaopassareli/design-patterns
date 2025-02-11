<?php

namespace Project\DesignPattern\NotaFiscal;

use Project\DesignPattern\NotaFiscal\NotaFiscal;

class ConstrutorNotaFiscalServico extends ConstrutorNotaFiscal
{
    public function constroi(): NotaFiscal
    {
        $valorNotaFiscal = $this->notaFiscal->valor();
        $this->notaFiscal->valorImpostos = $valorNotaFiscal * 0.06;

        return $this->notaFiscal;
    }
}
