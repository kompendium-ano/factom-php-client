<?php 
namespace Factom\Api;

use PhpJsonRpc\Client;
use PhpJsonRpc\Client\ResponseParser\ParserContainer;
use PhpJsonRpc\Common\Interceptor\Interceptor;
use Factom\Api\Response;

class Chains
{
    /* chain-head */

    public static function chainHead($chainid)
    {
       // echo $chainid;
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
             if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "chain-head");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('chain-head', ["chainid"=> $chainid]);
        $getresponse = Response::response($result);
        return $getresponse;
    }

    /* commit-chain */

    public static function commitChain($message)
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
                $err = Errorhandling::checkError($response['error']['message'], "commit-chain");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('commit-chain', ["message"=> $message]);
        $getresponse = Response::response($result);
        return $getresponse;
    }

    /* reveal-chain */

    public static function revealChain($entry)
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
                $err = Errorhandling::checkError($response['error']['message'], "reveal-chain");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('reveal-chain', ["entry"=> $entry]);
        $getresponse = Response::response($result);
        return $getresponse;
    }

    /* compose-chain */

    public static function composeChain($ecpub, $extids)
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
                $err = Errorhandling::checkError($response['error']['message'], "compose-chain");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $content=array_shift( unpack('H*', $extids) );
        $str = array_shift( unpack('H*', $str) );
        $middle=strlen($str)/2;
        $first=substr($str,0,$middle);
        $last=substr($str,$middle);
        $obj = '{"chain": {"firstentry": {"extids":["'.$last.'", "'.$first.'"], "content":"'.$first.$last.'"}},  "ecpub":"'.$ecpub.'"}';
        $obj = json_decode($obj, true);
        print_r($myObj);
        $result = $client->call('compose-chain', $obj);
        $getresponse = Response::response($result);
        return $getresponse;
    }

   // send-raw-message

   public static function sendRawMessage($message)
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
                $err = Errorhandling::checkError($response['error']['message'], "send-raw-message");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('send-raw-message',["message" => $message]);
        $getresponse = Response::response($result);
        return $getresponse;
    }
}

?>