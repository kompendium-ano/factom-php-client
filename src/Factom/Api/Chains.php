<?php 
namespace Factom\Api;

use PhpJsonRpc\Client;
use PhpJsonRpc\Client\ResponseParser\ParserContainer;
use PhpJsonRpc\Common\Interceptor\Interceptor;


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
        return json_encode($result);
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
        return json_encode($result);
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
        return json_encode($result);
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
        return json_encode($result);
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
        return json_encode($result);
    }
}

?>