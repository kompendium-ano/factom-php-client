<?php
namespace Factom\Api;

class Errorhandling
{

     /* Method not found error */
 
    public static function checkError($err)    
    {
        
        if($err == "Method not found"){
            return $err;
        }
    }    
}
