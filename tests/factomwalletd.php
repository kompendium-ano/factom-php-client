<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__."/../vendor/harishankar/factom-api-php/config.php";

use Factom\Api\FactomWalletd;

//get height

$getheight = FactomWalletd::getHeight();
print_r($getheight);

//  active-identity-keys

$activeIdentityKeys = FactomWalletd::activeIdentityKeys("3b69dabe22c014af9a9bc9dfa7917ce4602a03579597ddf184d8de56702512ae","1");
print_r($activeIdentityKeys);

//  allIdentityKeys

$allIdentityKeys = FactomWalletd::allIdentityKeys();
print_r($allIdentityKeys);

// composeIdentityAttribute
$attributes = ["key"=>"email","value"=>"hello@factom.com"];
$composeIdentityAttribute = FactomWalletd::composeIdentityAttribute("000000000000000000000000000000000000000000000000000000000000000a","000000000000000000000000000000000000000000000000000000000000000a",$attributes,"idpub2cw4NS4JZowXTwhGeo2tTGNvnjc5n2QvHBURdvVFCKRDuLEnBh","3b69dabe22c014af9a9bc9dfa7917ce4602a03579597ddf184d8de56702512ae","EC2ZFTmTv5Fs7UyKZzxY8km4jF635VkhR5KKBMzNP4BK4fPKaVw4","false");
print_r($composeIdentityAttribute);

// compose-identity-attribute-endorsement

$composeIdentityAttributeEndorsement = FactomWalletd::composeIdentityAttributeEndorsement("3b69dabe22c014af9a9bc9dfa7917ce4602a03579597ddf184d8de56702512ae","c07f1d89bb6c43e7e3166b9e53672110ff8077c367758fbe4265561c8b91e675","idpub2cw4NS4JZowXTwhGeo2tTGNvnjc5n2QvHBURdvVFCKRDuLEnBh","2321663B3B8A09CB4E701B84DEE49ABCE3C9D3EFDE867A9875E536D5ECEB653C","EC2ZFTmTv5Fs7UyKZzxY8km4jF635VkhR5KKBMzNP4BK4fPKaVw4","false");
print_r($composeIdentityAttributeEndorsement);

// compose-identity-key-replacement 

$composeIdentityKeyReplacement = FactomWalletd::composeIdentityKeyReplacement("3b69dabe22c014af9a9bc9dfa7917ce4602a03579597ddf184d8de56702512ae","idpub2GU1Pcax2PibH8hHZg58fKRiSJKQWQkWYkpmt7VH1jCXBgqp9w","idpub2cw4NS4JZowXTwhGeo2tTGNvnjc5n2QvHBURdvVFCKRDuLEnBh","idpub2GU1Pcax2PibH8hHZg58fKRiSJKQWQkWYkpmt7VH1jCXBgqp9w","EC2ZFTmTv5Fs7UyKZzxY8km4jF635VkhR5KKBMzNP4BK4fPKaVw4","false");
print_r($composeIdentityKeyReplacement);

 // importIdentityKeys
 $importIdentityKeys = FactomWalletd::importIdentityKeys("idsec2rWrfNTD1x9HPPesA3fz8dmMNZdjmSBULHx8VTXE1J4D9icmAK","idsec1iuqCFoiEfSZ1rU2FNpa7oFY3Kc29hHxP1R2PDyacJQEA8iShB");
 print_r($importIdentityKeys);

// removeAddress
$removeAddress = FactomWalletd::removeAddress("EC3geo9QBmA1UGiwDApHHxoNQu5Xkc9rdBsk1XqPJP4ycDUGpooX");
print_r($removeAddress);

// remove-identity-key
$removeIdentityKey = FactomWalletd::removeIdentityKey("idpub26PEBWuumVp19yUSpfGJ2HPrTrU7hgw5empU7FPiTHdCKoy5Ao");
print_r($removeIdentityKey);


// sign-data  
$signData = FactomWalletd::signData("FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q");
print_r($signData);

// unlock-wallet  
$unlockWallet = FactomWalletd::unlockWallet("opensesame",300);
print_r($unlockWallet);

$importKoinify = FactomWalletd::importKoinify("yellow yellow yellow yellow yellow yellow yellow yellow yellow yellow yellow yellow");
print_r($importKoinify);

//properties

$properties = FactomWalletd::properties();
print_r($properties);

//wallet backup 

$walletBackup = FactomWalletd::walletBackup();
print_r($walletBackup);

// walletBalances

$walletBalances = FactomWalletd::walletBalances();
print_r($walletBalances);


// errrors

$errors = FactomWalletd::errors();
print_r($errors);