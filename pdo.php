<?php

use Project\DesignPattern\PdoConnection;

require 'vendor/autoload.php';

$pdo = PdoConnection::getInstance('sqlite::memory:');

$pdo2 = PdoConnection::getInstance('sqlite::memory:');

$pdo2->bindValue(':name', 'John Doe');
