<?php
namespace Factom\Api;

class Errorhandling
{

     /* Method not found error */
 
    public static function checkError($err, $name)    
    {
        
        if($err == "Method not found"){
            return $name." ".$err."
Please check your URL you provide is correct (factomd API call to factomd, wallet API call to factom-walletd API URL)";
        }else{
            return $err;
        }
    }    
}
