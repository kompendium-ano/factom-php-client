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
use Factom\Api\Responses\Entry\EntryResponse;
use Factom\Api\Responses\Entry\EntryAckResponse;
use Factom\Api\Responses\Entry\EntryBlockResponse;
use Factom\Api\Responses\Entry\EntryCreditBalanceResponse;
use Factom\Api\Responses\Entry\EntryCreditBlockResponse;
use Factom\Api\Responses\Entry\EntryCreditRateResponse;
use Factom\Api\Responses\Entry\RevealEntryResponse;
use Factom\Api\Responses\Entry\ComposeEntryResponse;

class Entry
{
    /* entry */

    public static function entry($hash)
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
                $err = Errorhandling::checkError($response['error']['message'], "entry");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('entry',["hash"=>$hash]);
        $getresponse = Response::response($result);
        return new EntryResponse($getresponse);
    }

    /* entry-ack */

    public static function entryAck($txid)
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
                $err = Errorhandling::checkError($response['error']['message'], "entry-ack");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('entry-ack',["txid"=>$txid]);
        $getresponse = Response::response($result);
        return new EntryAckResponse($getresponse);
    }  

    /* entry-block */

    public static function entryBlock($keymr)
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
                $err = Errorhandling::checkError($response['error']['message'], "entry-block");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('entry-block',["keymr"=>$keymr]);
        $getresponse = Response::response($result);
        return new EntryBlockResponse($getresponse);
        // return $getresponse;
        
    }  

     /* entry-credit-balance */

     public static function entryCreditBalance($address)
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
                $err = Errorhandling::checkError($response['error']['message'], "entry-credit-balance");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('entry-credit-balance',["address"=>$address]);
        $getresponse = Response::response($result);
        return new EntryCreditBalanceResponse($getresponse);
     }

     /* entrycredit-block */

     public static function entryCreditBlock($keymr)
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
                $err = Errorhandling::checkError($response['error']['message'], "entrycredit-block");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('entrycredit-block',["keymr"=>$keymr]);
        $getresponse = Response::response($result);
        return new EntryCreditBlockResponse($getresponse);
     }

     /* entry-credit-rate*/

     public static function entryCreditRate()
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
                $err = Errorhandling::checkError($response['error']['message'], "entry-credit-rate");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('entry-credit-rate',[]);
        $getresponse = Response::response($result);
        return new EntryCreditRateResponse($getresponse);
     }
     
     /* reveal-entry */

     public static function revealEntry($entry)
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
                $err = Errorhandling::checkError($response['error']['message'], "reveal-entry");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('reveal-entry',["entry" => $entry]);
        $getresponse = Response::response($result);
        return new RevealEntryResponse($getresponse);
     }

     /* compose-entry */

     public static function composeEntry($chainId,$ecpub)
     {        
         $client = new Client(walletHost);
         $client->getResponseParser()->onPreParse()
         ->add(Interceptor::createWith(function (ParserContainer $container) {
             $response = $container->getValue();
             if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "compose-entry");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
         }));
         $data = '{ "entry":  {"chainid":"'.$chainId.'",  "extids":["cd90", "90cd"], "content":"abcdef"}, "ecpub":"'.$ecpub.'"}';
         $data = json_decode($data, true);
         $result = $client->call('compose-entry', $data);
         $getresponse = Response::response($result);
         return new ComposeEntryResponse($getresponse);
     }
}

?>