<?php
namespace Factom\Api\Responses\Factomd;

//one-to-one mapping for main object
class PropertiesResponse
{
    public $factomdversion;          //Int
    public $factomdapiversion;       //Int
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}