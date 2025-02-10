<?php

namespace Project\DesignPattern\Log;

interface Logger
{
    public function write(string $mensagem): void;
}
