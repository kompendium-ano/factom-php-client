<?php
namespace Factom\Api\Responses\Block;

//one-to-one mapping for main object
class DirectoryBlockHeadResponse
{
    public $keymr;     //String
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}