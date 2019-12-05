<?php
namespace Factom\Api\Responses\Factomd;

//one-to-one mapping for main object
class HeightResponse
{
    public $directoryblockheight;           //Int
    public $leaderheight;                   //Int
    public $entryblockheight;               //Int
    public $entryheight;                    //Int
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}