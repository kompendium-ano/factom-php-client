<?php 
namespace FactomApi;

use PhpJsonRpc\Client;

class Blocks
{

    /* ablock by height */

    public static function ablockByHeight()
    {
        $client = new Client(host);
        $result = $client->call('ablock-by-height', ["height"=> 1]);
        print_r($result);
    }
    
    /* ack */

    public static function ack($hash,$chainid)
    {
        $client = new Client(host);
        $result = $client->call('ack', ["hash"=>$hash, "chainid"=>$chainid, "fulltransaction"=>""]);
        print_r($result);
    } 

    /* admin block */
    
    public static function adminBlock($keymr)
    {
        //echo $keymr;
        $client = new Client(host);
        $result = $client->call('admin-block', ["keymr"=>$keymr]);
        print_r($result);
    }

    /* dblock by height */

    public static function dblockByHeight($height)
    {
       //echo $height;
        $client = new Client(host);
        $result = $client->call('dblock-by-height', ["height"=>$height]);
        print_r($result);
    }

    /* directoryBlock  */

    public static function directoryBlock($keymr)
    {
        
        $client = new Client(host);
        $result = $client->call('directory-block', ["keymr"=>$keymr]);
        print_r($result);
    }

    /* directory block head */

    public static function directoryBlockHead()
    {
        $client = new Client(host);
        $result = $client->call('directory-block-head',['']);
        print_r($result);
    }

    /* ecblock by height */

    public static function ecblockByHeight()
    {
        $client = new Client(host);
        $result = $client->call('ecblock-by-height',["height" => 10000]);
        print_r($result);
    }

    /* entry block */

    public static function entryBlock($keymr)
    {
        $client = new Client(host);
        $result = $client->call('entry-block',["keymr" => $keymr]);
        print_r($result);
    }

    /* entry credit block */

    public static function entryCreditBlock($keymr)
    {
        $client = new Client(host);
        $result = $client->call('entrycredit-block',["keymr" => $keymr]);
        print_r($result);
    }

    /* factoid block */

    public static function factoidBlock($keymr)
    {
        $client = new Client(host);
        $result = $client->call('factoid-block',["keymr" => $keymr]);
        print_r($result);
    }

    /* fblock by height */

    public static function fblockByHeight()
    {
        $client = new Client(host);
        $result = $client->call('fblock-by-height', ["height"=> 1]);
        print_r($result);
    }

}