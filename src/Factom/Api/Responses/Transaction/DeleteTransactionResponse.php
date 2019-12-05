<?php
namespace Factom\Api\Responses\Transaction;

//one-to-one mapping for main object
class DeleteTransactionResponse
{
    public $signed;                 //Boolean
    public $name;                   //String
    public $timestamp;              //Number
    public $totalecoutputs;         //Int
    public $totalinputs;            //Int
    public $totaloutputs;           //Int
    public $inputs;                 //null
    public $outputs;                //null
    public $ecoutputs;              //null
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}