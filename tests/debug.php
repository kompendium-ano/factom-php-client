<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__."/../vendor/harishankar/factom-api-php/config.php";

use Factom\Api\Debug;

// holdingQueue
$holdingQueue = Debug::holdingQueue();
print_r($holdingQueue);

// networkInfo

$networkInfo = Debug::networkInfo();
print_r($networkInfo);

// predictiveFer

$predictiveFer = Debug::predictiveFer();
print_r($predictiveFer);


// auditServers

$auditServers = Debug::auditServers();
print_r($auditServers);

// federatedServers

$federatedServers = Debug::federatedServers();
print_r($federatedServers);


// configuration

$configuration = Debug::configuration();
print_r($configuration);

// processList

$processList = Debug::processList();
print_r($processList);

// authorities

$authorities = Debug::authorities();
print_r($authorities);

// reloadConfiguration

$reloadConfiguration = Debug::reloadConfiguration();
print_r($reloadConfiguration);

// dropRate

$dropRate = Debug::dropRate();
print_r($dropRate);

// setDropRate

$setDropRate = Debug::setDropRate(10);
print_r($setDropRate);

// delay

$delay = Debug::delay();
print_r($delay);

// setDelay

$setDelay = Debug::setDelay(10);
print_r($setDelay);

// summary

$summary = Debug::summary();
print_r($summary);

//messages

$messages = Debug::messages();
print_r($messages);