<?php
namespace Factom\Api\Responses\Block;

// one-to-one mapping for commitdata field object
class Header
{
    public $blocksequencenumber;        //String
    public $chainid;                    //String
    public $prevkeymr;                  //String
    public $timestamp;                  //Int
    public $dbheight;                   //String
}

//one-to-one mapping for main object
class EntryBlockResponse
{
    public $header;         //Header
    public $entrylist;      //Object
    function __construct(array $data) {
        $this->header = new Header();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}