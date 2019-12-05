<?php
namespace Factom\Api\Responses\FactomWalletd;

//one-to-one mapping for main object
class GetHeightResponse
{
    public $height;                    //Int
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}