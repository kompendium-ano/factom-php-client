<?php
namespace Factom\Api\Responses\Factoid;

//one-to-one mapping for main object
class FactoidSubmitResponse
{
    public $message;    //String
    public $txid;       //long
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}