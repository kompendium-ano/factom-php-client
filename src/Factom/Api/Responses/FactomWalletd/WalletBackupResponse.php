<?php
namespace Factom\Api\Responses\FactomWalletd;

//one-to-one mapping for main object
class WalletBackupResponse
{
    public $addresses;       //Array
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if($key=="wallet-seed" || property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}