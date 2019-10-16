<?php 
namespace FactomApi;

use PhpJsonRpc\Client;

class Commits
{
    /* commit-entry */

    public static function commitEntry($message)
    {
        
        $client = new Client(host);
        $result = $client->call('commit-entry', ["message"=> $message]);
        print_r($result);
    }
}

?>