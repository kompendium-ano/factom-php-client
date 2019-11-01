<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__."/../config.php";

use Factom\Api\Factomd;

// heights
$heights = Factomd::heights();
print_r($heights);

// anchors
$anchors = Factomd::anchors("d55e74aa4b2ff09b4764f1d11f2161b503be7d4e96374b57d36090a5faedf7b6");
print_r($anchors);

// diagnostics
$diagnostics = Factomd::diagnostics();
print_r($diagnostics);


// multiple Ec Balances
$multipleEcBalances = Factomd::multipleEcBalances("EC293AbTn3VScgC2m86xTh2kFKAMNnkgoLdXgywpPa66Jacom5ya","EC3ExcVhmGRJmavCf1LCMu8YiHCyU2CWVh5DmXRz6jfPHMbzJSCz");
print_r($multipleEcBalances);

// multiple FCT Balances
$multipleFctBalances = Factomd::multipleFctBalances("FA3uMAv9htC5y5u3ayzxNQKZNDpgrJVf49kJSKdVNxcYoNBbSLXc","FA3umgJaXdHjpSQyBUPC2uMFuoW9nM5Ymm8Sa2f2VKGSqsyx79nf");
print_r($multipleFctBalances);

// properties
$properties = Factomd::properties();
print_r($properties);

// raw data
$rawData = Factomd::rawData("44cd4e8da0981891c979512a0186addf60c3d982df25966c76d72fb474444c96");
print_r($rawData);

// receipt  
$receipt = Factomd::receipt("2413a0f67e7dd988728f77020905829eef62ad06c0b7bf8e52a7e1455d5f3fb6");
print_r($receipt);

