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

     /* active-identity-keys */

     public static function activeIdentityKeys($chainid,$height)
     {
         $client = new Client(walletHost);
         $client->getResponseParser()->onPreParse()
         ->add(Interceptor::createWith(function (ParserContainer $container) {
             $response = $container->getValue();
             $result = $response['result'];
             $response['result'] = $response;
             
             return new ParserContainer($container->getParser(), $response);
         }));
         $result = $client->call('active-identity-keys', ["chainid"=>$chainid, "height"=> $height]);
         return json_encode($result);
     }

     /* all-identity-keys */

     public static function allIdentityKeys()
     {
         $client = new Client(walletHost);
         $client->getResponseParser()->onPreParse()
         ->add(Interceptor::createWith(function (ParserContainer $container) {
             $response = $container->getValue();
             $result = $response['result'];
             $response['result'] = $response;
             
             return new ParserContainer($container->getParser(), $response);
         }));
         $result = $client->call('all-identity-keys', []);
         return json_encode($result);
     }

     /* compose-identity-attribute */

     public static function composeIdentityAttribute($receiverchainid,$destinationchainid,$attributes,$signerkey,$signerchainid,$ecpub,$force)
     {
        $client = new Client(walletHost);
         $client->getResponseParser()->onPreParse()
         ->add(Interceptor::createWith(function (ParserContainer $container) {
             $response = $container->getValue();
             $result = $response['result'];
             $response['result'] = $response;
             
             return new ParserContainer($container->getParser(), $response);
         }));
         $result = $client->call('compose-identity-attribute', ["receiver-chainid"=>$receiverchainid,"destination-chainid"=>$destinationchainid,"attributes"=>$attributes,"signerkey"=>$signerkey,"signer-chainid"=>$signerchainid,"ecpub"=>$ecpub,"force"=>$force]);
         return json_encode($result);
     }   

     /* compose-identity-attribute-endorsement */

     public static function composeIdentityAttributeEndorsement($destinationchainid,$entryhash,$signerkey,$signerchainid,$ecpub,$force)
     {
        $client = new Client(walletHost);
         $client->getResponseParser()->onPreParse()
         ->add(Interceptor::createWith(function (ParserContainer $container) {
             $response = $container->getValue();
             $result = $response['result'];
             $response['result'] = $response;
             
             return new ParserContainer($container->getParser(), $response);
         }));
         $result = $client->call('compose-identity-attribute-endorsement', ["destination-chainid"=>$destinationchainid,"entry-hash"=>$entryhash,"signerkey"=>$signerkey,"signer-chainid"=>$signerchainid,"ecpub"=>$ecpub,"force"=>$force]);
         return json_encode($result);
     }   

     /* compose-identity-key-replacement */

     public static function composeIdentityKeyReplacement($chainid,$oldkey,$newkey,$signerkey,$ecpub,$force)
     {
        $client = new Client(walletHost);
         $client->getResponseParser()->onPreParse()
         ->add(Interceptor::createWith(function (ParserContainer $container) {
             $response = $container->getValue();
             $result = $response['result'];
             $response['result'] = $response;
             
             return new ParserContainer($container->getParser(), $response);
         }));
         $result = $client->call('compose-identity-key-replacement', ["chainid"=>$chainid,"oldkey"=>$oldkey,"newkey"=>$newkey,"signerkey"=>$signerkey,"ecpub"=>$ecpub,"force"=>$force]);
         return json_encode($result);
     }
     
     /* import-identity-keys */ 

     public static function importIdentityKeys($secretone,$secrettwo)
     {
        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('import-identity-keys', ["secret"=>$secretone,
        "secret"=>$secrettwo]);
        return json_encode($result);
     }   

     /* remove-address */ 

     public static function removeAddress($address)
     {
        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('remove-address', ["address"=>$address]);
        return json_encode($result);
     }  
     
     /* remove-identity-key */ 

     public static function removeIdentityKey($public)
     {
        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('remove-identity-key', ["public"=>$public]);
        return json_encode($result);
     }

     /* sign-data */ 

     public static function signData($signer)
     {
        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('sign-data', ["signer"=>$signer]);
        return json_encode($result);
     }  

     /* unlock-wallet */

     public static function unlockWallet($passphrase,$timeout)
     { 
        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('unlock-wallet', ["passphrase"=>$passphrase,"timeout"=>$timeout]);
        return json_encode($result);

     }   
}