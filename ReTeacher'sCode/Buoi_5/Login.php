<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2 style="color: green">Đăng Nhập</h2>
    <form action="XulyLogin.php" method="post" class="container">
        <p>Tài Khoản: 
            <input type="text" name="tUser" id="User"/>
        </p>
        <p>
            Mật khẩu: 
            <input type="password" name="tPassword" id="tPassword"/>
        </p>
        <p>
            <button type="submit" name="b1" id="b1" value="Đăng nhập">Đăng nhập</button> 
        </p>
     <?php
    $pass="123456";
    $md5=md5($pas);
    echo $md5;
     ?>
    </form>
</body>
</html>