<?php
namespace Factom\Api\Responses\Factomd;

//one-to-one mapping for main object
class MultipleBalancesResponse
{
    public $currentheight;          //Int
    public $lastsavedheight;        //Int
    public $balances;               //Array
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}