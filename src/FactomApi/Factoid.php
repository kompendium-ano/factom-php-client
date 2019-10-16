<?php 
namespace FactomApi;

use PhpJsonRpc\Client;

class Factoid
{

     /* factoid-ack */

     public static function factoidAck($txid)
     {        
         $client = new Client(host);
         $result = $client->call('factoid-ack',["txid"=>$txid]);
         print_r($result);
     }

     /* factoid-balance */

     public static function factoidBalance($address)
     {        
         $client = new Client(host);
         $result = $client->call('factoid-balance',["address"=>$address]);
         print_r($result);
     }

     /* factoid-block */

     public static function factoidBlock($keymr)
     {        
         $client = new Client(host);
         $result = $client->call('factoid-block',["keymr"=>$keymr]);
         print_r($result);
     }

     /* factoid-submit */

     public static function factoidSubmit($transaction)
     {        
         $client = new Client(host);
         $result = $client->call('factoid-submit',["transaction"=>$transaction]);
         print_r($result);
     }
}