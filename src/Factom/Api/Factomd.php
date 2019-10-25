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

class Factomd
{
     /* heights */

     public static function heights()
     {
        
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('heights', []);
        return json_encode($result);
         
     }

     
     /* multiple-ec-balances */

     public static function multipleEcBalances($addr1,$addr2)
     {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('multiple-ec-balances', ["addresses" => [$addr1,$addr2]]);
        return json_encode($result);
     }

     /* multiple-fct-balances */

     public static function multipleFctBalances($addr1,$addr2)
     {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('multiple-fct-balances', ["addresses" => [$addr1,$addr2]]);
        return json_encode($result);
     }

     /* properties */

     public static function properties()
     {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('properties', []);
        return json_encode($result);
     }

     /* raw-data */

     public static function rawData($hash)
     {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('raw-data', ["hash"=> $hash]);
        return json_encode($result);
    }
     

     /* receipt */

     public static function receipt($hash)
     {         
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('receipt', ["hash"=> $hash]);
        return json_encode($result);
    }

    /* anchors */

    public static function anchors($hash)
    {
       
       $client = new Client(host);
       $client->getResponseParser()->onPreParse()
       ->add(Interceptor::createWith(function (ParserContainer $container) {
           $response = $container->getValue();
           $result = $response['result'];
           $response['result'] = $response;
           
           return new ParserContainer($container->getParser(), $response);
       }));
       $result = $client->call('anchors', ["hash"=> $hash]);
       return json_encode($result);
        
    }

    /* diagnostics */

    public static function diagnostics()
    {
       
       $client = new Client(host);
       $client->getResponseParser()->onPreParse()
       ->add(Interceptor::createWith(function (ParserContainer $container) {
           $response = $container->getValue();
           $result = $response['result'];
           $response['result'] = $response;
           
           return new ParserContainer($container->getParser(), $response);
       }));
       $result = $client->call('diagnostics', []);
       return json_encode($result);
        
    }
}
?>