<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__."/../vendor/harishankar/factom-api-php/config.php";

use Factom\Api\Factoid;

// factoid Ack

$factoidAck = Factoid::factoidAck("f1d9919829fa71ce18caf1bd8659cce8a06c0026d3f3fffc61054ebb25ebeaa0");
print_r($factoidAck);

// factoid balance

$factoidBalance = Factoid::factoidBalance("FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q");
print_r($factoidBalance);

//factoid block

$factoidBlock = Factoid::factoidBlock("49d3d0f02415a24c1397201d5b1839da47eb3b68db8b15a19f7fe4df8d76ad47");
print_r($factoidBlock);

// factoid submit 

$factoidSubmit = Factoid::factoidSubmit("0201565d109233010100b0a0e100646f3e8750c550e4582eca5047546ffef89c13a175985e320232bacac81cc428afd7c200ce7b98bfdae90f942bc1fe88c3dd44d8f4c81f4eeb88a5602da05abc82ffdb5301718b5edd2914acc2e4677f336c1a32736e5e9bde13663e6413894f57ec272e28dc1908f98b79df30005a99df3c5caf362722e56eb0e394d20d61d34ff66c079afad1d09eee21dcd4ddaafbb65aacea4d5c1afcd086377d77172f15b3aa32250a");
print_r($factoidSubmit);