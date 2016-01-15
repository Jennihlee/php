<?php
session_start();
	$_SESSOIN['isLogin']=0;
        $_SESSION['name']='';
	$url="./postForm.php";
	header("Location: ". $url);
?>
