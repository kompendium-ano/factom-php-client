<?php
namespace Factom\Api\Responses\Entry;
// one-to-one mapping for commitdata field object
class CommitData
{
    public $status;                //String
}
// one-to-one mapping for inner entrydata field object
class EntryData
{
    public $status;          //String
}
//one-to-one mapping for main object
class EntryAckResponse
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