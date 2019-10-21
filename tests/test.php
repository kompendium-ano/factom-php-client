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


/* Block */

// get ablock by height
// $ablock = Blocks::ablockByHeight();
// print_r($ablock);

// ack
// $ack = Blocks::ack("e96cca381bf25f6dd4dfdf9f7009ff84ee6edaa3f47f9ccf06d2787482438f4b","f9164cd66af9d5773b4523a510b5eefb9a5e626480feeb6671ef2d17510ca300");
// print_r($ack);

// admin block
// $adminblock = Blocks::adminBlock('ca207283880a5e58856a70cb8723d7b0f28051ec51ebc1c45642678228aed384');
// print_r($adminblock);

// dblock By Height
// $dblockbyheight = Blocks::dblockByHeight(14460);
// print_r($dblockbyheight);

// directory block
// $dirblock = Blocks::directoryBlock("73f310bfc2e1b2206417d84db7f75f76f9cb9ff4aa3fdd1301172d5156c9807e");
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

// $fblockByHeight = Blocks::fblockByHeight();
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
// $sendRawMessage = Chains::sendRawMessage("00015fc6dbeaccfab82063af4a2890f89c243a9a3db2cce041e9352a1df32731d302917c38b229985e890c7d0d4c76e84a283011ba165ccee3524dd91fb417c2550c6d1c42d3bd23af5f7c05a89c0097eed7378c60b8bcc89a284094a81da85fb8faab7b2972470cb64dfb9c542844a0724222d53b86c85baa6fe49cc01fb5e8d26e08ce4690b0e3933bf1f6c5c15b28a33eb504f87c07f7bb51691b90cb3326d62b4b97802db3c6dccc9b0108f2c06cac0b7968e9f1f6aabb126f9aa58bc8eae21f2383729cb703");
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
// $securityEncryptedConnections = Debug::securityEncryptedConnections();
// print_r($securityEncryptedConnections);

// securityPasswordProtection
// $securityPasswordProtection = Debug::securityPasswordProtection();
// print_r($securityPasswordProtection);

// security‌CombinedPasswordAndEncryption
//  $security‌CombinedPasswordAndEncryption = Debug::security‌CombinedPasswordAndEncryption();
//  print_r($security‌CombinedPasswordAndEncryption);

/* Entry */

// entry block


// entry
// $entry = Entry::entry("24674e6bc3094eb773297de955ee095a05830e431da13a37382dcdc89d73c7d7");
// print_r($entry);

// entry ack

// $entryAck = Entry::entryAck("9228b4b080b3cf94cceea866b74c48319f2093f56bd5a63465288e9a71437ee8");
// print_r($entryAck);

// entry block

// $entryBlock = Entry::entryBlock("041c3fed14469a3d0f1a022e3d5321583065e691edb9223605c86766ff881883");
// print_r($entryBlock);

// entry credit balance

// $entryCreditBalance = Entry::entryCreditBalance("EC2DKSYyRcNWf7RS963VFYgMExoHRYLHVeCfQ9PGPmNzwrcmgm2r");
// print_r($entryCreditBalance);

// entry credit block

// $entryCreditBlock = Entry::entryCreditBlock("2050b16701f29238d6b99bcf3fb0ca55d6d884139601f06691fc370cda659d60");
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

// $factoidBlock = Factoid::factoidBlock("1df843ee64f4b139047617a2df1007ea4470fabd097ddf87acabc39813f71480");
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

// properties
// $heights = Factomd::heights();
// print_r($heights);

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
// $rawData = Factomd::rawData("914d6d8fdd758e171219abcfb77eda494b1c89c2f4775a33f3035ed1e9f87208");
// print_r($rawData);

// receipt  
// $receipt = Factomd::receipt("0ae2ab2cf543eed52a13a5a405bded712444cc8f8b6724a00602e1c8550a4ec2");
// print_r($receipt);

/* FactomWalletd */

//get height

// $getheight = FactomWalletd::getHeight();
// print_r($getheight);

// importKoinify

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