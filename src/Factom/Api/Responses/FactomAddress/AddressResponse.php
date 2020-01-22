<?php
namespace Factom\Api\Responses\FactomAddress;

//one-to-one mapping for main object
class AddressResponse
{
    public $public;          //String
    public $secret;          //String
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}