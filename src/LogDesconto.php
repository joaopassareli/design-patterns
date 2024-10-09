<?php

namespace Project\DesignPattern;

class LogDesconto
{
    public function informar(float $descontoCalculado): void
    {
        //lib de log;
        echo "Salvando log desconto: $descontoCalculado";
    }
}
