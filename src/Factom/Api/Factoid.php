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
use Factom\Api\Responses\Factoid\FactoidAckResponse;
use Factom\Api\Responses\Factoid\FactoidBalanceResponse;
use Factom\Api\Responses\Block\FactoidBlockResponse;
use Factom\Api\Responses\Factoid\FactoidSubmitResponse;

class Factoid
{ 

     /* factoid-ack */

     public static function factoidAck($txid)
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
                $err = Errorhandling::checkError($response['error']['message'], "factoid-ack");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('factoid-ack',["txid"=>$txid]);
        $getresponse = Response::response($result);
        return new FactoidAckResponse($getresponse);
    }
    
     /* factoid-balance */

     public static function factoidBalance($address)
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
                $err = Errorhandling::checkError($response['error']['message'], "factoid-balance");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);
             }
        }));
        $result = $client->call('factoid-balance',["address"=>$address]);
        $getresponse = Response::response($result);
        return new FactoidBalanceResponse($getresponse);
         
     }

     /* factoid-block */

     public static function factoidBlock($keymr)
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
                $err = Errorhandling::checkError($response['error']['message'], "factoid-block");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('factoid-block',["keymr"=>$keymr]);
        $getresponse = Response::response($result);
        return new FactoidBlockResponse($getresponse);
     }

     /* factoid-submit */

     public static function factoidSubmit($transaction)
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
                $err = Errorhandling::checkError($response['error']['message'], "factoid-submit");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('factoid-submit',["transaction"=>$transaction]);
        $getresponse = Response::response($result);
        return new FactoidSubmitResponse($getresponse);
     }
}