<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 작성</title>
</head>
<body>
    <h1>게시물 작성</h1>
    <hr>
    <form method = "POST" action="doWrite.php">
    <div>
    <span>제목</span>
    <input required placeholder="제목 입력" type="text" name = "title">
    </div>
    <div>
    <hr>
    <span>내용</span>
    <textarea required placeholder="내용 입력" name = "body"></textarea>
    </div>                    
    <hr>
    <div>  
    <input type="submit", value="글 작성">
    </div>
    </form>    
</body>
</html>