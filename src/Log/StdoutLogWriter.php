<?php

namespace Project\DesignPattern\Log;

class StdoutLogWriter implements Logger
{
    public function write(string $mensagem): void
    {
        echo $mensagem;
    }
}