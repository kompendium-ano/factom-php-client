<?php 
namespace FactomApi;

use PhpJsonRpc\Client;

class Minute
{
    /* current-minute */

    public static function currentMinute()
    {
        
        $client = new Client(host);
        $result = $client->call('current-minute',['']);
        print_r($result);
    }
}

?>