<?php
require('WechatToken.php');
$token = WechatToken::GetToken();
$create_menu = " https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$token;
 		$param = [
            [
                'name' => 'jssdk',
                'sub_button' => [
                    [
                        'type' => 'view',
                        'name' => '上传图片',
                        'url' => 'picture.php'
                    ],
                    [
                        'type' => 'view',
                        'name' => '地理位置',
                        'url' => 'where.php'
                    ],
                    [
                        'type' => 'view',
                        'name' => '语音功能',
                        'url' => 'voice.php'
                    ],[
                        'type' => 'view',
                        'name' => '分享',
                        'url' => 'share.php'
                    ],
  
                ]
            ],
            [
                'name' => '呵呵',
                'sub_button' => [
                    [
                        'type' => 'view',
                        'name' => '百度',
                        'url' => 'www.baidu.com'
                    ],
                ]
            ],
            [
                'type' => 'view',
                'name' => '嘿嘿',
                'url' => 'www.baidu.com'
            ],

        ];
$param = json_encode($param);
$result = Curl::CurlPost($create_menu, $param);


