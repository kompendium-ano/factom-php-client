<?php
namespace Factom\Api\Responses\Factomd;

//one-to-one mapping for main object
class Ethereum
{
    public $recordheight;               //Int
    public $dbheightmax;                //Int
    public $dbheightmin;                //Int
    public $windowmr;                   //String
    public $merklebranch;               //Array
    public $contractaddress;            //String
    public $txid;                       //String
    public $blockhash;                  //String
    public $txindex;                    //Int
}
//one-to-one mapping for main object
class Bitcoin
{
    public $transactionhash;        //String
    public $blockhash;              //String
}
//one-to-one mapping for main object
class AnchorsResponse
{
    public $directoryblockheight;       //Int
    public $directoryblockkeymr;        //String
    public $bitcoin;                    //Bitcoin
    public $ethereum;                   //Ethereum
    function __construct(array $data) {
        $this->bitcoin=new Bitcoin();
        $this->ethereum=new Ethereum();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}