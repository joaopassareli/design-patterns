<?php

namespace Project\DesignPattern\Relatorios;

class ArquivoXml implements ArquivoExportado
{
    private string $nomeElementoPai;
    public function __construct(string $nomeElementoPai)
    {
        $this->nomeElementoPai = $nomeElementoPai;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $elementoXml = new \SimpleXMLElement("<{$this->nomeElementoPai} />");
        
        foreach($conteudoExportado->conteudo() as $item => $valor) {
            $elementoXml->addChild($item, $valor);
        }

        $caminho = tempnam(sys_get_temp_dir(), 'xml');
        $elementoXml->asXML($caminho);

        return $caminho;
    }
}
