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

use Factom\Api\Errorhandling;
use Factom\Api\Response;

class FactomWalletd
{

    /* get-height */

    public static function getHeight()
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
                $err = Errorhandling::checkError($response['error']['message'], "get-height");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('get-height', []);
        $getresponse = Response::response($result);
        return $getresponse;
    }

    /* import-koinify */

    public static function importKoinify($words)
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
                $err = Errorhandling::checkError($response['error']['message'], "import-koinify");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('import-koinify',["words" => $words]);
        $getresponse = Response::response($result);
        return $getresponse;
    }

    /* properties */

    public static function properties()
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
                $err = Errorhandling::checkError($response['error']['message'], "properties");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('properties',[]);
        $getresponse = Response::response($result);
        return $getresponse;
    }

    /* wallet-backup */

    public static function walletBackup()
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
                $err = Errorhandling::checkError($response['error']['message'], "wallet-backup");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('wallet-backup',[]);
        $getresponse = Response::response($result);
        return $getresponse;
    } 
    

    /* wallet-balances */

    public static function walletBalances()
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
                $err = Errorhandling::checkError($response['error']['message'], "wallet-balances");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
            }));
            $result = $client->call('wallet-balances',[]);
            $getresponse = Response::response($result);
            return $getresponse;
    }

    /* errors */

    public static function errors()
    {
        // $client = new Client(walletHost);
        // $client->getResponseParser()->onPreParse()
        // ->add(Interceptor::createWith(function (ParserContainer $container) {
        //     $response = $container->getValue();
        //     if(isset($response['result'])){
               
        //             $result = $response['result'];
        //             $response['result'] = $response;            
            
        //             return new ParserContainer($container->getParser(), $response);
                    
        //     }else{                
        //          $err = Errorhandling::checkError($response['error']['message']);
                             
        //     }
        //     $result = $client->call('bad',[]);
        //     return json_encode($result);

        // }));

        $client = new Client(walletHost);
         $client->getResponseParser()->onPreParse()
         ->add(Interceptor::createWith(function (ParserContainer $container) {
             $response = $container->getValue();
              if(isset($response['result'])){
                $result = $response['result'];
                $response['result'] = $response;                
                return new ParserContainer($container->getParser(), $response);
             }else{
                $err = Errorhandling::checkError($response['error']['message'], "bad");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
             
         }));
         $result = $client->call('bad', []);         
         $getresponse = Response::response($result);
         return $getresponse; 
                  
    } 

     /* active-identity-keys */

     public static function activeIdentityKeys($chainid,$height)
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
                $err = Errorhandling::checkError($response['error']['message'], "active-identity-keys");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
         }));
         $result = $client->call('active-identity-keys', ["chainid"=>$chainid, "height"=> $height]);
         $getresponse = Response::response($result);
         return $getresponse;
     }

     /* all-identity-keys */

     public static function allIdentityKeys()
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
                $err = Errorhandling::checkError($response['error']['message'], "all-identity-keys");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
         }));
         $result = $client->call('all-identity-keys', []);
         $getresponse = Response::response($result);
         return $getresponse;
     }

     /* compose-identity-attribute */

     public static function composeIdentityAttribute($receiverchainid,$destinationchainid,$attributes,$signerkey,$signerchainid,$ecpub,$force)
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
                $err = Errorhandling::checkError($response['error']['message'], "compose-identity-attribute");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
         }));
         $result = $client->call('compose-identity-attribute', ["receiver-chainid"=>$receiverchainid,"destination-chainid"=>$destinationchainid,"attributes"=>$attributes,"signerkey"=>$signerkey,"signer-chainid"=>$signerchainid,"ecpub"=>$ecpub,"force"=>$force]);
         $getresponse = Response::response($result);
         return $getresponse;
     }   

     /* compose-identity-attribute-endorsement */

     public static function composeIdentityAttributeEndorsement($destinationchainid,$entryhash,$signerkey,$signerchainid,$ecpub,$force)
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
                $err = Errorhandling::checkError($response['error']['message'], "compose-identity-attribute-endorsement");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
         }));
         $result = $client->call('compose-identity-attribute-endorsement', ["destination-chainid"=>$destinationchainid,"entry-hash"=>$entryhash,"signerkey"=>$signerkey,"signer-chainid"=>$signerchainid,"ecpub"=>$ecpub,"force"=>$force]);
         $getresponse = Response::response($result);
         return $getresponse;
     }   

     /* compose-identity-key-replacement */

     public static function composeIdentityKeyReplacement($chainid,$oldkey,$newkey,$signerkey,$ecpub,$force)
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
                $err = Errorhandling::checkError($response['error']['message'], "compose-identity-key-replacement");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
         }));
         $result = $client->call('compose-identity-key-replacement', ["chainid"=>$chainid,"oldkey"=>$oldkey,"newkey"=>$newkey,"signerkey"=>$signerkey,"ecpub"=>$ecpub,"force"=>$force]);
         $getresponse = Response::response($result);
         return $getresponse;
     }
     
     /* import-identity-keys */ 

     public static function importIdentityKeys($secretone,$secrettwo)
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
                $err = Errorhandling::checkError($response['error']['message'], "import-identity-keys");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('import-identity-keys', ["secret"=>$secretone,
        "secret"=>$secrettwo]);
        $getresponse = Response::response($result);
        return $getresponse;
     }   

     /* remove-address */ 

     public static function removeAddress($address)
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
                $err = Errorhandling::checkError($response['error']['message'], "remove-address");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('remove-address', ["address"=>$address]);
        $getresponse = Response::response($result);
        return $getresponse;
     }  
     
     /* remove-identity-key */ 

     public static function removeIdentityKey($public)
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
                $err = Errorhandling::checkError($response['error']['message'], "remove-identity-key");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('remove-identity-key', ["public"=>$public]);
        $getresponse = Response::response($result);
        return $getresponse;
     }

     /* sign-data */ 

     public static function signData($signer)
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
                $err = Errorhandling::checkError($response['error']['message'], "sign-data");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('sign-data', ["signer"=>$signer]);
        $getresponse = Response::response($result);
        return $getresponse;
     }  

     /* unlock-wallet */

     public static function unlockWallet($passphrase,$timeout)
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
                $err = Errorhandling::checkError($response['error']['message'], "unlock-wallet");
                $response['error']['message'] = $err;
                $response['result'] = $response;
                // print_r($response);
                return new ParserContainer($container->getParser(), $response);               
               
             }
        }));
        $result = $client->call('unlock-wallet', ["passphrase"=>$passphrase,"timeout"=>$timeout]);
        $getresponse = Response::response($result);
        return $getresponse;
     }   
}