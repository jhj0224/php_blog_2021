<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원가입 페이지</title>
  
</head>
<body>
<h1>회원가입</h1>
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
<span>이름</span>
<input required placeholder="이름 입력" name = "name">
</div>
<div>
<span>별명</span>
<input required placeholder="별명 입력" name = "nickname">
</div>
<div>
<span>이메일</span>
<input required placeholder="이메일 입력" name = "email">
</div>
<div>
<span>휴대 전화번호</span>
<input required placeholder="휴대 전화번호 입력" name = "cellphoneNo">
</div>
<hr>
<div>
<input type="submit", value="회원가입">
</div>
</form>

</body>
</html>