<?php
namespace Factom\Api\Responses\Entry;

//one-to-one mapping for main object
class CommitEntryResponse
{
    public $message;    //String
    public $txid;       //String
    public $entryhash;  //String
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}