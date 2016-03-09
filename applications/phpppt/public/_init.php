<?php
define('NET_ROOT', realpath(dirname(__FILE__) . '/..'));

function _header($content, $replace = true, $http_response_code = 0)
{
    if(!defined('WORKERMAN_ROOT_DIR'))
    {
        //return header($content, $replace, $http_response_code);
    }
    return \Workerman\Protocols\Http::header($content, $replace, $http_response_code);
}