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

class Transaction
{
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
        return $result;
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
        return $result;
    
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
        return $result;
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
        return $result;
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
        return $result;
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
        return $result;
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
        return $result;

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
        return $result;

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
        return $result;

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
        return $result;


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
        return $result;

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
        return $result;


    }

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
        return $result;

    }

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
        return $result;

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
        return $result;

    }
    // new-transaction (where you provide the TX-NAME)
    // public static function newTransactionn($txname){
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => walletHost,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "GET",
    //         CURLOPT_POSTFIELDS => "{\"jsonrpc\": \"2.0\", \"id\": 0, \"method\":\"new-transaction\", \"params\":{\"tx-name\":\"".$txname."\"}}",
    //         CURLOPT_HTTPHEADER => array(
    //             "Accept: */*",
    //             "content-type: text/plain;"
    //         ),
    //     ));

    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);

    //     curl_close($curl);
    //     $response = json_decode($response, true);
    //     return $response;
    // }

    // // add-input
    // public static function addInput($txname, $inputAddress, $amount){
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => walletHost,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "POST",
    //         CURLOPT_POSTFIELDS => "{\"jsonrpc\":\"2.0\",\"id\":0,\"method\":\"add-input\",\"params\":\n{\"tx-name\":\"".$txname."\",\"address\":\"".$inputAddress."\",\"amount\":".$amount."}}",
    //         CURLOPT_HTTPHEADER => array(
    //             "Accept: */*",
    //             "content-type: text/plain;"
    //         ),
    //     ));

    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);

    //     curl_close($curl);
    //     $response = json_decode($response, true);
    //     return $response;
    // }

    // // add-output
    // public static function addOutput($txname, $outputAddress, $amount){
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => walletHost,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "POST",
    //         CURLOPT_POSTFIELDS => "{\"jsonrpc\":\"2.0\",\"id\":0,\"method\":\"add-output\",\"params\":{\"tx-name\":\"".$txname."\",\"address\":\"".$outputAddress."\",\"amount\":".$amount."}}",
    //         CURLOPT_HTTPHEADER => array(
    //             "Accept: */*",
    //             "content-type: text/plain;"
    //         ),
    //     ));

    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);

    //     curl_close($curl);
    //     $response = json_decode($response, true);
    //     return $response;
    // }

    // // sign-transaction
    // public static function signTransaction($txname){
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => walletHost,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "POST",
    //         CURLOPT_POSTFIELDS => "{\"jsonrpc\":\"2.0\", \"id\":0, \"method\":\"sign-transaction\", \"params\":{\"tx-name\":\"".$txname."\"}}",
    //         CURLOPT_HTTPHEADER => array(
    //             "Accept: */*",
    //             "content-type: text/plain"
    //         ),
    //     ));

    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);

    //     curl_close($curl);
    //     $response = json_decode($response, true);
    //     return $response;
    // }

    // // compose-transaction
    // public static function composeTransaction($txname){
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => walletHost,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "POST",
    //         CURLOPT_POSTFIELDS => "{\"jsonrpc\":\"2.0\", \"id\":0, \"method\":\"compose-transaction\", \"params\":{\"tx-name\":\"".$txname."\"}}",
    //         CURLOPT_HTTPHEADER => array(
    //             "Accept: */*",
    //             "content-type: text/plain"
    //         ),
    //     ));

    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);

    //     curl_close($curl);
    //     $response = json_decode($response, true);
    //     return $response;
    // }

    // // factoid-submit
    // public static function factoidSubmit($postData){
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => host,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "POST",
    //         CURLOPT_POSTFIELDS => $postData,
    //         CURLOPT_HTTPHEADER => array(
    //             "Accept: */*",
    //             "content-type: text/plain;"
    //         ),
    //     ));

    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);

    //     curl_close($curl);
    //     $response = json_decode($response, true);
    //     return $response;
    // }

    // // send-transaction
    // public static function sendTransaction($data){
    //     $newTx = self::newTransactionn($data['txname']);
    //     $input = self::addInput($data['txname'], $data['inputAddress'], $data['inputAmount']);
    //     $output = self::addOutput($data['txname'], $data['outputAddress'], $data['outputAmount']);
    //     $cpTx = self::composeTransaction($data['txname']);
    //     $postData = json_encode($cpTx['result']);
    //     $tx = self::factoidSubmit($postData);

    //     return $tx;
    // }
}