<?php 
header("Content-Type: text/html; charset=UTF-8");

$url=$_GET['url'];

$urls['n']="http://naver.com/";
$urls['m']="http://e-mirim.hs.kr/";
$urls['g']="http://github.com/";
$urls['f']="http://facebook.com/";

if(array_key_exists($url, $urls)){
	header("Location: ". $urls[$url]);
	exit();
}else{
	echo $url. "는 등록되어 있지 않습니다.";
}

/*
switch($url){
	case "네이버":
	header("Location: http://naver.com/");
	break;

	case "미림":
	header("Location: http://e-mirim.hs.kr/");
	break;

	case "깃허브":
        header("Location: https://github.com/");
        break;

	default: echo "기타 : " . $url ;
	break;
}
*/
