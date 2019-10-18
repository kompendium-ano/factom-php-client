<?php 
namespace FactomApi;

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

class Debug
{
    /* holding-queue */

    public static function holdingQueue()
    {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('holding-queue',[]);
        return $result;
    }
    

    /* network-info */

    public static function networkInfo()
    {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('network-info',[]);
        return $result;
    }

    /* predictive-fer */

    public static function predictiveFer()
    {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('predictive-fer',[]);
        return $result;
    }

    /* audit-servers */

    public static function auditServers()
    {
        
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('audit-servers',[]);
        return $result;
    }

    /* federated-servers */
    
    public static function federatedServers()
    {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('federated-servers',[]);
        return $result;
    }

    /* configuration */
    
    public static function configuration()
    {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('configuration',[]);
        return $result;        
    }

     /* process-list */
    
     public static function processList()
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('process-list',[]);
        return $result; 
     }

     /* authorities */
    
     public static function authorities()
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('authorities',[]);
        return $result; 
     }

    
     /* reload-configuration */

     public static function reloadConfiguration()
     {
         $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('reload-configuration',[]);
        return $result; 

        
     }

     /* drop-rate */

     public static function dropRate()
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('drop-rate',[]);
        return $result; 
     }

     /* set-drop-rate */

     public static function setDropRate($droprate)
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('set-drop-rate',[]);
        return $result; 
     }

     /* delay */

     public static function delay()
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('delay',[]);
        return $result;
     }

     /* set-delay */

     public static function setDelay($delay)
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('set-delay',["Delay" => $delay]);
        return $result;
     }

     /* summary */

     public static function summary()
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('summary',[]);
        return $result;
     }

     /* messages */

     public static function messages()
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('messages',[]);
        return $result;
     }

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
        return $result;         
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
         return $result;
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
        return $result;

     }
}    