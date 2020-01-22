<?php 
namespace Factom\Api;

use PhpJsonRpc\Client;
use PhpJsonRpc\Client\ResponseParser\ParserContainer;
use PhpJsonRpc\Common\Interceptor\Interceptor;
use Factom\Api\Response;
use Factom\Api\Responses\Block\ABlockByHeightResponse;
use Factom\Api\Responses\Entry\EntryAckResponse;
use Factom\Api\Responses\Block\AdminBlockResponse;
use Factom\Api\Responses\Block\DbBlockByHeightResponse;
use Factom\Api\Responses\Block\DirectoryBlockResponse;
use Factom\Api\Responses\Block\DirectoryBlockHeadResponse;
use Factom\Api\Responses\Block\EcBlockByHeightResponse;
use Factom\Api\Responses\Block\EntryBlockResponse;
use Factom\Api\Responses\Entry\EntryCreditBlockResponse;
use Factom\Api\Responses\Block\FactoidBlockResponse;

class Blocks
{
    /* ablock by height */

    public static function ablockByHeight()
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
                $err = Errorhandling::checkError($response['error']['message'], "ablock-by-height");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('ablock-by-height', ["height"=> 1]);
        $getresponse = Response::response($result);
        return new ABlockByHeightResponse($getresponse);
    }
    
    /* ack */

    public static function ack($hash,$chainid)
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
                $err = Errorhandling::checkError($response['error']['message'], "ack");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('ack', ["hash"=>$hash, "chainid"=>$chainid, "fulltransaction"=>""]);
        $getresponse = Response::response($result);
        return new EntryAckResponse($getresponse);
    } 

    /* admin block */
    
    public static function adminBlock($keymr)
    {
        //echo $keymr;
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "admin-block");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('admin-block', ["keymr"=>$keymr]);
        $getresponse = Response::response($result);
        return new AdminBlockResponse($getresponse);
    }

    /* dblock by height */

    public static function dblockByHeight($height)
    {
       //echo $height;
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "dblock-by-height");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('dblock-by-height', ["height"=>$height]);
        $getresponse = Response::response($result);
        return new DbBlockByHeightResponse($getresponse);
    }

    /* directoryBlock  */

    public static function directoryBlock($keymr)
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
                $err = Errorhandling::checkError($response['error']['message'], "directory-block");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('directory-block', ["keymr"=>$keymr]);
        $getresponse = Response::response($result);
        return new DirectoryBlockResponse($getresponse);
    }

    /* directory block head */

    public static function directoryBlockHead()
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
                $err = Errorhandling::checkError($response['error']['message'], "directory-block-head");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('directory-block-head',['']);
        $getresponse = Response::response($result);
        return new DirectoryBlockHeadResponse($getresponse);
    }

    /* ecblock by height */

    public static function ecblockByHeight()
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
                $err = Errorhandling::checkError($response['error']['message'], "ecblock-by-height");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('ecblock-by-height',["height" => 10000]);
        $getresponse = Response::response($result);
        return new EcBlockByHeightResponse($getresponse);
    }

    /* entry block */

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
        $result = $client->call('entry-block',["keymr" => $keymr]);
        $getresponse = Response::response($result);
        return new EntryBlockResponse($getresponse);
    }

    /* entry credit block */

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
        $result = $client->call('entrycredit-block',["keymr" => $keymr]);
        $getresponse = Response::response($result);
        return new EntryCreditBlockResponse($getresponse);
    }

    /* factoid block */

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
        $result = $client->call('factoid-block',["keymr" => $keymr]);
        $getresponse = Response::response($result);
        return new FactoidBlockResponse($getresponse);
    }

    /* fblock by height */

    public static function fblockByHeight($height)
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
                $err = Errorhandling::checkError($response['error']['message'], "fblock-by-height");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('fblock-by-height', ["height"=> $height]);
        $getresponse = Response::response($result);
        return new FactoidBlockResponse($getresponse);
    }

}