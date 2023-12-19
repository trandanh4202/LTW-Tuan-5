<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="container">
      <div class="box">
        <div class="form sign_in">
          <h3>Đăng nhập</h3>
          <span>sử dụng tài khoản của bạn</span>

          <form  method="POST" id="form_input">
            <div class="type">
              <input type="email" placeholder="Email" name="email" id="email" />
            </div>
            <div class="type">
              <input
                type="password"
                placeholder="Password"
                name="password"
                id="password"
              />
            </div>

            <div class="forgot">
              <span>Quên mật khẩu?</span>
            </div>

            <button  type='submit' class="btn bkg" name="login">Đăng nhập</button>
          </form>
        </div>

        <div class="form sign_up">
    <h3>Đăng ký</h3>
    <span>sử dụng email để đăng ký</span>

    <form method="POST" id="form_input">
        <div class="type">
            <input
                type="text"
                name="name" 
                placeholder="Tên hiển thị"
                id="name"
            />
        </div>
        <div class="type">
            <input 
                type="tel" 
                name="sdt" 
                placeholder="SĐT của bạn" 
                id="tel" 
            />
        </div>
        <div class="type">
            <input 
                type="email" 
                name="gmail" 
                placeholder="Email của bạn" 
                id="email" 
            />
        </div>
        <div class="type">
            <input 
                type="password" 
                name="password" 
                placeholder="Mật khẩu của bạn" 
                id="password" 
            />
        </div>

        <button class="btn bkg" type="submit" name="register">Đăng ký</button>
    </form>
</div>

      </div>

      <div class="overlay">
        <div class="page page_signIn">
          <h3>Chào mừng trở lại !</h3>
          <p>Vui lòng đăng nhập đúng thông tin của bạn</p>

          <button class="btn btnSign-in">
            Đăng ký <i class="bi bi-arrow-right"></i>
          </button>
          <a class="btn home" href="/pages/home/home.html">Trang chủ</a>
        </div>

        <div class="page page_signUp">
          <h3>Chào bạn!</h3>
          <p>Sử dụng thông tin cá nhân chính xác bạn nhé</p>

          <button class="btn btnSign-up">
            <i class="bi bi-arrow-left"></i> Đăng nhập
          </button>
          <a class="btn home" href="/pages/home/home.html">Trang chủ</a>
        </div>
      </div>
    </div>
   

    <script src="./login.js"></script>
  </body>
</html>
<?php
require_once('../../user.php'); 

$error_message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) { 
        $username = $_POST['email'];
        $password = $_POST['password'];

        $user = user::login($username, $password);

        if ($user) {
          if ($user['role'] === 'admin') {
              header("Location: ../admin/productcrud.php");
          } else {
              header("Location: ../store/store.php");
          }
          exit();
      } else {
          $error_message = "Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin đăng nhập.";
      }
    } elseif (isset($_POST['register'])) {
        $name = $_POST['name'];
        $sdt = $_POST['sdt'];
        $gmail = $_POST['gmail'];
        $password = $_POST['password'];
        $new_user = new user($name, $sdt, $gmail, $password); 
        try {
          
            $new_user->insert();
            $error_message= "Đăng ký thành công!"; 
        } catch (\Throwable $th) {
          $error_message= "Đăng ký không thành công. Vui lòng thử lại."; 
        }
    }
}
?>

<div class="error-message">
    <?php echo $error_message; ?>
</div>

