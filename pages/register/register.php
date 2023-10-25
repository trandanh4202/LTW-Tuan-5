<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link href="register.css" rel="stylesheet" />
</head>
<?php
include('C:/xampp/htdocs/website/database.php');
?>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post">
        <h3>Đăng ký</h3>
        <label for="username">Họ và tên</label>
        <input type="text" placeholder="Họ và tên" name="fullname">

        <label for="username">Tài khoản</label>
        <input type="text" placeholder="Email hoặc số điện thoại" name="username">

        <label for="password">Mật khẩu</label>
        <input type="password" placeholder="Mật khẩu" name="password">

        <input class="buttonSubmit" type="submit" name="login" value="Đăng ký">
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = filter_input(INPUT_POST, "fullname", FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($fullname)) {
        echo "<script type='text/javascript'>alert('Nhập họ và tên');</script>";
    }elseif (empty($username)) {
        echo "<script type='text/javascript'>alert('Nhập tài khoản');</script>";
    } elseif (empty($password)) {
        echo "<script type='text/javascript'>alert('Nhập mật khẩu');</script>";
    } else {
        //password hashing
        $pwHash = password_hash($password, PASSWORD_DEFAULT);
        try {
            $sql = "INSERT INTO user (FULLNAME, ACCOUNT, PASSWORD, USERROLE) VALUES ('$fullname','$username','$pwHash',2)";
            mysqli_query($conn, $sql);
            echo "<script type='text/javascript'>alert('Đăng ký thành công');</script>";
            
        } catch (mysqli_sql_exception) {
            echo "<script type='text/javascript'>alert('Tài khoản đã tồn tại');</script>";
        }
    }
}

?>