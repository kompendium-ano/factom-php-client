<?php
namespace Factom\Api;

class Response
{
    public static function response($response)
    {
        $res = json_encode($response);
        $dres = json_decode($res, true);
        if(array_key_exists('result', $dres)){
            return $dres['result'];
        }elseif(array_key_exists('error', $dres)){
            return $dres['error'];
        }else{
            return $dres;
        }
    }
}