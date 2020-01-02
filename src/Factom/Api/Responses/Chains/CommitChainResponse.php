<?php
namespace Factom\Api\Responses\Chains;

//one-to-one mapping for main object
class CommitChainResponse
{
    public $message;            //String
    public $txid;               //String
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