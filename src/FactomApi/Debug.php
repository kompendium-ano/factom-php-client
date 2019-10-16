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

class Debug
{
    /* holding-queue */

    public static function holdingQueue()
    {
        $client = new Client(debugHost);
        $result = $client->call('holding-queue',[]);
        print_r($result);
    }

    /* network-info */

    public static function networkInfo()
    {
        $client = new Client(debugHost);
        $result = $client->call('network-info', []);
        print_r($result);
    }

    /* predictive-fer */

    public static function predictiveFer()
    {
        $client = new Client(debugHost);
        $result = $client->call('predictive-fer', []);
        print_r($result);
    }

    /* audit-servers */

    public static function auditServers()
    {
        $client = new Client(debugHost);
        $result = $client->call('audit-servers', []);
        print_r($result);
    }

    /* federated-servers */
    
    public static function federatedServers()
    {
        $client = new Client(debugHost);
        $result = $client->call('federated-servers', []);
        print_r($result);
    }

    /* configuration */
    
    public static function configuration()
    {
        $client = new Client(debugHost);
        $result = $client->call('configuration', []);
        print_r($result);
    }

     /* process-list */
    
     public static function processList()
     {
         $client = new Client(debugHost);
         $result = $client->call('process-list', []);
         print_r($result);
     }

     /* authorities */
    
     public static function authorities()
     {
         $client = new Client(debugHost);
         $result = $client->call('authorities', []);
         print_r($result);
     }

    
     /* reload-configuration */

     public static function reloadConfiguration()
     {
         $client = new Client(debugHost);
         $result = $client->call('reload-configuration', []);
         print_r($result);
     }

     /* drop-rate */

     public static function dropRate()
     {
         $client = new Client(debugHost);
         $result = $client->call('drop-rate', []);
         print_r($result);
     }

     /* set-drop-rate */

     public static function setDropRate($droprate)
     {
         $client = new Client(debugHost);
         $result = $client->call('set-drop-rate',["DropRate"=>$droprate]);
         print_r($result);
     }

     /* delay */

     public static function delay()
     {
         $client = new Client(debugHost);
         $result = $client->call('delay', []);
         print_r($result);
     }

     /* set-delay */

     public static function setDelay($delay)
     {
         $client = new Client(debugHost);
         $result = $client->call('set-delay', ["Delay" => $delay]);
         print_r($result);
     }

     /* summary */

     public static function summary()
     {
         $client = new Client(debugHost);
         $result = $client->call('summary',['']);
         print_r($result);
     }

     /* messages */

     public static function messages()
     {
         $client = new Client(debugHost);
         $result = $client->call('messages',['']);
         print_r($result);
     }

     /* security Encrypted Connections */

     public static function securityEncryptedConnections()
     {
         $client = new Client(host);
         $result = $client->call('properties',['']);
         print_r($result);
     }

     /* security Password Protection */

     public static function securityPasswordProtection()
     {
         $client = new Client(host);
         $result = $client->call('properties',['']);
         print_r($result);
     }

     /* security ‌Combined Password and Encryption */

     public static function security‌CombinedPasswordAndEncryption()
     {
         $client = new Client(host);
         $result = $client->call('properties',['']);
         print_r($result);
     }
}    