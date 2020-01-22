<?php
namespace Factom\Api\Responses\Block;


// one-to-one mapping for commitdata field object
class Header
{
    public $prevbackrefhash;            //String
    public $dbheight;                   //Int
    public $headerexpansionsize;        //Int
    public $headerexpansionarea;        //String
    public $messagecount;               //Int
    public $bodysize;                   //Int
    public $adminchainid;               //String
    public $chainid;                    //String
}
// one-to-one mapping for commitdata field object
class ABlock
{
    public $header;             //Header
    public $abentries;          //Object
    public $backreferencehash;  //long
    public $lookuphash;         //String
    function __construct() {
        $this->header = new Header();
    }
}
//one-to-one mapping for main object
class AdminBlockResponse
{
    public $ablock;     //ABlock
    public $rawdata;    //String
    function __construct(array $data) {
        $this->ablock = new ABlock();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}