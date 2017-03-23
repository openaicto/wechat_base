<?php
require('WechatToken.php');
require('WechatTpl.php');
require_once './oauth2/db.php';
$token = WechatToken::GetToken();
// $data = $_GET();

session_start();
$user = $_SESSION['user'];
$username = $user['nickname'];
// print_r($username);
$sql = "SELECT * from user where name = '{$username}';";
// print_r($sql);
$userData = $dbh->query($sql);

// $openid = $userData['openid'];
// print_r($userData);
// print_r($openid);
// die;
// 调用接口
// $push_url =  "https://api.weixin.qq.com/cgi-bin/template/api_set_industry?access_token=".$token;
$push_url =  "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=".$token;
// $openid = "oPs5ouD7vEwWZ6iB1udqtnFJqB-Q";
// $openid = "oPs5ouIqnAYKpOdmRnM8Unzef0LM";
// $openid = "oPs5ouLW3qg7P6CLj-jS7M1XVtSw";
$dataWechatTpl = "";
// foreach ($dbh->query('SELECT * from user') as $row) {
//     // print_r($row['openid']); //你可以用 echo($GLOBAL); 来看到这些值
//     $openid = $row['openid'];
//     // print_r($openid);
// }
    foreach ($userData as $row) {
        // print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
            $openid = $row['openid'];

		$dataWechatTpl =  WechatTpl::applyPass($openid);
		// die;
    }
$param = json_encode($dataWechatTpl);
// $param = $dataWechatTpl;
$result = Curl::CurlPost($push_url, $param);

// print_r($token);
print_r($result);