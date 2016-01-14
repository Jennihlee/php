<?php
header("Content-Type: text/html; charset=UTF-8");

$goodsid=$_GET['goodsid'];
if($goodsid==""){
	$goodsid="아무값도없습니다";
}
?>

<a href="./get.php?goodsid=12345" target="_self">
./get.php?goodsid=12345
</a>

<hr>goodsid는 "<?php echo $_GET['goodsid']; ?>"입니다.
<hr>goodsid는 "<?=$goodsid?>"입니다.

<hr>현재 넘겨진 값<br >
<pre>
<?php print_r($_GET); ?>
</pre>
