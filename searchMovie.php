<?php
//https://api.douban.com/v2/movie/search?q=
require_once('./Curl.php');
/**
* 搜索电影
*/
class SearchMovie
{

	public static function search($content)
	{
		$url = "https://api.douban.com/v2/movie/search?total=10&q=".$content;
		$data = Curl::CurlGet($url);
		$data = json_decode($data);
		$data = self::ObjectArray($data);
		// print_r($data['subjects']);
		return $data['subjects'];
	}

	/**
	 * 搜索电影
	 * @param  string $content 搜索电影的关键字
	 * @return  array 返回搜索的数据
	 */
	public static function getMoiveData($content)
	{
		//根据搜索的内容返回数据
		 $url = "https://api.douban.com/v2/movie/search?total=10&q=".$content;
		 $data = Curl::CurlGet($url);
		 $data = json_decode($data);
		 $data = self::ObjectArray($data);
		 $data = $data['subjects'];
		//把数据格式化解析返回
		 return $data;
	}

	public static function ObjectArray($array) {  
	    if(is_object($array)) {  
	        $array = (array)$array;  
	     } if(is_array($array)) {  
	         foreach($array as $key=>$value) {  
	             $array[$key] = self::ObjectArray($value);  
	             }  
	     }  
	     return $array;  
	}
}
	// $content = "钢铁侠";
	// $result = SearchMovie::getMoiveData($content);
	// 		// $result = SearchMovie::getMoiveData($content);
	// 	$data = [];
	// 	foreach ($result as $value) {
	// 		$desc = implode(",", $value['genres']);
	// 		$data[] = [
	//                 	'title'=>$value['title'],
	//                 	'url'=>$value['alt'],
	//                 	'picurl'=>$value['images']['medium'],
	//                 	'desc'=>$desc,
 //                	];
	// 	}
	// $result = json_decode($result);

	// print_r(array_slice($data,1,8));