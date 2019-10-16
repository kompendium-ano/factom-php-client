<?php 
namespace FactomApi;

use PhpJsonRpc\Client;

class Entry
{
    /* entry */

    public static function entry()
    {        
        $client = new Client(host);
        $result = $client->call('entry',["hash"=>"24674e6bc3094eb773297de955ee095a05830e431da13a37382dcdc89d73c7d7"]);
        print_r($result);
    }

    /* entry-ack */

    public static function entryAck($txid)
    {        
        $client = new Client(host);
        $result = $client->call('entry-ack',["txid"=>$txid]);
        print_r($result);
    }  

    /* entry-block */

    public static function entryBlock($keymr)
    {        
        $client = new Client(host);
        $result = $client->call('entry-block',["keymr"=>$keymr]);
        print_r($result);
    }  

     /* entry-credit-balance */

     public static function entryCreditBalance($address)
     {        
         $client = new Client(host);
         $result = $client->call('entry-credit-balance',["address"=>$address]);
         print_r($result);
     }

     /* entrycredit-block */

     public static function entryCreditBlock($keymr)
     {        
         $client = new Client(host);
         $result = $client->call('entrycredit-block',["keymr"=>$keymr]);
         print_r($result);
     }

     /* entry-credit-rate*/

     public static function entryCreditRate()
     {        
         $client = new Client(host);
         $result = $client->call('entry-credit-rate',[]);
         print_r($result);
     }
     
     /* reveal-entry */

     public static function revealEntry($entry)
     {        
         $client = new Client(host);
         $result = $client->call('reveal-entry',["entry" => $entry]);
         print_r($result);
     }

     /* compose-entry */

     public static function composeEntry()
     {        
         $client = new Client(host);
         $result = $client->call('compose-entry',[ "chains" => 
         [
             "entry" => 
             [
                 "chainid" => "48e0c94d00bf14d89ab10044075a370e1f55bcb28b2ff16206d865e192827645",                 
                 "extids" => [ "cd90", "90cd" ],
                 "content" => "abcdef"
             ]
         ]
         ]);
         print_r($result);
     }
}

?>