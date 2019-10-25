<?php
require_once __DIR__ . '/../vendor/autoload.php';;
require_once __DIR__."/../vendor/harishankar/factom-api-php/config.php";

use Factom\Api\FactomAddress;

// get address 
$address = FactomAddress::address("FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q");
print_r($address);

//get all addresses 
// $alladdresses = FactomAddress::allAddresses();
// print_r($alladdresses);

// generate ec address
// $address = FactomAddress::generateEcAddress();
// print_r($address);

// generate Factoid Address

// $address = FactomAddress::generateFactoidAddress();
// print_r($address);