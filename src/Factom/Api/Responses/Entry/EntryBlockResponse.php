<?php
namespace Factom\Api\Responses\Entry;

//one-to-one mapping for main object
class EntryBlockResponse
{
    public $chainid; //String
    public $content;  //long
    public $extids; //Array
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}