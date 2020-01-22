<?php
namespace Factom\Api\Responses\Transaction;

//one-to-one mapping for main object
class AddInputResponse
{
    public $feespaid;                   //Int
    public $signed;                         //Boolean
    public $name;                           //String
    public $timestamp;                      //Int
    public $totalecoutputs;                 //Int
    public $totalinputs;                    //Int
    public $totaloutputs;                   //Int
    public $inputs;                         //Array
    public $outputs;                        //Array
    public $ecoutputs;                      //Array
    public $txid;                           //String
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if( property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}