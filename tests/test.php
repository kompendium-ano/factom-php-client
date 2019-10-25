<?php 
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config.php';
use Factom\Api\FactomAddress;
use Factom\Api\AddressBalance;
use Factom\Api\CreateFactomChain;
use Factom\Api\ReadFactomChain;
use Factom\Api\ImportAddress;
use Factom\Api\Transaction;
use Factom\Api\Blocks;
use Factom\Api\Chains;
use Factom\Api\Commits;
use Factom\Api\Minute;
use Factom\Api\Entry;
use Factom\Api\Factoid;
use Factom\Api\Pending;
use Factom\Api\Factomd;
use Factom\Api\FactomWalletd;
use Factom\Api\Debug;
use Factom\Api\Security;

/* Block */

// get ablock by height
$ablock = Blocks::ablockByHeight();
echo $ablock;

// ack
// $ack = Blocks::ack("e96cca381bf25f6dd4dfdf9f7009ff84ee6edaa3f47f9ccf06d2787482438f4b","f9164cd66af9d5773b4523a510b5eefb9a5e626480feeb6671ef2d17510ca300");
// print_r($ack);

// admin block
// $adminblock = Blocks::adminBlock('32ca53bbcee1c741bee9a9bfa722bebed70f7ee5d4286c7774d9a359e5bbe8f2');
// print_r($adminblock);

// dblock By Height
// $dblockbyheight = Blocks::dblockByHeight(14460);
// print_r($dblockbyheight);

//directory block
// $dirblock = Blocks::directoryBlock("9d6160f657d336aa6b637e2a32406ff29549a9ce23ccdfe097279cb1c7b9a468");
// print_r($dirblock);

//directory Block Head

// $dirblockhead = Blocks::directoryBlockHead();
// print_r($dirblockhead);

// ecblock by height 

// $ecblockByHeight = Blocks::ecblockByHeight();
// print_r($ecblockByHeight);

// entry block

// $entryblock = Blocks::entryBlock("041c3fed14469a3d0f1a022e3d5321583065e691edb9223605c86766ff881883");
// print_r($entryblock);

// entry credit block

// $entrycreditblock = Blocks::entryCreditBlock("ff0359c3872dd856ee187de786c1293fcabc2dcfee9facfb1b9444762ef01653");
// print_r($entrycreditblock);


// factoid block 

// $factoidBlock = Blocks::factoidBlock("a4552ef041a54b8886eecca5656d8377bdc98e6aaf554daa41ae50fa2af6b949");
// print_r($factoidBlock);

// fblock by height

// $fblockByHeight = Blocks::fblockByHeight(101994);
// print_r($fblockByHeight);

// chain id

// $chainHead = Chains::chainHead("000000000000000000000000000000000000000000000000000000000000000f");
// print_r($chainHead);

//commit chain

// $commitChain = Chains::commitChain("00015507b2f70bd0165d9fa19a28cfaafb6bc82f538955a98c7b7e60d79fbf92655c1bff1c76466cb3bc3f3cc68d8b2c111f4f24c88d9c031b4124395c940e5e2c5ea496e8aaa2f5c956749fc3eba4acc60fd485fb100e601070a44fcce54ff358d606698547340b3b6a27bcceb6a42d62a3a8d02a6f0d73653215771de243a63ac048a18b59da2946c901273e616bdbb166c535b26d0d446bc69b22c887c534297c7d01b2ac120237086112b5ef34fc6474e5e941d60aa054b465d4d770d7f850169170ef39150b");
// print_r($commitChain);


// reveal chain

// $revealChain = Chains::revealChain("007E18CCC911F057FB111C7570778F6FDC51E189F35A6E6DA683EC2A264443531F000E0005746573745A0005746573745A48656C6C6F20466163746F6D21");
// print_r($revealChain);

// compose chain

// $composeChain = Chains::composeChain("EC2DKSYyRcNWf7RS963VFYgMExo1824HVeCfQ9PGPmNzwrcmgm2r","herryjs");
// print_r($composeChain);

// send raw message
// $sendRawMessage = Chains::sendRawMessage("00016dcfa2434846e5259a21586d887816878126d2e1dd28d446a11d6ab7987f4dc78f2e4e5c17d763ad62244461094efc15bd4f1b2a899e01037416545862d9990806e17e5fe246310ceacb573703b7a8e7f59e11351a23ad48bc22062ff28246748e90231e980bfe58514d89325855ba189f585c259aaaa4b7a420b3c6704fe692cdd49cc4a9628f2383a36a95fe1ae2bc2314a5011605601ecf7858fbbbf8eb2388787d2cd680d8d90961f5760f94397733462e21cbaf1867ef85a68c671cc14e4bc4694cc102");
// print_r($sendRawMessage);


/* Commits */
// $commitEntry = Commits::commitEntry("00015507C1024BF5C956749FC3EBA4ACC60FD485FB100E601070A44FCCE54FF358D60669854734013B6A27BCCEB6A42D62A3A8D02A6F0D73653215771DE243A63AC048A18B59DA29F4CBD953E6EBE684D693FDCA270CE231783E8ECC62D630F983CD59E559C6253F84D1F54C8E8D8665D493F7B4A4C1864751E3CDEC885A64C2144E0938BF648A00");
// print_r($commitEntry);

/* Debug */
// holdingQueue
// $holdingQueue = Debug::holdingQueue();
// print_r($holdingQueue);

// networkInfo

// $networkInfo = Debug::networkInfo();
// print_r($networkInfo);

// predictiveFer

// $predictiveFer = Debug::predictiveFer();
// print_r($predictiveFer);


// auditServers

// $auditServers = Debug::auditServers();
// print_r($auditServers);

// federatedServers

// $federatedServers = Debug::federatedServers();
// print_r($federatedServers);


// configuration

// $configuration = Debug::configuration();
// print_r($configuration);

// processList

// $processList = Debug::processList();
// print_r($processList);

// authorities

// $authorities = Debug::authorities();
// print_r($authorities);

// reloadConfiguration

// $reloadConfiguration = Debug::reloadConfiguration();
// print_r($reloadConfiguration);

// dropRate

// $dropRate = Debug::dropRate();
// print_r($dropRate);

// setDropRate

// $setDropRate = Debug::setDropRate(10);
// print_r($setDropRate);

// delay

// $delay = Debug::delay();
// print_r($delay);

// setDelay

// $setDelay = Debug::setDelay(10);
// print_r($setDelay);

// summary

// $summary = Debug::summary();
// print_r($summary);

//messages

// $messages = Debug::messages();
// print_r($messages);

// securityEncryptedConnections
// $securityEncryptedConnections = Security::securityEncryptedConnections();
// print_r($securityEncryptedConnections);

// securityPasswordProtection
// $securityPasswordProtection = Security::securityPasswordProtection();
// print_r($securityPasswordProtection);

// security‌CombinedPasswordAndEncryption
//  $security‌CombinedPasswordAndEncryption = Security::security‌CombinedPasswordAndEncryption();
//  print_r($security‌CombinedPasswordAndEncryption);

/* Entry */

// entry block


// entry
// $entry = Entry::entry("61b3d3175f211f3b23b455bb8710fdbcf545cb40da397d9e20b26eca31c389a6");
// print_r($entry);

// entry ack

// $entryAck = Entry::entryAck("9228b4b080b3cf94cceea866b74c48319f2093f56bd5a63465288e9a71437ee8");
// print_r($entryAck);

// entry block

// $entryBlock = Entry::entryBlock("437a95c19c839b2889e1879cc4d55b2c6acca35764fd88b33cfb8291d20c7d98");
// print_r($entryBlock);

// entry credit balance

// $entryCreditBalance = Entry::entryCreditBalance("EC2DKSYyRcNWf7RS963VFYgMExoHRYLHVeCfQ9PGPmNzwrcmgm2r");
// print_r($entryCreditBalance);

// entry credit block

// $entryCreditBlock = Entry::entryCreditBlock("bfbc36b6dc5a50f81a78e5d3117a5671a9b8e04a09db68e96941f7f1f6a41db6");
// print_r($entryCreditBlock);

//enter credit rate

// $entryCreditRate = Entry::entryCreditRate();
// print_r($entryCreditRate);

//reveal entry

// $revealEntry = Entry::revealEntry("007E18CCC911F057FB111C7570778F6FDC51E189F35A6E6DA683EC2A264443531F000E0005746573745A0005746573745A48656C6C6F20466163746F6D21");
// print_r($revealEntry);

// compose Entry

// $composeEntry = Entry::composeEntry("48e0c94d00bf14d89ab10044075a370e1f55bcb28b2ff16206d865e192827645","EC2DKSYyRcNWf7RS963VFYgMExo1824HVeCfQ9PGPmNzwrcmgm2r");
// print_r($composeEntry);

/* Factoid */

// factoid Ack

// $factoidAck = Factoid::factoidAck("f1d9919829fa71ce18caf1bd8659cce8a06c0026d3f3fffc61054ebb25ebeaa0");
// print_r($factoidAck);

// factoid balance

// $factoidBalance = Factoid::factoidBalance("FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q");
// print_r($factoidBalance);

//factoid block

// $factoidBlock = Factoid::factoidBlock("49d3d0f02415a24c1397201d5b1839da47eb3b68db8b15a19f7fe4df8d76ad47");
// print_r($factoidBlock);

// factoid submit 

// $factoidSubmit = Factoid::factoidSubmit("0201565d109233010100b0a0e100646f3e8750c550e4582eca5047546ffef89c13a175985e320232bacac81cc428afd7c200ce7b98bfdae90f942bc1fe88c3dd44d8f4c81f4eeb88a5602da05abc82ffdb5301718b5edd2914acc2e4677f336c1a32736e5e9bde13663e6413894f57ec272e28dc1908f98b79df30005a99df3c5caf362722e56eb0e394d20d61d34ff66c079afad1d09eee21dcd4ddaafbb65aacea4d5c1afcd086377d77172f15b3aa32250a");
// print_r($factoidSubmit);

/* Factom Address */

// get address 
// $address = FactomAddress::address("FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q");
// print_r($address);

//get all addresses 
// $alladdresses = FactomAddress::allAddresses();
// print_r($alladdresses);

// generate ec address
// $address = FactomAddress::generateEcAddress();
// print_r($address);

// generate Factoid Address

// $address = FactomAddress::generateFactoidAddress();
// print_r($address);

/* Factomd */

// heights
// $heights = Factomd::heights();
// print_r($heights);

// anchors
// $anchors = Factomd::anchors("d55e74aa4b2ff09b4764f1d11f2161b503be7d4e96374b57d36090a5faedf7b6");
// print_r($anchors);

// diagnostics
// $diagnostics = Factomd::diagnostics();
// print_r($diagnostics);


// multiple Ec Balances
// $multipleEcBalances = Factomd::multipleEcBalances("EC293AbTn3VScgC2m86xTh2kFKAMNnkgoLdXgywpPa66Jacom5ya","EC3ExcVhmGRJmavCf1LCMu8YiHCyU2CWVh5DmXRz6jfPHMbzJSCz");
// print_r($multipleEcBalances);

// multiple FCT Balances
// $multipleFctBalances = Factomd::multipleFctBalances("FA3uMAv9htC5y5u3ayzxNQKZNDpgrJVf49kJSKdVNxcYoNBbSLXc","FA3umgJaXdHjpSQyBUPC2uMFuoW9nM5Ymm8Sa2f2VKGSqsyx79nf");
// print_r($multipleFctBalances);

// properties
// $properties = Factomd::properties();
// print_r($properties);

// raw data
// $rawData = Factomd::rawData("44cd4e8da0981891c979512a0186addf60c3d982df25966c76d72fb474444c96");
// print_r($rawData);

// receipt  
// $receipt = Factomd::receipt("2413a0f67e7dd988728f77020905829eef62ad06c0b7bf8e52a7e1455d5f3fb6");
// print_r($receipt);


/* FactomWalletd */

//get height

// $getheight = FactomWalletd::getHeight();
// print_r($getheight);


//get height

// $getheight = FactomWalletd::getHeight();
// print_r($getheight);

//  active-identity-keys

// $activeIdentityKeys = FactomWalletd::activeIdentityKeys("3b69dabe22c014af9a9bc9dfa7917ce4602a03579597ddf184d8de56702512ae","101899");
// print_r($activeIdentityKeys);

//  allIdentityKeys

// $allIdentityKeys = FactomWalletd::allIdentityKeys();
// print_r($allIdentityKeys);

// composeIdentityAttribute
// $attributes = ["key"=>"email","value"=>"hello@factom.com"];
// $composeIdentityAttribute = FactomWalletd::composeIdentityAttribute("3b69dabe22c014af9a9bc9dfa7917ce4602a03579597ddf184d8de56702512ae","3b69dabe22c014af9a9bc9dfa7917ce4602a03579597ddf184d8de56702512ae",$attributes,"idpub2cw4NS4JZowXTwhGeo2tTGNvnjc5n2QvHBURdvVFCKRDuLEnBh","3b69dabe22c014af9a9bc9dfa7917ce4602a03579597ddf184d8de56702512ae","EC2ZFTmTv5Fs7UyKZzxY8km4jF635VkhR5KKBMzNP4BK4fPKaVw4",false);
// print_r($composeIdentityAttribute);

// compose-identity-attribute-endorsement

// $composeIdentityAttributeEndorsement = FactomWalletd::composeIdentityAttributeEndorsement("3b69dabe22c014af9a9bc9dfa7917ce4602a03579597ddf184d8de56702512ae","c07f1d89bb6c43e7e3166b9e53672110ff8077c367758fbe4265561c8b91e675","idpub2cw4NS4JZowXTwhGeo2tTGNvnjc5n2QvHBURdvVFCKRDuLEnBh","2321663B3B8A09CB4E701B84DEE49ABCE3C9D3EFDE867A9875E536D5ECEB653C","EC2ZFTmTv5Fs7UyKZzxY8km4jF635VkhR5KKBMzNP4BK4fPKaVw4","false");
//  print_r($composeIdentityAttributeEndorsement);

// compose-identity-key-replacement 

// $composeIdentityKeyReplacement = FactomWalletd::composeIdentityKeyReplacement("3b69dabe22c014af9a9bc9dfa7917ce4602a03579597ddf184d8de56702512ae","idpub2GU1Pcax2PibH8hHZg58fKRiSJKQWQkWYkpmt7VH1jCXBgqp9w","idpub2cw4NS4JZowXTwhGeo2tTGNvnjc5n2QvHBURdvVFCKRDuLEnBh","idpub2GU1Pcax2PibH8hHZg58fKRiSJKQWQkWYkpmt7VH1jCXBgqp9w","EC2ZFTmTv5Fs7UyKZzxY8km4jF635VkhR5KKBMzNP4BK4fPKaVw4","false");
//  print_r($composeIdentityKeyReplacement);

 // importIdentityKeys
//  $importIdentityKeys = FactomWalletd::importIdentityKeys("idsec2rWrfNTD1x9HPPesA3fz8dmMNZdjmSBULHx8VTXE1J4D9icmAK","idsec1iuqCFoiEfSZ1rU2FNpa7oFY3Kc29hHxP1R2PDyacJQEA8iShB");
//  print_r($importIdentityKeys);

// removeAddress
// $removeAddress = FactomWalletd::removeAddress("EC3geo9QBmA1UGiwDApHHxoNQu5Xkc9rdBsk1XqPJP4ycDUGpooX");
// print_r($removeAddress);

// remove-identity-key
// $removeIdentityKey = FactomWalletd::removeIdentityKey("idpub26PEBWuumVp19yUSpfGJ2HPrTrU7hgw5empU7FPiTHdCKoy5Ao");
// print_r($removeIdentityKey);


// sign-data  
// $signData = FactomWalletd::signData("FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q");
// print_r($signData);

// unlock-wallet  
// $unlockWallet = FactomWalletd::unlockWallet("opensesame",300);
// print_r($unlockWallet);

// $importKoinify = FactomWalletd::importKoinify("yellow yellow yellow yellow yellow yellow yellow yellow yellow yellow yellow yellow");
// print_r($importKoinify);

//properties

// $properties = FactomWalletd::properties();
// print_r($properties);

//wallet backup 

// $walletBackup = FactomWalletd::walletBackup();
// print_r($walletBackup);

// walletBalances

// $walletBalances = FactomWalletd::walletBalances();
// print_r($walletBalances);


// errrors

// $errors = FactomWalletd::errors();
// print_r($errors);

// minute

// $currentMinute = Minute::currentMinute();
// print_r($currentMinute);

/* Pending */

//pending entries
// $pendingEntries = Pending::pendingEntries();
// print_r($pendingEntries);

// pending transaction
// $pendingTransactions = Pending::pendingTransactions("FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q");
// print_r($pendingTransactions);

/* Transaction */

// transaction

// $transaction = Transaction::transaction("64251aa63e011f803c883acf2342d784b405afa59e24d9c5506c84f6c91bf18b");
// print_r($transaction);

// addEcOutput

// $addEcOutput = Transaction::addEcOutput("TX_NAME","EC21V2eZZ8TBDfniSaad2iKhgzp9yyabDDik7WHpVwLrzWJ5iSE6",10000);
// print_r($addEcOutput);


// addFee

// $addFee = Transaction::addFee("TX_NAME","FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q","10000");
// print_r($addFee);


// addInput

// $addInput = Transaction::addInput("TX_NAME","FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q","2000000000");
// print_r($addInput);

// addOutput

// $addOutput = Transaction::addOutput("TX_NAME","FA2H7gecy8Nr7cxF7ngtByW23PxvrysuzYMAiAhbRTddCWZTLs4P",1000000000);
// print_r($addOutput);


// composeTransaction

// $composeTransaction = Transaction::composeTransaction("TX_NAME");
// print_r($composeTransaction);

// deleteTransaction

// $deleteTransaction = Transaction::deleteTransaction("TX_NAME");
// print_r($deleteTransaction);

//new Transaction
 
// $newTransaction = Transaction::newTransaction("TX_NAME");
// print_r($newTransaction);

//sign-transaction
// $signTransaction = Transaction::signTransaction("TX_NAME");
// print_r($signTransaction);

//subFee
// $subFee = Transaction::subFee("TX_NAME","FA2H7gecy8Nr7cxF7ngtByW23PxvrysuzYMAiAhbRTddCWZTLs4P");
// print_r($subFee);

//tmp-transactions
// $tmpTransactions = Transaction::tmpTransactions();
// print_r($tmpTransactions);

// transactionsRetrieving 
// $transactionsRetrieving = Transaction::transactionsRetrieving(1,2);
// print_r($transactionsRetrieving);

//transactionsRetrievingByTxid
// $transactionsRetrievingByTxid = Transaction::transactionsRetrievingByTxid("f1d9919829fa71ce18caf1bd8659cce8a06c0026d3f3fffc61054ebb25ebeaa0");
// print_r($transactionsRetrievingByTxid);

//transactionsRetrievingByAddress
// $transactionsRetrievingByAddress = Transaction::transactionsRetrievingByAddress("FA2vGRwutdPdTHQa7kkpX3LkSgqKQ1MS2nur4UqbxqP5MGHcziWa");
// print_r($transactionsRetrievingByAddress);

//all transactions

// $allTransactions = Transaction::AllTransactions();
// print_r($allTransactions);

// send transaction
// $data = [
//     "txname" => "test1234",
//     "inputAddress" => "FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q",
//     "inputAmount" => 1000012000,
//     "outputAddress" => "FA2yeHMMJR6rpjRYGe3Q4ogThHUmByk3WLhTjQDvPrxDoTYF8BbC",
//     "outputAmount" => 1000000000
// ];
// $transaction = Transaction::sendTransaction($data);
// print_r($transaction);