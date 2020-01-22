<?php
namespace Factom\Api\Responses\FactomWalletd;

//one-to-one mapping for main object
class ActiveIdentityKeysResponse
{
    public $chainid;                 //String
    public $height;                  //Int
    public $keys;                    //Array
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}