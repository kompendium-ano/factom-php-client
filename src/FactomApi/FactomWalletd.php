<?php 
namespace FactomApi;

//use Datto\JsonRpc\Http\Client;
// use Datto\JsonRpc\Http\Exceptions\HttpException;
// use Datto\JsonRpc\Responses\ErrorResponse;
// use Datto\JsonRpc\Server;
// use ErrorException;

/* new rpc client demo */

// use SimpleJsonRpcClient\Client\HttpPostClient as Client;

// use SimpleJsonRpcClient\Request\Request;
// use SimpleJsonRpcClient\Exception\BaseException;
// use SimpleJsonRpcClient\Response\Response;

use PhpJsonRpc\Client;

class FactomWalletd
{

    /* get-height */

    public static function getHeight()
    {
        $client = new Client(walletHost);
        $result = $client->call('get-height', []);
        print_r($result);
    }

    /* import-koinify */

    public static function importKoinify($words)
    {
        $client = new Client(walletHost);
        $result = $client->call('import-koinify',["words" => $words]);
        print_r($result);
    }

    /* properties */

    public static function properties()
    {
        $client = new Client(walletHost);
        $result = $client->call('properties',[]);
        print_r($result);
    }

    /* wallet-backup */

    public static function walletBackup()
    {
        $client = new Client(walletHost);
        $result = $client->call('wallet-backup',[]);
        print_r($result);
    }

    /* wallet-balances */

    public static function walletBalances()
    {
        $client = new Client(walletHost);
        $result = $client->call('wallet-balances',[]);
        print_r($result);
    }

    /* errors */

    public static function errors()
    {
        $client = new Client(walletHost);
        $result = $client->call('bad',[]);
        print_r($result);
    }
    

}