<?php

use Project\DesignPattern\Log\StdoutLogManager;

require 'vendor/autoload.php';

$logMmanger = new StdoutLogManager();
$logManager->log('info', 'Testando Log Manager');