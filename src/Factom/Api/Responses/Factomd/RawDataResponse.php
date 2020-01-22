<?php
namespace Factom\Api\Responses\Factomd;

//one-to-one mapping for main object
class RawDataResponse
{
    public $data;          //String
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}