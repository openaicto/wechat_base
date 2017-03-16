<?php
/**
* 
*/
require('Config.php');
require('Curl.php');

class WechatToken 
{
	
	public static function GetToken ()
	{
		$weixin_token = Config::TOKEN;
        $appid = Config::APPID;
        $secret = Config::APPSECRET;
        
        $url_get = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$secret;

        $json = Curl::CurlGet($url_get);
        // $json=$this->curlGet($url_get);
        $weixin_token =  json_decode($json);
        // print_r($weixin_token);
        return $weixin_token=$weixin_token->access_token;

        // $weixin_token = Config::TOKEN;
        // $appid = Config::APPID;
        // $secret = Config::APPSECRET;
        // $url_get = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$secret;
        // $json=$this->curlGet($url_get);
        // $weixin_token =  json_decode($json);
        // $weixin_token=$weixin_token->access_token;
	}
}

// $token = WechatToken::GetToken();
// print_r($token);