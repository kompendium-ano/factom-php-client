<?php
namespace Factom\Api\Responses\Factomd;

//one-to-one mapping for main object
class Entry
{
    public $entryhash;           //String
}
//one-to-one mapping for main object
class Receipt
{
    public $entry;                      //Entry
    public $merklebranch;               //Array
    public $entryblockkeymr;            //String
    public $directoryblockkeymr;        //String
    public $bitcointransactionhash;     //String
    public $bitcoinblockhash;           //String
    function __construct() {
        $this->entry = new Entry();
    }
}
//one-to-one mapping for main object
class ReceiptResponse
{
    public $receipt;          //Receipt
    function __construct(array $data) {
        $this->receipt = new Receipt();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}