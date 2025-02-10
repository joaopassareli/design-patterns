<?php

namespace Project\DesignPattern\Log;

use Project\DesignPattern\Log\LogWriter;

class FileLogManager extends LogManager
{
    private string $caminhoArquivo;

    public function __contruct(string $caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;
    }
    
    public function criarLogWriter(): Logger
    {
        return new FileLogWriter($this->caminhoArquivo);
    }
}