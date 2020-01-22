<?php
namespace Factom\Api\Responses\Entry;

//one-to-one mapping for main object
class RevealEntryResponse
{
    public $message; //String
    public $entryhash; //long
    public $chainid; //long
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}