<?php
namespace Factom\Api\Responses\Block;


// one-to-one mapping for commitdata field object
class Header
{
    public $version;                    //Int
    public $networkid;                  //Int
    public $bodymr;                     //String
    public $prevkeymr;                  //String
    public $prevfullhash;               //String
    public $timestamp;                  //Int
    public $dbheight;                   //Int
    public $blockcount;                 //Int
    public $chainid;                    //String
}
// one-to-one mapping for commitdata field object
class ABlock
{
    public $header;             //Header
    public $dbentries;          //Object
    public $dbhash;             //long
    public $keymr;              //String
    function __construct() {
        $this->header = new Header();
    }
}
//one-to-one mapping for main object
class DbBlockByHeightResponse
{
    public $dblock;     //ABlock
    public $rawdata;    //String
    function __construct(array $data) {
        $this->dblock = new ABlock();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}