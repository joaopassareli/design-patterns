<?php
namespace Project\DesignPattern\NotaFiscal;

use Project\DesignPattern\ItemOrcamento;

class NotaFiscal
{
    public string $cnpjEmpresa;
    public string $razaoSocialEmpresa;
    public array $itens;
    public string $observacoes;
    public \DateTimeInterface $dataEmissao;
    public float $valorImpostos;

    public function valor(): float
    {
        return array_reduce(
            $this->itens,
            function (float $valorAcumulado, ItemOrcamento $item) {
            return $valorAcumulado + $item->valor;
        }, 0);
    }

    public function __clone(): void
    {
        $this->dataEmissao = new \DateTimeImmutable();
    }
}
