<?php
namespace Factom\Api\Responses\FactomWalletd;

//one-to-one mapping for main object
class ErrorsResponse
{
    public $code;           //Real Number
    public $message;        //String
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}