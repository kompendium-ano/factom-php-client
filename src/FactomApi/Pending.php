<?php 
namespace FactomApi;

use PhpJsonRpc\Client;

class Pending
{
    /* pending-entries */

    public static function pendingEntries()
    {
        $client = new Client(host);
        $result = $client->call('pending-entries', []);
        print_r($result);
    }

    /* pending-transactions */

    public static function pendingTransactions($address)
    {
        $client = new Client(host);
        $result = $client->call('pending-transactions', ["address" => $address]);
        print_r($result);
    }
}