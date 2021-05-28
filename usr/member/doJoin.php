<?php
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_blog_2021") or die ("DB CONNECTION ERROR");

$loginId = $_POST['loginId'];
$loginPw = $_POST['loginPw'];
$name = $_POST['name'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$cellphoneNo = $_POST['cellphoneNo'];

$sql = "
insert into member
set loginId = $loginId,
loginPw = $loginPw,
`name` = `$name`,
nickname = $nickname,
email = $email,
cellphoneNo = $cellphoneNo
`regDate` = NOW(), 
`updateDate` = NOW();
";

$rs = mysqli_query($dbConn, $sql);

$id = mysqli_insert_id($dbConn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원가입</title>
  <script>
      alert("회원가입이 완료되었습니다.")
      location.replace("../article/list.php")
  </script>
</head>
<body>
    
</body>
</html>
