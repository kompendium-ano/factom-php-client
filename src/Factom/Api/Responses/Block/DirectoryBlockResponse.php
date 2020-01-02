<?php
namespace Factom\Api\Responses\Block;


// one-to-one mapping for commitdata field object
class Header
{
    public $prevblockkeymr;                 //String
    public $timestamp;                      //Int
    public $sequencenumber;                 //Int
}
//one-to-one mapping for main object
class DirectoryBlockResponse
{
    public $header;             //Header
    public $entryblocklist;     //Object
    function __construct(array $data) {
        $this->header = new Header();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}