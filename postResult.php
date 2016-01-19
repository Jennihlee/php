<?php 
session_start();
header("Content-Type: text/html; charset=UTF-8"); 
include('db.php');
?>

<?php
$name=$_POST['name'];
$password=$_POST['pw'];
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php
$link = mysql_connect($db['host'], $db['user'], $db['pw']);
if (!$link) {
    die('Not connected : ' . mysql_error());
}

$sql="select * from members where is='".$name."' and pw=password('".$password."')";

echo $sql;

$result=mysql_query($sql);
$users=mysql_fetch_assoc($result);

echo "<pre>";
print_r($users);
echo"</pre>";
mysql_close($link);

if($name=="id" && $password=="pw"){
	$_SESSOIN['isLogin']=1;
	$_SESSION['name']=$name;
?> <h1>로그인 완료</h1>
I know you, <?=$name?>!<br>
Your password is <?=$password?><br>
<a href="./postForm.php">BACK</a>
<?php
}else{
	$_SESSOIN['isLogin']=0;
        $_SESSION['name']='';
?>
사용자가 없습니다.<br>
다시 로그인 해보세요.<br>
<a href="./postForm.php">BACK</a>
<?php } ?>
