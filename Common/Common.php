<?php namespace Common;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class Helper{
    /**
     * 用于接口调用的app_secret
     * @var string
     */
    static public $app_secret = 'dzkcw_mak';
    
    /**
     * 用于内容加密content_secret
     * @var string
     */
    //static public $content_secret = 'dzkcw_content';
    
    /**
     * 用于验证用户真实性
     * @var string
     */
    static public $auth_secret = 'dzkcw_auth';
    
    /**
     * 发送get请求
     * @return array
     */
    static public function sendHttp(){
        $client = new Client();
        $request = $client->get('http://lrz.ucenter.com/api/router');
    
        return json_decode($request->getBody(),true);
    }
    
}