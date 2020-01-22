<?php
namespace Factom\Api\Responses\Transaction;

//one-to-one mapping for main object
class FactoidTransaction
{
    public $millitimestamp;     //Int
    public $inputs;             //Array
    public $outputs;            //Array
    public $outecs;             //Array
    public $rcds;               //Array
    public $sigblocks;          //Array
    public $blockheight;        //Int
}
//one-to-one mapping for main object
class TransactionResponse
{
    public $factoidtransaction;                 //FactoidTransaction
    public $includedintransactionblock;         //String
    public $includedindirectoryblock;           //String
    public $includedindirectoryblockheight;     //String
    function __construct(array $data) {
        $this->factoidtransaction = new FactoidTransaction();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}