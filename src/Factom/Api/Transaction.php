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

use Factom\Api\Factoid;

class Transaction
{
    /* transaction */
    
    public static function transaction($hash){
        
        $client = new Client(host);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('transaction', ["hash"=>$hash]);
        return json_encode($result);
    }

    /* add-ec-output */

    public static function addEcOutput($txname,$address,$amount)
    {

        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('add-ec-output', ["tx-name"=> $txname , "address"=>$address , "amount" => $amount]);
        return json_encode($result);
    
    }

    /* add-fee */

    public static function addFee($txname,$address)
    {
        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('add-fee', ["tx-name"=> $txname , "address"=>$address]);
        return json_encode($result);
    }

    /* add-input */

    public static function addInput($txname,$address,$amount)
    {
        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('add-input', ["tx-name"=> $txname , "address"=>$address , "amount"=> $amount]);
        return json_encode($result);
    }

    /* add-output */

    public static function addOutput($txname,$address,$amount)
    {
        
        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('add-output', ["tx-name"=> $txname , "address"=>$address , "amount"=> $amount]);
        return json_encode($result);
    }

    /* compose-transaction */
    
    public static function composeTransaction($txname)
    {
        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('compose-transaction', ["tx-name"=> $txname]);
        return json_encode($result);
    }

    /* delete-transaction */

    public static function deleteTransaction($txname)
    {
   
        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('delete-transaction', ["tx-name"=> $txname]);
        return json_encode($result);

    }

    /* new-transaction */

    public static function newTransaction($txname){

        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('new-transaction', ["tx-name"=> $txname]);
        return json_encode($result);

    }

    /* sign-transaction */

    public static function signTransaction($txname){

        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('sign-transaction', ["tx-name"=> $txname]);
        return json_encode($result);

    }

    /* sub-fee */

    public static function subFee($txname,$address){

        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('sub-fee',  ["tx-name"=> $txname , "address"=>$address]);
        return json_encode($result);


    }

    /* tmp-transactions */

    public static function tmpTransactions(){

        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('tmp-transactions',  []);
        return json_encode($result);

    }

    /* transactions (Retrieving) */

    public static function transactionsRetrieving($start,$end){


        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('transactions',  [ "range" => [ "start" => $start , "end" => $end ] ]);
        return json_encode($result);


    }

    /* transactions Retrieving By Txid */

    public static function transactionsRetrievingByTxid($txid){

        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('transactions',  [ "txid" => $txid ]);
        return json_encode($result);

    }

     /* transactions Retrieving By Address */

    public static function transactionsRetrievingByAddress($address){

        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('transactions',  [ "address" => $address ]);
        return json_encode($result);

    }

    /* All Transactions */

    public static function AllTransactions(){

        $client = new Client(walletHost);
        $client->getResponseParser()->onPreParse()
        ->add(Interceptor::createWith(function (ParserContainer $container) {
            $response = $container->getValue();
            $result = $response['result'];
            $response['result'] = $response;
            
            return new ParserContainer($container->getParser(), $response);
        }));
        $result = $client->call('transactions',[]);
        return json_encode($result);

    }
  
    /* Send Transaction */

    public static function sendTransaction($data){
       
        $newTx = self::newTransaction($data['txname']);
        $input = self::addInput($data['txname'], $data['inputAddress'], $data['inputAmount']);
        $output = self::addOutput($data['txname'], $data['outputAddress'], $data['outputAmount']);
        $cpTx = self::composeTransaction($data['txname']);
        $res = json_decode($cpTx, true);
        $tx = Factoid::factoidSubmit($res['result']['params']['transaction']);
       
        return $tx;

    }
}