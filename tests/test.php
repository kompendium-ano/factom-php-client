<?php 
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config.php';
use FactomApi\FactomAddress;
use FactomApi\AddressBalance;
use FactomApi\CreateFactomChain;
use FactomApi\ReadFactomChain;
use FactomApi\ImportAddress;
use FactomApi\Transaction;


/* New */
use FactomApi\Blocks;
use FactomApi\Chains;
use FactomApi\Commits;
use FactomApi\Minute;
use FactomApi\Entry;
use FactomApi\Factoid;
use FactomApi\Pending;
use FactomApi\Factomd;
use FactomApi\FactomWalletd;
use FactomApi\Debug;

/* Block */
 
// get ablock by height
$ablock = Blocks::ablockByHeight();

// ack
//$ack = Blocks::ack("e96cca381bf25f6dd4dfdf9f7009ff84ee6edaa3f47f9ccf06d2787482438f4b","f9164cd66af9d5773b4523a510b5eefb9a5e626480feeb6671ef2d17510ca300");

// admin block
//$adminblock = Blocks::adminBlock('cc03cb3558b6b1acd24c5439fadee6523dd2811af82affb60f056df3374b39ae');

// dblock By Height
//$dblockbyheight = Blocks::dblockByHeight(14460);

// directory block
//$dirblock = Blocks::directoryBlock("73f310bfc2e1b2206417d84db7f75f76f9cb9ff4aa3fdd1301172d5156c9807e");

//directory Block Head

//$dirblockhead = Blocks::directoryBlockHead();

// ecblock by height 

//$ecblockByHeight = Blocks::ecblockByHeight();

// entry block

//$entryblock = Blocks::entryBlock("041c3fed14469a3d0f1a022e3d5321583065e691edb9223605c86766ff881883");

// entry credit block

//$entrycreditblock = Blocks::entryCreditBlock("2050b16701f29238d6b99bcf3fb0ca55d6d884139601f06691fc370cda659d60");


// factoid block 

//$factoidBlock = Blocks::factoidBlock("1df843ee64f4b139047617a2df1007ea4470fabd097ddf87acabc39813f71480");

// fblock by height

//$fblockByHeight = Blocks::fblockByHeight();

// chain id

//$chainHead = Chains::chainHead("000000000000000000000000000000000000000000000000000000000000000f");

//commit chain

//$chainHead = Chains::commitChain("00015507b2f70bd0165d9fa19a28cfaafb6bc82f538955a98c7b7e60d79fbf92655c1bff1c76466cb3bc3f3cc68d8b2c111f4f24c88d9c031b4124395c940e5e2c5ea496e8aaa2f5c956749fc3eba4acc60fd485fb100e601070a44fcce54ff358d606698547340b3b6a27bcceb6a42d62a3a8d02a6f0d73653215771de243a63ac048a18b59da2946c901273e616bdbb166c535b26d0d446bc69b22c887c534297c7d01b2ac120237086112b5ef34fc6474e5e941d60aa054b465d4d770d7f850169170ef39150b");

// reveal chain

//$revealChain = Chains::revealChain("007E18CCC911F057FB111C7570778F6FDC51E189F35A6E6DA683EC2A264443531F000E0005746573745A0005746573745A48656C6C6F20466163746F6D21");

// compose chain

//$composeChain = Chains::composeChain();

// commit entry 
//$commitEntry = Commits::commitEntry("00015507C1024BF5C956749FC3EBA4ACC60FD485FB100E601070A44FCCE54FF358D60669854734013B6A27BCCEB6A42D62A3A8D02A6F0D73653215771DE243A63AC048A18B59DA29F4CBD953E6EBE684D693FDCA270CE231783E8ECC62D630F983CD59E559C6253F84D1F54C8E8D8665D493F7B4A4C1864751E3CDEC885A64C2144E0938BF648A00");


// cuurent minute
//$commitEntry = Minute::currentMinute();


// entry
//$entry = Entry::entry();

// entry ack

//$entryAck = Entry::entryAck("9228b4b080b3cf94cceea866b74c48319f2093f56bd5a63465288e9a71437ee8");

// entry block

//$entryBlock = Entry::entryBlock("041c3fed14469a3d0f1a022e3d5321583065e691edb9223605c86766ff881883");

// entry credit balance

//$entryCreditBalance = Entry::entryCreditBalance("EC2DKSYyRcNWf7RS963VFYgMExoHRYLHVeCfQ9PGPmNzwrcmgm2r");

// entry credit block

//$entryCreditBlock = Entry::entryCreditBlock("2050b16701f29238d6b99bcf3fb0ca55d6d884139601f06691fc370cda659d60");

//enter credit rate

//$entryCreditRate = Entry::entryCreditRate();

//reveal entry

//$revealEntry = Entry::revealEntry("007E18CCC911F057FB111C7570778F6FDC51E189F35A6E6DA683EC2A264443531F000E0005746573745A0005746573745A48656C6C6F20466163746F6D21");

// compose Entry 

//$composeEntry = Entry::composeEntry();

// factoid Ack

//$factoidAck = Factoid::factoidAck("f1d9919829fa71ce18caf1bd8659cce8a06c0026d3f3fffc61054ebb25ebeaa0");

// factoid balance

//$factoidBalance = Factoid::factoidBalance("FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q");

//factoid block

//$factoidBlock = Factoid::factoidBlock("1df843ee64f4b139047617a2df1007ea4470fabd097ddf87acabc39813f71480");

// factoid submit 

//$factoidSubmit = Factoid::factoidSubmit("0201565d109233010100b0a0e100646f3e8750c550e4582eca5047546ffef89c13a175985e320232bacac81cc428afd7c200ce7b98bfdae90f942bc1fe88c3dd44d8f4c81f4eeb88a5602da05abc82ffdb5301718b5edd2914acc2e4677f336c1a32736e5e9bde13663e6413894f57ec272e28dc1908f98b79df30005a99df3c5caf362722e56eb0e394d20d61d34ff66c079afad1d09eee21dcd4ddaafbb65aacea4d5c1afcd086377d77172f15b3aa32250a");

// height 

//$height = Factomd::height();

// multiple Ec Balances
//$multipleEcBalances = Factomd::multipleEcBalances("EC293AbTn3VScgC2m86xTh2kFKAMNnkgoLdXgywpPa66Jacom5ya","EC3ExcVhmGRJmavCf1LCMu8YiHCyU2CWVh5DmXRz6jfPHMbzJSCz");

// multiple FCT Balances
//$multipleFctBalances = Factomd::multipleFctBalances("FA3uMAv9htC5y5u3ayzxNQKZNDpgrJVf49kJSKdVNxcYoNBbSLXc","FA3umgJaXdHjpSQyBUPC2uMFuoW9nM5Ymm8Sa2f2VKGSqsyx79nf");

// multiple FCT Balances
//$multipleFctBalances = Factomd::multipleFctBalances("FA3uMAv9htC5y5u3ayzxNQKZNDpgrJVf49kJSKdVNxcYoNBbSLXc","FA3umgJaXdHjpSQyBUPC2uMFuoW9nM5Ymm8Sa2f2VKGSqsyx79nf");


// pending entries
//$pendingEntries = Pending::pendingEntries();

// pending transaction
//$pendingTransactions = Pending::pendingTransactions("FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q");

// properties
//$properties = Factomd::properties();


// raw data
//$rawData = Factomd::rawData("0ae2ab2cf543eed52a13a5a405bded712444cc8f8b6724a00602e1c8550a4ec2");

// receipt  
//$receipt = Factomd::receipt("0ae2ab2cf543eed52a13a5a405bded712444cc8f8b6724a00602e1c8550a4ec2");

//send raw message

//$sendRawMessage = Chains::sendRawMessage("00015fc6dbeaccfab82063af4a2890f89c243a9a3db2cce041e9352a1df32731d302917c38b229985e890c7d0d4c76e84a283011ba165ccee3524dd91fb417c2550c6d1c42d3bd23af5f7c05a89c0097eed7378c60b8bcc89a284094a81da85fb8faab7b2972470cb64dfb9c542844a0724222d53b86c85baa6fe49cc01fb5e8d26e08ce4690b0e3933bf1f6c5c15b28a33eb504f87c07f7bb51691b90cb3326d62b4b97802db3c6dccc9b0108f2c06cac0b7968e9f1f6aabb126f9aa58bc8eae21f2383729cb703");


// get address 
//$address = FactomAddress::address("FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q");

//get all addresses 
//$alladdresses = FactomAddress::allAddresses();


// generate ec address
//$address = FactomAddress::generateEcAddress();

// generate Factoid Address

//$address = FactomAddress::generateFactoidAddress();

//get height

//$height = FactomWalletd::getHeight();

// transaction

//$transaction = Transaction::transaction("64251aa63e011f803c883acf2342d784b405afa59e24d9c5506c84f6c91bf18b");

// addEcOutput

//$addEcOutput = Transaction::addEcOutput("TX_NAME","EC21V2eZZ8TBDfniSaad2iKhgzp9yyabDDik7WHpVwLrzWJ5iSE6","10000");

// addFee

//$addFee = Transaction::addFee("TX_NAME","FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q","10000");

// addInput

//$addInput = Transaction::addInput("TX_NAME","FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q","2000000000");

// addOutput

//$addOutput = Transaction::addOutput("TX_NAME","FA2H7gecy8Nr7cxF7ngtByW23PxvrysuzYMAiAhbRTddCWZTLs4P","1000000000");

// composeTransaction

//$composeTransaction = Transaction::composeTransaction("TX_NAME");

// deleteTransaction

//$deleteTransaction = Transaction::deleteTransaction("TX_NAME");

// importaddress

//$importaddress = FactomAddress::importAddresses("Fs2G4Hs9YxqBZ8TkfyWwNKmJbwet3Zg1JNXt8MrQReCEph6rGt9v");

// importKoinify

//$importKoinify = FactomWalletd::importKoinify("yellow yellow yellow yellow yellow yellow yellow yellow yellow yellow yellow yellow");

//new Transaction
 
//$newTransaction = Transaction::newTransaction("TX_NAME");

// properties

//$properties = FactomWalletd::properties();

//sign-transaction
//$signTransaction = Transaction::signTransaction("TX_NAME");

//sign-transaction
//$subFee = Transaction::subFee("TX_NAME","FA2H7gecy8Nr7cxF7ngtByW23PxvrysuzYMAiAhbRTddCWZTLs4P");

//tmp-transactions
//$tmpTransactions = Transaction::tmpTransactions();

// transactionsRetrieving 
//$transactionsRetrieving = Transaction::transactionsRetrieving('1','2');

//transactionsRetrievingByTxid
//$transactionsRetrievingByTxid = Transaction::transactionsRetrievingByTxid("f1d9919829fa71ce18caf1bd8659cce8a06c0026d3f3fffc61054ebb25ebeaa0");

//transactionsRetrievingByAddress
//$transactionsRetrievingByAddress = Transaction::transactionsRetrievingByAddress("FA2vGRwutdPdTHQa7kkpX3LkSgqKQ1MS2nur4UqbxqP5MGHcziWa");

//all transactions

//$allTransactions = Transaction::AllTransactions();

// wallet back up

//$walletBackup = FactomWalletd::walletBackup();

// wallet Balances
//$walletBalances = FactomWalletd::walletBalances();

// errors

//$errors = FactomWalletd::errors();

// holdingQueue
//$holdingQueue = Debug::holdingQueue();

// networkInfo

//$networkInfo = Debug::networkInfo();

// predictiveFer

//$predictiveFer = Debug::predictiveFer();

// auditServers

//$auditServers = Debug::auditServers();


// federatedServers

//$federatedServers = Debug::federatedServers();


// configuration

//$configuration = Debug::configuration();

// processList

//$processList = Debug::processList();

// authorities

//$authorities = Debug::authorities();

// reloadConfiguration

//$reloadConfiguration = Debug::reloadConfiguration();

// dropRate

//$dropRate = Debug::dropRate();

// setDropRate

//$setDropRate = Debug::setDropRate(10);

// delay

//$delay = Debug::delay();

// setDelay

//$setDelay = Debug::setDelay(10);

// summary

//$summary = Debug::summary();

//messages

//$messages = Debug::messages();

// securityEncryptedConnections
//$securityEncryptedConnections = Debug::securityEncryptedConnections();

// securityPasswordProtection
//$securityPasswordProtection = Debug::securityPasswordProtection();


// security‌CombinedPasswordAndEncryption
//$security‌CombinedPasswordAndEncryption = Debug::security‌CombinedPasswordAndEncryption();










// generate factoid address
// $factoidAddress = FactomAddress::generateFactoidAddress();
// print_r($factoidAddress);

// // import private key
// $data = ImportAddress::importPrivateKey("Es3tXbGBVKZDhUWzDKzQtg4rcpmmHPXAY9vxSM2JddwJSD5td3f8");
// print_r($data);

// // get factoid address balance
// $data = AddressBalance::getFactoidAddressBalance("FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q");
// print_r($data);

// // get ec address balance
// $data = AddressBalance::getECAddressBalance("EC2DKSYyRcNWf7RS963VFYgMExoHRYLHVeCfQ9PGPmNzwrcmgm2r");
// print_r($data);

// // create a factom chain
// $data = CreateFactomChain::createFactomChain("EC3HUt3iJMFvvq2tmpwqpY4pPxnCtXizPjUduGeZWiC4f4j7XihX");
// print_r($data);

// // Make a Factom Entry
// $data = CreateFactomChain::makeFactomEntry("e43f2910f653d364a75fe664053ba66c146e830df0a72b21cb3fa0833697a946", "EC3HUt3iJMFvvq2tmpwqpY4pPxnCtXizPjUduGeZWiC4f4j7XihX");
// print_r($data);

// // Read Factom Entry
// $data = ReadFactomChain::readChainEntry("b11bb4e1dacea726224c05bf863092ba02d301de55c08039f381e6e0ad1cef0d");
// print_r($data);

// // send transaction
// $data = [
//     "txname" => "test1",
//     "inputAddress" => "FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q",
//     "inputAmount" => 1000012000,
//     "outputAddress" => "FA2yeHMMJR6rpjRYGe3Q4ogThHUmByk3WLhTjQDvPrxDoTYF8BbC",
//     "outputAmount" => 1000000000
// ];
// $transaction = Transaction::sendTransaction($data);
// print_r($transaction);