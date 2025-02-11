<?php

use Project\DesignPattern\Log\FileLogManager;
use Project\DesignPattern\Log\StdoutLogManager;

require 'vendor/autoload.php';

// Caso queira testar o log pelo Stdout
// $logManager = new StdoutLogManager();
// $logManager->log('info', 'Testando Log Manager');

$logManager = new FileLogManager(__DIR__ . '/log');
$logManager->log('info', 'Testando Log Manager');
