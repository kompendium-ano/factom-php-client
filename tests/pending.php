<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__."/../vendor/harishankar/factom-api-php/config.php";

use Factom\Api\Pending;

//pending entries
$pendingEntries = Pending::pendingEntries();
print_r($pendingEntries);

// pending transaction
$pendingTransactions = Pending::pendingTransactions("FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q");
print_r($pendingTransactions);