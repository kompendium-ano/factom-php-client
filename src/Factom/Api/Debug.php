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
use Factom\Api\Response;
use Factom\Api\Responses\Debug\HoldingQueueResponse;
use Factom\Api\Responses\Debug\NetworkInfoResponse;
use Factom\Api\Responses\Debug\PredictiveFerResponse;
use Factom\Api\Responses\Debug\AuditServersResponse;
use Factom\Api\Responses\Debug\FederatedServersResponse;
use Factom\Api\Responses\Debug\ConfigurationResponse;
use Factom\Api\Responses\Debug\AuthoritiesResponse;
use Factom\Api\Responses\Debug\DropRateResponse;
use Factom\Api\Responses\Debug\DelayResponse;
use Factom\Api\Responses\Debug\SummaryResponse;
use Factom\Api\Responses\Debug\MessagesResponse;

class Debug
{
    /* holding-queue */

    public static function holdingQueue()
    {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "holding-queue");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('holding-queue',[]);
        $getresponse = Response::response($result);
        return new HoldingQueueResponse($getresponse);
    }
    

    /* network-info */

    public static function networkInfo()
    {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "network-info");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('network-info',[]);
        $getresponse = Response::response($result);
        return new NetworkInfoResponse($getresponse);
    }

    /* predictive-fer */

    public static function predictiveFer()
    {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "predictive-fer");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('predictive-fer',[]);
        $getresponse = Response::response($result);
        return new PredictiveFerResponse($getresponse);
    }

    /* audit-servers */

    public static function auditServers()
    {
        
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "audit-servers");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('audit-servers',[]);
        $getresponse = Response::response($result);
        return new AuditServersResponse($getresponse);
    }

    /* federated-servers */
    
    public static function federatedServers()
    {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "federated-servers");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('federated-servers',[]);
        $getresponse = Response::response($result);
        return new FederatedServersResponse($getresponse);
    }

    /* configuration */
    
    public static function configuration()
    {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "configuration");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('configuration',[]);
        $getresponse = Response::response($result);
        return new ConfigurationResponse($getresponse);       
    }

     /* process-list */
    
     public static function processList()
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "process-list");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('process-list',[]);
        $getresponse = Response::response($result);
        return $getresponse;
     }

     /* authorities */
    
     public static function authorities()
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "authorities");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('authorities',[]);
        $getresponse = Response::response($result);
        return new AuthoritiesResponse($getresponse);
     }

    
     /* reload-configuration */

     public static function reloadConfiguration()
     {
         $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "reload-configuration");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('reload-configuration',[]);
        $getresponse = Response::response($result);
        return new ConfigurationResponse($getresponse);
     }

     /* drop-rate */

     public static function dropRate()
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "drop-rate");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('drop-rate',[]);
        $getresponse = Response::response($result);
        return new DropRateResponse($getresponse);
     }

     /* set-drop-rate */

     public static function setDropRate($droprate)
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "set-drop-rate");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('set-drop-rate',[]);
        $getresponse = Response::response($result);
        return new DropRateResponse($getresponse);
     }

     /* delay */

     public static function delay()
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "delay");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('delay',[]);
        $getresponse = Response::response($result);
        return new DelayResponse($getresponse);
     }

     /* set-delay */

     public static function setDelay($delay)
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "set-delay");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('set-delay',["Delay" => $delay]);
        $getresponse = Response::response($result);
        return new DelayResponse($getresponse);
     }

     /* summary */

     public static function summary()
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
             if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "summary");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('summary',[]);
        $getresponse = Response::response($result);
        return new SummaryResponse($getresponse);
     }

     /* messages */

     public static function messages()
     {
        $client = new Client(debugHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "messages");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('messages',[]);
        $getresponse = Response::response($result);
        return new MessagesResponse($getresponse);
     }
}    