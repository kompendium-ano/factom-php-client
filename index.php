<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
require_once __DIR__ . '/config.php';
use FactomApi\FactomAddress;
use FactomApi\AddressBalance;
use FactomApi\CreateFactomChain;
use FactomApi\ReadFactomChain;
use FactomApi\ImportAddress;