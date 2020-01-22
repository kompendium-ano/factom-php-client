<?php
namespace Factom\Api\Responses\Factoid;

//one-to-one mapping for main object
class FactoidAckResponse
{
    public $txid;                   //String
    public $transactiondate;        //Int
    public $transactiondatestring;  //String
    public $blockdate;              //Int
    public $blockdatestring;        //String
    public $status;                 //String
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}