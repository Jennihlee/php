<?php header("Content-Type: text/html; charset=UTF-8"); ?>

<?php
$name=$_POST['name'];
$password=$_POST['pw'];
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php
if($name=="id" && $password=="pw"){
	setCookie('isLogin', '1');
	setCookie('name', $name);
?> <h1>로그인 완료</h1>
I know you, <?=$name?>!<br>
Your password is <?=$password?><br>
<a href="./postForm.php">BACK</a>
<?php
}else{
	setCookie('isLogin', '0');
	setCookie('name', '');
?>
사용자가 없습니다.<br>
다시 로그인 해보세요.<br>
<a href="./postForm.php">BACK</a>
<?php } ?>