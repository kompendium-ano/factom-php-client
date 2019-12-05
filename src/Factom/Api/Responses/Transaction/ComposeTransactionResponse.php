<?php
namespace Factom\Api\Responses\Transaction;

//one-to-one mapping for main object
class Params
{
    public $transaction;     //long
}
//one-to-one mapping for main object
class ComposeTransactionResponse
{
    public $params;       //Params
    public $jsonrpc;      //String
    public $id;           //Int
    public $method;       //String
    function __construct(array $data) {
        $this->params = new Params();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}