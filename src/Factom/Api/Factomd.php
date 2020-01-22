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
use Factom\Api\Responses\Factomd\HeightResponse;
use Factom\Api\Responses\Factomd\AnchorsResponse;
use Factom\Api\Responses\Factomd\DiagnosticsResponse;
use Factom\Api\Responses\Factomd\MultipleBalancesResponse;
use Factom\Api\Responses\Factomd\PropertiesResponse;
use Factom\Api\Responses\Factomd\RawDataResponse;
use Factom\Api\Responses\Factomd\ReceiptResponse;

class Factomd
{
     /* heights */

     public static function heights()
     {
        
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "heights");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('heights', []);
        $getresponse = Response::response($result);
        return new HeightResponse($getresponse);
     }

     
     /* multiple-ec-balances */

     public static function multipleEcBalances($addr1,$addr2)
     {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "multiple-ec-balances");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('multiple-ec-balances', ["addresses" => [$addr1,$addr2]]);
        $getresponse = Response::response($result);
        return new MultipleBalancesResponse($getresponse);
     }

     /* multiple-fct-balances */

     public static function multipleFctBalances($addr1,$addr2)
     {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "multiple-fct-balances");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('multiple-fct-balances', ["addresses" => [$addr1,$addr2]]);
        $getresponse = Response::response($result);
        return new MultipleBalancesResponse($getresponse);
     }

     /* properties */

     public static function properties()
     {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "properties");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('properties', []);
        $getresponse = Response::response($result);
        return new PropertiesResponse($getresponse);
     }

     /* raw-data */

     public static function rawData($hash)
     {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "raw-data");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('raw-data', ["hash"=> $hash]);
        $getresponse = Response::response($result);
        return new RawDataResponse($getresponse);
    }
     

     /* receipt */

     public static function receipt($hash)
     {         
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
           if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "receipt");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('receipt', ["hash"=> $hash]);
        $getresponse = Response::response($result);
        return new ReceiptResponse($getresponse);
    }

    /* anchors */

    public static function anchors($hash)
    {
       
       $client = new Client(host);
       $client->getResponseParser()->onPreParse()
       ->add(Interceptor::createWith(function (ParserContainer $container) {
           $response = $container->getValue();
           if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "anchors");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
       }));
       $result = $client->call('anchors', ["hash"=> $hash]);
       $getresponse = Response::response($result);
       return new AnchorsResponse($getresponse);
        
    }

    /* diagnostics */

    public static function diagnostics()
    {
       
       $client = new Client(host);
       $client->getResponseParser()->onPreParse()
       ->add(Interceptor::createWith(function (ParserContainer $container) {
           $response = $container->getValue();
           if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "diagnostics");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
       }));
       $result = $client->call('diagnostics', []);
       $getresponse = Response::response($result);
       return new DiagnosticsResponse($getresponse);
        
    }
}
?>