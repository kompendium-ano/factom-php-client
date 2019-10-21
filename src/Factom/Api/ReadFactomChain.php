<?php 
namespace Factom\Api;

class ReadFactomChain
{
    // Read Chain Entry
    public static function readChainEntry($entryHash){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => host,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\n    \"jsonrpc\": \"2.0\",\n    \"id\": 0,\n    \"method\": \"entry\",\n    \"params\": {\n        \"hash\": \"".$entryHash."\"\n    }\n}",
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "Content-Type: application/json"
            )
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $response = json_decode($response, true);

        return $response;
    }
}