<?php
/**
 * @Author: wangshudong
 * @Date:   2017-03-25 09:40:44
 * @Last Modified by:   wangshudong
 * @Last Modified time: 2017-03-25 09:49:19
 */

curl -H 'Host: m38235.nofollow.vx.mvote.cn' -H 'Accept: application/json, text/javascript, */*; q=0.01' -H 'X-Requested-With: XMLHttpRequest' -H 'Accept-Language: en-us' -H 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8' -H 'Origin: http://m38235.nofollow.vx.mvote.cn' -H 'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 10_2_1 like Mac OS X) AppleWebKit/602.4.6 (KHTML, like Gecko) Mobile/14D27 MicroMessenger/6.5.5 NetType/WIFI Language/zh_CN' -H 'Referer: http://m38235.nofollow.vx.mvote.cn/action/viewvotewxsearch.html?voteguid=d58ef00b-fe32-ca76-e969-48d38bef42fa&jumpnoweixin=0&searchkeyword=' -H 'Cookie: PHPSESSID=ef67e5022d70d189f52d4ff624ecc4d9; VIST-9da108c4-9c52-5a76-c4af-20fc48e589e320170325=9da108c4-9c52-5a76-c4af-20fc48e589e320170325; _ga=GA1.2.477314662.1490399142; mvotelang=cn; _gat=1; V-9da108c4-9c52-5a76-c4af-20fc48e589e320170325=1; WXVOA20170325-d58ef00b-fe32-ca76-e969-48d38bef42fa=oNrjcvqzMuz7Bvy8KbjcEKWFzKcY%7Cd58ef00b-fe32-ca76-e969-48d38bef42fa%7C4029688118ef0c7e257c0ba4396c6f17%7C1490399141%7Cvote' --data-binary "action=dovote&guid=d58ef00b-fe32-ca76-e969-48d38bef42fa&ops=1674509&wxparam=oNrjcvqzMuz7Bvy8KbjcEKWFzKcY%7Cd58ef00b-fe32-ca76-e969-48d38bef42fa%7C4029688118ef0c7e257c0ba4396c6f17%7C1490399141%7Cvote" --compressed 'http://m38235.nofollow.vx.mvote.cn/op.php'

require_once './Curl.php';

Curl::