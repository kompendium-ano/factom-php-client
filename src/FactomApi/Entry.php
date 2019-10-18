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


class Entry
{
    /* entry */

    public static function entry($hash)
    {      
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('entry',["hash"=>$hash]);
        return $result;
    }

    /* entry-ack */

    public static function entryAck($txid)
    {        
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('entry-ack',["txid"=>$txid]);
        return $result;
    }  

    /* entry-block */

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
        $result = $client->call('entry-block',["keymr"=>$keymr]);
        return $result;echo $e->getMessage();
        
    }  

     /* entry-credit-balance */

     public static function entryCreditBalance($address)
     {        
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('entry-credit-balance',["address"=>$address]);
        return $result;echo $e->getMessage();
     }

     /* entrycredit-block */

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
        $result = $client->call('entrycredit-block',["keymr"=>$keymr]);
        return $result;echo $e->getMessage();
     }

     /* entry-credit-rate*/

     public static function entryCreditRate()
     {   
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('entry-credit-rate',[]);
        return $result;echo $e->getMessage();
     }
     
     /* reveal-entry */

     public static function revealEntry($entry)
     {        
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('reveal-entry',["entry" => $entry]);
        return $result;echo $e->getMessage();
     }

     /* compose-entry */

     public static function composeEntry()
     {        
         $client = new Client(walletHost);
         $client->getResponseParser()->onPreParse()
         ->add(Interceptor::createWith(function (ParserContainer $container) {
             $response = $container->getValue();
             $result = $response['result'];
             $response['result'] = $response;
             
             return new ParserContainer($container->getParser(), $response);
         }));
         $data = '{ "entry":  {"chainid":"'.$chainId.'",  "extids":["cd90", "90cd"], "content":"abcdef"}, "ecpub":"'.$ecpub.'"}';
         $data = json_decode($data, true);
         $result = $client->call('compose-entry', $data);
         return $result;
     }
}

?>