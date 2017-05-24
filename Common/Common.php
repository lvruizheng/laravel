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
    
    
    /**
     * 发送get请求
     * @return array
     */
    static public function sendHttp($url){
        $client = new Client();
        $request = $client->get($url);
    
        return json_decode($request->getBody(),true);
    }
    
    /**
     * md5方式签名
     * @param  array $params 待签名参数
     * @return string
     */
    static public function generateMd5Sign($params)
    {
        ksort($params);
    
        $tmps = array();
        foreach ($params as $k => $v) {
            $tmps[] = $k . $v;
        }
    
        $string = self::$app_secret . implode('', $tmps) . self::$app_secret;
    
        return strtoupper(md5($string));
    }
    
}