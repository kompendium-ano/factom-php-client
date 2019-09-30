<?php 
namespace FactomApi;
class AddressBalance
{
    // Get Factoid Address Balance
    public static function getFactoidAddressBalance($address)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => host,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"jsonrpc\": \"2.0\", \"id\": 0, \"method\": \"factoid-balance\", \"params\":{\"address\":\"".$address."\"}}",
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return json_decode($response, true);
    }

    // Get Factoid Address Balance
    public static function getECAddressBalance($address)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => host,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"jsonrpc\": \"2.0\", \"id\": 0, \"method\": \"entry-credit-balance\", \"params\":{\"address\":\"".$address."\"}}",
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return json_decode($response, true);
    }
}