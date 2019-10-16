<?php 
namespace FactomApi;

use PhpJsonRpc\Client;

class Factomd
{
     /* heights */

     public static function heights()
     {
         $client = new Client(host);
         $result = $client->call('heights', []);
         print_r($result);
     }

     
     /* multiple-ec-balances */

     public static function multipleEcBalances($addr1,$addr2)
     {
         $client = new Client(host);
         $result = $client->call('multiple-ec-balances', ["addresses" => [$addr1,$addr2]]);
         print_r($result);
     }

     /* multiple-fct-balances */

     public static function multipleFctBalances($addr1,$addr2)
     {
         $client = new Client(host);
         $result = $client->call('multiple-fct-balances', ["addresses" => [$addr1,$addr2]]);
         print_r($result);
     }

     /* properties */

     public static function properties()
     {
         $client = new Client(host);
         $result = $client->call('properties', []);
         print_r($result);
     }

     /* raw-data */

     public static function rawData($hash)
     {
         //echo $hash;
         $client = new Client(host);
         $result = $client->call('raw-data', ["hash"=> $hash]);
         print_r($result);
     }

     /* receipt */

     public static function receipt($hash)
     {
         //echo $hash;
         $client = new Client(host);
         $result = $client->call('receipt', ["hash"=> $hash]);
         print_r($result);
     }
}
?>