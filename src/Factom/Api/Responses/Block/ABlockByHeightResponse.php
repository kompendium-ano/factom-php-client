<?php
namespace Factom\Api\Responses\Block;


// one-to-one mapping for commitdata field object
class Prevdbsig
{
    public $pub;                        //String
    public $sig;                        //prevdbsig
}
// one-to-one mapping for commitdata field object
class Abentries
{
    public $identityadminchainid;       //String
    public $prevdbsig;                  //Prevdbsig
    
    function __construct() {
        $this->prevdbsig = new Prevdbsig();
    }
}
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
    public $abentries;          //Abentries
    public $backreferencehash;  //long
    public $lookuphash;         //String
    function __construct() {
        $this->header = new Header();
    }
}
//one-to-one mapping for main object
class ABlockByHeightResponse
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