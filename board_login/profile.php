<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>프로필</title>
</head>
<body>
    <div>
        <?php include('header.php'); ?>
        <div>
            <div>
                <h3>프로필 이미지 디스플레이</h3>
            </div>
            <div>
                <form action="profile_proc.php" method="POST" enctype="multipart/form-data">
                    <div><label>이미지 <input type="file" name="img" accept="image/*"></label></div>
                    <div><input type="submit" value="업로드"></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>