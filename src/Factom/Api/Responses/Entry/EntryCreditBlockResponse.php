<?php
namespace Factom\Api\Responses\Entry;
// one-to-one mapping for commitdata field object
class Header
{
    public $bodyhash;               //long
    public $prevheaderhash;         //String
    public $prevfullhash;           //long
    public $dbheight;               //String
    public $headerexpansionarea;    //String
    public $objectcount;            //String
    public $bodysize;               //long
    public $chainid;                //String
    public $ecchainid;              //String
}

// one-to-one mapping for inner entrydata field object
class Body
{
    public $entries;               //Object - [{"serverindexnumber":0},{"number":1},{"version":0,"millitime":"014fd1eafcba","entryhash":"5710aeb50e7ad82b3ad469e91019bc86b360796cfd4c037168ffe9040b7dfec7","credits":1,"ecpubkey":"17ef7a21d1a616d65e6b73f3c6a7ad5c49340a6c2592872020ec60767ff00d7d","sig":"7cd6b1df3d3f9cf519a2437e799ee8acd815a2aeec7d5743295ff476632b070cb4459300a2bef1055e6fbb0c7ff5c62a9695f41be246c566051dd172816d7b06"},{"version":0,"millitime":"014fd1eafcbc","entryhash":"ae8088e67f5bc7023f1b9dd84022c41067e8777e6436f73fc2384511ae637122","credits":1,"ecpubkey":"17ef7a21d1a616d65e6b73f3c6a7ad5c49340a6c2592872020ec60767ff00d7d","sig":"5b126ac909fff2f0553e6b02d559478e95be3af80926b710e1fa086b177fb5ae2b065737d58375924653f70527695a3c1c84823acc6d83000347fbecf49eca0a"},{"version":0,"millitime":"014fd1eafcd7","entryhash":"5685ab402185def2ee2639be7a119d1fbf66114ce923c585bf20920c839ed1a7","credits":1,"ecpubkey":"17ef7a21d1a616d65e6b73f3c6a7ad5c49340a6c2592872020ec60767ff00d7d","sig":"0213cf5675124b211d16cb3c0c35f3cf87fa83e6970d0e7eb1feadd49bbd774878edc18066afe75b32fe525be4720326f622df0fa13afc5ad6653e6a0cf0e607"},{"number":2},{"number":3},{"number":4},{"number":5},{"number":6},{"number":7 },{"number":8},{"number":9},{"number":10}]
}
// one-to-one mapping for inner entrydata field object
class EcBlock
{
    public $header;     //Header
    public $body;       //Body
    function __construct() {
        $this->$header = new Header();
        $this->$body = new Body();
    }
}
//one-to-one mapping for main object
class EntryCreditBlockResponse
{
    public $ecblock;    //EcBlock
    public $rawdata;    //long
    function __construct(array $data) {
        $this->ecblock = new EcBlock();
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
}