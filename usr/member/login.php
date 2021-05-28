<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인 페이지</title>
  
</head>
<body>
<h1>로그인</h1>
<hr>
<form method = "POST" action="doJoin.php">
<div>
<span>로그인 아이디</span>
<input required placeholder="로그인 아이디 입력" name = "logId">
</div>
<div>
<span>로그인 비밀번호</span>
<input required placeholder="로그인 비밀번호 입력" name = "logPw">
</div>
<div>
<hr>
<div>
<input type="submit", value="로그인">
</div>
</form>

</body>
</html>