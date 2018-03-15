<?php namespace Common;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Config;

class Common{
    /**
     * 用于接口调用的app_secret
     * @var string
     */
    static public $app_secret = 'dzkcw_mak';
    
    /**
     * 用于验证用户真实性
     * @var string
     */
    static public $auth_secret = 'dzkcw_auth';
    
    
}