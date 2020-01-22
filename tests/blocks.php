<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__."/../config.php";

use Factom\Api\Blocks;


// get ablock by height

$ablock = Blocks::ablockByHeight();
print_r($ablock);

// ack

$ack = Blocks::ack("e96cca381bf25f6dd4dfdf9f7009ff84ee6edaa3f47f9ccf06d2787482438f4b","f9164cd66af9d5773b4523a510b5eefb9a5e626480feeb6671ef2d17510ca300");
print_r($ack);

// admin block

$adminblock = Blocks::adminBlock('32ca53bbcee1c741bee9a9bfa722bebed70f7ee5d4286c7774d9a359e5bbe8f2');
print_r($adminblock);

// dblock By Height

$dblockbyheight = Blocks::dblockByHeight(14460);
print_r($dblockbyheight);

// directory block

$dirblock = Blocks::directoryBlock("9d6160f657d336aa6b637e2a32406ff29549a9ce23ccdfe097279cb1c7b9a468");
print_r($dirblock);

//directory Block Head

$dirblockhead = Blocks::directoryBlockHead();
print_r($dirblockhead);

// ecblock by height 

$ecblockByHeight = Blocks::ecblockByHeight();
print_r($ecblockByHeight);

// entry block

$entryblock = Blocks::entryBlock("041c3fed14469a3d0f1a022e3d5321583065e691edb9223605c86766ff881883");
print_r($entryblock);

// entry credit block

$entrycreditblock = Blocks::entryCreditBlock("ff0359c3872dd856ee187de786c1293fcabc2dcfee9facfb1b9444762ef01653");
print_r($entrycreditblock);


// factoid block 

$factoidBlock = Blocks::factoidBlock("a4552ef041a54b8886eecca5656d8377bdc98e6aaf554daa41ae50fa2af6b949");
print_r($factoidBlock);

// fblock by height

$fblockByHeight = Blocks::fblockByHeight(101994);
print_r($fblockByHeight);


