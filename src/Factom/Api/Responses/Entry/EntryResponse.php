<?php
namespace Factom\Api\Responses\Entry;
// one-to-one mapping for commitdata field object
class CommitData
{
    public $transactiondate;       //long
    public $transactiondatestring; //String
    public $blockdate;             //long
    public $blockdatestring;       //String
    public $status;                //String
}
// one-to-one mapping for inner entrydata field object
class EntryData
{
    public $blockdate;       //long
    public $blockdatestring; //String
    public $status;          //String
}
//one-to-one mapping for main object
class EntryResponse
{
    public $committxid; //String
    public $entryhash;  //String
    public $commitdata; //CommitData
    public $entrydata;  //EntryData
    function __construct(array $data) {
        $this->commitdata = new CommitData();
        $this->entrydata = new EntryData();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}