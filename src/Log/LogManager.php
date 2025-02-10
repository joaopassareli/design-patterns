<?php

namespace Project\DesignPattern\Log;

abstract class LogManager
{
    public function log(string $severity, string $message): void
    {
        /** @var Logger $logWriter */
        $logWriter = $this->criarLogWriter();
        $today = date('d/m/Y');
        $formatedMessage = "[$today][$severity]: $message";
        $logWriter->write($formatedMessage);
    }

    abstract public function criarLogWriter(): Logger;
}
