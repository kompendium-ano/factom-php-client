<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__."/../config.php";

use Factom\Api\Entry;

// entry
$entry = Entry::entry("e8a838f95c1fe873e0c7faae401cef31d6273644c32aa2324946613a594c0c77");
print_r($entry);

// entry ack

$entryAck = Entry::entryAck("9228b4b080b3cf94cceea866b74c48319f2093f56bd5a63465288e9a71437ee8");
print_r($entryAck);

// entry block

$entryBlock = Entry::entryBlock("437a95c19c839b2889e1879cc4d55b2c6acca35764fd88b33cfb8291d20c7d98");
print_r($entryBlock);

// entry credit balance

$entryCreditBalance = Entry::entryCreditBalance("EC2DKSYyRcNWf7RS963VFYgMExoHRYLHVeCfQ9PGPmNzwrcmgm2r");
print_r($entryCreditBalance);

// entry credit block

$entryCreditBlock = Entry::entryCreditBlock("bfbc36b6dc5a50f81a78e5d3117a5671a9b8e04a09db68e96941f7f1f6a41db6");
print_r($entryCreditBlock);

//enter credit rate

$entryCreditRate = Entry::entryCreditRate();
print_r($entryCreditRate);

//reveal entry

$revealEntry = Entry::revealEntry("007E18CCC911F057FB111C7570778F6FDC51E189F35A6E6DA683EC2A264443531F000E0005746573745A0005746573745A48656C6C6F20466163746F6D21");
print_r($revealEntry);

// compose Entry

$composeEntry = Entry::composeEntry("48e0c94d00bf14d89ab10044075a370e1f55bcb28b2ff16206d865e192827645","EC2DKSYyRcNWf7RS963VFYgMExo1824HVeCfQ9PGPmNzwrcmgm2r");
print_r($composeEntry);