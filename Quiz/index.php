<?php
header("Content-Type: text/html; charset=UTF-8"); 
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<form method="post" action="index.php">

<form class="navbar-form navbar-left">
  <div class="form-group">

<h1>당신의 전생을 알려드립니다!</h1>
<h3>전생에 나는 누구와 결혼을 했을까?</h3>
<h4><?=$count?>명이 참여하였습니다.</h4>

    <input type="text" id="name" name="name" class="form-control" placeholder="이름을 입력하세요.">

</div>
  <button type="submit" class="btn btn-default">전생 보러가기</button>

</form>
