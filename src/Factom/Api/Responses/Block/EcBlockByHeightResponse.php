<?php
namespace Factom\Api\Responses\Block;

// one-to-one mapping for commitdata field object
class Body
{
    public $entries;                    //Object
}

// one-to-one mapping for commitdata field object
class Header
{
    public $bodyhash;                   //String
    public $prevheaderhash;             //String
    public $prevfullhash;               //String
    public $dbheight;                   //Int
    public $headerexpansionarea;        //String
    public $objectcount;                //Int
    public $bodysize;                   //Int
    public $chainid;                    //String
    public $ecchainid;                  //String
}
// one-to-one mapping for commitdata field object
class EcBlock
{
    public $header;             //Header
    public $body;               //Body
    function __construct() {
        $this->header = new Header();
        $this->body = new Body();
    }
}
//one-to-one mapping for main object
class EcBlockByHeightResponse
{
    public $ecblock;     //EcBlock
    public $rawdata;    //String
    function __construct(array $data) {
        $this->ecblock = new EcBlock();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}