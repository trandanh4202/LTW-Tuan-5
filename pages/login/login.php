<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="login.css" rel="stylesheet" />
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
        <h3>Đăng nhập</h3>

        <label for="username">Tài khoản</label>
        <input type="text" placeholder="Email hoặc số điện thoại" name="username">

        <label for="password">Mật khẩu</label>
        <input type="password" placeholder="Mật khẩu" name="password">

        <input class="buttonSubmit" type="submit" name="login" value="Đăng nhập">
    </form>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        if(empty($username)){
            echo"<script type='text/javascript'>alert('Nhập tài khoản');</script>";
        }elseif(empty($password)){
            echo"<script type='text/javascript'>alert('Nhập mật khẩu');</script>";
        }
        else{            
            try{
                $pwHash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "SELECT * FROM user WHERE ACCOUNT = '$username'";
                $result = mysqli_query($conn,$sql);
                $check = mysqli_fetch_array($result);
                if(isset($check)){
                    if (password_verify($password, $check['PASSWORD'])) { // correct pw
                        echo"<script type='text/javascript'>alert('Đăng nhập thành công');</script>";
                    }
                }else{
                    echo"<script type='text/javascript'>alert('Sai tài khoản hoặc mật khẩu');</script>";
                }
                mysqli_close($conn);
            }catch(mysqli_sql_exception){
                
            }
        }
    }
    //password hashing
    // $pwHash = password_hash($password, PASSWORD_DEFAULT);
    // if (password_verify("", $pwHash)) { // correct pw

    // }
?>