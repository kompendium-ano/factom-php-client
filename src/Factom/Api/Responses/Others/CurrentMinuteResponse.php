<?php
namespace Factom\Api\Responses\Others;

//one-to-one mapping for main object
class CurrentMinuteResponse
{
    public $leaderheight;               //Int
    public $directoryblockheight;       //Int
    public $minute;                     //Int
    public $currentblockstarttime;      //Int
    public $currentminutestarttime;     //Int
    public $currenttime;                //Int
    public $directoryblockinseconds;    //Int
    public $stalldetected;              //Int
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}