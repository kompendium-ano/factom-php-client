<?php
namespace Factom\Api\Responses\FactomAddress;

//one-to-one mapping for main object
class AllAddressResponse
{
    public $addresses;          //Address
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}