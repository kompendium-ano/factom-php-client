<?php
require_once __DIR__ . '/../vendor/autoload.php';;
require_once __DIR__."/../vendor/harishankar/factom-api-php/config.php";

use Factom\Api\Security;

// securityEncryptedConnections
$securityEncryptedConnections = Security::securityEncryptedConnections();
print_r($securityEncryptedConnections);

// securityPasswordProtection
// $securityPasswordProtection = Security::securityPasswordProtection();
// print_r($securityPasswordProtection);

// security‌CombinedPasswordAndEncryption
//  $security‌CombinedPasswordAndEncryption = Security::security‌CombinedPasswordAndEncryption();
//  print_r($security‌CombinedPasswordAndEncryption);
