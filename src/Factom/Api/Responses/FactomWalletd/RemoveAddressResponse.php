<?php
namespace Factom\Api\Responses\FactomWalletd;

//one-to-one mapping for main object
class RemoveAddressResponse
{
    public $success;          //Boolean
    function __construct(array $data) {
        $this->success = false;
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}