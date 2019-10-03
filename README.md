# factom-php

PHP client for Factom blockchain

Example-
<?php 
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config.php';
use FactomApi\FactomAddress;
use FactomApi\AddressBalance;
use FactomApi\CreateFactomChain;
use FactomApi\ReadFactomChain;
use FactomApi\ImportAddress;
use FactomApi\Transaction;

// generate ec address
$address = FactomAddress::generateEcAddress();
print_r($address);

// generate factoid address
$factoidAddress = FactomAddress::generateFactoidAddress();
print_r($factoidAddress);

// import private key
$data = ImportAddress::importPrivateKey("Es3tXbGBVKZDhUWzDKzQtg4rcpmmHPXAY9vxSM2JddwJSD5td3f8");
print_r($data);

// get factoid address balance
$data = AddressBalance::getFactoidAddressBalance("FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q");
print_r($data);

// get ec address balance
$data = AddressBalance::getECAddressBalance("EC2DKSYyRcNWf7RS963VFYgMExoHRYLHVeCfQ9PGPmNzwrcmgm2r");
print_r($data);

// create a factom chain
$data = CreateFactomChain::createFactomChain("EC3HUt3iJMFvvq2tmpwqpY4pPxnCtXizPjUduGeZWiC4f4j7XihX");
print_r($data);

// Make a Factom Entry
$data = CreateFactomChain::makeFactomEntry("e43f2910f653d364a75fe664053ba66c146e830df0a72b21cb3fa0833697a946", "EC3HUt3iJMFvvq2tmpwqpY4pPxnCtXizPjUduGeZWiC4f4j7XihX");
print_r($data);

// Read Factom Entry
$data = ReadFactomChain::readChainEntry("b11bb4e1dacea726224c05bf863092ba02d301de55c08039f381e6e0ad1cef0d");
print_r($data);

// send transaction
$data = [
    "txname" => "test1",
    "inputAddress" => "FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q",
    "inputAmount" => 1000012000,
    "outputAddress" => "FA2yeHMMJR6rpjRYGe3Q4ogThHUmByk3WLhTjQDvPrxDoTYF8BbC",
    "outputAmount" => 1000000000
];
$transaction = Transaction::sendTransaction($data);
print_r($transaction);


Testing our Code
php tests/test.php
