<?php
namespace Factom\Api\Responses\Block;

// one-to-one mapping for inner entrydata field object
class FBlock
{
    public $bodymr;             //String
    public $prevkeymr;          //String
    public $prevledgerkeymr;    //String
    public $exchrate;           //Int
    public $dbheight;           //Int
    public $transactions;       //Object
    public $chainid;            //String
    public $keymr;              //String
    public $ledgerkeymr;        //String
}
//one-to-one mapping for main object
class FactoidBlockResponse
{
    public $fblock;    //FBlock
    public $rawdata;    //long
    function __construct(array $data) {
        $this->fblock = new FBlock();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}