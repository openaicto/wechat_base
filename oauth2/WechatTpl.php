<?php

class WechatTpl
{
    /**
     * 报名成功的微信模板消息
     * @param $openid openid
     * @param $account Account对象
     * @param $activity 活动对象
     * @return array
     */
    public static function applyPass($openid)
    {
        //获取成功的模板消息id
        $template_id = 'n3O6Yg5i75tMI1sDeKZPCTgJ33OJwG5cSdnBNgcQpkI';
        $user = User::findOne($user_id);
                    . '开始';

        $url = ''; //跳转的url
        $first_value = "恭喜，你报名的“微信开发”课程已通过筛选！请点击本消息支付活动费用";
        $remark_value = "【通知】你报名的“微信开发”已通过筛选，请您在24小时内支付活动费用，超时将视您为放弃活动，并得到一张“未支付”黄牌，请您关注服务号并进行支付。详见微信服务号(shudong)";
      

        $data = [
            "touser" => "{$openid}",
            "template_id" => $template_id,
            "url" => $url,
            "topcolor" => "#FF0000",
            "data" => [
                "first" => [
                    "value" => $first_value,
                    "color" => "#173177"
                ],
                "keyword1" => [
                    "value" => "{$user['username']}",
                    "color" => "#173177"
                ],
                "keyword2" => [
                    "value" => "{$activity['title']}",
                    "color" =>"#173177"
                ],
                "keyword3" => [
                    "value" => "{$start_time}",
                    "color" => "#173177"
                ],
                "keyword4" => [
                    "value" => "{$activity['address']}",
                    "color" => "#173177"
                ],
                "remark" => [
                    "value" => $remark_value,
                    "color" => "#173177"
                ],
            ]
        ];
        return $data;
    }

}
