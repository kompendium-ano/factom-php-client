<?php 
namespace Factom\Api;

use PhpJsonRpc\Client;
use PhpJsonRpc\Client\ResponseParser\ParserContainer;
use PhpJsonRpc\Common\Interceptor\Interceptor;

class Blocks
{
    /* ablock by height */

    public static function ablockByHeight()
    {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('ablock-by-height', ["height"=> 1]);
        return json_encode($result);
    }
    
    /* ack */

    public static function ack($hash,$chainid)
    {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('ack', ["hash"=>$hash, "chainid"=>$chainid, "fulltransaction"=>""]);
        return json_encode($result);
    } 

    /* admin block */
    
    public static function adminBlock($keymr)
    {
        //echo $keymr;
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('admin-block', ["keymr"=>$keymr]);
        return json_encode($result);
    }

    /* dblock by height */

    public static function dblockByHeight($height)
    {
       //echo $height;
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('dblock-by-height', ["height"=>$height]);
        return json_encode($result);
    }

    /* directoryBlock  */

    public static function directoryBlock($keymr)
    {
        
        $client = new Client(host);
        
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('directory-block', ["keymr"=>$keymr]);
        return json_encode($result);
    }

    /* directory block head */

    public static function directoryBlockHead()
    {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('directory-block-head',['']);
        return json_encode($result);
    }

    /* ecblock by height */

    public static function ecblockByHeight()
    {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('ecblock-by-height',["height" => 10000]);
        return json_encode($result);
    }

    /* entry block */

    public static function entryBlock($keymr)
    {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('entry-block',["keymr" => $keymr]);
        return json_encode($result);
    }

    /* entry credit block */

    public static function entryCreditBlock($keymr)
    {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('entrycredit-block',["keymr" => $keymr]);
        return json_encode($result);
    }

    /* factoid block */

    public static function factoidBlock($keymr)
    {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('factoid-block',["keymr" => $keymr]);
        return json_encode($result);
    }

    /* fblock by height */

    public static function fblockByHeight($height)
    {
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('fblock-by-height', ["height"=> $height]);
        return json_encode($result);
    }

}