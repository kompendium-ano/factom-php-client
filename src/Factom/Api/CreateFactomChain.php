<?php 
namespace Factom\Api;

class CreateFactomChain
{
    // Chain Submit Chain
    public static function commitChain($data){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => host,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        return $response;
    }
    
    // Create a Factom Chain
    public static function createFactomChain($ecpub)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => walletHost,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\n    \"jsonrpc\": \"2.0\",\n    \"id\": 0,\n    \"method\": \"compose-chain\",\n    \"params\": {\n        \"chain\": {\n            \"firstentry\": {\n                \"extids\": [\n                    \"61626364\",\n                    \"31323334\"\n                ],\n                \"content\": \"3132333461626364\"\n            }\n        },\n        \"ecpub\": \"".$ecpub."\"\n    }\n}",
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        
        $response = json_decode($response, true);

        $commitData = self::commitChain(json_encode($response['result']['commit']));
        $revealData = self::commitChain(json_encode($response['result']['reveal']));

        $resData=[
            "jsonrpc"=> "2.0",
            "id"=> 0,
            "result"=> [
                "composeChain"=> $response,
                "commitChain"=> $commitData,
                "revealChain"=> $revealData
            ]
        ];

        return $resData;
    }

    // Make a Factom Entry
    public static function makeFactomEntry($chainid, $ecpub)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => walletHost,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\n    \"jsonrpc\": \"2.0\",\n    \"id\": 0,\n    \"method\": \"compose-entry\",\n    \"params\": {\n        \"entry\": {\n            \"chainid\": \"".$chainid."\",\n            \"extids\": [\n                \"cd90\",\n                \"90cd\"\n            ],\n            \"content\": \"abcdef\"\n        },\n        \"ecpub\": \"".$ecpub."\"\n    }\n}",
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $response = json_decode($response, true);

        return $response;
    }
}