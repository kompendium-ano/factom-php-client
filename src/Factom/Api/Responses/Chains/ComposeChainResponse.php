<?php
namespace Factom\Api\Responses\Chains;

//one-to-one mapping for main object
class ComposeResponse
{
    public $id; //Int
    public $params; //Object
    public $method; //String
}

//one-to-one mapping for main object
class ComposeChainResponse
{
    public $commit; //ComposeResponse
    public $reveal; //ComposeResponse
    function __construct(array $data) {
        $this->commit = new ComposeResponse();
        $this->reveal = new ComposeResponse();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}