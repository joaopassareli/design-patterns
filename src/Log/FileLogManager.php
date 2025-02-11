<?php

namespace Project\DesignPattern\Log;

class FileLogManager extends LogManager
{
    private string $caminhoArquivo;

    public function __construct(string $caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;
    }
    
    public function criarLogWriter(): Logger
    {
        return new FileLogWriter($this->caminhoArquivo);
    }
}
