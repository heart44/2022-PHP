<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <h1>회원가입</h1>
    <form action="register_proc.php" method="POST">
        <div><input type="text" name="u_id" placeholder="아이디"></div>
        <div><input type="password" name="u_pw" placeholder="비밀번호"></div>
        <div><input type="text" name="u_nick" placeholder="닉네임"></div>
        <div>
            <input type="submit" value="회원가입">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>