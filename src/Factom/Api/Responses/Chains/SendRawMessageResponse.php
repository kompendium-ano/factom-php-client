<?php
namespace Factom\Api\Responses\Chains;

//one-to-one mapping for main object
class Params
{
    public $message; //String
}
//one-to-one mapping for main object
class SendRawMessageResponse
{
    public $id; //Int
    public $method; //String
    public $params; //Params
    function __construct(array $data) {
        $this->params = new Params();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}