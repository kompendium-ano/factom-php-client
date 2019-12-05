<?php
namespace Factom\Api\Responses\Transaction;

//one-to-one mapping for main object
class TransactionsResponse
{
    public $transactions;                   //Array
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if( property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}