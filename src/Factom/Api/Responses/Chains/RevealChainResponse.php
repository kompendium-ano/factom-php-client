<?php
namespace Factom\Api\Responses\Chains;

//one-to-one mapping for main object
class RevealChainResponse
{
    public $message;            //String
    public $entryhash;          //String
    public $chainid;            //String
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}