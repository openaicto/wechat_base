<?php
//https://api.douban.com/v2/movie/search?q=
require('./Curl.php');
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
	$content = "钢铁侠";
	$result = SearchMovie::search($content);
	// $result = json_decode($result);

	print_r($result);