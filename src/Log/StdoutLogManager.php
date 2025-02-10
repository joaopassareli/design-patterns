<?php

namespace Log;

use Project\DesignPattern\Log\Logger;
use Project\DesignPattern\Log\LogManager;
use Project\DesignPattern\Log\StdoutLogWriter;

class StdoutLogManager extends LogManager
{
    public function criarLogWriter(): Logger
    {
        return new StdoutLogWriter();
    }
}
