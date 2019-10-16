<?php 
namespace FactomApi;

use PhpJsonRpc\Client;

class Chains
{
    /* chain-head */

    public static function chainHead($chainid)
    {
       // echo $chainid;
        $client = new Client(host);
        $result = $client->call('chain-head', ["chainid"=> $chainid]);
        print_r($result);
    }

    /* commit-chain */

    public static function commitChain($message)
    {
        
        $client = new Client(host);
        $result = $client->call('commit-chain', ["message"=> $message]);
        print_r($result);
    }

    /* reveal-chain */

    public static function revealChain($entry)
    {
        
        $client = new Client(host);
        $result = $client->call('reveal-chain', ["entry"=> $entry]);
        print_r($result);
    }

    /* compose-chain */

    public static function composeChain()
    {
        
        $client = new Client(walletHost);
        $result = $client->call('compose-chain', [ "chains" => 
        [
            "firstentry" => 
            [
                "extids" =>
                [
                    "61626364",
                    "31323334"
                ],
                "content" => [
                    "3132333461626364"
                ]
            ]
        ]
        ]);        
        print_r($result);
    }

   // send-raw-message

   public static function sendRawMessage($message)
    {
        
        $client = new Client(host);
        $result = $client->call('send-raw-message',["message" => $message]);
        print_r($result);
    }
}

?>