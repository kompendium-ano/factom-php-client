<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__."/../config.php";

use Factom\Api\Chains;


// chain id

$chainHead = Chains::chainHead("000000000000000000000000000000000000000000000000000000000000000f");
print_r($chainHead);

//commit chain

$commitChain = Chains::commitChain("00015507b2f70bd0165d9fa19a28cfaafb6bc82f538955a98c7b7e60d79fbf92655c1bff1c76466cb3bc3f3cc68d8b2c111f4f24c88d9c031b4124395c940e5e2c5ea496e8aaa2f5c956749fc3eba4acc60fd485fb100e601070a44fcce54ff358d606698547340b3b6a27bcceb6a42d62a3a8d02a6f0d73653215771de243a63ac048a18b59da2946c901273e616bdbb166c535b26d0d446bc69b22c887c534297c7d01b2ac120237086112b5ef34fc6474e5e941d60aa054b465d4d770d7f850169170ef39150b");
print_r($commitChain);


// reveal chain

$revealChain = Chains::revealChain("007E18CCC911F057FB111C7570778F6FDC51E189F35A6E6DA683EC2A264443531F000E0005746573745A0005746573745A48656C6C6F20466163746F6D21");
print_r($revealChain);

// compose chain

$composeChain = Chains::composeChain("EC2DKSYyRcNWf7RS963VFYgMExo1824HVeCfQ9PGPmNzwrcmgm2r","herryjs");
print_r($composeChain);

// send raw message
$sendRawMessage = Chains::sendRawMessage("00016dcfa2434846e5259a21586d887816878126d2e1dd28d446a11d6ab7987f4dc78f2e4e5c17d763ad62244461094efc15bd4f1b2a899e01037416545862d9990806e17e5fe246310ceacb573703b7a8e7f59e11351a23ad48bc22062ff28246748e90231e980bfe58514d89325855ba189f585c259aaaa4b7a420b3c6704fe692cdd49cc4a9628f2383a36a95fe1ae2bc2314a5011605601ecf7858fbbbf8eb2388787d2cd680d8d90961f5760f94397733462e21cbaf1867ef85a68c671cc14e4bc4694cc102");
print_r($sendRawMessage);

