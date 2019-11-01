<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__."/../config.php";

use Factom\Api\Transaction;

// transaction

$transaction = Transaction::transaction("64251aa63e011f803c883acf2342d784b405afa59e24d9c5506c84f6c91bf18b");
print_r($transaction);

// addEcOutput

$addEcOutput = Transaction::addEcOutput("TX_NAME","EC21V2eZZ8TBDfniSaad2iKhgzp9yyabDDik7WHpVwLrzWJ5iSE6",10000);
print_r($addEcOutput);


// addFee

$addFee = Transaction::addFee("TX_NAME","FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q","10000");
print_r($addFee);


// addInput

$addInput = Transaction::addInput("TX_NAME","FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q","2000000000");
print_r($addInput);

// addOutput

$addOutput = Transaction::addOutput("TX_NAME","FA2H7gecy8Nr7cxF7ngtByW23PxvrysuzYMAiAhbRTddCWZTLs4P",1000000000);
print_r($addOutput);


// composeTransaction

$composeTransaction = Transaction::composeTransaction("TX_NAME");
print_r($composeTransaction);

// deleteTransaction

$deleteTransaction = Transaction::deleteTransaction("TX_NAME");
print_r($deleteTransaction);

//new Transaction
 
$newTransaction = Transaction::newTransaction("TX_NAME");
print_r($newTransaction);

//sign-transaction
$signTransaction = Transaction::signTransaction("TX_NAME");
print_r($signTransaction);

//subFee
$subFee = Transaction::subFee("TX_NAME","FA2H7gecy8Nr7cxF7ngtByW23PxvrysuzYMAiAhbRTddCWZTLs4P");
print_r($subFee);

//tmp-transactions
$tmpTransactions = Transaction::tmpTransactions();
print_r($tmpTransactions);

// transactionsRetrieving 
$transactionsRetrieving = Transaction::transactionsRetrieving(1,2);
print_r($transactionsRetrieving);

//transactionsRetrievingByTxid
$transactionsRetrievingByTxid = Transaction::transactionsRetrievingByTxid("f1d9919829fa71ce18caf1bd8659cce8a06c0026d3f3fffc61054ebb25ebeaa0");
print_r($transactionsRetrievingByTxid);

//transactionsRetrievingByAddress
$transactionsRetrievingByAddress = Transaction::transactionsRetrievingByAddress("FA2vGRwutdPdTHQa7kkpX3LkSgqKQ1MS2nur4UqbxqP5MGHcziWa");
print_r($transactionsRetrievingByAddress);

//all transactions

$allTransactions = Transaction::AllTransactions();
print_r($allTransactions);

// send transaction
$data = [
    "txname" => "test1234",
    "inputAddress" => "FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q",
    "inputAmount" => 1000012000,
    "outputAddress" => "FA2yeHMMJR6rpjRYGe3Q4ogThHUmByk3WLhTjQDvPrxDoTYF8BbC",
    "outputAmount" => 1000000000
];
$transaction = Transaction::sendTransaction($data);
print_r($transaction);