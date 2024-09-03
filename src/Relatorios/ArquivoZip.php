<?php

namespace Project\DesignPattern\Relatorios;

class ArquivoZip implements ArquivoExportado
{
    private string $nomeArquivo;

    public function __construct(string $nomeArquivo){
        $this->nomeArquivo = $nomeArquivo;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $caminho = tempnam(sys_get_temp_dir(), 'zip');
        $arquivoZip = new \ZipArchive();
        $arquivoZip->open($caminho);
        $arquivoZip->addFromString(
            $this->nomeArquivo,
            serialize($conteudoExportado->conteudo())
        );
        $arquivoZip->close();

        return $caminho;
    }
}
