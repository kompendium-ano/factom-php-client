<?php 
namespace Factom\Api;

use PhpJsonRpc\Client;
use PhpJsonRpc\Client\RequestBuilder\BuilderContainer;
use PhpJsonRpc\Client\ResponseParser\ParserContainer;
use PhpJsonRpc\Client\Transport\TransportContainer;
use PhpJsonRpc\Common\Interceptor\Interceptor;
use PhpJsonRpc\Core\Invoke\Invoke;
use PhpJsonRpc\Error\BaseClientException;
use PhpJsonRpc\Error\InvalidResponseException;
use PhpJsonRpc\Error\MethodNotFoundException;
use PhpJsonRpc\Tests\Mock\IdGenerator;
use PhpJsonRpc\Tests\Mock\Transport;

class Security
{

     /* security Encrypted Connections */

     public static function securityEncryptedConnections()
     {
         $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('properties',[]);
        return json_encode($result);        
     }

     /* security Password Protection */

     public static function securityPasswordProtection()
     {

         $client = new Client(debugHost);
         $client->getResponseParser()->onPreParse()
         ->add(Interceptor::createWith(function (ParserContainer $container) {
             $response = $container->getValue();
             $result = $response['result'];
             $response['result'] = $response;
             
             return new ParserContainer($container->getParser(), $response);
         }));
         $result = $client->call('properties',[]);
         return json_encode($result);
     }

     /* security ‌Combined Password and Encryption */

     public static function security‌CombinedPasswordAndEncryption()
     {         
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('properties',[]);
        return json_encode($result);

     }
}

?>