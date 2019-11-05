<?php
namespace Factom\Api;

class Response
{
    public static function response($response)
    {
        $res = json_encode($response);
        $dres = json_decode($res);

        return $dres;       
    }
}