<?php

$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_blog_2021") or die ("DB CONNECTION ERROR");

if(isset($_GET['loginId']) == false) {
  echo "loginId를 입력해주세요.";
  exit;
}

if(isset($_GET['loginPw']) == false) {
  echo "loginPw를 입력해주세요.";
  exit;
}

$loginId = $_GET['loginId'];
$loginPw = $_GET['loginPw'];

$sql = "
select * from member as m
where m.loginId = '${loginId}'
";

$rs = mysqli_query($dbConn, $sql);

if(empty($member)) {
  echo "존재하지 않는 회원입니다."
  exit;
}



?>

