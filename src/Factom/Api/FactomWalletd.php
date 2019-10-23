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

class FactomWalletd
{

    /* get-height */

    public static function getHeight()
    {
        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('get-height', []);
        return json_encode($result);
    }

    /* import-koinify */

    public static function importKoinify($words)
    {
        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('import-koinify',["words" => $words]);
        return json_encode($result);
    }

    /* properties */

    public static function properties()
    {
        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('properties',[]);
        return json_encode($result);
    }

    /* wallet-backup */

    public static function walletBackup()
    {

        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('wallet-backup',[]);
        return json_encode($result);
    } 
    

    /* wallet-balances */

    public static function walletBalances()
    {

            $client = new Client(walletHost);
            $client->getResponseParser()->onPreParse()
            ->add(Interceptor::createWith(function (ParserContainer $container) {
                $response = $container->getValue();
                $result = $response['result'];
                $response['result'] = $response;
                
                return new ParserContainer($container->getParser(), $response);
            }));
            $result = $client->call('wallet-balances',[]);
            return json_encode($result);
    }

    /* errors */

    public static function errors()
    {
        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('bad',[]);
        return json_encode($result);
    } 
}