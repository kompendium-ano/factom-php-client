<?php 
namespace FactomApi;
class FactomAddress
{
    public static function generateEcAddress()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => walletHost,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "{\"jsonrpc\": \"2.0\", \"id\": 0, \"method\": \"generate-ec-address\"}",
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return json_decode($response, true);
    }

    public static function generateFactoidAddress()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => walletHost,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "{\"jsonrpc\": \"2.0\", \"id\": 0, \"method\": \"generate-factoid-address\"}",
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return json_decode($response, true);
    }
}