<?php
namespace Factom\Api\Responses\FactomWalletd;

//one-to-one mapping for main object
class FctAccountBalances
{
    public $ack;        //Int
    public $saved;      //Int
}

//one-to-one mapping for main object
class WalletBalancesResponse
{
    public $fctaccountbalances;         //FctAccountBalances
    public $ecaccountbalances;          //EcAccountBalances
    function __construct(array $data) {
        $this->fctaccountbalances = new FctAccountBalances();
        $this->ecaccountbalances = new FctAccountBalances();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}