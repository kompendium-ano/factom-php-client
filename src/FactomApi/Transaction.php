<?php 
namespace FactomApi;
class Transaction
{
    // new-transaction (where you provide the TX-NAME)
    public static function newTransactionn($txname){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => walletHost,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "{\"jsonrpc\": \"2.0\", \"id\": 0, \"method\":\"new-transaction\", \"params\":{\"tx-name\":\"".$txname."\"}}",
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "content-type: text/plain;"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        return $response;
    }

    // add-input
    public static function addInput($txname, $inputAddress, $amount){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => walletHost,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"jsonrpc\":\"2.0\",\"id\":0,\"method\":\"add-input\",\"params\":\n{\"tx-name\":\"".$txname."\",\"address\":\"".$inputAddress."\",\"amount\":".$amount."}}",
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "content-type: text/plain;"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        return $response;
    }

    // add-output
    public static function addOutput($txname, $outputAddress, $amount){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => walletHost,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"jsonrpc\":\"2.0\",\"id\":0,\"method\":\"add-output\",\"params\":{\"tx-name\":\"".$txname."\",\"address\":\"".$outputAddress."\",\"amount\":".$amount."}}",
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "content-type: text/plain;"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        return $response;
    }

    // sign-transaction
    public static function signTransaction($txname){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => walletHost,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"jsonrpc\":\"2.0\", \"id\":0, \"method\":\"sign-transaction\", \"params\":{\"tx-name\":\"".$txname."\"}}",
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "content-type: text/plain"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        return $response;
    }

    // compose-transaction
    public static function composeTransaction($txname){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => walletHost,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"jsonrpc\":\"2.0\", \"id\":0, \"method\":\"compose-transaction\", \"params\":{\"tx-name\":\"".$txname."\"}}",
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "content-type: text/plain"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        return $response;
    }

    // factoid-submit
    public static function factoidSubmit($postData){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => host,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $postData,
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "content-type: text/plain;"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        return $response;
    }

    // send-transaction
    public static function sendTransaction($data){
        $newTx = self::newTransactionn($data['txname']);
        $input = self::addInput($data['txname'], $data['inputAddress'], $data['inputAmount']);
        $output = self::addOutput($data['txname'], $data['outputAddress'], $data['outputAmount']);
        $cpTx = self::composeTransaction($data['txname']);
        $postData = json_encode($cpTx['result']);
        $tx = self::factoidSubmit($postData);

        return $tx;
    }
}