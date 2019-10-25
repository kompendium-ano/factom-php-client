<?php
require_once __DIR__ . '/../vendor/autoload.php';;
require_once __DIR__."/../vendor/harishankar/factom-api-php/config.php";

use Factom\Api\Minute;

// minute

$currentMinute = Minute::currentMinute();
print_r($currentMinute);