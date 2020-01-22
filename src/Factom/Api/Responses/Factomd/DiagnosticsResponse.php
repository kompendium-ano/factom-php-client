<?php
namespace Factom\Api\Responses\Factomd;

//one-to-one mapping for main object
class Syncing
{
    public $status;                 //String
    public $received;               //Int
    public $expected;               //Int
    public $missing;                //Array
}
//one-to-one mapping for main object
class Authset
{
    public $leaders;        //Array
    public $audits;        //Array
}
//one-to-one mapping for main object
class Elections
{
    public $inprogress;        //Boolean
}

//one-to-one mapping for main object
class DiagnosticsResponse
{
    public $name;                       //String
    public $id;                         //String
    public $publickey;                  //String
    public $role;                       //String
    
    public $leaderheight;               //Int
    public $currentheight;              //Int
    public $currentminute;              //Int
    public $currentminuteduration;      //Int
    public $previousminuteduration;     //Int
    public $balancehash;                //String
    public $tempbalancehash;            //String
    public $lastblockfromdbstate;       //Boolean
    public $syncing;                    //Syncing
    public $authset;                    //Authset
    public $elections;                  //Elections
    function __construct(array $data) {
        $this->syncing=new Syncing();
        $this->authset=new Authset();
        $this->elections=new Elections();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}